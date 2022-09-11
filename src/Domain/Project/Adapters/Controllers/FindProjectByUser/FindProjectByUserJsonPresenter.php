<?php

namespace App\Domain\Project\Adapters\Controllers\FindProjectByUser;

use App\Domain\Project\Entities\Project;
use App\Domain\Project\UseCase\FindProjectByUser\FindProjectByUserPresenterInterface;
use App\Domain\Project\UseCase\FindProjectByUser\FindProjectByUserResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;

class FindProjectByUserJsonPresenter implements FindProjectByUserPresenterInterface
{

    public ?array $projects = null;

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
    public function present(FindProjectByUserResponse $projectByUserResponse): void
    {
        $this->projects = $projectByUserResponse->projects;

    }

    public function getResponse(): JsonResponse
    {
        return new JsonResponse($this->serializer->serialize(
            $this->projects, JsonEncoder::FORMAT), 200, [], true);
    }
}