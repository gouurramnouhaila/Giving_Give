<?php


namespace App\Domain\User\UseCases\Admin\UpdateAdmin;


use App\Domain\User\Entities\Admin;
use Symfony\Component\HttpFoundation\JsonResponse;

interface UpdateAdminPresenterInterface
{
    /**
     * @param Admin $admin
     */
    public function present(Admin $admin): void ;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}