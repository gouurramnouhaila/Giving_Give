<?php

namespace App\Controller\Admin;

use App\Domain\Project\Adapters\Gateway\Doctrine\Category;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Category::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return  $crud
        // the labels used to refer to this entity in titles, buttons, etc.
        ->setEntityLabelInSingular('Category')
        ->setEntityLabelInPlural('Categories')

        // in addition to a string, the argument of the singular and plural label methods
        // can be a closure that defines two nullable arguments: entityInstance (which will
        // be null in 'index' and 'new' pages) and the current page name
        ->setEntityLabelInSingular(
            fn (?Category $category, ?string $pageName) => $category ? $category->toString() : 'Category'
        )
        ->setEntityLabelInPlural(function (?Category $category, ?string $pageName) {
            return 'edit' === $pageName ? $category->getName() : 'Categories';
        });
}

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            ImageField::new('photo')
            ->setBasePath('uploads/category')
            ->setUploadDir('public/uploads/category')

        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            // ...
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->add(Crud::PAGE_EDIT, Action::SAVE_AND_ADD_ANOTHER)
            ;
    }

}
