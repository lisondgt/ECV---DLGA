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

/* home.html.twig */
class __TwigTemplate_afd7ef43d390a5214febbc85442482a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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

        echo "DLGA - Accueil";
        
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
        echo "    <div class=\"home-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Accueil</span></li>
                </ol>
            </nav>
            <div class=\"header header-with-image\">
                <div class=\"content-image\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"header-image\">
                </div>
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Trouver un titre</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA est une <span class=\"fst-italic\">firme française indépendante</span> composée d’avocats
                        d’affaires ayant une pratique
                        <span class=\"fst-italic\">nationale</span> et <span class=\"fst-italic\">internationale</span>.
                        Nous couvrons les principaux domaines du <span class=\"fst-italic\">droit des affaires</span> et
                        du <span class=\"fst-italic\">droit public</span>.
                    </h1>
                </div>
                <div class=\"content-scrolldown\">
                    <a href=\"#anchor-scrolldown\" class=\"scrolldown\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/arrow-down-grey-dark.svg"), "html", null, true);
        echo "\" class=\"icon-arrow-down\">
                    </a>
                </div>
            </div>
        </div>

        <div id=\"anchor-scrolldown\"></div>

        <div class=\"container\">
            <div class=\"row justify-content-between section-one-home\">
                <div class=\"col-12 col-lg-5 content-left\">
                    <p class=\"title-medium-48 text-grey-text\">
                        Des domaines d’<span class=\"fst-italic\">expertises</span> et
                        <span class=\"fst-italic\">secteurs d’intervention</span> variés afin de répondre à
                        <span class=\"fst-italic\">vos besoins</span>.
                    </p>
                </div>
                <div class=\"col-12 col-lg-6 content-right\">
                    <p class=\"text-book-24 text-grey-text\">
                        Chez DLGA, nous avons pour ambition d’offrir à nos clients des compétences diversifiées et
                        pointues dans chaque domaine du droit.
                    <p>
                    <p class=\"text-book-24 text-grey-text\">
                        À cette fin, nous nous sommes structuré autour de 9 profils et d’un réseau de partenaires
                        capables d’intervenir dans de multiples setcteurs : de l’industrie, à l’automobile en passant
                        par la FinTech ou l’hôtellerie et les loisirs nous pouvons vous accompagner et nous adpater à
                        vos besoins.
                    </p>
                    <a href=\"\" class=\"btn btn-primary\">
                        Découvrir nos compétences
                    </a>
                </div>
            </div>
            <div class=\"section-two-home\">
                <div class=\"content-top\">
                    <div class=\"chiffres-cles color-green-600\">
                        <span class=\"chiffre\">+200</span>
                        <span class=\"chiffre-text\">projets réalisés</span>
                    </div>
                    <div class=\"chiffres-cles color-green-300\">
                        <span class=\"chiffre\">+200</span>
                        <span class=\"chiffre-text\">clients accompagnés</span>
                    </div>
                </div>
                <div class=\"content-bottom\">
                    <div class=\"chiffres-cles color-green-100\">
                        <span class=\"chiffre\">+200</span>
                        <span class=\"chiffre-text\">donnée exemple</span>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"section-three-home\">
            <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/valeur-home.png"), "html", null, true);
        echo "\">
        </div>

        <div class=\"container-fluid section-four-home\">
            <div class=\"row justify-content-end\">
                <div class=\"col-12 col-lg-11 pe-0\">
                    <div class=\"citation\">
                        <div class=\"container\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-12 col-lg-8 content-citation\">
                                    <p class=\"text-book-24 text-grey-background\">Notre ambition</p>
                                    <p class=\"display-block-text-48 text-grey-background\">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Cursus turpis id ultrices ullamcorper convallis
                                        pellentesque. Sed consequat fusce sit sed feugiat nisl. Faucibus neque viverra
                                        sagittis
                                        in amet morbi varius.</p>
                                    <div class=\"avocat\">
                                        <div class=\"content-left\">
                                            <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/johanna.png"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"content-right\">
                                            <p class=\"title-avocat\">Avocat associé</p>
                                            <p class=\"name-avocat\">Johanna Leplanois</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-five-home\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-12 col-lg-4 content-left\">
                        <h2 class=\"title-medium-48 text-grey-text\">
                            Nous proposons diverses <span class=\"fst-italic\">formations</span>
                        </h2>
                        <p class=\"text-book-24 text-grey-darker\">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non varius gravida felis habitasse
                            in nibh dignissim ultrices et.
                        </p>
                        <a href=\"\" class=\"btn btn-primary\">Toutes nos formations</a>
                    </div>
                    <div class=\"col-12 col-lg-5 content-right\">
                        <div class=\"accordion accordion-no-arrow\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        <span class=\"number\">01</span> Matinée environnement, urbanisme et ENR
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        <span class=\"number\">02</span> Matinée bancaire
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingThree\">
                                    <div class=\"accordion-button collapsed\">
                                        <span class=\"number\">03</span> Matinée sociale
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        <span class=\"number\">04</span> Matinée internationale
                                    </div>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-six-home\">
            <div class=\"container\">
                <div class=\"row align-items-end justify-content-between\">
                    <div class=\"col-12 col-lg-4 content-left\">
                        <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/accueil-image-2.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-12 col-lg-7 content-right\">
                        <p class=\"text-book-24 text-grey-darker\">DLGA avocats</p>
                        <p class=\"display-block-text-48 text-grey-text\">
                            Le cabinet DLGA se développe sous forme de bureaux intégrés. Nous sommes <a href=\"\">9 avocats</a> répartis
                            en différents départements et aux <a href=\"\">compétences</a> diverses. Lors de nos projets nous restons
                            fidèles à <a href=\"\">6 principes</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-seven-home\">
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
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 165,  194 => 99,  173 => 81,  116 => 27,  99 => 13,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}DLGA - Accueil{% endblock %}
{% block body %}
    <div class=\"home-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Accueil</span></li>
                </ol>
            </nav>
            <div class=\"header header-with-image\">
                <div class=\"content-image\">
                    <img src=\"{{ asset('images/image-default.png') }}\" class=\"header-image\">
                </div>
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Trouver un titre</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA est une <span class=\"fst-italic\">firme française indépendante</span> composée d’avocats
                        d’affaires ayant une pratique
                        <span class=\"fst-italic\">nationale</span> et <span class=\"fst-italic\">internationale</span>.
                        Nous couvrons les principaux domaines du <span class=\"fst-italic\">droit des affaires</span> et
                        du <span class=\"fst-italic\">droit public</span>.
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

        <div class=\"container\">
            <div class=\"row justify-content-between section-one-home\">
                <div class=\"col-12 col-lg-5 content-left\">
                    <p class=\"title-medium-48 text-grey-text\">
                        Des domaines d’<span class=\"fst-italic\">expertises</span> et
                        <span class=\"fst-italic\">secteurs d’intervention</span> variés afin de répondre à
                        <span class=\"fst-italic\">vos besoins</span>.
                    </p>
                </div>
                <div class=\"col-12 col-lg-6 content-right\">
                    <p class=\"text-book-24 text-grey-text\">
                        Chez DLGA, nous avons pour ambition d’offrir à nos clients des compétences diversifiées et
                        pointues dans chaque domaine du droit.
                    <p>
                    <p class=\"text-book-24 text-grey-text\">
                        À cette fin, nous nous sommes structuré autour de 9 profils et d’un réseau de partenaires
                        capables d’intervenir dans de multiples setcteurs : de l’industrie, à l’automobile en passant
                        par la FinTech ou l’hôtellerie et les loisirs nous pouvons vous accompagner et nous adpater à
                        vos besoins.
                    </p>
                    <a href=\"\" class=\"btn btn-primary\">
                        Découvrir nos compétences
                    </a>
                </div>
            </div>
            <div class=\"section-two-home\">
                <div class=\"content-top\">
                    <div class=\"chiffres-cles color-green-600\">
                        <span class=\"chiffre\">+200</span>
                        <span class=\"chiffre-text\">projets réalisés</span>
                    </div>
                    <div class=\"chiffres-cles color-green-300\">
                        <span class=\"chiffre\">+200</span>
                        <span class=\"chiffre-text\">clients accompagnés</span>
                    </div>
                </div>
                <div class=\"content-bottom\">
                    <div class=\"chiffres-cles color-green-100\">
                        <span class=\"chiffre\">+200</span>
                        <span class=\"chiffre-text\">donnée exemple</span>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"section-three-home\">
            <img src=\"{{ asset('images/valeur-home.png') }}\">
        </div>

        <div class=\"container-fluid section-four-home\">
            <div class=\"row justify-content-end\">
                <div class=\"col-12 col-lg-11 pe-0\">
                    <div class=\"citation\">
                        <div class=\"container\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-12 col-lg-8 content-citation\">
                                    <p class=\"text-book-24 text-grey-background\">Notre ambition</p>
                                    <p class=\"display-block-text-48 text-grey-background\">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Cursus turpis id ultrices ullamcorper convallis
                                        pellentesque. Sed consequat fusce sit sed feugiat nisl. Faucibus neque viverra
                                        sagittis
                                        in amet morbi varius.</p>
                                    <div class=\"avocat\">
                                        <div class=\"content-left\">
                                            <img src=\"{{ asset('images/johanna.png') }}\">
                                        </div>
                                        <div class=\"content-right\">
                                            <p class=\"title-avocat\">Avocat associé</p>
                                            <p class=\"name-avocat\">Johanna Leplanois</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-five-home\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-12 col-lg-4 content-left\">
                        <h2 class=\"title-medium-48 text-grey-text\">
                            Nous proposons diverses <span class=\"fst-italic\">formations</span>
                        </h2>
                        <p class=\"text-book-24 text-grey-darker\">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non varius gravida felis habitasse
                            in nibh dignissim ultrices et.
                        </p>
                        <a href=\"\" class=\"btn btn-primary\">Toutes nos formations</a>
                    </div>
                    <div class=\"col-12 col-lg-5 content-right\">
                        <div class=\"accordion accordion-no-arrow\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        <span class=\"number\">01</span> Matinée environnement, urbanisme et ENR
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        <span class=\"number\">02</span> Matinée bancaire
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingThree\">
                                    <div class=\"accordion-button collapsed\">
                                        <span class=\"number\">03</span> Matinée sociale
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        <span class=\"number\">04</span> Matinée internationale
                                    </div>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-six-home\">
            <div class=\"container\">
                <div class=\"row align-items-end justify-content-between\">
                    <div class=\"col-12 col-lg-4 content-left\">
                        <img src=\"{{ asset('images/accueil-image-2.png') }}\">
                    </div>
                    <div class=\"col-12 col-lg-7 content-right\">
                        <p class=\"text-book-24 text-grey-darker\">DLGA avocats</p>
                        <p class=\"display-block-text-48 text-grey-text\">
                            Le cabinet DLGA se développe sous forme de bureaux intégrés. Nous sommes <a href=\"\">9 avocats</a> répartis
                            en différents départements et aux <a href=\"\">compétences</a> diverses. Lors de nos projets nous restons
                            fidèles à <a href=\"\">6 principes</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-seven-home\">
            <div class=\"container\">
                <p class=\"text-book-24 text-grey-dark\">Contact</p>
                <p class=\"title-medium-64 text-grey-text\">
                    Vous êtes intéressé par notre cabinet ?
                    N’hésitez pas à prendre <a href=\"\">contact</a> avec nous.
                </p>
            </div>
        </div>
    </div>
{% endblock %}
", "home.html.twig", "/Applications/MAMP/htdocs/ECV/DLGA/templates/home.html.twig");
    }
}
