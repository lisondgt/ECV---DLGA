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

/* admin/users_formation.html.twig */
class __TwigTemplate_e8b588c32b6011c953ee6634ebb7a5f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users_formation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users_formation.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 1, $this->source); })()), "crud", [], "any", false, false, false, 1), "currentAction", [], "any", false, false, false, 1) == "detail")) {
            // line 2
            echo "    <table class=\"table table-striped\">
        <tr><th>Prénom/Nom</th><th>Téléphone</th><th>Email</th><th>Société</th><th>Fonction</th></tr>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()), "value", [], "any", false, false, false, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 5
                echo "            <tr>
                <td>";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "firstname", [], "any", false, false, false, 6), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "lastname", [], "any", false, false, false, 6), "html", null, true);
                echo "</td>
                <td>";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "phone", [], "any", false, false, false, 7), "html", null, true);
                echo "</td>
                <td>";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "email", [], "any", false, false, false, 8), "html", null, true);
                echo "</td>
                <td>";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "society", [], "any", false, false, false, 9), "html", null, true);
                echo "</td>
                <td>";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "office", [], "any", false, false, false, 10), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </table>
";
        } else {
        }
        // line 16
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_export_utilisateur", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "instance", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">Exporter les participants</a>
<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_mail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "instance", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\">Envoyer un mail à tous les participants</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/users_formation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 17,  88 => 16,  83 => 13,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  56 => 6,  53 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if ea.crud.currentAction == 'detail' %}
    <table class=\"table table-striped\">
        <tr><th>Prénom/Nom</th><th>Téléphone</th><th>Email</th><th>Société</th><th>Fonction</th></tr>
        {% for value in field.value %}
            <tr>
                <td>{{ value.firstname }} {{ value.lastname }}</td>
                <td>{{ value.phone }}</td>
                <td>{{ value.email }}</td>
                <td>{{ value.society }}</td>
                <td>{{ value.office }}</td>
            </tr>
        {% endfor %}
    </table>
{% else %}
{% endif %}
<a href=\"{{ path('formation_export_utilisateur', { 'id' : entity.instance.id}) }}\">Exporter les participants</a>
<a href=\"{{ path('send_mail', { 'id' : entity.instance.id}) }}\">Envoyer un mail à tous les participants</a>
", "admin/users_formation.html.twig", "/Applications/MAMP/htdocs/ECV/DLGA/templates/admin/users_formation.html.twig");
    }
}
