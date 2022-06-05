<?php


namespace App\Domain\Project\Adapters\Controllers\SearchProject;


use App\Domain\Project\Adapters\Controllers\SearchProject\SearchProjectJsonPresenter;
use App\Domain\Project\UseCase\SearchProject\SearchProject;
use App\Domain\Project\UseCase\SearchProject\SearchProjectRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class SearchProjectController
{

    /**
     * @Route(path="/projects/{keyword}/search",name="app_projects_search",methods={"GET"})
     */
    public function __invoke(SearchProject $useCase, Request $request,SerializerInterface $serializer)
    {
        $presenter = new SearchProjectJsonPresenter();

        $keyword = $request->get('keyword');

        $requestDto = new SearchProjectRequest($keyword);

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse($serializer);
    }
}