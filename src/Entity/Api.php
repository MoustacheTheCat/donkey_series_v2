<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ApiRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ApiRepository::class)]
#[ApiResource]
class Api
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
