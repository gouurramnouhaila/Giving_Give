<?php


namespace App\Domain\User\Adapters\Controllers\Contributor\DeleteContributor;


use App\Domain\User\UseCases\Contributor\DeleteContributor\DeleteContributorPresenterInterface;
use App\Domain\User\UseCases\Contributor\DeleteContributor\DeleteContributorResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeleteContributorJsonPresenter implements DeleteContributorPresenterInterface
{
    private ?bool $is_deleted = null;

    /**
     * @inheritDoc
     */
    public function present(DeleteContributorResponse $response): void
    {
       $this->is_deleted = $response->status;
    }

    /**
     * @inheritDoc
     */
    public function getResponse(): JsonResponse
    {
        return new JsonResponse([
            'success' => $this->is_deleted
        ]);
    }
}