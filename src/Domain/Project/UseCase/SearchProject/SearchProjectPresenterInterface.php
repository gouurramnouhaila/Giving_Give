<?php


namespace App\Domain\Project\UseCase\SearchProject;


use App\Domain\Project\Entities\Project;
use Symfony\Component\HttpFoundation\JsonResponse;

interface SearchProjectPresenterInterface
{
     /**
     * @param SearchProjectResponse $projectResponse
     * @return void
     */
    public function present(SearchProjectResponse $projectResponse): void;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}