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

/* home/index.html.twig */
class __TwigTemplate_9a31b3b03dc2cfbf4166c3619c42a4b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo " Home ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <section class=\"features6 cid-s3uoOnLXyc\" id=\"features6-2\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-12\">
                    <h2 class=\"mbr-section-title title pb-2 mb-1 mbr-bold mbr-fonts-style align-left display-5\">Related Tours</h2>

                </div>
            </div>
            <div class=\"row row-content justify-content-center\">
                <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <div class=\"price-box\">
                                <h5 class=\"price mbr-fonts-style mbr-bold display-4\">\$5,000</h5>
                            </div>
                            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/mbr-692x389.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"\">
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title mbr-fonts-style pb-1 mbr-bold display-5\">China Autumn</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-normal display-4\">
                                City Tours, Urban</p>

                            <div class=\"ico-line-wrap\">
                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">4 review</h3>
                                </div>

                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-clock\" style=\"color: rgb(0, 0, 0); fill: rgb(0, 0, 0);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">5 days</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <div class=\"price-box\">
                                <h5 class=\"price mbr-fonts-style mbr-bold display-4\">\$4,000</h5>
                            </div>
                            <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/mbr-692x461.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"\">
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title mbr-fonts-style pb-1 mbr-bold display-5\">Great Britain Travel</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-normal display-4\">
                                City Tours, Historic, Park</p>

                            <div class=\"ico-line-wrap\">
                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">3 review</h3>
                                </div>

                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-clock\" style=\"color: rgb(0, 0, 0); fill: rgb(0, 0, 0);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">4 days</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <div class=\"price-box\">
                                <h5 class=\"price mbr-fonts-style mbr-bold display-4\">\$3,500</h5>
                            </div>
                            <img src=\"assets/images/mbr-692x364.jpg\" title=\"\" alt=\"\">
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title mbr-fonts-style pb-1 mbr-bold display-5\">Exclusive ParisTrip</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-normal display-4\">
                                City Tours, Urban</p>

                            <div class=\"ico-line-wrap\">
                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">6 review</h3>
                                </div>

                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-clock\" style=\"color: rgb(0, 0, 0); fill: rgb(0, 0, 0);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">3 days</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <section class=\"features6 cid-s3uoPL02Np\" id=\"features6-3\">




        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-12\">
                    <h2 class=\"mbr-section-title title pb-2 mb-1 mbr-bold mbr-fonts-style align-left display-5\">Related Tours</h2>

                </div>
            </div>
            <div class=\"row row-content justify-content-center\">
                <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <div class=\"price-box\">
                                <h5 class=\"price mbr-fonts-style mbr-bold display-4\">\$5,000</h5>
                            </div>
                            <img src=\"assets/images/mbr-692x443.jpg\" title=\"\" alt=\"\">
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title mbr-fonts-style pb-1 mbr-bold display-5\">China Autumn</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-normal display-4\">
                                City Tours, Urban</p>

                            <div class=\"ico-line-wrap\">
                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">4 review</h3>
                                </div>

                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-clock\" style=\"color: rgb(0, 0, 0); fill: rgb(0, 0, 0);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">5 days</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <div class=\"price-box\">
                                <h5 class=\"price mbr-fonts-style mbr-bold display-4\">\$4,000</h5>
                            </div>
                            <img src=\"assets/images/mbr-692x321.png\" title=\"\" alt=\"\">
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title mbr-fonts-style pb-1 mbr-bold display-5\">Great Britain Travel</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-normal display-4\">
                                City Tours, Historic, Park</p>

                            <div class=\"ico-line-wrap\">
                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">3 review</h3>
                                </div>

                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-clock\" style=\"color: rgb(0, 0, 0); fill: rgb(0, 0, 0);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">4 days</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <div class=\"price-box\">
                                <h5 class=\"price mbr-fonts-style mbr-bold display-4\">\$3,500</h5>
                            </div>
                            <img src=\"assets/images/mbr-1-692x461.jpg\" title=\"\" alt=\"\">
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title mbr-fonts-style pb-1 mbr-bold display-5\">Exclusive ParisTrip</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-normal display-4\">
                                City Tours, Urban</p>

                            <div class=\"ico-line-wrap\">
                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">6 review</h3>
                                </div>

                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-clock\" style=\"color: rgb(0, 0, 0); fill: rgb(0, 0, 0);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">3 days</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <section class=\"content3 cid-s3uoWKufig\" id=\"content3-5\">





        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h2 class=\"mbr-section-title pb-2 mbr-fonts-style mbr-bold display-5\">Description</h2>
                    <p class=\"mbr-text mbr-fonts-style display-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in nisi non arcu rutrum molestie. Phasellus
                        vel vehicula enim. Nullam congue porttitor posuere. Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Proin in ultricies ex. Nulla eu tempor dolor.</p>
                </div>
                <div class=\"col-md-4\">
                    <h2 class=\"mbr-section-title pb-2 mbr-fonts-style mbr-bold display-5\">Description</h2>
                    <p class=\"mbr-text mbr-fonts-style display-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in nisi non arcu rutrum molestie. Phasellus
                        vel vehicula enim. Nullam congue porttitor posuere. Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Proin in ultricies ex. Nulla eu tempor dolor.</p>
                </div>
                <div class=\"col-md-4\">
                    <h2 class=\"mbr-section-title pb-2 mbr-fonts-style mbr-bold display-5\">Description</h2>
                    <p class=\"mbr-text mbr-fonts-style display-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in nisi non arcu rutrum molestie. Phasellus
                        vel vehicula enim. Nullam congue porttitor posuere. Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Proin in ultricies ex. Nulla eu tempor dolor.</p>
                </div>
            </div>
        </div>
    </section>

    <section class=\"team1 cid-s3uoRrxh4P\" id=\"team1-4\">




        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-12\">
                    <h2 class=\"mbr-section-title pb-4 mbr-bold mbr-fonts-style align-left display-2\">Our Team</h2>

                </div>
            </div>
            <div class=\"row row-content justify-content-center\">



                <div class=\"card p-3 col-12 col-md-5 col-lg-3\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/face1.jpg"), "html", null, true);
        echo "\" title=\"\">
                            <div class=\"ico-wrap\">
                                <div class=\"mbr-iconfont ico socicon-vkontakte socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-twitter socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-facebook socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-skype socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                            </div>
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title pb-1 mbr-fonts-style mbr-bold display-5\">John Bennett</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-bold display-4\">
                                Asia Tour Expert</p>

                        </div>
                    </div>

                </div>




                <div class=\"card p-3 col-12 col-md-5 col-lg-3\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <img src=\"assets/images/face2.jpg\" title=\"\">
                            <div class=\"ico-wrap\">
                                <div class=\"mbr-iconfont ico socicon-vkontakte socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-twitter socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-facebook socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-skype socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                            </div>
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title pb-1 mbr-fonts-style mbr-bold display-5\">Jessica Lee</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-bold display-4\">
                                Marketing Manager</p>

                        </div>
                    </div>

                </div>


                <div class=\"card p-3 col-12 col-md-5 col-lg-3\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <img src=\"assets/images/face3.jpg\" title=\"\">
                            <div class=\"ico-wrap\">
                                <div class=\"mbr-iconfont ico socicon-vkontakte socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-twitter socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-facebook socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-skype socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                            </div>
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title pb-1 mbr-fonts-style mbr-bold display-5\">Oliver Doe</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-bold display-4\">
                                Europe Tour Expert</p>

                        </div>
                    </div>

                </div>



                <div class=\"card p-3 col-12 col-md-5 col-lg-3\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <img src=\"assets/images/face4.jpg\" title=\"\">
                            <div class=\"ico-wrap\">
                                <div class=\"mbr-iconfont ico socicon-vkontakte socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-twitter socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-facebook socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-skype socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                            </div>
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title pb-1 mbr-fonts-style mbr-bold display-5\">Christina Hardy</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-bold display-4\">
                                Customer Support</p>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <section class=\"form1 form cid-s3uoZXaaZI\" id=\"form1-6\">




        <div class=\"container\">
            <div class=\"row justify-content-center\">

                <div class=\"col-lg-6 col-md-4 col-sm-12 align-center\">


                </div>




                <div class=\"col-lg-6 col-md-8 col-sm-12 align-left card\">
                    <h2 class=\"title2 mbr-fonts-style pb-1 mbr-bold display-5\">Get In Touch With Us</h2>
                    <h3 class=\"mbr-section-subtitle mbr-fonts-style pb-4 display-7\">
                        Lorem ipsum dolor sit amet</h3>
                    <div data-form-type=\"formoid\">
                        <!---Formbuilder Form--->
                        <form  method=\"POST\" class=\"mbr-form form-with-styler\" data-form-title=\"Mobirise Form\"><input type=\"hidden\" name=\"email\" data-form-email=\"true\" value=\"pQ1STPhaFHINb6JVW4r0PECqNaXLtTWQ/8VZVfPXkdq+GB1WMEYFAClrV00Jom/hfQTHi5EaqksXp4nkC3i/44y1jX3A2Dl+ClJHhhSxAcOhyVfCaXxWguxw4Iwf8Nz+.aMVHC52mGAFkxCM45Pni8rEix4esWJcsgWvGZblKnAh+B1QP7yxcKuh0uo1pGfjbTgX01Ep+kfwAzSbRo7ameDdYf6puLx1oyItcPfs84fc6Ap/NwD2TtSQadg+qqFw/\">
                            <div class=\"row\">
                                <div hidden=\"hidden\" data-form-alert=\"\" class=\"alert alert-success col-12\">Thanks for filling out the form!</div>
                                <div hidden=\"hidden\" data-form-alert-danger=\"\" class=\"alert alert-danger col-12\">
                                </div>
                            </div>
                            <div class=\"dragArea row\">
                                <div class=\"col-md-12  form-group\" data-for=\"name\">
                                    <label for=\"name-form1-6\" class=\"form-control-label mbr-fonts-style display-4\">Full Name</label>
                                    <input type=\"text\" name=\"name\" placeholder=\"Your Name\" data-form-field=\"Name\" required=\"required\" class=\"form-control display-7\" id=\"name-form1-6\">
                                </div>
                                <div class=\"col-md-12  form-group\" data-for=\"email\">
                                    <label for=\"email-form1-6\" class=\"form-control-label mbr-fonts-style display-4\">Email Address</label>
                                    <input type=\"email\" name=\"email\" placeholder=\"Your Email\" data-form-field=\"Email\" required=\"required\" class=\"form-control display-7\" id=\"email-form1-6\">
                                </div>
                                <div data-for=\"phone\" class=\"col-md-12  form-group\">
                                    <label for=\"phone-form1-6\" class=\"form-control-label mbr-fonts-style display-4\">Phone Number</label>
                                    <input type=\"tel\" name=\"phone\" placeholder=\"Your Phone Number\" data-form-field=\"Phone\" class=\"form-control display-7\" id=\"phone-form1-6\">
                                </div>
                                <div data-for=\"interested\" class=\"col-md-12  form-group\">
                                    <label for=\"interested-form1-6\" class=\"form-control-label mbr-fonts-style display-4\">Interested In</label>
                                    <input type=\"tel\" name=\"interested\" placeholder=\"Interests in travel\" data-form-field=\"Interes\" class=\"form-control display-7\" id=\"interested-form1-6\">
                                </div>
                                <div data-for=\"person\" class=\"col-md-12  form-group\">
                                    <label for=\"person-form1-6\" class=\"form-control-label mbr-fonts-style display-4\">Number of Person</label>
                                    <input type=\"tel\" name=\"person\" placeholder=\"How many people will travel\" data-form-field=\"Persons\" class=\"form-control display-7\" id=\"person-form1-6\">
                                </div>
                                <div class=\"col-md-12 input-group-btn\">
                                    <button type=\"submit\" class=\"btn btn-form btn-primary display-4\">Send Message</button>
                                </div>
                            </div>
                        </form><!---Formbuilder Form--->
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 295,  163 => 58,  126 => 24,  109 => 9,  99 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Home {% endblock %}

 {% block stylesheets %}
 {% endblock %}

