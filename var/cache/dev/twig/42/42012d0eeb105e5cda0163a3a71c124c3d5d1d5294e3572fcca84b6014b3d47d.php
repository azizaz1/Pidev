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

/* produit/boutique.html.twig */
class __TwigTemplate_23158a65e63a2e31ddb76aabf4699ebfeedfc911fe11dc782bae7ea2897b8acb extends Template
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
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/boutique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/boutique.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "produit/boutique.html.twig", 2);
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

        echo "Les produits
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo " 
      
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"/test1\">Home</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\">Produits</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\">Panier</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <section class=\"bg-light p-3\">
        <h1>Les produits</h1>
    </section>

    <section class=\"row\">
          ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["produit"]);
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 35
            echo "                <div class=\"col-4 mt-4\">
                     <div class=\"border border-dark rounded p-2 clearfix\">
                   
                     <h2>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</h2>
                     <h2>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "couleur", [], "any", false, false, false, 39), "html", null, true);
            echo "</h2>
                     <h2>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 40), "html", null, true);
            echo "</h2>
                     <h2>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "category", [], "any", false, false, false, 41), "nom", [], "any", false, false, false, 41), "html", null, true);
            echo "</h2>
                    <p>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 42), "html", null, true);
            echo " €</p>
                    <img class=\"w-100\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgs/"), "carre") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 43), "nom", [], "any", false, false, false, 43)), "html", null, true);
            echo "\" alt=\"Image de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 43), "html", null, true);
            echo "\">
                   <hr>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn btn-success\">
                        <i class=\"bi bi-cart-plus\"></i> Ajouter
                         </a>
                    </div>
               </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </section>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/boutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 51,  159 => 45,  152 => 43,  148 => 42,  144 => 41,  140 => 40,  136 => 39,  132 => 38,  127 => 35,  123 => 34,  108 => 22,  102 => 19,  89 => 8,  79 => 7,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base-front.html.twig' %}

{% block title %}Les produits
{% endblock %}
 
{% block body %}
 
      
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"/test1\">Home</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('shop') }}\">Produits</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('cart_index') }}\">Panier</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <section class=\"bg-light p-3\">
        <h1>Les produits</h1>
    </section>

    <section class=\"row\">
          {% for produit in produit %}
                <div class=\"col-4 mt-4\">
                     <div class=\"border border-dark rounded p-2 clearfix\">
                   
                     <h2>{{ produit.nom }}</h2>
                     <h2>{{ produit.couleur }}</h2>
                     <h2>{{ produit.quantite }}</h2>
                     <h2>{{ produit.category.nom }}</h2>
                    <p>{{ produit.prix }} €</p>
                    <img class=\"w-100\" src=\"{{ asset('imgs/')|imagine_filter('carre')~produit.image.nom}}\" alt=\"Image de {{ produit.nom }}\">
                   <hr>
                    <a href=\"{{path(\"cart_add\", {id: produit.id})}}\" class=\"btn btn-success\">
                        <i class=\"bi bi-cart-plus\"></i> Ajouter
                         </a>
                    </div>
               </div>
          {% endfor %}
    </section>
    
{% endblock %}", "produit/boutique.html.twig", "C:\\xampp\\htdocs\\pii\\templates\\produit\\boutique.html.twig");
    }
}