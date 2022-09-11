<?php


namespace App\Domain\Project\UseCase\SearchProject;


class SearchProjectRequest
{
    public ?string $keyword = null;

    /**
     * @param string|null $keyword
     */
    public function __construct(?string $keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @return string|null
     */
    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    /**
     * @param string|null $keyword
     */
    public function setKeyword(?string $keyword): void
    {
        $this->keyword = $keyword;
    }
}