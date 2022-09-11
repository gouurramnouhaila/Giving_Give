<?php

namespace App\Domain\Project\UseCase\Category\ListCategory;

class ListCategoryResponse
{
    private ?array $categories = null;

    /**
     * @param array|null $categories
     */
    public function __construct(?array $categories)
    {
        $this->categories = $categories;
    }

    /**
     * @return array|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param array|null $categories
     */
    public function setCategories(?array $categories): void
    {
        $this->categories = $categories;
    }
}