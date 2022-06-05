<?php


namespace App\Domain\Notification\UseCases\createNotification;


use App\Domain\Notification\Adapters\Doctrine\DoctrineNotificationRepository;
use App\Domain\Notification\Entities\Notification;

class CreateNotification
{

    private DoctrineNotificationRepository $notificationRepository;

    /**
     * CreateNotification constructor.
     * @param DoctrineNotificationRepository $notificationRepository
     */
    public function __construct(DoctrineNotificationRepository $notificationRepository)
    {
        $this->notificationRepository = $notificationRepository;
    }


    public function execute(CreateNotificationRequest $request,CreateNotificationPresenterInterface $presenter) {

        $notification = new Notification($request->id, $request->content,$request->notifyDate, $request->readingDate, $request->subject, $request->idContributor);

        $this->notificationRepository->createNotification($notification);

        $presenter->present($notification);

    }
}