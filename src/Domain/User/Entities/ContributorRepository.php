<?php


namespace App\Domain\User\Entities;


interface ContributorRepository
{
    /**
     * @param Contributor $contributor
     * @return void
     */
    public function add(Contributor $contributor): void;

    /**
     * @param int $id
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * @param Contributor $contributor
     * @return Contributor
     */
    public function upDate(Contributor $contributor): Contributor;

    /**
     * @param int $id
     * @return Contributor
     */
    public function findOne(int $id): Contributor;

    /**
     * @return mixed
     */
    public function findAll();

    /**
     * @param int $idProjectHolder
     * @return mixed
     */
    public function findContributorByProjectHolder(int $idProjectHolder): array;
}