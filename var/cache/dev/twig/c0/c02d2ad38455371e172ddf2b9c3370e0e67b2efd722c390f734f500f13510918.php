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

/* participation/participations.html.twig */
class __TwigTemplate_67034021ae4ad6dcffdf5d5ae89dc1b387e02bd305209b5929844efe23d44f34 extends Template
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
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/participations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/participations.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "participation/participations.html.twig", 1);
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

        echo "Hello ProductController!";
        
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
        echo "<h1>Liste des produits</h1>
<p><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_participation");
        echo "\">Ajouter un participation</a></p>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["participation"]);
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 9
            echo "     <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">id</th>
                    <th scope=\"col\">nom</th>
                    <th scope=\"col\">prenom</th>
                    <th scope=\"col\">date nes</th>
                    <th scope=\"col\">num tel</th>
                    <th scope=\"col\">adresse</th>


                </tr>
                </tr>
                </thead>
         
        <tbody>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "prenom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
           <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "getDatanes", [], "method", false, false, false, 28), "d-m-Y "), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "numtel", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "adresse", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>

<td><button class=\"btn btn-primary\"><a class=\"text-light\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modify_participation", ["id" => twig_get_attribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Modifier</a></button></td>
<td><button class=\"btn btn-danger\" ><a class=\"text-light\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_participations", ["id" => twig_get_attribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">supprimer</a></button></td>

        </tbody>
    </table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "participation/participations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 33,  142 => 32,  137 => 30,  133 => 29,  129 => 28,  125 => 27,  121 => 26,  117 => 25,  99 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Hello ProductController!{% endblock %}

{% block body %}
<h1>Liste des produits</h1>
<p><a href=\"{{ path('add_participation') }}\">Ajouter un participation</a></p>
{% for participation in participation %}
     <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">id</th>
                    <th scope=\"col\">nom</th>
                    <th scope=\"col\">prenom</th>
                    <th scope=\"col\">date nes</th>
                    <th scope=\"col\">num tel</th>
                    <th scope=\"col\">adresse</th>


                </tr>
                </tr>
                </thead>
         
        <tbody>
            <td>{{ participation.id }}</td>
            <td>{{ participation.nom }}</td>
            <td>{{ participation.prenom }}</td>
           <td>{{ participation.getDatanes()|date('d-m-Y ') }}</td>
            <td>{{ participation.numtel }}</td>
                        <td>{{ participation.adresse }}</td>

<td><button class=\"btn btn-primary\"><a class=\"text-light\" href=\"{{ path('modify_participation', {'id': participation.id}) }}\">Modifier</a></button></td>
<td><button class=\"btn btn-danger\" ><a class=\"text-light\" href=\"{{ path('delete_participations', {'id': participation.id}) }}\">supprimer</a></button></td>

        </tbody>
    </table>
{% endfor %}
{% endblock %}", "participation/participations.html.twig", "C:\\xamppp\\htdocs\\pidev2\\templates\\participation\\participations.html.twig");
    }
}
