<?php


namespace App\Domain\Project\UseCase\DeleteProject;


use phpDocumentor\Reflection\Types\Boolean;

class DeleteProjectResponse
{
    private  $success;

    /**
     * @return mixed
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param mixed $success
     */
    public function setSuccess($success): void
    {
        $this->success = $success;
    }


    /**
     * DeleteProjectResponse constructor.
     * @param string $success
     * @param int $status_message
     */
    public function __construct($success)
    {
        $this->$success = $success;

    }






}