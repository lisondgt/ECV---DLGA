<?php

namespace App\Controller\Admin;

use App\Entity\Formation;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
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
            BooleanField::new('formationCnfpt')
                ->hideOnIndex(),
            TextField::new('urlFormation')
                ->hideOnIndex(),
            TextField::new('titre'),
            TextEditorField::new('description')
                ->hideOnIndex()
                ->setFormType(CKEditorType::class),
            AssociationField::new('thematiques')
                ->hideOnIndex(),
            DateTimeField::new('dateDebut'),
            DateTimeField::new('dateFin'),
            AssociationField::new('avocats')
                ->hideOnIndex(),
            BooleanField::new('presentiel')
                ->hideOnIndex(),
            FormField::addPanel('Utilisateurs')
                ->onlyOnDetail(),
            AssociationField::new('users', false)->setTemplatePath('admin/users_formation.html.twig')->onlyOnDetail()->setColumns(12),
        ];
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
