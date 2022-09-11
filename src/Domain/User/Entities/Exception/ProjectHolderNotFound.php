<?php

namespace App\Domain\User\Entities\Exception;

class ProjectHolderNotFound extends \Exception
{
    public const PROJECT_HOLDER_NOT_FOUND = 'ProjectHolder not found';

    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct(self::PROJECT_HOLDER_NOT_FOUND, $code, $previous);
    }
}