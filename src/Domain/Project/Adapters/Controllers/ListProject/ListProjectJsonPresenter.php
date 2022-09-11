<?php


namespace App\Domain\Project\Adapters\Controllers\ListProject;


use App\Domain\Project\UseCase\ListProjects\ListProjectsPresenterInterface;
use App\Domain\Project\UseCase\ListProjects\ListProjectsResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;


class ListProjectJsonPresenter implements ListProjectsPresenterInterface
{
    public ?array $projects = null;

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
    public function present(ListProjectsResponse $listProjectsResponse): void
    {
        $this->projects = $listProjectsResponse->projects;
    }

    public function getResponse(): JsonResponse {
        return new JsonResponse($this->serializer->serialize(
            $this->projects, JsonEncoder::FORMAT), 200, [], true);
    }
}