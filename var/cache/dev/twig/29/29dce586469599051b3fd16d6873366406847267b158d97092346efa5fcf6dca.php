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

/* inc/navbar.html.twig */
class __TwigTemplate_ec141191ffca145b981070a71ec4e1201f106fe8f544918776da9553220d5b8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        echo "<nav class = \"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
<div class = \"container\">
<a href=\"/\"class=\"navbar-brand\"></a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
<span class=\"navbar-toggle-icon\"></span>
</button>

<div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
<ul class=\"navbar-nav ml-auto\">
<li class=\"nav-item\">
<a href=\"/test\"class=\"nav-link\">Home</a>
</li>
<li class=\"nav-item\">
<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\" class=\"nav-link\">Produit
</a>
</li>
<li class=\"nav-item\">
<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category");
        echo "\" class=\"nav-link\"> Categorie
</a>
</li>
</ul>
</div>
</div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class = \"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
<div class = \"container\">
<a href=\"/\"class=\"navbar-brand\"></a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
<span class=\"navbar-toggle-icon\"></span>
</button>

<div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
<ul class=\"navbar-nav ml-auto\">
<li class=\"nav-item\">
<a href=\"/test\"class=\"nav-link\">Home</a>
</li>
<li class=\"nav-item\">
<a href=\"{{path('produits')}}\" class=\"nav-link\">Produit
</a>
</li>
<li class=\"nav-item\">
<a href=\"{{path('category')}}\" class=\"nav-link\"> Categorie
</a>
</li>
</ul>
</div>
</div>
</nav>
", "inc/navbar.html.twig", "C:\\xampp\\htdocs\\pii\\templates\\inc\\navbar.html.twig");
    }
}
