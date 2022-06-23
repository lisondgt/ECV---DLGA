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

/* cabinet/equipe.html.twig */
class __TwigTemplate_d3d2a28a751a8a34460fe5d3b1fdd056 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cabinet/equipe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cabinet/equipe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cabinet/equipe.html.twig", 1);
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

        echo "DLGA - Équipe";
        
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
        echo "    <div class=\"cabinet-equipe-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a></li>
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><span>Le cabinet</span></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Notre équipe</span></li>
                </ol>
            </nav>
            <div class=\"header header-with-image\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Notre équipe</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA est une société d’<span class=\"fst-italic\">avocats d’affaires</span> organisée en
                        différents départements couvrant les <span class=\"fst-italic\">principaux domaines</span>
                        du droit des affaires, de l’immobilier et du droit public.
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

        <div class=\"list-avocats\">
            <div class=\"container\">
                <div class=\"row justify-content-between row-avocats\">
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"#\" class=\"link-modal-green avocat-content\" data-bs-toggle=\"modal\"
                           data-bs-target=\"#avocatModalCharleDelavenne\">
                            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DLGA-Charles-DELAVENNE.png"), "html", null, true);
        echo "\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Charles Delavenne</p>
                                    <p class=\"avocat-description\">Avocat, associé gérant</p>
                                </div>
                            </div>
                        </a>
                        <div class=\"modal fade modal-avocat modal-green\" id=\"avocatModalCharleDelavenne\" tabindex=\"-1\"
                             aria-labelledby=\"avocatModalCharleDelavenneLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-body\">
                                        <div class=\"content-left\">
                                            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DLGA-Charles-DELAVENNE.png"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"content-right\">
                                            <div class=\"d-flex justify-content-end\">
                                                <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                                    Fermer
                                                </a>
                                            </div>
                                            <p class=\"avocat-description\">Avocat, associé gérant</p>
                                            <p class=\"avocat-name\">Charles Delavenne</p>
                                            <p class=\"avocat-subtitle\">Environnement, énergies renouvelables et
                                                urbanisme</p>
                                            <div class=\"container-infos\">
                                                <div class=\"content-left-infos\">
                                                    <p>
                                                        Johanna Leplanois est titulaire d’un Master II en droit public
                                                        approfondi et a été inscrite au barreau dès 2013.
                                                    </p>
                                                    <p>
                                                        Suite à une expérience significative au tribunal administratif
                                                        de Paris en qualité notamment d’assistante de justice, Johanna
                                                        Leplanois a d’abord exercé la profession d’avocat au sein du
                                                        cabinet d’avocats Fedarc (2014), dans des dossiers de droit
                                                        public diversifiés, puis au sein du département droit public du
                                                        cabinet d’avocats Claude et Sarkozy (2015-2016).
                                                    </p>
                                                    <p>
                                                        Souhaitant ensuite disposer d’une expérience en administration
                                                        centrale, elle a intégré le service des risques naturels et
                                                        hydraulique de la direction générale de la prévention des
                                                        risques du Ministère de la transition écologique en qualité de
                                                        juriste (2017-2019) puis la direction des affaires juridiques
                                                        (2019-2021).
                                                    </p>
                                                    <p>
                                                        Depuis 2021, Johanna Leplanois a rejoint le cabinet DLGA en
                                                        qualité d’associé, responsable du pôle droit de l’environnement,
                                                        des énergies renouvelables et de l’urbanisme.
                                                    </p>
                                                    <p>
                                                        Par ailleurs, elle dispense régulièrement des enseignements. Par
                                                        exemple, elle a dernièrement enseigné la procédure
                                                        administrative contentieuse en classe préparatoire privée, aux
                                                        étudiants préparant l’examen national d’entrée au Centre
                                                        Régional de Formation Professionnelle des Avocats et le droit
                                                        administratif des biens aux étudiants en licence à l’université
                                                        Paris 1, Panthéon-La Sorbonne.
                                                    </p>
                                                </div>
                                                <div class=\"content-right-infos\">
                                                    <a href=\"\" class=\"contact-link\">Contact</a>
                                                    <a href=\"\" class=\"linkedin-link\">Linkedin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"#\" class=\"link-modal-green avocat-content\" data-bs-toggle=\"modal\"
                           data-bs-target=\"#avocatModalJohannaLaplanois\">
                            <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DLGA-Johanna-LAPLANOIS.png"), "html", null, true);
        echo "\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Johanna Leplanois</p>
                                    <p class=\"avocat-description\">Avocat associé, Environnement, énergies renouvelables
                                        et urbanisme</p>
                                </div>
                            </div>
                        </a>
                        <div class=\"modal fade modal-avocat modal-green\" id=\"avocatModalJohannaLaplanois\" tabindex=\"-1\"
                             aria-labelledby=\"avocatModalJohannaLaplanoisLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-body\">
                                        <div class=\"content-left\">
                                            <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DLGA-Johanna-LAPLANOIS.png"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"content-right\">
                                            <div class=\"d-flex justify-content-end\">
                                                <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                                    Fermer
                                                </a>
                                            </div>
                                            <p class=\"avocat-description\">Avocat associé</p>
                                            <p class=\"avocat-name\">Johanna Leplanoise</p>
                                            <p class=\"avocat-subtitle\">Environnement, énergies renouvelables
                                                et urbanisme</p>
                                            <div class=\"container-infos\">
                                                <div class=\"content-left-infos\">
                                                    <p>
                                                        Johanna Leplanois est titulaire d’un Master II en droit public
                                                        approfondi et a été inscrite au barreau dès 2013.
                                                    </p>
                                                    <p>
                                                        Suite à une expérience significative au tribunal administratif
                                                        de Paris en qualité notamment d’assistante de justice, Johanna
                                                        Leplanois a d’abord exercé la profession d’avocat au sein du
                                                        cabinet d’avocats Fedarc (2014), dans des dossiers de droit
                                                        public diversifiés, puis au sein du département droit public du
                                                        cabinet d’avocats Claude et Sarkozy (2015-2016).
                                                    </p>
                                                    <p>
                                                        Souhaitant ensuite disposer d’une expérience en administration
                                                        centrale, elle a intégré le service des risques naturels et
                                                        hydraulique de la direction générale de la prévention des
                                                        risques du Ministère de la transition écologique en qualité de
                                                        juriste (2017-2019) puis la direction des affaires juridiques
                                                        (2019-2021).
                                                    </p>
                                                    <p>
                                                        Depuis 2021, Johanna Leplanois a rejoint le cabinet DLGA en
                                                        qualité d’associé, responsable du pôle droit de l’environnement,
                                                        des énergies renouvelables et de l’urbanisme.
                                                    </p>
                                                    <p>
                                                        Par ailleurs, elle dispense régulièrement des enseignements. Par
                                                        exemple, elle a dernièrement enseigné la procédure
                                                        administrative contentieuse en classe préparatoire privée, aux
                                                        étudiants préparant l’examen national d’entrée au Centre
                                                        Régional de Formation Professionnelle des Avocats et le droit
                                                        administratif des biens aux étudiants en licence à l’université
                                                        Paris 1, Panthéon-La Sorbonne.
                                                    </p>
                                                </div>
                                                <div class=\"content-right-infos\">
                                                    <a href=\"\" class=\"contact-link\">Contact</a>
                                                    <a href=\"\" class=\"linkedin-link\">Linkedin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-start row-avocats\">
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DLGA-Guillaume-BOIS.png"), "html", null, true);
        echo "\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Guillaume Bain</p>
                                    <p class=\"avocat-description\">Avocat associé en Private Equity</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DLGA-Anne-LEFEBVRE.png"), "html", null, true);
        echo "\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Anne Lefebvre</p>
                                    <p class=\"avocat-description\">Avocate, conseil et contentieux en Droit des
                                        affaires</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"row justify-content-end row-avocats\">
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DLGA-Xavier-BASSELET.png"), "html", null, true);
        echo "\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Xavier Basselet</p>
                                    <p class=\"avocat-description\">Of Counsel</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"row justify-content-between row-avocats\">
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DLGA-Caterina-ROSI-CRUSE.png"), "html", null, true);
        echo "\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Caterina Rosi-Cruse</p>
                                    <p class=\"avocat-description\">Avocat collaborateur droit des affaires</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DLGA-Isabel-SUDOR.png"), "html", null, true);
        echo "\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Isabel Sudor</p>
                                    <p class=\"avocat-description\">Avocat</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"row justify-content-end row-avocats\">
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DLGA-Edouard-DEVILDER.png"), "html", null, true);
        echo "\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Edouard Devilder</p>
                                    <p class=\"avocat-description\">Avocat partenaire / Barreau de Paris</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DLGA-Karina-BALZER.png"), "html", null, true);
        echo "\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Cecilia Trovato</p>
                                    <p class=\"avocat-description\">Avocat partenaire / Barreau de Paris</p>
                                </div>
                            </div>
                        </a>
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
        return "cabinet/equipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 267,  375 => 256,  359 => 243,  345 => 232,  329 => 219,  312 => 205,  298 => 194,  231 => 130,  213 => 115,  147 => 52,  130 => 38,  113 => 24,  94 => 8,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}DLGA - Équipe{% endblock %}
{% block body %}
    <div class=\"cabinet-equipe-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"{{ path('home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><span>Le cabinet</span></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Notre équipe</span></li>
                </ol>
            </nav>
            <div class=\"header header-with-image\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Notre équipe</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA est une société d’<span class=\"fst-italic\">avocats d’affaires</span> organisée en
                        différents départements couvrant les <span class=\"fst-italic\">principaux domaines</span>
                        du droit des affaires, de l’immobilier et du droit public.
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

        <div class=\"list-avocats\">
            <div class=\"container\">
                <div class=\"row justify-content-between row-avocats\">
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"#\" class=\"link-modal-green avocat-content\" data-bs-toggle=\"modal\"
                           data-bs-target=\"#avocatModalCharleDelavenne\">
                            <img src=\"{{ asset('images/DLGA-Charles-DELAVENNE.png') }}\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Charles Delavenne</p>
                                    <p class=\"avocat-description\">Avocat, associé gérant</p>
                                </div>
                            </div>
                        </a>
                        <div class=\"modal fade modal-avocat modal-green\" id=\"avocatModalCharleDelavenne\" tabindex=\"-1\"
                             aria-labelledby=\"avocatModalCharleDelavenneLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-body\">
                                        <div class=\"content-left\">
                                            <img src=\"{{ asset('images/DLGA-Charles-DELAVENNE.png') }}\">
                                        </div>
                                        <div class=\"content-right\">
                                            <div class=\"d-flex justify-content-end\">
                                                <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                                    Fermer
                                                </a>
                                            </div>
                                            <p class=\"avocat-description\">Avocat, associé gérant</p>
                                            <p class=\"avocat-name\">Charles Delavenne</p>
                                            <p class=\"avocat-subtitle\">Environnement, énergies renouvelables et
                                                urbanisme</p>
                                            <div class=\"container-infos\">
                                                <div class=\"content-left-infos\">
                                                    <p>
                                                        Johanna Leplanois est titulaire d’un Master II en droit public
                                                        approfondi et a été inscrite au barreau dès 2013.
                                                    </p>
                                                    <p>
                                                        Suite à une expérience significative au tribunal administratif
                                                        de Paris en qualité notamment d’assistante de justice, Johanna
                                                        Leplanois a d’abord exercé la profession d’avocat au sein du
                                                        cabinet d’avocats Fedarc (2014), dans des dossiers de droit
                                                        public diversifiés, puis au sein du département droit public du
                                                        cabinet d’avocats Claude et Sarkozy (2015-2016).
                                                    </p>
                                                    <p>
                                                        Souhaitant ensuite disposer d’une expérience en administration
                                                        centrale, elle a intégré le service des risques naturels et
                                                        hydraulique de la direction générale de la prévention des
                                                        risques du Ministère de la transition écologique en qualité de
                                                        juriste (2017-2019) puis la direction des affaires juridiques
                                                        (2019-2021).
                                                    </p>
                                                    <p>
                                                        Depuis 2021, Johanna Leplanois a rejoint le cabinet DLGA en
                                                        qualité d’associé, responsable du pôle droit de l’environnement,
                                                        des énergies renouvelables et de l’urbanisme.
                                                    </p>
                                                    <p>
                                                        Par ailleurs, elle dispense régulièrement des enseignements. Par
                                                        exemple, elle a dernièrement enseigné la procédure
                                                        administrative contentieuse en classe préparatoire privée, aux
                                                        étudiants préparant l’examen national d’entrée au Centre
                                                        Régional de Formation Professionnelle des Avocats et le droit
                                                        administratif des biens aux étudiants en licence à l’université
                                                        Paris 1, Panthéon-La Sorbonne.
                                                    </p>
                                                </div>
                                                <div class=\"content-right-infos\">
                                                    <a href=\"\" class=\"contact-link\">Contact</a>
                                                    <a href=\"\" class=\"linkedin-link\">Linkedin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"#\" class=\"link-modal-green avocat-content\" data-bs-toggle=\"modal\"
                           data-bs-target=\"#avocatModalJohannaLaplanois\">
                            <img src=\"{{ asset('images/DLGA-Johanna-LAPLANOIS.png') }}\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Johanna Leplanois</p>
                                    <p class=\"avocat-description\">Avocat associé, Environnement, énergies renouvelables
                                        et urbanisme</p>
                                </div>
                            </div>
                        </a>
                        <div class=\"modal fade modal-avocat modal-green\" id=\"avocatModalJohannaLaplanois\" tabindex=\"-1\"
                             aria-labelledby=\"avocatModalJohannaLaplanoisLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-body\">
                                        <div class=\"content-left\">
                                            <img src=\"{{ asset('images/DLGA-Johanna-LAPLANOIS.png') }}\">
                                        </div>
                                        <div class=\"content-right\">
                                            <div class=\"d-flex justify-content-end\">
                                                <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                                    Fermer
                                                </a>
                                            </div>
                                            <p class=\"avocat-description\">Avocat associé</p>
                                            <p class=\"avocat-name\">Johanna Leplanoise</p>
                                            <p class=\"avocat-subtitle\">Environnement, énergies renouvelables
                                                et urbanisme</p>
                                            <div class=\"container-infos\">
                                                <div class=\"content-left-infos\">
                                                    <p>
                                                        Johanna Leplanois est titulaire d’un Master II en droit public
                                                        approfondi et a été inscrite au barreau dès 2013.
                                                    </p>
                                                    <p>
                                                        Suite à une expérience significative au tribunal administratif
                                                        de Paris en qualité notamment d’assistante de justice, Johanna
                                                        Leplanois a d’abord exercé la profession d’avocat au sein du
                                                        cabinet d’avocats Fedarc (2014), dans des dossiers de droit
                                                        public diversifiés, puis au sein du département droit public du
                                                        cabinet d’avocats Claude et Sarkozy (2015-2016).
                                                    </p>
                                                    <p>
                                                        Souhaitant ensuite disposer d’une expérience en administration
                                                        centrale, elle a intégré le service des risques naturels et
                                                        hydraulique de la direction générale de la prévention des
                                                        risques du Ministère de la transition écologique en qualité de
                                                        juriste (2017-2019) puis la direction des affaires juridiques
                                                        (2019-2021).
                                                    </p>
                                                    <p>
                                                        Depuis 2021, Johanna Leplanois a rejoint le cabinet DLGA en
                                                        qualité d’associé, responsable du pôle droit de l’environnement,
                                                        des énergies renouvelables et de l’urbanisme.
                                                    </p>
                                                    <p>
                                                        Par ailleurs, elle dispense régulièrement des enseignements. Par
                                                        exemple, elle a dernièrement enseigné la procédure
                                                        administrative contentieuse en classe préparatoire privée, aux
                                                        étudiants préparant l’examen national d’entrée au Centre
                                                        Régional de Formation Professionnelle des Avocats et le droit
                                                        administratif des biens aux étudiants en licence à l’université
                                                        Paris 1, Panthéon-La Sorbonne.
                                                    </p>
                                                </div>
                                                <div class=\"content-right-infos\">
                                                    <a href=\"\" class=\"contact-link\">Contact</a>
                                                    <a href=\"\" class=\"linkedin-link\">Linkedin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-start row-avocats\">
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"{{ asset('images/DLGA-Guillaume-BOIS.png') }}\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Guillaume Bain</p>
                                    <p class=\"avocat-description\">Avocat associé en Private Equity</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"{{ asset('images/DLGA-Anne-LEFEBVRE.png') }}\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Anne Lefebvre</p>
                                    <p class=\"avocat-description\">Avocate, conseil et contentieux en Droit des
                                        affaires</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"row justify-content-end row-avocats\">
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"{{ asset('images/DLGA-Xavier-BASSELET.png') }}\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Xavier Basselet</p>
                                    <p class=\"avocat-description\">Of Counsel</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"row justify-content-between row-avocats\">
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"{{ asset('images/DLGA-Caterina-ROSI-CRUSE.png') }}\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Caterina Rosi-Cruse</p>
                                    <p class=\"avocat-description\">Avocat collaborateur droit des affaires</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"{{ asset('images/DLGA-Isabel-SUDOR.png') }}\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Isabel Sudor</p>
                                    <p class=\"avocat-description\">Avocat</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"row justify-content-end row-avocats\">
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"{{ asset('images/DLGA-Edouard-DEVILDER.png') }}\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Edouard Devilder</p>
                                    <p class=\"avocat-description\">Avocat partenaire / Barreau de Paris</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-12 col-lg-4\">
                        <a href=\"\" class=\"avocat-content\">
                            <img src=\"{{ asset('images/DLGA-Karina-BALZER.png') }}\">
                            <div class=\"hover-effect\">
                                <div class=\"content-text\">
                                    <p class=\"avocat-name\">Cecilia Trovato</p>
                                    <p class=\"avocat-description\">Avocat partenaire / Barreau de Paris</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "cabinet/equipe.html.twig", "/Applications/MAMP/htdocs/ECV/DLGA/templates/cabinet/equipe.html.twig");
    }
}
