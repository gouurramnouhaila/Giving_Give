<?php


namespace App\Domain\Project\Entities;

use phpDocumentor\Reflection\Types\Boolean;
use App\Domain\Project\Adapters\Gateway\Doctrine\Project as ProjectDoctrine;

interface ProjectRepository
{
    /**
     * @return mixed
     */
    public function findAll();

    /**
     * @param Project $project
     * @return mixed
     */
    public function add(Project $project);

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);

    /**
     * @param Project $project
     * @return ProjectDoctrine
     */
    public function update(Project $project): ProjectDoctrine;

    /**
     * @param Project $project
     * @return mixed
     */
    public function accept(Project $project);

    /**
     * @param Project $project
     * @return mixed
     */
    public function reject(Project $project);

    /**
     * @param string $keyword
     * @return mixed
     */
    public function search(string $keyword);


}