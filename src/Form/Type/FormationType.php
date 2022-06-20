<?php

namespace App\Form\Type;

use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BaseType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('title', TextType::class, [
                'attr' => ['autofocus' => true],
                'label' => 'label.titre',
            ])
            ->add('image', BaseType::class, [
                'attr' => ['rows' => 20],
                'help' => 'help.image',
                'label' => 'label.image',
            ])
            ->add('formationCnfpt', BooleanField::class, [
                'label' => 'label.formationCnfpt',
                'required' => false,
            ])
            ->add('urlFormation', TextType::class, [
                'label' => 'label.urlFormation',
                'required' => false,
            ])
            ->add('thematiques', ThemathiquesInputType::class, [
                'label' => 'label.thematiques',
                'required' => false,
            ])
            ->add('avocats', AvocatsInputType::class, [
                'label' => 'label.avocats',
                'required' => false,
            ])
            ->add('dateDebut', DateType::class, [
                'label' => 'label.dateDebut',
                'help' => 'help.dateDebut',
            ])
            ->add('dateFin', DateType::class, [
                'label' => 'label.dateFin',
                'help' => 'help.dateFin',
            ])
            ->add('presentiel', BooleanField::class, [
                'label' => 'label.presentiel',
                'required' => false,
            ])
            ->add('secteurActivite', SecteurActiviteInputType::class, [
                'label' => 'label.secteurActivite',
                'required' => false,
            ])
            ->add('ville', TextType::class, [
                'label' => 'label.ville',
                'required' => false,
            ])
            ->add('description', TextareaType::class, [
                'attr' => ['rows' => 20],
                'help' => 'help.description',
                'label' => 'label.description',
            ])
            ->add('programme', TextareaType::class, [
                'attr' => ['rows' => 20],
                'help' => 'help.programme',
                'label' => 'label.programme',
            ])
            ->add('objectifs', BaseType::class, [
                'attr' => ['rows' => 20],
                'help' => 'help.objectifs',
                'label' => 'label.objectifs',
            ])
            ->add('modalites', BaseType::class, [
                'attr' => ['rows' => 20],
                'help' => 'help.modalites',
                'label' => 'label.modalites',
            ])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'csrf_field_name' => '_token',
        ]);
    }
}