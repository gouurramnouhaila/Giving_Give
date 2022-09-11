<?php

namespace App\Domain\Project\Adapters\Controllers\Category\ListCategory;

use App\Domain\Project\UseCase\Category\ListCategory\ListCategoryPresenterInterface;
use App\Domain\Project\UseCase\Category\ListCategory\ListCategoryResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;

class ListCategoryJsonPresenter implements ListCategoryPresenterInterface
{
    private ?array $categories = null;

    private SerializerInterface $serializer;

    /**
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function present(ListCategoryResponse $categoryResponse): void
    {
        $this->categories = $categoryResponse->getCategories();
    }

    public function getResponse(): JsonResponse
    {
        return new JsonResponse($this->serializer->serialize(
            $this->categories, JsonEncoder::FORMAT), 200, [], true);
    }
}