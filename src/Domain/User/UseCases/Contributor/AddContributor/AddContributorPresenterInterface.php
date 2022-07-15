<?php


namespace App\Domain\User\UseCases\Contributor\AddContributor;


use App\Domain\User\Entities\Contributor;
use Symfony\Component\HttpFoundation\JsonResponse;

interface AddContributorPresenterInterface
{
    /**
     * @param Contributor $contributor
     * @return void
     */
    public function present(Contributor $contributor): void;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}