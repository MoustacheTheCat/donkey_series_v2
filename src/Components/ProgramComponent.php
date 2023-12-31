<?php

namespace App\Components;

use App\Entity\Program;
use App\Repository\ProgramRepository;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\AnonymousComponent;

#[AsTwigComponent]
class ProgramComponent
{
    public int $id;
    
    public function __construct(
        private ProgramRepository $programRepository
    ) {
    }

    public function getProgram(): Program
    {
        
        return $this->programRepository->find($this->id);
    }
    
}
