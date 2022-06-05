<?php


namespace App\Domain\Project\UseCase\DeleteProject;


interface DeleteProjectPresenterInterface
{
    /**
     * @param DeleteProjectResponse $deleteProjectResponse
     * @return mixed
     */
    public function present(DeleteProjectResponse $deleteProjectResponse);
}