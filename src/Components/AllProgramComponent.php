<?php

namespace App\Components;


use App\Repository\ProgramRepository;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\AnonymousComponent;

#[AsTwigComponent]
class AllProgramComponent
{

    public function __construct(
        private ProgramRepository $programRepository
    ) {
    }

    public function getAllProgram(): array
    {
        
    return $this->programRepository->findAll();
    }
    
}