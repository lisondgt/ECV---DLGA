<?php

namespace App\Controller\Admin;

use App\Entity\Formation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CodeEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class FormationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Formation::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre'),
            CodeEditorField::new('description')
                ->setNumOfRows(15)->setLanguage('markdown')
                ->setHelp('Use Markdown to format the blog post contents. HTML is allowed too.'),
            AssociationField::new('thematiques'),
            DateTimeField::new('dateDebut'),
            DateTimeField::new('dateFin'),
            AssociationField::new('avocats'),
            BooleanField::new('presentiel'),
            BooleanField::new('formationDLGA')
        ];
    }

}
