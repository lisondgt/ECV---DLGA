<?php

namespace App\Controller\Admin;

use App\Entity\Avocats;
use App\Entity\Formation;
use App\Entity\SecteurActivite;
use App\Entity\Thematiques;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Admin DLGA');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            MenuItem::linkToCrud('Formation', 'fa fa-graduation-cap', Formation::class),
            MenuItem::linkToCrud('Thématiques', 'fa fa-tag', Thematiques::class),
            MenuItem::linkToCrud('Avocats', 'fa fa-user', Avocats::class),
            MenuItem::linkToCrud("Secteurs d'activités", 'fa fa-briefcase', SecteurActivite::class),
        ];
    }
}
