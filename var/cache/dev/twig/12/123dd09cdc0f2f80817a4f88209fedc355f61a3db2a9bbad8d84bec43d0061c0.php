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

/* ecole_home/students.html.twig */
class __TwigTemplate_12caa6d5e45ce849ec7b8d6834972bb8f3da8e71d28d44f4242f9b58d13afcd1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ecole_home/students.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ecole_home/students.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ecole_home/students.html.twig", 1);
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

        echo "Elèves";
        
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
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "        <table class=\"table table-hover\">
        <h1>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["name_class"]) || array_key_exists("name_class", $context) ? $context["name_class"] : (function () { throw new RuntimeError('Variable "name_class" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "</h1>
        <thead>
            <tr>
                <th scope=\"col\">Numéro</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prénom</th>
            </tr>
        </thead> 
        <tbody>
            ";
            // line 17
            $context["i"] = 0;
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_students"]) || array_key_exists("liste_students", $context) ? $context["liste_students"] : (function () { throw new RuntimeError('Variable "liste_students" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["students"]) {
                // line 19
                echo "                ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 19, $this->source); })()) + 1);
                // line 20
                echo "                <tr class=\"table-primary\">
                    <th scope=\"row\">";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 21, $this->source); })()), "html", null, true);
                echo "</th>
                    <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["students"], "studentname", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                    <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["students"], "studentfirstname", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteStudent", ["id1" => twig_get_attribute($this->env, $this->source, $context["students"], "id", [], "any", false, false, false, 24), "id2" => twig_get_attribute($this->env, $this->source, $context["students"], "nameclass", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\"style=\"color:white;\" class=\"btn btn-primary\">Supprimer</a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['students'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            ";
            $context["i"] = 0;
            // line 28
            echo "        </table>

        
    ";
        } else {
            // line 32
            echo "        <h2>Vous n'êtes pas connecté !</h2>
    ";
        }
        // line 34
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ecole_home/students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 34,  149 => 32,  143 => 28,  140 => 27,  131 => 24,  127 => 23,  123 => 22,  119 => 21,  116 => 20,  113 => 19,  108 => 18,  106 => 17,  94 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Elèves{% endblock %}

{% block body %}
    {% if app.user %}
        <table class=\"table table-hover\">
        <h1>{{name_class}}</h1>
        <thead>
            <tr>
                <th scope=\"col\">Numéro</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prénom</th>
            </tr>
        </thead> 
        <tbody>
            {% set i=0 %}
            {% for students in liste_students %}
                {% set i=i+1 %}
                <tr class=\"table-primary\">
                    <th scope=\"row\">{{ i }}</th>
                    <td>{{ students.studentname }}</td>
                    <td>{{ students.studentfirstname }}</td>
                    <td><a href=\"{{ path('deleteStudent',{'id1': students.id, 'id2': students.nameclass}) }}\"style=\"color:white;\" class=\"btn btn-primary\">Supprimer</a></td>
                </tr>
            {% endfor %}
            {% set i=0 %}
        </table>

        
    {% else %}
        <h2>Vous n'êtes pas connecté !</h2>
    {% endif %}

{% endblock %}", "ecole_home/students.html.twig", "C:\\wamp64\\www\\ecole\\templates\\ecole_home\\students.html.twig");
    }
}
