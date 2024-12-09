<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Job;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class JobSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('category', EntityType::class, [
            'class' => Category::class,
            'choice_label' => 'name',
            'required' => false,
            'placeholder' => 'Select a category',
        ])
        
        ->add('location', TextType::class, [
            'required' => false,
            'attr' => ['placeholder' => 'Enter a location'],
        ])
        ->add('type', ChoiceType::class, [
            'choices' => [
                'Full-Time' => 'full_time',
                'Part-Time' => 'part_time',
            ],
            'required' => false,
            'placeholder' => 'Select job type',
        ])

        
        ->add('search', SubmitType::class, [
            'label' => 'Search',
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
{
    $resolver->setDefaults([
        'data_class' => Job::class,  
        'method' => 'GET', 
    ]);
}

    
}
