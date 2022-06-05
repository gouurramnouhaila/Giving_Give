<?php


namespace App\Domain\Project\UseCase\ListProjects;


use phpDocumentor\Reflection\Project;

class ListProjectsResponse
{
    public $projects;


    public function __construct($projects)
    {
        $this->projects = $projects;
    }
}