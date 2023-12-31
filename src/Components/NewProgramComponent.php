<?php

namespace App\Components;


use App\Repository\ProgramRepository;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\AnonymousComponent;

#[AsTwigComponent]
class NewProgramComponent
{

    public function __construct(
        private ProgramRepository $programRepository
    ) {
    }

    public function getNewProgram(): array
    {
        return $this->programRepository->findByAllAndReturnNews();
    }
    
}