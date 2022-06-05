<?php


namespace App\Domain\Project\UseCase\Gateway;


use App\Domain\Project\Entities\Project;
use App\Domain\Project\UseCase\AddProject\AddProjectRequest;
use App\Domain\Project\UseCase\AddProject\AddProjectResponse;

interface ProjectFactory
{
    public function createProject(AddProjectRequest $request): AddProjectResponse;
}