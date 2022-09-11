<?php

namespace App\Domain\User\Entities\Exception;

class ContributorNoteFoundException extends \Exception
{
    public const CONTRIBUTOR_NOT_FOUND = 'Contributor not found';

    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct(  sprintf(self::CONTRIBUTOR_NOT_FOUND), $code, $previous);
    }
}