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
class __TwigTemplate_3182942f5abe5132f0a2c64d5e552e6d0967042cd4dac9f16d4c3ac814a21f7e extends \Twig\Template
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
            if ( !twig_test_empty((isset($context["liste_students"]) || array_key_exists("liste_students", $context) ? $context["liste_students"] : (function () { throw new RuntimeError('Variable "liste_students" does not exist.', 18, $this->source); })()))) {
                // line 19
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["liste_students"]) || array_key_exists("liste_students", $context) ? $context["liste_students"] : (function () { throw new RuntimeError('Variable "liste_students" does not exist.', 19, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 20
                    echo "                    ";
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 20, $this->source); })()) + 1);
                    // line 21
                    echo "                    <tr>
                        <th scope=\"row\">";
                    // line 22
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 22, $this->source); })()), "html", null, true);
                    echo "</th>
                        <td>";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "studentname", [], "any", false, false, false, 23), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "studentfirstname", [], "any", false, false, false, 24), "html", null, true);
                    echo "</td>
                        <td>                        
                        <a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editStudent", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                    echo "\"style=\"color:white;\" class=\"btn btn-danger\">Editer</a>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteStudent", ["id1" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 27), "id2" => twig_get_attribute($this->env, $this->source, $context["student"], "nameclass", [], "any", false, false, false, 27)]), "html", null, true);
                    echo "\"style=\"color:white;\" class=\"btn btn-primary\">Supprimer</a>
                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "            ";
            }
            echo " 
            ";
            // line 32
            $context["i"] = 0;
            // line 33
            echo "        </table>
        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newStudent", ["id1" => (isset($context["name_class"]) || array_key_exists("name_class", $context) ? $context["name_class"] : (function () { throw new RuntimeError('Variable "name_class" does not exist.', 34, $this->source); })())]), "html", null, true);
            echo "\"style=\"color:white;\" class=\"btn btn-info btn-lg btn-block\">Ajouter un nouvel étudiant</a>

        
    ";
        } else {
            // line 38
            echo "        <br>
        <h2 style=\"font-size:25px;\">Vous n'êtes pas connecté !</h2>
    ";
        }
        // line 41
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
        return array (  171 => 41,  166 => 38,  159 => 34,  156 => 33,  154 => 32,  149 => 31,  139 => 27,  135 => 26,  130 => 24,  126 => 23,  122 => 22,  119 => 21,  116 => 20,  111 => 19,  108 => 18,  106 => 17,  94 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            {% if liste_students is not empty %}
                {% for student in liste_students %}
                    {% set i=i+1 %}
                    <tr>
                        <th scope=\"row\">{{ i }}</th>
                        <td>{{ student.studentname }}</td>
                        <td>{{ student.studentfirstname }}</td>
                        <td>                        
                        <a href=\"{{ path('editStudent',{'id': student.id}) }}\"style=\"color:white;\" class=\"btn btn-danger\">Editer</a>
                        <a href=\"{{ path('deleteStudent',{'id1': student.id, 'id2': student.nameclass}) }}\"style=\"color:white;\" class=\"btn btn-primary\">Supprimer</a>
                        </td>
                    </tr>
                {% endfor %}
            {% endif %} 
            {% set i=0 %}
        </table>
        <a href=\"{{path('newStudent', {'id1': name_class })}}\"style=\"color:white;\" class=\"btn btn-info btn-lg btn-block\">Ajouter un nouvel étudiant</a>

        
    {% else %}
        <br>
        <h2 style=\"font-size:25px;\">Vous n'êtes pas connecté !</h2>
    {% endif %}

{% endblock %}", "ecole_home/students.html.twig", "C:\\wamp64\\www\\ecole\\templates\\ecole_home\\students.html.twig");
    }
}
