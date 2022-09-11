<?php

namespace App\Domain\User\UseCases\Contributor\FindContributorsByProjectHolder;

use Symfony\Component\HttpFoundation\JsonResponse;

interface FindContributorsByProjectHolderPresenterInterface
{
    /**
     * @param FindContributorsByProjectHolderResponse $response
     * @return void
     */
    public function present(FindContributorsByProjectHolderResponse $response): void;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}