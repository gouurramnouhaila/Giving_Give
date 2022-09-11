<?php


namespace App\Domain\Don\Adapters\Gateway\Doctrine;


use App\Domain\Don\Entities\Don;
use App\Domain\Don\Adapters\Gateway\Doctrine\Don as DonEntity;
use App\Domain\Don\Entities\DonReposirtory;
use App\Domain\Project\Adapters\Gateway\Doctrine\Category as CategoryDoctrine;
use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineProjectRepository;
use App\Domain\User\Adapters\Gateway\Doctrine\DoctrineContributorRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DoctrineDonRepository extends ServiceEntityRepository implements DonReposirtory
{
    private DoctrineProjectRepository $projectRepository;

    private DoctrineContributorRepository $contributorRepository;

    public function __construct(ManagerRegistry $registry,DoctrineProjectRepository $projectRepository, DoctrineContributorRepository $contributorRepository)
    {
        parent::__construct($registry, DonEntity::class);

        $this->projectRepository = $projectRepository;
        $this->contributorRepository = $contributorRepository;
    }
    /**
     * @inheritDoc
     */
    public function makeDonation(Don $don): Don
    {
        $contributor = $this->contributorRepository->find($don->getIdContributor());
        $project = $this->projectRepository->findOneBy(['id' => $don->getIdProject()]);

        $donDoctrine = new DonEntity($don->getAmount(), $contributor, $project, $don->getDateDonation());

        $this->getEntityManager()->persist($donDoctrine);
        $this->getEntityManager()->flush();

        return $don;
    }
}