<?php

namespace App\Controller\Admin;

use App\Entity\Job;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Vich\UploaderBundle\Form\Type\VichFileType;

class JobCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Job::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Job List')
            ->setPageTitle(Crud::PAGE_DETAIL, fn(Job $job) => (string) $job)
            ->setPageTitle(Crud::PAGE_EDIT, fn(Job $job) => sprintf('Edit Job #%d', $job->getId()))
            ->setPageTitle(Crud::PAGE_NEW, 'Create New Job');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('type'),
            TextField::new('company'),
            IntegerField::new('anneesExperienceRequis'),
            ImageField::new('logo')
                ->setBasePath('uploads/joblogos/')
                ->onlyOnIndex(),
            TextField::new('logoFile', 'Logo')
                ->setFormType(VichFileType::class)
                ->onlyOnForms(),
            TextField::new('url'),
            TextField::new('position'),
            TextField::new('location'),
            TextareaField::new('description'),
            TextField::new('howToApply'),
            TextField::new('token'),
            BooleanField::new('public'),
            BooleanField::new('activated'),
            TextField::new('email'),
            DateTimeField::new('expiresAt'),
            AssociationField::new('category'),
        ];
    }
}
