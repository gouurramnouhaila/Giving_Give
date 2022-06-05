<?php


namespace App\Domain\User\Adapters\Gateway\Doctrine;


use App\Domain\User\Entities\ProjectHolder as ProjectHolderEntities;
use App\Domain\User\Entities\ProjectHolderRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;

class DoctrineProjectHolderRepository extends ServiceEntityRepository implements ProjectHolderRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry,ProjectHolder::class);
    }

    /**
     * @inheritDoc
     */
    public function add(ProjectHolderEntities $projectHolder)
    {
        $projectHolder = new ProjectHolder($projectHolder->getFirstName(), $projectHolder->getLastName(), $projectHolder->getEmail(), $projectHolder->getPassword(), $projectHolder->getState(), $projectHolder->getPhoto(), $projectHolder->getBio(), $projectHolder->getBirthday());

        $this->getEntityManager()->persist($projectHolder);
        $this->getEntityManager()->flush();
    }

    /**
     * @inheritDoc
     */
    public function remove(int $id): bool
    {
        $projectHolder = $this->find($id);

        $query = $this->getEntityManager()->createQuery('DELETE FROM \App\Domain\User\Adapters\Gateway\Doctrine\ProjectHolder p WHERE p.id = :id');
        $query->setParameter('id', $id);

        $query->execute();


        if ($query->execute() == 0) {
            return true;
        }
        else return false;
    }

    /**
     * @inheritDoc
     */
    public function upDate(ProjectHolderEntities $projectHolder): ProjectHolder
    {
        $projectHolderDoctrine = $this->find($projectHolder->getId());

        $projectHolderDoctrine->setFirstName($projectHolder->getFirstName());
        $projectHolderDoctrine->setLastName($projectHolder->getLastName());
        $projectHolderDoctrine->setEmail($projectHolder->getEmail());
        $projectHolderDoctrine->setPassword($projectHolder->getPassword());
        $projectHolderDoctrine->setState($projectHolder->getState());
        $projectHolderDoctrine->setPhoto($projectHolder->getPhoto());
        $projectHolderDoctrine->setBio($projectHolder->getBio());
        $projectHolderDoctrine->setBirthday($projectHolder->getBirthday());

        $this->getEntityManager()->flush();

        return  $projectHolderDoctrine;
    }

    /**
     * @inheritDoc
     */
    public function findOne(int $id): ProjectHolderEntities
    {
        // TODO: Implement findOne() method.
    }
}