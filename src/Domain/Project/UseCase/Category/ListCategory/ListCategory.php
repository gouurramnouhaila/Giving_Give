<?php

namespace App\Domain\Project\UseCase\Category\ListCategory;

use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineCategoryRepository;

class ListCategory
{
    private DoctrineCategoryRepository $categoryRepository;

    /**
     * @param DoctrineCategoryRepository $categoryRepository
     */
    public function __construct(DoctrineCategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function execute(ListCategoryPresenterInterface $presenter): void {
        $categories = $this->categoryRepository->findAll();

        $categoryResponse = new ListCategoryResponse($categories);

        $presenter->present($categoryResponse);

    }
}