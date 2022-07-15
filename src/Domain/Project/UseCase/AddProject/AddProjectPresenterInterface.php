<?php


namespace App\Domain\Project\UseCase\AddProject;


use App\Domain\Project\Entities\Project;
use Symfony\Component\HttpFoundation\JsonResponse;

interface AddProjectPresenterInterface
{
    /**
     * @param Project $project
     * @return void
     */
    public function present(Project $project): void ;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}