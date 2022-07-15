<?php


namespace App\Domain\Project\UseCase\AcceptProject;


use Symfony\Component\HttpFoundation\JsonResponse;

interface AcceptProjectPresenterInterface
{
    /**
     * @param AcceptProjectResponse $acceptProjectResponse
     * @return void
     */
    public function present(AcceptProjectResponse $acceptProjectResponse): void;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}