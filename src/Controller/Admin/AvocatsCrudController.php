<?php

namespace App\Controller\Admin;

use App\Entity\Avocats;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AvocatsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Avocats::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
