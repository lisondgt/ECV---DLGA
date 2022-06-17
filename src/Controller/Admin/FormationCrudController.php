<?php

namespace App\Controller\Admin;

use App\Entity\Formation;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use App\Form\Type\AccordionType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class FormationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Formation::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre', 'Titre'),
            BooleanField::new('formationCnfpt', 'Formation CNFPT')
                ->hideOnIndex(),
            UrlField::new('urlFormation', 'URL de la formation')
                ->hideOnIndex(),
            AssociationField::new('thematiques', 'Thématiques')
                ->hideOnIndex(),
            AssociationField::new('avocats', 'Avocats')
                ->hideOnIndex(),
            DateTimeField::new('dateDebut', 'Date de début'),
            DateTimeField::new('dateFin', 'Date de fin'),
            BooleanField::new('presentiel', 'Formation en présentiel')
                ->hideOnIndex(),
            AssociationField::new('secteurActivite', "Secteur d'activité")
                ->hideOnIndex(),
            TextField::new('ville', 'Ville')
                ->hideOnIndex(),
            TextareaField::new('description', 'Description')
                ->hideOnIndex()
                ->setNumOfRows(3),
            TextEditorField::new('programme', 'Programme')
                ->hideOnIndex()
                ->setFormType(CKEditorType::class),
            CollectionField::new('objectifs', 'Objectifs')
                ->hideOnIndex()
                ->setEntryType(AccordionType::class),
            CollectionField::new('modalites', 'Modalités')
                ->hideOnIndex()
                ->setEntryType(AccordionType::class),
            FormField::addPanel('Utilisateurs')
                ->onlyOnDetail(),
            AssociationField::new('users', false)->setTemplatePath('admin/users_formation.html.twig')->onlyOnDetail()->setColumns(12),
        ];
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('titre')
            ->add('presentiel')
            ->add('secteurActivite')
            ->add('thematiques')
            ->add('dateDebut')
            ->add('dateFin')
            ;
    }

    public function configureAssets(Assets $assets): Assets
    {
        return $assets
            ->addWebpackEncoreEntry('formation')
            ;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig');
    }

    public function configureActions(Actions $actions): Actions
    {
       return $actions
           ->add(Crud::PAGE_INDEX, Action::DETAIL);

    }

}
