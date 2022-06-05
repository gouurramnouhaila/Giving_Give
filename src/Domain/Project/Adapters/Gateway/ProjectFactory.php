<?php


namespace App\Domain\Project\Adapters\Gateway;


use App\Domain\Project\UseCase\AddProject\AddProjectRequest;
use App\Domain\Project\UseCase\AddProject\AddProjectResponse;

class ProjectFactory implements \App\Domain\Project\UseCase\Gateway\ProjectFactory
{

    public function createProject(AddProjectRequest $request): AddProjectResponse
    {
        return (new AddProjectResponse())
            ->setObjectiveFund($request->getObjectiveFund())
            ->setPhoto($request->getPhoto())
            ->setDateCreated($request->getDateCreated())
            ->setDescription($request->getDescription())
            ->setVideo($request->getVideo())
            ->setTitle($request->getTitle());
    }
}