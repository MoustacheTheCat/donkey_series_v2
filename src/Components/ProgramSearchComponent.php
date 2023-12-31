<?php

namespace App\Components;

use App\Repository\ProgramRepository;
use App\Repository\CategoryRepository;
use App\Repository\ActorRepository;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
class ProgramSearchComponent
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public string $query = '';

    public function __construct(
        private ProgramRepository $programRepository,
        private CategoryRepository $categoryRepository,
        private ActorRepository $actorRepository
    ) {
    }

    public function getPrograms(): array
    {
        return $this->programRepository->findByQuery($this->query);
    }

}
