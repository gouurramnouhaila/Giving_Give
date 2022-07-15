<?php


namespace App\Domain\Project\Adapters\Controllers\DeleteProject;


use App\Domain\Project\UseCase\DeleteProject\DeleteProjectPresenterInterface;
use App\Domain\Project\UseCase\DeleteProject\DeleteProjectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeleteProjectJsonPresenter implements DeleteProjectPresenterInterface
{

    public ?bool $is_deleted = null;

    /**
     * @inheritDoc
     */
    public function present(DeleteProjectResponse $deleteProjectResponse): void
    {
        $this->is_deleted = $deleteProjectResponse->status;
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