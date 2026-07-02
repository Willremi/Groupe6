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
use Twig\TemplateWrapper;

/* lunettes/index.html.twig */
class __TwigTemplate_f8b0477a7fa60cea58fa216854222dd0 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

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

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lunettes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lunettes/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Lunettes index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        yield "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    
    <h1>Lunettes index</h1>
    
    <table class=\"table\" id=\"lunettesIndex\">
        <thead>
            <tr>
                ";
        // line 15
        yield "                <th>Nom</th>
                <th>Couleur</th>
                <th>Type</th>

                ";
        // line 19
        if ((($tmp =  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "                <th>Description</th>
                ";
        }
        // line 22
        yield "
                <th>Genre</th>
                <th>Photo</th>
                <th>PrixLunettes</th>
                <th>Quantité</th>

                ";
        // line 28
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "                    <th>Statut</th>
                    <th>actions</th>
                ";
        }
        // line 32
        yield "                <th>Panier</th>
            </tr>
        </thead>
        <tbody>
        
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lunettes"]) || array_key_exists("lunettes", $context) ? $context["lunettes"] : (function () { throw new RuntimeError('Variable "lunettes" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lunette"]) {
            // line 38
            yield "            <tr>
                ";
            // line 40
            yield "                <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lunette"], "nom", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>

                ";
            // line 42
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["lunette"], "couleur", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "                    <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lunette"], "couleur", [], "any", false, false, false, 43), "nom", [], "any", false, false, false, 43), "html", null, true);
                yield "</td>
                ";
            } else {
                // line 45
                yield "                    <td></td>
                ";
            }
            // line 47
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["lunette"], "type", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 48
                yield "                    <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lunette"], "type", [], "any", false, false, false, 48), "nom", [], "any", false, false, false, 48), "html", null, true);
                yield "</td>
                ";
            } else {
                // line 50
                yield "                    <td></td>
                ";
            }
            // line 52
            yield "                ";
            if ((($tmp =  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "                
                <td>";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lunette"], "description", [], "any", false, false, false, 54), "html", null, true);
                yield "</td>
                ";
            }
            // line 56
            yield "                <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lunette"], "genre", [], "any", false, false, false, 56), "nomGenre", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                

                <td><img class=\"lunettesPhoto\" src=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["lunette"]), "html", null, true);
            yield "\" alt=\"image\"></td>
                <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lunette"], "prixLunettes", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                <td>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lunette"], "quantite", [], "any", false, false, false, 61), "html", null, true);
            yield "</td>

                ";
            // line 63
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "                <td>";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["lunette"], "statut", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Yes") : ("No"));
                yield "</td>
                ";
            }
            // line 66
            yield "
            ";
            // line 67
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "                <td>
                    <div class=\"row\">
                    <a href=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lunettes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lunette"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\">
                       <button class=\"btn btn-outline-dark\">Voir</button> 
                    </a>
                    <a href=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lunettes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lunette"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                yield "\">
                        <button class=\"btn btn-outline-dark\">Edition</button>
                    </a>
                </div>
                </td>
            ";
            }
            // line 79
            yield "                <td><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lunette"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" class=\"btn btn-success\"><i class=\"fas fa-shopping-cart mr-1\"></i></a></td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 81
        if (!$context['_iterated']) {
            // line 82
            yield "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
    
        
    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lunette'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "        </tbody>
    </table>
    ";
        // line 91
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lunettes_new");
            yield "\">Create new</a>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "lunettes/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  298 => 92,  296 => 91,  292 => 89,  280 => 82,  278 => 81,  270 => 79,  261 => 73,  255 => 70,  251 => 68,  249 => 67,  246 => 66,  240 => 64,  238 => 63,  233 => 61,  229 => 60,  225 => 59,  218 => 56,  213 => 54,  210 => 53,  207 => 52,  203 => 50,  197 => 48,  194 => 47,  190 => 45,  184 => 43,  182 => 42,  176 => 40,  173 => 38,  168 => 37,  161 => 32,  156 => 29,  154 => 28,  146 => 22,  142 => 20,  140 => 19,  134 => 15,  126 => 8,  113 => 7,  101 => 5,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

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

                {% if not is_granted(\x27ROLE_ADMIN\x27) %}
                <th>Description</th>
                {% endif %}

                <th>Genre</th>
                <th>Photo</th>
                <th>PrixLunettes</th>
                <th>Quantité</th>

                {% if is_granted(\x27ROLE_ADMIN\x27) %}
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
                {% if not is_granted(\x27ROLE_ADMIN\x27) %}
                
                <td>{{ lunette.description }}</td>
                {% endif %}
                <td>{{ lunette.genre.nomGenre }}</td>
                

                <td><img class=\"lunettesPhoto\" src=\"{{ vich_uploader_asset(lunette) }}\" alt=\"image\"></td>
                <td>{{ lunette.prixLunettes }}</td>
                <td>{{ lunette.quantite }}</td>

                {% if is_granted(\x27ROLE_ADMIN\x27) %}
                <td>{{ lunette.statut ? \x27Yes\x27 : \x27No\x27 }}</td>
                {% endif %}

            {% if is_granted(\x27ROLE_ADMIN\x27) %}
                <td>
                    <div class=\"row\">
                    <a href=\"{{ path(\x27lunettes_show\x27, {\x27id\x27: lunette.id}) }}\">
                       <button class=\"btn btn-outline-dark\">Voir</button> 
                    </a>
                    <a href=\"{{ path(\x27lunettes_edit\x27, {\x27id\x27: lunette.id}) }}\">
                        <button class=\"btn btn-outline-dark\">Edition</button>
                    </a>
                </div>
                </td>
            {% endif %}
                <td><a href=\"{{ path(\x27cart_add\x27, {\x27id\x27:lunette.id}) }}\" class=\"btn btn-success\"><i class=\"fas fa-shopping-cart mr-1\"></i></a></td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
    
        
    
        {% endfor %}
        </tbody>
    </table>
    {% if is_granted(\x27ROLE_ADMIN\x27) %}
        <a href=\"{{ path(\x27lunettes_new\x27) }}\">Create new</a>
    {% endif %}
{% endblock %}
", "lunettes/index.html.twig", "D:\\Github\\Groupe6\\symfony\\projetLunettes\\templates\\lunettes\\index.html.twig");
    }
}
