<?php


namespace App\Domain\Notification\Entities;


interface NotificationRepository
{
    /**
     * @param string $message
     * @param string $email
     * @return mixed
     */
    public function createNotification(Notification $notification) : Notification;
    
    /**
     * @param Notification $notification
     * @return mixed
     */
    public function sendNotification(\App\Domain\Notification\Adapters\Gateway\Doctrine\Notification $notification);
}