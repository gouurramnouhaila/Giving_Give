<?php


namespace App\Domain\Notification\Adapters\Gateway\Doctrine;


use App\Domain\Notification\Entities\Notification as NotificationEntity;
use App\Domain\Notification\Entities\NotificationRepository;
use App\Domain\User\Adapters\Gateway\Doctrine\DoctrineAdminRepository;
use App\Domain\User\Adapters\Gateway\Doctrine\DoctrineContributorRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Notifier\Notification\Notification as NotificationSystem;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Recipient\Recipient;

class DoctrineNotificationRepository extends ServiceEntityRepository implements NotificationRepository
{
    private DoctrineContributorRepository $contributorRepository;
    private NotifierInterface $notifier;
    private DoctrineAdminRepository $adminRepository;
    private MailerInterface $mailer;

    public function __construct(ManagerRegistry $registry,DoctrineContributorRepository $contributorRepository, NotifierInterface $notifier,DoctrineAdminRepository $adminRepository,MailerInterface $mailer)
    {
        parent::__construct($registry, Notification::class);

        $this->contributorRepository = $contributorRepository;
        $this->notifier = $notifier;
        $this->adminRepository = $adminRepository;
        $this->mailer = $mailer;
    }

    /**
     * @inheritDoc
     */
    public function createNotification(NotificationEntity $notification) : NotificationEntity
    {
        $contributor = $this->contributorRepository->find($notification->getIdContributor());

        $notificationDoctrine = new Notification($notification->getContent(),$notification->getNotifyDate(),$notification->getReadingDate(),$notification->getIsRead(),$notification->getSubject(),$contributor);

        $this->getEntityManager()->persist($notificationDoctrine);
        $this->getEntityManager()->flush();

        return $notification;
    }

    /**
     * @inheritDoc
     */
    public function sendNotification(Notification $notification)
    {
        // Create a Notification that has to be sent
        // using the "email" channel
        /*$notificationSystem = (new NotificationSystem($notification->getSubject(), ['email']))
            ->content($notification->getContent());*/

        $contributor = $this->contributorRepository->find($notification->getContributor()->getId());

        /* The receiver of the Notification
        $recipient = new Recipient(
            $contributor->getEmail()
        );*/

        $email = (new Email())
            ->from('nouhaila@email.com')
            ->to($contributor->getEmail())
            ->subject($notification->getSubject())
            ->text($notification->getContent())
            ->html("<h1>".$notification->getContent()."</h1>");

        $this->mailer->send($email);

    }
}