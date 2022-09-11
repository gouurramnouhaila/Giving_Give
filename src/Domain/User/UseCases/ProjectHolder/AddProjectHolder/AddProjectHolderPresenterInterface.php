<?php


namespace App\Domain\User\UseCases\ProjectHolder\AddProjectHolder;


use App\Domain\User\Entities\ProjectHolder;
use Symfony\Component\HttpFoundation\JsonResponse;

interface AddProjectHolderPresenterInterface
{
    /**
     * @param ProjectHolder $projectHolder
     * @return mixed
     */
    public function present(ProjectHolder $projectHolder);

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}