{% block body %}
    <section class=\"features6 cid-s3uoOnLXyc\" id=\"features6-2\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-12\">
                    <h2 class=\"mbr-section-title title pb-2 mb-1 mbr-bold mbr-fonts-style align-left display-5\">Related Tours</h2>

                </div>
            </div>
            <div class=\"row row-content justify-content-center\">
                <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <div class=\"price-box\">
                                <h5 class=\"price mbr-fonts-style mbr-bold display-4\">\$5,000</h5>
                            </div>
                            <img src=\"{{ asset('assets/images/mbr-692x389.jpg') }}\" title=\"\" alt=\"\">
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title mbr-fonts-style pb-1 mbr-bold display-5\">China Autumn</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-normal display-4\">
                                City Tours, Urban</p>

                            <div class=\"ico-line-wrap\">
                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">4 review</h3>
                                </div>

                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-clock\" style=\"color: rgb(0, 0, 0); fill: rgb(0, 0, 0);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">5 days</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <div class=\"price-box\">
                                <h5 class=\"price mbr-fonts-style mbr-bold display-4\">\$4,000</h5>
                            </div>
                            <img src=\"{{ asset('assets/images/mbr-692x461.jpg') }}\" title=\"\" alt=\"\">
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title mbr-fonts-style pb-1 mbr-bold display-5\">Great Britain Travel</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-normal display-4\">
                                City Tours, Historic, Park</p>

                            <div class=\"ico-line-wrap\">
                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">3 review</h3>
                                </div>

                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-clock\" style=\"color: rgb(0, 0, 0); fill: rgb(0, 0, 0);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">4 days</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <div class=\"price-box\">
                                <h5 class=\"price mbr-fonts-style mbr-bold display-4\">\$3,500</h5>
                            </div>
                            <img src=\"assets/images/mbr-692x364.jpg\" title=\"\" alt=\"\">
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title mbr-fonts-style pb-1 mbr-bold display-5\">Exclusive ParisTrip</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-normal display-4\">
                                City Tours, Urban</p>

                            <div class=\"ico-line-wrap\">
                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">6 review</h3>
                                </div>

                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-clock\" style=\"color: rgb(0, 0, 0); fill: rgb(0, 0, 0);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">3 days</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <section class=\"features6 cid-s3uoPL02Np\" id=\"features6-3\">




        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-12\">
                    <h2 class=\"mbr-section-title title pb-2 mb-1 mbr-bold mbr-fonts-style align-left display-5\">Related Tours</h2>

                </div>
            </div>
            <div class=\"row row-content justify-content-center\">
                <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <div class=\"price-box\">
                                <h5 class=\"price mbr-fonts-style mbr-bold display-4\">\$5,000</h5>
                            </div>
                            <img src=\"assets/images/mbr-692x443.jpg\" title=\"\" alt=\"\">
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title mbr-fonts-style pb-1 mbr-bold display-5\">China Autumn</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-normal display-4\">
                                City Tours, Urban</p>

                            <div class=\"ico-line-wrap\">
                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">4 review</h3>
                                </div>

                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-clock\" style=\"color: rgb(0, 0, 0); fill: rgb(0, 0, 0);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">5 days</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <div class=\"price-box\">
                                <h5 class=\"price mbr-fonts-style mbr-bold display-4\">\$4,000</h5>
                            </div>
                            <img src=\"assets/images/mbr-692x321.png\" title=\"\" alt=\"\">
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title mbr-fonts-style pb-1 mbr-bold display-5\">Great Britain Travel</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-normal display-4\">
                                City Tours, Historic, Park</p>

                            <div class=\"ico-line-wrap\">
                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">3 review</h3>
                                </div>

                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-clock\" style=\"color: rgb(0, 0, 0); fill: rgb(0, 0, 0);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">4 days</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class=\"card p-3 col-12 col-md-6 col-lg-4\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <div class=\"price-box\">
                                <h5 class=\"price mbr-fonts-style mbr-bold display-4\">\$3,500</h5>
                            </div>
                            <img src=\"assets/images/mbr-1-692x461.jpg\" title=\"\" alt=\"\">
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title mbr-fonts-style pb-1 mbr-bold display-5\">Exclusive ParisTrip</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-normal display-4\">
                                City Tours, Urban</p>

                            <div class=\"ico-line-wrap\">
                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(30, 198, 182); fill: rgb(30, 198, 182);\" media-simple=\"true\"></div>
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-star\" style=\"color: rgb(158, 158, 158); fill: rgb(158, 158, 158);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">6 review</h3>
                                </div>

                                <div class=\"ico-line\">
                                    <div class=\"px-1 pb-3 pr-2 mbr-iconfont mbr-iconfont-social mbri-clock\" style=\"color: rgb(0, 0, 0); fill: rgb(0, 0, 0);\" media-simple=\"true\"></div>
                                    <h3 class=\"rev mbr-fonts-style mbr-bold display-4\">3 days</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <section class=\"content3 cid-s3uoWKufig\" id=\"content3-5\">





        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h2 class=\"mbr-section-title pb-2 mbr-fonts-style mbr-bold display-5\">Description</h2>
                    <p class=\"mbr-text mbr-fonts-style display-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in nisi non arcu rutrum molestie. Phasellus
                        vel vehicula enim. Nullam congue porttitor posuere. Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Proin in ultricies ex. Nulla eu tempor dolor.</p>
                </div>
                <div class=\"col-md-4\">
                    <h2 class=\"mbr-section-title pb-2 mbr-fonts-style mbr-bold display-5\">Description</h2>
                    <p class=\"mbr-text mbr-fonts-style display-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in nisi non arcu rutrum molestie. Phasellus
                        vel vehicula enim. Nullam congue porttitor posuere. Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Proin in ultricies ex. Nulla eu tempor dolor.</p>
                </div>
                <div class=\"col-md-4\">
                    <h2 class=\"mbr-section-title pb-2 mbr-fonts-style mbr-bold display-5\">Description</h2>
                    <p class=\"mbr-text mbr-fonts-style display-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in nisi non arcu rutrum molestie. Phasellus
                        vel vehicula enim. Nullam congue porttitor posuere. Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Proin in ultricies ex. Nulla eu tempor dolor.</p>
                </div>
            </div>
        </div>
    </section>

    <section class=\"team1 cid-s3uoRrxh4P\" id=\"team1-4\">




        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-12\">
                    <h2 class=\"mbr-section-title pb-4 mbr-bold mbr-fonts-style align-left display-2\">Our Team</h2>

                </div>
            </div>
            <div class=\"row row-content justify-content-center\">



                <div class=\"card p-3 col-12 col-md-5 col-lg-3\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('assets/images/face1.jpg') }}\" title=\"\">
                            <div class=\"ico-wrap\">
                                <div class=\"mbr-iconfont ico socicon-vkontakte socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-twitter socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-facebook socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-skype socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                            </div>
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title pb-1 mbr-fonts-style mbr-bold display-5\">John Bennett</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-bold display-4\">
                                Asia Tour Expert</p>

                        </div>
                    </div>

                </div>




                <div class=\"card p-3 col-12 col-md-5 col-lg-3\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <img src=\"assets/images/face2.jpg\" title=\"\">
                            <div class=\"ico-wrap\">
                                <div class=\"mbr-iconfont ico socicon-vkontakte socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-twitter socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-facebook socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-skype socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                            </div>
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title pb-1 mbr-fonts-style mbr-bold display-5\">Jessica Lee</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-bold display-4\">
                                Marketing Manager</p>

                        </div>
                    </div>

                </div>


                <div class=\"card p-3 col-12 col-md-5 col-lg-3\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <img src=\"assets/images/face3.jpg\" title=\"\">
                            <div class=\"ico-wrap\">
                                <div class=\"mbr-iconfont ico socicon-vkontakte socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-twitter socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-facebook socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-skype socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                            </div>
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title pb-1 mbr-fonts-style mbr-bold display-5\">Oliver Doe</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-bold display-4\">
                                Europe Tour Expert</p>

                        </div>
                    </div>

                </div>



                <div class=\"card p-3 col-12 col-md-5 col-lg-3\">
                    <div class=\"card-wrapper\">
                        <div class=\"card-img\">
                            <img src=\"assets/images/face4.jpg\" title=\"\">
                            <div class=\"ico-wrap\">
                                <div class=\"mbr-iconfont ico socicon-vkontakte socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-twitter socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-facebook socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                                <div class=\"mbr-iconfont ico socicon-skype socicon\" style=\"color: rgb(255, 255, 255); fill: rgb(255, 255, 255);\" media-simple=\"true\"></div>
                            </div>
                        </div>
                        <div class=\"card-box\">
                            <h4 class=\"card-title pb-1 mbr-fonts-style mbr-bold display-5\">Christina Hardy</h4>
                            <p class=\"mbr-text mbr-fonts-style mbr-bold display-4\">
                                Customer Support</p>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <section class=\"form1 form cid-s3uoZXaaZI\" id=\"form1-6\">




        <div class=\"container\">
            <div class=\"row justify-content-center\">

                <div class=\"col-lg-6 col-md-4 col-sm-12 align-center\">


                </div>




                <div class=\"col-lg-6 col-md-8 col-sm-12 align-left card\">
                    <h2 class=\"title2 mbr-fonts-style pb-1 mbr-bold display-5\">Get In Touch With Us</h2>
                    <h3 class=\"mbr-section-subtitle mbr-fonts-style pb-4 display-7\">
                        Lorem ipsum dolor sit amet</h3>
                    <div data-form-type=\"formoid\">
                        <!---Formbuilder Form--->
                        <form  method=\"POST\" class=\"mbr-form form-with-styler\" data-form-title=\"Mobirise Form\"><input type=\"hidden\" name=\"email\" data-form-email=\"true\" value=\"pQ1STPhaFHINb6JVW4r0PECqNaXLtTWQ/8VZVfPXkdq+GB1WMEYFAClrV00Jom/hfQTHi5EaqksXp4nkC3i/44y1jX3A2Dl+ClJHhhSxAcOhyVfCaXxWguxw4Iwf8Nz+.aMVHC52mGAFkxCM45Pni8rEix4esWJcsgWvGZblKnAh+B1QP7yxcKuh0uo1pGfjbTgX01Ep+kfwAzSbRo7ameDdYf6puLx1oyItcPfs84fc6Ap/NwD2TtSQadg+qqFw/\">
                            <div class=\"row\">
                                <div hidden=\"hidden\" data-form-alert=\"\" class=\"alert alert-success col-12\">Thanks for filling out the form!</div>
                                <div hidden=\"hidden\" data-form-alert-danger=\"\" class=\"alert alert-danger col-12\">
                                </div>
                            </div>
                            <div class=\"dragArea row\">
                                <div class=\"col-md-12  form-group\" data-for=\"name\">
                                    <label for=\"name-form1-6\" class=\"form-control-label mbr-fonts-style display-4\">Full Name</label>
                                    <input type=\"text\" name=\"name\" placeholder=\"Your Name\" data-form-field=\"Name\" required=\"required\" class=\"form-control display-7\" id=\"name-form1-6\">
                                </div>
                                <div class=\"col-md-12  form-group\" data-for=\"email\">
                                    <label for=\"email-form1-6\" class=\"form-control-label mbr-fonts-style display-4\">Email Address</label>
                                    <input type=\"email\" name=\"email\" placeholder=\"Your Email\" data-form-field=\"Email\" required=\"required\" class=\"form-control display-7\" id=\"email-form1-6\">
                                </div>
                                <div data-for=\"phone\" class=\"col-md-12  form-group\">
                                    <label for=\"phone-form1-6\" class=\"form-control-label mbr-fonts-style display-4\">Phone Number</label>
                                    <input type=\"tel\" name=\"phone\" placeholder=\"Your Phone Number\" data-form-field=\"Phone\" class=\"form-control display-7\" id=\"phone-form1-6\">
                                </div>
                                <div data-for=\"interested\" class=\"col-md-12  form-group\">
                                    <label for=\"interested-form1-6\" class=\"form-control-label mbr-fonts-style display-4\">Interested In</label>
                                    <input type=\"tel\" name=\"interested\" placeholder=\"Interests in travel\" data-form-field=\"Interes\" class=\"form-control display-7\" id=\"interested-form1-6\">
                                </div>
                                <div data-for=\"person\" class=\"col-md-12  form-group\">
                                    <label for=\"person-form1-6\" class=\"form-control-label mbr-fonts-style display-4\">Number of Person</label>
                                    <input type=\"tel\" name=\"person\" placeholder=\"How many people will travel\" data-form-field=\"Persons\" class=\"form-control display-7\" id=\"person-form1-6\">
                                </div>
                                <div class=\"col-md-12 input-group-btn\">
                                    <button type=\"submit\" class=\"btn btn-form btn-primary display-4\">Send Message</button>
                                </div>
                            </div>
                        </form><!---Formbuilder Form--->
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}





", "home/index.html.twig", "D:\\Github\\Groupe6\\symfony\\projetTest\\templates\\home\\index.html.twig");
    }
}
