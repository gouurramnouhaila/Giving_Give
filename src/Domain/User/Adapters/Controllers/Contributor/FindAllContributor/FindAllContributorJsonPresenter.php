<?php


namespace App\Domain\User\Adapters\Controllers\Contributor\FindAllContributor;


use App\Domain\User\UseCases\Contributor\FindAllContributor\FindAllContributorPresenterInterface;
use App\Domain\User\UseCases\Contributor\FindAllContributor\FindAllContributorResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class FindAllContributorJsonPresenter implements FindAllContributorPresenterInterface
{
    private $contributors;


    /**
     * @inheritDoc
     */
    public function present(FindAllContributorResponse $response)
    {
        $this->contributors = $response->getContributors();
    }

    public function getResponse(SerializerInterface $serializer): JsonResponse {

        return new JsonResponse([
            'contributors' => $serializer->serialize($this->contributors, 'json')
        ]);
    }
}