<?php

namespace App\Components;

use App\Repository\ProgramRepository;
use App\Repository\CategoryRepository;
use App\Repository\ActorRepository;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
class ActorSearchComponent
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public string $query = '';

    public function __construct(
            private ActorRepository $actorRepository
    ) {
    }

    public function getActors(): array
    {
        return $this->actorRepository->findByQuery($this->query);
    }

}
