<?php


namespace App\Domain\User\UseCases\Contributor\FindContributor;


use App\Domain\User\Entities\Contributor;
use Symfony\Component\HttpFoundation\JsonResponse;

interface FindContributorPresenterInterface
{
    /**
     * @param Contributor $contributor
     * @return void
     */
    public function present(Contributor $contributor): void ;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}