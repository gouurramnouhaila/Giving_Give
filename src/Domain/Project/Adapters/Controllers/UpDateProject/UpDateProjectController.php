<?php


namespace App\Domain\Project\Adapters\Controllers\UpDateProject;

use App\Domain\Project\Adapters\Controllers\UpDateProject\UpDateProjetJsonPresenter;
use App\Domain\Project\UseCase\UpDateProject\UpDateProject;
use App\Domain\Project\UseCase\UpDateProject\UpDateProjectRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UpDateProjectController
{
    /**
     * @param UpDateProject $usecase
     * @param Request $request
     * @throws \App\Domain\Project\Entities\Exceptions\ProjectNotFoundException
     * @Route(path="/projects/{id}/update",name="app_project_update",methods={"PUT"})
     *
     */
    public function __invoke(UpDateProject $usecase, Request $request)
    {
        $presenter = new \App\Domain\Project\Adapters\Controllers\UpDateProject\UpDateProjetJsonPresenter();

        $data = json_decode($request->getContent(), true);
        $id = intval( $request->get('id'));

        $requestDto = new UpDateProjectRequest( $id,$data['title'], $data['description'], $data['photo'], $data['video'], $data['objectiveFund'],$data['projectHolderId'], $data['categoryId']);

        $usecase->execute($requestDto, $presenter);

        return $presenter->getResponse();
    }

}