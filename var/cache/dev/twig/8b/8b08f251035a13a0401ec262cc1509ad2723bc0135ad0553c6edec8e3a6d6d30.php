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

/* Frontend/form_user/index.html.twig */
class __TwigTemplate_a86690df80c0bd1a6b3e80505226015932d980b4f1704b83ecef4ea74300ad97 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontend/form_user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontend/form_user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Frontend/form_user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "FormUser";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "   
 <form method='POST' action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form_user");
        echo "\">
        <style>
            .row {
                width: 500px;
                hight: 550px;
                background-color: #1234;
                margin-left: 350px;
                padding: 20px;
                font-family: verdana;
                border-radius: 15px;
            }
            label {
                margin: 10px;
                padding: 15px;
            }
            ";
        // line 23
        echo "            .col {
                width: 500px;
                hight: 150px;
            }
            input[type=text] {
                margin: 5px;
                padding: 10px;
                border-radius: 5px;
            }
            input[type=submit] {
                margin-left: 200px;
                top: 400px;
                padding: 9px;
                border-radius: 5px;
            }
            input[type=date_time] { margin-left: 20px; padding: 0px; border-radius: 5px; }
            input[type=select] { margin-left: 20px; padding: 9px; border-radius: 5px; }
            img[name=inscription] {
                hight: 15px;
                width: 15px;
            }
    </style>

        <div class=\"my-custom-class-for-errors\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'errors');
        echo "
        </div>
        <div class=\"row\">
            <img name = \"inscription\" src= \"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imges/inscr.png"), "html", null, true);
        echo "\" >
            <h2 align = \"center\">Souscrire</h2>
            <table>
                <tr>
                    <td> Nom </td>
                    <td>";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "nom", [], "any", false, false, false, 55), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td> Prenom </td>
                    <td>";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "prenom", [], "any", false, false, false, 59), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td> Adresse </td>
                    <td>";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "adresse", [], "any", false, false, false, 63), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td> dateNaiss </td>
                    <td>";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "dateNaiss", [], "any", false, false, false, 67), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td> notification </td>
                    <td>";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "notification", [], "any", false, false, false, 71), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" value=\"Enregistrer\"></td>
            </table>
        </div>

   
";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'rest');
        echo "
   </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontend/form_user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 79,  177 => 71,  170 => 67,  163 => 63,  156 => 59,  149 => 55,  141 => 50,  135 => 47,  109 => 23,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}FormUser{% endblock %}

{% block body %}
   
 <form method='POST' action=\"{{path('form_user')}}\">
        <style>
            .row {
                width: 500px;
                hight: 550px;
                background-color: #1234;
                margin-left: 350px;
                padding: 20px;
                font-family: verdana;
                border-radius: 15px;
            }
            label {
                margin: 10px;
                padding: 15px;
            }
            {# h2 {font-family: verdana; } #}
            .col {
                width: 500px;
                hight: 150px;
            }
            input[type=text] {
                margin: 5px;
                padding: 10px;
                border-radius: 5px;
            }
            input[type=submit] {
                margin-left: 200px;
                top: 400px;
                padding: 9px;
                border-radius: 5px;
            }
            input[type=date_time] { margin-left: 20px; padding: 0px; border-radius: 5px; }
            input[type=select] { margin-left: 20px; padding: 9px; border-radius: 5px; }
            img[name=inscription] {
                hight: 15px;
                width: 15px;
            }
    </style>

        <div class=\"my-custom-class-for-errors\">
            {{ form_errors(form) }}
        </div>
        <div class=\"row\">
            <img name = \"inscription\" src= \"{{ asset('imges/inscr.png') }}\" >
            <h2 align = \"center\">Souscrire</h2>
            <table>
                <tr>
                    <td> Nom </td>
                    <td>{{form_widget(form.nom)}}</td>
                </tr>
                <tr>
                    <td> Prenom </td>
                    <td>{{form_widget(form.prenom)}}</td>
                </tr>
                <tr>
                    <td> Adresse </td>
                    <td>{{form_widget(form.adresse)}}</td>
                </tr>
                <tr>
                    <td> dateNaiss </td>
                    <td>{{form_widget(form.dateNaiss)}}</td>
                </tr>
                <tr>
                    <td> notification </td>
                    <td>{{form_widget(form.notification)}}</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" value=\"Enregistrer\"></td>
            </table>
        </div>

   
{{ form_rest(form) }}
   </form>
{% endblock %}
", "Frontend/form_user/index.html.twig", "C:\\wamp64\\www\\subvention\\templates\\Frontend\\form_user\\index.html.twig");
    }
}
