<?php


namespace App\Domain\User\UseCases\Admin\FindAllAdmin;


use Symfony\Component\HttpFoundation\JsonResponse;

interface FindAllAdminPresenterInterface
{
    /**
     * @param FindAllAdminResponse $adminResponse
     */
    public function present(FindAllAdminResponse $adminResponse): void ;


    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}