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

/* user/index.html.twig */
class __TwigTemplate_5680578af0a301f9341ee19d41d8c4f78d1ce89f2c84691f03d9a931fa8629a0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo "User index";
        
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
        $this->loadTemplate("headers/_jumbo.html.twig", "user/index.html.twig", 6)->display(twig_array_merge($context, ["jumboTitle" => "Utilisateurs ", "jumboText" => "Affichage de tout les utilisateurs inscrits"]));
        // line 7
        echo "    <table class=\"table\">
        <thead>
        <tr>
            <th>Nom/Prénom</th>
            <th>Email</th>
            <th class=\"d-none d-sm-block\">Role</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 19), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo " </td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 21) == [0 => "ROLE_ADMIN"])) {
                // line 22
                echo "                <td class=\"d-none d-sm-block\">Admin</td>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 23
$context["user"], "roles", [], "any", false, false, false, 23) == [0 => "ROLE_MASTER"])) {
                // line 24
                echo "                <td class=\"d-none d-sm-block\">Master</td>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 25
$context["user"], "roles", [], "any", false, false, false, 25) == [0 => "ROLE_JURY"])) {
                // line 26
                echo "                <td class=\"d-none d-sm-block\">Jury</td>
                ";
            } else {
                // line 28
                echo "                <td class=\"d-none d-sm-block\">User</td>
                ";
            }
            // line 30
            echo "                <td>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">
                        <button class=\"btn btn-success\">Voir</button>
                    </a>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">
                        <button class=\"btn btn-warning\">Modifier</button>
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "            <tr>
                <td colspan=\"5\">nAucun utilisateur trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        echo "\">
        <button class=\"btn btn-secondary\">Créer un nouvel utilisateur</button>
    </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 47,  170 => 44,  161 => 40,  150 => 34,  144 => 31,  141 => 30,  137 => 28,  133 => 26,  131 => 25,  128 => 24,  126 => 23,  123 => 22,  121 => 21,  117 => 20,  111 => 19,  108 => 18,  103 => 17,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}
    {% include 'headers/_jumbo.html.twig' with {jumboTitle:'Utilisateurs ',jumboText:\"Affichage de tout les utilisateurs inscrits\"} %}
    <table class=\"table\">
        <thead>
        <tr>
            <th>Nom/Prénom</th>
            <th>Email</th>
            <th class=\"d-none d-sm-block\">Role</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.surname }} {{ user.name }} </td>
                <td>{{ user.email }}</td>
                {% if user.roles == ['ROLE_ADMIN'] %}
                <td class=\"d-none d-sm-block\">Admin</td>
                {% elseif user.roles == ['ROLE_MASTER'] %}
                <td class=\"d-none d-sm-block\">Master</td>
                {% elseif user.roles == ['ROLE_JURY'] %}
                <td class=\"d-none d-sm-block\">Jury</td>
                {% else %}
                <td class=\"d-none d-sm-block\">User</td>
                {% endif %}
                <td>
                    <a href=\"{{ path('user_show', {'id': user.id}) }}\">
                        <button class=\"btn btn-success\">Voir</button>
                    </a>
                    <a href=\"{{ path('user_edit', {'id': user.id}) }}\">
                        <button class=\"btn btn-warning\">Modifier</button>
                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">nAucun utilisateur trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('user_new') }}\">
        <button class=\"btn btn-secondary\">Créer un nouvel utilisateur</button>
    </a>
{% endblock %}
", "user/index.html.twig", "/Applications/MAMP/htdocs/SimplonSelectionSF/templates/user/index.html.twig");
    }
}
