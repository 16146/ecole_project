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

/* security/registration.html.twig */
class __TwigTemplate_d7b53a010c8c273c82ffbe266cd279d08633268fd33ebb4eedb27f0b17edc1e6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <h1>Entrez vos identifiants :</h1>
    <form action=\"";
        // line 6
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
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/registration.html.twig", "C:\\wamp64\\www\\ecole\\templates\\security\\registration.html.twig");
    }
}
