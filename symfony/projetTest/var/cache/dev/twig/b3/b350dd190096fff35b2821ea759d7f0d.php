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

/* base.html.twig */
class __TwigTemplate_93e48ca0f1585f6bc1f78e09d0fe3a86 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
</html>

<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\">
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" type=\"image/x-icon\">
        <meta name=\"description\" content=\"\">
        <title>";
        // line 12
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

        <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/web/assets/mobirise-icons/mobirise-icons.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/tether/tether.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/css/bootstrap-grid.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/css/bootstrap-reboot.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dropdown/css/style.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/socicon/css/styles.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/theme/css/style.css"), "html", null, true);
        yield "\">
        <link rel=\"preload\" as=\"style\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mobirise/css/mbr-additional.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mobirise/css/mbr-additional.css"), "html", null, true);
        yield "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/libs/css/main.css"), "html", null, true);
        yield "\">

        ";
        // line 27
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 29
        yield "    </head>
    <body>
            <section class=\"menu cid-s3uoICMAmY\" once=\"menu\" id=\"menu1-1\">

                <nav class=\"navbar navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent\">
                    <div class=\"menu-content-top\">
                        <div class=\"menu-logo\">
                            <div class=\"navbar-brand\">
                                <span class=\"navbar-caption-wrap\">
                                    <a href=\"#\" class=\"brand-link mbr-black text-danger display-5\">
                                    Ma caisse</a>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class=\"menu-bottom\">
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav nav-dropdown js-float-line nav-right\" data-app-modern-menu=\"true\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link link mbr-black text-danger display-4\" href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
                                        Accueil</a>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link link mbr-black dropdown-toggle text-danger display-4\" href=\"#\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">Véhicules</a>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_index");
        yield "\">Liste des véhicules</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marque_index");
        yield "\">Liste des marques</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("color_index");
        yield "\">Liste des couleurs</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_vehicule_index");
        yield "\">Liste des types</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("options_index");
        yield "\">Liste des options</a>

                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy_index");
        yield "\">Liste des carburants</a>
                                    </div>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link link mbr-black text-danger display-4\" href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">
                                        Contact</a>
                                </li>
                                    ";
        // line 73
        if ((($tmp =  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
            // line 75
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\" >Login</a>
                                        </li>
                                    ";
        }
        // line 78
        yield "
                                    ";
        // line 79
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
            // line 81
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\" >LogOut</a>
                                        </li>
                                    ";
        }
        // line 84
        yield "
                                    ";
        // line 85
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
            // line 87
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            yield "\" >Register</a>
                                        </li>
                                    ";
        }
        // line 90
        yield "                            </ul>
                                    
                        </div>
                        ";
        // line 93
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "                                        <p class=\"username\">Hello, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "prenomUser", [], "any", false, false, false, 94), "html", null, true);
            yield "</p>
                                    ";
        }
        // line 96
        yield "                        <button class=\"navbar-toggler \" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <div class=\"hamburger\">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>
                    </div>
                </nav>
            </section>

            <section class=\"header2 cid-s3uoHM1wio\" id=\"header2-0\">



                <div class=\"mbr-overlay\" style=\"opacity: 0.4; background-color: rgb(0, 0, 0);\">
                </div>

                <div class=\"container align-center\">
                    <div class=\"row justify-content-center\">
                        <div class=\"mbr-white col-lg-8 col-md-10\">
                            <h1 class=\"mbr-section-title mbr-bold align-left mbr-white pb-1 mbr-fonts-style display-1\">
                                Achat - Vente - Leasing - Voitures
                            </h1>
                            <p class=\"mbr-text align-left pb-4 mbr-fonts-style display-7\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisl elit, varius ut magna vel, tincidunt iaculis sem. Interdum
                                et malesuada fames ac ante ipsum primis in faucibus.</p>

                        </div>
                    </div>
                </div>

            </section>
            <div class=\"container mt-5 mb-5\">
        ";
        // line 131
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 135
        yield "            </div>
                <section class=\"footer1 cid-s3up1rkxJq\" id=\"footer1-7\">





                    <div class=\"container\">
                        <div class=\"row\">

                            <div class=\"col-lg-4 col-md-12 col-sm-12\">


                                <h3 class=\"mbr-text mbr-bold mbr-fonts-style group-title display-7\">Company Info</h3>


                                <p class=\"mbr-text mbr-normal py-2 links mbr-fonts-style display-4\">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis quisquam hic minima officiis labore. Autem iste maiores,
                                    impedit quasi, incidunt voluptatibus.</p>

                                <div class=\"navbar-brand\">
                                    <div class=\"logo\">
                                        <a href=\"#\">
                                            <img class=\"navbar-logo\" src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/mbr-160x160.png"), "html", null, true);
        yield "\" alt=\"\" title=\"\">
                                        </a>
                                    </div>

                                </div>

                            </div>






                            <div class=\"col-lg-4 col-md-12 col-sm-12\">

                                <h3 class=\"mbr-text mbr-bold mbr-fonts-style group-title display-7\">Contacts</h3>

                                <div class=\"mbr-row items mbr-white\">







                                    <div class=\"list-item mbr-col-lg-12 mbr-col-md-12 mbr-col-sm-12\">
                                        <span class=\"mbr-iconfont listico mbri-tablet-vertical\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\"></span>
                                        <h5 class=\"mbr-fonts-style text2 display-4\">123-456-78901</h5>
                                    </div><div class=\"list-item mbr-col-lg-12 mbr-col-md-12 mbr-col-sm-12\">
                                        <span class=\"mbr-iconfont listico mbri-pin\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\"></span>
                                        <h5 class=\"mbr-fonts-style text2 display-4\">London, 51 Street, 43</h5>
                                    </div><div class=\"list-item mbr-col-lg-12 mbr-col-md-12 mbr-col-sm-12\">
                                        <span class=\"mbr-iconfont listico mbri-clock\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\"></span>
                                        <h5 class=\"mbr-fonts-style text2 display-4\">Mon - Sat 8.00 - 18.00</h5>
                                    </div></div>



                                <div class=\"social-list py-4\">
                                    <div class=\"soc-item\">
                                        <a href=\"https://twitter.com/mobirise\" target=\"_blank\">
                                            <div class=\"mbr-iconfont mbr-iconfont-social socicon-twitter socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                        </a>
                                    </div>
                                    <div class=\"soc-item\">
                                        <a href=\"https://www.facebook.com/pages/Mobirise/1616226671953247\" target=\"_blank\">
                                            <div class=\"mbr-iconfont mbr-iconfont-social socicon-facebook socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                        </a>
                                    </div>




                                </div>


                            </div>

                            <div class=\"col-lg-4 col-md-12 col-sm-12 img-list\">
                                <h3 class=\"mbr-text mbr-bold mbr-fonts-style group-title display-7\">Recent Trips</h3>

                                <img class=\"tipsfooter\" src=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/mbr-180x120.jpg"), "html", null, true);
        yield "\" alt=\"\" title=\"\">






                            </div>
                        </div>
                    </div>
                </section>


            <script src=\"";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/web/assets/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/popper/popper.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/tether/tether.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/smoothscroll/smooth-scroll.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dropdown/js/nav-dropdown.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dropdown/js/navbar-dropdown.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/touchswipe/jquery.touch-swipe.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/theme/js/script.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/formoid/formoid.min.js"), "html", null, true);
        yield "\"></script>




        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/js/main.js"), "html", null, true);
        yield "\"></script>
        ";
        // line 250
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 253
        yield "    </body>

