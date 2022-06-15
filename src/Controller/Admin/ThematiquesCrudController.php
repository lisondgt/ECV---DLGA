<?php

namespace App\Controller\Admin;

use App\Entity\Thematiques;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ThematiquesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Thematiques::class;
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
