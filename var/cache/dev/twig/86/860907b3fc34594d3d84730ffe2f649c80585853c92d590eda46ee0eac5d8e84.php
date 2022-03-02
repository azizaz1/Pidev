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

/* back-office/hotel/list.html.twig */
class __TwigTemplate_c07afd24f811189151024e550d560c4a6f16d53fe6c2dc01c75bd333a7baf07b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/hotel/list.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "back-office/hotel/list.html.twig", 1);
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
                                <h3 class=\"nk-block-title page-title\">Liste des Hôtels</h3><div class=\"nk-block-des text-soft\">
                                    <p>You have total 36 Hôtels</p>
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
                    <th scope=\"col\">Classe</th>
                    <th scope=\"col\">Lieu</th>


                </tr>
                </tr>
                </thead>
                <tbody>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 41
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</th>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "classe", [], "any", false, false, false, 43), "html", null, true);
            echo "  </td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "lieu", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>

                        <td><button class=\"btn btn-primary\"><a class=\"text-light\"  href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateu", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">update</a></button>       <button class=\"btn btn-danger\" ><a class=\"text-light\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteu", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">delete</a></button></td>

                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </tbody>
            </table>
                        <td><button class=\"btn btn-primary\"><a class=\"text-light\"  href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addh");
        echo "\">ajouter</a></button>

        </div>
    </div>
    </div>











";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back-office/hotel/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 53,  130 => 51,  117 => 46,  112 => 44,  108 => 43,  104 => 42,  101 => 41,  97 => 40,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block body %}


    <div class=\"nk-content \"><div class=\"container-fluid\"><div class=\"nk-content-inner\"><div class=\"nk-content-body\">
                    <div class=\"nk-block-head nk-block-head-sm\"><div class=\"nk-block-between\"><div class=\"nk-block-head-content\">
                                <h3 class=\"nk-block-title page-title\">Liste des Hôtels</h3><div class=\"nk-block-des text-soft\">
                                    <p>You have total 36 Hôtels</p>
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
                    <th scope=\"col\">Classe</th>
                    <th scope=\"col\">Lieu</th>


                </tr>
                </tr>
                </thead>
                <tbody>
                {% for c in hotel %}
                    <tr>
                        <th scope=\"row\">{{ c.id }}</th>
                        <td>{{ c.classe}}  </td>
                        <td>{{ c.lieu }}</td>

                        <td><button class=\"btn btn-primary\"><a class=\"text-light\"  href=\"{{ path( 'updateu' , {'id':c.id} )}}\">update</a></button>       <button class=\"btn btn-danger\" ><a class=\"text-light\" href=\"{{ path( 'deleteu' , {'id':c.id} )}}\">delete</a></button></td>

                    </tr>

                {% endfor %}
                </tbody>
            </table>
                        <td><button class=\"btn btn-primary\"><a class=\"text-light\"  href=\"{{ path( 'addh')}}\">ajouter</a></button>

        </div>
    </div>
    </div>











{% endblock %}", "back-office/hotel/list.html.twig", "C:\\Users\\Admin\\Desktop\\pii\\pidev\\templates\\back-office\\hotel\\list.html.twig");
    }
}
