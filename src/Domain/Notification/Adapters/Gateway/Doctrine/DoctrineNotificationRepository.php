<?php


namespace App\Domain\Notification\Adapters\Doctrine;


use App\Domain\Notification\Adapters\Gateway\Doctrine\Notification;
use App\Domain\Notification\Entities\Notification as NotificationEntity;
use App\Domain\Notification\Entities\NotificationRepository;
use App\Domain\User\Adapters\Gateway\Doctrine\DoctrineContributorRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DoctrineNotificationRepository extends ServiceEntityRepository implements NotificationRepository
{
    private DoctrineContributorRepository $contributorRepository;

    public function __construct(ManagerRegistry $registry,DoctrineContributorRepository $contributorRepository)
    {
        parent::__construct($registry, Notification::class);

        $this->contributorRepository = $contributorRepository;
    }

    /**
     * @inheritDoc
     */
    public function createNotification(NotificationEntity $notification) : NotificationEntity
    {
        $contributor = $this->contributorRepository->find($notification->getIdContributor());

        $notificationDoctrine = new Notification($notification->getContent(),$notification->getNotifyDate(),$notification->getReadingDate(), $notification->getSubject(),$contributor);
    }

    /**
     * @inheritDoc
     */
    public function sendNotification(NotificationEntity $notification)
    {
        // TODO: Implement sendNotification() method.
    }
}