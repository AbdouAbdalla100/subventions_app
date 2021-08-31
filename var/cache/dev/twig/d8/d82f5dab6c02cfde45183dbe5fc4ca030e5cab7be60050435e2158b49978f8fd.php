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

/* Frontend/accueil/index.html.twig */
class __TwigTemplate_768e443fff295f9ba7a04016692de67e7966325ce6ef62c70e40c207003f18dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontend/accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontend/accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Frontend/accueil/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
    ";
        // line 6
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "\t<!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
        \t<img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" />
        </a>
    </div>
\t<![endif]-->
    <!--[if lt IE 9]>
   \t\t<script type=\"text/javascript\" src=\"js/html5.js\"></script>
        <link rel=\"stylesheet\" href=\"css/ie.css\" type=\"text/css\" media=\"screen\">
\t<![endif]-->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/css/grid.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "   
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/js/jquery-1.6.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/js/cufon-yui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/js/cufon-replace.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/js/NewsGoth_400.font.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/js/NewsGoth_700.font.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/js/NewsGoth_Lt_BT_italic_400.font.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/js/Vegur_400.font.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/js/FF-cash.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/js/jquery.featureCarousel.js"), "html", null, true);
        echo "\"></script>     
    <script type=\"text/javascript\">
      \$(document).ready(function() {
        \$(\"#carousel\").featureCarousel({
\t\t\tautoPlay:7000,
\t\t\ttrackerIndividual:false,
\t\t\ttrackerSummation:false,
\t\t\ttopPadding:50,
\t\t\tsmallFeatureWidth:.9,
\t\t\tsmallFeatureHeight:.9,
\t\t\tsidePadding:0,
\t\t\tsmallFeatureOffset:0
\t\t});
      });
    </script> 
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "
    <div id=\"page1\">
        <div class=\"extra\">
            ";
        // line 59
        echo "            <header>
                <div class=\"row-top\">
                    <div class=\"main\">
                        <div class=\"wrapper\">
                            <h1><a href=\"index.html\">Subvention</a></h1>
                            <form id=\"search-form\" method=\"post\" enctype=\"multipart/form-data\">
                            <fieldset>\t
                                <div class=\"search-field\">
                                    <input name=\"search\" type=\"text\" value=\"Search...\" onBlur=\"if(this.value=='') this.value='Search...'\" onFocus=\"if(this.value =='Search...' ) this.value=''\" />
                                    <a class=\"search-button\" href=\"#\" onClick=\"document.getElementById('search-form').submit()\"></a>\t
                                </div>\t\t\t\t\t\t
                            </fieldset>
                        </form>
                        </div>
                    </div>
                </div>
                <div class=\"menu-row\">
                    <div class=\"menu-bg\">
                        <div class=\"main\">
                            <nav class=\"indent-left\">
                                <ul class=\"menu wrapper\">
                                    <li class=\"active\"><a href=\"index.html\">Home page</a></li>
                                    <li><a href=\"company.html\">S'inscrire</a></li>
                                    <li><a href=\"services.html\">Visiter les Annonces</a></li>
                                    ";
        // line 84
        echo "                                    <li><a href=\"contact.html\">Contacter Nous</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class=\"row-bot\">
                    <div class=\"center-shadow\">
                        <div class=\"carousel-container\">
                        <div id=\"carousel\">
                            <div class=\"carousel-feature\">
                            <a href=\"index.html.twig\"><img class=\"carousel-image\" alt=\"\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/images/subvention1.png"), "html", null, true);
        echo "\"></a>                          
                            </div>
                            <div class=\"carousel-feature\">
                            <a href=\"#\"><img class=\"carousel-image\" alt=\"\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/images/subvention3.jpg"), "html", null, true);
        echo "\"></a>
                            </div>
                            <div class=\"carousel-feature\">
                            <a href=\"#\"><img class=\"carousel-image\" alt=\"\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/images/subvention6.jpg"), "html", null, true);
        echo "\"></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <!--==============================content================================-->
            <section id=\"content\"><div class=\"ic\">More Website Templates @ TemplateMonster.com. December10, 2011!</div>
                <div class=\"main\">
                    <div class=\"container_12\">
                        <div class=\"wrapper\">
                            <article class=\"grid_8\">
                            
                            </article>
                            <article class=\"grid_4\">
                               
                            </article>
                        </div>
                    </div>
                </div>
                <div class=\"block\"></div>
            </section>
        </div>
        
        <!--==============================footer=================================-->
        <footer>
            <div class=\"padding\">
                <div class=\"main\">
                    <div class=\"container_12\">
                        <div class=\"wrapper\">
                            <article class=\"grid_8\">
                                <h4>Contact Form:</h4>
                                <form id=\"contact-form\" method=\"post\">
                                    <fieldset>
                                        <label><input name=\"email\" value=\"Email\" onBlur=\"if(this.value=='') this.value='Email'\" onFocus=\"if(this.value =='Email' ) this.value=''\" /></label>
                                        <label><input name=\"subject\" value=\"Subject\" onBlur=\"if(this.value=='') this.value='Subject'\" onFocus=\"if(this.value =='Subject' ) this.value=''\" /></label>
                                        <textarea onBlur=\"if(this.value=='') this.value='Message'\" onFocus=\"if(this.value =='Message' ) this.value=''\">Message</textarea>
                                        <div class=\"buttons\">
                                            <a href=\"#\" onClick=\"document.getElementById('contact-form').reset()\">Clear</a>
                                            <a href=\"#\" onClick=\"document.getElementById('contact-form').submit()\">Send</a>
                                        </div>\t\t\t\t\t\t\t\t\t\t\t
                                    </fieldset>           
                                </form>
                            </article>
                            <article class=\"grid_4\">
                                <h4 class=\"indent-bot\">Link to Us:</h4>
                                <ul class=\"list-services border-bot img-indent-bot\">
                                    <li><a href=\"#\">Facebook</a></li>
                                    <li><a class=\"item-1\" href=\"#\">Twitter</a></li>
                                    <li><a class=\"item-2\" href=\"#\">Picassa</a></li>
                                    <li><a class=\"item-3\" href=\"#\">You Tube</a></li>
                                </ul>
                                <p class=\"p1\">Consulting.com &copy; 2011 </p>
                                <p class=\"p1\">Website Template by <a class=\"link\" target=\"_blank\" href=\"http://store.templatemonster.com?aff=netsib1\" rel=\"nofollow\">TemplateMonster.com</a></p>
                                ";
        // line 158
        echo "                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script type=\"text/javascript\"> Cufon.now(); </script>



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontend/accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 158,  274 => 101,  268 => 98,  262 => 95,  249 => 84,  223 => 59,  218 => 55,  208 => 54,  182 => 21,  178 => 20,  174 => 19,  170 => 18,  166 => 17,  162 => 16,  158 => 15,  154 => 14,  150 => 13,  138 => 12,  126 => 9,  122 => 8,  118 => 7,  106 => 6,  82 => 37,  80 => 12,  77 => 11,  74 => 6,  71 => 4,  61 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends '@EasyAdmin/page/content.html.twig' %} #}
{% extends 'base.html.twig' %}
{% block head %}

    {# <meta charset=\"utf-8\"> #}
    {% block stylesheets %} 
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/reset.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/grid.css') }}\">
    {% endblock %}

    {% block javascripts %}   
    <script src=\"{{ asset('bundles/js/jquery-1.6.3.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/js/cufon-yui.js') }}\"></script>
    <script src=\"{{ asset('bundles/js/cufon-replace.js') }}\"></script>
    <script src=\"{{ asset('bundles/js/NewsGoth_400.font.js') }}\"></script>
\t<script src=\"{{ asset('bundles/js/NewsGoth_700.font.js') }}\"></script>
    <script src=\"{{ asset('bundles/js/NewsGoth_Lt_BT_italic_400.font.js') }}\"></script>
    <script src=\"{{ asset('bundles/js/Vegur_400.font.js') }}\"></script> 
    <script src=\"{{ asset('bundles/js/FF-cash.js') }}\"></script>
    <script src=\"{{ asset('bundles/js/jquery.featureCarousel.js') }}\"></script>     
    <script type=\"text/javascript\">
      \$(document).ready(function() {
        \$(\"#carousel\").featureCarousel({
\t\t\tautoPlay:7000,
\t\t\ttrackerIndividual:false,
\t\t\ttrackerSummation:false,
\t\t\ttopPadding:50,
\t\t\tsmallFeatureWidth:.9,
\t\t\tsmallFeatureHeight:.9,
\t\t\tsidePadding:0,
\t\t\tsmallFeatureOffset:0
\t\t});
      });
    </script> 
    {% endblock %}
