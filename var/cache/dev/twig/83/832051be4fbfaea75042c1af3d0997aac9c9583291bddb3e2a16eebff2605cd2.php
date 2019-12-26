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

/* ecole_home/newStudent.html.twig */
class __TwigTemplate_e6b6c2b33973fa24dab0b852459b1c928d50e3120e4d72dc93d5a0b786e14266 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ecole_home/newStudent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ecole_home/newStudent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ecole_home/newStudent.html.twig", 1);
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

        // line 4
        echo "    ";
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        Edit Etudiant
    ";
        } else {
            // line 7
            echo "        Nouvel Etudiant
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <!-- Vue ajout/modification d'un étudiant -->
    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "        <!-- La variable editMode est renvoyé  depuis la fonction du controller.
             Cette variable existe si le mode edition est activé -->
        ";
            // line 16
            if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 16, $this->source); })())) {
                // line 17
                echo "            <h1>Modifier l'étudiant sélectionné de la ";
                echo twig_escape_filter($this->env, (isset($context["name_of_class"]) || array_key_exists("name_of_class", $context) ? $context["name_of_class"] : (function () { throw new RuntimeError('Variable "name_of_class" does not exist.', 17, $this->source); })()), "html", null, true);
                echo " :</h1>
        ";
            } else {
                // line 19
                echo "            <h1>Ajouter un nouvel étudiant à la classe ";
                echo twig_escape_filter($this->env, (isset($context["name_of_class"]) || array_key_exists("name_of_class", $context) ? $context["name_of_class"] : (function () { throw new RuntimeError('Variable "name_of_class" does not exist.', 19, $this->source); })()), "html", null, true);
                echo " :</h1>
        ";
            }
            // line 21
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formStudent"]) || array_key_exists("formStudent", $context) ? $context["formStudent"] : (function () { throw new RuntimeError('Variable "formStudent" does not exist.', 21, $this->source); })()), 'form_start');
            echo "
                <label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Nom de l'étudiant :</label>
                ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStudent"]) || array_key_exists("formStudent", $context) ? $context["formStudent"] : (function () { throw new RuntimeError('Variable "formStudent" does not exist.', 23, $this->source); })()), "student_name", [], "any", false, false, false, 23), 'widget');
            echo "
                <label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Prénom de l'étudiant :</label>
                ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStudent"]) || array_key_exists("formStudent", $context) ? $context["formStudent"] : (function () { throw new RuntimeError('Variable "formStudent" does not exist.', 25, $this->source); })()), "student_firstname", [], "any", false, false, false, 25), 'widget');
            echo "
                <br>
            ";
            // line 27
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formStudent"]) || array_key_exists("formStudent", $context) ? $context["formStudent"] : (function () { throw new RuntimeError('Variable "formStudent" does not exist.', 27, $this->source); })()), 'form_end');
            echo "
    ";
        } else {
            // line 29
            echo "        <h2>Vous n'êtes pas connecté !</h2>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ecole_home/newStudent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 29,  137 => 27,  132 => 25,  127 => 23,  121 => 21,  115 => 19,  109 => 17,  107 => 16,  103 => 14,  101 => 13,  98 => 12,  88 => 11,  76 => 7,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if editMode %}
        Edit Etudiant
    {% else %}
        Nouvel Etudiant
    {% endif %}
{% endblock %}

{% block body %}
    <!-- Vue ajout/modification d'un étudiant -->
    {% if app.user %}
        <!-- La variable editMode est renvoyé  depuis la fonction du controller.
             Cette variable existe si le mode edition est activé -->
        {% if editMode %}
            <h1>Modifier l'étudiant sélectionné de la {{name_of_class}} :</h1>
        {% else %}
            <h1>Ajouter un nouvel étudiant à la classe {{name_of_class}} :</h1>
        {% endif %}
            {{ form_start(formStudent)}}
                <label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Nom de l'étudiant :</label>
                {{form_widget(formStudent.student_name)}}
                <label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Prénom de l'étudiant :</label>
                {{form_widget(formStudent.student_firstname)}}
                <br>
            {{ form_end(formStudent)}}
    {% else %}
        <h2>Vous n'êtes pas connecté !</h2>
    {% endif %}
{% endblock %}", "ecole_home/newStudent.html.twig", "C:\\wamp64\\www\\ecole\\templates\\ecole_home\\newStudent.html.twig");
    }
}
