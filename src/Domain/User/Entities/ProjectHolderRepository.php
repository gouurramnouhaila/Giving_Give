<?php


namespace App\Domain\User\Entities;


interface ProjectHolderRepository
{
    /**
     * @param ProjectHolder $projectHolder
     * @return void
     */
    public function add(ProjectHolder $projectHolder): void;

    /**
     * @param int $id
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * @param ProjectHolder $projectHolder
     * @return ProjectHolder
     */
    public function upDate(ProjectHolder $projectHolder): ProjectHolder;

    /**
     * @param int $id
     * @return ProjectHolder
     */
    public function findOne(int $id): ProjectHolder;

    /**
     * @return mixed
     */
    public function findAll();
}