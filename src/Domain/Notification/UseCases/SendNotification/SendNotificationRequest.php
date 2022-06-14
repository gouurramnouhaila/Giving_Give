<?php


namespace App\Domain\Notification\UseCases\SendNotification;


class SendNotificationRequest
{
    /**
     * @var
     */
    public $idNotification;

    public function __construct($idNotification)
    {
        $this->idNotification = $idNotification;
    }

    /**
     * @return mixed
     */
    public function getIdNotification()
    {
        return $this->idNotification;
    }




}