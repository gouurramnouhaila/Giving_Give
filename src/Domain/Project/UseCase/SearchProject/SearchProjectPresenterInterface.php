<?php


namespace App\Domain\Project\UseCase\SearchProject;


use App\Domain\Project\Entities\Project;

interface SearchProjectPresenterInterface
{

    public function present(SearchProjectResponse $searcProjectResponse);
}