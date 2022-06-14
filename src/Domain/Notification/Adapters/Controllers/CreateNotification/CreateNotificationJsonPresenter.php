<?php


namespace App\Domain\Notification\Adapters\Controllers\CreateNotification;


use App\Domain\Notification\Entities\Notification;
use App\Domain\Notification\UseCases\createNotification\CreateNotificationPresenterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class CreateNotificationJsonPresenter implements CreateNotificationPresenterInterface
{
    private $id;

    private $content;

    private $notifyDate;

    private $readingDate;

    private $isRead;

    private $subject;

    private $idContributor;

    /**
     * @inheritDoc
     */
    public function present(Notification $notification): void
    {
        $this->id = $notification->getId();
        $this->content = $notification->getContent();
        $this->notifyDate = $notification->getNotifyDate();
        $this->readingDate = $notification->getReadingDate();
        $this->isRead = $notification->getIsRead();
        $this->subject = $notification->getSubject();
        $this->idContributor = $notification->getIdContributor();
    }

    /**
     * @inheritDoc
     */
    public function getResponse(): JsonResponse
    {
        return new JsonResponse([
            'id' => $this->id,
            'content' => $this->content,
            'notifyDate' => $this->notifyDate,
            'readingDate' => $this->readingDate,
            'subject' => $this->subject,
            'idContributor' => $this->idContributor
        ]);
    }
}