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

/* headers/_mainheader.html.twig */
class __TwigTemplate_8b38e360676a7d59a6cdaac8ec6311c28b2f86d574f5c090470b0793eb4cf81c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headers/_mainheader.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headers/_mainheader.html.twig"));

        // line 1
        echo "<header>
  <nav class=\"navbar navbar-expand-lg navbar-dark\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
        ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 8
            echo "        <div class=\"row logoHeader MenuBackOffice justify-content-center align-items-center text-center navBarMini\">
            <a class=\" text-center p-2 logoBackOffice effetLogo\" href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" title=\"Retour Accueil\">
                <div class=\"logo-flip-box\"  >
                    <div id=\"logo-front-side\">
                        <img class=\"logo-front-side text-center p-2 logo\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/simplonBLC.png"), "html", null, true);
            echo "\" alt=\"logo simplon\">
                    </div>
                    <div id=\"logo-back-side\">
                        <img class=\"logo-back-side text-center p-2 logo\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/simpsonne.png"), "html", null, true);
            echo "\" alt=\"donut simpson\">
                    </div>
                </div>
                <img alt=\"logo Simplon Carcassonne\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/logoSimplonCarcassonne.png"), "html", null, true);
            echo "\">
            </a>
            ";
            // line 20
            if ((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 20, $this->source); })())) {
                // line 21
                echo "            <div class=\"icon-label\"> Bienvenue ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
                echo "</div>
            ";
            }
            // line 23
            echo "            <div class=\"blockIconBackOffice\">
                <div id=\"iconBackOffice\">
                    <a class=\"text-center icon my-3\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("selection_index");
            echo "\" title=\"Sélections\">
                      <div class=\"justify-content-center\">
                        <i class=\"fa fa-graduation-cap fa-2x\"></i>
                      </div>
                      <div class=\"icon-label justify-content-center\">
                        Sélections
                      </div>
                    </a>
                    <a class=\"text-center icon my-3\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_index");
            echo "\" title=\"Candidats\">
                      <div class=\"justify-content-center\">
                        <i class=\"fa fa-address-card fa-2x\"></i>
                      </div>
                      <div class=\"icon-label justify-content-center\">
                        Candidats
                      </div>
                    </a>
                    ";
            // line 41
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 42
                echo "                        <a class=\"text-center icon my-3\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
                echo "\" title=\"Utilisateurs\">
                            <div class=\"justify-content-center\">
                                <i class=\"fa fa-users fa-2x\"></i>
                            </div>
                            <div class=\"icon-label justify-content-center\">
                                Utilisateurs
                            </div>
                        </a>
                    ";
            } else {
                // line 51
                echo "                    ";
            }
            // line 52
            echo "                    <a class=\"text-center icon my-3\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" title=\"Admin\">
                      <div class=\"row justify-content-center\">
                        <i class=\"fa fa-cog fa-2x\"></i>
                      </div>
                      <div class=\"icon-label justify-content-center\">
                        Déconnexion
                      </div>
                    </a>
                </div>
            </div>
        </div>
        ";
        } else {
            // line 64
            echo "            <div class=\"row logoHeader justify-content-center align-items-center text-center navBarMini\">
                <a class=\"text-center p-2 logo effetLogo\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" title=\"Retour Accueil\">
                    <div class=\"logo-flip-box mb-3\">
                        <div id=\"logo-front-side\">
                            <img class=\"logo-front-side text-center p-2 logo\" src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/simplonBLC.png"), "html", null, true);
            echo "\" alt=\"logo simplon\">
                        </div>
                        <div id=\"logo-back-side\">
                            <img class=\"logo-back-side text-center p-2 logo\" src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/simpsonne.png"), "html", null, true);
            echo "\" alt=\"donut simpson\">
                        </div>
                    </div>
                    <img alt=\"logo Simplon Carcassonne\" src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pics/logoSimplonCarcassonne.png"), "html", null, true);
            echo "\">
                </a>
                <div class=\"mt-3\">
                    <div id=\"icons\" >
                        <a class=\"text-center icon\" href=\"https://saunier-francois.yo.fr/Eval3Groupe1/index.php\" title=\"Promo 2018/2019\" target=\"_blank\">
                          <div class=\"justify-content-center\">
                            <i class=\"fa fa-home  fa-2x\"></i>
                          </div>
                          <div class=\"icon-label justify-content-center\">
                            Fabrique de Carcassonne
                          </div>
                        </a>
                        <a class=\"text-center icon mt-4\" href=\"https://simplon.co/occitanie/\" title=\"Simplon Occitanie\" target=\"_blank\">
                          <div class=\"justify-content-center\">
                            <i class=\"fa fa-heart  fa-2x\"></i>
                          </div>
                          <div class=\"icon-label justify-content-center\">
                            Simplon Occitanie
                          </div>
                        </a>
                        <a class=\"icon \" data-target=\"#exampleModalCenter\" data-toggle=\"modal\" id=\"connectionLink\" title=\"Espace Administration\">
                          <div class=\"justify-content-center mt-5\">
                            <i class=\"fa fa-cogs fa-2x\"></i>
                          </div>
                          <div class=\"icon-label row justify-content-center\">
                            Connexion
                          </div>
                        </a>
                    </div>
                </div>
            </div>
        ";
        }
        // line 106
        echo "      </div>
    </nav>

