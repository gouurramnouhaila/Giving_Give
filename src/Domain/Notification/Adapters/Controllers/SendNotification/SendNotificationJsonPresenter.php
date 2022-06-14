<?php


namespace App\Domain\Notification\Adapters\Controllers\SendNotification;


use App\Domain\Notification\Adapters\Gateway\Doctrine\Notification;
use App\Domain\Notification\UseCases\SendNotification\SendNotificationPresenterInterface;
use App\Domain\Notification\UseCases\SendNotification\SendNotificationResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class SendNotificationJsonPresenter implements SendNotificationPresenterInterface
{
    private $message;

    /**
     * @inheritDoc
     */
    public function present(SendNotificationResponse $response): void
    {
        $this->message = $response->message;
    }

    /**
     * @inheritDoc
     */
    public function getResponse(): JsonResponse
    {
        return new JsonResponse([
            'message' => $this->message
        ]);
    }
}