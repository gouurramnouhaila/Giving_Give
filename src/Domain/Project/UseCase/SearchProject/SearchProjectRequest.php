<?php


namespace App\Domain\Project\UseCase\SearchProject;


class SearchProjectRequest
{
    public $keyword;

    /**
     * SearchProjectRequest constructor.
     * @param $keyword
     */
    public function __construct($keyword)
    {
        $this->keyword = $keyword;
    }


}