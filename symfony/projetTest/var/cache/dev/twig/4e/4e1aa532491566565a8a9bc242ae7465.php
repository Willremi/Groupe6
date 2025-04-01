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

/* @DoctrineMigrations/Collector/migrations.html.twig */
class __TwigTemplate_18ee521ef01baea2df6943a73855acb2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DoctrineMigrations/Collector/migrations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DoctrineMigrations/Collector/migrations.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@DoctrineMigrations/Collector/migrations.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 6), "unavailable_migrations_count", [], "any", true, true, false, 6)) {
            // line 7
            yield "        ";
            $context["unavailable_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "data", [], "any", false, false, false, 7), "unavailable_migrations_count", [], "any", false, false, false, 7);
            // line 8
            yield "        ";
            $context["new_migrations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "data", [], "any", false, false, false, 8), "new_migrations", [], "any", false, false, false, 8));
            // line 9
            yield "        ";
            if ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 9, $this->source); })()) > 0) || ((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 9, $this->source); })()) > 0))) {
                // line 10
                yield "            ";
                $context["executed_migrations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "data", [], "any", false, false, false, 10), "executed_migrations", [], "any", false, false, false, 10));
                // line 11
                yield "            ";
                $context["available_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "data", [], "any", false, false, false, 11), "available_migrations_count", [], "any", false, false, false, 11);
                // line 12
                yield "            ";
                $context["status_color"] = ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 12, $this->source); })()) > 0)) ? ("yellow") : (""));
                // line 13
                yield "            ";
                $context["status_color"] = ((((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 13, $this->source); })()) > 0)) ? ("red") : ((isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 13, $this->source); })())));
                // line 14
                yield "
            ";
                // line 15
                $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 16
                    yield "                ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                    yield "
                <span class=\"sf-toolbar-value\">";
                    // line 17
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 17, $this->source); })()) + (isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 17, $this->source); })())), "html", null, true);
                    yield "</span>
            ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 19
                yield "
            ";
                // line 20
                $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 21
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Current</b>
                    <span>";
                    // line 23
                    ((((isset($context["executed_migrations"]) || array_key_exists("executed_migrations", $context) ? $context["executed_migrations"] : (function () { throw new RuntimeError('Variable "executed_migrations" does not exist.', 23, $this->source); })()) > 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "data", [], "any", false, false, false, 23), "executed_migrations", [], "any", false, false, false, 23)), "version", [], "any", false, false, false, 23), "\\")), "html", null, true)) : (yield "n/a"));
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Executed</b>
                    <span class=\"sf-toolbar-status\">";
                    // line 27
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["executed_migrations"]) || array_key_exists("executed_migrations", $context) ? $context["executed_migrations"] : (function () { throw new RuntimeError('Variable "executed_migrations" does not exist.', 27, $this->source); })()), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Executed Unavailable</b>
                    <span class=\"sf-toolbar-status ";
                    // line 31
                    yield ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 31, $this->source); })()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 31, $this->source); })()), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Available</b>
                    <span class=\"sf-toolbar-status\">";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["available_migrations"]) || array_key_exists("available_migrations", $context) ? $context["available_migrations"] : (function () { throw new RuntimeError('Variable "available_migrations" does not exist.', 35, $this->source); })()), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>New</b>
                    <span class=\"sf-toolbar-status ";
                    // line 39
                    yield ((((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 39, $this->source); })()) > 0)) ? ("sf-toolbar-status-red") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 39, $this->source); })()), "html", null, true);
                    yield "</span>
                </div>
            ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 42
                yield "
            ";
                // line 43
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 43, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 43, $this->source); })())]);
                yield "
        ";
            }
            // line 45
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 49
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 50
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 50), "unavailable_migrations_count", [], "any", true, true, false, 50)) {
            // line 51
            yield "        ";
            $context["unavailable_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "data", [], "any", false, false, false, 51), "unavailable_migrations_count", [], "any", false, false, false, 51);
            // line 52
            yield "        ";
            $context["new_migrations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 52, $this->source); })()), "data", [], "any", false, false, false, 52), "new_migrations", [], "any", false, false, false, 52));
            // line 53
            yield "        ";
            $context["label"] = ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 53, $this->source); })()) > 0)) ? ("label-status-warning") : (""));
            // line 54
            yield "        ";
            $context["label"] = ((((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 54, $this->source); })()) > 0)) ? ("label-status-error") : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 54, $this->source); })())));
            // line 55
            yield "        <span class=\"label ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "\">
            <span class=\"icon\">";
            // line 56
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
            yield "</span>
            <strong>Migrations</strong>
            ";
            // line 58
            if ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 58, $this->source); })()) > 0) || ((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 58, $this->source); })()) > 0))) {
                // line 59
                yield "                <span class=\"count\">
                    <span>";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 60, $this->source); })()) + (isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 60, $this->source); })())), "html", null, true);
                yield "</span>
                </span>
            ";
            }
            // line 63
            yield "        </span>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 67
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 68
        yield "    <h2>Doctrine Migrations</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 71, $this->source); })()), "data", [], "any", false, false, false, 71), "executed_migrations", [], "any", false, false, false, 71)), "html", null, true);
        yield "</span>
            <span class=\"label\">Executed</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 75, $this->source); })()), "data", [], "any", false, false, false, 75), "unavailable_migrations_count", [], "any", false, false, false, 75), "html", null, true);
        yield "</span>
            <span class=\"label\">Executed Unavailable</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 79, $this->source); })()), "data", [], "any", false, false, false, 79), "available_migrations_count", [], "any", false, false, false, 79), "html", null, true);
        yield "</span>
            <span class=\"label\">Available</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "data", [], "any", false, false, false, 83), "new_migrations", [], "any", false, false, false, 83)), "html", null, true);
        yield "</span>
            <span class=\"label\">New</span>
        </div>
    </div>

    <h3>Configuration</h3>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Storage</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Type</td>
            <td class=\"font-normal\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 97, $this->source); })()), "data", [], "any", false, false, false, 97), "storage", [], "any", false, false, false, 97), "html", null, true);
        yield "</td>
        </tr>
        ";
        // line 99
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 99), "table", [], "any", true, true, false, 99)) {
            // line 100
            yield "            <tr>
                <td class=\"font-normal\">Table Name</td>
                <td class=\"font-normal\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 102, $this->source); })()), "data", [], "any", false, false, false, 102), "table", [], "any", false, false, false, 102), "html", null, true);
            yield "</td>
            </tr>
        ";
        }
        // line 105
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 105), "column", [], "any", true, true, false, 105)) {
            // line 106
            yield "            <tr>
                <td class=\"font-normal\">Column Name</td>
                <td class=\"font-normal\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 108, $this->source); })()), "data", [], "any", false, false, false, 108), "column", [], "any", false, false, false, 108), "html", null, true);
            yield "</td>
            </tr>
        ";
        }
        // line 111
        yield "    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Database</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Driver</td>
            <td class=\"font-normal\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 120, $this->source); })()), "data", [], "any", false, false, false, 120), "driver", [], "any", false, false, false, 120), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td class=\"font-normal\">Name</td>
            <td class=\"font-normal\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 124, $this->source); })()), "data", [], "any", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
        yield "</td>
        </tr>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Migration Namespaces</th>
            </tr>
        </thead>
        ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 133, $this->source); })()), "data", [], "any", false, false, false, 133), "namespaces", [], "any", false, false, false, 133));
        foreach ($context['_seq'] as $context["namespace"] => $context["directory"]) {
            // line 134
            yield "            <tr>
                <td class=\"font-normal\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["namespace"], "html", null, true);
            yield "</td>
                <td class=\"font-normal\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["directory"], "html", null, true);
            yield "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['namespace'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "    </table>

    <h3>Migrations</h3>
    <table>
        <thead>
            <tr>
                <th class=\"colored font-normal\">Version</th>
                <th class=\"colored font-normal\">Description</th>
                <th class=\"colored font-normal\">Status</th>
                <th class=\"colored font-normal\">Executed at</th>
                <th class=\"colored font-normal\">Execution time</th>
            </tr>
        </thead>
        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 152, $this->source); })()), "data", [], "any", false, false, false, 152), "new_migrations", [], "any", false, false, false, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
            // line 153
            yield "            ";
            yield CoreExtension::callMacro($macros["helper"], "macro_render_migration", [$context["migration"]], 153, $context, $this->getSourceContext());
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "
        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 156, $this->source); })()), "data", [], "any", false, false, false, 156), "executed_migrations", [], "any", false, false, false, 156)));
        foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
            // line 157
            yield "            ";
            yield CoreExtension::callMacro($macros["helper"], "macro_render_migration", [$context["migration"]], 157, $context, $this->getSourceContext());
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 162
    public function macro_render_migration($__migration__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "migration" => $__migration__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_migration"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_migration"));

            // line 163
            yield "    <tr>
        <td class=\"font-normal\">
            ";
            // line 165
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 165, $this->source); })()), "file", [], "any", false, false, false, 165)) {
                // line 166
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 166, $this->source); })()), "file", [], "any", false, false, false, 166), 1), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 166, $this->source); })()), "file", [], "any", false, false, false, 166), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 166, $this->source); })()), "version", [], "any", false, false, false, 166), "html", null, true);
                yield "</a>
            ";
            } else {
                // line 168
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 168, $this->source); })()), "version", [], "any", false, false, false, 168), "html", null, true);
                yield "
            ";
            }
            // line 170
            yield "        </td>
        <td class=\"font-normal\">";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 171, $this->source); })()), "description", [], "any", false, false, false, 171), "html", null, true);
            yield "</td>
        <td class=\"font-normal\">
            ";
            // line 173
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 173, $this->source); })()), "is_new", [], "any", false, false, false, 173)) {
                // line 174
                yield "                <span class=\"label status-error\">NOT EXECUTED</span>
            ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 175
(isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 175, $this->source); })()), "is_unavailable", [], "any", false, false, false, 175)) {
                // line 176
                yield "                <span class=\"label status-warning\">UNAVAILABLE</span>
            ";
            } else {
                // line 178
                yield "                <span class=\"label status-success\">EXECUTED</span>
            ";
            }
            // line 180
            yield "        </td>
        <td class=\"font-normal\">";
            // line 181
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 181, $this->source); })()), "executed_at", [], "any", false, false, false, 181)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 181, $this->source); })()), "executed_at", [], "any", false, false, false, 181)), "html", null, true)) : (yield "n/a"));
            yield "</td>
        <td class=\"font-normal\">";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", true, true, false, 182)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, false, 182), "n/a")) : ("n/a")), "html", null, true);
            yield "</td>
    </tr>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@DoctrineMigrations/Collector/migrations.html.twig";
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
        return array (  500 => 182,  496 => 181,  493 => 180,  489 => 178,  485 => 176,  483 => 175,  480 => 174,  478 => 173,  473 => 171,  470 => 170,  464 => 168,  454 => 166,  452 => 165,  448 => 163,  430 => 162,  418 => 159,  409 => 157,  405 => 156,  402 => 155,  393 => 153,  389 => 152,  374 => 139,  365 => 136,  361 => 135,  358 => 134,  354 => 133,  342 => 124,  335 => 120,  324 => 111,  318 => 108,  314 => 106,  311 => 105,  305 => 102,  301 => 100,  299 => 99,  294 => 97,  277 => 83,  270 => 79,  263 => 75,  256 => 71,  251 => 68,  241 => 67,  228 => 63,  222 => 60,  219 => 59,  217 => 58,  212 => 56,  207 => 55,  204 => 54,  201 => 53,  198 => 52,  195 => 51,  192 => 50,  182 => 49,  170 => 45,  165 => 43,  162 => 42,  153 => 39,  146 => 35,  137 => 31,  130 => 27,  123 => 23,  119 => 21,  117 => 20,  114 => 19,  108 => 17,  103 => 16,  101 => 15,  98 => 14,  95 => 13,  92 => 12,  89 => 11,  86 => 10,  83 => 9,  80 => 8,  77 => 7,  74 => 6,  64 => 5,  53 => 1,  51 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.data.unavailable_migrations_count is defined %}
        {% set unavailable_migrations = collector.data.unavailable_migrations_count %}
        {% set new_migrations = collector.data.new_migrations|length %}
        {% if unavailable_migrations > 0 or new_migrations > 0 %}
            {% set executed_migrations = collector.data.executed_migrations|length %}
            {% set available_migrations = collector.data.available_migrations_count %}
            {% set status_color = unavailable_migrations > 0 ? 'yellow' : '' %}
            {% set status_color = new_migrations > 0 ? 'red' : status_color %}

            {% set icon %}
                {{ include('@DoctrineMigrations/Collector/icon.svg') }}
                <span class=\"sf-toolbar-value\">{{ new_migrations + unavailable_migrations }}</span>
            {% endset %}

            {% set text %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Current</b>
                    <span>{{ executed_migrations > 0 ? collector.data.executed_migrations|last.version|split('\\\\')|last : 'n/a' }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Executed</b>
                    <span class=\"sf-toolbar-status\">{{ executed_migrations }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Executed Unavailable</b>
                    <span class=\"sf-toolbar-status {{ unavailable_migrations > 0 ? 'sf-toolbar-status-yellow' }}\">{{ unavailable_migrations }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Available</b>
                    <span class=\"sf-toolbar-status\">{{ available_migrations }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>New</b>
                    <span class=\"sf-toolbar-status {{ new_migrations > 0 ? 'sf-toolbar-status-red' }}\">{{ new_migrations }}</span>
                </div>
            {% endset %}

            {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
        {% endif %}
    {% endif %}
{% endblock %}


{% block menu %}
    {% if collector.data.unavailable_migrations_count is defined %}
        {% set unavailable_migrations = collector.data.unavailable_migrations_count %}
        {% set new_migrations = collector.data.new_migrations|length %}
        {% set label = unavailable_migrations > 0 ? 'label-status-warning' : '' %}
        {% set label = new_migrations > 0 ? 'label-status-error' : label %}
        <span class=\"label {{ label }}\">
            <span class=\"icon\">{{ include('@DoctrineMigrations/Collector/icon.svg') }}</span>
            <strong>Migrations</strong>
            {% if unavailable_migrations > 0 or new_migrations > 0 %}
                <span class=\"count\">
                    <span>{{ new_migrations + unavailable_migrations }}</span>
                </span>
            {% endif %}
        </span>
    {% endif %}
{% endblock %}

{% block panel %}
    <h2>Doctrine Migrations</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.data.executed_migrations|length }}</span>
            <span class=\"label\">Executed</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.data.unavailable_migrations_count }}</span>
            <span class=\"label\">Executed Unavailable</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.data.available_migrations_count }}</span>
            <span class=\"label\">Available</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.data.new_migrations|length }}</span>
            <span class=\"label\">New</span>
        </div>
    </div>

    <h3>Configuration</h3>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Storage</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Type</td>
            <td class=\"font-normal\">{{ collector.data.storage }}</td>
        </tr>
        {% if collector.data.table is defined %}
            <tr>
                <td class=\"font-normal\">Table Name</td>
                <td class=\"font-normal\">{{ collector.data.table }}</td>
            </tr>
        {% endif %}
        {% if collector.data.column is defined %}
            <tr>
                <td class=\"font-normal\">Column Name</td>
                <td class=\"font-normal\">{{ collector.data.column }}</td>
            </tr>
        {% endif %}
    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Database</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Driver</td>
            <td class=\"font-normal\">{{ collector.data.driver }}</td>
        </tr>
        <tr>
            <td class=\"font-normal\">Name</td>
            <td class=\"font-normal\">{{ collector.data.name }}</td>
        </tr>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Migration Namespaces</th>
            </tr>
        </thead>
        {% for namespace, directory in collector.data.namespaces %}
            <tr>
                <td class=\"font-normal\">{{ namespace }}</td>
                <td class=\"font-normal\">{{ directory }}</td>
            </tr>
        {% endfor %}
    </table>

    <h3>Migrations</h3>
    <table>
        <thead>
            <tr>
                <th class=\"colored font-normal\">Version</th>
                <th class=\"colored font-normal\">Description</th>
                <th class=\"colored font-normal\">Status</th>
                <th class=\"colored font-normal\">Executed at</th>
                <th class=\"colored font-normal\">Execution time</th>
            </tr>
        </thead>
        {% for migration in collector.data.new_migrations %}
            {{ helper.render_migration(migration) }}
        {% endfor %}

        {% for migration in collector.data.executed_migrations|reverse %}
            {{ helper.render_migration(migration) }}
        {% endfor %}
    </table>
{% endblock %}

{% macro render_migration(migration) %}
    <tr>
        <td class=\"font-normal\">
            {% if migration.file %}
                <a href=\"{{ migration.file|file_link(1) }}\" title=\"{{ migration.file }}\">{{ migration.version }}</a>
            {% else %}
                {{ migration.version }}
            {% endif %}
        </td>
        <td class=\"font-normal\">{{ migration.description }}</td>
        <td class=\"font-normal\">
            {% if migration.is_new %}
                <span class=\"label status-error\">NOT EXECUTED</span>
            {% elseif migration.is_unavailable %}
                <span class=\"label status-warning\">UNAVAILABLE</span>
            {% else %}
                <span class=\"label status-success\">EXECUTED</span>
            {% endif %}
        </td>
        <td class=\"font-normal\">{{ migration.executed_at ? migration.executed_at|date : 'n/a' }}</td>
        <td class=\"font-normal\">{{ migration.execution_time|default('n/a') }}</td>
    </tr>
{% endmacro %}
", "@DoctrineMigrations/Collector/migrations.html.twig", "D:\\Github\\Groupe6\\symfony\\projetTest\\vendor\\doctrine\\doctrine-migrations-bundle\\Resources\\views\\Collector\\migrations.html.twig");
    }
}
