<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* actualites/press.html.twig */
class __TwigTemplate_35fadeb6dbd0ad0c881b7a24d38824f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualites/press.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualites/press.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "actualites/press.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DLGA - Articles de press";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"actualites-press-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Page d'accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Dans la presse</span></li>
                </ol>
            </nav>
            <div class=\"header\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Dans la press</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        Nos collaborateurs sont aussi dans la <span class=\"fst-italic\">presse écrite</span> !
                    </h1>
                </div>
                <div class=\"content-scrolldown\">
                    <a href=\"#anchor-scrolldown\" class=\"scrolldown\">
                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/arrow-down-grey-dark.svg"), "html", null, true);
        echo "\" class=\"icon-arrow-down\">
                    </a>
                </div>
            </div>
        </div>

        <div id=\"anchor-scrolldown\"></div>

        <div class=\"list-container\">
            <a href=\"#\" class=\"list-element-link\" data-bs-toggle=\"modal\"
               data-bs-target=\"#pressModal1\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Vers une meilleure gestion des crises - Analyse
                            juridique</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <div class=\"modal fade modal-press\" id=\"pressModal1\" tabindex=\"-1\"
                 aria-labelledby=\"pressModal1Label\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title title-medium-40 text-grey-text\"
                                id=\"pressModal1Label\">Vers une meilleure gestion des crises - Analyse juridique</h5>
                            <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                Fermer
                            </a>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"content-left\">
                                <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"content-right\">
                                <p class=\"text-book-18 text-grey-darker\">
                                    La proposition de loi portée par le député Fabien Matras visant à consolider le
                                    modèle de sécurité civile et valoriser les pompiers profes- sionnels et volontaires
                                    a été définitive- ment adoptée le 16 novembre 2021. Cette loi a vocation à répondre
                                    aux « défis auxquels nous faisons face » et à adapter notre modèle pour répondre
                                    davantage aux besoins actuels.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    En effet, par exemple, en matière de risques technologiques, il est apparu, lors de
                                    la commission d’enquête séna- toriale sur l’incendie de l’usine Lubrizol à Rouen,
                                    que 10 % de la population interrogée affirme savoir réagir si un accident se produit
                                    près de chez elle et 62 % des élus font part d’un manque d’information sur les
                                    risques indus- triels. Cela est d’autant plus domma- geable que les premières heures
                                    sont décisives dans la gestion de crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    La loi apporte une nouvelle envergure à la coopération locale en matière de
                                    prévention, renforce les synergies, l’efficacité des différents intervenants et
                                    adapte les outils. C’est d’ailleurs en ce sens qu'elle indique que la direc- tion
                                    des opérations est assurée par le représentant de l’État dans le départe- ment
                                    (article 12), qu’un correspondant incendie et secours sera créé comme interlocuteur
                                    privilégié du service départemental ou territorial d’incendie et de secours dans la
                                    commune. De nouvelles règles ont été instaurées concernant les plans communaux et
                                    intercommunaux de sauvegarde pour accroître leur existence et renforcer leur
                                    efficacité afin d’enrichir la gestion de crise.
                                    Plan communal de sauvegarde
                                    Créé par l’article 13 de la loi n° 2004- 811 du 13 août 2004, le plan communal de
                                    sauvegarde (PCS) est l'outil de plani- fication permettant à une commune d'organiser
                                    et de mettre en œuvre les moyens d'information, de formation, d'alerte, de
                                    sauvegarde et de soutien aux populations pour faire face à des crises et à des
                                    événements de sécurité civile divers (inondations, épisodes neigeux, canicules,
                                    accident de trans- port de matières dangereuses, etc.). Même si le PCS ne crée aucun
                                    moyen supplémentaire, il recense les moyens existants pour offrir une réponse orga-
                                    nisée et adaptée lors de la survenance d’une crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    La loi avait instauré une obligation de réaliser un tel document pour les communes
                                    considérées très expo- sées à un risque. Ainsi, l’obligation de réaliser un PCS
                                    concernait auparavant les communes dotées d’un plan de prévention des risques
                                    naturels prévi- sibles approuvé (PPRNP) ou comprises dans le champ d’application
                                    d’un plan particulier d’intervention (PPI) dans le cadre du plan Orsec (organisation
                                    de la réponse de sécurité civile, ndlr).
                                    Même si toutes les communes souhai- tant renforcer la résilience des terri- toires
                                    peuvent volontairement se doter d’un PCS, en pratique, en raison du coût que
                                    celui-ci peut représenter pour certaines collectivités, ces cas sont rares. Ainsi,
                                    en 2015, le ministère de l’Intérieur indiquait que seuls les deux tiers des communes
                                    soumises à l’obligation d’élaborer un PCS l’avaient adopté.
                                    La loi a dorénavant étendu le champ d’application de l’obligation de réaliser un PCS
                                    au regard de l’utilité d’un tel document lors de la survenance d’une crise. En ce
                                    sens, l’obligation d’établis- sement d’un PCS est applicable sur de nombreuses
                                    nouvelles zones (1), concernées par un risque spécifique, tel que, par exemple, les
                                    territoires à risque important d'inondation (2). L’article L.731-1 du code de la
                                    sécurité intérieure prévoyait, dans sa version antérieure à la loi Matras, qu’un
                                    plan intercommunal de sauvegarde (PICS) pouvait « être établi en lieu et place du
                                    plan communal de sauvegarde », de manière donc facultative. Dans une contribution
                                    écrite, la Direction générale de la sécurité civile et de la gestion des crises
                                    (DGSCGC) a indiqué aux rapporteurs qu’elle a constaté que « les PICS ont démontré
                                    leur utilité là où ils ont été créés » et que « les Sdis [services départemen- taux
                                    d'incendie et de secours, ndlr] de ces départements ont reconnu l’utilité de ces
                                    dispositifs tant dans la prépa- ration à la gestion de crise que dans la réponse
                                    d’urgence ».
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Les PICS ne sont donc pas une nouveauté mais l’évolution tient en leur caractère
                                    dorénavant obli- gatoire. Codifié dans un nouvel article L.731-4 qui modifie
                                    significati- vement les dispositions applicables au PICS, il est instauré que ce
                                    plan est désormais obligatoire pour tous les EPCI dont au moins une commune membre
                                    est tenue d’élaborer un PCS. Ce changement n’est pas anodin puisqu’il concernerait,
                                    selon la DGSCGC, 1 125 établissements publics de coopération intercom- munale à
                                    fiscalité propre (EPCI-FP) sur 1 270. Leur rôle, jusqu’à maintenant marginal en
                                    matière de sécurité civile, va donc évoluer.
                                    Le choix de l’échelle de l’EPCI répond à la volonté de proposer une réponse
                                    effective et efficace dépassant le seul rayon d’action de la commune lorsqu’un
                                    sinistre d’ampleur touche une commune. En effet, il est rare que celui-ci n’ait pas
                                    d’impact sur les communes voisines.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    L’objectif est « de préparer la réponse aux situations de crise en organisant, a
                                    minima, la mobilisation des capa- cités intercommunales au profit de la ou des
                                    communes concernées, la mutualisation des capacités commu- nales ainsi que le
                                    rétablissement des compétences ou intérêts commu- nautaires » (3). Les EPCI
                                    concernés ont jusqu’en décembre 2026 pour élaborer le PICS.
                                    Répartition et partage des compétences
                                    Créé par l’article 13 de la loi n° 2004- 811 du 13 août 2004, le plan communal de
                                    sauvegarde (PCS) est l'outil de plani- fication permettant à une commune d'organiser
                                    et de mettre en œuvre les moyens d'information, de formation, d'alerte, de
                                    sauvegarde et de soutien aux populations pour faire face à des crises et à des
                                    événements de sécurité civile divers (inondations, épisodes neigeux, canicules,
                                    accident de trans- port de matières dangereuses, etc.). Même si le PCS ne crée aucun
                                    moyen supplémentaire, il recense les moyens existants pour offrir une réponse orga-
                                    nisée et adaptée lors de la survenance d’une crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    La loi avait instauré une obligation de réaliser un tel document pour les communes
                                    considérées très expo- sées à un risque. Ainsi, l’obligation de réaliser un PCS
                                    concernait auparavant les communes dotées d’un plan de prévention des risques
                                    naturels prévi- sibles approuvé (PPRNP) ou comprises dans le champ d’application
                                    d’un plan particulier d’intervention (PPI) dans le cadre du plan Orsec (organisation
                                    de la réponse de sécurité civile, ndlr).
                                    Même si toutes les communes souhai- tant renforcer la résilience des terri- toires
                                    peuvent volontairement se doter d’un PCS, en pratique, en raison du coût que
                                    celui-ci peut représenter pour certaines collectivités, ces cas sont rares. Ainsi,
                                    en 2015, le ministère de l’Intérieur indiquait que seuls les deux tiers des communes
                                    soumises à l’obligation d’élaborer un PCS l’avaient adopté.
                                    La loi a dorénavant étendu le champ d’application de l’obligation de réaliser un PCS
                                    au regard de l’utilité d’un tel document lors de la survenance d’une crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    En ce sens, l’obligation d’établis- sement d’un PCS est applicable sur de nombreuses
                                    nouvelles zones (1), concernées par un risque spécifique, tel que, par exemple, les
                                    territoires à risque important d'inondation (2). L’article L.731-1 du code de la
                                    sécurité intérieure prévoyait, dans sa version antérieure à la loi Matras, qu’un
                                    plan intercommunal de sauvegarde (PICS) pouvait « être établi en lieu et place du
                                    plan communal de sauvegarde », de manière donc facultative. Dans une contribution
                                    écrite, la Direction générale de la sécurité civile et de la gestion des crises
                                    (DGSCGC) a indiqué aux rapporteurs qu’elle a constaté que « les PICS ont démontré
                                    leur utilité là où ils ont été créés » et que « les Sdis [services départemen- taux
                                    d'incendie et de secours, ndlr] de ces départements ont reconnu l’utilité de ces
                                    dispositifs tant dans la prépa- ration à la gestion de crise que dans la réponse
                                    d’urgence ».
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Les PICS ne sont donc pas une nouveauté mais l’évolution tient en leur caractère
                                    dorénavant obli- gatoire. Codifié dans un nouvel article L.731-4 qui modifie
                                    significati- vement les dispositions applicables au PICS, il est instauré que ce
                                    plan est désormais obligatoire pour tous les EPCI dont au moins une commune membre
                                    est tenue d’élaborer un PCS. Ce changement n’est pas anodin puisqu’il concernerait,
                                    selon la DGSCGC, 1 125 établissements publics de coopération intercom- munale à
                                    fiscalité propre (EPCI-FP) sur 1 270. Leur rôle, jusqu’à maintenant marginal en
                                    matière de sécurité civile, va donc évoluer.
                                    Le choix de l’échelle de l’EPCI répond à la volonté de proposer une réponse
                                    effective et efficace dépassant le seul rayon d’action de la commune lorsqu’un
                                    sinistre d’ampleur touche une commune. En effet, il est rare que celui-ci n’ait pas
                                    d’impact sur les communes voisines.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    L’objectif est « de préparer la réponse aux situations de crise en organisant, a
                                    minima, la mobilisation des capa- cités intercommunales au profit de la ou des
                                    communes concernées, la mutualisation des capacités commu- nales ainsi que le
                                    rétablissement des compétences ou intérêts commu- nautaires » (3). Les EPCI
                                    concernés ont jusqu’en décembre 2026 pour élaborer le PICS.
                                    Par Johanna Leplanois, Avocate associée au sein du cabinet DLGA
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Entretien avec Johanna Leplanois - Réglementation
                            Littoral</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Évaluation environnnementale - BL.Légibase
                            Urbanisme</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Un nouveau régime Cat Nat entre deux eaux - Johanna
                            Leplanois</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Urbanisme - Recul du trait de côte - Johanna
                            Leplanois</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
        </div>

        <div class=\"section-two\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-3 col-left\">
                        <p class=\"text-book-18 text-grey-darker\">Table-ronde</p>
                    </div>
                    <div class=\"col-12 col-lg-9 col-right\">
                        <p class=\"title-medium-64 text-grey-text\">
                            Découvrez nos dernières <span class=\"fst-italic\">interventions</span>,
                            <span class=\"fst-italic\">conférences</span> et <span class=\"fst-italic\">table-ronde</span>
                            ci-dessous
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "actualites/press.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 238,  329 => 228,  316 => 218,  303 => 208,  146 => 54,  123 => 34,  107 => 21,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}DLGA - Articles de press{% endblock %}
{% block body %}
    <div class=\"actualites-press-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Page d'accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Dans la presse</span></li>
                </ol>
            </nav>
            <div class=\"header\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Dans la press</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        Nos collaborateurs sont aussi dans la <span class=\"fst-italic\">presse écrite</span> !
                    </h1>
                </div>
                <div class=\"content-scrolldown\">
                    <a href=\"#anchor-scrolldown\" class=\"scrolldown\">
                        <img src=\"{{ asset('images/arrow-down-grey-dark.svg') }}\" class=\"icon-arrow-down\">
                    </a>
                </div>
            </div>
        </div>

        <div id=\"anchor-scrolldown\"></div>

        <div class=\"list-container\">
            <a href=\"#\" class=\"list-element-link\" data-bs-toggle=\"modal\"
               data-bs-target=\"#pressModal1\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Vers une meilleure gestion des crises - Analyse
                            juridique</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <div class=\"modal fade modal-press\" id=\"pressModal1\" tabindex=\"-1\"
                 aria-labelledby=\"pressModal1Label\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title title-medium-40 text-grey-text\"
                                id=\"pressModal1Label\">Vers une meilleure gestion des crises - Analyse juridique</h5>
                            <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                Fermer
                            </a>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"content-left\">
                                <img src=\"{{ asset('images/image-default.png') }}\">
                            </div>
                            <div class=\"content-right\">
                                <p class=\"text-book-18 text-grey-darker\">
                                    La proposition de loi portée par le député Fabien Matras visant à consolider le
                                    modèle de sécurité civile et valoriser les pompiers profes- sionnels et volontaires
                                    a été définitive- ment adoptée le 16 novembre 2021. Cette loi a vocation à répondre
                                    aux « défis auxquels nous faisons face » et à adapter notre modèle pour répondre
                                    davantage aux besoins actuels.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    En effet, par exemple, en matière de risques technologiques, il est apparu, lors de
                                    la commission d’enquête séna- toriale sur l’incendie de l’usine Lubrizol à Rouen,
                                    que 10 % de la population interrogée affirme savoir réagir si un accident se produit
                                    près de chez elle et 62 % des élus font part d’un manque d’information sur les
                                    risques indus- triels. Cela est d’autant plus domma- geable que les premières heures
                                    sont décisives dans la gestion de crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    La loi apporte une nouvelle envergure à la coopération locale en matière de
                                    prévention, renforce les synergies, l’efficacité des différents intervenants et
                                    adapte les outils. C’est d’ailleurs en ce sens qu'elle indique que la direc- tion
                                    des opérations est assurée par le représentant de l’État dans le départe- ment
                                    (article 12), qu’un correspondant incendie et secours sera créé comme interlocuteur
                                    privilégié du service départemental ou territorial d’incendie et de secours dans la
                                    commune. De nouvelles règles ont été instaurées concernant les plans communaux et
                                    intercommunaux de sauvegarde pour accroître leur existence et renforcer leur
                                    efficacité afin d’enrichir la gestion de crise.
                                    Plan communal de sauvegarde
                                    Créé par l’article 13 de la loi n° 2004- 811 du 13 août 2004, le plan communal de
                                    sauvegarde (PCS) est l'outil de plani- fication permettant à une commune d'organiser
                                    et de mettre en œuvre les moyens d'information, de formation, d'alerte, de
                                    sauvegarde et de soutien aux populations pour faire face à des crises et à des
                                    événements de sécurité civile divers (inondations, épisodes neigeux, canicules,
                                    accident de trans- port de matières dangereuses, etc.). Même si le PCS ne crée aucun
                                    moyen supplémentaire, il recense les moyens existants pour offrir une réponse orga-
                                    nisée et adaptée lors de la survenance d’une crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    La loi avait instauré une obligation de réaliser un tel document pour les communes
                                    considérées très expo- sées à un risque. Ainsi, l’obligation de réaliser un PCS
                                    concernait auparavant les communes dotées d’un plan de prévention des risques
                                    naturels prévi- sibles approuvé (PPRNP) ou comprises dans le champ d’application
                                    d’un plan particulier d’intervention (PPI) dans le cadre du plan Orsec (organisation
                                    de la réponse de sécurité civile, ndlr).
                                    Même si toutes les communes souhai- tant renforcer la résilience des terri- toires
                                    peuvent volontairement se doter d’un PCS, en pratique, en raison du coût que
                                    celui-ci peut représenter pour certaines collectivités, ces cas sont rares. Ainsi,
                                    en 2015, le ministère de l’Intérieur indiquait que seuls les deux tiers des communes
                                    soumises à l’obligation d’élaborer un PCS l’avaient adopté.
                                    La loi a dorénavant étendu le champ d’application de l’obligation de réaliser un PCS
                                    au regard de l’utilité d’un tel document lors de la survenance d’une crise. En ce
                                    sens, l’obligation d’établis- sement d’un PCS est applicable sur de nombreuses
                                    nouvelles zones (1), concernées par un risque spécifique, tel que, par exemple, les
                                    territoires à risque important d'inondation (2). L’article L.731-1 du code de la
                                    sécurité intérieure prévoyait, dans sa version antérieure à la loi Matras, qu’un
                                    plan intercommunal de sauvegarde (PICS) pouvait « être établi en lieu et place du
                                    plan communal de sauvegarde », de manière donc facultative. Dans une contribution
                                    écrite, la Direction générale de la sécurité civile et de la gestion des crises
                                    (DGSCGC) a indiqué aux rapporteurs qu’elle a constaté que « les PICS ont démontré
                                    leur utilité là où ils ont été créés » et que « les Sdis [services départemen- taux
                                    d'incendie et de secours, ndlr] de ces départements ont reconnu l’utilité de ces
                                    dispositifs tant dans la prépa- ration à la gestion de crise que dans la réponse
                                    d’urgence ».
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Les PICS ne sont donc pas une nouveauté mais l’évolution tient en leur caractère
                                    dorénavant obli- gatoire. Codifié dans un nouvel article L.731-4 qui modifie
                                    significati- vement les dispositions applicables au PICS, il est instauré que ce
                                    plan est désormais obligatoire pour tous les EPCI dont au moins une commune membre
                                    est tenue d’élaborer un PCS. Ce changement n’est pas anodin puisqu’il concernerait,
                                    selon la DGSCGC, 1 125 établissements publics de coopération intercom- munale à
                                    fiscalité propre (EPCI-FP) sur 1 270. Leur rôle, jusqu’à maintenant marginal en
                                    matière de sécurité civile, va donc évoluer.
                                    Le choix de l’échelle de l’EPCI répond à la volonté de proposer une réponse
                                    effective et efficace dépassant le seul rayon d’action de la commune lorsqu’un
                                    sinistre d’ampleur touche une commune. En effet, il est rare que celui-ci n’ait pas
                                    d’impact sur les communes voisines.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    L’objectif est « de préparer la réponse aux situations de crise en organisant, a
                                    minima, la mobilisation des capa- cités intercommunales au profit de la ou des
                                    communes concernées, la mutualisation des capacités commu- nales ainsi que le
                                    rétablissement des compétences ou intérêts commu- nautaires » (3). Les EPCI
                                    concernés ont jusqu’en décembre 2026 pour élaborer le PICS.
                                    Répartition et partage des compétences
                                    Créé par l’article 13 de la loi n° 2004- 811 du 13 août 2004, le plan communal de
                                    sauvegarde (PCS) est l'outil de plani- fication permettant à une commune d'organiser
                                    et de mettre en œuvre les moyens d'information, de formation, d'alerte, de
                                    sauvegarde et de soutien aux populations pour faire face à des crises et à des
                                    événements de sécurité civile divers (inondations, épisodes neigeux, canicules,
                                    accident de trans- port de matières dangereuses, etc.). Même si le PCS ne crée aucun
                                    moyen supplémentaire, il recense les moyens existants pour offrir une réponse orga-
                                    nisée et adaptée lors de la survenance d’une crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    La loi avait instauré une obligation de réaliser un tel document pour les communes
                                    considérées très expo- sées à un risque. Ainsi, l’obligation de réaliser un PCS
                                    concernait auparavant les communes dotées d’un plan de prévention des risques
                                    naturels prévi- sibles approuvé (PPRNP) ou comprises dans le champ d’application
                                    d’un plan particulier d’intervention (PPI) dans le cadre du plan Orsec (organisation
                                    de la réponse de sécurité civile, ndlr).
                                    Même si toutes les communes souhai- tant renforcer la résilience des terri- toires
                                    peuvent volontairement se doter d’un PCS, en pratique, en raison du coût que
                                    celui-ci peut représenter pour certaines collectivités, ces cas sont rares. Ainsi,
                                    en 2015, le ministère de l’Intérieur indiquait que seuls les deux tiers des communes
                                    soumises à l’obligation d’élaborer un PCS l’avaient adopté.
                                    La loi a dorénavant étendu le champ d’application de l’obligation de réaliser un PCS
                                    au regard de l’utilité d’un tel document lors de la survenance d’une crise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    En ce sens, l’obligation d’établis- sement d’un PCS est applicable sur de nombreuses
                                    nouvelles zones (1), concernées par un risque spécifique, tel que, par exemple, les
                                    territoires à risque important d'inondation (2). L’article L.731-1 du code de la
                                    sécurité intérieure prévoyait, dans sa version antérieure à la loi Matras, qu’un
                                    plan intercommunal de sauvegarde (PICS) pouvait « être établi en lieu et place du
                                    plan communal de sauvegarde », de manière donc facultative. Dans une contribution
                                    écrite, la Direction générale de la sécurité civile et de la gestion des crises
                                    (DGSCGC) a indiqué aux rapporteurs qu’elle a constaté que « les PICS ont démontré
                                    leur utilité là où ils ont été créés » et que « les Sdis [services départemen- taux
                                    d'incendie et de secours, ndlr] de ces départements ont reconnu l’utilité de ces
                                    dispositifs tant dans la prépa- ration à la gestion de crise que dans la réponse
                                    d’urgence ».
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Les PICS ne sont donc pas une nouveauté mais l’évolution tient en leur caractère
                                    dorénavant obli- gatoire. Codifié dans un nouvel article L.731-4 qui modifie
                                    significati- vement les dispositions applicables au PICS, il est instauré que ce
                                    plan est désormais obligatoire pour tous les EPCI dont au moins une commune membre
                                    est tenue d’élaborer un PCS. Ce changement n’est pas anodin puisqu’il concernerait,
                                    selon la DGSCGC, 1 125 établissements publics de coopération intercom- munale à
                                    fiscalité propre (EPCI-FP) sur 1 270. Leur rôle, jusqu’à maintenant marginal en
                                    matière de sécurité civile, va donc évoluer.
                                    Le choix de l’échelle de l’EPCI répond à la volonté de proposer une réponse
                                    effective et efficace dépassant le seul rayon d’action de la commune lorsqu’un
                                    sinistre d’ampleur touche une commune. En effet, il est rare que celui-ci n’ait pas
                                    d’impact sur les communes voisines.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    L’objectif est « de préparer la réponse aux situations de crise en organisant, a
                                    minima, la mobilisation des capa- cités intercommunales au profit de la ou des
                                    communes concernées, la mutualisation des capacités commu- nales ainsi que le
                                    rétablissement des compétences ou intérêts commu- nautaires » (3). Les EPCI
                                    concernés ont jusqu’en décembre 2026 pour élaborer le PICS.
                                    Par Johanna Leplanois, Avocate associée au sein du cabinet DLGA
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Entretien avec Johanna Leplanois - Réglementation
                            Littoral</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Évaluation environnnementale - BL.Légibase
                            Urbanisme</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Un nouveau régime Cat Nat entre deux eaux - Johanna
                            Leplanois</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Urbanisme - Recul du trait de côte - Johanna
                            Leplanois</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
        </div>

        <div class=\"section-two\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-3 col-left\">
                        <p class=\"text-book-18 text-grey-darker\">Table-ronde</p>
                    </div>
                    <div class=\"col-12 col-lg-9 col-right\">
                        <p class=\"title-medium-64 text-grey-text\">
                            Découvrez nos dernières <span class=\"fst-italic\">interventions</span>,
                            <span class=\"fst-italic\">conférences</span> et <span class=\"fst-italic\">table-ronde</span>
                            ci-dessous
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "actualites/press.html.twig", "/Applications/MAMP/htdocs/ECV/DLGA/templates/actualites/press.html.twig");
    }
}
