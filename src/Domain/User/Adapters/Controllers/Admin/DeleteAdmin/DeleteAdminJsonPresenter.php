<?php


namespace App\Domain\User\Adapters\Controllers\Admin\DeleteAdmin;


use App\Domain\User\UseCases\Admin\DeleteAdmin\DeleteAdminPresenterInterface;
use App\Domain\User\UseCases\Admin\DeleteAdmin\DeleteAdminResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeleteAdminJsonPresenter implements DeleteAdminPresenterInterface
{

    private $is_deleted;

    /**
     * @inheritDoc
     */
    public function present(DeleteAdminResponse $response): void
    {
        $this->is_deleted = $response->getSuccess();
    }

    /**
     * @inheritDoc
     */
    public function getResponse(): JsonResponse
    {
        return new JsonResponse(
            [
                'success' => $this->is_deleted
            ]
        );
    }
}