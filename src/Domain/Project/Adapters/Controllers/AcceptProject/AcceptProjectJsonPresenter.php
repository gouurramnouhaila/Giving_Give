<?php


namespace App\Domain\Project\Adapters\Controllers\AcceptProject;


use App\Domain\Project\UseCase\AcceptProject\AcceptProjectPresenterInterface;
use App\Domain\Project\UseCase\AcceptProject\AcceptProjectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class AcceptProjectJsonPresenter implements AcceptProjectPresenterInterface
{

    private $message;

    /**
     * @inheritDoc
     */
    public function present(AcceptProjectResponse $acceptProjectResponse)
    {
        $this->message = $acceptProjectResponse->status;
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