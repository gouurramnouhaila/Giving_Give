<?php


namespace App\Domain\Project\UseCase\ListProjects;

class ListProjectsResponse
{
    public ?array $projects = null;

    /**
     * @param array|null $projects
     */
    public function __construct(?array $projects)
    {
        $this->projects = $projects;
    }


}