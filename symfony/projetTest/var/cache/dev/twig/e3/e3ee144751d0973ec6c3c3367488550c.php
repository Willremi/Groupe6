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

/* vehicule/index.html.twig */
class __TwigTemplate_ae938df8cb5e65204c0cd0681dc71905 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vehicule/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Vehicule index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Vehicule index</h1>
    <div class=\"table-responsive-sm table-responsive-md\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Id</th>
                <th>NomVehicule</th>
                <th>NumImmat</th>
                <th>PrixHt</th>
                <th>NbPorte</th>
                <th>Marque</th>
                <th>Options</th>
                <th>Type véhicule</th>
                <th>Couleur</th>
                <th>Energie</th>
                <th>Photo</th>
                ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "                    <th>actions</th>
                ";
        }
        // line 25
        echo "            </tr>
            </thead>
            <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 29
            echo "                <tr>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "nomVehicule", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "numImmat", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prixHt", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "nbPorte", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>

                    ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 36)) {
                // line 37
                echo "                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 37), "nomMarque", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                    ";
            } else {
                // line 39
                echo "                        <td></td>
                    ";
            }
            // line 41
            echo "
                    ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["vehicule"], "options", [], "any", false, false, false, 42)) {
                // line 43
                echo "                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicule"], "options", [], "any", false, false, false, 43), "nomOption", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                    ";
            } else {
                // line 45
                echo "                        <td></td>
                    ";
            }
            // line 47
            echo "
                    ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["vehicule"], "typeVehicule", [], "any", false, false, false, 48)) {
                // line 49
                echo "                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicule"], "typeVehicule", [], "any", false, false, false, 49), "nomTypeVehicule", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                    ";
            } else {
                // line 51
                echo "                        <td></td>
                    ";
            }
            // line 53
            echo "
                    ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, $context["vehicule"], "color", [], "any", false, false, false, 54)) {
                // line 55
                echo "                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicule"], "color", [], "any", false, false, false, 55), "nomColor", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                    ";
            } else {
                // line 57
                echo "                        <td></td>
                    ";
            }
            // line 59
            echo "                        <td><img class=\"vehiculePhoto\" src='";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["vehicule"]), "html", null, true);
            echo "' alt=\"image\"></td>
                    ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["vehicule"], "energy", [], "any", false, false, false, 60)) {
                // line 61
                echo "                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicule"], "energy", [], "any", false, false, false, 61), "nomEnergy", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                    ";
            } else {
                // line 63
                echo "                        <td></td>
                    ";
            }
            // line 65
            echo "
                    ";
            // line 66
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 67
                echo "                        <td>
                            <div class=\"row\">

                                <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_show", ["id" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\">
                                    <button class=\"btn btn-outline-dark\">Voir</button>
                                </a>

                                <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\">
                                    <button class=\"btn btn-outline-dark\">Edition</button>
                                </a>

                            </div>
                        </td>
                    ";
            }
            // line 81
            echo "                    
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "                <tr>
                    <td colspan=\"6\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_new");
        echo "\">
            <button type=\"button\" class=\"btn btn-outline-dark\">Créer</button>
        </a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "vehicule/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 91,  263 => 88,  254 => 84,  247 => 81,  237 => 74,  230 => 70,  225 => 67,  223 => 66,  220 => 65,  216 => 63,  210 => 61,  208 => 60,  203 => 59,  199 => 57,  193 => 55,  191 => 54,  188 => 53,  184 => 51,  178 => 49,  176 => 48,  173 => 47,  169 => 45,  163 => 43,  161 => 42,  158 => 41,  154 => 39,  148 => 37,  146 => 36,  141 => 34,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  122 => 29,  117 => 28,  112 => 25,  108 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vehicule index{% endblock %}

{% block body %}
    <h1>Vehicule index</h1>
    <div class=\"table-responsive-sm table-responsive-md\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Id</th>
                <th>NomVehicule</th>
                <th>NumImmat</th>
                <th>PrixHt</th>
                <th>NbPorte</th>
                <th>Marque</th>
                <th>Options</th>
                <th>Type véhicule</th>
                <th>Couleur</th>
                <th>Energie</th>
                <th>Photo</th>
                {% if is_granted('ROLE_ADMIN') %}
                    <th>actions</th>
                {% endif %}
            </tr>
            </thead>
            <tbody>
            {% for vehicule in vehicules %}
                <tr>
                    <td>{{ vehicule.id }}</td>
                    <td>{{ vehicule.nomVehicule }}</td>
                    <td>{{ vehicule.numImmat }}</td>
                    <td>{{ vehicule.prixHt }}</td>
                    <td>{{ vehicule.nbPorte }}</td>

                    {% if vehicule.marque %}
                        <td>{{ vehicule.marque.nomMarque }}</td>
                    {% else %}
                        <td></td>
                    {% endif %}

                    {% if vehicule.options %}
                        <td>{{ vehicule.options.nomOption }}</td>
                    {% else %}
                        <td></td>
                    {% endif %}

                    {% if vehicule.typeVehicule %}
                        <td>{{ vehicule.typeVehicule.nomTypeVehicule }}</td>
                    {% else %}
                        <td></td>
                    {% endif %}

                    {% if vehicule.color %}
                        <td>{{ vehicule.color.nomColor }}</td>
                    {% else %}
                        <td></td>
                    {% endif %}
                        <td><img class=\"vehiculePhoto\" src='{{ vich_uploader_asset(vehicule) }}' alt=\"image\"></td>
                    {% if vehicule.energy %}
                        <td>{{ vehicule.energy.nomEnergy }}</td>
                    {% else %}
                        <td></td>
                    {% endif %}

                    {% if is_granted('ROLE_ADMIN') %}
                        <td>
                            <div class=\"row\">

                                <a href=\"{{ path('vehicule_show', {'id': vehicule.id}) }}\">
                                    <button class=\"btn btn-outline-dark\">Voir</button>
                                </a>

                                <a href=\"{{ path('vehicule_edit', {'id': vehicule.id}) }}\">
                                    <button class=\"btn btn-outline-dark\">Edition</button>
                                </a>

                            </div>
                        </td>
                    {% endif %}
                    
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('vehicule_new') }}\">
            <button type=\"button\" class=\"btn btn-outline-dark\">Créer</button>
        </a>
    </div>
{% endblock %}
", "vehicule/index.html.twig", "D:\\Github\\Groupe6\\symfony\\projetTest\\templates\\vehicule\\index.html.twig");
    }
}
