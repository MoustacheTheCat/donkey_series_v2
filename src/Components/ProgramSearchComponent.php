<?php

namespace App\Components;

use App\Repository\ProgramRepository;

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
        private ProgramRepository $programRepository
    ) {
    }

    public function getPrograms(): array
    {
        return $this->programRepository->findByQuery($this->query);
    }

}
