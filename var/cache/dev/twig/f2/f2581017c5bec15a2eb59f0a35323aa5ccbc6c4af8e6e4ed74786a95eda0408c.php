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

/* produit/pdff.html.twig */
class __TwigTemplate_37643e2aa4a4361496c60191d6a36456f593e38f719d4d4538b55b59ad711150 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/pdff.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/pdff.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "     ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h4>GetAway</h4>
<img src=data:image/png;base64,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/>

<h1 align = \"center\" >Liste des produits</h1> <hr>



<table id=\"produit\" class=\"table table-striped\" style=\"border: 1px solid; width: 100% !important; border-collapse: collapse;\">
   <thead>
      <tr>
        <th class=\"my-thead-style\" style=\"width: 20%;\">nom</th>  
        <th class=\"my-thead-style\" style=\"width: 20%;\">couleur</th>
        <th class=\"my-thead-style\" style=\"width: 20%;\">prix</th>
        <th class=\"my-thead-style\" style=\"width: 20%;\">quantite</th>
        <th class=\"my-thead-style\" style=\"width: 20%;\">categorie</th>
        
      </tr>
      
      
    </thead>
    <tbody class=\"trial_body\">
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["produit"]);
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 25
            echo "    <tr>
        
                        {!! \$pdf['trhtml'] !!}
                    
           <td >";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
           <td >";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "couleur", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
           <td >";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 31), "html", null, true);
            echo " € </td>
           <td >";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
           <td >";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "category", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
           
            
    </tr>
   
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            
            </tbody>
            </table>
       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/pdff.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 40,  118 => 33,  114 => 32,  110 => 31,  106 => 30,  102 => 29,  96 => 25,  92 => 24,  69 => 3,  59 => 2,  49 => 43,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}
<h4>GetAway</h4>
<img src=data:image/png;base64,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/>

<h1 align = \"center\" >Liste des produits</h1> <hr>



<table id=\"produit\" class=\"table table-striped\" style=\"border: 1px solid; width: 100% !important; border-collapse: collapse;\">
   <thead>
      <tr>
        <th class=\"my-thead-style\" style=\"width: 20%;\">nom</th>  
        <th class=\"my-thead-style\" style=\"width: 20%;\">couleur</th>
        <th class=\"my-thead-style\" style=\"width: 20%;\">prix</th>
        <th class=\"my-thead-style\" style=\"width: 20%;\">quantite</th>
        <th class=\"my-thead-style\" style=\"width: 20%;\">categorie</th>
        
      </tr>
      
      
    </thead>
    <tbody class=\"trial_body\">
{% for produit in produit %}
    <tr>
        
                        {!! \$pdf['trhtml'] !!}
                    
           <td >{{ produit.nom }}</td>
           <td >{{ produit.couleur }}</td>
           <td >{{ produit.prix }} € </td>
           <td >{{ produit.quantite }}</td>
           <td >{{ produit.category.nom }}</td>
           
            
    </tr>
   
            
            {% endfor %}
            
            </tbody>
            </table>
       {% endblock %}     ", "produit/pdff.html.twig", "C:\\xampp\\htdocs\\pii\\templates\\produit\\pdff.html.twig");
    }
}