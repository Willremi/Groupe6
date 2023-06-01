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

/* lunettes/show.html.twig */
class __TwigTemplate_1b60ad0b534c9571347a0a0ec4665772 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lunettes/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lunettes/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lunettes/show.html.twig", 1);
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

        echo "Lunettes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Lunettes</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lunette"]) || array_key_exists("lunette", $context) ? $context["lunette"] : (function () { throw new RuntimeError('Variable "lunette" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lunette"]) || array_key_exists("lunette", $context) ? $context["lunette"] : (function () { throw new RuntimeError('Variable "lunette" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PrixLunettes</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lunette"]) || array_key_exists("lunette", $context) ? $context["lunette"] : (function () { throw new RuntimeError('Variable "lunette" does not exist.', 22, $this->source); })()), "prixLunettes", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lunette"]) || array_key_exists("lunette", $context) ? $context["lunette"] : (function () { throw new RuntimeError('Variable "lunette" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantité</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lunette"]) || array_key_exists("lunette", $context) ? $context["lunette"] : (function () { throw new RuntimeError('Variable "lunette" does not exist.', 30, $this->source); })()), "quantite", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td><img class=\"lunettesPhoto\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["lunette"]) || array_key_exists("lunette", $context) ? $context["lunette"] : (function () { throw new RuntimeError('Variable "lunette" does not exist.', 34, $this->source); })())), "html", null, true);
        echo "\" alt=\"image\"></td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>";
        // line 38
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["lunette"]) || array_key_exists("lunette", $context) ? $context["lunette"] : (function () { throw new RuntimeError('Variable "lunette" does not exist.', 38, $this->source); })()), "statut", [], "any", false, false, false, 38)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>
    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lunettes_index");
        echo "\">
    <button class=\"btn btn-outline-success\">
        Retour à la liste
    </button>
    </a>
    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lunettes_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lunette"]) || array_key_exists("lunette", $context) ? $context["lunette"] : (function () { throw new RuntimeError('Variable "lunette" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">
    <button class=\"btn btn-outline-warning\">
        Editer
    </button>
    </a>

    ";
        // line 53
        echo twig_include($this->env, $context, "admin/lunettes/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lunettes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 53,  175 => 47,  167 => 42,  160 => 38,  153 => 34,  146 => 30,  139 => 26,  132 => 22,  125 => 18,  118 => 14,  110 => 8,  100 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lunettes{% endblock %}
{% block stylesheets %}
    
{% endblock %}
{% block body %}
    <h1>Lunettes</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ lunette.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ lunette.nom }}</td>
            </tr>
            <tr>
                <th>PrixLunettes</th>
                <td>{{ lunette.prixLunettes }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ lunette.description }}</td>
            </tr>
            <tr>
                <th>Quantité</th>
                <td>{{ lunette.quantite }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td><img class=\"lunettesPhoto\" src=\"{{ vich_uploader_asset(lunette) }}\" alt=\"image\"></td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>{{ lunette.statut ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>
    <a href=\"{{ path('lunettes_index') }}\">
    <button class=\"btn btn-outline-success\">
        Retour à la liste
    </button>
    </a>
    <a href=\"{{ path('lunettes_edit', {'id': lunette.id}) }}\">
    <button class=\"btn btn-outline-warning\">
        Editer
    </button>
    </a>

    {{ include('admin/lunettes/_delete_form.html.twig') }}
{% endblock %}
", "lunettes/show.html.twig", "D:\\Github\\Groupe6\\symfony\\projetLunettes\\templates\\lunettes\\show.html.twig");
    }
}