</header>
";
        // line 110
        $this->loadTemplate("headers/_login_modal.html.twig", "headers/_mainheader.html.twig", 110)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "headers/_mainheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 110,  203 => 106,  168 => 74,  162 => 71,  156 => 68,  150 => 65,  147 => 64,  131 => 52,  128 => 51,  115 => 42,  113 => 41,  102 => 33,  91 => 25,  87 => 23,  81 => 21,  79 => 20,  74 => 18,  68 => 15,  62 => 12,  56 => 9,  53 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
  <nav class=\"navbar navbar-expand-lg navbar-dark\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
        {% if is_granted('ROLE_JURY') %}
        <div class=\"row logoHeader MenuBackOffice justify-content-center align-items-center text-center navBarMini\">
            <a class=\" text-center p-2 logoBackOffice effetLogo\" href=\"{{ path('home') }}\" title=\"Retour Accueil\">
                <div class=\"logo-flip-box\"  >
                    <div id=\"logo-front-side\">
                        <img class=\"logo-front-side text-center p-2 logo\" src=\"{{ asset('pics/simplonBLC.png') }}\" alt=\"logo simplon\">
                    </div>
                    <div id=\"logo-back-side\">
                        <img class=\"logo-back-side text-center p-2 logo\" src=\"{{ asset('pics/simpsonne.png') }}\" alt=\"donut simpson\">
                    </div>
                </div>
                <img alt=\"logo Simplon Carcassonne\" src=\"{{ asset('pics/logoSimplonCarcassonne.png') }}\">
            </a>
            {% if currentUser %}
            <div class=\"icon-label\"> Bienvenue {{currentUser.name}}</div>
            {% endif %}
            <div class=\"blockIconBackOffice\">
                <div id=\"iconBackOffice\">
                    <a class=\"text-center icon my-3\" href=\"{{ path('selection_index') }}\" title=\"Sélections\">
                      <div class=\"justify-content-center\">
                        <i class=\"fa fa-graduation-cap fa-2x\"></i>
                      </div>
                      <div class=\"icon-label justify-content-center\">
                        Sélections
                      </div>
                    </a>
                    <a class=\"text-center icon my-3\" href=\"{{ path('candidate_index') }}\" title=\"Candidats\">
                      <div class=\"justify-content-center\">
                        <i class=\"fa fa-address-card fa-2x\"></i>
                      </div>
                      <div class=\"icon-label justify-content-center\">
                        Candidats
                      </div>
                    </a>
                    {% if is_granted('ROLE_ADMIN') %}
                        <a class=\"text-center icon my-3\" href=\"{{ path('user_index') }}\" title=\"Utilisateurs\">
                            <div class=\"justify-content-center\">
                                <i class=\"fa fa-users fa-2x\"></i>
                            </div>
                            <div class=\"icon-label justify-content-center\">
                                Utilisateurs
                            </div>
                        </a>
                    {% else %}
                    {% endif %}
                    <a class=\"text-center icon my-3\" href=\"{{ path('app_logout') }}\" title=\"Admin\">
                      <div class=\"row justify-content-center\">
                        <i class=\"fa fa-cog fa-2x\"></i>
                      </div>
                      <div class=\"icon-label justify-content-center\">
                        Déconnexion
                      </div>
                    </a>
                </div>
            </div>
        </div>
        {% else %}
            <div class=\"row logoHeader justify-content-center align-items-center text-center navBarMini\">
                <a class=\"text-center p-2 logo effetLogo\" href=\"{{ path('home') }}\" title=\"Retour Accueil\">
                    <div class=\"logo-flip-box mb-3\">
                        <div id=\"logo-front-side\">
                            <img class=\"logo-front-side text-center p-2 logo\" src=\"{{ asset('pics/simplonBLC.png') }}\" alt=\"logo simplon\">
                        </div>
                        <div id=\"logo-back-side\">
                            <img class=\"logo-back-side text-center p-2 logo\" src=\"{{ asset('pics/simpsonne.png') }}\" alt=\"donut simpson\">
                        </div>
                    </div>
                    <img alt=\"logo Simplon Carcassonne\" src=\"{{ asset('pics/logoSimplonCarcassonne.png') }}\">
                </a>
                <div class=\"mt-3\">
                    <div id=\"icons\" >
                        <a class=\"text-center icon\" href=\"https://saunier-francois.yo.fr/Eval3Groupe1/index.php\" title=\"Promo 2018/2019\" target=\"_blank\">
                          <div class=\"justify-content-center\">
                            <i class=\"fa fa-home  fa-2x\"></i>
                          </div>
                          <div class=\"icon-label justify-content-center\">
                            Fabrique de Carcassonne
                          </div>
                        </a>
                        <a class=\"text-center icon mt-4\" href=\"https://simplon.co/occitanie/\" title=\"Simplon Occitanie\" target=\"_blank\">
                          <div class=\"justify-content-center\">
                            <i class=\"fa fa-heart  fa-2x\"></i>
                          </div>
                          <div class=\"icon-label justify-content-center\">
                            Simplon Occitanie
                          </div>
                        </a>
                        <a class=\"icon \" data-target=\"#exampleModalCenter\" data-toggle=\"modal\" id=\"connectionLink\" title=\"Espace Administration\">
                          <div class=\"justify-content-center mt-5\">
                            <i class=\"fa fa-cogs fa-2x\"></i>
                          </div>
                          <div class=\"icon-label row justify-content-center\">
                            Connexion
                          </div>
                        </a>
                    </div>
                </div>
            </div>
        {% endif %}
      </div>
    </nav>

</header>
{% include 'headers/_login_modal.html.twig' %}
", "headers/_mainheader.html.twig", "/Applications/MAMP/htdocs/SimplonSelectionSF/templates/headers/_mainheader.html.twig");
    }
}
