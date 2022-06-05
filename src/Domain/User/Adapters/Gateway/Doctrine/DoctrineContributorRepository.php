<?php


namespace App\Domain\User\Adapters\Gateway\Doctrine;


use App\Domain\User\Entities\Contributor as ContributorEntity;
use App\Domain\User\Entities\ContributorRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DoctrineContributorRepository extends  ServiceEntityRepository implements ContributorRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry,Contributor::class);
    }

    /**
     * @inheritDoc
     */
    public function add(ContributorEntity $contributor)
    {
        $contributor = new Contributor($contributor->getId(),$contributor->getFirstName(), $contributor->getLastName(), $contributor->getEmail(),$contributor->getPassword(),$contributor->getState(),$contributor->getBirthday());
        $this->getEntityManager()->persist($contributor);

        $this->getEntityManager()->flush();
    }

    /**
     * @inheritDoc
     */
    public function remove(int $id): bool
    {
        $contributor = $this->find($id);

        $query = $this->getEntityManager()->createQuery('DELETE FROM \App\Domain\User\Adapters\Gateway\Doctrine\Contributor p WHERE p.id = :id');
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
    public function upDate(ContributorEntity $contributor): Contributor
    {
        $contributorDoctrine = $this->findOne($contributor->getId());

        $contributorDoctrine->setFirstName($contributor->getFirstName());
        $contributorDoctrine->setLastName($contributor->getLastName());
        $contributorDoctrine->setEmail($contributor->getEmail());
        $contributorDoctrine->setPassword($contributor->getPassword());
        $contributorDoctrine->setState($contributor->getState());
        $contributorDoctrine->setBirthday($contributor->getBirthday());


        $this->getEntityManager()->flush();

        return $contributorDoctrine;

    }

    /**
     * @inheritDoc
     */
    public function findOne(int $id): Contributor
    {
      return $this->find($id);
    }
}