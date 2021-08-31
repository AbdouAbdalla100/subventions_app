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

/* Frontend/form_organisme/index.html.twig */
class __TwigTemplate_ebd2f585e7d19cb1aff5736d858b3975db9fdf6653fe95b1bdafeb181bf33958 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontend/form_organisme/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontend/form_organisme/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Frontend/form_organisme/index.html.twig", 1);
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

        echo "Hello FormOrganismeController!";
        
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
<form method=\"POST\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form_organisme");
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
</style>
";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start');
        echo "

<div class=\"row\">
    <table>
        <h3 align=\"center\"> Souscrire </h3>    
        <tr>
            <td>Nom</td>
            <td>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "nom", [], "any", false, false, false, 48), 'widget');
        echo "</td>
        </tr>
        <tr>
        <td>Adresse</td>
            <td>";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "adresse", [], "any", false, false, false, 52), 'widget');
        echo "<td>
        </tr>
        <tr>
            <td><input type=\"submit\" value=\"Enregistrer\"></td>
        </tr>
    </table>
</div>
";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'rest');
        echo "
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontend/form_organisme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 59,  146 => 52,  139 => 48,  129 => 41,  109 => 23,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FormOrganismeController!{% endblock %}

{% block body %}

<form method=\"POST\" action=\"{{path('form_organisme')}}\">
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
</style>
{{ form_start(form) }}

<div class=\"row\">
    <table>
        <h3 align=\"center\"> Souscrire </h3>    
        <tr>
            <td>Nom</td>
            <td>{{ form_widget(form.nom)}}</td>
        </tr>
        <tr>
        <td>Adresse</td>
            <td>{{ form_widget(form.adresse) }}<td>
        </tr>
        <tr>
            <td><input type=\"submit\" value=\"Enregistrer\"></td>
        </tr>
    </table>
</div>
{{ form_rest(form)}}
</form>
{% endblock %}
{# 



<div class=\"form-group col-md-6\">
<input type=\"text\" class=\"form-control\" id=\"last_name\" name=\"last_name\" placeholder=\"Last Name\" required>
</div>
</div>
<div class=\"form-group\">
<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" aria-describedby=\"emailHelp\" placeholder=\"Email\" required>
</div>
<div class=\"form-row\">
<div class=\"form-group col-md-6\">
<input name=\"country\" type=\"text\" class=\"form-control country_selector\" onfocus=\"if (!window.__cfRLUnblockHandlers) return false; this.value=''\" required data-cf-modified-1cd56c90e9a911135771f6d5-=\"\">
</div>
<div class=\"form-group col-md-6\">
<input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" placeholder=\"City\" required>
</div>
</div> #}", "Frontend/form_organisme/index.html.twig", "C:\\wamp64\\www\\subvention\\templates\\Frontend\\form_organisme\\index.html.twig");
    }
}
