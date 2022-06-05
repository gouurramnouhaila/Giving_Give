<?php


namespace App\Domain\User\Adapters\Gateway\Doctrine;


use App\Domain\User\Entities\Admin as AdminEntity;
use App\Domain\User\Entities\AdminRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DoctrineAdminRepository extends ServiceEntityRepository implements AdminRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry,Admin::class);
    }

    /**
     * @inheritDoc
     */
    public function add(AdminEntity $admin)
    {
        $admin = new Admin($admin->getFirstName(), $admin->getLastName(), $admin->getEmail(),$admin->getPassword(),$admin->isVerify());
        $this->getEntityManager()->persist($admin);

        $this->getEntityManager()->flush();
    }

    /**
     * @inheritDoc
     */
    public function remove(int $id): bool
    {
        $admin = $this->find($id);

        $query = $this->getEntityManager()->createQuery('DELETE FROM \App\Domain\User\Adapters\Gateway\Doctrine\Admin p WHERE p.id = :id');
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
    public function upDate(AdminEntity $admin)
    {

        $adminDoctrine = $this->find($admin->getId());

        $adminDoctrine->setFirstName($admin->getFirstName());
        $adminDoctrine->setLastName($admin->getLastName());
        $adminDoctrine->setEmail($admin->getEmail());
        $adminDoctrine->setPassword($admin->getPassword());
        $adminDoctrine->setVerify($admin->isVerify());


        $this->getEntityManager()->flush();

    }

    /**
     * @inheritDoc
     */
    public function findOne(int $id): Admin
    {
        return $this->find($id);
    }
}