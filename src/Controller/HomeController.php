<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Spatie\CalendarLinks\Link;

class HomeController
{
    /**
     * @Route("/")
     * php -v*/
    public function number(): Response
    {
        $number = random_int(0, 100);

        $from = \DateTime::createFromFormat('Y-m-d H:i', '2022-06-14 09:00');
        $to = \DateTime::createFromFormat('Y-m-d H:i', '2022-06-14 18:00');

        $link = Link::create('Sebastian’s birthday', $from, $to)
            ->description('Cookies & cocktails!')
            ->address('Kruikstraat 22, 2018 Antwerpen');

        // Generate a link to create an event on Google calendar
        // echo $link->google();

        // Generate a link to create an event on Yahoo calendar
        // echo $link->yahoo();

        // Generate a link to create an event on outlook.live.com calendar
        $outlookLink = $link->webOutlook();

        // Generate a link to create an event on outlook.office.com calendar
        // echo $link->webOffice();

        // Generate a data uri for an ics file (for iCal & Outlook)
        $icsLink = $link->ics();

        return new Response(
            '<html>
                        <body>
                            <p>Lucky number: ' . $number . '</p>
                            <a href="' . $icsLink . '">Lien ICS Calendar</a>
                            <a href="' . $outlookLink . '">Lien outlook Calendar</a>
                        </body>
                    </html>'
        );
    }
}