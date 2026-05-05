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

/* home/index.html.twig */
class __TwigTemplate_63c414a509dff19c4f1707675830df58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "Home - Lunettes";
        
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
        yield "    ";
        // line 9
        yield "    
 
  
  </head>
<body>

<section class=\"header1 cid-s0bsc2KgEB\" id=\"header01-1\">
    <div class=\"container-fluid mbr-white\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-5 mbr-col-md-12 mbr-m-auto mbr-col-sm-12 md-pb\">
                <div class=\"content\">
                    
                    <h1 class=\"mbr-section-title mbr-fonts-style align-left mbr-pb-2 display-1\">Sunglasses Shop</h1>
                    <p class=\"mbr-fonts-style mbr-text align-left mbr-pb-5  display-7\">Unique glasses for a new era
                        of fashion.</p>
                    <div class=\"mbr-section-btn align-left\"><a class=\"btn btn-md btn-white-outline display-4\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouveautes_lunettes");
        yield "\"><span class=\"mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" width=\"19\" height=\"19\"><path d=\"M24 11l-6.7 6.7-1.4-1.4 4.3-4.3H0v-2h20.2l-4.3-4.3 1.4-1.4L24 11z\"></path></svg></span>Discover</a>
                    </div>
                </div>
            </div>
            <div class=\"mbr-col-lg-7 mbr-col-md-12 img-col mbr-m-auto mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/01.jpg"), "html", null, true);
        yield "\" alt=\"\" width=\"1099.8670212765958\" height=\"919\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"content1 cid-s0btjSrjzP\" id=\"content01-e\"> 
    <div class=\"container\">
        <div class=\"mbr-row mbr-jc-c\">
            <div class=\"mbr-col-lg-8 mbr-col-md-12 mbr-col-sm-12\">
                <h3 class=\"mbr-section-subtitle mbr-black mbr-fonts-style mbr-pb-1 align-center display-5\">
                    Learn more about our brand</h3>
                <p class=\"mbr-fonts-style mbr-text align-center display-5\">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo suscipit vulputate.
                    Maecenas rutrum mollis arcu, at condimentum lorem <a href=\"#\" class=\"text-black\">@mobirise</a>.</p>
            </div>
        </div>
    </div>
</section>

<section class=\"features1 cid-s0bsg6BUXn\" id=\"features01-2\">
    <div class=\"container-fluid mbr-white\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-6 mbr-col-md-6 col1 mbr-m-auto mbr-col-sm-12\">
                <div class=\"mbr-overlay\"></div>
                <div class=\"content\">
                    <h1 class=\"mbr-section-title mbr-fonts-style align-left mbr-pb-2 display-2\"><strong>Women</strong></h1>
                    <div class=\"mbr-section-btn mbr-pt-5 align-left\"><a class=\"btn btn-md btn-white-outline display-4\" href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("femmes");
        yield "\"><span class=\"mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" width=\"19\" height=\"19\"><path d=\"M24 11l-6.7 6.7-1.4-1.4 4.3-4.3H0v-2h20.2l-4.3-4.3 1.4-1.4L24 11z\"></path></svg></span>Shop Now</a>
                    </div>
                </div>
            </div>
            <div class=\"mbr-col-lg-6 mbr-col-md-6 col2 mbr-m-auto mbr-col-sm-12\">
                <div class=\"mbr-overlay\"></div>
                <div class=\"content\">
                    <h1 class=\"mbr-section-title mbr-fonts-style align-left mbr-pb-2 display-2\"><strong>Men</strong></h1>
                    <div class=\"mbr-section-btn mbr-pt-5 align-left\"><a class=\"btn btn-md btn-white-outline display-4\" href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hommes");
        yield "\"><span class=\"mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" width=\"19\" height=\"19\"><path d=\"M24 11l-6.7 6.7-1.4-1.4 4.3-4.3H0v-2h20.2l-4.3-4.3 1.4-1.4L24 11z\"></path></svg></span>Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"content5 cid-s0bsQkplRB\" id=\"content05-c\">
    <div class=\"container\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-6 mbr-col-md-12 mbr-col-sm-12\">
                <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-3 align-left display-2\">Product Care and Tips</h3>
                <p class=\"mbr-fonts-style mbr-text align-left display-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                    sollicitudin orci vel risus ultricies semper.</p>
            </div>
        </div>
    </div>
</section>

