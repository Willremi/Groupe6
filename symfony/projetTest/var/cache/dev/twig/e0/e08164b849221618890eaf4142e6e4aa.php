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

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_47c8eb20bd9e6a7b38be366e3c1f68dd extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'queries' => [$this, 'block_queries'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->load((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1, $this->source); })()), "isXmlHttpRequest", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "querycount", [], "any", false, false, false, 6) > 0) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 6) > 0))) {
            // line 7
            yield "
        ";
            // line 8
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 9
                yield "            ";
                $context["status"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 9) > 0)) ? ("red") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "querycount", [], "any", false, false, false, 9) > 50)) ? ("yellow") : (""))));
                // line 10
                yield "
            ";
                // line 11
                if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 11, $this->source); })()) >= 3)) {
                    // line 12
                    yield "                ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@Doctrine/Collector/database.svg");
                    yield "
            ";
                } else {
                    // line 14
                    yield "                <span class=\"icon\">";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@Doctrine/Collector/icon.svg");
                    yield "</span>
            ";
                }
                // line 16
                yield "
            ";
                // line 17
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "querycount", [], "any", false, false, false, 17) == 0) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 17) > 0))) {
                    // line 18
                    yield "                <span class=\"sf-toolbar-value\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 18), "html", null, true);
                    yield "</span>
                <span class=\"sf-toolbar-label\">errors</span>
            ";
                } else {
                    // line 21
                    yield "                <span class=\"sf-toolbar-value\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "querycount", [], "any", false, false, false, 21), "html", null, true);
                    yield "</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "time", [], "any", false, false, false, 24) * 1000)), "html", null, true);
                    yield "</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            ";
                }
                // line 28
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            yield "
        ";
            // line 30
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 31
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
                // line 33
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "querycount", [], "any", false, false, false, 33) > 50)) ? ("sf-toolbar-status-yellow") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "querycount", [], "any", false, false, false, 33), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "groupedQueryCount", [], "any", false, false, false, 37), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 41, $this->source); })()), "time", [], "any", false, false, false, 41) * 1000)), "html", null, true);
                yield " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
                // line 45
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 45, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 45) > 0)) ? ("sf-toolbar-status-red") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 45, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 45), "html", null, true);
                yield "</span>
            </div>
            ";
                // line 47
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 48
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "cacheHitsCount", [], "any", false, false, false, 50), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                    // line 54
                    yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 54) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 54), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                    // line 58
                    yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 58, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 58) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 58, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 58), "html", null, true);
                    yield "</span>
                </div>
            ";
                } else {
                    // line 61
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
                }
                // line 66
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            yield "
        ";
            // line 68
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 68, $this->source); })()), "status" => ((array_key_exists("status", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 68, $this->source); })()), "")) : (""))]);
            yield "

    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 74
        yield "    <span class=\"label ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 74) > 0)) ? ("label-status-error") : (""));
        yield " ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "querycount", [], "any", false, false, false, 74) == 0)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 75
        yield Twig\Extension\CoreExtension::include($this->env, $context, (("@Doctrine/Collector/" . ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 75, $this->source); })()) < 3)) ? ("icon") : ("database"))) . ".svg"));
        yield "</span>
        <strong>Doctrine</strong>
        ";
        // line 77
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 77, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "            <span class=\"count\">
                <span>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 79, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 79), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 82
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 86
        yield "    ";
        if (("explain" == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 86, $this->source); })()))) {
            // line 87
            yield "        ";
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController::explainAction", ["token" =>             // line 88
(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 88, $this->source); })()), "panel" => "db", "connectionName" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 90
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 90, $this->source); })()), "query", [], "any", false, false, false, 90), "get", ["connection"], "method", false, false, false, 90), "query" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 91
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 91, $this->source); })()), "query", [], "any", false, false, false, 91), "get", ["query"], "method", false, false, false, 91)]));
            // line 92
            yield "
    ";
        } else {
            // line 94
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("queries", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_queries(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        // line 99
        yield "    <style>
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
    </style>

    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 112, $this->source); })()), "querycount", [], "any", false, false, false, 112), "html", null, true);
        yield "</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "groupedQueryCount", [], "any", false, false, false, 117), "html", null, true);
        yield "</span>
                <span class=\"label\">Different statements</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 122, $this->source); })()), "time", [], "any", false, false, false, 122) * 1000)), "html", null, true);
        yield " ms</span>
                <span class=\"label\">Query time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 127, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 127), "html", null, true);
        yield "</span>
                <span class=\"label\">Invalid entities</span>
            </div>
        </div>

        ";
        // line 132
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 132, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            yield "            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 135, $this->source); })()), "cacheHitsCount", [], "any", false, false, false, 135), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 139, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 139), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 143, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 143), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache puts</span>
                </div>
            </div>
        ";
        }
        // line 148
        yield "    </div>

    <div class=\"sf-tabs\" style=\"margin-top: 20px;\">
        <div class=\"tab ";
        // line 151
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 151, $this->source); })()), "queries", [], "any", false, false, false, 151))) ? ("disabled") : (""));
        yield "\">
            ";
        // line 152
        $context["group_queries"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 152, $this->source); })()), "query", [], "any", false, false, false, 152), "getBoolean", ["group"], "method", false, false, false, 152);
        // line 153
        yield "            <h3 class=\"tab-title\">
                ";
        // line 154
        if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 154, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 155
            yield "                    Grouped Statements
                ";
        } else {
            // line 157
            yield "                    Queries
                ";
        }
        // line 159
        yield "            </h3>

            <div class=\"tab-content\">
                ";
        // line 162
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 162, $this->source); })()), "queries", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 163
            yield "                    <div class=\"empty\">
                        <p>No executed queries.</p>
                    </div>
                ";
        } else {
            // line 167
            yield "                    ";
            if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 167, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 168
                yield "                        <p><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 168, $this->source); })())]), "html", null, true);
                yield "\">Show all queries</a></p>
                    ";
            } else {
                // line 170
                yield "                        <p><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 170, $this->source); })()), "group" => true]), "html", null, true);
                yield "\">Group similar statements</a></p>
                    ";
            }
            // line 172
            yield "
                    ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 173, $this->source); })()), "queries", [], "any", false, false, false, 173));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
                // line 174
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 174, $this->source); })()), "connections", [], "any", false, false, false, 174)) > 1)) {
                    // line 175
                    yield "                            <h3>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["connection"], "html", null, true);
                    yield " <small>connection</small></h3>
                        ";
                }
                // line 177
                yield "
                        ";
                // line 178
                if (Twig\Extension\CoreExtension::testEmpty($context["queries"])) {
                    // line 179
                    yield "                            <div class=\"empty\">
                                <p>No database queries were performed.</p>
                            </div>
                        ";
                } else {
                    // line 183
                    yield "                            ";
                    if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 183, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 184
                        yield "                                ";
                        $context["queries"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 184, $this->source); })()), "groupedQueries", [], "any", false, false, false, 184), $context["connection"], [], "array", false, false, false, 184);
                        // line 185
                        yield "                            ";
                    }
                    // line 186
                    yield "                            <table class=\"alt queries-table\">
                                <thead>
                                <tr>
                                    ";
                    // line 189
                    if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 189, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 190
                        yield "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 190), "html", null, true);
                        yield "')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                        // line 191
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 191), "html", null, true);
                        yield "')\" style=\"cursor: pointer;\">Count<span></span></th>
                                    ";
                    } else {
                        // line 193
                        yield "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 193), "html", null, true);
                        yield "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                        // line 194
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 194), "html", null, true);
                        yield "')\" style=\"cursor: pointer;\">Time<span></span></th>
                                    ";
                    }
                    // line 196
                    yield "                                    <th style=\"width: 100%;\">Info</th>
                                </tr>
                                </thead>
                                <tbody id=\"queries-";
                    // line 199
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 199), "html", null, true);
                    yield "\">
                                ";
                    // line 200
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["queries"]);
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                        // line 201
                        yield "                                    ";
                        $context["i"] = (((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 201, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "index", [], "any", false, false, false, 201)) : ($context["i"]));
                        // line 202
                        yield "                                    <tr id=\"queryNo-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 202), "loop", [], "any", false, false, false, 202), "index", [], "any", false, false, false, 202), "html", null, true);
                        yield "\">
                                        ";
                        // line 203
                        if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 203, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 204
                            yield "                                            <td class=\"time-container\">
                                                <span class=\"time-bar\" style=\"width:";
                            // line 205
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 205)), "html", null, true);
                            yield "%\"></span>
                                                <span class=\"nowrap\">";
                            // line 206
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 206) * 1000)), "html", null, true);
                            yield "&nbsp;ms<br />(";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 206)), "html", null, true);
                            yield "%)</span>
                                            </td>
                                            <td class=\"nowrap\">";
                            // line 208
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "count", [], "any", false, false, false, 208), "html", null, true);
                            yield "</td>
                                        ";
                        } else {
                            // line 210
                            yield "                                            <td class=\"nowrap\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 210), "html", null, true);
                            yield "</td>
                                            <td class=\"nowrap\">";
                            // line 211
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 211) * 1000)), "html", null, true);
                            yield "&nbsp;ms</td>
                                        ";
                        }
                        // line 213
                        yield "                                        <td>
                                            ";
                        // line 214
                        yield $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 214));
                        yield "

                                            <div>
                                                <strong class=\"font-normal text-small\">Parameters</strong>: ";
                        // line 217
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 217), 2);
                        yield "
                                            </div>

                                            <div class=\"text-small font-normal\">
                                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                        // line 221
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 221), "loop", [], "any", false, false, false, 221), "index", [], "any", false, false, false, 221), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                                ";
                        // line 223
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 223)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 224
                            yield "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                            // line 225
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 225), "loop", [], "any", false, false, false, 225), "index", [], "any", false, false, false, 225), "html", null, true);
                            yield "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                                ";
                        }
                        // line 227
                        yield "
                                                ";
                        // line 228
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 228)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 229
                            yield "                                                    &nbsp;&nbsp;
                                                    <a class=\"link-inverse\" href=\"";
                            // line 230
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 230, $this->source); })()), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"]]), "html", null, true);
                            yield "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 230), "loop", [], "any", false, false, false, 230), "index", [], "any", false, false, false, 230), "html", null, true);
                            yield "\">Explain query</a>
                                                ";
                        }
                        // line 232
                        yield "
                                                ";
                        // line 233
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 233)) {
                            // line 234
                            yield "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-";
                            // line 235
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 235), "loop", [], "any", false, false, false, 235), "index", [], "any", false, false, false, 235), "html", null, true);
                            yield "\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                                ";
                        }
                        // line 237
                        yield "                                            </div>

                                            <div id=\"formatted-query-";
                        // line 239
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 239), "loop", [], "any", false, false, false, 239), "index", [], "any", false, false, false, 239), "html", null, true);
                        yield "\" class=\"sql-runnable hidden\">
                                                ";
                        // line 240
                        yield $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 240), true);
                        yield "
                                                <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                        // line 241
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 241), false), "html_attr");
                        yield "\">Copy</button>
                                            </div>

                                            ";
                        // line 244
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 244)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 245
                            yield "                                                <div id=\"original-query-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 245), "loop", [], "any", false, false, false, 245), "index", [], "any", false, false, false, 245), "html", null, true);
                            yield "\" class=\"sql-runnable hidden\">
                                                    ";
                            // line 246
                            $context["runnable_sql"] = $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->replaceQueryParameters((CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 246) . ";"), CoreExtension::getAttribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 246));
                            // line 247
                            yield "                                                    ";
                            yield $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql((isset($context["runnable_sql"]) || array_key_exists("runnable_sql", $context) ? $context["runnable_sql"] : (function () { throw new RuntimeError('Variable "runnable_sql" does not exist.', 247, $this->source); })()));
                            yield "
                                                    <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                            // line 248
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["runnable_sql"]) || array_key_exists("runnable_sql", $context) ? $context["runnable_sql"] : (function () { throw new RuntimeError('Variable "runnable_sql" does not exist.', 248, $this->source); })()), "html_attr");
                            yield "\">Copy</button>
                                                </div>
                                            ";
                        }
                        // line 251
                        yield "
                                            ";
                        // line 252
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 252)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 253
                            yield "                                                <div id=\"explain-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 253), "loop", [], "any", false, false, false, 253), "index", [], "any", false, false, false, 253), "html", null, true);
                            yield "\" class=\"sql-explain\"></div>
                                            ";
                        }
                        // line 255
                        yield "
                                            ";
                        // line 256
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 256)) {
                            // line 257
                            yield "                                                <div id=\"backtrace-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 257), "loop", [], "any", false, false, false, 257), "index", [], "any", false, false, false, 257), "html", null, true);
                            yield "\" class=\"hidden\">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th scope=\"col\">#</th>
                                                            <th scope=\"col\">File/Call</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
                            // line 266
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 266));
                            $context['loop'] = [
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            ];
                            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                                $length = count($context['_seq']);
                                $context['loop']['revindex0'] = $length - 1;
                                $context['loop']['revindex'] = $length;
                                $context['loop']['length'] = $length;
                                $context['loop']['last'] = 1 === $length;
                            }
                            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                                // line 267
                                yield "                                                            <tr>
                                                                <td>";
                                // line 268
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 268), "html", null, true);
                                yield "</td>
                                                                <td>
                                                                            <span class=\"text-small\">
                                                                                ";
                                // line 271
                                $context["line_number"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "line", [], "any", true, true, false, 271)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "line", [], "any", false, false, false, 271), 1)) : (1));
                                // line 272
                                yield "                                                                                ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 272)) {
                                    // line 273
                                    yield "                                                                                    <a href=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 273), (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 273, $this->source); })())), "html", null, true);
                                    yield "\">
                                                                                ";
                                }
                                // line 275
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 275)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "class", [], "any", false, false, false, 275))) : ("")) . ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 275)) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "type", [], "any", true, true, false, 275)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 275), "::")) : ("::"))) : (""))), "html", null, true);
                                // line 276
                                yield "<span class=\"status-warning\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 276), "html", null, true);
                                yield "</span>
                                                                                ";
                                // line 277
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 277)) {
                                    // line 278
                                    yield "                                                                                    </a>
                                                                                ";
                                }
                                // line 280
                                yield "                                                                                (line ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 280, $this->source); })()), "html", null, true);
                                yield ")
                                                                            </span>
                                                                </td>
                                                            </tr>
                                                        ";
                                ++$context['loop']['index0'];
                                ++$context['loop']['index'];
                                $context['loop']['first'] = false;
                                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                                    --$context['loop']['revindex0'];
                                    --$context['loop']['revindex'];
                                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 285
                            yield "                                                        </tbody>
                                                    </table>
                                                </div>
                                            ";
                        }
                        // line 289
                        yield "                                        </td>
                                    </tr>
                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 292
                    yield "                                </tbody>
                            </table>
                        ";
                }
                // line 295
                yield "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            yield "                ";
        }
        // line 297
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 300
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 300, $this->source); })()), "connections", [], "any", false, false, false, 300))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Database Connections</h3>
            <div class=\"tab-content\">
                ";
        // line 303
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 303, $this->source); })()), "connections", [], "any", false, false, false, 303)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 304
            yield "                    <div class=\"empty\">
                        <p>There are no configured database connections.</p>
                    </div>
                ";
        } else {
            // line 308
            yield "                    ";
            yield $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 308, $this->getSourceContext())->macro_render_simple_table(...["Name", "Service", CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 308, $this->source); })()), "connections", [], "any", false, false, false, 308)]);
            yield "
                ";
        }
        // line 310
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 313
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 313, $this->source); })()), "managers", [], "any", false, false, false, 313))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Entity Managers</h3>
            <div class=\"tab-content\">

                ";
        // line 317
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 317, $this->source); })()), "managers", [], "any", false, false, false, 317)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 318
            yield "                    <div class=\"empty\">
                        <p>There are no configured entity managers.</p>
                    </div>
                ";
        } else {
            // line 322
            yield "                    ";
            yield $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 322, $this->getSourceContext())->macro_render_simple_table(...["Name", "Service", CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 322, $this->source); })()), "managers", [], "any", false, false, false, 322)]);
            yield "
                ";
        }
        // line 324
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 327
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 327, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 327)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Second Level Cache</h3>
            <div class=\"tab-content\">

                ";
        // line 331
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 331, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 331)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 332
            yield "                    <div class=\"empty\">
                        <p>Second Level Cache is not enabled.</p>
                    </div>
                ";
        } else {
            // line 336
            yield "                    ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 336, $this->source); })()), "cacheCounts", [], "any", false, false, false, 336)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 337
                yield "                        <div class=\"empty\">
                            <p>Second level cache information is not available.</p>
                        </div>
                    ";
            } else {
                // line 341
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 343
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 343, $this->source); })()), "cacheCounts", [], "any", false, false, false, 343), "hits", [], "any", false, false, false, 343), "html", null, true);
                yield "</span>
                                <span class=\"label\">Hits</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 348
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 348, $this->source); })()), "cacheCounts", [], "any", false, false, false, 348), "misses", [], "any", false, false, false, 348), "html", null, true);
                yield "</span>
                                <span class=\"label\">Misses</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 353, $this->source); })()), "cacheCounts", [], "any", false, false, false, 353), "puts", [], "any", false, false, false, 353), "html", null, true);
                yield "</span>
                                <span class=\"label\">Puts</span>
                            </div>
                        </div>

                        ";
                // line 358
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 358, $this->source); })()), "cacheRegions", [], "any", false, false, false, 358), "hits", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 359
                    yield "                            <h3>Number of cache hits</h3>
                            ";
                    // line 360
                    yield $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 360, $this->getSourceContext())->macro_render_simple_table(...["Region", "Hits", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 360, $this->source); })()), "cacheRegions", [], "any", false, false, false, 360), "hits", [], "any", false, false, false, 360)]);
                    yield "
                        ";
                }
                // line 362
                yield "
                        ";
                // line 363
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 363, $this->source); })()), "cacheRegions", [], "any", false, false, false, 363), "misses", [], "any", false, false, false, 363)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 364
                    yield "                            <h3>Number of cache misses</h3>
                            ";
                    // line 365
                    yield $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 365, $this->getSourceContext())->macro_render_simple_table(...["Region", "Misses", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 365, $this->source); })()), "cacheRegions", [], "any", false, false, false, 365), "misses", [], "any", false, false, false, 365)]);
                    yield "
                        ";
                }
                // line 367
                yield "
                        ";
                // line 368
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 368, $this->source); })()), "cacheRegions", [], "any", false, false, false, 368), "puts", [], "any", false, false, false, 368)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 369
                    yield "                            <h3>Number of cache puts</h3>
                            ";
                    // line 370
                    yield $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 370, $this->getSourceContext())->macro_render_simple_table(...["Region", "Puts", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 370, $this->source); })()), "cacheRegions", [], "any", false, false, false, 370), "puts", [], "any", false, false, false, 370)]);
                    yield "
                        ";
                }
                // line 372
                yield "                    ";
            }
            // line 373
            yield "                ";
        }
        // line 374
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 377
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 377, $this->source); })()), "entities", [], "any", false, false, false, 377)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Entities Mapping</h3>
            <div class=\"tab-content\">

                ";
        // line 381
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 381, $this->source); })()), "entities", [], "any", false, false, false, 381)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 382
            yield "                    <div class=\"empty\">
                        <p>No mapped entities.</p>
                    </div>
                ";
        } else {
            // line 386
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 386, $this->source); })()), "entities", [], "any", false, false, false, 386));
            foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
                // line 387
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 387, $this->source); })()), "managers", [], "any", false, false, false, 387)) > 1)) {
                    // line 388
                    yield "                            <h3>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["manager"], "html", null, true);
                    yield " <small>entity manager</small></h3>
                        ";
                }
                // line 390
                yield "
                        ";
                // line 391
                if (Twig\Extension\CoreExtension::testEmpty($context["classes"])) {
                    // line 392
                    yield "                            <div class=\"empty\">
                                <p>No loaded entities.</p>
                            </div>
                        ";
                } else {
                    // line 396
                    yield "                            <table>
                                <thead>
                                <tr>
                                    <th scope=\"col\">Class</th>
                                    <th scope=\"col\">Mapping errors</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 404
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["classes"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                        // line 405
                        yield "                                    ";
                        $context["contains_errors"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 405), $context["manager"], [], "array", true, true, false, 405) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 405), $context["manager"], [], "array", false, true, false, 405), CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 405), [], "array", true, true, false, 405));
                        // line 406
                        yield "                                    <tr class=\"";
                        yield (((($tmp = (isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new RuntimeError('Variable "contains_errors" does not exist.', 406, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("status-error") : (""));
                        yield "\">
                                        <td>
                                <a href=\"";
                        // line 408
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "file", [], "any", false, false, false, 408), CoreExtension::getAttribute($this->env, $this->source, $context["class"], "line", [], "any", false, false, false, 408)), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 408), "html", null, true);
                        yield "</a>
                            </td>
                                        <td class=\"font-normal\">
                                            ";
                        // line 411
                        if ((($tmp = (isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new RuntimeError('Variable "contains_errors" does not exist.', 411, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 412
                            yield "                                                <ul>
                                                    ";
                            // line 413
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 413, $this->source); })()), "mappingErrors", [], "any", false, false, false, 413), $context["manager"], [], "array", false, false, false, 413), CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 413), [], "array", false, false, false, 413));
                            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                                // line 414
                                yield "                                                        <li>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                                yield "</li>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 416
                            yield "                                                </ul>
                                            ";
                        } else {
                            // line 418
                            yield "                                                No errors.
                                            ";
                        }
                        // line 420
                        yield "                                        </td>
                                    </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['class'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 423
                    yield "                                </tbody>
                            </table>
                        ";
                }
                // line 426
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['manager'], $context['classes'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 427
            yield "                ";
        }
        // line 428
        yield "            </div>
        </div>
    </div>

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        if (navigator.clipboard) {
            document.querySelectorAll('[data-clipboard-text]').forEach(function(button) {
                Sfjs.removeClass(button, 'hidden');
                button.addEventListener('click', function() {
                    navigator.clipboard.writeText(button.getAttribute('data-clipboard-text'));
                })
            });
        }

        //]]></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 501
    public function macro_render_simple_table($label1 = null, $label2 = null, $data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label1" => $label1,
            "label2" => $label2,
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            // line 502
            yield "    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label1"]) || array_key_exists("label1", $context) ? $context["label1"] : (function () { throw new RuntimeError('Variable "label1" does not exist.', 505, $this->source); })()), "html", null, true);
            yield "</th>
            <th scope=\"col\">";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label2"]) || array_key_exists("label2", $context) ? $context["label2"] : (function () { throw new RuntimeError('Variable "label2" does not exist.', 506, $this->source); })()), "html", null, true);
            yield "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 510
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 510, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 511
                yield "            <tr>
                <th scope=\"row\">";
                // line 512
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "</th>
                <td>";
                // line 513
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 516
            yield "        </tbody>
    </table>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Doctrine/Collector/db.html.twig";
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
        return array (  1277 => 516,  1268 => 513,  1264 => 512,  1261 => 511,  1257 => 510,  1250 => 506,  1246 => 505,  1241 => 502,  1221 => 501,  1139 => 428,  1136 => 427,  1130 => 426,  1125 => 423,  1117 => 420,  1113 => 418,  1109 => 416,  1100 => 414,  1096 => 413,  1093 => 412,  1091 => 411,  1083 => 408,  1077 => 406,  1074 => 405,  1070 => 404,  1060 => 396,  1054 => 392,  1052 => 391,  1049 => 390,  1043 => 388,  1040 => 387,  1035 => 386,  1029 => 382,  1027 => 381,  1020 => 377,  1015 => 374,  1012 => 373,  1009 => 372,  1004 => 370,  1001 => 369,  999 => 368,  996 => 367,  991 => 365,  988 => 364,  986 => 363,  983 => 362,  978 => 360,  975 => 359,  973 => 358,  965 => 353,  957 => 348,  949 => 343,  945 => 341,  939 => 337,  936 => 336,  930 => 332,  928 => 331,  921 => 327,  916 => 324,  910 => 322,  904 => 318,  902 => 317,  895 => 313,  890 => 310,  884 => 308,  878 => 304,  876 => 303,  870 => 300,  865 => 297,  862 => 296,  848 => 295,  843 => 292,  827 => 289,  821 => 285,  801 => 280,  797 => 278,  795 => 277,  790 => 276,  788 => 275,  782 => 273,  779 => 272,  777 => 271,  771 => 268,  768 => 267,  751 => 266,  736 => 257,  734 => 256,  731 => 255,  723 => 253,  721 => 252,  718 => 251,  712 => 248,  707 => 247,  705 => 246,  698 => 245,  696 => 244,  690 => 241,  686 => 240,  680 => 239,  676 => 237,  669 => 235,  666 => 234,  664 => 233,  661 => 232,  652 => 230,  649 => 229,  647 => 228,  644 => 227,  637 => 225,  634 => 224,  632 => 223,  625 => 221,  618 => 217,  612 => 214,  609 => 213,  604 => 211,  599 => 210,  594 => 208,  587 => 206,  583 => 205,  580 => 204,  578 => 203,  571 => 202,  568 => 201,  551 => 200,  547 => 199,  542 => 196,  537 => 194,  532 => 193,  527 => 191,  522 => 190,  520 => 189,  515 => 186,  512 => 185,  509 => 184,  506 => 183,  500 => 179,  498 => 178,  495 => 177,  489 => 175,  486 => 174,  469 => 173,  466 => 172,  460 => 170,  454 => 168,  451 => 167,  445 => 163,  443 => 162,  438 => 159,  434 => 157,  430 => 155,  428 => 154,  425 => 153,  423 => 152,  419 => 151,  414 => 148,  406 => 143,  399 => 139,  392 => 135,  388 => 133,  386 => 132,  378 => 127,  370 => 122,  362 => 117,  354 => 112,  339 => 99,  326 => 98,  311 => 94,  307 => 92,  305 => 91,  304 => 90,  303 => 88,  301 => 87,  298 => 86,  285 => 85,  273 => 82,  267 => 79,  264 => 78,  262 => 77,  257 => 75,  250 => 74,  237 => 73,  222 => 68,  219 => 67,  215 => 66,  208 => 61,  200 => 58,  191 => 54,  184 => 50,  180 => 48,  178 => 47,  171 => 45,  164 => 41,  157 => 37,  148 => 33,  144 => 31,  142 => 30,  139 => 29,  135 => 28,  128 => 24,  121 => 21,  114 => 18,  112 => 17,  109 => 16,  103 => 14,  97 => 12,  95 => 11,  92 => 10,  89 => 9,  87 => 8,  84 => 7,  81 => 6,  68 => 5,  58 => 1,  56 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.querycount > 0 or collector.invalidEntityCount > 0 %}

        {% set icon %}
            {% set status = collector.invalidEntityCount > 0 ? 'red' : collector.querycount > 50 ? 'yellow' %}

            {% if profiler_markup_version >= 3 %}
                {{ include('@Doctrine/Collector/database.svg') }}
            {% else %}
                <span class=\"icon\">{{ include('@Doctrine/Collector/icon.svg') }}</span>
            {% endif %}

            {% if collector.querycount == 0 and collector.invalidEntityCount > 0 %}
                <span class=\"sf-toolbar-value\">{{ collector.invalidEntityCount }}</span>
                <span class=\"sf-toolbar-label\">errors</span>
            {% else %}
                <span class=\"sf-toolbar-value\">{{ collector.querycount }}</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time * 1000) }}</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status {{ collector.querycount > 50 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.querycount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">{{ collector.groupedQueryCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status {{ collector.invalidEntityCount > 0 ? 'sf-toolbar-status-red' : '' }}\">{{ collector.invalidEntityCount }}</span>
            </div>
            {% if collector.cacheEnabled %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.cacheHitsCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status {{ collector.cacheMissesCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cacheMissesCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status {{ collector.cachePutsCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cachePutsCount }}</span>
                </div>
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            {% endif %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}

    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.invalidEntityCount > 0 ? 'label-status-error' }} {{ collector.querycount == 0 ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Doctrine/Collector/' ~ (profiler_markup_version < 3 ? 'icon' : 'database') ~ '.svg') }}</span>
        <strong>Doctrine</strong>
        {% if collector.invalidEntityCount %}
            <span class=\"count\">
                <span>{{ collector.invalidEntityCount }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% if 'explain' == page %}
        {{ render(controller('Doctrine\\\\Bundle\\\\DoctrineBundle\\\\Controller\\\\ProfilerController::explainAction', {
            token: token,
            panel: 'db',
            connectionName: request.query.get('connection'),
            query: request.query.get('query')
        })) }}
    {% else %}
        {{ block('queries') }}
    {% endif %}
{% endblock %}

{% block queries %}
    <style>
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
    </style>

    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.querycount }}</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.groupedQueryCount }}</span>
                <span class=\"label\">Different statements</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                <span class=\"label\">Query time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.invalidEntityCount }}</span>
                <span class=\"label\">Invalid entities</span>
            </div>
        </div>

        {% if collector.cacheEnabled %}
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.cacheHitsCount }}</span>
                    <span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.cacheMissesCount }}</span>
                    <span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.cachePutsCount }}</span>
                    <span class=\"label\">Cache puts</span>
                </div>
            </div>
        {% endif %}
    </div>

    <div class=\"sf-tabs\" style=\"margin-top: 20px;\">
        <div class=\"tab {{ collector.queries is empty ? 'disabled' }}\">
            {% set group_queries = request.query.getBoolean('group') %}
            <h3 class=\"tab-title\">
                {% if group_queries %}
                    Grouped Statements
                {% else %}
                    Queries
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% if not collector.queries %}
                    <div class=\"empty\">
                        <p>No executed queries.</p>
                    </div>
                {% else %}
                    {% if group_queries %}
                        <p><a href=\"{{ path('_profiler', { panel: 'db', token: token }) }}\">Show all queries</a></p>
                    {% else %}
                        <p><a href=\"{{ path('_profiler', { panel: 'db', token: token, group: true }) }}\">Group similar statements</a></p>
                    {% endif %}

                    {% for connection, queries in collector.queries %}
                        {% if collector.connections|length > 1 %}
                            <h3>{{ connection }} <small>connection</small></h3>
                        {% endif %}

                        {% if queries is empty %}
                            <div class=\"empty\">
                                <p>No database queries were performed.</p>
                            </div>
                        {% else %}
                            {% if group_queries %}
                                {% set queries = collector.groupedQueries[connection] %}
                            {% endif %}
                            <table class=\"alt queries-table\">
                                <thead>
                                <tr>
                                    {% if group_queries %}
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Count<span></span></th>
                                    {% else %}
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Time<span></span></th>
                                    {% endif %}
                                    <th style=\"width: 100%;\">Info</th>
                                </tr>
                                </thead>
                                <tbody id=\"queries-{{ loop.index }}\">
                                {% for i, query in queries %}
                                    {% set i = group_queries ? query.index : i %}
                                    <tr id=\"queryNo-{{ i }}-{{ loop.parent.loop.index }}\">
                                        {% if group_queries %}
                                            <td class=\"time-container\">
                                                <span class=\"time-bar\" style=\"width:{{ '%0.2f'|format(query.executionPercent) }}%\"></span>
                                                <span class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms<br />({{ '%0.2f'|format(query.executionPercent) }}%)</span>
                                            </td>
                                            <td class=\"nowrap\">{{ query.count }}</td>
                                        {% else %}
                                            <td class=\"nowrap\">{{ loop.index }}</td>
                                            <td class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms</td>
                                        {% endif %}
                                        <td>
                                            {{ query.sql|doctrine_prettify_sql }}

                                            <div>
                                                <strong class=\"font-normal text-small\">Parameters</strong>: {{ profiler_dump(query.params, 2) }}
                                            </div>

                                            <div class=\"text-small font-normal\">
                                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                                {% if query.runnable %}
                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                                {% endif %}

                                                {% if query.explainable %}
                                                    &nbsp;&nbsp;
                                                    <a class=\"link-inverse\" href=\"{{ path('_profiler', { panel: 'db', token: token, page: 'explain', connection: connection, query: i }) }}\" onclick=\"return explain(this);\" data-target-id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\">Explain query</a>
                                                {% endif %}

                                                {% if query.backtrace is defined %}
                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                                {% endif %}
                                            </div>

                                            <div id=\"formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                                {{ query.sql|doctrine_format_sql(highlight = true) }}
                                                <button class=\"btn btn-sm hidden\" data-clipboard-text=\"{{ query.sql|doctrine_format_sql(highlight = false)|e('html_attr') }}\">Copy</button>
                                            </div>

                                            {% if query.runnable %}
                                                <div id=\"original-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                                    {% set runnable_sql = (query.sql ~ ';')|doctrine_replace_query_parameters(query.params) %}
                                                    {{ runnable_sql|doctrine_prettify_sql }}
                                                    <button class=\"btn btn-sm hidden\" data-clipboard-text=\"{{ runnable_sql|e('html_attr') }}\">Copy</button>
                                                </div>
                                            {% endif %}

                                            {% if query.explainable %}
                                                <div id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-explain\"></div>
                                            {% endif %}

                                            {% if query.backtrace is defined %}
                                                <div id=\"backtrace-{{ i }}-{{ loop.parent.loop.index }}\" class=\"hidden\">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th scope=\"col\">#</th>
                                                            <th scope=\"col\">File/Call</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {% for trace in query.backtrace %}
                                                            <tr>
                                                                <td>{{ loop.index }}</td>
                                                                <td>
                                                                            <span class=\"text-small\">
                                                                                {% set line_number = trace.line|default(1) %}
                                                                                {% if trace.file is defined %}
                                                                                    <a href=\"{{ trace.file|file_link(line_number) }}\">
                                                                                {% endif %}
                                                                                        {{- trace.class|default ~ (trace.class is defined ? trace.type|default('::')) -}}
                                                                                    <span class=\"status-warning\">{{ trace.function }}</span>
                                                                                {% if trace.file is defined %}
                                                                                    </a>
                                                                                {% endif %}
                                                                                (line {{ line_number }})
                                                                            </span>
                                                                </td>
                                                            </tr>
                                                        {% endfor %}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                    {% endfor %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.connections is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Database Connections</h3>
            <div class=\"tab-content\">
                {% if not collector.connections %}
                    <div class=\"empty\">
                        <p>There are no configured database connections.</p>
                    </div>
                {% else %}
                    {{ helper.render_simple_table('Name', 'Service', collector.connections) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.managers is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Entity Managers</h3>
            <div class=\"tab-content\">

                {% if not collector.managers %}
                    <div class=\"empty\">
                        <p>There are no configured entity managers.</p>
                    </div>
                {% else %}
                    {{ helper.render_simple_table('Name', 'Service', collector.managers) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ not collector.cacheEnabled ? 'disabled' }}\">
            <h3 class=\"tab-title\">Second Level Cache</h3>
            <div class=\"tab-content\">

                {% if not collector.cacheEnabled %}
                    <div class=\"empty\">
                        <p>Second Level Cache is not enabled.</p>
                    </div>
                {% else %}
                    {% if not collector.cacheCounts %}
                        <div class=\"empty\">
                            <p>Second level cache information is not available.</p>
                        </div>
                    {% else %}
                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.cacheCounts.hits }}</span>
                                <span class=\"label\">Hits</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.cacheCounts.misses }}</span>
                                <span class=\"label\">Misses</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.cacheCounts.puts }}</span>
                                <span class=\"label\">Puts</span>
                            </div>
                        </div>

                        {% if collector.cacheRegions.hits %}
                            <h3>Number of cache hits</h3>
                            {{ helper.render_simple_table('Region', 'Hits', collector.cacheRegions.hits) }}
                        {% endif %}

                        {% if collector.cacheRegions.misses %}
                            <h3>Number of cache misses</h3>
                            {{ helper.render_simple_table('Region', 'Misses', collector.cacheRegions.misses) }}
                        {% endif %}

                        {% if collector.cacheRegions.puts %}
                            <h3>Number of cache puts</h3>
                            {{ helper.render_simple_table('Region', 'Puts', collector.cacheRegions.puts) }}
                        {% endif %}
                    {% endif %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ not collector.entities ? 'disabled' }}\">
            <h3 class=\"tab-title\">Entities Mapping</h3>
            <div class=\"tab-content\">

                {% if not collector.entities %}
                    <div class=\"empty\">
                        <p>No mapped entities.</p>
                    </div>
                {% else %}
                    {% for manager, classes in collector.entities %}
                        {% if collector.managers|length > 1 %}
                            <h3>{{ manager }} <small>entity manager</small></h3>
                        {% endif %}

                        {% if classes is empty %}
                            <div class=\"empty\">
                                <p>No loaded entities.</p>
                            </div>
                        {% else %}
                            <table>
                                <thead>
                                <tr>
                                    <th scope=\"col\">Class</th>
                                    <th scope=\"col\">Mapping errors</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for class in classes %}
                                    {% set contains_errors = collector.mappingErrors[manager] is defined and collector.mappingErrors[manager][class.class] is defined %}
                                    <tr class=\"{{ contains_errors ? 'status-error' }}\">
                                        <td>
                                <a href=\"{{ class.file|file_link(class.line) }}\">{{ class. class}}</a>
                            </td>
                                        <td class=\"font-normal\">
                                            {% if contains_errors %}
                                                <ul>
                                                    {% for error in collector.mappingErrors[manager][class.class] %}
                                                        <li>{{ error }}</li>
                                                    {% endfor %}
                                                </ul>
                                            {% else %}
                                                No errors.
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        if (navigator.clipboard) {
            document.querySelectorAll('[data-clipboard-text]').forEach(function(button) {
                Sfjs.removeClass(button, 'hidden');
                button.addEventListener('click', function() {
                    navigator.clipboard.writeText(button.getAttribute('data-clipboard-text'));
                })
            });
        }

        //]]></script>
{% endblock %}

{% macro render_simple_table(label1, label2, data) %}
    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ label1 }}</th>
            <th scope=\"col\">{{ label2 }}</th>
        </tr>
        </thead>
        <tbody>
        {% for key, value in data %}
            <tr>
                <th scope=\"row\">{{ key }}</th>
                <td>{{ value }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@Doctrine/Collector/db.html.twig", "D:\\Github\\Groupe6\\symfony\\projetTest\\vendor\\doctrine\\doctrine-bundle\\Resources\\views\\Collector\\db.html.twig");
    }
}
