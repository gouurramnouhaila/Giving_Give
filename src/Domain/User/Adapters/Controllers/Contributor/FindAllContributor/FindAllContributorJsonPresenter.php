<?php


namespace App\Domain\User\Adapters\Controllers\Contributor\FindAllContributor;


use App\Domain\User\UseCases\Contributor\FindAllContributor\FindAllContributorPresenterInterface;
use App\Domain\User\UseCases\Contributor\FindAllContributor\FindAllContributorResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;

class FindAllContributorJsonPresenter implements FindAllContributorPresenterInterface
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


    /**
     * @inheritDoc
     */
    public function present(FindAllContributorResponse $response): void
    {
        $this->contributors = $response->getContributors();
    }

    public function getResponse(): JsonResponse {

        return new JsonResponse($this->serializer->serialize(
            $this->contributors, JsonEncoder::FORMAT), 200, [], true);
    }
}