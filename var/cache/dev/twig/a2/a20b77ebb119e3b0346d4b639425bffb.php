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

/* base.html.twig */
class __TwigTemplate_7fff098972f5ddd5cc63435fc5e680b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\"
          href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    ";
        // line 9
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
<body>
<nav class=\"navbar navbar-expand-lg\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DLGA-logo.svg"), "html", null, true);
        echo "\" class=\"logo\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarText\"
                aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarText\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"cabinet\" role=\"button\" data-bs-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        Le cabinet
                    </a>
                    <ul class=\"dropdown-menu list-container\" aria-labelledby=\"cabinet\">
                        <li class=\"container dropdown-title-container\"><span class=\"dropdown-title\">Le cabinet</span>
                            <span class=\"close-dropdown-menu\">Fermer</span></li>
                        <li>
                            <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cabinet_presentation");
        echo "\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Présentation</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cabinet_equipe");
        echo "\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Équipe</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cabinet_reseau");
        echo "\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Réseau</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Nous rejoindre</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"expertise\" role=\"button\" data-bs-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        Notre expertise
                    </a>
                    <ul class=\"dropdown-menu list-container\" aria-labelledby=\"expertise\">
                        <li class=\"container dropdown-title-container\">
                            <span class=\"dropdown-title\">Notre expertise</span>
                            <span class=\"close-dropdown-menu\">Fermer</span>
                        </li>
                        <li>
                            <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("expertise_competences");
        echo "\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Nos compétences</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("expertise_secteur_intervention");
        echo "\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Nos secteurs d’intervention</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_formation");
        echo "\">Nos formations</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"actualites\" role=\"button\" data-bs-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        Actualités
                    </a>
                    <ul class=\"dropdown-menu list-container\" aria-labelledby=\"actualites\">
                        <li class=\"container dropdown-title-container\"><span class=\"dropdown-title\">Actualités</span>
                            <span class=\"close-dropdown-menu\">Fermer</span></li>
                        <li>
                            <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites_press");
        echo "\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Articles de presse</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Évènements / Table ronde</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-default.png"), "html", null, true);
        echo "\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Nos actualités linkedin</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Contact</a>
                </li>
            </ul>
            <a href=\"\" class=\"search-btn\">Rechercher</a>
        </div>
    </div>
</nav>
";
        // line 158
        $this->displayBlock('body', $context, $blocks);
        // line 159
        echo "<footer class=\"container\">
    <div class=\"row justify-content-between\">
        <div class=\"col-12 col-lg-5\">
            <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DLGA-logo.svg"), "html", null, true);
        echo "\" class=\"logo-footer\">
            <div class=\"container-address\">
                <div class=\"address-content\">
                    <p class=\"text-medium-24 text-green-main address-title\">
                        Lille
                    </p>
                    <p class=\"title-book-36\">
                        6 rue Léon Trulin – 59800 Lille
                    </p>
                    <a href=\"tel:+33320758760\" class=\"title-book-36 text-decoration-none\">
                        03 20 75 87 60
                    </a>
                    <a href=\"mailto:secretariat@dlga.fr\" class=\"title-book-36 text-decoration-none\">
                        secretariat@dlga.fr
                    </a>
                </div>
                <div class=\"address-content\">
                    <p class=\"text-medium-24 text-green-main address-title\">
                        Paris
                    </p>
                    <p class=\"title-book-36\">
                        11/13 rue de Belzunce – 75010 Paris
                    </p>
                    <a href=\"tel:+33145556520\" class=\"title-book-36 text-decoration-none\">
                        01 45 55 65 20
                    </a>
                    <a href=\"mailto:secretariat@dlga.fr\" class=\"title-book-36 text-decoration-none\">
                        secretariat@dlga.fr
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-lg-6\">
            <div class=\"row\">
                <div class=\"col-12 col-lg-6\">
                    <div class=\"nav-footer\">
                        <p class=\"text-medium-32 text-grey-dark title-nav\">Le cabinet</p>
                        <ul class=\"navbar-footer\">
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Notre histoire</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nos valeurs</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">L’équipe</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Notre réseau</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Collaborateurs</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nous rejoindre</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"nav-footer\">
                        <p class=\"text-medium-32 text-grey-dark title-nav\">Nos formations</p>
                        <ul class=\"navbar-footer\">
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Catalogue</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nos dernières interventions</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Inscriptions aux prochaines matinées</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-12 col-lg-6\">
                    <div class=\"nav-footer\">
                        <p class=\"text-medium-32 text-grey-dark title-nav\">Notre expertise</p>
                        <ul class=\"navbar-footer\">
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nos compétences</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nos secteurs d’intervention</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"nav-footer\">
                        <p class=\"text-medium-32 text-grey-dark title-nav\">Nos actualités</p>
                        <ul class=\"navbar-footer\">
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">La vie du cabinet</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nos publications</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nos newsletters</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"nav-footer\">
                        <p class=\"text-medium-32 text-grey-dark title-nav\">Contact</p>
                        <ul class=\"navbar-footer\">
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Catalogue</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class=\"bottom-footer text-medium-14 text-grey-dark\">© DLGA | <a href=\"\">Cabinet d’avocats</a> | <a
                        href=\"\">Mentions Légales</a> | <a href=\"\">Politique de confidentialité</a></p>
        </div>
    </div>
