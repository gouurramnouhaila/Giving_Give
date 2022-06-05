<?php


namespace App\Domain\Project\UseCase\UpDateProject;


use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineCategoryRepository;
use App\Domain\Project\Adapters\Gateway\Doctrine\DoctrineProjectRepository;
use App\Domain\Project\Entities\Exceptions\ProjectNotFoundException;
use App\Domain\Project\Entities\Project as projectEntity;
use App\Domain\Project\Entities\ProjectRepository;

class UpDateProject
{
    /**
     * @var DoctrineProjectRepository
     */
    private DoctrineProjectRepository $projectRepository;

    /**
     * @var DoctrineCategoryRepository
     */
    private DoctrineCategoryRepository $categoryRepository;

    /**
     * UpDateProjectHolder constructor.
     * @param DoctrineProjectRepository $repository
     */
    public function __construct(DoctrineProjectRepository $repository,DoctrineCategoryRepository $categoryRepository)
    {
        $this->projectRepository = $repository;
        $this->categoryRepository = $categoryRepository;
    }


    /**
     * @param UpDateProjectRequest $request
     * @param UpDateProjectPresenterInterface $presenter
     */
    public function execute(UpDateProjectRequest $request,UpDateProjectPresenterInterface $presenter) {

        $project = $this->projectRepository->find($request->id);
        //$category = $this->categoryRepository->find($request->idCategory);

        if(!$project) {
            throw new ProjectNotFoundException();
        }

        $projectEntity = new projectEntity($project->getId(), $request->title,$request->description,$request->photo,$request->video,$request->objectiveFund, null,$request->idCategory);


        /* update project Doctrine
        $project->setTitle($request->title);
        $project->setDescription($request->description);
        $project->setPhoto($request->photo);
        $project->setVideo($request->video);
        $project->setObjectiveFund($request->objectiveFund);
        $project->setCategory($category);*/

        $projectModify = $this->projectRepository->update($projectEntity);

        $presenter->present($projectEntity);



    }
}