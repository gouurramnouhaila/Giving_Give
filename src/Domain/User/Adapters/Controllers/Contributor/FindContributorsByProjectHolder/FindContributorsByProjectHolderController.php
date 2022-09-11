<?php

namespace App\Domain\User\Adapters\Controllers\Contributor\FindContributorsByProjectHolder;

use App\Domain\User\UseCases\Contributor\FindContributorsByProjectHolder\FindContributorsByProjectHolder;
use App\Domain\User\UseCases\Contributor\FindContributorsByProjectHolder\FindContributorsByProjectHolderRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;


class FindContributorsByProjectHolderController
{
    /**
     * @param FindContributorsByProjectHolder $useCase
     * @param Serializer $serializer
     * @param Request $request
     * @return JsonResponse
     * @Route(path="/api/contributors/projectHolder/{id}",name="app_contributor_by_projectHolder")
     */
    public function __invoke(FindContributorsByProjectHolder $useCase,SerializerInterface $serializer,Request $request): JsonResponse
    {
        $presenter = new FindContributorsByProjectHolderJsonPresenter($serializer);

        $requestDto = new FindContributorsByProjectHolderRequest((int) $request->get('id'));

        $useCase->execute($requestDto, $presenter);

        return $presenter->getResponse($serializer);
    }
}