</footer>
";
        // line 276
        $this->displayBlock('javascripts', $context, $blocks);
        // line 282
        echo "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DLGA";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 158
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 276
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 277
        echo "    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
            integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\" crossorigin=\"anonymous\"></script>
    ";
        // line 279
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        // line 280
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("script");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 280,  473 => 279,  469 => 277,  459 => 276,  441 => 158,  428 => 10,  418 => 9,  399 => 5,  387 => 282,  385 => 276,  268 => 162,  263 => 159,  261 => 158,  242 => 142,  229 => 132,  216 => 122,  210 => 119,  196 => 108,  184 => 99,  178 => 96,  168 => 89,  162 => 86,  140 => 67,  127 => 57,  121 => 54,  111 => 47,  105 => 44,  95 => 37,  89 => 34,  69 => 17,  62 => 12,  59 => 9,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}DLGA{% endblock %}</title>
    <link rel=\"icon\"
          href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
</head>
<body>
<nav class=\"navbar navbar-expand-lg\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">
            <img src=\"{{ asset('images/DLGA-logo.svg') }}\" class=\"logo\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarText\"
                aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarText\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"cabinet\" role=\"button\" data-bs-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        Le cabinet
                    </a>
                    <ul class=\"dropdown-menu list-container\" aria-labelledby=\"cabinet\">
                        <li class=\"container dropdown-title-container\"><span class=\"dropdown-title\">Le cabinet</span>
                            <span class=\"close-dropdown-menu\">Fermer</span></li>
                        <li>
                            <a href=\"{{ path(\"cabinet_presentation\") }}\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Présentation</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path(\"cabinet_equipe\") }}\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Équipe</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path(\"cabinet_reseau\") }}\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Réseau</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Nous rejoindre</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"expertise\" role=\"button\" data-bs-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        Notre expertise
                    </a>
                    <ul class=\"dropdown-menu list-container\" aria-labelledby=\"expertise\">
                        <li class=\"container dropdown-title-container\">
                            <span class=\"dropdown-title\">Notre expertise</span>
                            <span class=\"close-dropdown-menu\">Fermer</span>
                        </li>
                        <li>
                            <a href=\"{{ path(\"expertise_competences\") }}\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Nos compétences</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path(\"expertise_secteur_intervention\") }}\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Nos secteurs d’intervention</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path(\"show_formation\") }}\">Nos formations</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"actualites\" role=\"button\" data-bs-toggle=\"dropdown\"
                       aria-expanded=\"false\">
                        Actualités
                    </a>
                    <ul class=\"dropdown-menu list-container\" aria-labelledby=\"actualites\">
                        <li class=\"container dropdown-title-container\"><span class=\"dropdown-title\">Actualités</span>
                            <span class=\"close-dropdown-menu\">Fermer</span></li>
                        <li>
                            <a href=\"{{ path('actualites_press') }}\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Articles de presse</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Évènements / Table ronde</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"list-element-link dropdown-item\">
                                <div class=\"container\">
                                    <div class=\"list-content\">
                                        <img src=\"{{ asset('images/image-default.png') }}\" class=\"show-hover\">
                                        <h2 class=\"list-tile title-medium-48 mb-0\">Nos actualités linkedin</h2>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Contact</a>
                </li>
            </ul>
            <a href=\"\" class=\"search-btn\">Rechercher</a>
        </div>
    </div>
