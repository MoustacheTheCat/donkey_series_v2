<?php

namespace App\Entity;

use App\Repository\CategoryRepository;

use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata as Api;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;

use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

use Gedmo\Timestampable\Traits\TimestampableEntity;
use Gedmo\Mapping\Annotation as Gedmo;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[ApiResource(
    operations: [
        new GetCollection(normalizationContext: ['groups' => 'category:item']),
        new Get(normalizationContext: ['groups' => 'category:item'])
    ]
)]
class Category
{

    use TimestampableEntity;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['category:item'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    #[Assert\Length(max: "255")]
    #[Groups(['category:item'])]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Program::class, orphanRemoval: true)]
    #[Groups(['category:item'])]
    private Collection $programs;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank()]
    #[Gedmo\Slug(fields: ['name'], updatable: false)]
    private ?string $slug = null;

    public function __construct()
    {
        $this->programs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }

    /**
     * @return Collection<int, Program>
     */
    public function getPrograms(): Collection
    {
        return $this->programs;
    }

    public function addProgram(Program $program): static
    {
        if (!$this->programs->contains($program)) {
            $this->programs->add($program);
            $program->setCategory($this);
        }

        return $this;
    }

    public function removeProgram(Program $program): static
    {
        if ($this->programs->removeElement($program)) {
            // set the owning side to null (unless already changed)
            if ($program->getCategory() === $this) {
                $program->setCategory(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }
}
