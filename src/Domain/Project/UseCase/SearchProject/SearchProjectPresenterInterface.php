<?php


namespace App\Domain\Project\UseCase\SearchProject;


use Symfony\Component\HttpFoundation\JsonResponse;

interface SearchProjectPresenterInterface
{
    /**
     * @param SearchProjectResponse $searchProjectResponse
     * @return void
     */
    public function present(SearchProjectResponse $searchProjectResponse): void;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}