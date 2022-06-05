<?php


namespace App\Domain\Project\UseCase\RejectProject;


class RejectProjectResponse
{
    public $status;

    public $statusCode;

    /**
     * AcceptProjectResponse constructor.
     * @param $status
     * @param $statusCode
     */
    public function __construct($status, $statusCode)
    {
        $this->status = $status;
        $this->statusCode = $statusCode;
    }


    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     */
    public function setStatusCode($statusCode): void
    {
        $this->statusCode = $statusCode;
    }

}