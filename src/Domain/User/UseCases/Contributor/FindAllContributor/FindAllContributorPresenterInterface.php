<?php


namespace App\Domain\User\UseCases\Contributor\FindAllContributor;


use Symfony\Component\HttpFoundation\JsonResponse;

interface FindAllContributorPresenterInterface
{

    /**
     * @param FindAllContributorResponse $response
     * @return void
     */
    public function present(FindAllContributorResponse $response): void;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}