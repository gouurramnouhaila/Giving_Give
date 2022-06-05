<?php


namespace App\Domain\Project\UseCase\SearchProject;


class SearchProjectResponse
{
    public $projects;

    public function __construct($projects)
    {
        $this->projects = $projects;
    }
}