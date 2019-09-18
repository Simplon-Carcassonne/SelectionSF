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

/* candidate/index.html.twig */
class __TwigTemplate_89e9f25e7db7e5d109172aa39e72ff63d9d6ee3fe7f2ba937201f917c1691fae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidate/index.html.twig", 1);
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

        echo "Candidate index";
        
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
        echo "    ";
        $this->loadTemplate("headers/_jumbo.html.twig", "candidate/index.html.twig", 6)->display(twig_array_merge($context, ["jumboTitle" => "Candidats ", "jumboText" => "Affichage de tous les candidats ayant postulé a toutes les sélections"]));
        // line 7
        echo "
    <table class=\"table\">
        <thead>
            <tr>
                <th class=\"d-none d-sm-table-cell\">Genre</th>
                <th class=\"d-sm-table-cell\">Nom</th>
                <th class=\"d-sm-table-cell\">Prénom</th>
                <th class=\"d-none d-sm-table-cell\">Sélection</th>
                <th class=\"d-none d-sm-table-cell\">Date_de_naissance</th>
                <th class=\"d-sm-table-cell\">Téléphone</th>
                <th class=\"d-none d-sm-table-cell\">Adresse_email</th>
                <th class=\"d-none d-sm-table-cell\">Nationalité</th>
                <th class=\"d-none d-sm-table-cell\">Préselec.</th>
                <th class=\"d-sm-table-cell\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidates"]) || array_key_exists("candidates", $context) ? $context["candidates"] : (function () { throw new RuntimeError('Variable "candidates" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 25
            echo "            <tr>
              ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, $context["candidate"], "genus", [], "any", false, false, false, 26) == "female")) {
                // line 27
                echo "                <td class=\"d-none d-sm-table-cell\"><i class=\"fa fa-female\"></i></td>
              ";
            } else {
                // line 29
                echo "              <td class=\"d-none d-sm-table-cell\"><i class=\"fa fa-male\"></i></td>
              ";
            }
            // line 31
            echo "                <td class=\"d-sm-table-cell\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td class=\"d-sm-table-cell\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "surname", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
               <th class=\"d-none d-sm-table-cell\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidate"], "selection", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</th>
                <td class=\"d-none d-sm-table-cell\">";
            // line 34
            ((twig_get_attribute($this->env, $this->source, $context["candidate"], "dateOfBirth", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "dateOfBirth", [], "any", false, false, false, 34), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                <td class=\"d-sm-table-cell\"> ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "phoneNumber", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td class=\"d-none d-sm-table-cell\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "mailAddress", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td class=\"d-none d-sm-table-cell\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "nationality", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>

                ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["candidate"], "status", [], "any", false, false, false, 39) == 1)) {
                // line 40
                echo "                <td class=\"d-none d-sm-table-cell green\"><i class=\"fa fa-check\"></i></td>
                ";
            } else {
                // line 42
                echo "                <td class=\"d-none d-sm-table-cell red\"><i class=\"fa fa-times\"></i></td>
                ";
            }
            // line 44
            echo "                <td>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_show", ["id" => twig_get_attribute($this->env, $this->source, $context["candidate"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><button class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></button></a>
                    ";
            // line 46
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MASTER")) {
                // line 47
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["candidate"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\"><button class=\"btn btn-warning\"><i class=\"fa fa-pencil-square-o\"></i></button></a>
                    ";
            } else {
                // line 49
                echo "
                    ";
            }
            // line 51
            echo "
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "            <tr>
                <td colspan=\"32\">Aucun candidat trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidate/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 59,  195 => 55,  187 => 51,  183 => 49,  177 => 47,  175 => 46,  171 => 45,  168 => 44,  164 => 42,  160 => 40,  158 => 39,  153 => 37,  149 => 36,  145 => 35,  141 => 34,  137 => 33,  133 => 32,  128 => 31,  124 => 29,  120 => 27,  118 => 26,  115 => 25,  110 => 24,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Candidate index{% endblock %}

{% block body %}
    {% include 'headers/_jumbo.html.twig' with {jumboTitle:'Candidats ',jumboText:\"Affichage de tous les candidats ayant postulé a toutes les sélections\"} %}

    <table class=\"table\">
        <thead>
            <tr>
                <th class=\"d-none d-sm-table-cell\">Genre</th>
                <th class=\"d-sm-table-cell\">Nom</th>
                <th class=\"d-sm-table-cell\">Prénom</th>
                <th class=\"d-none d-sm-table-cell\">Sélection</th>
                <th class=\"d-none d-sm-table-cell\">Date_de_naissance</th>
                <th class=\"d-sm-table-cell\">Téléphone</th>
                <th class=\"d-none d-sm-table-cell\">Adresse_email</th>
                <th class=\"d-none d-sm-table-cell\">Nationalité</th>
                <th class=\"d-none d-sm-table-cell\">Préselec.</th>
                <th class=\"d-sm-table-cell\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for candidate in candidates %}
            <tr>
              {% if candidate.genus == 'female'  %}
                <td class=\"d-none d-sm-table-cell\"><i class=\"fa fa-female\"></i></td>
              {% else %}
              <td class=\"d-none d-sm-table-cell\"><i class=\"fa fa-male\"></i></td>
              {% endif %}
                <td class=\"d-sm-table-cell\">{{ candidate.name }}</td>
                <td class=\"d-sm-table-cell\">{{ candidate.surname }}</td>
               <th class=\"d-none d-sm-table-cell\">{{ candidate.selection.title }}</th>
                <td class=\"d-none d-sm-table-cell\">{{ candidate.dateOfBirth ? candidate.dateOfBirth|date('d-m-Y') : '' }}</td>
                <td class=\"d-sm-table-cell\"> {{ candidate.phoneNumber }}</td>
                <td class=\"d-none d-sm-table-cell\">{{ candidate.mailAddress }}</td>
                <td class=\"d-none d-sm-table-cell\">{{ candidate.nationality }}</td>

                {% if candidate.status == 1  %}
                <td class=\"d-none d-sm-table-cell green\"><i class=\"fa fa-check\"></i></td>
                {% else %}
                <td class=\"d-none d-sm-table-cell red\"><i class=\"fa fa-times\"></i></td>
                {% endif %}
                <td>
                    <a href=\"{{ path('candidate_show', {'id': candidate.id}) }}\"><button class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></button></a>
                    {% if is_granted('ROLE_MASTER') %}
                        <a href=\"{{ path('candidate_edit', {'id': candidate.id}) }}\"><button class=\"btn btn-warning\"><i class=\"fa fa-pencil-square-o\"></i></button></a>
                    {% else %}

                    {% endif %}

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"32\">Aucun candidat trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock%}
", "candidate/index.html.twig", "/Applications/MAMP/htdocs/SimplonSelectionSF/templates/candidate/index.html.twig");
    }
}
