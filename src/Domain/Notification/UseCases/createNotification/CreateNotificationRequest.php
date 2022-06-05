<?php


namespace App\Domain\Notification\UseCases\createNotification;


class CreateNotificationRequest
{
    public $id;

    public $content;

    public $notifyDate;

    public $readingDate;

    public $isRead;

    public $subject;

    public $idContributor;

    /**
     * CreateNotificationRequest constructor.
     * @param $content
     * @param $notifyDate
     * @param $readingDate
     * @param $isRead
     * @param $subject
     * @param $idContributor
     */
    public function __construct($id,$content, $notifyDate, $readingDate, $isRead, $subject, $idContributor)
    {
        $this->id = $id;
        $this->content = $content;
        $this->notifyDate = $notifyDate;
        $this->readingDate = $readingDate;
        $this->isRead = $isRead;
        $this->subject = $subject;
        $this->idContributor = $idContributor;
    }


}