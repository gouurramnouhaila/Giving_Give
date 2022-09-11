<?php


namespace App\Domain\User\UseCases\ProjectHolder\FindAllProjectHolder;


use Symfony\Component\HttpFoundation\JsonResponse;

interface FindAllProjectHolderPresenterInterface
{
    /**
     * @param FindAllProjectHolderResponse $projectHolder
     * @return mixed
     */
    public function present(FindAllProjectHolderResponse $projectHolder);

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;

}