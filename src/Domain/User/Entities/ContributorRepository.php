<?php


namespace App\Domain\User\Entities;


interface ContributorRepository
{
    /**
     * @param Contributor $contributor
     * @return mixed
     */
    public function add(Contributor $contributor);

    /**
     * @param int $id
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * @param int $id
     * @return Contributor
     */
    public function upDate(Contributor $contributor): \App\Domain\User\Adapters\Gateway\Doctrine\Contributor;

    /**
     * @param int $id
     * @return Contributor
     */
    public function findOne(int $id): \App\Domain\User\Adapters\Gateway\Doctrine\Contributor;

    /**
     * @return mixed
     */
    public function findAll();
}