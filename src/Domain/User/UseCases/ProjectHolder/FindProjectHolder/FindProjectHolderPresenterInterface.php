<?php


namespace App\Domain\User\UseCases\ProjectHolder\FindProjectHolder;




use App\Domain\User\Entities\ProjectHolder;
use Symfony\Component\HttpFoundation\JsonResponse;

interface FindProjectHolderPresenterInterface
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