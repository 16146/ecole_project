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
        echo "    <!-- Vue de la liste des élèves, ne s'affiche complètement que si l'user est connecté -->
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <table class=\"table table-hover\">
            <h1>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["name_class"]) || array_key_exists("name_class", $context) ? $context["name_class"] : (function () { throw new RuntimeError('Variable "name_class" does not exist.', 9, $this->source); })()), "html", null, true);
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
            // line 18
            $context["i"] = 0;
            echo " <!-- Variable d'index, s'incrémente chaque boucle -->
                ";
            // line 19
            if ( !twig_test_empty((isset($context["liste_students"]) || array_key_exists("liste_students", $context) ? $context["liste_students"] : (function () { throw new RuntimeError('Variable "liste_students" does not exist.', 19, $this->source); })()))) {
                // line 20
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["liste_students"]) || array_key_exists("liste_students", $context) ? $context["liste_students"] : (function () { throw new RuntimeError('Variable "liste_students" does not exist.', 20, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 21
                    echo "                        ";
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 21, $this->source); })()) + 1);
                    // line 22
                    echo "                        <tr>
                            <th scope=\"row\">";
                    // line 23
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 23, $this->source); })()), "html", null, true);
                    echo "</th>
                            <td>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "studentname", [], "any", false, false, false, 24), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "studentfirstname", [], "any", false, false, false, 25), "html", null, true);
                    echo "</td>
                            <td>                        
                            <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editStudent", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                    echo "\"style=\"color:white;\" class=\"btn btn-danger\">Editer</a>
                            <a href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteStudent", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 28), "name_class" => twig_get_attribute($this->env, $this->source, $context["student"], "nameclass", [], "any", false, false, false, 28)]), "html", null, true);
                    echo "\"style=\"color:white;\" class=\"btn btn-primary\">Supprimer</a>
                            </td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                ";
            }
            echo " 
                ";
            // line 33
            $context["i"] = 0;
            // line 34
            echo "            </tbody>
        </table>
        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newStudent", ["nameClass" => (isset($context["name_class"]) || array_key_exists("name_class", $context) ? $context["name_class"] : (function () { throw new RuntimeError('Variable "name_class" does not exist.', 36, $this->source); })())]), "html", null, true);
            echo "\"style=\"color:white;\" class=\"btn btn-info btn-lg btn-block\">Ajouter un nouvel étudiant</a>
    
    ";
        } else {
            // line 39
            echo "        <br><h2 style=\"font-size:25px;\">Vous n'êtes pas connecté !</h2>
    ";
        }
        
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
        return array (  169 => 39,  163 => 36,  159 => 34,  157 => 33,  152 => 32,  142 => 28,  138 => 27,  133 => 25,  129 => 24,  125 => 23,  122 => 22,  119 => 21,  114 => 20,  112 => 19,  108 => 18,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Elèves{% endblock %}

{% block body %}
    <!-- Vue de la liste des élèves, ne s'affiche complètement que si l'user est connecté -->
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
                {% set i=0 %} <!-- Variable d'index, s'incrémente chaque boucle -->
                {% if liste_students is not empty %}
                    {% for student in liste_students %}
                        {% set i=i+1 %}
                        <tr>
                            <th scope=\"row\">{{ i }}</th>
                            <td>{{ student.studentname }}</td>
                            <td>{{ student.studentfirstname }}</td>
                            <td>                        
                            <a href=\"{{ path('editStudent',{'id': student.id}) }}\"style=\"color:white;\" class=\"btn btn-danger\">Editer</a>
                            <a href=\"{{ path('deleteStudent',{'id': student.id, 'name_class': student.nameclass}) }}\"style=\"color:white;\" class=\"btn btn-primary\">Supprimer</a>
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %} 
                {% set i=0 %}
            </tbody>
        </table>
        <a href=\"{{path('newStudent', {'nameClass': name_class })}}\"style=\"color:white;\" class=\"btn btn-info btn-lg btn-block\">Ajouter un nouvel étudiant</a>
    
    {% else %}
        <br><h2 style=\"font-size:25px;\">Vous n'êtes pas connecté !</h2>
    {% endif %}
{% endblock %}", "ecole_home/students.html.twig", "C:\\wamp64\\www\\ecole\\templates\\ecole_home\\students.html.twig");
    }
}
