<?php


namespace App\Domain\Notification\UseCases\createNotification;


use App\Domain\Notification\Entities\Notification;
use Symfony\Component\HttpFoundation\JsonResponse;

interface CreateNotificationPresenterInterface
{
    /**
     * @param Notification $notification
     */
    public function present(Notification $notification): void ;

    /**
     * @return JsonResponse
     */
    public function getResponse() : JsonResponse;
}