\t<!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
        \t<img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" />
        </a>
    </div>
\t<![endif]-->
    <!--[if lt IE 9]>
   \t\t<script type=\"text/javascript\" src=\"js/html5.js\"></script>
        <link rel=\"stylesheet\" href=\"css/ie.css\" type=\"text/css\" media=\"screen\">
\t<![endif]-->



{% endblock head %}


{% block body %}

    <div id=\"page1\">
        <div class=\"extra\">
            {# <!--==============================header=================================--> #}
            <header>
                <div class=\"row-top\">
                    <div class=\"main\">
                        <div class=\"wrapper\">
                            <h1><a href=\"index.html\">Subvention</a></h1>
                            <form id=\"search-form\" method=\"post\" enctype=\"multipart/form-data\">
                            <fieldset>\t
                                <div class=\"search-field\">
                                    <input name=\"search\" type=\"text\" value=\"Search...\" onBlur=\"if(this.value=='') this.value='Search...'\" onFocus=\"if(this.value =='Search...' ) this.value=''\" />
                                    <a class=\"search-button\" href=\"#\" onClick=\"document.getElementById('search-form').submit()\"></a>\t
                                </div>\t\t\t\t\t\t
                            </fieldset>
                        </form>
                        </div>
                    </div>
                </div>
                <div class=\"menu-row\">
                    <div class=\"menu-bg\">
                        <div class=\"main\">
                            <nav class=\"indent-left\">
                                <ul class=\"menu wrapper\">
                                    <li class=\"active\"><a href=\"index.html\">Home page</a></li>
                                    <li><a href=\"company.html\">S'inscrire</a></li>
                                    <li><a href=\"services.html\">Visiter les Annonces</a></li>
                                    {# <li><a href=\"projects.html\">our projects</a></li> #}
                                    <li><a href=\"contact.html\">Contacter Nous</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class=\"row-bot\">
                    <div class=\"center-shadow\">
                        <div class=\"carousel-container\">
                        <div id=\"carousel\">
                            <div class=\"carousel-feature\">
                            <a href=\"index.html.twig\"><img class=\"carousel-image\" alt=\"\" src=\"{{ asset('bundles/images/subvention1.png') }}\"></a>                          
                            </div>
                            <div class=\"carousel-feature\">
                            <a href=\"#\"><img class=\"carousel-image\" alt=\"\" src=\"{{ asset('bundles/images/subvention3.jpg') }}\"></a>
                            </div>
                            <div class=\"carousel-feature\">
                            <a href=\"#\"><img class=\"carousel-image\" alt=\"\" src=\"{{ asset('bundles/images/subvention6.jpg') }}\"></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <!--==============================content================================-->
            <section id=\"content\"><div class=\"ic\">More Website Templates @ TemplateMonster.com. December10, 2011!</div>
                <div class=\"main\">
                    <div class=\"container_12\">
                        <div class=\"wrapper\">
                            <article class=\"grid_8\">
                            
                            </article>
                            <article class=\"grid_4\">
                               
                            </article>
                        </div>
                    </div>
                </div>
                <div class=\"block\"></div>
            </section>
        </div>
        
        <!--==============================footer=================================-->
        <footer>
            <div class=\"padding\">
                <div class=\"main\">
                    <div class=\"container_12\">
                        <div class=\"wrapper\">
                            <article class=\"grid_8\">
                                <h4>Contact Form:</h4>
                                <form id=\"contact-form\" method=\"post\">
                                    <fieldset>
                                        <label><input name=\"email\" value=\"Email\" onBlur=\"if(this.value=='') this.value='Email'\" onFocus=\"if(this.value =='Email' ) this.value=''\" /></label>
                                        <label><input name=\"subject\" value=\"Subject\" onBlur=\"if(this.value=='') this.value='Subject'\" onFocus=\"if(this.value =='Subject' ) this.value=''\" /></label>
                                        <textarea onBlur=\"if(this.value=='') this.value='Message'\" onFocus=\"if(this.value =='Message' ) this.value=''\">Message</textarea>
                                        <div class=\"buttons\">
                                            <a href=\"#\" onClick=\"document.getElementById('contact-form').reset()\">Clear</a>
                                            <a href=\"#\" onClick=\"document.getElementById('contact-form').submit()\">Send</a>
                                        </div>\t\t\t\t\t\t\t\t\t\t\t
                                    </fieldset>           
                                </form>
                            </article>
                            <article class=\"grid_4\">
                                <h4 class=\"indent-bot\">Link to Us:</h4>
                                <ul class=\"list-services border-bot img-indent-bot\">
                                    <li><a href=\"#\">Facebook</a></li>
                                    <li><a class=\"item-1\" href=\"#\">Twitter</a></li>
                                    <li><a class=\"item-2\" href=\"#\">Picassa</a></li>
                                    <li><a class=\"item-3\" href=\"#\">You Tube</a></li>
                                </ul>
                                <p class=\"p1\">Consulting.com &copy; 2011 </p>
                                <p class=\"p1\">Website Template by <a class=\"link\" target=\"_blank\" href=\"http://store.templatemonster.com?aff=netsib1\" rel=\"nofollow\">TemplateMonster.com</a></p>
                                {# <!-- {%FOOTER_LINK} --> #}
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script type=\"text/javascript\"> Cufon.now(); </script>



    {# <form method=\"POST\" action=\"{{path('admin')}}\">
        <div class=\"header\">
            <img name = \"accueil\" src = \"{{ asset('imges/accueil.png') }}\">
            <a href = \"#\"> <img name = \"inscription\" src = \"imges/insc.png\"> inscrire </a>
            <a href = \"#\"> <img name = \"inscription\" src = \"imges/org.png\"> inscrire </a>
            <a href = \"#\"> <img name = \"inscription\" src = \"imges/annonce.png\"> Visiter les Annonces </a>
        </div>
        <div class=\"container\">
        </div>
        <div class=\"footer\">
        </div>
        {{ form_rest(form)}}
    </form> #}
{% endblock %}




{# <!DOCTYPE html>
<html lang=\"en\">
<head>
</head>
</body>
</html> #}
", "Frontend/accueil/index.html.twig", "C:\\wamp64\\www\\subvention\\templates\\Frontend\\accueil\\index.html.twig");
    }
}
