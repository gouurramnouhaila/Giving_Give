<?php

namespace App\Domain\Project\Adapters\Controllers\Category\ListCategory;

use App\Domain\Project\UseCase\Category\ListCategory\ListCategory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;


class ListCategoryController
{
    /**
     * @Route(path="/api/categories",name="app_categories_all")
     */
    public function __invoke(ListCategory $useCase, SerializerInterface $serializer): JsonResponse
    {
        $presenter = new ListCategoryJsonPresenter($serializer);

        $useCase->execute($presenter);

        return $presenter->getResponse();
    }
}