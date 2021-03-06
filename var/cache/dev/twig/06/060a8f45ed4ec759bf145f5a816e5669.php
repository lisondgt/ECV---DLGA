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

/* cabinet/reseau.html.twig */
class __TwigTemplate_d75b5e9559c23d316565a9dd8351db95 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cabinet/reseau.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cabinet/reseau.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cabinet/reseau.html.twig", 1);
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

        echo "DLGA - Notre r??seau";
        
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
        echo "    <div class=\"cabinet-reseau-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Accueil</a></li>
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><span>Le cabinet</span></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Notre r??seau</span></li>
                </ol>
            </nav>
            <div class=\"header header-with-image\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Nous rejoindre</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA <span class=\"fst-italic\">se d??veloppe en France</span> sous forme de
                        <span class=\"fst-italic\">bureaux int??gr??s</span> et via le r??seau
                        <span class=\"fst-italic\">Legal Stones</span>.
                    </h1>
                </div>
                <div class=\"content-scrolldown\">
                    <a href=\"#anchor-scrolldown\" class=\"scrolldown\">
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/arrow-down-grey-dark.svg"), "html", null, true);
        echo "\" class=\"icon-arrow-down\">
                    </a>
                </div>
            </div>
        </div>

        <div id=\"anchor-scrolldown\"></div>

        <div class=\"section-one\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-7\">
                        <p class=\"text-book-18 text-grey-text\">
                            Vous b??n??ficiez de notre r??seau de cabinets correspondants tant dans des mati??res
                            compl??mentaires qu????? l???international, construit au fil des ann??es qui partagent nos valeurs
                            et notamment l???ind??pendance.
                        </p>
                        <p class=\"text-book-18 text-grey-text\">
                            Nous ne sommes li??s avec nos correspondants par aucun accord exclusif. Nous nous adaptons
                            ainsi ?? vos demandes sp??cifiques et aux exigences de chaque dossier.
                        </p>
                        <p class=\"text-book-18 text-grey-text\">
                            Nous entretenons des relations ??troites avec nos cabinets correspondants dans le cadre des
                            dossiers trait??s en commun ; des d??tachements de collaborateurs et des ??changes de
                            comp??tences au cours de rencontres internationales viennent renforcer ces relations.
                        </p>
                        <p class=\"text-book-18 text-grey-text\">
                            Nous faisons appel ?? notre r??seau de correspondants en fonction des sp??cialit??s de chaque
                            cabinet. Vous b??n??ficiez ainsi des conseils de la meilleure qualit??, quelle que soit la
                            mati??re ou la juridiction concern??e.
                        </p>
                        <p class=\"text-book-18 text-grey-text\">
                            Nous restons votre interlocuteur unique et g??rons l???interaction entre les diff??rentes
                            sp??cialit??s et juridictions concern??es par votre op??ration.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-two\">
            <div class=\"container\">
                <div class=\"partners-container\">
                    <div class=\"partner-item\">
                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/legal-stones.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"partner-item\">
                        <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fee.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"partner-item\">
                        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cidde.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"partner-item\">
                        <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/afpcnt.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"partner-item\">
                        <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/droit-commerce.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"partner-item\">
                        <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/apm.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"partner-item\">
                        <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/anjb.png"), "html", null, true);
        echo "\">
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
        return "cabinet/reseau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 85,  186 => 82,  180 => 79,  174 => 76,  168 => 73,  162 => 70,  156 => 67,  110 => 24,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}DLGA - Notre r??seau{% endblock %}
{% block body %}
    <div class=\"cabinet-reseau-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Accueil</a></li>
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><span>Le cabinet</span></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Notre r??seau</span></li>
                </ol>
            </nav>
            <div class=\"header header-with-image\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Nous rejoindre</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA <span class=\"fst-italic\">se d??veloppe en France</span> sous forme de
                        <span class=\"fst-italic\">bureaux int??gr??s</span> et via le r??seau
                        <span class=\"fst-italic\">Legal Stones</span>.
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
                <div class=\"row\">
                    <div class=\"col-12 col-lg-7\">
                        <p class=\"text-book-18 text-grey-text\">
                            Vous b??n??ficiez de notre r??seau de cabinets correspondants tant dans des mati??res
                            compl??mentaires qu????? l???international, construit au fil des ann??es qui partagent nos valeurs
                            et notamment l???ind??pendance.
                        </p>
                        <p class=\"text-book-18 text-grey-text\">
                            Nous ne sommes li??s avec nos correspondants par aucun accord exclusif. Nous nous adaptons
                            ainsi ?? vos demandes sp??cifiques et aux exigences de chaque dossier.
                        </p>
                        <p class=\"text-book-18 text-grey-text\">
                            Nous entretenons des relations ??troites avec nos cabinets correspondants dans le cadre des
                            dossiers trait??s en commun ; des d??tachements de collaborateurs et des ??changes de
                            comp??tences au cours de rencontres internationales viennent renforcer ces relations.
                        </p>
                        <p class=\"text-book-18 text-grey-text\">
                            Nous faisons appel ?? notre r??seau de correspondants en fonction des sp??cialit??s de chaque
                            cabinet. Vous b??n??ficiez ainsi des conseils de la meilleure qualit??, quelle que soit la
                            mati??re ou la juridiction concern??e.
                        </p>
                        <p class=\"text-book-18 text-grey-text\">
                            Nous restons votre interlocuteur unique et g??rons l???interaction entre les diff??rentes
                            sp??cialit??s et juridictions concern??es par votre op??ration.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-two\">
            <div class=\"container\">
                <div class=\"partners-container\">
                    <div class=\"partner-item\">
                        <img src=\"{{ asset('images/legal-stones.png') }}\">
                    </div>
                    <div class=\"partner-item\">
                        <img src=\"{{ asset('images/fee.png') }}\">
                    </div>
                    <div class=\"partner-item\">
                        <img src=\"{{ asset('images/cidde.png') }}\">
                    </div>
                    <div class=\"partner-item\">
                        <img src=\"{{ asset('images/afpcnt.png') }}\">
                    </div>
                    <div class=\"partner-item\">
                        <img src=\"{{ asset('images/droit-commerce.png') }}\">
                    </div>
                    <div class=\"partner-item\">
                        <img src=\"{{ asset('images/apm.png') }}\">
                    </div>
                    <div class=\"partner-item\">
                        <img src=\"{{ asset('images/anjb.png') }}\">
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "cabinet/reseau.html.twig", "/Applications/MAMP/htdocs/ECV/DLGA/templates/cabinet/reseau.html.twig");
    }
}
