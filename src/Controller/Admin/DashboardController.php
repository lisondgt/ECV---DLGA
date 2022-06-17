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

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        //if ('jane' === $this->getUser()->getUsername()) {
        //    return $this->redirect('...');
        //}

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
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
