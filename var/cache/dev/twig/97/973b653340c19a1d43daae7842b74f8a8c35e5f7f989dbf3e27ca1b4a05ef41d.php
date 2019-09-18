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

/* selection/index.html.twig */
class __TwigTemplate_16bd2536fae5c30ac302c0bcea2709611b4670b9b5cdd7cbb4c8cba4ab35e2d0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "selection/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "selection/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "selection/index.html.twig", 1);
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

        echo "Listes des sélections";
        
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
        $this->loadTemplate("headers/_jumbo.html.twig", "selection/index.html.twig", 6)->display(twig_array_merge($context, ["jumboTitle" => "Liste des sélections ", "jumboText" => ""]));
        // line 7
        echo "
    ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "    <div class=\"row justify-content-center text-center\">
        <div class=\"col-md-2  mt-2 mb-5\">
            <a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("selection_new");
            echo "\"><button class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i> Créer</button></a>
        </div>
    </div>
    ";
        } else {
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <table class=\"table\">
        <thead>
            <tr>
                ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MASTER")) {
            // line 20
            echo "                    <th>Pré-selection</th>
                ";
        } else {
            // line 22
            echo "                ";
        }
        // line 23
        echo "                <th>Titre</th>
                <th>Date de début</th>
                <th>Date de clôture</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selections"]) || array_key_exists("selections", $context) ? $context["selections"] : (function () { throw new RuntimeError('Variable "selections" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["selection"]) {
            // line 33
            echo "
                <tr>
                    ";
            // line 35
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MASTER")) {
                // line 36
                echo "                    <td>

                            ";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, $context["selection"], "status", [], "any", false, false, false, 38) == true)) {
                    // line 39
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("selectionStatus", ["id" => twig_get_attribute($this->env, $this->source, $context["selection"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                    echo "\" class=\"selectionStatus\">
                                    <label  class=\"toggle\">
                                        <input class=\"selectionInput\" id=\"selectionInput\" type=\"radio\" name=\"radio-toggle\" checked=\"checked\">
                                        <i data-swchon-text=\"ON\" data-swchoff-text=\"OFF\"></i>
                                    </label>
                                </a>
                            ";
                } else {
                    // line 46
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("selectionStatus", ["id" => twig_get_attribute($this->env, $this->source, $context["selection"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                    echo "\" class=\"selectionStatus\">
                                    <label  class=\"toggle\">
                                        <input class=\"selectionInput\" id=\"selectionInput\" type=\"radio\" name=\"radio-toggle\">
                                        <i data-swchon-text=\"ON\" data-swchoff-text=\"OFF\"></i>
                                    </label>
                                </a>
                            ";
                }
                // line 53
                echo "                    </td>
                    ";
            } else {
                // line 55
                echo "                    ";
            }
            // line 56
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["selection"], "title", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            ((twig_get_attribute($this->env, $this->source, $context["selection"], "dateStart", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["selection"], "dateStart", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 58
            ((twig_get_attribute($this->env, $this->source, $context["selection"], "dateEnd", [], "any", false, false, false, 58)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["selection"], "dateEnd", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["selection"], "address", [], "any", false, false, false, 59), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["selection"], "postCode", [], "any", false, false, false, 59), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["selection"], "city", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("selection_show", ["id" => twig_get_attribute($this->env, $this->source, $context["selection"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\"><button class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></button></a>
                        ";
            // line 62
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 63
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("selection_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["selection"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\"><button class=\"btn btn-warning\"><i class=\"fa fa-pencil-square-o\"></i></button></a>
                        ";
                // line 64
                echo twig_include($this->env, $context, "selection/_delete_form.html.twig");
                echo "

                        ";
            } else {
                // line 67
                echo "                        ";
            }
            // line 68
            echo "                    </td>
                </tr>


            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 73
            echo "            <tr>
                <td colspan=\"8\">Pas de selection enregistrée</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script>
        function onClickBtnLike(event){
            event.preventDefault();

            let href = this.querySelector('.toggle').parentNode;
            let url = this.href;


            axios.get(url).then(function(response){

                href.innerHTML = '<label class=\"toggle\"><input class=\"selectionInput\" id=\"selectionInput\" type=\"radio\" name=\"radio-toggle\" checked=\"checked\"><i data-swchon-text=\"ON\" data-swchoff-text=\"OFF\"></i></label>';

            }).catch(function(error){
                if(error.response.status === 403){
                    window.alert(\"Vous ne pouvez pas aactiver cette selection si vous n'êtes pas admin ou master !\");
                }else{
                    window.alert(\"une erreur s'est produite, réessayer plus tard !\");
                }
            });
        }

        document.querySelectorAll('a.selectionStatus').forEach(function(link){
            link.addEventListener('click', onClickBtnLike);
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "selection/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 81,  275 => 80,  263 => 77,  254 => 73,  237 => 68,  234 => 67,  228 => 64,  223 => 63,  221 => 62,  217 => 61,  208 => 59,  204 => 58,  200 => 57,  195 => 56,  192 => 55,  188 => 53,  177 => 46,  166 => 39,  164 => 38,  160 => 36,  158 => 35,  154 => 33,  136 => 32,  125 => 23,  122 => 22,  118 => 20,  116 => 19,  111 => 16,  108 => 15,  101 => 11,  97 => 9,  95 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listes des sélections{% endblock %}

{% block body %}
    {% include 'headers/_jumbo.html.twig' with {jumboTitle:'Liste des sélections ',jumboText:\"\"} %}

    {% if is_granted('ROLE_ADMIN') %}
    <div class=\"row justify-content-center text-center\">
        <div class=\"col-md-2  mt-2 mb-5\">
            <a href=\"{{ path('selection_new') }}\"><button class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i> Créer</button></a>
        </div>
    </div>
    {% else %}
    {% endif %}
    <table class=\"table\">
        <thead>
            <tr>
                {% if is_granted('ROLE_MASTER') %}
                    <th>Pré-selection</th>
                {% else %}
                {% endif %}
                <th>Titre</th>
                <th>Date de début</th>
                <th>Date de clôture</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            {% for selection in selections %}

                <tr>
                    {% if is_granted('ROLE_MASTER') %}
                    <td>

                            {% if selection.status == true %}
                                <a href=\"{{ path('selectionStatus', {'id':selection.id}) }}\" class=\"selectionStatus\">
                                    <label  class=\"toggle\">
                                        <input class=\"selectionInput\" id=\"selectionInput\" type=\"radio\" name=\"radio-toggle\" checked=\"checked\">
                                        <i data-swchon-text=\"ON\" data-swchoff-text=\"OFF\"></i>
                                    </label>
                                </a>
                            {% else %}
                                <a href=\"{{ path('selectionStatus', {'id':selection.id}) }}\" class=\"selectionStatus\">
                                    <label  class=\"toggle\">
                                        <input class=\"selectionInput\" id=\"selectionInput\" type=\"radio\" name=\"radio-toggle\">
                                        <i data-swchon-text=\"ON\" data-swchoff-text=\"OFF\"></i>
                                    </label>
                                </a>
                            {% endif %}
                    </td>
                    {% else %}
                    {% endif %}
                    <td>{{ selection.title }}</td>
                    <td>{{ selection.dateStart ? selection.dateStart|date('d/m/Y') : '' }}</td>
                    <td>{{ selection.dateEnd ? selection.dateEnd|date('d/m/Y') : '' }}</td>
                    <td>{{ selection.address }}<br>{{ selection.postCode }} {{ selection.city }}</td>
                    <td>
                        <a href=\"{{ path('selection_show', {'id': selection.id}) }}\"><button class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></button></a>
                        {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"{{ path('selection_edit', {'id': selection.id}) }}\"><button class=\"btn btn-warning\"><i class=\"fa fa-pencil-square-o\"></i></button></a>
                        {{ include('selection/_delete_form.html.twig') }}

                        {% else %}
                        {% endif %}
                    </td>
                </tr>


            {% else %}
            <tr>
                <td colspan=\"8\">Pas de selection enregistrée</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
{% block javascripts %}
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script>
        function onClickBtnLike(event){
            event.preventDefault();

            let href = this.querySelector('.toggle').parentNode;
            let url = this.href;


            axios.get(url).then(function(response){

                href.innerHTML = '<label class=\"toggle\"><input class=\"selectionInput\" id=\"selectionInput\" type=\"radio\" name=\"radio-toggle\" checked=\"checked\"><i data-swchon-text=\"ON\" data-swchoff-text=\"OFF\"></i></label>';

            }).catch(function(error){
                if(error.response.status === 403){
                    window.alert(\"Vous ne pouvez pas aactiver cette selection si vous n'êtes pas admin ou master !\");
                }else{
                    window.alert(\"une erreur s'est produite, réessayer plus tard !\");
                }
            });
        }

        document.querySelectorAll('a.selectionStatus').forEach(function(link){
            link.addEventListener('click', onClickBtnLike);
        })
    </script>
{% endblock %}", "selection/index.html.twig", "/Applications/MAMP/htdocs/SimplonSelectionSF/templates/selection/index.html.twig");
    }
}
