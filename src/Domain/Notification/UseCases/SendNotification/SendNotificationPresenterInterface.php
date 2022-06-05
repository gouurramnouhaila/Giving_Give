<?php


namespace App\Domain\Notification\UseCases\SendNotification;


interface SendNotificationPresenterInterface
{
    public function present(SendNotificationResponse $response);
}