<?php


namespace App\Domain\User\Adapters\Controllers\ProjectHolder\DeleteProjectHolder;



use App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder\DeleteProjectHolderPresenterInterface;
use App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder\DeleteProjectHolderResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeleteProjectHolderJsonPresenter implements DeleteProjectHolderPresenterInterface
{

    private ?bool $is_deleted = null;

    /**
     * @inheritDoc
     */
    public function present(DeleteProjectHolderResponse $deleteProjectHolderResponse): void
    {
        $this->is_deleted = $deleteProjectHolderResponse->status;
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