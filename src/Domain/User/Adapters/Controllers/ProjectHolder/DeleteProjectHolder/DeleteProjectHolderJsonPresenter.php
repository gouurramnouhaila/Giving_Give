<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\DeleteProjectHolder;



use App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder\DeleteProjectHolderPresenterInterface;
use App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder\DeleteProjectHolderResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeleteProjectHolderJsonPresenter implements DeleteProjectHolderPresenterInterface
{

    private $is_deleted;

    /**
     * @inheritDoc
     */
    public function present(DeleteProjectHolderResponse $deleteProjectHolderResponse)
    {
        $this->is_deleted = $deleteProjectHolderResponse->getSuccess();
    }

    public function getResponse(): JsonResponse
    {
        return new JsonResponse (
            [
                'success' => $this->is_deleted
            ]
        );
    }
}