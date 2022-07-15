<?php


namespace App\Domain\Project\UseCase\AcceptProject;


class AcceptProjectResponse
{
    /**
     * @var bool|null
     */
    public ?bool $status = null;

    /**
     * @param bool|null $status
     */
    public function __construct(?bool $status)
    {
        $this->status = $status;
    }

    /**
     * @return bool|null
     */
    public function getStatus():?bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     * @return void
     */
    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }
}