<section class=\"content6 cid-s0bsm6ACwt\" id=\"content06-4\">
    <div class=\"container\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-6 mbr-col-md-12 img-col mbr-m-auto md-pb mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/background1.jpg"), "html", null, true);
        yield "\" alt=\"\" width=\"651.8163265306123\" height=\"779\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-6 mbr-col-md-12 mbr-col-sm-12\">
                <div class=\"content\">
                    <p class=\"mbr-fonts-style mbr-text align-left mbr-pb-5 display-7\">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Curabitur faucibus lorem sit amet fringilla lobortis. Cras nisl
                        tellus, convallis a tristique sed, efficitur in ipsum. Aliquam elementum, arcu eu tincidunt
                        molestie, urna lorem convallis elit, et vulputate nunc ligula nec leo. Proin placerat id lorem
                        eu lobortis. Mauris molestie nibh eget neque varius posuere. Mauris porttitor aliquet nibh.
                        Morbi at vulputate lacus, vel laoreet erat.
                        <br>
                        <br>Vestibulum viverra lacus ut ante consequat dictum. Cras lacinia est in libero tristique, nec
                        fermentum est dapibus. Pellentesque id mauris lacinia, pellentesque augue ac, fringilla dui.
                        Maecenas eu felis enim. Vestibulum eu pretium mauris, quis commodo nunc. Etiam risus turpis,
                        dignissim quis eros malesuada, ullamcorper sollicitudin purus. Fusce eu blandit ligula. Nam erat
                        nunc, pharetra nec feugiat vel, efficitur ut dui.<br></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"info1 cid-s0bsn70ibR\" id=\"info01-5\">
    <div class=\"container\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-12 mbr-col-md-12 mbr-m-auto mbr-col-sm-12 md-pb\">
                <div class=\"content\">
                    <h4 class=\"mbr-section-subtitle mbr-fonts-style align-center display-4\">GIFT GUIDE</h4>
                    <h3 class=\"mbr-section-title mbr-fonts-style align-center mbr-pb-4 display-2\">Shop All Gifts</h3>
                    <div class=\"mbr-section-btn align-center\"><a class=\"btn btn-lg btn-black display-4\" href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\">Shop</a></div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class=\"amp-shop shop1 cid-s0bsr5G3ha\" id=\"shop01-6\">
    <div class=\"container-fluid\">
        <div class=\"card-deck\">
        
            ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 147, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pag"]) {
            // line 148
            yield "            
  <div class=\"card\">
    <div class=\"card-body\">
    <img src=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["pag"]), "html", null, true);
            yield "\" class=\"card-img-top lunettesPhoto\" alt=\"photo\"><br>
    <strong>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pag"], "nom", [], "any", false, false, false, 152), "html", null, true);
            yield "</strong><br>
    <strong>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pag"], "prixLunettes", [], "any", false, false, false, 153), "html", null, true);
            yield " €</strong>
    </div>
    <br>
    <br>
    <br>
    <div class=\"\">
        <a href=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pag"], "id", [], "any", false, false, false, 159)]), "html", null, true);
            yield "\" class=\"btn btn-success float-right\">
            <i class=\"fas fa-shopping-cart mr-1\"></i>
            Ajouter
        </a>
    </div>
  </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "        </div>
        <div class=\"pagination\">
        ";
        // line 168
        yield $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 168, $this->source); })()));
        yield "
    </div>
    </div>
</section>

