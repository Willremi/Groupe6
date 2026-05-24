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

/* vehicule/show.html.twig */
class __TwigTemplate_a38fba857831b1c523239929a962dfd4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/show.html.twig"));

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

        yield "Vehicule";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <h1>Vehicule</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>NomVehicule</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 16, $this->source); })()), "nomVehicule", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>NumImmat</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 20, $this->source); })()), "numImmat", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>PrixHt</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 24, $this->source); })()), "prixHt", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>NbPorte</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 28, $this->source); })()), "nbPorte", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"row\">
    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_index");
        yield "\">
        <button class=\"btn btn-outline-dark\">Retour</button>
    </a>

    <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\">
        <button class=\"btn btn-outline-dark\">Edition</button>
    </a>

    ";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/vehicule/_delete_form.html.twig");
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vehicule/show.html.twig";
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
        return array (  159 => 42,  152 => 38,  145 => 34,  136 => 28,  129 => 24,  122 => 20,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Vehicule{% endblock %}

{% block body %}
    <h1>Vehicule</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ vehicule.id }}</td>
            </tr>
            <tr>
                <th>NomVehicule</th>
                <td>{{ vehicule.nomVehicule }}</td>
            </tr>
            <tr>
                <th>NumImmat</th>
                <td>{{ vehicule.numImmat }}</td>
            </tr>
            <tr>
                <th>PrixHt</th>
                <td>{{ vehicule.prixHt }}</td>
            </tr>
            <tr>
                <th>NbPorte</th>
                <td>{{ vehicule.nbPorte }}</td>
            </tr>
        </tbody>
    </table>

    <div class=\"row\">
    <a href=\"{{ path(\x27vehicule_index\x27) }}\">
        <button class=\"btn btn-outline-dark\">Retour</button>
    </a>

    <a href=\"{{ path(\x27vehicule_edit\x27, {\x27id\x27: vehicule.id}) }}\">
        <button class=\"btn btn-outline-dark\">Edition</button>
    </a>

    {{ include(\x27admin/vehicule/_delete_form.html.twig\x27) }}
    </div>
{% endblock %}
", "vehicule/show.html.twig", "D:\\Github\\Groupe6\\symfony\\projetTest\\templates\\vehicule\\show.html.twig");
    }
}
