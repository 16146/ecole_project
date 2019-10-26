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
class __TwigTemplate_cbe21da4ec0850b5e12939b54b9a13fe5ebe68101cac3c29e90056951a3c5872 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "ecole_home/classes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Classes";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<h1>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>


";
        // line 9
        if ((($context["age"] ?? null) > 18)) {
            // line 10
            echo "    <p>Tu es majeur</p>
";
        } else {
            // line 12
            echo "    <p>Tu es majeur</p>
";
        }
        // line 14
        echo "
<p>FOJTNTGJRTNTR
TRJGTNJTRTTTR
TRGJTTKNJ</p>

";
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
        return array (  75 => 14,  71 => 12,  67 => 10,  65 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ecole_home/classes.html.twig", "C:\\wamp64\\www\\ecole\\templates\\ecole_home\\classes.html.twig");
    }
}
