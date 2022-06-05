<?php


namespace App\Domain\Project\UseCase\AddProject;


use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineCategoryRepository;
use App\Domain\Project\Entities\Project;
use App\Domain\Project\Entities\ProjectRepository;
use App\Domain\Project\UseCase\Gateway\ProjectFactory;
use function Symfony\Component\DependencyInjection\Loader\Configurator\ref;

class AddProject
{
    /**
     * @var ProjectRepository
     */
    private ProjectRepository $repository;

    /**
     * @var ProjectFactory
     */
    private ProjectFactory $factory;

    private DoctrineCategoryRepository $categoryRepository;


    /**
     * AddProject constructor.
     * @param ProjectRepository $repository
     * @param ProjectFactory $factory
     */
    public function __construct(ProjectRepository $repository, ProjectFactory $factory,DoctrineCategoryRepository $categoryRepository)
    {
        $this->repository = $repository;
        $this->factory = $factory;
        $this->categoryRepository = $categoryRepository;
    }


    /**
     * @param AddProjectRequest $request
     * @param AddProjectPresenterInterface $presenter
     */
    public function execute(AddProjectRequest $request, AddProjectPresenterInterface $presenter) {

        $project = new Project($request->getId(),$request->getTitle(),$request->getDescription(),$request->getPhoto(),$request->getVideo(),$request->getObjectiveFund(),$request->getProjectHolderId(),$request->getCategoryId());

        $this->repository->add($project);

        $presenter->present($project);
    }
}