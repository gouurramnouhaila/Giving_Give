<?php


namespace App\Domain\User\Entities;


interface AdminRepository
{

    /**
     * @param Admin $admin
     * @return mixed
     */
    public function add(Admin $admin);

    /**
     * @param int $id
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * @param Admin $id
     * @return mixed
     */
    public function upDate(Admin $id);

    /**
     * @param int $id
     * @return Admin
     */
    public function findOne(int $id): \App\Domain\User\Adapters\Gateway\Doctrine\Admin;

    /**
     * @return mixed
     */
    public function findAll();
}