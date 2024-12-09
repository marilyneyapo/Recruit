<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;



class UserProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('plainPassword', PasswordType::class, [
                'label' => 'Password',
                'required' => false,
                'attr' => ['autocomplete' => 'new-password']
            ])          
            ->add('firstName')
            ->add('lastName')
            ->add('phone')
            ->add('address')
            ->add('city')
            ->add('birthdate', null, [
                'widget' => 'single_text'
            ])
            ->add('domaine', ChoiceType::class, [
                'choices'  => [
                    'Développeur Web' => 'developpeur_web',
                    'RH' => 'rh',
                    'COM' => 'com',
                    'Finances' => 'finances',
                    'Logistique' => 'logistique',
                ],
                'placeholder' => 'Choisissez un domaine',
                'mapped' => false,
                'required' => true,
            ])
            ->add('cvFile', FileType::class, [
                'label' => 'Upload your cv',
                'mapped' => false, // Ne pas lier directement à l'entité
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => '',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
