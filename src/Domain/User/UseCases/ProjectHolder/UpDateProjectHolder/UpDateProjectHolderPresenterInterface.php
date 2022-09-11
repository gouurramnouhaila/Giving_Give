<?php


namespace App\Domain\User\UseCases\ProjectHolder\UpDateProjectHolder;


use App\Domain\User\Entities\ProjectHolder;
use Symfony\Component\HttpFoundation\JsonResponse;

interface UpDateProjectHolderPresenterInterface
{
    /**
     * @param ProjectHolder $upDateProjectResponse
     */
    public function present(ProjectHolder $upDateProjectResponse): void ;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}