<?php


namespace App\Domain\Project\Entities;

interface ProjectRepository
{
    /**
     * @return mixed
     */
    public function findAll();

    /**
     * @param int $id
     * @return Project
     */
    public function find(int $id): Project;

    /**
     * @param Project $project
     * @return void
     */
    public function add(Project $project): void;

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool;

    /**
     * @param Project $project
     * @return Project
     */
    public function update(Project $project): Project;

    /**
     * @param int $id
     * @return void
     */
    public function accept(int $id);

    /**
     * @param int $id
     * @return void
     */
    public function reject(int $id): void;

    /**
     * @param string $keyword
     * @return mixed
     */
    public function search(string $keyword);

}