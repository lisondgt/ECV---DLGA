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

/* expertise/secteur-intervention.html.twig */
class __TwigTemplate_d8a495e38b466ef69b1ee6b3263a70ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "expertise/secteur-intervention.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "expertise/secteur-intervention.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "expertise/secteur-intervention.html.twig", 1);
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

        echo "DLGA - Secteur d'intervention";
        
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
        echo "    <div class=\"expertise-secteur-intervention-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Page d'accueil</a></li>
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><span>Notre expertise</span></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Nos secteurs d’intervention</span></li>
                </ol>
            </nav>
            <div class=\"header\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Nos secteurs d’intervention</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA intervient sur <span class=\"fst-italic\">plusieurs secteurs</span>
                    </h1>
                </div>
                <div class=\"content-scrolldown\">
                    <a href=\"#anchor-scrolldown\" class=\"scrolldown\">
                        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/arrow-down-grey-dark.svg"), "html", null, true);
        echo "\" class=\"icon-arrow-down\">
                    </a>
                </div>
            </div>
        </div>

        <div id=\"anchor-scrolldown\"></div>

        <div class=\"list-container\">
            <a href=\"#\" class=\"list-element-link\" data-bs-toggle=\"modal\"
               data-bs-target=\"#interventionModalCapitalInvestissement\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Capital Investissement</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <div class=\"modal fade modal-intervention\" id=\"interventionModalCapitalInvestissement\" tabindex=\"-1\"
                 aria-labelledby=\"interventionModalCapitalInvestissementLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title title-medium-40 text-grey-text\"
                                id=\"interventionModalCapitalInvestissementLabel\">Capital Investissement</h5>
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
                                <div class=\"section-top-text\">
                                    <p class=\"text-medium-18 text-grey-darker\">
                                        Le capital-investissement revêt une importance grandissante. Quel que soit votre
                                        domaine d’activité : fonds de capital-investissement, société de capital risque ou
                                        société cible, la réussite ou l’échec de la conclusion d’une opération est fonction
                                        de la qualité des conseils donnés.
                                    </p>
                                </div>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Les avocats de DLGA travaillent pour assister nos clients dans l’atteinte de leurs
                                    objectifs à toutes les étapes du cycle de l’investissement allant de la création de
                                    fonds à la réalisation des investissements. Nous offrons des conseils juridiques
                                    adaptés dans les domaines suivants : fusions et acquisitions, structuration et
                                    transactions transfrontalières, droit des sociétés et droit commercial, services
                                    financiers et prêts, émission valeurs mobilières, création de fonds, droit fiscal,
                                    de la concurrence, de la restructuration et des procédures collectives de même que
                                    gouvernance d’entreprise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Parmi les clients de ce groupe, on trouve des sociétés de capital-investissement,
                                    des prêteurs, des sociétés cibles, des équipes de gestion et des conseils
                                    d’administration du de France et de l’étranger.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Nous assistons nos clients sur des opérations de capital investissement :
                                </p>
                                <ul class=\"text-book-18 text-grey-darker\">
                                    <li>
                                        LBO, LMBO
                                    </li>
                                    <li>
                                        Prise de participation minoritaire (notamment par voie d’essaimage)
                                    </li>
                                    <li>
                                        Financement de projets d’acquisition, en France et à l’étranger
                                    </li>
                                </ul>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Nous assistons nos clients sur des opérations de capital investissement :
                                </p>
                                <ul class=\"text-book-18 text-grey-darker\">
                                    <li>
                                        Montage de l’opération et définition des outils de financement
                                    </li>
                                    <li>
                                        Rédaction et négociation de la documentation :
                                    </li>
                                    <li>
                                        Protocole d’investissement
                                    </li>
                                    <li>
                                        Pacte d’actionnaires
                                    </li>
                                    <li>
                                        Contrats obligatoires
                                    </li>
                                    <li>
                                        Emission de valeurs mobilières complexes
                                    </li>
                                    <li>
                                        Instruments d’intéressement
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Industrie – Automobile</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Grande distribution et commerces</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Life Sciences</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Franchise</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">CleanTech</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Hôtellerie et loisirs</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">FinTech</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Technologies de l’information (IT)</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Logistique et Transport</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Energies renouvelables</h2>
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
                        <h2 class=\"list-tile title-medium-48 mb-0\">Immobilier</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Construction</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Action publique</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Risques naturels et technologiques</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Foret</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Banque</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "expertise/secteur-intervention.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 263,  391 => 254,  379 => 245,  367 => 236,  355 => 227,  343 => 218,  331 => 209,  319 => 200,  307 => 191,  295 => 182,  283 => 173,  271 => 164,  259 => 155,  247 => 146,  235 => 137,  223 => 128,  146 => 54,  124 => 35,  108 => 22,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}DLGA - Secteur d'intervention{% endblock %}
{% block body %}
    <div class=\"expertise-secteur-intervention-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Page d'accueil</a></li>
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><span>Notre expertise</span></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Nos secteurs d’intervention</span></li>
                </ol>
            </nav>
            <div class=\"header\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Nos secteurs d’intervention</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA intervient sur <span class=\"fst-italic\">plusieurs secteurs</span>
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
               data-bs-target=\"#interventionModalCapitalInvestissement\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Capital Investissement</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <div class=\"modal fade modal-intervention\" id=\"interventionModalCapitalInvestissement\" tabindex=\"-1\"
                 aria-labelledby=\"interventionModalCapitalInvestissementLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title title-medium-40 text-grey-text\"
                                id=\"interventionModalCapitalInvestissementLabel\">Capital Investissement</h5>
                            <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                Fermer
                            </a>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"content-left\">
                                <img src=\"{{ asset('images/image-default.png') }}\">
                            </div>
                            <div class=\"content-right\">
                                <div class=\"section-top-text\">
                                    <p class=\"text-medium-18 text-grey-darker\">
                                        Le capital-investissement revêt une importance grandissante. Quel que soit votre
                                        domaine d’activité : fonds de capital-investissement, société de capital risque ou
                                        société cible, la réussite ou l’échec de la conclusion d’une opération est fonction
                                        de la qualité des conseils donnés.
                                    </p>
                                </div>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Les avocats de DLGA travaillent pour assister nos clients dans l’atteinte de leurs
                                    objectifs à toutes les étapes du cycle de l’investissement allant de la création de
                                    fonds à la réalisation des investissements. Nous offrons des conseils juridiques
                                    adaptés dans les domaines suivants : fusions et acquisitions, structuration et
                                    transactions transfrontalières, droit des sociétés et droit commercial, services
                                    financiers et prêts, émission valeurs mobilières, création de fonds, droit fiscal,
                                    de la concurrence, de la restructuration et des procédures collectives de même que
                                    gouvernance d’entreprise.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Parmi les clients de ce groupe, on trouve des sociétés de capital-investissement,
                                    des prêteurs, des sociétés cibles, des équipes de gestion et des conseils
                                    d’administration du de France et de l’étranger.
                                </p>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Nous assistons nos clients sur des opérations de capital investissement :
                                </p>
                                <ul class=\"text-book-18 text-grey-darker\">
                                    <li>
                                        LBO, LMBO
                                    </li>
                                    <li>
                                        Prise de participation minoritaire (notamment par voie d’essaimage)
                                    </li>
                                    <li>
                                        Financement de projets d’acquisition, en France et à l’étranger
                                    </li>
                                </ul>
                                <p class=\"text-book-18 text-grey-darker\">
                                    Nous assistons nos clients sur des opérations de capital investissement :
                                </p>
                                <ul class=\"text-book-18 text-grey-darker\">
                                    <li>
                                        Montage de l’opération et définition des outils de financement
                                    </li>
                                    <li>
                                        Rédaction et négociation de la documentation :
                                    </li>
                                    <li>
                                        Protocole d’investissement
                                    </li>
                                    <li>
                                        Pacte d’actionnaires
                                    </li>
                                    <li>
                                        Contrats obligatoires
                                    </li>
                                    <li>
                                        Emission de valeurs mobilières complexes
                                    </li>
                                    <li>
                                        Instruments d’intéressement
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Industrie – Automobile</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Grande distribution et commerces</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Life Sciences</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Franchise</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">CleanTech</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Hôtellerie et loisirs</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">FinTech</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Technologies de l’information (IT)</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Logistique et Transport</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Energies renouvelables</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Immobilier</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Construction</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Action publique</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Risques naturels et technologiques</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Foret</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Banque</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
{% endblock %}", "expertise/secteur-intervention.html.twig", "/Applications/MAMP/htdocs/ECV/DLGA/templates/expertise/secteur-intervention.html.twig");
    }
}
