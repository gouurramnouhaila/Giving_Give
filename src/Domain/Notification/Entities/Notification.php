<?php


namespace App\Domain\Notification\Entities;


class Notification
{
    private $id;

    private $content;

    private $notifyDate;

    private $readingDate;

    private $isRead;

    private $subject;

    private $idContributor;

    /**
     * Notification constructor.
     * @param $id
     * @param $content
     * @param $notifyDate
     * @param $readingDate
     * @param $isRead
     * @param $subject
     * @param $idContributor
     */
    public function __construct($id, $content, $notifyDate, $readingDate, $isRead, $subject, $idContributor)
    {
        $this->id = $id;
        $this->content = $content;
        $this->notifyDate = $notifyDate;
        $this->readingDate = $readingDate;
        $this->isRead = $isRead;
        $this->subject = $subject;
        $this->idContributor = $idContributor;
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
    public function getIdContributor()
    {
        return $this->idContributor;
    }

    /**
     * @param mixed $idContributor
     */
    public function setIdContributor($idContributor): void
    {
        $this->idContributor = $idContributor;
    }




}