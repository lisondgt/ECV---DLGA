<?php

namespace App\Controller\Admin;

use App\Entity\Avocats;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AvocatsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Avocats::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom', 'Nom'),
            TextField::new('prenom', 'Prénom'),
            ImageField::new('image', 'Image')
                ->setBasePath('uploads/images/')
                ->setUploadDir('public/images/upload')
                ->hideOnIndex(),
        ];
    }

}
