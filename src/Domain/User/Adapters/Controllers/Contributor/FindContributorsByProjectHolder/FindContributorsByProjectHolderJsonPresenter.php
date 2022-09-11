<?php

namespace App\Domain\User\Adapters\Controllers\Contributor\FindContributorsByProjectHolder;

use App\Domain\User\UseCases\Contributor\FindContributorsByProjectHolder\FindContributorsByProjectHolderPresenterInterface;
use App\Domain\User\UseCases\Contributor\FindContributorsByProjectHolder\FindContributorsByProjectHolderResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;

class FindContributorsByProjectHolderJsonPresenter implements FindContributorsByProjectHolderPresenterInterface
{
    private ?array $contributors = null;

    private SerializerInterface $serializer;

    /**
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function present(FindContributorsByProjectHolderResponse $response): void
    {
        $this->contributors = $response->getContributors();
    }

    public function getResponse(): JsonResponse
    {
        return new JsonResponse($this->serializer->serialize(
            $this->contributors, JsonEncoder::FORMAT), 200, [], true);
    }
}