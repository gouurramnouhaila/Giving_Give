<?php


namespace App\Domain\User\Entities;


interface ProjectHolderRepository
{
    /**
     * @param ProjectHolder $contributor
     * @return mixed
     */
    public function add(ProjectHolder $projectHolder);

    /**
     * @param int $id
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * @param ProjectHolder $projectHolder
     * @return ProjectHolder
     */
    public function upDate(ProjectHolder $projectHolder): \App\Domain\User\Adapters\Gateway\Doctrine\ProjectHolder;

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