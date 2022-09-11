<?php


namespace App\Domain\User\Adapters\Gateway\Doctrine;


use App\Domain\User\Entities\Contributor as ContributorEntity;
use App\Domain\User\Entities\ContributorRepository;
use App\Domain\User\Entities\Exception\ContributorNoteFoundException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Exception;
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
    public function add(ContributorEntity $contributor): void
    {
        $contributor = new Contributor($contributor->getFirstName(),$contributor->getLastName(), $contributor->getEmail(), $contributor->getPassword(),null, $contributor->getBirthday(),null);

        $contributor->setState("pending");
        $this->getEntityManager()->persist($contributor);

        $this->getEntityManager()->flush();
    }

    /**
     * @inheritDoc
     * @throws ContributorNoteFoundException
     */
    public function remove(int $id): bool
    {
        $contributor = parent::find($id);

        if (!$contributor) {
            throw  new ContributorNoteFoundException();
        }

        $query = $this->getEntityManager()->createQuery('DELETE FROM \App\Domain\User\Adapters\Gateway\Doctrine\Contributor c WHERE c.id = :id');
        $query->setParameter('id', $id);

        $res = $query->execute();


        if ($res == 1) {
            return true;
        }
        return false;
    }

    /**
     * @inheritDoc
     * @throws ContributorNoteFoundException
     */
    public function upDate(ContributorEntity $contributor): ContributorEntity
    {
        $contributorDoctrine = parent::find($contributor->getId());

        if (!$contributorDoctrine) {
            throw new ContributorNoteFoundException();
        }

        $contributorDoctrine->setFirstName($contributor->getFirstName());
        $contributorDoctrine->setLastName($contributor->getLastName());
        $contributorDoctrine->setEmail($contributor->getEmail());
        $contributorDoctrine->setPassword($contributor->getPassword());
        $contributorDoctrine->setState($contributor->getState());
        $contributorDoctrine->setBirthday($contributor->getBirthday());

        $this->getEntityManager()->flush();

        return $contributor;
    }

    /**
     * @inheritDoc
     */
    public function findOne(int $id): ContributorEntity
    {
      $contributor =  parent::find($id);

      if (!$contributor) {
          throw new ContributorNoteFoundException();
      }

      return new ContributorEntity(
          $contributor->getId(),
          $contributor->getFirstName(),
          $contributor->getLastName(),
          $contributor->getEmail(),
          $contributor->getPassword(),
          $contributor->getState(),
          $contributor->getBirthday()
      );
    }

    /**
     */
    public function findContributorByProjectHolder(int $idProjectHolder): array
    {
        $qb = $this->createQueryBuilder('contributor')
            ->select('contributor.id, contributor.firstName, contributor.lastName, contributor.email, contributor.birthday')
            ->innerJoin('contributor.dons', 'd')
            ->innerJoin('d.project','p')
            ->innerJoin('p.projectHolder','h')
            ->where('h.id = :id')
            ->setParameter('id', $idProjectHolder)
        ;

        return $qb->getQuery()->getResult();;
    }
}