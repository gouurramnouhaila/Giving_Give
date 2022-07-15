<?php


namespace App\Domain\User\UseCases\Contributor\DeleteContributor;


use Symfony\Component\HttpFoundation\JsonResponse;

interface DeleteContributorPresenterInterface
{
    /**
     * @param DeleteContributorResponse $response
     * @return void
     */
    public function present(DeleteContributorResponse $response): void ;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}