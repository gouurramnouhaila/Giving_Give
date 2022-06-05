<?php


namespace App\Domain\User\UseCases\ProjectHolder\UpDateProjectHolder;


use App\Domain\User\Entities\ProjectHolder;

interface UpDateProjectHolderPresenterInterface
{
    /**
     * @param ProjectHolder $upDateProjectResponse
     */
    public function present(ProjectHolder $upDateProjectResponse): void ;
}