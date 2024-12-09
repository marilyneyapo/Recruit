<?php

namespace App\Controller\Admin;

use App\Entity\Questions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class QuestionsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Questions::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Manage Questions')
            ->setPageTitle(Crud::PAGE_NEW, 'Create a new Question')
            ->setPageTitle(Crud::PAGE_EDIT, 'Edit Question')
            ->setPageTitle(Crud::PAGE_DETAIL, 'Question Details');
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('category')
            ->add('type');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('question', 'Question Text'),
            ChoiceField::new('type', 'Type of Answer')
                ->setChoices([
                    'Unique Choice' => 'unique',
                    'Multiple Choices' => 'multiple',
                    'Text' => 'text'
                ]),
            ArrayField::new('options', 'Response Options')
                ->setHelp('Enter multiple options separated by commas for multiple/unique choice questions'),
            AssociationField::new('category', 'Category')
                ->setRequired(true),
        ];
    }
}
