<?php

namespace App\Components;

use App\Repository\CategoryRepository;


use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
class CategorySearchComponent
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public string $query = '';

    public function __construct(
        private CategoryRepository $categoryRepository
    ) {
    }

    public function getCategories(): array
    {
        return $this->categoryRepository->findByQuery($this->query);
    }

}
