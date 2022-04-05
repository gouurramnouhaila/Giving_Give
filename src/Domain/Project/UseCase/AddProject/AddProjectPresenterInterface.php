<?php


namespace App\Domain\Project\UseCase\AddProject;


interface AddProjectPresenterInterface
{
    /**
     * @param AddProjectResponse $projectResponse
     * @return mixed
     */
    public function present(AddProjectResponse $projectResponse);
}