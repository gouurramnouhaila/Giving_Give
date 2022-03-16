<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategoriesRepository;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Require ROLE_ADMIN for *every* controller method in this class.
 *
 * @IsGranted("ROLE_USER")
 */
class CategorieController extends AbstractController
{
    private $categoriesRepository;

    public function __construct(CategoriesRepository $repository)
    {
        $this->categoriesRepository = $repository;
    }

    /**
     * @Route("/categories", name="app_category_index")
     */
    public function index(): Response
    {
        $categories = $this->categoriesRepository->findAll();

        return $this->render('categorie/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/category/new",name="app_category_new")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function addCategory(Request $request) {
        $category = new Categorie();

        $form = $this->createForm(CategorieType::class, $category);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();

            return $this->redirectToRoute('app_category_index');
        }
        return $this->render('categorie/new.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/category/{id}", name="app_categorie_supp")
     */
    public function deleteCategorie(int $id) {
        $categorie = $this->categoriesRepository->findOneBy(['id' => $id]);

        if(!$categorie) {
            throw $this->createNotFoundException("Pas de categorie trouvé pour l'identifiant ".$categorie->getId());
        }

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->remove($categorie);
        $entityManager->flush();

        return $this->redirectToRoute('app_category_index');
    }

}
