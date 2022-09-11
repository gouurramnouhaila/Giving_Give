<?php

namespace App\Domain\Project\UseCase\Category\ListCategory;

use Symfony\Component\HttpFoundation\JsonResponse;

interface ListCategoryPresenterInterface
{
    /**
     * @param ListCategoryResponse $categoryResponse
     * @return void
     */
    public function present(ListCategoryResponse $categoryResponse): void;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}