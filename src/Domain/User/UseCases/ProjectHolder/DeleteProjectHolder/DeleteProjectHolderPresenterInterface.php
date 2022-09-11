<?php


namespace App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder;


use Symfony\Component\HttpFoundation\JsonResponse;

interface DeleteProjectHolderPresenterInterface
{
    /**
     * @param DeleteProjectHolderResponse $deleteProjectHolderResponse
     * @return void
     */
    public function present(DeleteProjectHolderResponse $deleteProjectHolderResponse): void;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}