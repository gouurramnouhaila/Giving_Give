<?php


namespace App\Domain\Project\UseCase\RejectProject;


use Symfony\Component\HttpFoundation\JsonResponse;

interface RejectProjectPresenterInterface
{
    /**
     * @param RejectProjectResponse $rejectProjectResponse
     * @return void
     */
    public function present(RejectProjectResponse $rejectProjectResponse): void;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}