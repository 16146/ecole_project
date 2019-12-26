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

/* ecole_home/classes.html.twig */
class __TwigTemplate_183ab85e86f9cee40e17ef39bd86b7138f517715df56b6e2ec5c874911b735c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ecole_home/classes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ecole_home/classes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ecole_home/classes.html.twig", 1);
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

        echo "Classes";
        
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
        echo "    <!-- Vue sur la liste des classes qui ne s'affiche que si l'utilisateur est connecté -->
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            echo " 
        <table class=\"table table-hover\">
            <thead>
                <h1>Liste des classes :</h1>
            </thead> 
            <tbody>
                <!-- batch(2) permet de remplir au fur et à mesure un tableau de 2 colonnes.
                     La liste des classes est reçue depuis le controlleur -->
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["liste_classes"]) || array_key_exists("liste_classes", $context) ? $context["liste_classes"] : (function () { throw new RuntimeError('Variable "liste_classes" does not exist.', 15, $this->source); })()), 2));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 16
                echo "                    <tr>
                        ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 18
                    echo "                            <td>
                                <div class=\"card-header\"><strong>";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "nameclass", [], "any", false, false, false, 19), "html", null, true);
                    echo "</strong> : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "teacher", [], "any", false, false, false, 19), "html", null, true);
                    echo "</div>
                                    <div class=\"card-body\">
                                        <p class=\"card-title\"><a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("students", ["name_class" => twig_get_attribute($this->env, $this->source, $context["column"], "nameclass", [], "any", false, false, false, 21)]), "html", null, true);
                    echo "\"style=\"color:white;\" class=\"btn btn-success\">Voir la liste des élèves</a>
                                        &nbsp;<a href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteClass", ["name_class" => twig_get_attribute($this->env, $this->source, $context["column"], "nameclass", [], "any", false, false, false, 22)]), "html", null, true);
                    echo "\" style=\"color:white;\" class=\"btn btn-primary\">Supprimer la classe</a>
                                        &nbsp;<a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editClass", ["id" => twig_get_attribute($this->env, $this->source, $context["column"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                    echo "\" style=\"color:white;\" class=\"btn btn-danger\">Modifier la classe</a>
                                        </p>
                                    </div>
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            </tbody>
        </table>
        <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newClass");
            echo "\"style=\"color:white;\" class=\"btn btn-info btn-lg btn-block\">Ajouter une nouvelle classe</a>
    ";
        } else {
            // line 34
            echo "        <br><h2 style=\"font-size:25px;\">Vous n'êtes pas connecté !</h2>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ecole_home/classes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 34,  153 => 32,  149 => 30,  142 => 28,  131 => 23,  127 => 22,  123 => 21,  116 => 19,  113 => 18,  109 => 17,  106 => 16,  102 => 15,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Classes{% endblock %}

{% block body %}
    <!-- Vue sur la liste des classes qui ne s'affiche que si l'utilisateur est connecté -->
    {% if app.user %} 
        <table class=\"table table-hover\">
            <thead>
                <h1>Liste des classes :</h1>
            </thead> 
            <tbody>
                <!-- batch(2) permet de remplir au fur et à mesure un tableau de 2 colonnes.
                     La liste des classes est reçue depuis le controlleur -->
                {% for row in liste_classes|batch(2) %}
                    <tr>
                        {% for column in row %}
                            <td>
                                <div class=\"card-header\"><strong>{{ column.nameclass }}</strong> : {{ column.teacher }}</div>
                                    <div class=\"card-body\">
                                        <p class=\"card-title\"><a href=\"{{ path('students',{'name_class': column.nameclass }) }}\"style=\"color:white;\" class=\"btn btn-success\">Voir la liste des élèves</a>
                                        &nbsp;<a href=\"{{ path('deleteClass',{'name_class': column.nameclass}) }}\" style=\"color:white;\" class=\"btn btn-primary\">Supprimer la classe</a>
                                        &nbsp;<a href=\"{{ path('editClass',{'id': column.id}) }}\" style=\"color:white;\" class=\"btn btn-danger\">Modifier la classe</a>
                                        </p>
                                    </div>
                            </td>
                        {% endfor %}
                    </tr>
                {% endfor %}
            </tbody>
        </table>
        <a href=\"{{path('newClass')}}\"style=\"color:white;\" class=\"btn btn-info btn-lg btn-block\">Ajouter une nouvelle classe</a>
    {% else %}
        <br><h2 style=\"font-size:25px;\">Vous n'êtes pas connecté !</h2>
    {% endif %}
{% endblock %}", "ecole_home/classes.html.twig", "C:\\wamp64\\www\\ecole\\templates\\ecole_home\\classes.html.twig");
    }
}
