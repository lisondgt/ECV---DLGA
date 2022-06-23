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

/* formation/show.html.twig */
class __TwigTemplate_d4661be023f74063680d664afe8ec5ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/show.html.twig", 1);
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

        echo "DLGA - Formations";
        
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
        echo "    <div class=\"formations-list-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"/\">Page d'accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Nos formations</span></li>
                </ol>
            </nav>
            <div class=\"header\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Nos formations</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">Nos avocats et associés proposent des formations selon
                        leurs spécialisations :</h1>
                </div>
                <div class=\"content-scrolldown\">
                    <a href=\"#anchor-scrolldown\" class=\"scrolldown\">
                        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/arrow-down-grey-dark.svg"), "html", null, true);
        echo "\" class=\"icon-arrow-down\">
                    </a>
                </div>
            </div>
        </div>

        <div id=\"anchor-scrolldown\"></div>

        <div class=\"formations-container\">
            <div class=\"container\">
                <div class=\"filters\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">À venir</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Formations précédentes</a>
                        </li>
                    </ul>
                    <a href=\"\" class=\"filter-formation text-book-28 text-grey-text text-decoration-none\"
                       data-bs-toggle=\"modal\"
                       data-bs-target=\"#filterFormationModal\">Filtrer les formations</a>
                </div>
            </div>
            <div class=\"list-container\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 46
            echo "                    <a href=\"#formationModal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\" class=\"list-element-link\" data-bs-toggle=\"modal\"
                       data-bs-target=\"#formationModal";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\">
                        <div class=\"container\">
                            <div class=\"list-content\">
                                ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, $context["formation"], "image", [], "any", false, false, false, 50)) {
                // line 51
                echo "                                    <img src=\"/images/upload/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "image", [], "any", false, false, false, 51), "html", null, true);
                echo "\" class=\"show-hover\">
                                ";
            }
            // line 53
            echo "                                <h2 class=\"list-tile title-medium-48 mb-0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "titre", [], "any", false, false, false, 53), "html", null, true);
            echo "</h2>
                                <span class=\"show-hover decouvrir-link\">Découvrir</span>
                            </div>
                        </div>
                    </a>
                    <div class=\"modal fade modal-formations\" id=\"formationModal";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\" tabindex=\"-1\"
                         aria-labelledby=\"formationModal";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "Label\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title title-medium-40 text-grey-text\"
                                        id=\"formationModal";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "Label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "titre", [], "any", false, false, false, 64), "html", null, true);
            echo "</h5>
                                    <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                        Fermer
                                    </a>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"modal-top\">
                                        <div class=\"content-left\">
                                            <div class=\"infos-formation\">
                                                <div class=\"thematiques-content\">
                                                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["formation"], "thematiques", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["thematique"]) {
                // line 75
                echo "                                                        <div class=\"thematique-item\">
                                                            <p>";
                // line 76
                echo twig_escape_filter($this->env, $context["thematique"], "html", null, true);
                echo "</p>
                                                        </div>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thematique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                                                </div>
                                                <div class=\"presentiel\">
                                                    ";
            // line 81
            if ((twig_get_attribute($this->env, $this->source, $context["formation"], "presentiel", [], "any", false, false, false, 81) == 1)) {
                // line 82
                echo "                                                        <p>Présentiel</p>
                                                    ";
            } else {
                // line 84
                echo "                                                        <p>Distanciel</p>
                                                    ";
            }
            // line 86
            echo "                                                </div>
                                            </div>
                                            <div class=\"description\">
                                                <p>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "description", [], "any", false, false, false, 89), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                        <div class=\"content-right\">
                                            <div class=\"avocats-content\">
                                                ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["formation"], "avocats", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["avocat"]) {
                // line 95
                echo "                                                    <div class=\"avocat-item\">
                                                        ";
                // line 96
                if (twig_get_attribute($this->env, $this->source, $context["avocat"], "image", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "                                                            <div class=\"content-left\">
                                                                <img src=\"/images/upload/";
                    // line 98
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avocat"], "image", [], "any", false, false, false, 98), "html", null, true);
                    echo "\"
                                                                     class=\"show-hover\">
                                                            </div>
                                                        ";
                }
                // line 102
                echo "                                                        <div class=\"content-right\">
                                                            <p class=\"title-avocat\">Avocat associé</p>
                                                            <p class=\"name-avocat\">";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avocat"], "prenom", [], "any", false, false, false, 104), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avocat"], "nom", [], "any", false, false, false, 104), "html", null, true);
                echo "</p>
                                                        </div>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avocat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-tabs\">
                                        <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                                            <li class=\"nav-item\" role=\"presentation\">
                                                <button class=\"nav-link active\" id=\"pills-programme-tab\"
                                                        data-bs-toggle=\"pill\" data-bs-target=\"#pills-programme\"
                                                        type=\"button\" role=\"tab\" aria-controls=\"pills-programme\"
                                                        aria-selected=\"true\">Programme
                                                </button>
                                            </li>
                                            <li class=\"nav-item\" role=\"presentation\">
                                                <button class=\"nav-link\" id=\"pills-objectfis-tab\" data-bs-toggle=\"pill\"
                                                        data-bs-target=\"#pills-objectifs\" type=\"button\" role=\"tab\"
                                                        aria-controls=\"pills-objectifs\" aria-selected=\"false\">Objectifs
                                                </button>
                                            </li>
                                            <li class=\"nav-item\" role=\"presentation\">
                                                <button class=\"nav-link\" id=\"pills-modalites-tab\" data-bs-toggle=\"pill\"
                                                        data-bs-target=\"#pills-modalites\" type=\"button\" role=\"tab\"
                                                        aria-controls=\"pills-modalites\" aria-selected=\"false\">Modalités
                                                </button>
                                            </li>
                                            <li class=\"nav-item\" role=\"presentation\">
                                                <button class=\"nav-link\" id=\"pills-inscription-tab\"
                                                        data-bs-toggle=\"pill\"
                                                        data-bs-target=\"#pills-inscription\" type=\"button\" role=\"tab\"
                                                        aria-controls=\"pills-inscription\" aria-selected=\"false\">
                                                    Inscription
                                                </button>
                                            </li>
                                        </ul>
                                        <div class=\"tab-content\" id=\"pills-tabContent\">
                                            <div class=\"tab-pane fade show active\" id=\"pills-programme\" role=\"tabpanel\"
                                                 aria-labelledby=\"pills-programme-tab\" tabindex=\"0\">
                                                ";
            // line 144
            echo twig_get_attribute($this->env, $this->source, $context["formation"], "programme", [], "any", false, false, false, 144);
            echo "
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-objectifs\" role=\"tabpanel\"
                                                 aria-labelledby=\"pills-objectifs-tab\" tabindex=\"0\">
                                                ";
            // line 148
            $context["j"] = 0;
            // line 149
            echo "                                                ";
            $context["k"] = 1;
            // line 150
            echo "                                                <div class=\"accordion\" id=\"accordionObjectifs\">
                                                    ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["formation"], "objectifs", [], "any", false, false, false, 151));
            foreach ($context['_seq'] as $context["_key"] => $context["objectif"]) {
                // line 152
                echo "                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["objectif"]);
                foreach ($context['_seq'] as $context["_key"] => $context["objecti"]) {
                    // line 153
                    echo "                                                            <div class=\"accordion-item\">
                                                                ";
                    // line 154
                    if (((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 154, $this->source); })()) == 0)) {
                        // line 155
                        echo "                                                                    <h2 class=\"accordion-header\" id=\"heading";
                        echo twig_escape_filter($this->env, (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 155, $this->source); })()), "html", null, true);
                        echo "\">
                                                                        <a class=\"accordion-button collapsed\"
                                                                           type=\"button\"
                                                                           data-bs-toggle=\"collapse\"
                                                                           data-bs-target=\"#collapse";
                        // line 159
                        echo twig_escape_filter($this->env, (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 159, $this->source); })()), "html", null, true);
                        echo "\"
                                                                           aria-expanded=\"false\"
                                                                           aria-controls=\"collapse";
                        // line 161
                        echo twig_escape_filter($this->env, (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 161, $this->source); })()), "html", null, true);
                        echo "\">
                                                                            <span class=\"number\">0";
                        // line 162
                        echo twig_escape_filter($this->env, (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 162, $this->source); })()), "html", null, true);
                        echo "</span> ";
                        echo twig_escape_filter($this->env, $context["objecti"], "html", null, true);
                        echo "
                                                                        </a>
                                                                    </h2>
                                                                    ";
                        // line 165
                        $context["j"] = 1;
                        // line 166
                        echo "                                                                ";
                    } else {
                        // line 167
                        echo "                                                                    <div id=\"collapse";
                        echo twig_escape_filter($this->env, (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 167, $this->source); })()), "html", null, true);
                        echo "\"
                                                                         class=\"accordion-collapse collapse\"
                                                                         aria-labelledby=\"heading";
                        // line 169
                        echo twig_escape_filter($this->env, (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 169, $this->source); })()), "html", null, true);
                        echo "\"
                                                                         data-bs-parent=\"#accordionObjectifs\">
                                                                        <div class=\"accordion-body\">
                                                                            ";
                        // line 172
                        echo twig_escape_filter($this->env, $context["objecti"], "html", null, true);
                        echo "
                                                                        </div>
                                                                    </div>
                                                                ";
                    }
                    // line 176
                    echo "                                                            </div>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objecti'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "                                                        ";
                $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 178, $this->source); })()) + 1);
                // line 179
                echo "                                                        ";
                $context["j"] = 0;
                // line 180
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objectif'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-modalites\" role=\"tabpanel\"
                                                 aria-labelledby=\"pills-modalites-tab\" tabindex=\"0\">
                                                ";
            // line 185
            $context["i"] = 0;
            // line 186
            echo "                                                ";
            $context["l"] = 1;
            // line 187
            echo "                                                <div class=\"accordion\" id=\"accordionModalites\">
                                                    ";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["formation"], "modalites", [], "any", false, false, false, 188));
            foreach ($context['_seq'] as $context["_key"] => $context["modalite"]) {
                // line 189
                echo "                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["modalite"]);
                foreach ($context['_seq'] as $context["_key"] => $context["modalit"]) {
                    // line 190
                    echo "                                                            <div class=\"accordion-item\">
                                                                ";
                    // line 191
                    if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 191, $this->source); })()) == 0)) {
                        // line 192
                        echo "                                                                    <h2 class=\"accordion-header\" id=\"heading";
                        echo twig_escape_filter($this->env, (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 192, $this->source); })()), "html", null, true);
                        echo "\">
                                                                        <a class=\"accordion-button collapsed\"
                                                                           type=\"button\"
                                                                           data-bs-toggle=\"collapse\"
                                                                           data-bs-target=\"#collapse";
                        // line 196
                        echo twig_escape_filter($this->env, (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 196, $this->source); })()), "html", null, true);
                        echo "\"
                                                                           aria-expanded=\"false\"
                                                                           aria-controls=\"collapse";
                        // line 198
                        echo twig_escape_filter($this->env, (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 198, $this->source); })()), "html", null, true);
                        echo "\">
                                                                            <span class=\"number\">0";
                        // line 199
                        echo twig_escape_filter($this->env, (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 199, $this->source); })()), "html", null, true);
                        echo "</span> ";
                        echo twig_escape_filter($this->env, $context["modalit"], "html", null, true);
                        echo "
                                                                        </a>
                                                                    </h2>
                                                                    ";
                        // line 202
                        $context["i"] = 1;
                        // line 203
                        echo "                                                                ";
                    } else {
                        // line 204
                        echo "                                                                    <div id=\"collapse";
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 204, $this->source); })()), "html", null, true);
                        echo "\"
                                                                         class=\"accordion-collapse collapse\"
                                                                         aria-labelledby=\"heading";
                        // line 206
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 206, $this->source); })()), "html", null, true);
                        echo "\"
                                                                         data-bs-parent=\"#accordionModalites\">
                                                                        <div class=\"accordion-body\">
                                                                            ";
                        // line 209
                        echo twig_escape_filter($this->env, $context["modalit"], "html", null, true);
                        echo "
                                                                        </div>
                                                                    </div>
                                                                ";
                    }
                    // line 213
                    echo "                                                            </div>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modalit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                echo "                                                        ";
                $context["l"] = ((isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 215, $this->source); })()) + 1);
                // line 216
                echo "                                                        ";
                $context["i"] = 0;
                // line 217
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modalite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-inscription\" role=\"tabpanel\"
                                                 aria-labelledby=\"pills-inscription-tab\" tabindex=\"0\">
                                                <a href=\"";
            // line 222
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 222)]), "html", null, true);
            echo "\">S'inscrire
                                                    à la formation</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "            </div>
        </div>
        <div class=\"container\">
            <div class=\"chiffre-cle\">
                <span class=\"chiffre\">100%</span>
                <p class=\"chiffre-text\">En 2021, c’est le nombre de participant ayant déclaré être satisfaits de nos
                    formations</p>
            </div>
        </div>
        <div class=\"modal fade modal-filter\" id=\"filterFormationModal\" tabindex=\"-1\"
             aria-labelledby=\"filterFormationModalLabel\"
             aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title title-medium-40 text-grey-text\" id=\"filterFormationModalLabel\">Filtres
                            formations</h5>
                        <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Fermer
                        </a>
                    </div>
                    <div class=\"modal-body\">
                        ...
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
        return "formation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 232,  508 => 222,  502 => 218,  496 => 217,  493 => 216,  490 => 215,  483 => 213,  476 => 209,  470 => 206,  464 => 204,  461 => 203,  459 => 202,  451 => 199,  447 => 198,  442 => 196,  434 => 192,  432 => 191,  429 => 190,  424 => 189,  420 => 188,  417 => 187,  414 => 186,  412 => 185,  406 => 181,  400 => 180,  397 => 179,  394 => 178,  387 => 176,  380 => 172,  374 => 169,  368 => 167,  365 => 166,  363 => 165,  355 => 162,  351 => 161,  346 => 159,  338 => 155,  336 => 154,  333 => 153,  328 => 152,  324 => 151,  321 => 150,  318 => 149,  316 => 148,  309 => 144,  271 => 108,  259 => 104,  255 => 102,  248 => 98,  245 => 97,  243 => 96,  240 => 95,  236 => 94,  228 => 89,  223 => 86,  219 => 84,  215 => 82,  213 => 81,  209 => 79,  200 => 76,  197 => 75,  193 => 74,  178 => 64,  170 => 59,  166 => 58,  157 => 53,  151 => 51,  149 => 50,  143 => 47,  138 => 46,  134 => 45,  106 => 20,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}DLGA - Formations{% endblock %}
{% block body %}
    <div class=\"formations-list-page\">
        <div class=\"container\">
            <nav style=\"--bs-breadcrumb-divider: '|';\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"/\">Page d'accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><span>Nos formations</span></li>
                </ol>
            </nav>
            <div class=\"header\">
                <div class=\"content-title\">
                    <h3 class=\"text-book-24 text-grey-darker subtitle-header\">Nos formations</h3>
                    <h1 class=\"title-medium-64 text-grey-text\">Nos avocats et associés proposent des formations selon
                        leurs spécialisations :</h1>
                </div>
                <div class=\"content-scrolldown\">
                    <a href=\"#anchor-scrolldown\" class=\"scrolldown\">
                        <img src=\"{{ asset('images/arrow-down-grey-dark.svg') }}\" class=\"icon-arrow-down\">
                    </a>
                </div>
            </div>
        </div>

        <div id=\"anchor-scrolldown\"></div>

        <div class=\"formations-container\">
            <div class=\"container\">
                <div class=\"filters\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">À venir</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Formations précédentes</a>
                        </li>
                    </ul>
                    <a href=\"\" class=\"filter-formation text-book-28 text-grey-text text-decoration-none\"
                       data-bs-toggle=\"modal\"
                       data-bs-target=\"#filterFormationModal\">Filtrer les formations</a>
                </div>
            </div>
            <div class=\"list-container\">
                {% for formation in formations %}
                    <a href=\"#formationModal{{ formation.id }}\" class=\"list-element-link\" data-bs-toggle=\"modal\"
                       data-bs-target=\"#formationModal{{ formation.id }}\">
                        <div class=\"container\">
                            <div class=\"list-content\">
                                {% if formation.image %}
                                    <img src=\"/images/upload/{{ formation.image }}\" class=\"show-hover\">
                                {% endif %}
                                <h2 class=\"list-tile title-medium-48 mb-0\">{{ formation.titre }}</h2>
                                <span class=\"show-hover decouvrir-link\">Découvrir</span>
                            </div>
                        </div>
                    </a>
                    <div class=\"modal fade modal-formations\" id=\"formationModal{{ formation.id }}\" tabindex=\"-1\"
                         aria-labelledby=\"formationModal{{ formation.id }}Label\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title title-medium-40 text-grey-text\"
                                        id=\"formationModal{{ formation.id }}Label\">{{ formation.titre }}</h5>
                                    <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                        Fermer
                                    </a>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"modal-top\">
                                        <div class=\"content-left\">
                                            <div class=\"infos-formation\">
                                                <div class=\"thematiques-content\">
                                                    {% for thematique in formation.thematiques %}
                                                        <div class=\"thematique-item\">
                                                            <p>{{ thematique }}</p>
                                                        </div>
                                                    {% endfor %}
                                                </div>
                                                <div class=\"presentiel\">
                                                    {% if formation.presentiel == 1 %}
                                                        <p>Présentiel</p>
                                                    {% else %}
                                                        <p>Distanciel</p>
                                                    {% endif %}
                                                </div>
                                            </div>
                                            <div class=\"description\">
                                                <p>{{ formation.description }}</p>
                                            </div>
                                        </div>
                                        <div class=\"content-right\">
                                            <div class=\"avocats-content\">
                                                {% for avocat in formation.avocats %}
                                                    <div class=\"avocat-item\">
                                                        {% if avocat.image %}
                                                            <div class=\"content-left\">
                                                                <img src=\"/images/upload/{{ avocat.image }}\"
                                                                     class=\"show-hover\">
                                                            </div>
                                                        {% endif %}
                                                        <div class=\"content-right\">
                                                            <p class=\"title-avocat\">Avocat associé</p>
                                                            <p class=\"name-avocat\">{{ avocat.prenom }} {{ avocat.nom }}</p>
                                                        </div>
                                                    </div>
                                                {% endfor %}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-tabs\">
                                        <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                                            <li class=\"nav-item\" role=\"presentation\">
                                                <button class=\"nav-link active\" id=\"pills-programme-tab\"
                                                        data-bs-toggle=\"pill\" data-bs-target=\"#pills-programme\"
                                                        type=\"button\" role=\"tab\" aria-controls=\"pills-programme\"
                                                        aria-selected=\"true\">Programme
                                                </button>
                                            </li>
                                            <li class=\"nav-item\" role=\"presentation\">
                                                <button class=\"nav-link\" id=\"pills-objectfis-tab\" data-bs-toggle=\"pill\"
                                                        data-bs-target=\"#pills-objectifs\" type=\"button\" role=\"tab\"
                                                        aria-controls=\"pills-objectifs\" aria-selected=\"false\">Objectifs
                                                </button>
                                            </li>
                                            <li class=\"nav-item\" role=\"presentation\">
                                                <button class=\"nav-link\" id=\"pills-modalites-tab\" data-bs-toggle=\"pill\"
                                                        data-bs-target=\"#pills-modalites\" type=\"button\" role=\"tab\"
                                                        aria-controls=\"pills-modalites\" aria-selected=\"false\">Modalités
                                                </button>
                                            </li>
                                            <li class=\"nav-item\" role=\"presentation\">
                                                <button class=\"nav-link\" id=\"pills-inscription-tab\"
                                                        data-bs-toggle=\"pill\"
                                                        data-bs-target=\"#pills-inscription\" type=\"button\" role=\"tab\"
                                                        aria-controls=\"pills-inscription\" aria-selected=\"false\">
                                                    Inscription
                                                </button>
                                            </li>
                                        </ul>
                                        <div class=\"tab-content\" id=\"pills-tabContent\">
                                            <div class=\"tab-pane fade show active\" id=\"pills-programme\" role=\"tabpanel\"
                                                 aria-labelledby=\"pills-programme-tab\" tabindex=\"0\">
                                                {{ formation.programme | raw }}
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-objectifs\" role=\"tabpanel\"
                                                 aria-labelledby=\"pills-objectifs-tab\" tabindex=\"0\">
                                                {% set j = 0 %}
                                                {% set k = 1 %}
                                                <div class=\"accordion\" id=\"accordionObjectifs\">
                                                    {% for objectif in formation.objectifs %}
                                                        {% for objecti in objectif %}
                                                            <div class=\"accordion-item\">
                                                                {% if j == 0 %}
                                                                    <h2 class=\"accordion-header\" id=\"heading{{ k }}\">
                                                                        <a class=\"accordion-button collapsed\"
                                                                           type=\"button\"
                                                                           data-bs-toggle=\"collapse\"
                                                                           data-bs-target=\"#collapse{{ k }}\"
                                                                           aria-expanded=\"false\"
                                                                           aria-controls=\"collapse{{ k }}\">
                                                                            <span class=\"number\">0{{ k }}</span> {{ objecti }}
                                                                        </a>
                                                                    </h2>
                                                                    {% set j = 1 %}
                                                                {% else %}
                                                                    <div id=\"collapse{{ k }}\"
                                                                         class=\"accordion-collapse collapse\"
                                                                         aria-labelledby=\"heading{{ k }}\"
                                                                         data-bs-parent=\"#accordionObjectifs\">
                                                                        <div class=\"accordion-body\">
                                                                            {{ objecti }}
                                                                        </div>
                                                                    </div>
                                                                {% endif %}
                                                            </div>
                                                        {% endfor %}
                                                        {% set k = k+1 %}
                                                        {% set j = 0 %}
                                                    {% endfor %}
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-modalites\" role=\"tabpanel\"
                                                 aria-labelledby=\"pills-modalites-tab\" tabindex=\"0\">
                                                {% set i = 0 %}
                                                {% set l = 1 %}
                                                <div class=\"accordion\" id=\"accordionModalites\">
                                                    {% for modalite in formation.modalites %}
                                                        {% for modalit in modalite %}
                                                            <div class=\"accordion-item\">
                                                                {% if i == 0 %}
                                                                    <h2 class=\"accordion-header\" id=\"heading{{ l }}\">
                                                                        <a class=\"accordion-button collapsed\"
                                                                           type=\"button\"
                                                                           data-bs-toggle=\"collapse\"
                                                                           data-bs-target=\"#collapse{{ l }}\"
                                                                           aria-expanded=\"false\"
                                                                           aria-controls=\"collapse{{ l }}\">
                                                                            <span class=\"number\">0{{ l }}</span> {{ modalit }}
                                                                        </a>
                                                                    </h2>
                                                                    {% set i = 1 %}
                                                                {% else %}
                                                                    <div id=\"collapse{{ i }}\"
                                                                         class=\"accordion-collapse collapse\"
                                                                         aria-labelledby=\"heading{{ i }}\"
                                                                         data-bs-parent=\"#accordionModalites\">
                                                                        <div class=\"accordion-body\">
                                                                            {{ modalit }}
                                                                        </div>
                                                                    </div>
                                                                {% endif %}
                                                            </div>
                                                        {% endfor %}
                                                        {% set l = l+1 %}
                                                        {% set i = 0 %}
                                                    {% endfor %}
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-inscription\" role=\"tabpanel\"
                                                 aria-labelledby=\"pills-inscription-tab\" tabindex=\"0\">
                                                <a href=\"{{ path(\"inscription_formation\", { id : formation.id }) }}\">S'inscrire
                                                    à la formation</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
        <div class=\"container\">
            <div class=\"chiffre-cle\">
                <span class=\"chiffre\">100%</span>
                <p class=\"chiffre-text\">En 2021, c’est le nombre de participant ayant déclaré être satisfaits de nos
                    formations</p>
            </div>
        </div>
        <div class=\"modal fade modal-filter\" id=\"filterFormationModal\" tabindex=\"-1\"
             aria-labelledby=\"filterFormationModalLabel\"
             aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title title-medium-40 text-grey-text\" id=\"filterFormationModalLabel\">Filtres
                            formations</h5>
                        <a href=\"\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Fermer
                        </a>
                    </div>
                    <div class=\"modal-body\">
                        ...
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "formation/show.html.twig", "/Applications/MAMP/htdocs/ECV/DLGA/templates/formation/show.html.twig");
    }
}
