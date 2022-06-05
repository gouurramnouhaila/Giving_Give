<?php


namespace App\Domain\User\UseCases\Contributor\FindAllContributor;


interface FindAllContributorPresenterInterface
{

    /**
     * @param FindAllContributorResponse $response
     * @return mixed
     */
    public function present(FindAllContributorResponse $response);
}