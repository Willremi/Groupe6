<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vehicule/index.html.twig */
class __TwigTemplate_54b79678269346a7289d7e6228511b9f extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield "Vehicule index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        yield "    <h1>Vehicule index</h1>
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
            yield "                    <th>actions</th>
                ";
        }
        // line 25
        yield "            </tr>
            </thead>
            <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 29
            yield "                <tr>
                    <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                    <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "nomVehicule", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                    <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "numImmat", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                    <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "prixHt", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                    <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "nbPorte", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>

                    ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 36)) {
                // line 37
                yield "                        <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 37), "nomMarque", [], "any", false, false, false, 37), "html", null, true);
                yield "</td>
                    ";
            } else {
                // line 39
                yield "                        <td></td>
                    ";
            }
            // line 41
            yield "
                    ";
            // line 42
            if (CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "options", [], "any", false, false, false, 42)) {
                // line 43
                yield "                        <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "options", [], "any", false, false, false, 43), "nomOption", [], "any", false, false, false, 43), "html", null, true);
                yield "</td>
                    ";
            } else {
                // line 45
                yield "                        <td></td>
                    ";
            }
            // line 47
            yield "
                    ";
            // line 48
            if (CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "typeVehicule", [], "any", false, false, false, 48)) {
                // line 49
                yield "                        <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "typeVehicule", [], "any", false, false, false, 49), "nomTypeVehicule", [], "any", false, false, false, 49), "html", null, true);
                yield "</td>
                    ";
            } else {
                // line 51
                yield "                        <td></td>
                    ";
            }
            // line 53
            yield "
                    ";
            // line 54
            if (CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "color", [], "any", false, false, false, 54)) {
                // line 55
                yield "                        <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "color", [], "any", false, false, false, 55), "nomColor", [], "any", false, false, false, 55), "html", null, true);
                yield "</td>
                    ";
            } else {
                // line 57
                yield "                        <td></td>
                    ";
            }
            // line 59
            yield "                        <td><img class=\"vehiculePhoto\" src='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["vehicule"]), "html", null, true);
            yield "' alt=\"image\"></td>
                    ";
            // line 60
            if (CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "energy", [], "any", false, false, false, 60)) {
                // line 61
                yield "                        <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "energy", [], "any", false, false, false, 61), "nomEnergy", [], "any", false, false, false, 61), "html", null, true);
                yield "</td>
                    ";
            } else {
                // line 63
                yield "                        <td></td>
                    ";
            }
            // line 65
            yield "
                    ";
            // line 66
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 67
                yield "                        <td>
                            <div class=\"row\">

                                <a href=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\">
                                    <button class=\"btn btn-outline-dark\">Voir</button>
                                </a>

                                <a href=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                yield "\">
                                    <button class=\"btn btn-outline-dark\">Edition</button>
                                </a>

                            </div>
                        </td>
                    ";
            }
            // line 81
            yield "                    
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            yield "                <tr>
                    <td colspan=\"6\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "            </tbody>
        </table>

        <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_new");
        yield "\">
            <button type=\"button\" class=\"btn btn-outline-dark\">Créer</button>
        </a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "vehicule/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  270 => 91,  265 => 88,  256 => 84,  249 => 81,  239 => 74,  232 => 70,  227 => 67,  225 => 66,  222 => 65,  218 => 63,  212 => 61,  210 => 60,  205 => 59,  201 => 57,  195 => 55,  193 => 54,  190 => 53,  186 => 51,  180 => 49,  178 => 48,  175 => 47,  171 => 45,  165 => 43,  163 => 42,  160 => 41,  156 => 39,  150 => 37,  148 => 36,  143 => 34,  139 => 33,  135 => 32,  131 => 31,  127 => 30,  124 => 29,  119 => 28,  114 => 25,  110 => 23,  108 => 22,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
