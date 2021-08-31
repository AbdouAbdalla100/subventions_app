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

/* Frontend/notification/index.html.twig */
class __TwigTemplate_38f9274817414eedc1b47869a58b6789fbefa49f89092df01bb64d7d23d4066e extends Template
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
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontend/notification/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontend/notification/index.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "Frontend/notification/index.html.twig", 1);
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

        echo "Envoi des notifications";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<form method=\"POST\" action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification");
        echo "\">
    <script>
        document.write (getElement By id('envoyer'));
    </script>
    <div clas=\"page_content\">
        <div class=\"row\">
            <h2 align=\"center\">Liste des Utilisateurs à notifier</h2>
            <div class=\"col-12\">

            
                <table class=\"table\">
                    <thead class=\"thead-light-blue\">
                        <tr>
                            <th scop=\"col\">Nom</th>
                            <th scop=\"col\">Prenom</th>
                            ";
        // line 22
        echo "                            <th scop=\"col\">Adresse</th> 
                            <th scop=\"col\">Notification</th> 
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 27
        if (array_key_exists("users", $context)) {
            // line 28
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 29
                echo "                            <tr>
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                                ";
                // line 33
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                                <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "notification", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                        ";
        }
        // line 38
        echo "                    <tbody>
                </table>
                 <input type=\"hidden\" name = 'annonce_id' value=";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 40, $this->source); })()), "html", null, true);
        echo ">
                ";
        // line 42
        echo "                <input type=\"submit\" value=\"Envoyer\" id=\"envoyer\">
            </div>
        </div>
    </div>
    
    ";
        // line 48
        echo "</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontend/notification/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 48,  159 => 42,  155 => 40,  151 => 38,  148 => 37,  139 => 34,  134 => 33,  130 => 31,  126 => 30,  123 => 29,  118 => 28,  116 => 27,  109 => 22,  91 => 6,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyAdmin/page/content.html.twig' %}
{# {% extends 'base.html.twig' %} #}
{% block title %}Envoi des notifications{% endblock %}
{% block body %}

<form method=\"POST\" action=\"{{path('notification')}}\">
    <script>
        document.write (getElement By id('envoyer'));
    </script>
    <div clas=\"page_content\">
        <div class=\"row\">
            <h2 align=\"center\">Liste des Utilisateurs à notifier</h2>
            <div class=\"col-12\">

            
                <table class=\"table\">
                    <thead class=\"thead-light-blue\">
                        <tr>
                            <th scop=\"col\">Nom</th>
                            <th scop=\"col\">Prenom</th>
                            {# <th scop=\"col\">Date de Naissance</th> #}
                            <th scop=\"col\">Adresse</th> 
                            <th scop=\"col\">Notification</th> 
                        </tr>
                    </thead>
                    <tbody>
                    {% if users is defined %}
                        {% for user in users %}
                            <tr>
                                <td>{{ user.nom }}</td>
                                <td>{{ user.prenom }}</td>
                                {# <td>{{ user.dateNaiss }}</td> #}
                                <td>{{ user.adresse }}</td>
                                <td>{{ user.notification }}</td>
                            </tr>
                        {% endfor %}
                        {% endif %}
                    <tbody>
                </table>
                 <input type=\"hidden\" name = 'annonce_id' value={{annonce}}>
                {# <button name='envoyer' type='submit'>Envoyer</button> #}
                <input type=\"submit\" value=\"Envoyer\" id=\"envoyer\">
            </div>
        </div>
    </div>
    
    {# {{ form_rest(form)}} #}
</form>
{% endblock %}
", "Frontend/notification/index.html.twig", "C:\\wamp64\\www\\subvention\\templates\\Frontend\\notification\\index.html.twig");
    }
}
