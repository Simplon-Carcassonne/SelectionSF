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

/* candidate/show.html.twig */
class __TwigTemplate_6fa67b3b5413820476a1289755652dd87fbec363699aaae5dcf1150c6023d6c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidate/show.html.twig", 1);
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

        echo "Candidate";
        
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
        echo "    <h1 class=\"ml-3 my-3 h1\">Candidat ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 6, $this->source); })()), "surname", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    <!-- <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\">
        <button class=\"btn btn-secondary mb-3\"><i class=\"fa fa-arrow-left\"></i></button></a>
        <a href=javascript:history.go(-1)><i class=\"fa fa-arrow-left\"></i> Retour</a> -->
        <form>
<input class=\"btn btn-secondary mb-3\" type = \"button\" value = \"Retour\"  onclick = \"history.back()\">
</form>
    <div class=\"col-md-8\">
        <table class=\"table\">
            <tbody>
            <tr>
                <th>Genre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 18, $this->source); })()), "genus", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 26, $this->source); })()), "surname", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_de_naissance</th>
                <td>";
        // line 30
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 30, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 30, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 34, $this->source); })()), "address", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>code_postal</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 38, $this->source); })()), "postCode", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 42, $this->source); })()), "city", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numéro_de_téléphone</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 46, $this->source); })()), "phoneNumber", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse_mail</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 50, $this->source); })()), "mailAddress", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dev_skills</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 54, $this->source); })()), "devSkills", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Niveau_scolaire</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 58, $this->source); })()), "schoolLevel", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Situation</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 62, $this->source); })()), "situation", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pays_de_naissance</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 66, $this->source); })()), "birthCountry", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nationalité</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 70, $this->source); })()), "nationality", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pole_emploi_id</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 74, $this->source); })()), "poleEmploiId", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pole_emploi_compensation_date_de_fin</th>
                <td>";
        // line 78
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 78, $this->source); })()), "poleEmploiCompensationEndDate", [], "any", false, false, false, 78)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 78, $this->source); })()), "poleEmploiCompensationEndDate", [], "any", false, false, false, 78), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Sécurité_social</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 82, $this->source); })()), "socialSecurity", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Super-héros</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 86, $this->source); })()), "superhero", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hack_experience</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 90, $this->source); })()), "hackExperience", [], "any", false, false, false, 90), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>School_stopped_year</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 94, $this->source); })()), "schoolStoppedYear", [], "any", false, false, false, 94), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resumé</th>
                <td>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 98, $this->source); })()), "resume", [], "any", false, false, false, 98), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Niveau_anglais</th>
                <td>";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 102, $this->source); })()), "englishLevel", [], "any", false, false, false, 102), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Motivation</th>
                <td>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 106, $this->source); })()), "motivation", [], "any", false, false, false, 106), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Un_an_plus_tard</th>
                <td>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 110, $this->source); })()), "oneYearLater", [], "any", false, false, false, 110), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sololearn</th>
                <td>";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 114, $this->source); })()), "sololearn", [], "any", false, false, false, 114), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sololearn_bonus</th>
                <td>";
        // line 118
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 118, $this->source); })()), "sololearnBonus", [], "any", false, false, false, 118)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 118, $this->source); })()), "sololearnBonus", [], "any", false, false, false, 118), ", "), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Disponibilité</th>
                <td>";
        // line 122
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 122, $this->source); })()), "disponibility", [], "any", false, false, false, 122)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Rémunération</th>
                <td>";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 126, $this->source); })()), "remuneration", [], "any", false, false, false, 126), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Guidance_source</th>
                <td>";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 130, $this->source); })()), "guidanceSource", [], "any", false, false, false, 130), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Préselection</th>
                <td>";
        // line 134
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 134, $this->source); })()), "status", [], "any", false, false, false, 134)) ? ("Oui") : ("Non"));
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"mb-5 row\">
        <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 140, $this->source); })()), "id", [], "any", false, false, false, 140)]), "html", null, true);
        echo "\">
            <button class=\"btn btn-secondary m-3\"><i class=\"fa fa-arrow-left\"></i></button>
        </a>
        ";
        // line 143
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MASTER")) {
            // line 144
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144)]), "html", null, true);
            echo "\">
                <button class=\"btn btn-warning m-3\"><i class=\"fa fa-pencil-square-o\"></i></button>
            </a>
            ";
            // line 147
            echo twig_include($this->env, $context, "candidate/_delete_form.html.twig");
            echo "
        ";
        } else {
            // line 149
            echo "
        ";
        }
        // line 151
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidate/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 151,  341 => 149,  336 => 147,  329 => 144,  327 => 143,  321 => 140,  312 => 134,  305 => 130,  298 => 126,  291 => 122,  284 => 118,  277 => 114,  270 => 110,  263 => 106,  256 => 102,  249 => 98,  242 => 94,  235 => 90,  228 => 86,  221 => 82,  214 => 78,  207 => 74,  200 => 70,  193 => 66,  186 => 62,  179 => 58,  172 => 54,  165 => 50,  158 => 46,  151 => 42,  144 => 38,  137 => 34,  130 => 30,  123 => 26,  116 => 22,  109 => 18,  95 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Candidate{% endblock %}

