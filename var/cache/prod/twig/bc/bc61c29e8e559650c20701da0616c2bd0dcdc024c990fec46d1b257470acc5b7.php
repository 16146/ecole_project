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

/* security/login.html.twig */
class __TwigTemplate_a500cffc64f1c2f3bc0746a23d2880192ce1ee72e0d3464407fc18e6c7d64459 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        if (($context["error"] ?? null)) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 4), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
    <h1>Entrez vos identifiants :</h1>
    <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
        <div class=\"form-group\">
            <input style=\"font-size:28px;height:50px;width:100%\" placeholder=\"Entrez un ID d'utilisateur ...\" required name=\"_username\"
            type=\"text\" class=\"form-control\">
        </div>
        <br>
        <div class=\"form-group\">
            <input style=\"font-size:28px;height:50px;width:100%\" placeholder=\"Entrez un mot de passe ...\" required name=\"_password\"
            type=\"password\" class=\"form-control\">
        </div>
        <br>
        <div class=\"form-group\">
            <button style=\"font-size:25px;height:50px;width:100%\"  type=\"submit\" class=\"btn btn-succes\">Se connecter</button>
        </div>
        


    </form>
    <label style=\"font-size:28px;height:50px;width:100%\">Identifiant : </label>
    <label style=\"font-size:28px;height:50px;width:100%\">Mot de passe : </label>

";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  58 => 6,  52 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\wamp64\\www\\ecole\\templates\\security\\login.html.twig");
    }
}
