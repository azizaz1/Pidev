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

/* back-office/voiture/add.html.twig */
class __TwigTemplate_85897def7360dc94d0f9f12eba70d37307ee2b2da5e60a2bca1bb4995d403b27 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/voiture/add.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "back-office/voiture/add.html.twig", 1);
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
        echo "    <h1>Ajouter une voiture</h1>

    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 5, $this->source); })()), 'form_start');
        echo "

    <div class=\"form-group\">
        <label for=\"\">Matricule</label>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 9, $this->source); })()), "matricule", [], "any", false, false, false, 9), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"\">Marque</label>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 13, $this->source); })()), "marque", [], "any", false, false, false, 13), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"\">Couleur</label>
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 17, $this->source); })()), "couleur", [], "any", false, false, false, 17), 'widget');
        echo "
    </div>
    <


    <button type=\"submit\" class=\"btn btn-success\">Ajouter Voiture</button>

    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 24, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back-office/voiture/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  84 => 17,  77 => 13,  70 => 9,  63 => 5,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block body %}
    <h1>Ajouter une voiture</h1>

    {{form_start(formA)}}

    <div class=\"form-group\">
        <label for=\"\">Matricule</label>
        {{ form_widget (formA.matricule) }}
    </div>
    <div class=\"form-group\">
        <label for=\"\">Marque</label>
        {{ form_widget (formA.marque) }}
    </div>
    <div class=\"form-group\">
        <label for=\"\">Couleur</label>
        {{ form_widget (formA.couleur) }}
    </div>
    <


    <button type=\"submit\" class=\"btn btn-success\">Ajouter Voiture</button>

    {{form_end(formA)}}


{% endblock %}", "back-office/voiture/add.html.twig", "C:\\Users\\Admin\\Desktop\\pii\\pidev\\templates\\back-office\\voiture\\add.html.twig");
    }
}
