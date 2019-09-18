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

/* home/_callToAct.html.twig */
class __TwigTemplate_42fa92a2ef5c4a6dc28f3aa364a6adc857810ef0e2feb931143ff4a68d955949 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/_callToAct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/_callToAct.html.twig"));

        // line 1
        echo "
<div class=\"col-2 align-self-end p-2\" id=\"Inscript\">
    <div class=\"text-right mr-2 \" id=\"BtnInscript\" >
      <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidacy");
        echo "\">  <button class=\"btn btn-block btn-light\" title=\"Formulaire en plusieurs étapes, temps approximatif : 20 min.\">Je veux devenir Dév. Web !</button></a>
      <p></p>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/_callToAct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"col-2 align-self-end p-2\" id=\"Inscript\">
    <div class=\"text-right mr-2 \" id=\"BtnInscript\" >
      <a href=\"{{ path('candidacy') }}\">  <button class=\"btn btn-block btn-light\" title=\"Formulaire en plusieurs étapes, temps approximatif : 20 min.\">Je veux devenir Dév. Web !</button></a>
      <p></p>
  </div>
</div>
", "home/_callToAct.html.twig", "/Applications/MAMP/htdocs/SimplonSelectionSF/templates/home/_callToAct.html.twig");
    }
}
