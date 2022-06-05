<?php


namespace App\Domain\User\UseCases\Admin\DeleteAdmin;


use Symfony\Component\HttpFoundation\JsonResponse;

interface DeleteAdminPresenterInterface
{

    /**
     * @param DeleteAdminResponse $response
     */
    public function present(DeleteAdminResponse $response): void ;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}