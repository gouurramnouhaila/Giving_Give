<?php

namespace App\Controller\Admin;

use App\Domain\User\Adapters\Gateway\Doctrine\ProjectHolder;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class ProjectHolderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProjectHolder::class;
    }

    public function createEntity(string $entityFqcn): ProjectHolder
    {
        $entity = new ProjectHolder();
        $entity->setState('pending');
        return $entity;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('firstName'),
            TextField::new('lastName'),
            EmailField::new('email'),
            TextEditorField::new('bio'),
            TextField::new('password')->hideOnIndex()->setFormType(PasswordType::class),
            ImageField::new('photo')
                ->setUploadDir('/public/uploads'),
            DateField::new('birthday')
        ];
    }

}
