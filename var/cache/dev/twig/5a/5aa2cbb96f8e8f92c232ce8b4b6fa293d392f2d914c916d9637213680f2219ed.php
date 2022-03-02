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

/* back-office/produit/add.html.twig */
class __TwigTemplate_b75d12de2ed30e6f703cd6574a76c968e4929633fea7edbedf37338aeeb5b734 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/produit/add.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "back-office/produit/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Ajouter un produit</h1>

    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 5, $this->source); })()), 'form_start');
        echo "

    <div class=\"form-group\">
        <label for=\"\">Type</label>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"\">Couleur</label>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 13, $this->source); })()), "couleur", [], "any", false, false, false, 13), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"\">Prix</label>
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 17, $this->source); })()), "prix", [], "any", false, false, false, 17), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"\">Quantité </label>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 21, $this->source); })()), "quantite", [], "any", false, false, false, 21), 'widget');
        echo "
    </div>
    <
    <button type=\"submit\" class=\"btn btn-success\">Ajouter Produit</button>

    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 26, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back-office/produit/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  91 => 21,  84 => 17,  77 => 13,  70 => 9,  63 => 5,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block body %}
    <h1>Ajouter un produit</h1>

    {{form_start(formA)}}

    <div class=\"form-group\">
        <label for=\"\">Type</label>
        {{ form_widget (formA.type) }}
    </div>
    <div class=\"form-group\">
        <label for=\"\">Couleur</label>
        {{ form_widget (formA.couleur) }}
    </div>
    <div class=\"form-group\">
        <label for=\"\">Prix</label>
        {{ form_widget (formA.prix) }}
    </div>
    <div class=\"form-group\">
        <label for=\"\">Quantité </label>
        {{ form_widget (formA.quantite) }}
    </div>
    <
    <button type=\"submit\" class=\"btn btn-success\">Ajouter Produit</button>

    {{form_end(formA)}}


{% endblock %}", "back-office/produit/add.html.twig", "C:\\Users\\Admin\\Desktop\\pii\\pidev\\templates\\back-office\\produit\\add.html.twig");
    }
}
