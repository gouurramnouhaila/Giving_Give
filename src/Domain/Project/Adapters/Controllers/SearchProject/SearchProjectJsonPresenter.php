<?php


namespace App\Domain\Project\Adapters\Controllers\SearchProject;

use App\Domain\Project\UseCase\SearchProject\SearchProjectPresenterInterface;
use App\Domain\Project\UseCase\SearchProject\SearchProjectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;

class SearchProjectJsonPresenter implements SearchProjectPresenterInterface
{
    public $projects;

    private SerializerInterface $serializer;

    /**
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @inheritDoc
     */
    public function present(SearchProjectResponse $projectResponse): void
    {
        $this->projects = $projectResponse->projects;
    }

    public function getResponse(): JsonResponse {
        return new JsonResponse($this->serializer->serialize(
            $this->projects, JsonEncoder::FORMAT), 200, [], true);
    }
}