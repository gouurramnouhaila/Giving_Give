<?php


namespace App\Domain\Notification\Adapters\Gateway\Doctrine;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Project
 * @package App\Domain\Notification\Adapters\Gateway\Doctrine
 * @ORM\Entity(repositoryClass="DoctrineNotificationRepository")
 */
class Notification
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $content;

    /**
     * @ORM\Column(type="date")
     */
    private $notifyDate;

    /**
     * @ORM\Column(type="date")
     */
    private $readingDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isRead;

    /**
     * @ORM\Column(type="string")
     */
    private $subject;

    /**
     * @ORM\ManyToOne(targetEntity="App\Domain\User\Adapters\Gateway\Doctrine\Contributor", inversedBy="notifications")
     */
    private $contributor;

    /**
     * Notification constructor.
     * @param $content
     * @param $notifyDate
     * @param $readingDate
     * @param $isRead
     * @param $subject
     * @param $contributor
     */
    public function __construct($content, $notifyDate, $readingDate,$isRead = false, $subject, $contributor)
    {
        $this->content = $content;
        $this->notifyDate = $notifyDate;
        $this->readingDate = $readingDate;
        $this->isRead = $isRead;
        $this->subject = $subject;
        $this->contributor = $contributor;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getNotifyDate()
    {
        return $this->notifyDate;
    }

    /**
     * @param mixed $notifyDate
     */
    public function setNotifyDate($notifyDate): void
    {
        $this->notifyDate = $notifyDate;
    }

    /**
     * @return mixed
     */
    public function getReadingDate()
    {
        return $this->readingDate;
    }

    /**
     * @param mixed $readingDate
     */
    public function setReadingDate($readingDate): void
    {
        $this->readingDate = $readingDate;
    }

    /**
     * @return mixed
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    /**
     * @param mixed $isRead
     */
    public function setIsRead($isRead): void
    {
        $this->isRead = $isRead;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * @param mixed $contributeur
     */
    public function setContributor($contributor): void
    {
        $this->contributor = $contributor;
    }




}