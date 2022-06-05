<?php


namespace App\Domain\Project\UseCase\RejectProject;


interface RejectProjectPresenterInterface
{
    /**
     * @param RejectProjectResponse $rejectProjectResponse
     * @return mixed
     */
    public function present(RejectProjectResponse $rejectProjectResponse);
}