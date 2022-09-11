<?php

namespace App\Controller\Admin;

use App\Domain\User\Adapters\Gateway\Doctrine\Contributor;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class ContributorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Contributor::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            yield TextField::new('firstName'),
            yield TextField::new('lastName'),
            yield TextField::new('email'),
            yield TextField::new('password')->setFormType(PasswordType::class),
            yield DateField::new('birthday')
        ];
    }



}
