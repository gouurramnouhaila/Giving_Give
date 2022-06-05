<?php


namespace App\Domain\User\UseCases\Contributor\FindAllContributor;


class FindAllContributorResponse
{

    private $contributors;

    /**
     * FindAllContributorResponse constructor.
     * @param $contributors
     */
    public function __construct($contributors)
    {
        $this->contributors = $contributors;
    }

    /**
     * @return mixed
     */
    public function getContributors()
    {
        return $this->contributors;
    }

    /**
     * @param mixed $contributors
     */
    public function setContributors($contributors): void
    {
        $this->contributors = $contributors;
    }




}