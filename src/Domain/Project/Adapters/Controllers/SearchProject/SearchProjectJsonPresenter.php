<?php


namespace App\Domain\Project\Adapters\Controllers\SearchProject;


use App\Domain\Project\Entities\Project;
use App\Domain\Project\UseCase\SearchProject\SearchProjectPresenterInterface;
use App\Domain\Project\UseCase\SearchProject\SearchProjectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class SearchProjectJsonPresenter implements SearchProjectPresenterInterface
{
    public $projects;

    /**
     * @inheritDoc
     */
    public function present(SearchProjectResponse $searchProjectResponse)
    {
        $this->projects = $searchProjectResponse->projects;
    }

    public function getResponse(SerializerInterface $serializer): JsonResponse {

        return new JsonResponse([
            'projects' => $serializer->serialize($this->projects, 'json')
        ]);
    }
}