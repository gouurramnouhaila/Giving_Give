<?php


namespace App\Domain\User\UseCases\Contributor\UpDateContributor;


use App\Domain\User\Entities\Contributor;
use Symfony\Component\HttpFoundation\JsonResponse;

interface UpdateContributorPresenterInterface
{
    /**
     * @param Contributor $contributor
     */
    public function present(Contributor $contributor) : void ;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}