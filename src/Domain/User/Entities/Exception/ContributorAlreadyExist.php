<?php

namespace App\Domain\User\Entities\Exception;

class ContributorAlreadyExist extends \Exception
{
    public const CONTRIBUTOR_EXIST = 'Contributor is already exist';

    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct(  sprintf(self::CONTRIBUTOR_EXIST), $code, $previous);
    }
}