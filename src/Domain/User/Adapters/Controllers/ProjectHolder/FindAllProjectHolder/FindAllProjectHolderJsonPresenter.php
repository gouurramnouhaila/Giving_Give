<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\FindAllProjectHolder;


use App\Domain\User\UseCases\ProjectHolder\FindAllProjectHolder\FindAllProjectHolderPresenterInterface;
use App\Domain\User\UseCases\ProjectHolder\FindAllProjectHolder\FindAllProjectHolderResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class FindAllProjectHolderJsonPresenter implements FindAllProjectHolderPresenterInterface
{

    public $projectHolders;

    /**
     * @inheritDoc
     */
    public function present(FindAllProjectHolderResponse $findAllProjectHolderResponse)
    {
        $this->projectHolders = $findAllProjectHolderResponse->projectHolders;
    }

    public function getResponse(SerializerInterface $serializer): JsonResponse {

        return new JsonResponse([
            'projectHolders' => $serializer->serialize($this->projectHolders, 'json')
        ]);
    }
}