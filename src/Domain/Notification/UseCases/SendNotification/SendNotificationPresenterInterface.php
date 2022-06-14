<?php


namespace App\Domain\Notification\UseCases\SendNotification;


use App\Domain\Notification\Adapters\Gateway\Doctrine\Notification;
use Symfony\Component\HttpFoundation\JsonResponse;

interface SendNotificationPresenterInterface
{

    /**
     * @param SendNotificationResponse $
     */
    public function present(SendNotificationResponse $response): void ;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}