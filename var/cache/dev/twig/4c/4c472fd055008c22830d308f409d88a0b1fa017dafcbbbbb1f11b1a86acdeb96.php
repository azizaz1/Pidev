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

/* back-office/reservation/list.html.twig */
class __TwigTemplate_66132a567adcd59ab70c7a37e48288c1b76b993167572d450feb46cfdc9b18ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/reservation/list.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "back-office/reservation/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <div class=\"nk-content \"><div class=\"container-fluid\"><div class=\"nk-content-inner\"><div class=\"nk-content-body\">
                    <div class=\"nk-block-head nk-block-head-sm\"><div class=\"nk-block-between\"><div class=\"nk-block-head-content\">
                                <h3 class=\"nk-block-title page-title\">Liste des Réservations</h3><div class=\"nk-block-des text-soft\">
                                    <p>You have total 1000 Réservations</p>
                                </div>
                            </div>
                            <div class=\"nk-block-head-content\">
                                <div class=\"toggle-wrap nk-block-tools-toggle\">
                                    <a href=\"#\" class=\"btn btn-icon btn-trigger toggle-expand mr-n1\" data-target=\"pageMenu\">
                                        <em class=\"icon ni ni-menu-alt-r\"></em>
                                    </a>
                                    <div class=\"toggle-expand-content\" data-content=\"pageMenu\">
                                        <ul class=\"nk-block-tools g-3\"></ul>
                                    </div>
                                </div>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Date Arrivée</th>
                    <th scope=\"col\">Date Depart</th>
                    <th scope=\"col\">Prix</th>


                </tr>
                </tr>
                </thead>
                <tbody>
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 42
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</th>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getDateDebut", [], "method", false, false, false, 44), "d-m-Y"), "html", null, true);
            echo "  </td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getDateDebut", [], "method", false, false, false, 45), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "prix", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>


                        <td><button class=\"btn btn-primary\"><a class=\"text-light\"  href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateu", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">update</a></button>       <button class=\"btn btn-danger\" ><a class=\"text-light\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteu", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">delete</a></button></td>

                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </tbody>
            </table>
                        <td><button class=\"btn btn-primary\"><a class=\"text-light\"  href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addr");
        echo "\">ajouter</a></button>

        </div>
    </div>
    </div>











";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back-office/reservation/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  136 => 54,  123 => 49,  117 => 46,  113 => 45,  109 => 44,  105 => 43,  102 => 42,  98 => 41,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block body %}


    <div class=\"nk-content \"><div class=\"container-fluid\"><div class=\"nk-content-inner\"><div class=\"nk-content-body\">
                    <div class=\"nk-block-head nk-block-head-sm\"><div class=\"nk-block-between\"><div class=\"nk-block-head-content\">
                                <h3 class=\"nk-block-title page-title\">Liste des Réservations</h3><div class=\"nk-block-des text-soft\">
                                    <p>You have total 1000 Réservations</p>
                                </div>
                            </div>
                            <div class=\"nk-block-head-content\">
                                <div class=\"toggle-wrap nk-block-tools-toggle\">
                                    <a href=\"#\" class=\"btn btn-icon btn-trigger toggle-expand mr-n1\" data-target=\"pageMenu\">
                                        <em class=\"icon ni ni-menu-alt-r\"></em>
                                    </a>
                                    <div class=\"toggle-expand-content\" data-content=\"pageMenu\">
                                        <ul class=\"nk-block-tools g-3\"></ul>
                                    </div>
                                </div>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Date Arrivée</th>
                    <th scope=\"col\">Date Depart</th>
                    <th scope=\"col\">Prix</th>


                </tr>
                </tr>
                </thead>
                <tbody>
                {% for c in reservation %}
                    <tr>
                        <th scope=\"row\">{{ c.id }}</th>
                        <td>{{ c.getDateDebut()|date('d-m-Y') }}  </td>
                        <td>{{ c.getDateDebut()|date('d-m-Y') }}</td>
                        <td>{{ c.prix }}</td>


                        <td><button class=\"btn btn-primary\"><a class=\"text-light\"  href=\"{{ path( 'updateu' , {'id':c.id} )}}\">update</a></button>       <button class=\"btn btn-danger\" ><a class=\"text-light\" href=\"{{ path( 'deleteu' , {'id':c.id} )}}\">delete</a></button></td>

                    </tr>

                {% endfor %}
                </tbody>
            </table>
                        <td><button class=\"btn btn-primary\"><a class=\"text-light\"  href=\"{{ path( 'addr')}}\">ajouter</a></button>

        </div>
    </div>
    </div>











{% endblock %}", "back-office/reservation/list.html.twig", "C:\\Users\\Admin\\Desktop\\pii\\pidev\\templates\\back-office\\reservation\\list.html.twig");
    }
}
