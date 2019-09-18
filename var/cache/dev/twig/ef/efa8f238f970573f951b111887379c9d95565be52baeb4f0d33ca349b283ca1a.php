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

/* home/index.html.twig */
class __TwigTemplate_770e235fd43b5f9efc48905c0586bcbf674fe8b37bd4913de40d4335b140dc70 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("home/_callToAct.html.twig", "home/index.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        // line 9
        echo "    <div class=\"mx-3\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "            <div class=\"alert alert-success\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
    ";
        // line 21
        $this->loadTemplate("headers/_jumbo.html.twig", "home/index.html.twig", 21)->display(twig_array_merge($context, ["jumboTitle" => "Développeur Web et Web Mobile ", "jumboText" => "Ecole Régionale du Numérique Carcassonne"]));
        // line 22
        echo "    <div class=\"col-12 text-center\">
        <p class=\"\">
            Cela se passe ici
        </p>
    </div>
    <div class=\" text-center\">
        <i class=\"fa fa-arrow-down fa-2x\"></i>
        <div class=\"mb-1\" id=\"leafletmap\"></div>
    </div>
    <section class=\"container\">
        <section class=\"row align-items-center justify-content-center  my-3 py-3 wrap\">
            <div class=\"col-12 text-center\" data-aos-duration=\"3100\" data-aos=\"fade-right\">
                <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidacy");
        echo "\">
                    <button class=\"btn btn-block bg-red mb-2\" id=\"BtnToForm\">Je veux en faire partie !</button>
                </a>
                <p class=\"\">
                    Combien de temps ? quand ?
                </p>
                <i class=\"fa fa-arrow-down fa-2x\"></i>

                <h2 class=\" text-black\">
                    11 mois de formation qualifiante Niveau III  !
                </h2>

                <p class=\"lead \">du 14 octobre 2019 au 22 Septembre 2020</p>
            </div>
        </section>
        <section class=\"container\">
            <div class=\"row align-items-center justify-content-center  my-5 py-5\" data-aos-anchor-placement=\"top-center\" data-aos=\"fade-down\">
                <div class=\"col-lg-6 mbr-col-md-10 mt-2\">
                    <div class=\"wrap\">
                        <div class=\"ico-wrap\">
                            <span class=\"mbr-iconfont fa-volume-up fa\"></span>
                        </div>
                        <div class=\"text-wrap vcenter\">
                            <h2 class=\"mbr-fonts-style mbr-bold mbr-section-title3 display-5\">Programme
                                <span></span>
                            </h2>
                            <p class=\"mbr-fonts-style text1 mbr-text display-6\">
                                Formation basée sur la pédagogie active !</p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mbr-col-md-10 mt-2\">
                    <div class=\"wrap\">
                        <div class=\"ico-wrap\">
                            <span class=\"mbr-iconfont fa-calendar fa\"></span>
                        </div>
                        <div class=\"text-wrap vcenter\">
                            <h2 class=\"mbr-fonts-style mbr-bold mbr-section-title3 display-5\">Checkez
                                <span>nos dates de formations</span>
                            </h2>
                            <p class=\"mbr-fonts-style text1 mbr-text display-6\">
                                Vérifiez les autres formations dans les autres fabriques de la région</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mbr-col-md-10\" data-aos-anchor-placement=\"top-center\" data-aos=\"fade-down\">
                    <div class=\"wrap\">
                        <div class=\"ico-wrap\">
                            <span class=\"mbr-iconfont fa-globe fa\"></span>
                        </div>
                        <div class=\"text-wrap vcenter\">
                            <h2 class=\"mbr-fonts-style mbr-bold mbr-section-title3 display-5\">Phase d'acquisition des connaissances
                                <span></span>
                            </h2>
                            <p class=\"mbr-fonts-style text1 mbr-text display-6\">
                                Maquetter une application<br>
                                Développer une interface web et web mobile en responsive design<br>
                                Déployer un projet web en lien avec une base de données
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mbr-col-md-10\" data-aos-anchor-placement=\"top-center\" data-aos=\"fade-up\">
                    <div class=\"wrap\">
                        <div class=\"ico-wrap\">
                            <span class=\"mbr-iconfont fa-trophy fa\"></span>
                        </div>
                        <div class=\"text-wrap vcenter\">
                            <h2 class=\"mbr-fonts-style mbr-bold mbr-section-title3 display-5\">Des projets
                                <span>autour des entreprises</span>
                            </h2>
                            <p class=\"mbr-fonts-style text1 mbr-text display-6\">
                                Réaliser des projets pédagogiques professionnels<br>
                                <br>
                                Suivre des interventions d'acteurs du web<br>
                                <br>
                                Une période de formation en entreprise
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"container\" data-aos-duration=\"2000\" data-aos=\"fade-down\">
            <section class=\"row align-items-center justify-content-center my-3 py-3 wrap\">
                <div class=\"col-12  mb-2 text-center\">
                    <span class=\"h2 text-black\">
                        Comment s'inscrire ?
                    </span>
                </div>
                <section class=\"row align-items-center justify-content-center  my-3 py-3\">
                   <div class=\"col-lg-4 col-md-8 text-center\">
                        <p class=\"number\">
                            1
                        </p>
                        <p class=\"h4 text-black line\">
                            Badges Sololearn<br></p>
                        <p class=\"h6 text-black\">
                            25 leçons<strong>
                                HTML</strong><br>
                            25 leçons
                            <strong>CSS</strong>
                            <br>
                            29 leçons
                            <strong>JavaScript</strong>
                        </p>
                    </div>
                    <div class=\"col-lg-4 col-md-8 text-center mt-3\">
                        <p class=\"number\">
                            2
                        </p>
                        <p class=\"h4 text-black line\">
                            Dépôt des candidatures<br></p>
                        <p class=\"h6 text-black\">
                            <a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidacy");
        echo "\">
                                <button class=\"btn btn-block btn-light\" title=\"Formulaire en plusieurs étapes, temps approximatif : 20 min.\">Je veux devenir Dév. Web !</button>
                            </a>
                        </p>
                        <br>
                    </div>
                    <div class=\"col-lg-4 col-md-8 mb-2 text-center\">
                        <p class=\"number\">
                            3
                        </p>
                        <p class=\"h4 text-black line\">
                            Journée de sélection<br></p>
                        <p class=\"h6 text-black\">
                            <strong>Jeudi</strong>
                            6 septembre 2019<br>
                            <strong>Kappa[R] - Tiers lieu de formation</strong>
                        </p>
                    </div>
                </section>
            </section>
        </section>
        ";
        // line 170
        $this->loadTemplate("footers/_mainfooter.html.twig", "home/index.html.twig", 170)->display($context);
        // line 172
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 173
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 174
        echo "        <script src=\"js/leaflet.js\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 174,  306 => 173,  296 => 172,  294 => 170,  270 => 149,  152 => 34,  138 => 22,  136 => 21,  133 => 20,  124 => 17,  121 => 16,  116 => 15,  107 => 12,  104 => 11,  100 => 10,  97 => 9,  95 => 8,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}
{% block body %}

    {% include 'home/_callToAct.html.twig' %}
    {#  jumbotron #}
    <div class=\"mx-3\">
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('danger') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}
    </div>
    {% include 'headers/_jumbo.html.twig' with {jumboTitle:'Développeur Web et Web Mobile ',jumboText:\"Ecole Régionale du Numérique Carcassonne\"} %}
    <div class=\"col-12 text-center\">
        <p class=\"\">
            Cela se passe ici
        </p>
    </div>
    <div class=\" text-center\">
        <i class=\"fa fa-arrow-down fa-2x\"></i>
        <div class=\"mb-1\" id=\"leafletmap\"></div>
    </div>
    <section class=\"container\">
        <section class=\"row align-items-center justify-content-center  my-3 py-3 wrap\">
            <div class=\"col-12 text-center\" data-aos-duration=\"3100\" data-aos=\"fade-right\">
                <a href=\"{{ path('candidacy') }}\">
                    <button class=\"btn btn-block bg-red mb-2\" id=\"BtnToForm\">Je veux en faire partie !</button>
                </a>
                <p class=\"\">
                    Combien de temps ? quand ?
                </p>
                <i class=\"fa fa-arrow-down fa-2x\"></i>

                <h2 class=\" text-black\">
                    11 mois de formation qualifiante Niveau III  !
                </h2>

                <p class=\"lead \">du 14 octobre 2019 au 22 Septembre 2020</p>
            </div>
        </section>
        <section class=\"container\">
            <div class=\"row align-items-center justify-content-center  my-5 py-5\" data-aos-anchor-placement=\"top-center\" data-aos=\"fade-down\">
                <div class=\"col-lg-6 mbr-col-md-10 mt-2\">
                    <div class=\"wrap\">
                        <div class=\"ico-wrap\">
                            <span class=\"mbr-iconfont fa-volume-up fa\"></span>
                        </div>
                        <div class=\"text-wrap vcenter\">
                            <h2 class=\"mbr-fonts-style mbr-bold mbr-section-title3 display-5\">Programme
                                <span></span>
                            </h2>
                            <p class=\"mbr-fonts-style text1 mbr-text display-6\">
                                Formation basée sur la pédagogie active !</p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mbr-col-md-10 mt-2\">
                    <div class=\"wrap\">
                        <div class=\"ico-wrap\">
                            <span class=\"mbr-iconfont fa-calendar fa\"></span>
                        </div>
                        <div class=\"text-wrap vcenter\">
                            <h2 class=\"mbr-fonts-style mbr-bold mbr-section-title3 display-5\">Checkez
                                <span>nos dates de formations</span>
                            </h2>
                            <p class=\"mbr-fonts-style text1 mbr-text display-6\">
                                Vérifiez les autres formations dans les autres fabriques de la région</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mbr-col-md-10\" data-aos-anchor-placement=\"top-center\" data-aos=\"fade-down\">
                    <div class=\"wrap\">
                        <div class=\"ico-wrap\">
                            <span class=\"mbr-iconfont fa-globe fa\"></span>
                        </div>
                        <div class=\"text-wrap vcenter\">
                            <h2 class=\"mbr-fonts-style mbr-bold mbr-section-title3 display-5\">Phase d'acquisition des connaissances
                                <span></span>
                            </h2>
                            <p class=\"mbr-fonts-style text1 mbr-text display-6\">
                                Maquetter une application<br>
                                Développer une interface web et web mobile en responsive design<br>
                                Déployer un projet web en lien avec une base de données
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mbr-col-md-10\" data-aos-anchor-placement=\"top-center\" data-aos=\"fade-up\">
                    <div class=\"wrap\">
                        <div class=\"ico-wrap\">
                            <span class=\"mbr-iconfont fa-trophy fa\"></span>
                        </div>
                        <div class=\"text-wrap vcenter\">
                            <h2 class=\"mbr-fonts-style mbr-bold mbr-section-title3 display-5\">Des projets
                                <span>autour des entreprises</span>
                            </h2>
                            <p class=\"mbr-fonts-style text1 mbr-text display-6\">
                                Réaliser des projets pédagogiques professionnels<br>
                                <br>
                                Suivre des interventions d'acteurs du web<br>
                                <br>
                                Une période de formation en entreprise
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"container\" data-aos-duration=\"2000\" data-aos=\"fade-down\">
            <section class=\"row align-items-center justify-content-center my-3 py-3 wrap\">
                <div class=\"col-12  mb-2 text-center\">
                    <span class=\"h2 text-black\">
                        Comment s'inscrire ?
                    </span>
                </div>
                <section class=\"row align-items-center justify-content-center  my-3 py-3\">
                   <div class=\"col-lg-4 col-md-8 text-center\">
                        <p class=\"number\">
                            1
                        </p>
                        <p class=\"h4 text-black line\">
                            Badges Sololearn<br></p>
                        <p class=\"h6 text-black\">
                            25 leçons<strong>
                                HTML</strong><br>
                            25 leçons
                            <strong>CSS</strong>
                            <br>
                            29 leçons
                            <strong>JavaScript</strong>
                        </p>
                    </div>
                    <div class=\"col-lg-4 col-md-8 text-center mt-3\">
                        <p class=\"number\">
                            2
                        </p>
                        <p class=\"h4 text-black line\">
                            Dépôt des candidatures<br></p>
                        <p class=\"h6 text-black\">
                            <a href=\"{{ path('candidacy') }}\">
                                <button class=\"btn btn-block btn-light\" title=\"Formulaire en plusieurs étapes, temps approximatif : 20 min.\">Je veux devenir Dév. Web !</button>
                            </a>
                        </p>
                        <br>
                    </div>
                    <div class=\"col-lg-4 col-md-8 mb-2 text-center\">
                        <p class=\"number\">
                            3
                        </p>
                        <p class=\"h4 text-black line\">
                            Journée de sélection<br></p>
                        <p class=\"h6 text-black\">
                            <strong>Jeudi</strong>
                            6 septembre 2019<br>
                            <strong>Kappa[R] - Tiers lieu de formation</strong>
                        </p>
                    </div>
                </section>
            </section>
        </section>
        {% include 'footers/_mainfooter.html.twig' %}
{# call the mainfooter in the footers directory. #}
        {% endblock %}
    {% block javascripts %}
        <script src=\"js/leaflet.js\"></script>
    {% endblock %}
", "home/index.html.twig", "/Applications/MAMP/htdocs/SimplonSelectionSF/templates/home/index.html.twig");
    }
}
