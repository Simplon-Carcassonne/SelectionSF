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

/* footers/_mainfooter.html.twig */
class __TwigTemplate_e6292f0a7ae6079b256c6627fd6ba968799fd5a5be6796d5f43b9d0c0411326f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footers/_mainfooter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footers/_mainfooter.html.twig"));

        // line 1
        echo "<footer>
    <section class=\"row justify-content-center align-items-center py-5\">
        <a href=\"https://simplon.co/\" target=\"_blank\" class=\"btn-footer m-2 p-2\">Simplon.co</a>
        ";
        // line 5
        echo "        <a href=\"https://simplonline.co/contact\" target=\"_blank\" class=\"btn-footer m-2 p-2\">Contact</a>
        ";
        // line 7
        echo "        <a href=\"https://simplonline.co/cgu\" target=\"_blank\" class=\"btn-footer m-2 p-2\">Conditions générales d'utlisation</a>
        ";
        // line 9
        echo "        <a href=\"https://simplonline.co/mentions-legales\" target=\"_blank\" class=\"btn-footer m-2 p-2\">Mentions légales</a>
        ";
        // line 11
        echo "        <a href=\"https://simplonopensource.surge.sh/#/\" target=\"_blank\" class=\"btn-footer m-2 p-2\">SimplonOpenSource</a>
        ";
        // line 13
        echo "    </section>
</footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footers/_mainfooter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  57 => 11,  54 => 9,  51 => 7,  48 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <section class=\"row justify-content-center align-items-center py-5\">
        <a href=\"https://simplon.co/\" target=\"_blank\" class=\"btn-footer m-2 p-2\">Simplon.co</a>
        {# link to the website simplon.co #}
        <a href=\"https://simplonline.co/contact\" target=\"_blank\" class=\"btn-footer m-2 p-2\">Contact</a>
        {# link to page contact #}
        <a href=\"https://simplonline.co/cgu\" target=\"_blank\" class=\"btn-footer m-2 p-2\">Conditions générales d'utlisation</a>
        {# link to page condition générale d'utilisation #}
        <a href=\"https://simplonline.co/mentions-legales\" target=\"_blank\" class=\"btn-footer m-2 p-2\">Mentions légales</a>
        {# link to page mentions-legales #}
        <a href=\"https://simplonopensource.surge.sh/#/\" target=\"_blank\" class=\"btn-footer m-2 p-2\">SimplonOpenSource</a>
        {# link to page simplonopensource.surge.sh/#/ #}
    </section>
</footer>
", "footers/_mainfooter.html.twig", "/Applications/MAMP/htdocs/SimplonSelectionSF/templates/footers/_mainfooter.html.twig");
    }
}
