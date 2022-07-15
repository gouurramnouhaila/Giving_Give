<?php


namespace App\Domain\Project\UseCase\DeleteProject;


use Symfony\Component\HttpFoundation\JsonResponse;

interface DeleteProjectPresenterInterface
{
    /**
     * @param DeleteProjectResponse $deleteProjectResponse
     * @return void
     */
    public function present(DeleteProjectResponse $deleteProjectResponse): void;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}