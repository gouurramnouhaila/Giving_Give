<?php


namespace App\Domain\Notification\UseCases\SendNotification;


use App\Domain\Notification\Adapters\Gateway\Doctrine\DoctrineNotificationRepository;

class SendNotification
{
    private DoctrineNotificationRepository $notificationRepository;

    /**
     * SendNotification constructor.
     * @param DoctrineNotificationRepository $notificationRepository
     */
    public function __construct(DoctrineNotificationRepository $notificationRepository)
    {
        $this->notificationRepository = $notificationRepository;
    }


    public function execute(SendNotificationRequest $request,SendNotificationPresenterInterface $presenter) {
        $notification = $this->notificationRepository->find($request->idNotification);

        $this->notificationRepository->sendNotification($notification);

        $presenter->present(new SendNotificationResponse("The email send successful"));
    }
}