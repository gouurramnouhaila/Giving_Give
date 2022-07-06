<?php


namespace App\Domain\Project\Adapters\Controllers\ListProject;



use App\Domain\Project\UseCase\ListProjects\ListProjectsPresenterInterface;
use App\Domain\Project\UseCase\ListProjects\ListProjectsResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;

class ListProjectJsonPresenter implements ListProjectsPresenterInterface
{
    public $projects;

    /**
     * @inheritDoc
     */
    public function present(ListProjectsResponse $listProjectsResponse)
    {
        $this->projects = $listProjectsResponse->projects;
    }

    public function getResponse(SerializerInterface $serializer): JsonResponse {

        return new JsonResponse($serializer->serialize(
            $this->projects, JsonEncoder::FORMAT), 200, [], true);
    }
}