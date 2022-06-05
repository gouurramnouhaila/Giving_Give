<?php


namespace App\Domain\Project\UseCase\UpDateProject;


use App\Domain\Project\Entities\Project;

interface UpDateProjectPresenterInterface
{
    /**
     * @param Project $upDateProjectResponse
     */
    public function present(Project $upDateProjectResponse): void ;
}