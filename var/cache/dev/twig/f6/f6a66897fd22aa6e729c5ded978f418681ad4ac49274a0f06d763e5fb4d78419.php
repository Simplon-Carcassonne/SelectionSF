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

/* security/_login.html.twig */
class __TwigTemplate_2af570bb3c230505d7f5b5cc3341292471563d07b9c99b2a1c85bfb65efafe66 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/_login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/_login.html.twig"));

        // line 1
        echo "<form class=\"bg-white\" id=\"loginForm\" method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
    ";
        // line 2
        if (((isset($context["error"]) || array_key_exists("error", $context)) && (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "        <div class=\"alert alert-danger my-2\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messageKey", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messagedata", [], "any", false, false, false, 4), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 7
        echo "    <label for=\"inputEmail\">Adresse e-mail</label>
    <input autofocus class=\"form-control text-info loginfield\" id=\"inputEmail\" name=\"email\" required type=\"email\">
    <br>
    <label class=\"\" for=\"inputPassword\">Mot de passe</label>
    <input class=\"form-control text-info loginfield\" id=\"inputPassword\" name=\"password\" required type=\"password\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
    <button class=\"btn btn-block bg-red my-5\" type=\"submit\">Je me connecte !</button>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  59 => 7,  53 => 4,  50 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"bg-white\" id=\"loginForm\" method=\"post\" action=\"{{ path('app_login') }}\">
    {% if error is defined and error %}
        <div class=\"alert alert-danger my-2\">
            {{ error.messageKey | trans(error.messagedata, 'security') }}
        </div>
    {% endif %}
    <label for=\"inputEmail\">Adresse e-mail</label>
    <input autofocus class=\"form-control text-info loginfield\" id=\"inputEmail\" name=\"email\" required type=\"email\">
    <br>
    <label class=\"\" for=\"inputPassword\">Mot de passe</label>
    <input class=\"form-control text-info loginfield\" id=\"inputPassword\" name=\"password\" required type=\"password\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
    <button class=\"btn btn-block bg-red my-5\" type=\"submit\">Je me connecte !</button>
</form>
", "security/_login.html.twig", "/Applications/MAMP/htdocs/SimplonSelectionSF/templates/security/_login.html.twig");
    }
}
