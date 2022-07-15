<?php


namespace App\Domain\Project\UseCase\ListProjects;


use Symfony\Component\HttpFoundation\JsonResponse;

interface ListProjectsPresenterInterface
{
    /**
     * @param ListProjectsResponse $listProjectsResponse
     * @return mixed
     */
    public function present(ListProjectsResponse $listProjectsResponse);

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}