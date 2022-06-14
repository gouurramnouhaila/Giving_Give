<?php


namespace App\Domain\Notification\UseCases\SendNotification;


class SendNotificationResponse
{
    public $message;

    /**
     * SendNotificationResponse constructor.
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }


}