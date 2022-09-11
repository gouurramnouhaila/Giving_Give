<?php


namespace App\Domain\User\Adapters\Controllers\Contributor\FindAllContributor;


use App\Domain\User\Adapters\Controllers\ProjectHolder\FindAllProjectHolder\FindAllProjectHolderJsonPresenter;
use App\Domain\User\UseCases\Contributor\FindAllContributor\FindAllContributor;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class FindAllContributorController
{

    /**
     * @param FindAllContributor $useCase
     * @param Serializer $serializer
     * @return JsonResponse
     * @Route(path="/api/contributors",name="app_contributor_all")
     */
    public function __invoke(FindAllContributor $useCase,SerializerInterface $serializer): JsonResponse
    {
        $presenter = new FindAllContributorJsonPresenter($serializer);

        $useCase->execute($presenter);

        return $presenter->getResponse($serializer);
    }
}