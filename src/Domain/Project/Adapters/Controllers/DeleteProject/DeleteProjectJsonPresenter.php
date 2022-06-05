<?php


namespace App\Domain\Project\Adapters\Controllers\DeleteProject;


use App\Domain\Project\UseCase\DeleteProject\DeleteProjectPresenterInterface;
use App\Domain\Project\UseCase\DeleteProject\DeleteProjectResponse;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeleteProjectJsonPresenter implements DeleteProjectPresenterInterface
{

    public $is_deleted;

    /**
     * @inheritDoc
     */
    public function present(DeleteProjectResponse $deleteProjectResponse)
    {

        $this->is_deleted = $deleteProjectResponse->getSuccess();
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