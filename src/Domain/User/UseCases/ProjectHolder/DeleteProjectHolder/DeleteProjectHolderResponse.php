<?php


namespace App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder;


class DeleteProjectHolderResponse
{
    public ?bool $status = null;

    /**
     * @param $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }

    /**
     * @return bool|null
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }

    /**
     * @param bool|null $status
     * @return void
     */
    public function setStatus(?bool $status): void
    {
        $this->status = $status;
    }
}