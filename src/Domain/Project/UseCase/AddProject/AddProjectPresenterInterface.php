<?php


namespace App\Domain\Project\UseCase\AddProject;


use App\Domain\Project\Entities\Project;

interface AddProjectPresenterInterface
{
    /**
     * @param AddProjectResponse $projectResponse
     * @return void
     */
    public function present(Project $projectResponse): void ;
}