<section class=\"features2 cid-s0bsJ2zwJy\" id=\"features02-b\">
    <div class=\"mbr-overlay\"></div>
    <div class=\"container mbr-white\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-6 mbr-col-md-12 mbr-col-sm-12\">
                <h3 class=\"mbr-section-title mbr-fonts-style align-left mbr-pb-4 display-5\">How it Works</h3>
                <div class=\"mbr-text counter-container mbr-fonts-style mbr-pb-1 display-7\">
                    <ol>
                        <li class=\"\">Free shipping and easy returns for orders over \$250</li>
                        <li class=\"\">Intuitive designs made with quality materials</li>
                        <li class=\"\">Customer service you can trust</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"features3 mbr-section cid-s0bt3IU31C\" id=\"features03-d\">
    <div class=\"container\">
        <div class=\"mbr-row mbr-jc-c\">
            <div class=\"mbr-col-lg-6 mbr-pb-5 mbr-col-md-10 mbr-col-sm-12\">
                <h2 class=\"main-title mbr-fonts-style mbr-pb-2 align-center display-2\">Our Features</h2>
            </div>
        </div>
        <div class=\"mbr-row mbr-jc-c\">
            <div class=\"card md-pb mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4\">
                <div class=\"card-wrapper\">
                    <div class=\"card-img\">
                        <amp-img src=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/01.jpg"), "html", null, true);
        yield "\" layout=\"responsive\" width=\"718.0851063829788\" height=\"600\" alt=\"\" class=\"mobirise-loader\">
                            <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        </amp-img>
                    </div>
                    <div class=\"card-box\">
                        <h4 class=\"card-title mbr-fonts-style mbr-pb-1 display-7\">Designers of New York</h4>
                        <p class=\"mbr-text mbr-fonts-style mbr-semibold display-4\">
                            Read more</p>
                    </div>
                </div>
            </div>
            <div class=\"card md-pb mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4\">
                <div class=\"card-wrapper\">
                    <div class=\"card-img\">
                        <amp-img src=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/03.jpg"), "html", null, true);
        yield "\" layout=\"responsive\" width=\"453.6170212765957\" height=\"600\" alt=\"\" class=\"mobirise-loader\">
                            <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        </amp-img>
                    </div>
                    <div class=\"card-box\">
                        <h4 class=\"card-title mbr-fonts-style mbr-pb-1 display-7\">Unique Design</h4>
                        <p class=\"mbr-text mbr-fonts-style mbr-semibold display-4\">
                            Read more</p>
                    </div>
                </div>
            </div>
            <div class=\"card md-pb mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4 last-child\">
                <div class=\"card-wrapper\">
                    <div class=\"card-img\">
                        <amp-img src=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/04.jpg"), "html", null, true);
        yield "\" layout=\"responsive\" width=\"390.9836065573771\" height=\"600\" alt=\"\" class=\"mobirise-loader\">
                            <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        </amp-img>
                    </div>
                    <div class=\"card-box\">
                        <h4 class=\"card-title mbr-fonts-style mbr-pb-1 display-7\">Sunglasses Collection</h4>
                        <p class=\"mbr-text mbr-fonts-style mbr-semibold display-4\">
                            Read more<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"content3 cid-s0bsiqoLOf\" id=\"content03-3\">
    <div class=\"container\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-7 mbr-col-md-12  mbr-m-auto mbr-col-sm-12 md-pb\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/02.jpg"), "html", null, true);
        yield "\" alt=\"\" width=\"766\" height=\"766\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-5 mbr-col-md-12 mbr-m-auto mbr-col-sm-12\">
                <div class=\"content\">
                    <h1 class=\"mbr-section-title mbr-fonts-style align-left mbr-pb-2 display-2\">Your Everyday Sunglasses</h1>
                    <p class=\"mbr-fonts-style mbr-text align-left mbr-pb-5  display-7\">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Nunc commodo ligula eget ex accumsan, in ultricies tellus vehicula
                    </p>
                    <div class=\"mbr-section-btn align-left\"><a class=\"btn btn-md btn-warning-outline display-4\" href=\"#\"><span class=\"mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" width=\"19\" height=\"19\"><path d=\"M24 11l-6.7 6.7-1.4-1.4 4.3-4.3H0v-2h20.2l-4.3-4.3 1.4-1.4L24 11z\"></path></svg></span>Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"clients1 cid-s0bsyNmprb\" id=\"clients01-9\">
    <div class=\"container\">
        <div class=\"mbr-row mbr-jc-c\">
            <div class=\"mbr-col-lg-12 mbr-col-md-12 mbr-col-sm-12\">
                <h3 class=\"mbr-section-subtitle mbr-black mbr-fonts-style mbr-pb-5 align-left display-5\">Seen on
                    Press</h3>
                <p class=\"mbr-fonts-style mbr-text align-left mbr-pb-3 display-5\">\"Lorem ipsum dolor sit amet consectetur adipiscing
                    commodo suscipit\"</p>
            </div>

            <div class=\"line\"></div>

            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/1.png"), "html", null, true);
        yield "\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/2.png"), "html", null, true);
        yield "\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/3.png"), "html", null, true);
        yield "\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/4.png"), "html", null, true);
        yield "\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/5.png"), "html", null, true);
        yield "\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/1.png"), "html", null, true);
        yield "\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/2.png"), "html", null, true);
        yield "\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/3.png"), "html", null, true);
        yield "\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/4.png"), "html", null, true);
        yield "\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/img/5.png"), "html", null, true);
        yield "\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"form form1 cid-s0bsDs1FSW\" id=\"form01-a\">
    <div class=\"container\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-12 mbr-col-md-12 mbr-pb-5 mbr-col-sm-12\">
                <h2 class=\"mbr-section-title mbr-fonts-style mbr-pb-3 align-left display-2\">Contact us</h2>
                <h3 class=\"mbr-fonts-style mbr-subtitle align-left display-7\">Let us know how we can help you.</h3>
            </div>
            <div class=\"mbr-col-lg-6 mbr-col-md-12 mbr-col-sm-12 md-pb mbr-form\" data-form-type=\"formoid\">
                <!--Formbuilder Form-->
            ";
        // line 434
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 434, $this->source); })()), 'form_start');
        yield "
            ";
        // line 435
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()), 'form_end');
        yield "
                <!--Formbuilder Form-->
            </div>

            <div class=\"mbr-col-lg-3 mbr-col-md-12 mbr-col-sm-12\">
                <div class=\"item\">
                    <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-1 align-left display-7\"><strong>Information&nbsp;</strong></h3>
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">support@yoursite.com</p>
                </div>

                <div class=\"item\">
                    <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-1 align-left display-7\"><strong>Customer service</strong></h3>
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">support@yoursite.com</p>
                </div>

                <div class=\"item\">
                    <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-1 align-left display-7\"><strong>Sales</strong></h3>
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">support@yoursite.com</p>
                </div>

                <div class=\"item\">
                    <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-1 align-left display-7\"><strong>Press</strong></h3>
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">support@yoursite.com</p>
                </div>

                <div class=\"item\">
                    <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-1 align-left display-7\"><strong>Follow us</strong></h3>
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Instagram
                        <br>Pinterest
                        <br>Twitter
                        <br>Facebook</p>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 560
        yield "<amp-user-notification class=\"display-7\" id=\"amp-cookies-notification\" style=\"color:#424a4d; background:rgba(234, 239, 241, 0.99); padding: 10px 5%; display:inline-block; font-size:inherit; text-align: center;\" layout=\"nodisplay\">We use cookies to give you the best experience. Read our <a style=\"color: #424a4d; text-decoration: underline;\" href=\"privacy.html\">cookie policy</a>.<button class=\"btn btn-sm btn-primary display-7\" on=\"tap:amp-cookies-notification.dismiss,amp-cookies-notification.hide\" style=\"display: inline-block; cursor: pointer; margin-left: 10px; font-size:inherit;\">Agree</button></amp-user-notification>
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
        return "home/index.html.twig";
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
        return array (  658 => 560,  618 => 435,  614 => 434,  588 => 411,  573 => 399,  558 => 387,  543 => 375,  528 => 363,  513 => 351,  498 => 339,  483 => 327,  468 => 315,  453 => 303,  412 => 265,  384 => 240,  362 => 221,  340 => 202,  303 => 168,  299 => 166,  286 => 159,  277 => 153,  273 => 152,  269 => 151,  264 => 148,  260 => 147,  245 => 135,  205 => 98,  177 => 73,  166 => 65,  128 => 30,  119 => 24,  102 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home - Lunettes{% endblock %}

{% block body %}
    {# <h1>Super Lunettes</h1>
    <hr>
    <p>Dédaignant de fuir lorsque tout fuyait autour de lui des regards sanglants. Autrefois les oracles de celle qui était assise sur un banc d'où nous vient la croyance à l'utilité publique était déclarée depuis dix-huit mois, répond le plus juste. Détournons-nous, pour recueillir la succession d'une demoiselle de votre pays... Avouons donc, comme deux amis. Volée à une famille distincte du même ordre. Aurai-je le loisir et le temps ne nous durait pas, de vous servir de père. Excellent dans ce genre d'expéditions. Vaincu par la terreur exercée sur la société.</p> #}
    
 
  
  </head>
<body>

<section class=\"header1 cid-s0bsc2KgEB\" id=\"header01-1\">
    <div class=\"container-fluid mbr-white\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-5 mbr-col-md-12 mbr-m-auto mbr-col-sm-12 md-pb\">
                <div class=\"content\">
                    
                    <h1 class=\"mbr-section-title mbr-fonts-style align-left mbr-pb-2 display-1\">Sunglasses Shop</h1>
                    <p class=\"mbr-fonts-style mbr-text align-left mbr-pb-5  display-7\">Unique glasses for a new era
                        of fashion.</p>
                    <div class=\"mbr-section-btn align-left\"><a class=\"btn btn-md btn-white-outline display-4\" href=\"{{ path('nouveautes_lunettes')}}\"><span class=\"mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" width=\"19\" height=\"19\"><path d=\"M24 11l-6.7 6.7-1.4-1.4 4.3-4.3H0v-2h20.2l-4.3-4.3 1.4-1.4L24 11z\"></path></svg></span>Discover</a>
                    </div>
                </div>
            </div>
            <div class=\"mbr-col-lg-7 mbr-col-md-12 img-col mbr-m-auto mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"{{ asset('libs/img/01.jpg') }}\" alt=\"\" width=\"1099.8670212765958\" height=\"919\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"content1 cid-s0btjSrjzP\" id=\"content01-e\"> 
    <div class=\"container\">
        <div class=\"mbr-row mbr-jc-c\">
            <div class=\"mbr-col-lg-8 mbr-col-md-12 mbr-col-sm-12\">
                <h3 class=\"mbr-section-subtitle mbr-black mbr-fonts-style mbr-pb-1 align-center display-5\">
                    Learn more about our brand</h3>
                <p class=\"mbr-fonts-style mbr-text align-center display-5\">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo suscipit vulputate.
                    Maecenas rutrum mollis arcu, at condimentum lorem <a href=\"#\" class=\"text-black\">@mobirise</a>.</p>
            </div>
        </div>
    </div>
</section>

<section class=\"features1 cid-s0bsg6BUXn\" id=\"features01-2\">
    <div class=\"container-fluid mbr-white\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-6 mbr-col-md-6 col1 mbr-m-auto mbr-col-sm-12\">
                <div class=\"mbr-overlay\"></div>
                <div class=\"content\">
                    <h1 class=\"mbr-section-title mbr-fonts-style align-left mbr-pb-2 display-2\"><strong>Women</strong></h1>
                    <div class=\"mbr-section-btn mbr-pt-5 align-left\"><a class=\"btn btn-md btn-white-outline display-4\" href=\"{{ path('femmes') }}\"><span class=\"mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" width=\"19\" height=\"19\"><path d=\"M24 11l-6.7 6.7-1.4-1.4 4.3-4.3H0v-2h20.2l-4.3-4.3 1.4-1.4L24 11z\"></path></svg></span>Shop Now</a>
                    </div>
                </div>
            </div>
            <div class=\"mbr-col-lg-6 mbr-col-md-6 col2 mbr-m-auto mbr-col-sm-12\">
                <div class=\"mbr-overlay\"></div>
                <div class=\"content\">
                    <h1 class=\"mbr-section-title mbr-fonts-style align-left mbr-pb-2 display-2\"><strong>Men</strong></h1>
                    <div class=\"mbr-section-btn mbr-pt-5 align-left\"><a class=\"btn btn-md btn-white-outline display-4\" href=\"{{ path('hommes') }}\"><span class=\"mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" width=\"19\" height=\"19\"><path d=\"M24 11l-6.7 6.7-1.4-1.4 4.3-4.3H0v-2h20.2l-4.3-4.3 1.4-1.4L24 11z\"></path></svg></span>Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"content5 cid-s0bsQkplRB\" id=\"content05-c\">
    <div class=\"container\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-6 mbr-col-md-12 mbr-col-sm-12\">
                <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-3 align-left display-2\">Product Care and Tips</h3>
                <p class=\"mbr-fonts-style mbr-text align-left display-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                    sollicitudin orci vel risus ultricies semper.</p>
            </div>
        </div>
    </div>
</section>

<section class=\"content6 cid-s0bsm6ACwt\" id=\"content06-4\">
    <div class=\"container\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-6 mbr-col-md-12 img-col mbr-m-auto md-pb mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"{{ asset(\"libs/img/background1.jpg\") }}\" alt=\"\" width=\"651.8163265306123\" height=\"779\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-6 mbr-col-md-12 mbr-col-sm-12\">
                <div class=\"content\">
                    <p class=\"mbr-fonts-style mbr-text align-left mbr-pb-5 display-7\">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Curabitur faucibus lorem sit amet fringilla lobortis. Cras nisl
                        tellus, convallis a tristique sed, efficitur in ipsum. Aliquam elementum, arcu eu tincidunt
                        molestie, urna lorem convallis elit, et vulputate nunc ligula nec leo. Proin placerat id lorem
                        eu lobortis. Mauris molestie nibh eget neque varius posuere. Mauris porttitor aliquet nibh.
                        Morbi at vulputate lacus, vel laoreet erat.
                        <br>
                        <br>Vestibulum viverra lacus ut ante consequat dictum. Cras lacinia est in libero tristique, nec
                        fermentum est dapibus. Pellentesque id mauris lacinia, pellentesque augue ac, fringilla dui.
                        Maecenas eu felis enim. Vestibulum eu pretium mauris, quis commodo nunc. Etiam risus turpis,
                        dignissim quis eros malesuada, ullamcorper sollicitudin purus. Fusce eu blandit ligula. Nam erat
                        nunc, pharetra nec feugiat vel, efficitur ut dui.<br></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"info1 cid-s0bsn70ibR\" id=\"info01-5\">
    <div class=\"container\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-12 mbr-col-md-12 mbr-m-auto mbr-col-sm-12 md-pb\">
                <div class=\"content\">
                    <h4 class=\"mbr-section-subtitle mbr-fonts-style align-center display-4\">GIFT GUIDE</h4>
                    <h3 class=\"mbr-section-title mbr-fonts-style align-center mbr-pb-4 display-2\">Shop All Gifts</h3>
                    <div class=\"mbr-section-btn align-center\"><a class=\"btn btn-lg btn-black display-4\" href=\"{{ path('cart_index') }}\">Shop</a></div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class=\"amp-shop shop1 cid-s0bsr5G3ha\" id=\"shop01-6\">
    <div class=\"container-fluid\">
        <div class=\"card-deck\">
        
            {% for pag in pagination %}
            
  <div class=\"card\">
    <div class=\"card-body\">
    <img src=\"{{ vich_uploader_asset(pag) }}\" class=\"card-img-top lunettesPhoto\" alt=\"photo\"><br>
    <strong>{{ pag.nom }}</strong><br>
    <strong>{{ pag.prixLunettes}} €</strong>
    </div>
    <br>
    <br>
    <br>
    <div class=\"\">
        <a href=\"{{ path('cart_add', {'id': pag.id}) }}\" class=\"btn btn-success float-right\">
            <i class=\"fas fa-shopping-cart mr-1\"></i>
            Ajouter
        </a>
    </div>
  </div>
            {% endfor %}
        </div>
        <div class=\"pagination\">
        {{ knp_pagination_render(pagination) }}
    </div>
    </div>
</section>

<section class=\"features2 cid-s0bsJ2zwJy\" id=\"features02-b\">
    <div class=\"mbr-overlay\"></div>
    <div class=\"container mbr-white\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-6 mbr-col-md-12 mbr-col-sm-12\">
                <h3 class=\"mbr-section-title mbr-fonts-style align-left mbr-pb-4 display-5\">How it Works</h3>
                <div class=\"mbr-text counter-container mbr-fonts-style mbr-pb-1 display-7\">
                    <ol>
                        <li class=\"\">Free shipping and easy returns for orders over \$250</li>
                        <li class=\"\">Intuitive designs made with quality materials</li>
                        <li class=\"\">Customer service you can trust</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"features3 mbr-section cid-s0bt3IU31C\" id=\"features03-d\">
    <div class=\"container\">
        <div class=\"mbr-row mbr-jc-c\">
            <div class=\"mbr-col-lg-6 mbr-pb-5 mbr-col-md-10 mbr-col-sm-12\">
                <h2 class=\"main-title mbr-fonts-style mbr-pb-2 align-center display-2\">Our Features</h2>
            </div>
        </div>
        <div class=\"mbr-row mbr-jc-c\">
            <div class=\"card md-pb mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4\">
                <div class=\"card-wrapper\">
                    <div class=\"card-img\">
                        <amp-img src=\"{{ asset(\"libs/img/01.jpg\") }}\" layout=\"responsive\" width=\"718.0851063829788\" height=\"600\" alt=\"\" class=\"mobirise-loader\">
                            <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        </amp-img>
                    </div>
                    <div class=\"card-box\">
                        <h4 class=\"card-title mbr-fonts-style mbr-pb-1 display-7\">Designers of New York</h4>
                        <p class=\"mbr-text mbr-fonts-style mbr-semibold display-4\">
                            Read more</p>
                    </div>
                </div>
            </div>
            <div class=\"card md-pb mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4\">
                <div class=\"card-wrapper\">
                    <div class=\"card-img\">
                        <amp-img src=\"{{ asset(\"libs/img/03.jpg\") }}\" layout=\"responsive\" width=\"453.6170212765957\" height=\"600\" alt=\"\" class=\"mobirise-loader\">
                            <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        </amp-img>
                    </div>
                    <div class=\"card-box\">
                        <h4 class=\"card-title mbr-fonts-style mbr-pb-1 display-7\">Unique Design</h4>
                        <p class=\"mbr-text mbr-fonts-style mbr-semibold display-4\">
                            Read more</p>
                    </div>
                </div>
            </div>
            <div class=\"card md-pb mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4 last-child\">
                <div class=\"card-wrapper\">
                    <div class=\"card-img\">
                        <amp-img src=\"{{ asset(\"libs/img/04.jpg\") }}\" layout=\"responsive\" width=\"390.9836065573771\" height=\"600\" alt=\"\" class=\"mobirise-loader\">
                            <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        </amp-img>
                    </div>
                    <div class=\"card-box\">
                        <h4 class=\"card-title mbr-fonts-style mbr-pb-1 display-7\">Sunglasses Collection</h4>
                        <p class=\"mbr-text mbr-fonts-style mbr-semibold display-4\">
                            Read more<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"content3 cid-s0bsiqoLOf\" id=\"content03-3\">
    <div class=\"container\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-7 mbr-col-md-12  mbr-m-auto mbr-col-sm-12 md-pb\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"{{ asset(\"libs/img/02.jpg\") }}\" alt=\"\" width=\"766\" height=\"766\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-5 mbr-col-md-12 mbr-m-auto mbr-col-sm-12\">
                <div class=\"content\">
                    <h1 class=\"mbr-section-title mbr-fonts-style align-left mbr-pb-2 display-2\">Your Everyday Sunglasses</h1>
                    <p class=\"mbr-fonts-style mbr-text align-left mbr-pb-5  display-7\">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Nunc commodo ligula eget ex accumsan, in ultricies tellus vehicula
                    </p>
                    <div class=\"mbr-section-btn align-left\"><a class=\"btn btn-md btn-warning-outline display-4\" href=\"#\"><span class=\"mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" width=\"19\" height=\"19\"><path d=\"M24 11l-6.7 6.7-1.4-1.4 4.3-4.3H0v-2h20.2l-4.3-4.3 1.4-1.4L24 11z\"></path></svg></span>Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"clients1 cid-s0bsyNmprb\" id=\"clients01-9\">
    <div class=\"container\">
        <div class=\"mbr-row mbr-jc-c\">
            <div class=\"mbr-col-lg-12 mbr-col-md-12 mbr-col-sm-12\">
                <h3 class=\"mbr-section-subtitle mbr-black mbr-fonts-style mbr-pb-5 align-left display-5\">Seen on
                    Press</h3>
                <p class=\"mbr-fonts-style mbr-text align-left mbr-pb-3 display-5\">\"Lorem ipsum dolor sit amet consectetur adipiscing
                    commodo suscipit\"</p>
            </div>

            <div class=\"line\"></div>

            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"{{ asset(\"libs/img/1.png\") }}\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"{{ asset(\"libs/img/2.png\") }}\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"{{ asset(\"libs/img/3.png\") }}\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"{{ asset(\"libs/img/4.png\") }}\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"{{ asset(\"libs/img/5.png\") }}\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"{{ asset(\"libs/img/1.png\") }}\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"{{ asset(\"libs/img/2.png\") }}\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"{{ asset(\"libs/img/3.png\") }}\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"{{ asset(\"libs/img/4.png\") }}\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
            <div class=\"mbr-col-lg-1 mbr-col-md-3 mbr-col-sm-12\">
                <div class=\"img-wrapper\">
                    <amp-img src=\"{{ asset(\"libs/img/5.png\") }}\" alt=\"\" width=\"104.39999999999999\" height=\"87\" layout=\"responsive\" class=\"mobirise-loader mbr-m-auto align-center\">
                        <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    </amp-img>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"form form1 cid-s0bsDs1FSW\" id=\"form01-a\">
    <div class=\"container\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-12 mbr-col-md-12 mbr-pb-5 mbr-col-sm-12\">
                <h2 class=\"mbr-section-title mbr-fonts-style mbr-pb-3 align-left display-2\">Contact us</h2>
                <h3 class=\"mbr-fonts-style mbr-subtitle align-left display-7\">Let us know how we can help you.</h3>
            </div>
            <div class=\"mbr-col-lg-6 mbr-col-md-12 mbr-col-sm-12 md-pb mbr-form\" data-form-type=\"formoid\">
                <!--Formbuilder Form-->
            {{ form_start(form) }}
            {{ form_end(form) }}
                <!--Formbuilder Form-->
            </div>

            <div class=\"mbr-col-lg-3 mbr-col-md-12 mbr-col-sm-12\">
                <div class=\"item\">
                    <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-1 align-left display-7\"><strong>Information&nbsp;</strong></h3>
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">support@yoursite.com</p>
                </div>

                <div class=\"item\">
                    <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-1 align-left display-7\"><strong>Customer service</strong></h3>
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">support@yoursite.com</p>
                </div>

                <div class=\"item\">
                    <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-1 align-left display-7\"><strong>Sales</strong></h3>
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">support@yoursite.com</p>
                </div>

                <div class=\"item\">
                    <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-1 align-left display-7\"><strong>Press</strong></h3>
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">support@yoursite.com</p>
                </div>

                <div class=\"item\">
                    <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-1 align-left display-7\"><strong>Follow us</strong></h3>
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Instagram
                        <br>Pinterest
                        <br>Twitter
                        <br>Facebook</p>
                </div>
            </div>
        </div>
    </div>
</section>

{# <section class=\"map cid-s0bsuTlESA\" id=\"map01-8\">
    <div class=\"container-fluid\">
        <div class=\"mbr-row mbr-jc-c\">
            <div class=\"map-title mbr-col-sm-12 mbr-col-md-12 align-center\">
            </div>
            {# <div class=\"google-map\"><amp-iframe src=\"https://www.google.com/maps/embed/v1/place?key=AIzaSyAEIpgj38KyLFELm2bK9Y7krBkz1K-cMq8&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw\" height=\"400\" layout=\"fill\" sandbox=\"allow-scripts allow-same-origin                                 allow-popups\" frameborder=\"0\" class=\"mobirise-loader\">
                <div placeholder=\"\" class=\"placeholder\">
                                <div class=\"mobirise-spinner\">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
            </amp-iframe></div> 
        </div>
    </div>
</section> 

 <section class=\"form footer2 cid-s0bsukEenN\" id=\"footer02-7\">
    <div class=\"container\">
        <div class=\"mbr-row\">
            <div class=\"mbr-col-lg-2 mbr-col-md-4 mbr-col-sm-12 md-pb\">
                <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-2 align-left display-4\"><strong>Shop</strong></h3>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">New Arrivals</p>
                </div>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Best Sellers</p>
                </div>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Gift Guide</p>
                </div>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Sales</p>
                </div>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Visit Us</p>
                </div>
            </div>
            <div class=\"mbr-col-lg-2 mbr-col-md-4 mbr-col-sm-12 md-pb\">
                <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-2 align-left display-4\"><strong>Explore</strong></h3>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">About Us</p>
                </div>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Collaborations</p>
                </div>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Product Care</p>
                </div>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Stories</p>
                </div>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Lookbooks</p>
                </div>
            </div>
            <div class=\"mbr-col-lg-2 mbr-col-md-4 mbr-col-sm-12 md-pb\">
                <h3 class=\"mbr-section-subtitle mbr-fonts-style mbr-pb-2 align-left display-4\"><strong>More</strong></h3>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">My Account</p>
                </div>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Custom Orders</p>
                </div>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Size Guide</p>
                </div>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Careers</p>
                </div>
                <div class=\"item\">
                    <p class=\"mbr-fonts-style mbr-text align-left display-4\">Contact</p>
                </div>
            </div>
            <div class=\"mbr-col-lg-3 mbr-col-md-12 mbr-col-sm-12\">
            </div>
            <div class=\"mbr-col-lg-3 mbr-col-md-12 mbr-col-sm-12 mbr-form\" data-form-type=\"formoid\">
                <div class=\"wrapper\" data-form-type=\"formoid\">
                    <h3 class=\"mbr-section-title mbr-black mbr-fonts-style mbr-pb-2 align-left display-4\">Exclusive
                        benefits
                    </h3>
                    <p class=\"mbr-fonts-style mbr-form-text mbr-pt-3 align-left display-4\">Apply for our free membership to receive
                        exclusive deals, news, and events.</p>
                </div>
            </div>
        </div>
    </div>
</section> #}
<amp-user-notification class=\"display-7\" id=\"amp-cookies-notification\" style=\"color:#424a4d; background:rgba(234, 239, 241, 0.99); padding: 10px 5%; display:inline-block; font-size:inherit; text-align: center;\" layout=\"nodisplay\">We use cookies to give you the best experience. Read our <a style=\"color: #424a4d; text-decoration: underline;\" href=\"privacy.html\">cookie policy</a>.<button class=\"btn btn-sm btn-primary display-7\" on=\"tap:amp-cookies-notification.dismiss,amp-cookies-notification.hide\" style=\"display: inline-block; cursor: pointer; margin-left: 10px; font-size:inherit;\">Agree</button></amp-user-notification>
{% endblock %}
", "home/index.html.twig", "D:\\Github\\Groupe6\\symfony\\projetLunettes\\templates\\home\\index.html.twig");
    }
}
