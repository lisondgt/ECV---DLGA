<?php

namespace App\Form\Type;

use App\Entity\Formation;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('title', null, [
                'attr' => ['autofocus' => true],
                'label' => 'label.titre',
            ])
            ->add('description', null, [
                'attr' => ['rows' => 20],
                'help' => 'help.description',
                'label' => 'label.description',
            ])
            ->add('thematiques', ThemathiquesInputType::class, [
                'label' => 'label.thematiques',
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
            ->add('avocats', AvocatsInputType::class, [
                'label' => 'label.avocats',
                'required' => false,
            ])
            ->add('presentiel', BooleanField::class, [
                'label' => 'label.presentiel',
                'required' => false,
            ])
            ->add('formationDLGA', BooleanField::class, [
                'label' => 'label.formationDLGA',
                'required' => false,
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