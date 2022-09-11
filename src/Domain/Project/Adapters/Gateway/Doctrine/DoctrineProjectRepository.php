<?php


namespace App\Domain\Project\Adapters\Gateway\Doctrine;


use App\Domain\Project\Entities\Exceptions\ProjectNotFoundException;
use App\Domain\Project\Entities\Project;
use App\Domain\Project\Adapters\Gateway\Doctrine\Project as ProjectDoctrine;

use App\Domain\Project\Entities\ProjectRepository;
use App\Domain\User\Adapters\Gateway\Doctrine\DoctrineProjectHolderRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Boolean;
use phpDocumentor\Reflection\Types\This;
use function Zenstruck\Foundry\factory;

class DoctrineProjectRepository extends ServiceEntityRepository implements ProjectRepository
{
    /**
     * @var DoctrineCategoryRepository
     */
    private DoctrineCategoryRepository $categoryRepository;

    /**
     * @var DoctrineProjectHolderRepository
     */
    private DoctrineProjectHolderRepository $projectHolderRepository;

    /**
     * DoctrineProjectRepository constructor.
     * @param ManagerRegistry $registry
     * @param DoctrineCategoryRepository $categoryRepository
     * @param DoctrineProjectHolderRepository $projectHolderRepository
     */
    public function __construct(ManagerRegistry $registry,DoctrineCategoryRepository $categoryRepository,DoctrineProjectHolderRepository $projectHolderRepository)
    {
        parent::__construct($registry, ProjectDoctrine::class);

        $this->categoryRepository = $categoryRepository;
        $this->projectHolderRepository = $projectHolderRepository;
    }

    /**
     * @inheritDoc
     */
    public function add(Project $project): void
    {
       // $category = $this->categoryRepository->find($project->getIdCategory());
        $projectHolder = $this->projectHolderRepository->find($project->getProjectHolderId());

        $project = new ProjectDoctrine($project->getTitle(),$project->getDescription(),$project->getPhoto(),$project->getVideo(),$project->getObjectiveFund(),null, $projectHolder);

        $project->setStatus("pending");

        $this->getEntityManager()->persist($project);
        $this->getEntityManager()->flush();

    }

    /**
     * @inheritDoc
     * @throws ProjectNotFoundException
     */
    public function delete(int $id): bool
    {
        $project = parent::find($id);

        if ($project === null) {
            throw new ProjectNotFoundException();
        }

        $query = $this->getEntityManager()->createQuery('DELETE FROM \App\Domain\Project\Adapters\Gateway\Doctrine\Project p WHERE p.id = :id');
        $query->setParameter('id', $id);

        $query->execute();

        if ($query->execute() == 0) {
            return true;
        }
        return false;
    }

    /**
     * @inheritDoc
     * @throws ProjectNotFoundException
     */
    public function update(Project $project): Project
    {
        $projectDoctrine = $project = parent::find($project->getId());

        if (!$projectDoctrine) {
            throw new ProjectNotFoundException();
        }
        // $category = $this->categoryRepository->find($projectDoctrine->getCategory()->getId());
        $projectDoctrine->setTitle($project->getTitle());
        $projectDoctrine->setDescription($project->getDescription());
        $projectDoctrine->setPhoto($project->getPhoto());
        $projectDoctrine->setVideo($project->getVideo());
        $projectDoctrine->setObjectiveFund($project->getObjectiveFund());
        // $projectDoctrine->setCategory($category);

       $this->getEntityManager()->flush();
       return $project;
    }

    /**
     * @inheritDoc
     */
    public function find($id, $lockMode = null, $lockVersion = null): Project
    {
         $project = parent::find($id, $lockMode, $lockVersion);

         return new Project(
             $project->getId(),
             $project->getTitle(),
             $project->getDescription(),
             $project->getPhoto(),
             $project->getVideo(),
             $project->getObjectiveFund(),
             null,
             null
         );
    }

    /**
     * @inheritDoc
     */
    public function accept(int $id)
    {
        $project = parent::find($id);

        $project->setStatus('accepted');

        $this->getEntityManager()->persist($project);
        $this->getEntityManager()->flush();
    }

    /**
     * @inheritDoc
     */
    public function reject(int $id): void
    {
        $project = parent::find($id);

        $project->setStatus('refused');

        $this->getEntityManager()->persist($project);
        $this->getEntityManager()->flush();
    }

   public function search(string $keyword)
   {
       $query = $this->getEntityManager()->createQuery(
           'SELECT p
            FROM \App\Domain\Project\Adapters\Gateway\Doctrine\Project p WHERE p.title LIKE :keyword'
       )->setParameter('keyword', '%'.$keyword.'%');

       return $query->getResult();
   }
}