</nav>
{% block body %}{% endblock %}
<footer class=\"container\">
    <div class=\"row justify-content-between\">
        <div class=\"col-12 col-lg-5\">
            <img src=\"{{ asset('images/DLGA-logo.svg') }}\" class=\"logo-footer\">
            <div class=\"container-address\">
                <div class=\"address-content\">
                    <p class=\"text-medium-24 text-green-main address-title\">
                        Lille
                    </p>
                    <p class=\"title-book-36\">
                        6 rue Léon Trulin – 59800 Lille
                    </p>
                    <a href=\"tel:+33320758760\" class=\"title-book-36 text-decoration-none\">
                        03 20 75 87 60
                    </a>
                    <a href=\"mailto:secretariat@dlga.fr\" class=\"title-book-36 text-decoration-none\">
                        secretariat@dlga.fr
                    </a>
                </div>
                <div class=\"address-content\">
                    <p class=\"text-medium-24 text-green-main address-title\">
                        Paris
                    </p>
                    <p class=\"title-book-36\">
                        11/13 rue de Belzunce – 75010 Paris
                    </p>
                    <a href=\"tel:+33145556520\" class=\"title-book-36 text-decoration-none\">
                        01 45 55 65 20
                    </a>
                    <a href=\"mailto:secretariat@dlga.fr\" class=\"title-book-36 text-decoration-none\">
                        secretariat@dlga.fr
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-lg-6\">
            <div class=\"row\">
                <div class=\"col-12 col-lg-6\">
                    <div class=\"nav-footer\">
                        <p class=\"text-medium-32 text-grey-dark title-nav\">Le cabinet</p>
                        <ul class=\"navbar-footer\">
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Notre histoire</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nos valeurs</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">L’équipe</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Notre réseau</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Collaborateurs</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nous rejoindre</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"nav-footer\">
                        <p class=\"text-medium-32 text-grey-dark title-nav\">Nos formations</p>
                        <ul class=\"navbar-footer\">
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Catalogue</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nos dernières interventions</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Inscriptions aux prochaines matinées</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-12 col-lg-6\">
                    <div class=\"nav-footer\">
                        <p class=\"text-medium-32 text-grey-dark title-nav\">Notre expertise</p>
                        <ul class=\"navbar-footer\">
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nos compétences</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nos secteurs d’intervention</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"nav-footer\">
                        <p class=\"text-medium-32 text-grey-dark title-nav\">Nos actualités</p>
                        <ul class=\"navbar-footer\">
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">La vie du cabinet</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nos publications</a>
                            </li>
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Nos newsletters</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"nav-footer\">
                        <p class=\"text-medium-32 text-grey-dark title-nav\">Contact</p>
                        <ul class=\"navbar-footer\">
                            <li class=\"nav-item-footer\">
                                <a href=\"\" class=\"nav-link-footer\">Catalogue</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class=\"bottom-footer text-medium-14 text-grey-dark\">© DLGA | <a href=\"\">Cabinet d’avocats</a> | <a
                        href=\"\">Mentions Légales</a> | <a href=\"\">Politique de confidentialité</a></p>
        </div>
    </div>
</footer>
{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
            integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\" crossorigin=\"anonymous\"></script>
    {{ encore_entry_script_tags('app') }}
    {{ encore_entry_script_tags('script') }}
{% endblock %}
</body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/ECV/DLGA/templates/base.html.twig");
    }
}
