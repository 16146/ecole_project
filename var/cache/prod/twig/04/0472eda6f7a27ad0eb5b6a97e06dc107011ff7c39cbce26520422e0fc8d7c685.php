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

/* ecole_home/home.html.twig */
class __TwigTemplate_c02644990229c96d2f1df872a4ba3aa420068e526ac871c649cd97f41452edf6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "ecole_home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<section class=\"connexion\">
    <h2>Accéder à la page de connexion :</h2>
        <!-- zone de connexion -->
    <!--  ON NE PEUT PAS POST ETC. ICI! Faut passer par le controller où tu mets handlerequest \$variable->handlerequest() 
    ce genre de truc
    <form action=\"verification.php\" method=\"POST\">              
        <input type=\"submit\" id='submit' value='LOGIN' >
        <?php
        if(isset(\$_GET['erreur'])){
            \$err = \$_GET['erreur'];
            if(\$err==1 || \$err==2)
                echo \"<p style='color:red'>Utilisateur ou mot de passe incorrect</p>\";
        }
        ?>
    </form>
    -->
<!--
    <div class=\"form-group has-success\">
        <label class=\"form-control-label\" for=\"inputSuccess1\">ID de l'utilisateur :</label>
        <input type=\"text\" value=\"correct value\" class=\"form-control is-valid\" id=\"inputValid\">
        <div class=\"valid-feedback\">Success! You've done it.</div>
    </div>

    <div class=\"form-group has-danger\">
        <label class=\"form-control-label\" for=\"inputDanger1\">Mot de passe :</label>
        <input type=\"text\" value=\"wrong value\" class=\"form-control is-invalid\" id=\"inputInvalid\">
        <div class=\"invalid-feedback\">Mot de passe et/ou id erronés.</div>
    </div>
--> 

<!-- PAS FAIRE CA FAUT UTILISER LES FORMULAIRES SYMFONY-->
    <!--<div class=\"form-group\">
        <label class=\"form-control-label\" for=\"inputLarge\">ID de l'utilisateur :</label>
        <input id=\"user\" type=\"text\" class=\"form-control\" placeholder=\"Ecrire...\">
    </div>
    <div class=\"form-group\">
        <label class=\"form-control-label\" for=\"exampleInputPassword1\">Mot de passe :</label>
        <input id=\"mdp\" type=\"password\" class=\"form-control\" placeholder=\"Ecrire...\">
    </div>

    <div class=\"form-group\">
        <label class=\"col-form-label col-form-label-lg\" for=\"inputLarge\">ID de l'utilisateur :</label>
        <input class=\"form-control form-control-lg\" type=\"text\" placeholder=\".form-control-lg\" id=\"inputLarge\">
    </div>-->
    <a type=\"submit\" style=\"font-size:20px;height:50px;width:700px\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"btn btn-primary\">Se connecter</a>
</section>

</form>
";
    }

    public function getTemplateName()
    {
        return "ecole_home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 51,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ecole_home/home.html.twig", "C:\\wamp64\\www\\ecole\\templates\\ecole_home\\home.html.twig");
    }
}
