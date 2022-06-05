<?php


namespace App\Domain\Project\UseCase\AcceptProject;


interface AcceptProjectPresenterInterface
{
    /**
     * @param AcceptProjectResponse $acceptProjectResponse
     * @return mixed
     */
    public function present(AcceptProjectResponse $acceptProjectResponse);
}