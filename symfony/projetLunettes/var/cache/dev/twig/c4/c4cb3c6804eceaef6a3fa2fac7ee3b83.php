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

/* lunettes/index.html.twig */
class __TwigTemplate_87ea8be16bf54884ba7751f9e12307db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lunettes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lunettes/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lunettes/index.html.twig", 1);
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

        echo "Lunettes index";
        
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
        echo "    
    <h1>Lunettes index</h1>
    
    <table class=\"table\" id=\"lunettesIndex\">
        <thead>
            <tr>
                ";
        // line 15
        echo "                <th>Nom</th>
                <th>Couleur</th>
                <th>Type</th>

                ";
        // line 19
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "                <th>Description</th>
                ";
        }
        // line 22
        echo "
                <th>Genre</th>
                <th>Photo</th>
                <th>PrixLunettes</th>
                <th>Quantité</th>

                ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 29
            echo "                    <th>Statut</th>
                    <th>actions</th>
                ";
        }
        // line 32
        echo "                <th>Panier</th>
            </tr>
        </thead>
        <tbody>
        
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lunettes"]) || array_key_exists("lunettes", $context) ? $context["lunettes"] : (function () { throw new RuntimeError('Variable "lunettes" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lunette"]) {
            // line 38
            echo "            <tr>
                ";
            // line 40
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lunette"], "nom", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>

                ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["lunette"], "couleur", [], "any", false, false, false, 42)) {
                // line 43
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lunette"], "couleur", [], "any", false, false, false, 43), "nom", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 45
                echo "                    <td></td>
                ";
            }
            // line 47
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["lunette"], "type", [], "any", false, false, false, 47)) {
                // line 48
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lunette"], "type", [], "any", false, false, false, 48), "nom", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 50
                echo "                    <td></td>
                ";
            }
            // line 52
            echo "                ";
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 53
                echo "                
                <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lunette"], "description", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                ";
            }
            // line 56
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lunette"], "genre", [], "any", false, false, false, 56), "nomGenre", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                

                <td><img class=\"lunettesPhoto\" src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["lunette"]), "html", null, true);
            echo "\" alt=\"image\"></td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lunette"], "prixLunettes", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lunette"], "quantite", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>

                ";
            // line 63
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 64
                echo "                <td>";
                echo ((twig_get_attribute($this->env, $this->source, $context["lunette"], "statut", [], "any", false, false, false, 64)) ? ("Yes") : ("No"));
                echo "</td>
                ";
            }
            // line 66
            echo "
            ";
            // line 67
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 68
                echo "                <td>
                    <div class=\"row\">
                    <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lunettes_show", ["id" => twig_get_attribute($this->env, $this->source, $context["lunette"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\">
                       <button class=\"btn btn-outline-dark\">Voir</button> 
                    </a>
                    <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lunettes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["lunette"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\">
                        <button class=\"btn btn-outline-dark\">Edition</button>
                    </a>
                </div>
                </td>
            ";
            }
            // line 79
            echo "                <td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["lunette"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" class=\"btn btn-success\"><i class=\"fas fa-shopping-cart mr-1\"></i></a></td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 82
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
    
        
    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lunette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        </tbody>
    </table>
    ";
        // line 91
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 92
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lunettes_new");
            echo "\">Create new</a>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lunettes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 92,  279 => 91,  275 => 89,  263 => 82,  254 => 79,  245 => 73,  239 => 70,  235 => 68,  233 => 67,  230 => 66,  224 => 64,  222 => 63,  217 => 61,  213 => 60,  209 => 59,  202 => 56,  197 => 54,  194 => 53,  191 => 52,  187 => 50,  181 => 48,  178 => 47,  174 => 45,  168 => 43,  166 => 42,  160 => 40,  157 => 38,  152 => 37,  145 => 32,  140 => 29,  138 => 28,  130 => 22,  126 => 20,  124 => 19,  118 => 15,  110 => 8,  100 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lunettes index{% endblock %}
{% block stylesheets %}
    
{% endblock %}
{% block body %}
    
    <h1>Lunettes index</h1>
    
    <table class=\"table\" id=\"lunettesIndex\">
        <thead>
            <tr>
                {# <th>Id</th> #}
                <th>Nom</th>
                <th>Couleur</th>
                <th>Type</th>

                {% if not is_granted('ROLE_ADMIN') %}
                <th>Description</th>
                {% endif %}

                <th>Genre</th>
                <th>Photo</th>
                <th>PrixLunettes</th>
                <th>Quantité</th>

                {% if is_granted('ROLE_ADMIN') %}
                    <th>Statut</th>
                    <th>actions</th>
                {% endif %}
                <th>Panier</th>
            </tr>
        </thead>
        <tbody>
        
        {% for lunette in lunettes %}
            <tr>
                {# <td>{{ lunette.id }}</td> #}
                <td>{{ lunette.nom }}</td>

                {% if lunette.couleur %}
                    <td>{{ lunette.couleur.nom }}</td>
                {% else %}
                    <td></td>
                {% endif %}
                {% if lunette.type %}
                    <td>{{ lunette.type.nom }}</td>
                {% else %}
                    <td></td>
                {% endif %}
                {% if not is_granted('ROLE_ADMIN') %}
                
                <td>{{ lunette.description }}</td>
                {% endif %}
                <td>{{ lunette.genre.nomGenre }}</td>
                

                <td><img class=\"lunettesPhoto\" src=\"{{ vich_uploader_asset(lunette) }}\" alt=\"image\"></td>
                <td>{{ lunette.prixLunettes }}</td>
                <td>{{ lunette.quantite }}</td>

                {% if is_granted('ROLE_ADMIN') %}
                <td>{{ lunette.statut ? 'Yes' : 'No' }}</td>
                {% endif %}

            {% if is_granted('ROLE_ADMIN') %}
                <td>
                    <div class=\"row\">
                    <a href=\"{{ path('lunettes_show', {'id': lunette.id}) }}\">
                       <button class=\"btn btn-outline-dark\">Voir</button> 
                    </a>
                    <a href=\"{{ path('lunettes_edit', {'id': lunette.id}) }}\">
                        <button class=\"btn btn-outline-dark\">Edition</button>
                    </a>
                </div>
                </td>
            {% endif %}
                <td><a href=\"{{ path('cart_add', {'id':lunette.id}) }}\" class=\"btn btn-success\"><i class=\"fas fa-shopping-cart mr-1\"></i></a></td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
    
        
    
        {% endfor %}
        </tbody>
    </table>
    {% if is_granted('ROLE_ADMIN') %}
        <a href=\"{{ path('lunettes_new') }}\">Create new</a>
    {% endif %}
{% endblock %}
", "lunettes/index.html.twig", "D:\\Github\\Groupe6\\symfony\\projetLunettes\\templates\\lunettes\\index.html.twig");
    }
}
