<?php


namespace App\Domain\User\UseCases\ProjectHolder\AddProjectHolder;


use App\Domain\User\Entities\ProjectHolder;

interface AddProjectHolderPresenterInterface
{
    /**
     * @param ProjectHolder $projectHolder
     * @return mixed
     */
    public function present(ProjectHolder $projectHolder);
}