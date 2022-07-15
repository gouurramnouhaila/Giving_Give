<?php


namespace App\Domain\Project\Adapters\Controllers\RejectProject;


use App\Domain\Project\UseCase\RejectProject\RejectProjectPresenterInterface;
use App\Domain\Project\UseCase\RejectProject\RejectProjectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class RejectProjectJsonPresenter implements RejectProjectPresenterInterface
{
    /**
     * @var bool|null
     */
    private ?bool $message = null;

    /**
     * @inheritDoc
     */
    public function present(RejectProjectResponse $rejectProjectResponse): void
    {
        $this->message = $rejectProjectResponse->status;
    }

    public function getResponse(): JsonResponse
    {
        return new JsonResponse (
            [
                'status' => $this->message
            ]
        );
    }
}