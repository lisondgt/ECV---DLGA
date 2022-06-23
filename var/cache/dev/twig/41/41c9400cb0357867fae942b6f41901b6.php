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

/* cabinet/presentation.html.twig */
class __TwigTemplate_b0c04b8ef82a1ee4829b01b1e6b6390d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cabinet/presentation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cabinet/presentation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cabinet/presentation.html.twig", 1);
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

        echo "DLGA - Présentation";
        
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
        echo "    <div class=\"cabinet-presentation-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Accueil</a></li>
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><span>Le cabinet</span></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Présentation</span></li>
                </ol>
            </nav>
            <div class=\"header header-with-image\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Présentation</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA offre à ses clients Français et étrangers une <span
                                class=\"fst-italic\">prestation globale</span>
                        , grâce à la complémentarité de <a href=\"\">ses équipes</a> et à son réseau de
                        <a href=\"\">correspondants</a> à l’étranger, expressément choisis pour leurs
                        <a href=\"\">compétences</a>, et la qualité de leur <span class=\"fst-italic\">collaboration</span>.
                    </h1>
                </div>
                <div class=\"content-scrolldown\">
                    <a href=\"#anchor-scrolldown\" class=\"scrolldown\">
                        <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/arrow-down-grey-dark.svg"), "html", null, true);
        echo "\" class=\"icon-arrow-down\">
                    </a>
                </div>
            </div>
        </div>

        <div id=\"anchor-scrolldown\"></div>

        <div class=\"section-one\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-12 col-lg-5 content-left\">
                        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-12 col-lg-3 content-right\">
                        <p class=\"text-book-18 text-grey-text\">
                            Le cabinet dispose d’une capacité éprouvée à mobiliser et coordonner des équipes
                            spécialisées de haut niveau dans différents pays. Il est ainsi reconnu pour son
                            expérience et son savoir-faire en matière de transactions internationales.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"section-two\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12 col-lg-8\">
                        <p class=\"text-book-24 text-grey-darker\">DLGA se caractérise par…</p>
                    </div>
                </div>
            </div>
            <div class=\"section-text-images\">
                <div class=\"text-image text-left\">
                    <p class=\"text-section\">Une forte implication des associés</p>
                    <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo " \">
                </div>
                <div class=\"text-image text-right\">
                    <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo " \">
                    <p class=\"text-section\">Un conseil personnalisé</p>
                </div>
                <div class=\"text-image text-left\">
                    <p class=\"text-section\">Une exigence de qualité</p>
                    <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo " \">
                </div>
            </div>
        </div>

        <div class=\"section-three\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-2\">
                        <p class=\"text-book-24 text-grey-darker\">Nos valeurs</p>
                    </div>
                    <div class=\"col-12 col-lg-10\">
                        <p class=\"display-block-text-48 text-grey-text\">
                            Fondé par des <span class=\"fst-italic\">professionnels</span>, issus de firmes notamment
                            anglo-saxonnes de premier plan, DLGA cultive un esprit résolument
                            <span class=\"fst-italic\">boutique</span> afin de préserver
                            <span class=\"fst-italic\">flexibilité</span>, <span class=\"fst-italic\">créativité</span> et
                            <span class=\"fst-italic\">pragmatisme</span>. N’intervenant que sur les matières de son cœur
                            de métier, DLGA reste fidèle à <span class=\"fst-italic\">5 principes fondateurs</span>
                            qui forgent son <span class=\"fst-italic\">identité</span>.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"section-four\">
            <div class=\"valeur-container bg-green-200\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-12 col-lg-6 content-left\">
                            <p class=\"number\">01</p>
                            <div class=\"content-bottom\">
                                <p class=\"title-medium-48 text-grey-text\">
                                    Un fort esprit entrepreneurial de l’équipe
                                </p>
                                <p class=\"text-medium-20\">DLGA est une firme totalement indépendante.</p>
                                <p class=\"text-book-18\">
                                    Notre infrastructure technique performante et la souplesse d’organisation du cabinet
                                    sont mises au service d’un travail réalisé en équipe, favorisant la réactivité et la
                                    mobilisation des ressources nécessaires au traitement des dossiers.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-5 content-right\">
                            <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/valeur-image.png"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"valeur-container bg-green-400\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-12 col-lg-6 content-left\">
                            <p class=\"number\">02</p>
                            <div class=\"content-bottom\">
                                <p class=\"title-medium-48\">
                                    La recherche de solutions pragmatiques
                                </p>
                                <p class=\"text-medium-20 text-grey-text\">Une démarche ultra qualitative</p>
                                <p class=\"text-book-18\">
                                    Notre infrastructure technique performante et la souplesse d’organisation du cabinet
                                    sont mises au service d’un travail réalisé en équipe, favorisant la réactivité et la
                                    mobilisation des ressources nécessaires au traitement des dossiers.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-5 content-right\">
                            <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/valeur-image.png"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"valeur-container bg-green-50\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-12 col-lg-6 content-left\">
                            <p class=\"number\">03</p>
                            <div class=\"content-bottom\">
                                <p class=\"title-medium-48\">
                                    La connaissance du secteur d’expertise de ses clients
                                </p>
                                <p class=\"text-book-18\">
                                    Ainsi fort de son expérience de plus de dix dans le domaine de CleanTech, tel que
                                    celui des énergies renouvelables (éolien, photovoltaïque et biomasse), DLGA
                                    accompagne les clients du cabinet – développeurs de projets, fabricants de turbines,
                                    opérateurs électriques et fonds d’investissement – sur des opérations de
                                    développement, d’acquisition ou de cession de projets énergétiques.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-5 content-right\">
                            <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/valeur-image.png"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"valeur-container bg-green-600\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-12 col-lg-6 content-left\">
                            <p class=\"number\">04</p>
                            <div class=\"content-bottom\">
                                <p class=\"title-medium-48\">
                                    Un esprit boutique
                                </p>
                                <p class=\"text-book-18\">
                                    Aucune solution n’est interchangeable et aucune situation ne se règle avec une
                                    documentation standard appliquée uniformément. Le « sur-mesure juridique » se vit en
                                    proposant une solution créative, innovante et élaborée dans le respect des
                                    particularités de chacun.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-5 content-right\">
                            <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/valeur-image.png"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"valeur-container bg-green-800\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-12 col-lg-6 content-left\">
                            <p class=\"number\">05</p>
                            <div class=\"content-bottom\">
                                <p class=\"title-medium-48\">
                                    La recherche de création de valeur
                                </p>
                                <p class=\"text-book-18\">
                                    L’équipe de DLGA négocie et conseille en respectant des impératifs d’excellence, de
                                    persévérance et de rigueur absolues.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-5 content-right\">
                            <img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/valeur-image.png"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"valeur-container bg-green-50\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-12 col-lg-6 content-left\">
                            <p class=\"number\">06</p>
                            <div class=\"content-bottom\">
                                <p class=\"title-medium-48\">
                                    Développement durable
                                </p>
                                <p class=\"text-book-18\">
                                    Ainsi fort de son expérience de plus de dix dans le domaine de CleanTech, tel que
                                    celui des énergies renouvelables (éolien, photovoltaïque et biomasse), DLGA
                                    accompagne les clients du cabinet – développeurs de projets, fabricants de turbines,
                                    opérateurs électriques et fonds d’investissement – sur des opérations de
                                    développement, d’acquisition ou de cession de projets énergétiques.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-5 content-right\">
                            <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/valeur-image.png"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"section-five\">
            <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/valeur-home.png"), "html", null, true);
        echo "\">
            <div class=\"content-text-on-image\">
                <p class=\"text-image\">9 avocats. 2 cabinets</p>
            </div>
        </div>

        <div class=\"section-six\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-3 content-left\">
                        <p class=\"text-book-24 text-grey-darker\">Nos cabinets</p>
                    </div>
                    <div class=\"col-12 col-lg-9 content-right\">
                        <p class=\"display-block-text-48 text-grey-text\">
                            DLGA se développe en France sous forme de <span class=\"fst-italic\">bureaux intégrés</span>.
                            Ce développement d’un <span class=\"fst-italic\">réseau national</span> procède d’une
                            réflexion aboutie. Nous sommes convaincus que les implantations en région ont
                            un <span class=\"fst-italic\">véritable sens</span>.
                        </p>
                        <div class=\"accordion accordion-no-arrow\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        Pour nos clients qui se développent aussi en région
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        Pour proposer aux entreprises en région la force d’un réseau national
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingThree\">
                                    <div class=\"accordion-button collapsed\">
                                        Pour renforcer nos compétences existantes ou pour développer de nouveaux
                                        domaines d’activité
                                    </div>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"section-seven\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-12 col-lg-5 content-left\">
                        <img src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-12 col-lg-5 content-right\">
                        <p class=\"text-book-18 text-grey-text\">
                            Chacun des bureaux est animé par des avocats exerçant en conseil et contentieux des
                            affaires. Il s’agit d’avocats issus de la région où ils exercent, et qui en connaissent bien
                            le tissu économique et social.
                        </p>
                        <p class=\"text-book-18 text-grey-text\">
                            Ces confrères sont autonomes sur leur coeur de métier mais peuvent, le cas échéant,
                            intervenir avec les autres équipes des bureaux à Paris ou en région.
                        </p>
                        <a href=\"\" class=\"btn btn-primary\">Découvrir l’équipe</a>
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
        return "cabinet/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 290,  357 => 238,  346 => 230,  319 => 206,  295 => 185,  269 => 162,  242 => 138,  216 => 115,  168 => 70,  160 => 65,  154 => 62,  127 => 38,  112 => 26,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}DLGA - Présentation{% endblock %}
{% block body %}
    <div class=\"cabinet-presentation-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Accueil</a></li>
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><span>Le cabinet</span></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Présentation</span></li>
                </ol>
            </nav>
            <div class=\"header header-with-image\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Présentation</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA offre à ses clients Français et étrangers une <span
                                class=\"fst-italic\">prestation globale</span>
                        , grâce à la complémentarité de <a href=\"\">ses équipes</a> et à son réseau de
                        <a href=\"\">correspondants</a> à l’étranger, expressément choisis pour leurs
                        <a href=\"\">compétences</a>, et la qualité de leur <span class=\"fst-italic\">collaboration</span>.
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

        <div class=\"section-one\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-12 col-lg-5 content-left\">
                        <img src=\"{{ asset('images/image-default.png') }}\">
                    </div>
                    <div class=\"col-12 col-lg-3 content-right\">
                        <p class=\"text-book-18 text-grey-text\">
                            Le cabinet dispose d’une capacité éprouvée à mobiliser et coordonner des équipes
                            spécialisées de haut niveau dans différents pays. Il est ainsi reconnu pour son
                            expérience et son savoir-faire en matière de transactions internationales.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"section-two\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12 col-lg-8\">
                        <p class=\"text-book-24 text-grey-darker\">DLGA se caractérise par…</p>
                    </div>
                </div>
            </div>
            <div class=\"section-text-images\">
                <div class=\"text-image text-left\">
                    <p class=\"text-section\">Une forte implication des associés</p>
                    <img src=\"{{ asset('images/image-default.png') }} \">
                </div>
                <div class=\"text-image text-right\">
                    <img src=\"{{ asset('images/image-default.png') }} \">
                    <p class=\"text-section\">Un conseil personnalisé</p>
                </div>
                <div class=\"text-image text-left\">
                    <p class=\"text-section\">Une exigence de qualité</p>
                    <img src=\"{{ asset('images/image-default.png') }} \">
                </div>
            </div>
        </div>

        <div class=\"section-three\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-2\">
                        <p class=\"text-book-24 text-grey-darker\">Nos valeurs</p>
                    </div>
                    <div class=\"col-12 col-lg-10\">
                        <p class=\"display-block-text-48 text-grey-text\">
                            Fondé par des <span class=\"fst-italic\">professionnels</span>, issus de firmes notamment
                            anglo-saxonnes de premier plan, DLGA cultive un esprit résolument
                            <span class=\"fst-italic\">boutique</span> afin de préserver
                            <span class=\"fst-italic\">flexibilité</span>, <span class=\"fst-italic\">créativité</span> et
                            <span class=\"fst-italic\">pragmatisme</span>. N’intervenant que sur les matières de son cœur
                            de métier, DLGA reste fidèle à <span class=\"fst-italic\">5 principes fondateurs</span>
                            qui forgent son <span class=\"fst-italic\">identité</span>.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"section-four\">
            <div class=\"valeur-container bg-green-200\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-12 col-lg-6 content-left\">
                            <p class=\"number\">01</p>
                            <div class=\"content-bottom\">
                                <p class=\"title-medium-48 text-grey-text\">
                                    Un fort esprit entrepreneurial de l’équipe
                                </p>
                                <p class=\"text-medium-20\">DLGA est une firme totalement indépendante.</p>
                                <p class=\"text-book-18\">
                                    Notre infrastructure technique performante et la souplesse d’organisation du cabinet
                                    sont mises au service d’un travail réalisé en équipe, favorisant la réactivité et la
                                    mobilisation des ressources nécessaires au traitement des dossiers.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-5 content-right\">
                            <img src=\"{{ asset('images/valeur-image.png') }}\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"valeur-container bg-green-400\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-12 col-lg-6 content-left\">
                            <p class=\"number\">02</p>
                            <div class=\"content-bottom\">
                                <p class=\"title-medium-48\">
                                    La recherche de solutions pragmatiques
                                </p>
                                <p class=\"text-medium-20 text-grey-text\">Une démarche ultra qualitative</p>
                                <p class=\"text-book-18\">
                                    Notre infrastructure technique performante et la souplesse d’organisation du cabinet
                                    sont mises au service d’un travail réalisé en équipe, favorisant la réactivité et la
                                    mobilisation des ressources nécessaires au traitement des dossiers.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-5 content-right\">
                            <img src=\"{{ asset('images/valeur-image.png') }}\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"valeur-container bg-green-50\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-12 col-lg-6 content-left\">
                            <p class=\"number\">03</p>
                            <div class=\"content-bottom\">
                                <p class=\"title-medium-48\">
                                    La connaissance du secteur d’expertise de ses clients
                                </p>
                                <p class=\"text-book-18\">
                                    Ainsi fort de son expérience de plus de dix dans le domaine de CleanTech, tel que
                                    celui des énergies renouvelables (éolien, photovoltaïque et biomasse), DLGA
                                    accompagne les clients du cabinet – développeurs de projets, fabricants de turbines,
                                    opérateurs électriques et fonds d’investissement – sur des opérations de
                                    développement, d’acquisition ou de cession de projets énergétiques.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-5 content-right\">
                            <img src=\"{{ asset('images/valeur-image.png') }}\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"valeur-container bg-green-600\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-12 col-lg-6 content-left\">
                            <p class=\"number\">04</p>
                            <div class=\"content-bottom\">
                                <p class=\"title-medium-48\">
                                    Un esprit boutique
                                </p>
                                <p class=\"text-book-18\">
                                    Aucune solution n’est interchangeable et aucune situation ne se règle avec une
                                    documentation standard appliquée uniformément. Le « sur-mesure juridique » se vit en
                                    proposant une solution créative, innovante et élaborée dans le respect des
                                    particularités de chacun.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-5 content-right\">
                            <img src=\"{{ asset('images/valeur-image.png') }}\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"valeur-container bg-green-800\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-12 col-lg-6 content-left\">
                            <p class=\"number\">05</p>
                            <div class=\"content-bottom\">
                                <p class=\"title-medium-48\">
                                    La recherche de création de valeur
                                </p>
                                <p class=\"text-book-18\">
                                    L’équipe de DLGA négocie et conseille en respectant des impératifs d’excellence, de
                                    persévérance et de rigueur absolues.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-5 content-right\">
                            <img src=\"{{ asset('images/valeur-image.png') }}\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"valeur-container bg-green-50\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-12 col-lg-6 content-left\">
                            <p class=\"number\">06</p>
                            <div class=\"content-bottom\">
                                <p class=\"title-medium-48\">
                                    Développement durable
                                </p>
                                <p class=\"text-book-18\">
                                    Ainsi fort de son expérience de plus de dix dans le domaine de CleanTech, tel que
                                    celui des énergies renouvelables (éolien, photovoltaïque et biomasse), DLGA
                                    accompagne les clients du cabinet – développeurs de projets, fabricants de turbines,
                                    opérateurs électriques et fonds d’investissement – sur des opérations de
                                    développement, d’acquisition ou de cession de projets énergétiques.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-5 content-right\">
                            <img src=\"{{ asset('images/valeur-image.png') }}\">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"section-five\">
            <img src=\"{{ asset('images/valeur-home.png') }}\">
            <div class=\"content-text-on-image\">
                <p class=\"text-image\">9 avocats. 2 cabinets</p>
            </div>
        </div>

        <div class=\"section-six\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-3 content-left\">
                        <p class=\"text-book-24 text-grey-darker\">Nos cabinets</p>
                    </div>
                    <div class=\"col-12 col-lg-9 content-right\">
                        <p class=\"display-block-text-48 text-grey-text\">
                            DLGA se développe en France sous forme de <span class=\"fst-italic\">bureaux intégrés</span>.
                            Ce développement d’un <span class=\"fst-italic\">réseau national</span> procède d’une
                            réflexion aboutie. Nous sommes convaincus que les implantations en région ont
                            un <span class=\"fst-italic\">véritable sens</span>.
                        </p>
                        <div class=\"accordion accordion-no-arrow\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        Pour nos clients qui se développent aussi en région
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        Pour proposer aux entreprises en région la force d’un réseau national
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingThree\">
                                    <div class=\"accordion-button collapsed\">
                                        Pour renforcer nos compétences existantes ou pour développer de nouveaux
                                        domaines d’activité
                                    </div>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"section-seven\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-12 col-lg-5 content-left\">
                        <img src=\"{{ asset('images/image-default.png') }}\">
                    </div>
                    <div class=\"col-12 col-lg-5 content-right\">
                        <p class=\"text-book-18 text-grey-text\">
                            Chacun des bureaux est animé par des avocats exerçant en conseil et contentieux des
                            affaires. Il s’agit d’avocats issus de la région où ils exercent, et qui en connaissent bien
                            le tissu économique et social.
                        </p>
                        <p class=\"text-book-18 text-grey-text\">
                            Ces confrères sont autonomes sur leur coeur de métier mais peuvent, le cas échéant,
                            intervenir avec les autres équipes des bureaux à Paris ou en région.
                        </p>
                        <a href=\"\" class=\"btn btn-primary\">Découvrir l’équipe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "cabinet/presentation.html.twig", "/Applications/MAMP/htdocs/ECV/DLGA/templates/cabinet/presentation.html.twig");
    }
}
