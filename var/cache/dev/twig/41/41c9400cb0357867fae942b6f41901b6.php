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

        echo "DLGA - Pr??sentation";
        
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
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Pr??sentation</span></li>
                </ol>
            </nav>
            <div class=\"header header-with-image\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Pr??sentation</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA offre ?? ses clients Fran??ais et ??trangers une <span
                                class=\"fst-italic\">prestation globale</span>
                        , gr??ce ?? la compl??mentarit?? de <a href=\"\">ses ??quipes</a> et ?? son r??seau de
                        <a href=\"\">correspondants</a> ?? l?????tranger, express??ment choisis pour leurs
                        <a href=\"\">comp??tences</a>, et la qualit?? de leur <span class=\"fst-italic\">collaboration</span>.
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
                            Le cabinet dispose d???une capacit?? ??prouv??e ?? mobiliser et coordonner des ??quipes
                            sp??cialis??es de haut niveau dans diff??rents pays. Il est ainsi reconnu pour son
                            exp??rience et son savoir-faire en mati??re de transactions internationales.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"section-two\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12 col-lg-8\">
                        <p class=\"text-book-24 text-grey-darker\">DLGA se caract??rise par???</p>
                    </div>
                </div>
            </div>
            <div class=\"section-text-images\">
                <div class=\"text-image text-left\">
                    <p class=\"text-section\">Une forte implication des associ??s</p>
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
                    <p class=\"text-section\">Un conseil personnalis??</p>
                </div>
                <div class=\"text-image text-left\">
                    <p class=\"text-section\">Une exigence de qualit??</p>
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
                            Fond?? par des <span class=\"fst-italic\">professionnels</span>, issus de firmes notamment
                            anglo-saxonnes de premier plan, DLGA cultive un esprit r??solument
                            <span class=\"fst-italic\">boutique</span> afin de pr??server
                            <span class=\"fst-italic\">flexibilit??</span>, <span class=\"fst-italic\">cr??ativit??</span> et
                            <span class=\"fst-italic\">pragmatisme</span>. N???intervenant que sur les mati??res de son c??ur
                            de m??tier, DLGA reste fid??le ?? <span class=\"fst-italic\">5 principes fondateurs</span>
                            qui forgent son <span class=\"fst-italic\">identit??</span>.
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
                                    Un fort esprit entrepreneurial de l?????quipe
                                </p>
                                <p class=\"text-medium-20\">DLGA est une firme totalement ind??pendante.</p>
                                <p class=\"text-book-18\">
                                    Notre infrastructure technique performante et la souplesse d???organisation du cabinet
                                    sont mises au service d???un travail r??alis?? en ??quipe, favorisant la r??activit?? et la
                                    mobilisation des ressources n??cessaires au traitement des dossiers.
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
                                <p class=\"text-medium-20 text-grey-text\">Une d??marche ultra qualitative</p>
                                <p class=\"text-book-18\">
                                    Notre infrastructure technique performante et la souplesse d???organisation du cabinet
                                    sont mises au service d???un travail r??alis?? en ??quipe, favorisant la r??activit?? et la
                                    mobilisation des ressources n??cessaires au traitement des dossiers.
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
                                    La connaissance du secteur d???expertise de ses clients
                                </p>
                                <p class=\"text-book-18\">
                                    Ainsi fort de son exp??rience de plus de dix dans le domaine de CleanTech, tel que
                                    celui des ??nergies renouvelables (??olien, photovolta??que et biomasse), DLGA
                                    accompagne les clients du cabinet ??? d??veloppeurs de projets, fabricants de turbines,
                                    op??rateurs ??lectriques et fonds d???investissement ??? sur des op??rations de
                                    d??veloppement, d???acquisition ou de cession de projets ??nerg??tiques.
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
                                    Aucune solution n???est interchangeable et aucune situation ne se r??gle avec une
                                    documentation standard appliqu??e uniform??ment. Le ?? sur-mesure juridique ?? se vit en
                                    proposant une solution cr??ative, innovante et ??labor??e dans le respect des
                                    particularit??s de chacun.
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
                                    La recherche de cr??ation de valeur
                                </p>
                                <p class=\"text-book-18\">
                                    L?????quipe de DLGA n??gocie et conseille en respectant des imp??ratifs d???excellence, de
                                    pers??v??rance et de rigueur absolues.
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
                                    D??veloppement durable
                                </p>
                                <p class=\"text-book-18\">
                                    Ainsi fort de son exp??rience de plus de dix dans le domaine de CleanTech, tel que
                                    celui des ??nergies renouvelables (??olien, photovolta??que et biomasse), DLGA
                                    accompagne les clients du cabinet ??? d??veloppeurs de projets, fabricants de turbines,
                                    op??rateurs ??lectriques et fonds d???investissement ??? sur des op??rations de
                                    d??veloppement, d???acquisition ou de cession de projets ??nerg??tiques.
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
                            DLGA se d??veloppe en France sous forme de <span class=\"fst-italic\">bureaux int??gr??s</span>.
                            Ce d??veloppement d???un <span class=\"fst-italic\">r??seau national</span> proc??de d???une
                            r??flexion aboutie. Nous sommes convaincus que les implantations en r??gion ont
                            un <span class=\"fst-italic\">v??ritable sens</span>.
                        </p>
                        <div class=\"accordion accordion-no-arrow\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        Pour nos clients qui se d??veloppent aussi en r??gion
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        Pour proposer aux entreprises en r??gion la force d???un r??seau national
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingThree\">
                                    <div class=\"accordion-button collapsed\">
                                        Pour renforcer nos comp??tences existantes ou pour d??velopper de nouveaux
                                        domaines d???activit??
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
                            Chacun des bureaux est anim?? par des avocats exer??ant en conseil et contentieux des
                            affaires. Il s???agit d???avocats issus de la r??gion o?? ils exercent, et qui en connaissent bien
                            le tissu ??conomique et social.
                        </p>
                        <p class=\"text-book-18 text-grey-text\">
                            Ces confr??res sont autonomes sur leur coeur de m??tier mais peuvent, le cas ??ch??ant,
                            intervenir avec les autres ??quipes des bureaux ?? Paris ou en r??gion.
                        </p>
                        <a href=\"\" class=\"btn btn-primary\">D??couvrir l?????quipe</a>
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
{% block title %}DLGA - Pr??sentation{% endblock %}
{% block body %}
    <div class=\"cabinet-presentation-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Accueil</a></li>
                    <li class=\"breadcrumb-item\" aria-current=\"page\"><span>Le cabinet</span></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Pr??sentation</span></li>
                </ol>
            </nav>
            <div class=\"header header-with-image\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Pr??sentation</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">
                        DLGA offre ?? ses clients Fran??ais et ??trangers une <span
                                class=\"fst-italic\">prestation globale</span>
                        , gr??ce ?? la compl??mentarit?? de <a href=\"\">ses ??quipes</a> et ?? son r??seau de
                        <a href=\"\">correspondants</a> ?? l?????tranger, express??ment choisis pour leurs
                        <a href=\"\">comp??tences</a>, et la qualit?? de leur <span class=\"fst-italic\">collaboration</span>.
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
                            Le cabinet dispose d???une capacit?? ??prouv??e ?? mobiliser et coordonner des ??quipes
                            sp??cialis??es de haut niveau dans diff??rents pays. Il est ainsi reconnu pour son
                            exp??rience et son savoir-faire en mati??re de transactions internationales.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"section-two\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12 col-lg-8\">
                        <p class=\"text-book-24 text-grey-darker\">DLGA se caract??rise par???</p>
                    </div>
                </div>
            </div>
            <div class=\"section-text-images\">
                <div class=\"text-image text-left\">
                    <p class=\"text-section\">Une forte implication des associ??s</p>
                    <img src=\"{{ asset('images/image-default.png') }} \">
                </div>
                <div class=\"text-image text-right\">
                    <img src=\"{{ asset('images/image-default.png') }} \">
                    <p class=\"text-section\">Un conseil personnalis??</p>
                </div>
                <div class=\"text-image text-left\">
                    <p class=\"text-section\">Une exigence de qualit??</p>
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
                            Fond?? par des <span class=\"fst-italic\">professionnels</span>, issus de firmes notamment
                            anglo-saxonnes de premier plan, DLGA cultive un esprit r??solument
                            <span class=\"fst-italic\">boutique</span> afin de pr??server
                            <span class=\"fst-italic\">flexibilit??</span>, <span class=\"fst-italic\">cr??ativit??</span> et
                            <span class=\"fst-italic\">pragmatisme</span>. N???intervenant que sur les mati??res de son c??ur
                            de m??tier, DLGA reste fid??le ?? <span class=\"fst-italic\">5 principes fondateurs</span>
                            qui forgent son <span class=\"fst-italic\">identit??</span>.
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
                                    Un fort esprit entrepreneurial de l?????quipe
                                </p>
                                <p class=\"text-medium-20\">DLGA est une firme totalement ind??pendante.</p>
                                <p class=\"text-book-18\">
                                    Notre infrastructure technique performante et la souplesse d???organisation du cabinet
                                    sont mises au service d???un travail r??alis?? en ??quipe, favorisant la r??activit?? et la
                                    mobilisation des ressources n??cessaires au traitement des dossiers.
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
                                <p class=\"text-medium-20 text-grey-text\">Une d??marche ultra qualitative</p>
                                <p class=\"text-book-18\">
                                    Notre infrastructure technique performante et la souplesse d???organisation du cabinet
                                    sont mises au service d???un travail r??alis?? en ??quipe, favorisant la r??activit?? et la
                                    mobilisation des ressources n??cessaires au traitement des dossiers.
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
                                    La connaissance du secteur d???expertise de ses clients
                                </p>
                                <p class=\"text-book-18\">
                                    Ainsi fort de son exp??rience de plus de dix dans le domaine de CleanTech, tel que
                                    celui des ??nergies renouvelables (??olien, photovolta??que et biomasse), DLGA
                                    accompagne les clients du cabinet ??? d??veloppeurs de projets, fabricants de turbines,
                                    op??rateurs ??lectriques et fonds d???investissement ??? sur des op??rations de
                                    d??veloppement, d???acquisition ou de cession de projets ??nerg??tiques.
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
                                    Aucune solution n???est interchangeable et aucune situation ne se r??gle avec une
                                    documentation standard appliqu??e uniform??ment. Le ?? sur-mesure juridique ?? se vit en
                                    proposant une solution cr??ative, innovante et ??labor??e dans le respect des
                                    particularit??s de chacun.
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
                                    La recherche de cr??ation de valeur
                                </p>
                                <p class=\"text-book-18\">
                                    L?????quipe de DLGA n??gocie et conseille en respectant des imp??ratifs d???excellence, de
                                    pers??v??rance et de rigueur absolues.
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
                                    D??veloppement durable
                                </p>
                                <p class=\"text-book-18\">
                                    Ainsi fort de son exp??rience de plus de dix dans le domaine de CleanTech, tel que
                                    celui des ??nergies renouvelables (??olien, photovolta??que et biomasse), DLGA
                                    accompagne les clients du cabinet ??? d??veloppeurs de projets, fabricants de turbines,
                                    op??rateurs ??lectriques et fonds d???investissement ??? sur des op??rations de
                                    d??veloppement, d???acquisition ou de cession de projets ??nerg??tiques.
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
                            DLGA se d??veloppe en France sous forme de <span class=\"fst-italic\">bureaux int??gr??s</span>.
                            Ce d??veloppement d???un <span class=\"fst-italic\">r??seau national</span> proc??de d???une
                            r??flexion aboutie. Nous sommes convaincus que les implantations en r??gion ont
                            un <span class=\"fst-italic\">v??ritable sens</span>.
                        </p>
                        <div class=\"accordion accordion-no-arrow\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        Pour nos clients qui se d??veloppent aussi en r??gion
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\">
                                    <div class=\"accordion-button collapsed\">
                                        Pour proposer aux entreprises en r??gion la force d???un r??seau national
                                    </div>
                                </h2>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingThree\">
                                    <div class=\"accordion-button collapsed\">
                                        Pour renforcer nos comp??tences existantes ou pour d??velopper de nouveaux
                                        domaines d???activit??
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
                            Chacun des bureaux est anim?? par des avocats exer??ant en conseil et contentieux des
                            affaires. Il s???agit d???avocats issus de la r??gion o?? ils exercent, et qui en connaissent bien
                            le tissu ??conomique et social.
                        </p>
                        <p class=\"text-book-18 text-grey-text\">
                            Ces confr??res sont autonomes sur leur coeur de m??tier mais peuvent, le cas ??ch??ant,
                            intervenir avec les autres ??quipes des bureaux ?? Paris ou en r??gion.
                        </p>
                        <a href=\"\" class=\"btn btn-primary\">D??couvrir l?????quipe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "cabinet/presentation.html.twig", "/Applications/MAMP/htdocs/ECV/DLGA/templates/cabinet/presentation.html.twig");
    }
}
