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

/* ecole_home/newClass.html.twig */
class __TwigTemplate_f451e752faaa567e69791343e110cddaf809571c7c22ae78f8cccc505e08a0a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ecole_home/newClass.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ecole_home/newClass.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ecole_home/newClass.html.twig", 1);
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
            echo "        Edit Classe
    ";
        } else {
            // line 7
            echo "        Nouvelle Classe
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
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "        ";
            if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 13, $this->source); })())) {
                // line 14
                echo "            <h1>Modification de la classe sélectionnée :</h1>
        ";
            } else {
                // line 16
                echo "            <h1>Ajouter une nouvelle classe à la liste :</h1>
        ";
            }
            // line 18
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClasse"]) || array_key_exists("formClasse", $context) ? $context["formClasse"] : (function () { throw new RuntimeError('Variable "formClasse" does not exist.', 18, $this->source); })()), 'form_start');
            echo "
            <label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Nom complet du Professeur :</label>
            ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formClasse"]) || array_key_exists("formClasse", $context) ? $context["formClasse"] : (function () { throw new RuntimeError('Variable "formClasse" does not exist.', 20, $this->source); })()), "teacher", [], "any", false, false, false, 20), 'widget');
            echo "
            <label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Nom de la classe :</label>
            ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formClasse"]) || array_key_exists("formClasse", $context) ? $context["formClasse"] : (function () { throw new RuntimeError('Variable "formClasse" does not exist.', 22, $this->source); })()), "name_class", [], "any", false, false, false, 22), 'widget');
            echo "
            <br>
        ";
            // line 24
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClasse"]) || array_key_exists("formClasse", $context) ? $context["formClasse"] : (function () { throw new RuntimeError('Variable "formClasse" does not exist.', 24, $this->source); })()), 'form_end');
            echo "

    ";
        } else {
            // line 27
            echo "        <h2>Vous n'êtes pas connecté !</h2>

    ";
        }
        // line 30
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ecole_home/newClass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 30,  134 => 27,  128 => 24,  123 => 22,  118 => 20,  112 => 18,  108 => 16,  104 => 14,  101 => 13,  98 => 12,  88 => 11,  76 => 7,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if editMode %}
        Edit Classe
    {% else %}
        Nouvelle Classe
    {% endif %}
{% endblock %}

{% block body %}
    {% if app.user %}
        {% if editMode %}
            <h1>Modification de la classe sélectionnée :</h1>
        {% else %}
            <h1>Ajouter une nouvelle classe à la liste :</h1>
        {% endif %}
        {{ form_start(formClasse)}}
            <label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Nom complet du Professeur :</label>
            {{form_widget(formClasse.teacher)}}
            <label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">Nom de la classe :</label>
            {{form_widget(formClasse.name_class)}}
            <br>
        {{ form_end(formClasse)}}

    {% else %}
        <h2>Vous n'êtes pas connecté !</h2>

    {% endif %}

{% endblock %}", "ecole_home/newClass.html.twig", "C:\\wamp64\\www\\ecole\\templates\\ecole_home\\newClass.html.twig");
    }
}
