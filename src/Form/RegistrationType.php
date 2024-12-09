<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\NotBlank;



class RegistrationType extends AbstractType
{             
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('firstName', TextType::class, [
                'label' => 'First Name',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your first name',
                    ]),
                ],
                'required' => true,
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Last Name',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your last name',
                    ])
                ]
            ])
            
            ->add('phone', TextType::class, [
                'label' => 'Phone Number',
                'required' => false,
            ])
            ->add('address', TextType::class, [
                'label' => 'Address',
                'required' => false,
            ])
            ->add('city', TextType::class, [
                'label' => 'City',
                'required' => false,
            ])
            ->add('birthdate', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Birthdate',
                'required' => false,
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
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your email address',
                    ])
                ]    
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => ['label' => 'Password'],
                'second_options' => ['label' => 'Confirm Password'],
                'invalid_message' => 'The password fields must match.',
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your password',
                    ]),
                ],

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
                        'mimeTypesMessage' => 'Please upload a valid PDF File',
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
