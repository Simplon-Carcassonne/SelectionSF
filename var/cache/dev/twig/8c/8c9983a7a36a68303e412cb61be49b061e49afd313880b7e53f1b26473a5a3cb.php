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

/* headers/_jumbo.html.twig */
class __TwigTemplate_d6aa60a8c4a8b856f752e61aee475b4c3ac37c7179737dbd3b8ae8b55b523ef6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headers/_jumbo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headers/_jumbo.html.twig"));

        // line 1
        echo "
<div class=\"jumbo\">

        <h1 class=\"text-center\">

        <span class=\"  title\" id=\"cta\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["jumboTitle"]) || array_key_exists("jumboTitle", $context) ? $context["jumboTitle"] : (function () { throw new RuntimeError('Variable "jumboTitle" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</span>


        </h1>
        <p class=\"lead text-center\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["jumboText"]) || array_key_exists("jumboText", $context) ? $context["jumboText"] : (function () { throw new RuntimeError('Variable "jumboText" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</p>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "headers/_jumbo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"jumbo\">

        <h1 class=\"text-center\">

        <span class=\"  title\" id=\"cta\">{{jumboTitle}}</span>


        </h1>
        <p class=\"lead text-center\">{{jumboText}}</p>

</div>
", "headers/_jumbo.html.twig", "/Applications/MAMP/htdocs/SimplonSelectionSF/templates/headers/_jumbo.html.twig");
    }
}
