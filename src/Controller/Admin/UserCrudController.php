<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use Symfony\Component\Security\Core\Role\RoleHierarchyInterface;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Users List')
            ->setPageTitle(Crud::PAGE_DETAIL, fn(User $user) => (string) $user)
            ->setPageTitle(Crud::PAGE_EDIT, fn(User $user) => sprintf('Edit User #%d', $user->getId()))
            ->setPageTitle(Crud::PAGE_NEW, 'Create New User');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnDetail(),
            TextField::new('firstname')
                ->setRequired(true),
            TextField::new('lastname')
                ->setRequired(true),
            TextField::new('email'),
            TextField::new('password')->onlyOnForms(), 
            ArrayField::new('roles')
                ->setLabel('Roles')
                ->setSortable(true)
                ->setFormTypeOptions([
                    'attr' => ['readonly' => false] //METTRE EN LECTURE SEULE
                ])
        ];
    }
}
