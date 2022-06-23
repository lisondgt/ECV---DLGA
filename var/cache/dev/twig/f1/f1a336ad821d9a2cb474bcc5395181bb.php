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

/* expertise/competences.html.twig */
class __TwigTemplate_02d374ffce1ee74d7b6efc20a24b2f2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "expertise/competences.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "expertise/competences.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "expertise/competences.html.twig", 1);
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

        echo "DLGA - Compétences";
        
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
        echo "    <div class=\"expertise-competences-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Page d'accueil</a></li>
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><span>Notre expertise</span></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Compétences</span></li>
                </ol>
            </nav>
            <div class=\"header\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Nos compétences</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA offre à ses clients des <span
                                class=\"fst-italic\">compétences diversifiées et pointues</span>.
                        À cette fin, DLGA s’est structuré pour offrir les compétences de haute qualité dans
                        <span class=\"fst-italic\">chaque domaine du droit</span>.
                    </h1>
                </div>
                <div class=\"content-scrolldown\">
                    <a href=\"#anchor-scrolldown\" class=\"scrolldown\">
                        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/arrow-down-grey-dark.svg"), "html", null, true);
        echo "\" class=\"icon-arrow-down\">
                    </a>
                </div>
            </div>
        </div>

        <div id=\"anchor-scrolldown\"></div>

        <div class=\"list-container\">
            <a href=\"#\" class=\"list-element-link\" data-bs-toggle=\"modal\"
               data-bs-target=\"#competencesModalCorporateFinance\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Corporate et finance</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <div class=\"modal fade modal-competences\" id=\"competencesModalCorporateFinance\" tabindex=\"-1\"
                 aria-labelledby=\"competencesModalCorporateFinanceLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title title-medium-40 text-grey-text\"
                                id=\"competencesModalCorporateFinanceLabel\">Corporate et finance</h5>
                            <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                Fermer
                            </a>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"content-left\">
                                <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"content-right\">
                                <div class=\"accordion\" id=\"accordionCompetences\">
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\" id=\"headingOne\">
                                            <a class=\"accordion-button collapsed\" type=\"button\"
                                               data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\"
                                               aria-expanded=\"false\" aria-controls=\"collapseOne\">
                                                <span class=\"number\">01</span> Banque, finance et marché de capitaux
                                            </a>
                                        </h2>
                                        <div id=\"collapseOne\" class=\"accordion-collapse collapse\"
                                             aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionCompetences\">
                                            <div class=\"accordion-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-12 col-lg-8 col-left\">
                                                        <p class=\"text-book-18 text-grey-darker\">
                                                            DLGA conseille les institutions financières dans tous les
                                                            pans de leurs activités, en France et à l’étranger. Nous
                                                            intervenons aussi bien pour les banques d’investissement que
                                                            pour les banques de détail, les intermédiaires et arrangeurs
                                                            et les fonds d’investissement. Nous intervenons également
                                                            aux côtés des entreprises non financières dans le cadre de
                                                            leurs relations avec les institutions financières. Nous
                                                            répondons à l’ensemble de leurs demandes quel que soit le
                                                            domaine concerné : réglementaire, contractuel, corporate ou
                                                            contentieux.
                                                        </p>
                                                        <p class=\"text-book-18 text-grey-darker\">
                                                            Nous assistons ainsi régulièrement institutions financières
                                                            ou emprunteurs dans la structuration et la négociation de
                                                            financements structurés, financements d’actif, financements
                                                            de projet ou financements d’acquisition.
                                                        </p>
                                                        <p class=\"text-book-18 text-grey-darker\">
                                                            Les membres de DLGA traitent toutes sortes de dossiers liés
                                                            au financement des entreprises
                                                        </p>
                                                    </div>
                                                    <div class=\"col-12 col-lg-4 col-right\">
                                                        <div class=\"content-list\">
                                                            <p class=\"text-medium-16 text-grey-darker\">
                                                                Financement bancaire
                                                            </p>
                                                            <p class=\"text-book-16 text-grey-darker\">
                                                                Financement d’actifs (équipement, transport,
                                                                immobilier), financement de projets, financement
                                                                d’entreprises, financement d’acquisitions, financement
                                                                de LBO, affacturage, titrisation
                                                            </p>
                                                        </div>
                                                        <div class=\"content-list\">
                                                            <p class=\"text-medium-16 text-grey-darker\">
                                                                Responsabilité et contentieux bancaires
                                                            </p>
                                                        </div>
                                                        <div class=\"content-list\">
                                                            <p class=\"text-medium-16 text-grey-darker\">
                                                                Restructuration du crédit
                                                            </p>
                                                        </div>
                                                        <div class=\"content-list\">
                                                            <p class=\"text-medium-16 text-grey-darker\">
                                                                Questions réglementaires
                                                            </p>
                                                        </div>
                                                        <div class=\"content-list\">
                                                            <p class=\"text-medium-16 text-grey-darker\">
                                                                Dettes mezzanines
                                                            </p>
                                                        </div>
                                                        <div class=\"content-list\">
                                                            <p class=\"text-medium-16 text-grey-darker\">
                                                                Marchés de capitaux
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\" id=\"headingTwo\">
                                            <a class=\"accordion-button collapsed\" type=\"button\"
                                               data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\"
                                               aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                                <span class=\"number\">02</span> Corporate, fusion, acquisition et private
                                                equity
                                            </a>
                                        </h2>
                                        <div id=\"collapseTwo\" class=\"accordion-collapse collapse\"
                                             aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionCompetences\">
                                            <div class=\"accordion-body\">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\" id=\"headingThree\">
                                            <a class=\"accordion-button collapsed\" type=\"button\"
                                               data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\"
                                               aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                                <span class=\"number\">03</span> Rémunération des dirigeants-droit des
                                                retraites et des avantages sociaux
                                            </a>
                                        </h2>
                                        <div id=\"collapseThree\" class=\"accordion-collapse collapse\"
                                             aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionCompetences\">
                                            <div class=\"accordion-body\">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\" id=\"headingFour\">
                                            <a class=\"accordion-button collapsed\" type=\"button\"
                                               data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\"
                                               aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                                <span class=\"number\">04</span> Entreprises en difficulté et
                                                restructuration
                                            </a>
                                        </h2>
                                        <div id=\"collapseFour\" class=\"accordion-collapse collapse\"
                                             aria-labelledby=\"headingFour\" data-bs-parent=\"#accordionCompetences\">
                                            <div class=\"accordion-body\">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Droit commercial</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Numérique et propriété intellectuelle</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Social, fiscal et immobilier</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Droit public, urbanisme, environnement</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
        </div>

        <div class=\"contact-container\">
            <div class=\"container\">
                <p class=\"text-book-24 text-grey-dark\">Contact</p>
                <p class=\"title-medium-64 text-grey-text\">
                    Vous êtes intéressé par notre cabinet ?
                    N’hésitez pas à prendre <a href=\"\">contact</a> avec nous.
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "expertise/competences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 241,  333 => 232,  321 => 223,  309 => 214,  149 => 57,  127 => 38,  111 => 25,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}DLGA - Compétences{% endblock %}
{% block body %}
    <div class=\"expertise-competences-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Page d'accueil</a></li>
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><span>Notre expertise</span></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Compétences</span></li>
                </ol>
            </nav>
            <div class=\"header\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Nos compétences</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA offre à ses clients des <span
                                class=\"fst-italic\">compétences diversifiées et pointues</span>.
                        À cette fin, DLGA s’est structuré pour offrir les compétences de haute qualité dans
                        <span class=\"fst-italic\">chaque domaine du droit</span>.
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
               data-bs-target=\"#competencesModalCorporateFinance\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Corporate et finance</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <div class=\"modal fade modal-competences\" id=\"competencesModalCorporateFinance\" tabindex=\"-1\"
                 aria-labelledby=\"competencesModalCorporateFinanceLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title title-medium-40 text-grey-text\"
                                id=\"competencesModalCorporateFinanceLabel\">Corporate et finance</h5>
                            <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                Fermer
                            </a>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"content-left\">
                                <img src=\"{{ asset('images/image-default.png') }}\">
                            </div>
                            <div class=\"content-right\">
                                <div class=\"accordion\" id=\"accordionCompetences\">
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\" id=\"headingOne\">
                                            <a class=\"accordion-button collapsed\" type=\"button\"
                                               data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\"
                                               aria-expanded=\"false\" aria-controls=\"collapseOne\">
                                                <span class=\"number\">01</span> Banque, finance et marché de capitaux
                                            </a>
                                        </h2>
                                        <div id=\"collapseOne\" class=\"accordion-collapse collapse\"
                                             aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionCompetences\">
                                            <div class=\"accordion-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-12 col-lg-8 col-left\">
                                                        <p class=\"text-book-18 text-grey-darker\">
                                                            DLGA conseille les institutions financières dans tous les
                                                            pans de leurs activités, en France et à l’étranger. Nous
                                                            intervenons aussi bien pour les banques d’investissement que
                                                            pour les banques de détail, les intermédiaires et arrangeurs
                                                            et les fonds d’investissement. Nous intervenons également
                                                            aux côtés des entreprises non financières dans le cadre de
                                                            leurs relations avec les institutions financières. Nous
                                                            répondons à l’ensemble de leurs demandes quel que soit le
                                                            domaine concerné : réglementaire, contractuel, corporate ou
                                                            contentieux.
                                                        </p>
                                                        <p class=\"text-book-18 text-grey-darker\">
                                                            Nous assistons ainsi régulièrement institutions financières
                                                            ou emprunteurs dans la structuration et la négociation de
                                                            financements structurés, financements d’actif, financements
                                                            de projet ou financements d’acquisition.
                                                        </p>
                                                        <p class=\"text-book-18 text-grey-darker\">
                                                            Les membres de DLGA traitent toutes sortes de dossiers liés
                                                            au financement des entreprises
                                                        </p>
                                                    </div>
                                                    <div class=\"col-12 col-lg-4 col-right\">
                                                        <div class=\"content-list\">
                                                            <p class=\"text-medium-16 text-grey-darker\">
                                                                Financement bancaire
                                                            </p>
                                                            <p class=\"text-book-16 text-grey-darker\">
                                                                Financement d’actifs (équipement, transport,
                                                                immobilier), financement de projets, financement
                                                                d’entreprises, financement d’acquisitions, financement
                                                                de LBO, affacturage, titrisation
                                                            </p>
                                                        </div>
                                                        <div class=\"content-list\">
                                                            <p class=\"text-medium-16 text-grey-darker\">
                                                                Responsabilité et contentieux bancaires
                                                            </p>
                                                        </div>
                                                        <div class=\"content-list\">
                                                            <p class=\"text-medium-16 text-grey-darker\">
                                                                Restructuration du crédit
                                                            </p>
                                                        </div>
                                                        <div class=\"content-list\">
                                                            <p class=\"text-medium-16 text-grey-darker\">
                                                                Questions réglementaires
                                                            </p>
                                                        </div>
                                                        <div class=\"content-list\">
                                                            <p class=\"text-medium-16 text-grey-darker\">
                                                                Dettes mezzanines
                                                            </p>
                                                        </div>
                                                        <div class=\"content-list\">
                                                            <p class=\"text-medium-16 text-grey-darker\">
                                                                Marchés de capitaux
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\" id=\"headingTwo\">
                                            <a class=\"accordion-button collapsed\" type=\"button\"
                                               data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\"
                                               aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                                <span class=\"number\">02</span> Corporate, fusion, acquisition et private
                                                equity
                                            </a>
                                        </h2>
                                        <div id=\"collapseTwo\" class=\"accordion-collapse collapse\"
                                             aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionCompetences\">
                                            <div class=\"accordion-body\">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\" id=\"headingThree\">
                                            <a class=\"accordion-button collapsed\" type=\"button\"
                                               data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\"
                                               aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                                <span class=\"number\">03</span> Rémunération des dirigeants-droit des
                                                retraites et des avantages sociaux
                                            </a>
                                        </h2>
                                        <div id=\"collapseThree\" class=\"accordion-collapse collapse\"
                                             aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionCompetences\">
                                            <div class=\"accordion-body\">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\" id=\"headingFour\">
                                            <a class=\"accordion-button collapsed\" type=\"button\"
                                               data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\"
                                               aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                                <span class=\"number\">04</span> Entreprises en difficulté et
                                                restructuration
                                            </a>
                                        </h2>
                                        <div id=\"collapseFour\" class=\"accordion-collapse collapse\"
                                             aria-labelledby=\"headingFour\" data-bs-parent=\"#accordionCompetences\">
                                            <div class=\"accordion-body\">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Droit commercial</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Numérique et propriété intellectuelle</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Social, fiscal et immobilier</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
            <a href=\"#\" class=\"list-element-link\">
                <div class=\"container\">
                    <div class=\"list-content\">
                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                        <h2 class=\"list-tile title-medium-48 mb-0\">Droit public, urbanisme, environnement</h2>
                        <span class=\"show-hover decouvrir-link\">Découvrir</span>
                    </div>
                </div>
            </a>
        </div>

        <div class=\"contact-container\">
            <div class=\"container\">
                <p class=\"text-book-24 text-grey-dark\">Contact</p>
                <p class=\"title-medium-64 text-grey-text\">
                    Vous êtes intéressé par notre cabinet ?
                    N’hésitez pas à prendre <a href=\"\">contact</a> avec nous.
                </p>
            </div>
        </div>
    </div>
{% endblock %}", "expertise/competences.html.twig", "/Applications/MAMP/htdocs/ECV/DLGA/templates/expertise/competences.html.twig");
    }
}
