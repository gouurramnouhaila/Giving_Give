<?php


namespace App\Domain\User\UseCases\ProjectHolder\FindAllProjectHolder;


interface FindAllProjectHolderPresenterInterface
{
    /**
     * @param FindAllProjectHolderResponse $projectHolder
     * @return mixed
     */
    public function present(FindAllProjectHolderResponse $projectHolder);

}