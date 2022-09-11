<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\FindAllProjectHolder;


use App\Domain\User\UseCases\ProjectHolder\FindAllProjectHolder\FindAllProjectHolderPresenterInterface;
use App\Domain\User\UseCases\ProjectHolder\FindAllProjectHolder\FindAllProjectHolderResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;

class FindAllProjectHolderJsonPresenter implements FindAllProjectHolderPresenterInterface
{
    public ?array $projectHolders = null;

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
    public function present(FindAllProjectHolderResponse $projectHolder)
    {
        $this->projectHolders = $projectHolder->projectHolders;
    }

    public function getResponse(): JsonResponse {

        return new JsonResponse($this->serializer->serialize(
            $this->projectHolders, JsonEncoder::FORMAT), 200, [], true);
    }
}