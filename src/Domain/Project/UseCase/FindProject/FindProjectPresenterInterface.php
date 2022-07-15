<?php


namespace App\Domain\Project\UseCase\FindProject;


use App\Domain\Project\Entities\Project;
use Symfony\Component\HttpFoundation\JsonResponse;

interface FindProjectPresenterInterface
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