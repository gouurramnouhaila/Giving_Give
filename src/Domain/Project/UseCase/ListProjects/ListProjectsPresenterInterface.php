<?php


namespace App\Domain\Project\UseCase\ListProjects;


interface ListProjectsPresenterInterface
{
    /**
     * @param ListProjectsResponse $listProjectsResponse
     * @return mixed
     */
    public function present(ListProjectsResponse $listProjectsResponse);
}