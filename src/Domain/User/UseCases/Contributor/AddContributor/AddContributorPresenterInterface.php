<?php


namespace App\Domain\User\UseCases\Contributor\AddContributor;


use App\Domain\User\Entities\Contributor;

interface AddContributorPresenterInterface
{
    /**
     * @param Contributor $contributor
     * @return mixed
     */
    public function present(Contributor $contributor);
}