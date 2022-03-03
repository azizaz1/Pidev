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

/* produit/produit.html.twig */
class __TwigTemplate_afcb7ec54fa42a2cff7d4f1c78d9849f61a8271a622509719cac68d196777eef extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/produit.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Produit ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>Liste des produits</h1>
<p><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_produit");
        echo "\"  class=\"btn btn-success\">Ajouter un produit</a></p>
";
        // line 9
        if ((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "<table id=\"produit\" class=\"table table-striped\">
   <thead>
      <tr>
        <th>nom</th>
        <th>couleur</th>
        <th>prix</th>
        <th>quantite</th>
        <th>categorie</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["produit"]);
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 23
                echo "    <tr>
        <thead>

           <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
           <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "couleur", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
           <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
           <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
           <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "category", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
           <td>
           ";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", true, true, false, 32)) {
                    // line 33
                    echo "
           <img src=\"";
                    // line 34
                    echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgs/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34)), "html", null, true);
                    echo "\">
           ";
                }
                // line 36
                echo "           </td>
            <td>
            <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modify_produit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" class=\"btn btn-dark\">Modifier</a>
            </td>
            <td>
            <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_produit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\" class=\"btn btn-danger\" 
            onclick=\"return confirm ('Etes-vous sur de supprimer cet produit?');\">Supprimer</a>
            </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </tbody>
            </table>
            ";
        } else {
            // line 49
            echo "            <p>Aucun produit</p>
            ";
        }
        // line 51
        echo "           
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 51,  177 => 49,  172 => 46,  161 => 41,  155 => 38,  151 => 36,  146 => 34,  143 => 33,  141 => 32,  136 => 30,  132 => 29,  128 => 28,  124 => 27,  120 => 26,  115 => 23,  111 => 22,  97 => 10,  95 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %} Produit {% endblock %}

{% block body %}
<h1>Liste des produits</h1>
<p><a href=\"{{ path('add_produit') }}\"  class=\"btn btn-success\">Ajouter un produit</a></p>
{% if produit %}
<table id=\"produit\" class=\"table table-striped\">
   <thead>
      <tr>
        <th>nom</th>
        <th>couleur</th>
        <th>prix</th>
        <th>quantite</th>
        <th>categorie</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
{% for produit in produit %}
    <tr>
        <thead>

           <td>{{ produit.nom }}</td>
           <td>{{ produit.couleur }}</td>
           <td>{{ produit.prix }}</td>
           <td>{{ produit.quantite }}</td>
           <td>{{ produit.category.nom }}</td>
           <td>
           {% if produit.image is defined %}

           <img src=\"{{ asset('imgs/')~produit.image.nom}}\">
           {%endif%}
           </td>
            <td>
            <a href=\"{{ path('modify_produit', {'id': produit.id}) }}\" class=\"btn btn-dark\">Modifier</a>
            </td>
            <td>
            <a href=\"{{ path('delete_produit', {'id': produit.id}) }}\" class=\"btn btn-danger\" 
            onclick=\"return confirm ('Etes-vous sur de supprimer cet produit?');\">Supprimer</a>
            </td>
            </tr>
            {% endfor %}
            </tbody>
            </table>
            {% else %}
            <p>Aucun produit</p>
            {% endif %}
           
{% endblock %}
", "produit/produit.html.twig", "C:\\xampp\\htdocs\\pii\\templates\\produit\\produit.html.twig");
    }
}
