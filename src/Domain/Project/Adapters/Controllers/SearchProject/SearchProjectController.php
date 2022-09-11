<?php


namespace App\Domain\Project\Adapters\Controllers\SearchProject;


use App\Domain\Project\Adapters\Controllers\SearchProject\SearchProjectJsonPresenter;
use App\Domain\Project\UseCase\SearchProject\SearchProject;
use App\Domain\Project\UseCase\SearchProject\SearchProjectRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class SearchProjectController
{

    /**
     * @Route(path="/api/projects/{keyword}/search",name="app_projects_search",methods={"GET"})
     */
    public function __invoke(SearchProject $useCase, Request $request,SerializerInterface $serializer): JsonResponse
    {
        $presenter = new SearchProjectJsonPresenter($serializer);

        $requestDto = new SearchProjectRequest($request->get('keyword'));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse($serializer);
    }
}