</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
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

        // line 28
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 131
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

        // line 132
        yield "

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 250
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 251
        yield "
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
        return "base.html.twig";
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
        return array (  541 => 251,  528 => 250,  515 => 132,  502 => 131,  491 => 28,  478 => 27,  455 => 12,  440 => 253,  438 => 250,  434 => 249,  423 => 241,  419 => 240,  415 => 239,  411 => 238,  407 => 237,  403 => 236,  399 => 235,  395 => 234,  391 => 233,  387 => 232,  371 => 219,  307 => 158,  282 => 135,  280 => 131,  243 => 96,  237 => 94,  235 => 93,  230 => 90,  224 => 87,  221 => 86,  219 => 85,  216 => 84,  210 => 81,  207 => 80,  205 => 79,  202 => 78,  196 => 75,  193 => 74,  191 => 73,  185 => 70,  178 => 66,  172 => 63,  167 => 61,  162 => 59,  157 => 57,  152 => 55,  143 => 49,  121 => 29,  119 => 27,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  68 => 12,  63 => 10,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
</html>

<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\">
        <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/logo.png') }}\" type=\"image/x-icon\">
        <meta name=\"description\" content=\"\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

        <link rel=\"stylesheet\" href=\"{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/tether/tether.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/dropdown/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/socicon/css/styles.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/theme/css/style.css') }}\">
        <link rel=\"preload\" as=\"style\" href=\"{{ asset('assets/mobirise/css/mbr-additional.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/mobirise/css/mbr-additional.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset(\"/libs/css/main.css\") }}\">

        {% block stylesheets %}
        {% endblock %}
    </head>
    <body>
            <section class=\"menu cid-s3uoICMAmY\" once=\"menu\" id=\"menu1-1\">

                <nav class=\"navbar navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent\">
                    <div class=\"menu-content-top\">
                        <div class=\"menu-logo\">
                            <div class=\"navbar-brand\">
                                <span class=\"navbar-caption-wrap\">
                                    <a href=\"#\" class=\"brand-link mbr-black text-danger display-5\">
                                    Ma caisse</a>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class=\"menu-bottom\">
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav nav-dropdown js-float-line nav-right\" data-app-modern-menu=\"true\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link link mbr-black text-danger display-4\" href=\"{{ path('home') }}\">
                                        Accueil</a>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link link mbr-black dropdown-toggle text-danger display-4\" href=\"#\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">Véhicules</a>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"{{ path('vehicule_index') }}\">Liste des véhicules</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"{{ path('marque_index') }}\">Liste des marques</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"{{ path('color_index') }}\">Liste des couleurs</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"{{ path('type_vehicule_index') }}\">Liste des types</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"{{ path('options_index') }}\">Liste des options</a>

                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"{{ path('energy_index') }}\">Liste des carburants</a>
                                    </div>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link link mbr-black text-danger display-4\" href=\"{{ path('contact') }}\">
                                        Contact</a>
                                </li>
                                    {% if not is_granted('ROLE_ADMIN') %}
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"{{ path('login') }}\" >Login</a>
                                        </li>
                                    {% endif %}

                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"{{ path('logout') }}\" >LogOut</a>
                                        </li>
                                    {% endif %}

                                    {% if is_granted('ROLE_SUPER_ADMIN') %}
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"{{ path('register') }}\" >Register</a>
                                        </li>
                                    {% endif %}
                            </ul>
                                    
                        </div>
                        {% if is_granted('ROLE_ADMIN') %}
                                        <p class=\"username\">Hello, {{ app.user.prenomUser }}</p>
                                    {% endif %}
                        <button class=\"navbar-toggler \" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <div class=\"hamburger\">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>
                    </div>
                </nav>
            </section>

            <section class=\"header2 cid-s3uoHM1wio\" id=\"header2-0\">



                <div class=\"mbr-overlay\" style=\"opacity: 0.4; background-color: rgb(0, 0, 0);\">
                </div>

                <div class=\"container align-center\">
                    <div class=\"row justify-content-center\">
                        <div class=\"mbr-white col-lg-8 col-md-10\">
                            <h1 class=\"mbr-section-title mbr-bold align-left mbr-white pb-1 mbr-fonts-style display-1\">
                                Achat - Vente - Leasing - Voitures
                            </h1>
                            <p class=\"mbr-text align-left pb-4 mbr-fonts-style display-7\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisl elit, varius ut magna vel, tincidunt iaculis sem. Interdum
                                et malesuada fames ac ante ipsum primis in faucibus.</p>

                        </div>
                    </div>
                </div>

            </section>
            <div class=\"container mt-5 mb-5\">
        {% block body %}


        {% endblock %}
            </div>
                <section class=\"footer1 cid-s3up1rkxJq\" id=\"footer1-7\">





                    <div class=\"container\">
                        <div class=\"row\">

                            <div class=\"col-lg-4 col-md-12 col-sm-12\">


                                <h3 class=\"mbr-text mbr-bold mbr-fonts-style group-title display-7\">Company Info</h3>


                                <p class=\"mbr-text mbr-normal py-2 links mbr-fonts-style display-4\">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis quisquam hic minima officiis labore. Autem iste maiores,
                                    impedit quasi, incidunt voluptatibus.</p>

                                <div class=\"navbar-brand\">
                                    <div class=\"logo\">
                                        <a href=\"#\">
                                            <img class=\"navbar-logo\" src=\"{{ asset('assets/images/mbr-160x160.png') }}\" alt=\"\" title=\"\">
                                        </a>
                                    </div>

                                </div>

                            </div>






                            <div class=\"col-lg-4 col-md-12 col-sm-12\">

                                <h3 class=\"mbr-text mbr-bold mbr-fonts-style group-title display-7\">Contacts</h3>

                                <div class=\"mbr-row items mbr-white\">







                                    <div class=\"list-item mbr-col-lg-12 mbr-col-md-12 mbr-col-sm-12\">
                                        <span class=\"mbr-iconfont listico mbri-tablet-vertical\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\"></span>
                                        <h5 class=\"mbr-fonts-style text2 display-4\">123-456-78901</h5>
                                    </div><div class=\"list-item mbr-col-lg-12 mbr-col-md-12 mbr-col-sm-12\">
                                        <span class=\"mbr-iconfont listico mbri-pin\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\"></span>
                                        <h5 class=\"mbr-fonts-style text2 display-4\">London, 51 Street, 43</h5>
                                    </div><div class=\"list-item mbr-col-lg-12 mbr-col-md-12 mbr-col-sm-12\">
                                        <span class=\"mbr-iconfont listico mbri-clock\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\"></span>
                                        <h5 class=\"mbr-fonts-style text2 display-4\">Mon - Sat 8.00 - 18.00</h5>
                                    </div></div>



                                <div class=\"social-list py-4\">
                                    <div class=\"soc-item\">
                                        <a href=\"https://twitter.com/mobirise\" target=\"_blank\">
                                            <div class=\"mbr-iconfont mbr-iconfont-social socicon-twitter socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                        </a>
                                    </div>
                                    <div class=\"soc-item\">
                                        <a href=\"https://www.facebook.com/pages/Mobirise/1616226671953247\" target=\"_blank\">
                                            <div class=\"mbr-iconfont mbr-iconfont-social socicon-facebook socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                        </a>
                                    </div>




                                </div>


                            </div>

                            <div class=\"col-lg-4 col-md-12 col-sm-12 img-list\">
                                <h3 class=\"mbr-text mbr-bold mbr-fonts-style group-title display-7\">Recent Trips</h3>

                                <img class=\"tipsfooter\" src=\"{{ asset('assets/images/mbr-180x120.jpg') }}\" alt=\"\" title=\"\">






                            </div>
                        </div>
                    </div>
                </section>


            <script src=\"{{ asset('assets/web/assets/jquery/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('assets/popper/popper.min.js') }}\"></script>
            <script src=\"{{ asset('assets/tether/tether.min.js') }}\"></script>
            <script src=\"{{ asset('assets/bootstrap/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('assets/smoothscroll/smooth-scroll.js') }}\"></script>
            <script src=\"{{ asset('assets/dropdown/js/nav-dropdown.js') }}\"></script>
            <script src=\"{{ asset('assets/dropdown/js/navbar-dropdown.js') }}\"></script>
            <script src=\"{{ asset('assets/touchswipe/jquery.touch-swipe.min.js') }}\"></script>
            <script src=\"{{ asset('assets/theme/js/script.js') }}\"></script>
            <script src=\"{{ asset('assets/formoid/formoid.min.js') }}\"></script>




        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset(\"libs/js/main.js\") }}\"></script>
        {% block javascripts %}

        {% endblock %}
    </body>

</html>

", "base.html.twig", "D:\\Github\\Groupe6\\symfony\\projetTest\\templates\\base.html.twig");
    }
}
