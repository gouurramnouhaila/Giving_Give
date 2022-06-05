<?php


namespace App\Domain\Project\Entities\Exceptions;

use Throwable;

/**
 * Class ProjectNotFoundException
 * @package App\Domain\Project\Entities\Exceptions
 * final indique que la class ne peut pas etre changé dans la suite de programme
 */
final class ProjectNotFoundException extends \Exception
{
    public const PROJECT_NOT_FOUND_MESSAGE = 'Project not found.';

    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct(  sprintf(self::PROJECT_NOT_FOUND_MESSAGE), $code, $previous);
    }
}