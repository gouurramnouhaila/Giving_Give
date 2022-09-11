<?php

namespace App\Domain\Project\UseCase\FindProjectByUser;

use Symfony\Component\HttpFoundation\JsonResponse;

interface FindProjectByUserPresenterInterface
{
    /**
     * @param FindProjectByUserResponse $projectByUserResponse
     * @return void
     */
    public function present(FindProjectByUserResponse $projectByUserResponse): void ;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}