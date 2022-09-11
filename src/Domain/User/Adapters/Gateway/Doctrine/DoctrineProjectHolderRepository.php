<?php


namespace App\Domain\User\Adapters\Gateway\Doctrine;


use App\Domain\User\Entities\Exception\ProjectHolderNotFound;
use App\Domain\User\Entities\ProjectHolder as ProjectHolderEntities;
use App\Domain\User\Entities\ProjectHolderRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;

class DoctrineProjectHolderRepository extends ServiceEntityRepository implements ProjectHolderRepository,UserLoaderInterface
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry,ProjectHolder::class);
    }

    /**
     * @inheritDoc
     */
    public function add(ProjectHolderEntities $projectHolder): void
    {
        $projectHolderDoc = new ProjectHolder($projectHolder->getFirstName(), $projectHolder->getLastName(), $projectHolder->getEmail(), $projectHolder->getPassword(), $projectHolder->getState(), $projectHolder->getPhoto(), $projectHolder->getBio(), $projectHolder->getBirthday());

        $projectHolderDoc->setFirstName($projectHolder->getFirstName());
        $projectHolderDoc->setLastName($projectHolder->getLastName());
        $projectHolderDoc->setEmail($projectHolder->getEmail());
        $projectHolderDoc->setPassword($projectHolder->getPassword());
        $projectHolderDoc->setBirthday($projectHolder->getBirthday());
        $projectHolderDoc->setState("pending");

        $this->getEntityManager()->persist($projectHolderDoc);
        $this->getEntityManager()->flush();
    }

    /**
     * @inheritDoc
     */
    public function remove(int $id): bool
    {
        $projectHolder = parent::find($id);

        if (!$projectHolder) {
            throw new ProjectHolderNotFound();
        }

        $query = $this->getEntityManager()->createQuery('DELETE FROM \App\Domain\User\Adapters\Gateway\Doctrine\ProjectHolder p WHERE p.id = :id');
        $query->setParameter('id', $id);

        $query->execute();

        if ($query->execute() == 0) {
            return true;
        }
        return false;
    }

    /**
     * @inheritDoc
     */
    public function upDate(ProjectHolderEntities $projectHolder): ProjectHolderEntities
    {
        $projectHolderDoctrine = parent::find($projectHolder->getId());

        $projectHolderDoctrine->setFirstName($projectHolder->getFirstName());
        $projectHolderDoctrine->setLastName($projectHolder->getLastName());
        $projectHolderDoctrine->setEmail($projectHolder->getEmail());
        $projectHolderDoctrine->setPassword($projectHolder->getPassword());
        $projectHolderDoctrine->setPhoto($projectHolder->getPhoto());
        $projectHolderDoctrine->setBio($projectHolder->getBio());
        $projectHolderDoctrine->setBirthday($projectHolder->getBirthday());

        $this->getEntityManager()->flush();

        return  $projectHolder;
    }

    /**
     * @inheritDoc
     */
    public function findOne(int $id): ProjectHolderEntities
    {
        $projectHolder = parent::find($id);

        return new ProjectHolderEntities(
            $id,
            $projectHolder->getFirstName(),
            $projectHolder->getLastName(),
            $projectHolder->getEmail(),
            $projectHolder->getPassword(),
            $projectHolder->getState(),
            $projectHolder->getPhoto(),
            $projectHolder->getBio(),
            $projectHolder->getBirthday()
        );
    }

    /**
     * @throws NonUniqueResultException
     */
    public function loadUserByIdentifier(string $usernameOrEmail): ?ProjectHolder
    {
        $entityManager = $this->getEntityManager();

        return $entityManager->createQuery(
            'SELECT u
                FROM \App\Domain\User\Adapters\Gateway\Doctrine\ProjectHolder u
                WHERE u.username = :query
                OR u.email = :query'
        )
            ->setParameter('query', $usernameOrEmail)
            ->getOneOrNullResult();
    }

    /** @throws NonUniqueResultException
     * @deprecated since Symfony 5.3
     */
    public function loadUserByUsername(string $usernameOrEmail): ?ProjectHolder
    {
        return $this->loadUserByIdentifier($usernameOrEmail);
    }
}