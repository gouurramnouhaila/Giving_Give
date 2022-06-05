<?php


namespace App\Domain\User\UseCases\ProjectHolder\DeleteProjectHolder;


interface DeleteProjectHolderPresenterInterface
{
    /**
     * @param DeleteProjectHolderResponse $deleteProjectHolderResponse
     * @return mixed
     */
    public function present(DeleteProjectHolderResponse $deleteProjectHolderResponse);
}