<?php


namespace App\Domain\Project\UseCase\DeleteProject;


class DeleteProjectRequest
{
    private int $idProject;

    /**
     * DeleteProjectRequest constructor.
     * @param int $idProject
     */
    public function __construct(int $idProject)
    {
        $this->idProject = $idProject;
    }

    /**
     * @return int
     */
    public function getIdProject(): int
    {
        return $this->idProject;
    }




}