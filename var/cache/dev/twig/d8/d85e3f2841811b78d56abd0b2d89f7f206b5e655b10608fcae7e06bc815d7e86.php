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

/* back-office/user/list.html.twig */
class __TwigTemplate_59d8d99f107d63353249c1d6e0e05340677b56c57ce1f88783974b42b09b292a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/user/list.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "back-office/user/list.html.twig", 1);
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
                                <h3 class=\"nk-block-title page-title\">Liste des utilisateurs</h3><div class=\"nk-block-des text-soft\">
                                    <p>You have total 2,595 customer's.</p>
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
                    <th scope=\"col\">User</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">CIN</th>
                    <th scope=\"col\">Date de naissance</th>
                    <th scope=\"col\">Téléphone</th>
                    <th scope=\"col\">Action</th>

                </tr>
                </tr>
                </thead>
                <tbody>
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 44
            echo "                <tr>
                    <th scope=\"row\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</th>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 46), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "prenom", [], "any", false, false, false, 46), "html", null, true);
            echo "  </td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "mail", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "CIN", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getDateNaissance", [], "method", false, false, false, 49), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "telephone", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td><button class=\"btn btn-primary\"><a class=\"text-light\"  href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateu", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">update</a></button>       <button class=\"btn btn-danger\" ><a class=\"text-light\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteu", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">delete</a></button></td>
                         

                </tr>
                  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </tbody>
            </table>
            <td><button class=\"btn btn-primary\"><a class=\"text-light\"  href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addu");
        echo "\">ajouter</a></button>
    </div>
    </div>
    </div>











";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back-office/user/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 59,  147 => 57,  133 => 51,  129 => 50,  125 => 49,  121 => 48,  117 => 47,  111 => 46,  107 => 45,  104 => 44,  100 => 43,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block body %}


    <div class=\"nk-content \"><div class=\"container-fluid\"><div class=\"nk-content-inner\"><div class=\"nk-content-body\">
                    <div class=\"nk-block-head nk-block-head-sm\"><div class=\"nk-block-between\"><div class=\"nk-block-head-content\">
                                <h3 class=\"nk-block-title page-title\">Liste des utilisateurs</h3><div class=\"nk-block-des text-soft\">
                                    <p>You have total 2,595 customer's.</p>
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
                    <th scope=\"col\">User</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">CIN</th>
                    <th scope=\"col\">Date de naissance</th>
                    <th scope=\"col\">Téléphone</th>
                    <th scope=\"col\">Action</th>

                </tr>
                </tr>
                </thead>
                <tbody>
                {% for c in user %}
                <tr>
                    <th scope=\"row\">{{ c.id }}</th>
                    <td>{{ c.nom }} {{ c.prenom }}  </td>
                    <td>{{ c.mail }}</td>
                    <td>{{ c.CIN }}</td>
                    <td>{{ c.getDateNaissance()|date('d-m-Y')}}</td>
                    <td>{{ c.telephone }}</td>
                    <td><button class=\"btn btn-primary\"><a class=\"text-light\"  href=\"{{ path( 'updateu' , {'id':c.id} )}}\">update</a></button>       <button class=\"btn btn-danger\" ><a class=\"text-light\" href=\"{{ path( 'deleteu' , {'id':c.id} )}}\">delete</a></button></td>
                         

                </tr>
                  
                {% endfor %}
                </tbody>
            </table>
            <td><button class=\"btn btn-primary\"><a class=\"text-light\"  href=\"{{ path( 'addu')}}\">ajouter</a></button>
    </div>
    </div>
    </div>











{% endblock %}", "back-office/user/list.html.twig", "C:\\Users\\Admin\\Desktop\\pii\\pidev\\templates\\back-office\\user\\list.html.twig");
    }
}
