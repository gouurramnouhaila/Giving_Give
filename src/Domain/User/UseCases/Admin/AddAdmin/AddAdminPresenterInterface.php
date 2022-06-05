<?php


namespace App\Domain\User\UseCases\Admin\AddAdmin;


use App\Domain\User\Entities\Admin;
use Symfony\Component\HttpFoundation\JsonResponse;

interface AddAdminPresenterInterface
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