<?php


namespace App\Domain\User\UseCases\Admin\FindAdmin;




use App\Domain\User\Adapters\Gateway\Doctrine\Admin;
use Symfony\Component\HttpFoundation\JsonResponse;

interface FindAdminpresenterInterface
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