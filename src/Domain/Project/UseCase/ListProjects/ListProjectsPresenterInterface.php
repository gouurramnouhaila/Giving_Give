<?php


namespace App\Domain\Project\UseCase\ListProjects;


use Symfony\Component\HttpFoundation\JsonResponse;

interface ListProjectsPresenterInterface
{
    /**
     * @param ListProjectsResponse $listProjectsResponse
     * @return void
     */
    public function present(ListProjectsResponse $listProjectsResponse): void;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}