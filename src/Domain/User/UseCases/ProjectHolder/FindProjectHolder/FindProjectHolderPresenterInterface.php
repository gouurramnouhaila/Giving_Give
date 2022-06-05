<?php


namespace App\Domain\User\UseCases\ProjectHolder\FindProjectHolder;




use App\Domain\User\Adapters\Gateway\Doctrine\ProjectHolder;

interface FindProjectHolderPresenterInterface
{
    /**
     * @param ProjectHolder $projectHolder
     * @return mixed
     */
    public function present(ProjectHolder $projectHolder);

}