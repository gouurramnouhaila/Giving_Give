<?php


namespace App\Domain\Project\Adapters\Gateway\Doctrine;


use App\Domain\Project\Entities\Category;
use App\Domain\Project\Entities\CategoryRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DoctrineCategoryRepository extends ServiceEntityRepository implements CategoryRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, \App\Domain\Project\Adapters\Gateway\Doctrine\Category::class);
    }

    /**
     * @inheritDoc
     */
    public function findOneById(int $id): Category
    {
        // TODO: Implement findOneById() method.
    }

    /**
     * @inheritDoc
     */
    public function add(Category $category)
    {
        // TODO: Implement add() method.
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @inheritDoc
     */
    public function update(Category $category)
    {
        // TODO: Implement update() method.
    }
}