{% block body %}
    <h1 class=\"ml-3 my-3 h1\">Candidat {{ candidate.surname }} {{ candidate.name }}</h1>
    <!-- <a href=\"{{ path('candidate_index', {'id': candidate.id}) }}\">
        <button class=\"btn btn-secondary mb-3\"><i class=\"fa fa-arrow-left\"></i></button></a>
        <a href=javascript:history.go(-1)><i class=\"fa fa-arrow-left\"></i> Retour</a> -->
        <form>
<input class=\"btn btn-secondary mb-3\" type = \"button\" value = \"Retour\"  onclick = \"history.back()\">
</form>
    <div class=\"col-md-8\">
        <table class=\"table\">
            <tbody>
            <tr>
                <th>Genre</th>
                <td>{{ candidate.genus }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ candidate.name }}</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>{{ candidate.surname }}</td>
            </tr>
            <tr>
                <th>Date_de_naissance</th>
                <td>{{ candidate.dateOfBirth ? candidate.dateOfBirth|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ candidate.address }}</td>
            </tr>
            <tr>
                <th>code_postal</th>
                <td>{{ candidate.postCode }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ candidate.city }}</td>
            </tr>
            <tr>
                <th>Numéro_de_téléphone</th>
                <td>{{ candidate.phoneNumber }}</td>
            </tr>
            <tr>
                <th>Adresse_mail</th>
                <td>{{ candidate.mailAddress }}</td>
            </tr>
            <tr>
                <th>Dev_skills</th>
                <td>{{ candidate.devSkills }}</td>
            </tr>
            <tr>
                <th>Niveau_scolaire</th>
                <td>{{ candidate.schoolLevel }}</td>
            </tr>
            <tr>
                <th>Situation</th>
                <td>{{ candidate.situation }}</td>
            </tr>
            <tr>
                <th>Pays_de_naissance</th>
                <td>{{ candidate.birthCountry }}</td>
            </tr>
            <tr>
                <th>Nationalité</th>
                <td>{{ candidate.nationality }}</td>
            </tr>
            <tr>
                <th>Pole_emploi_id</th>
                <td>{{ candidate.poleEmploiId }}</td>
            </tr>
            <tr>
                <th>Pole_emploi_compensation_date_de_fin</th>
                <td>{{ candidate.poleEmploiCompensationEndDate ? candidate.poleEmploiCompensationEndDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Sécurité_social</th>
                <td>{{ candidate.socialSecurity }}</td>
            </tr>
            <tr>
                <th>Super-héros</th>
                <td>{{ candidate.superhero }}</td>
            </tr>
            <tr>
                <th>Hack_experience</th>
                <td>{{ candidate.hackExperience }}</td>
            </tr>
            <tr>
                <th>School_stopped_year</th>
                <td>{{ candidate.schoolStoppedYear }}</td>
            </tr>
            <tr>
                <th>Resumé</th>
                <td>{{ candidate.resume }}</td>
            </tr>
            <tr>
                <th>Niveau_anglais</th>
                <td>{{ candidate.englishLevel }}</td>
            </tr>
            <tr>
                <th>Motivation</th>
                <td>{{ candidate.motivation }}</td>
            </tr>
            <tr>
                <th>Un_an_plus_tard</th>
                <td>{{ candidate.oneYearLater }}</td>
            </tr>
            <tr>
                <th>Sololearn</th>
                <td>{{ candidate.sololearn }}</td>
            </tr>
            <tr>
                <th>Sololearn_bonus</th>
                <td>{{ candidate.sololearnBonus ? candidate.sololearnBonus|join(', ') : '' }}</td>
            </tr>
            <tr>
                <th>Disponibilité</th>
                <td>{{ candidate.disponibility ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Rémunération</th>
                <td>{{ candidate.remuneration }}</td>
            </tr>
            <tr>
                <th>Guidance_source</th>
                <td>{{ candidate.guidanceSource }}</td>
            </tr>
            <tr>
                <th>Préselection</th>
                <td>{{ candidate.status ? 'Oui' : 'Non' }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"mb-5 row\">
        <a href=\"{{ path('candidate_index', {'id': candidate.id}) }}\">
            <button class=\"btn btn-secondary m-3\"><i class=\"fa fa-arrow-left\"></i></button>
        </a>
        {% if is_granted('ROLE_MASTER') %}
            <a href=\"{{ path('candidate_edit', {'id': candidate.id}) }}\">
                <button class=\"btn btn-warning m-3\"><i class=\"fa fa-pencil-square-o\"></i></button>
            </a>
            {{ include('candidate/_delete_form.html.twig') }}
        {% else %}

        {% endif %}
    </div>

{% endblock %}
", "candidate/show.html.twig", "/Applications/MAMP/htdocs/SimplonSelectionSF/templates/candidate/show.html.twig");
    }
}
