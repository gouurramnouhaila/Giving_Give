<?php


namespace App\Domain\Project\Entities;


interface CategoryRepository
{
    /**
     * @param int $id
     * @return Category
     */
    public function findOneById(int $id): Category;

    /**
     * @return mixed
     */
    public function findAll();

    /**
     * @param Category $category
     * @return mixed
     */
    public function add(Category $category);

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);

    /**
     * @param Category $category
     * @return mixed
     */
    public function update(Category $category);


}