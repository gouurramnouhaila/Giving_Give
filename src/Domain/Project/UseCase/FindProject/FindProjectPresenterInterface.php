<?php


namespace App\Domain\Project\UseCase\FindProject;


use App\Domain\Project\Entities\Project;

interface FindProjectPresenterInterface
{
    public function present(Project $project): void ;
}