<?php


namespace App\Domain\Don\Adapters\Gateway\Doctrine;


use App\Domain\Don\Entities\Don;
use App\Domain\Don\Adapters\Gateway\Doctrine\Don as DonEntity;
use App\Domain\Don\Entities\DonReposirtory;
use App\Domain\Project\Adapters\Gateway\Doctrine\Category as CategoryDoctrine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DoctrineDonRepository extends ServiceEntityRepository implements DonReposirtory
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DonEntity::class);
    }
    /**
     * @inheritDoc
     */
    public function makeDonation(float $amount): Don
    {
        // TODO: Implement makeDonation() method.
    }
}