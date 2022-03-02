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

/* back-office/user/update.html.twig */
class __TwigTemplate_30769dbbb8ef25f65af911e8612ca29cff15df04f2483bab37dcd3af66888ba0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/user/update.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "back-office/user/update.html.twig", 1);
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
        echo "    <h1>Modifier un utilisateur</h1>

    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 5, $this->source); })()), 'form_start');
        echo "

    <div class=\"form-group\">
        <label for=\"\">CIN</label>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 9, $this->source); })()), "CIN", [], "any", false, false, false, 9), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"\">Nom</label>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"\">Prenom</label>
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"\">Date de naissance </label>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 21, $this->source); })()), "date_naissance", [], "any", false, false, false, 21), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"\">Email</label>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 25, $this->source); })()), "mail", [], "any", false, false, false, 25), 'widget');
        echo "
    </div>

    <div class=\"form-group\">
        <label for=\"\">Telephone</label>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 30, $this->source); })()), "telephone", [], "any", false, false, false, 30), 'widget');
        echo "
    </div>
    <button type=\"submit\" class=\"btn btn-success\">Modifier User</button>

    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 34, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back-office/user/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 34,  106 => 30,  98 => 25,  91 => 21,  84 => 17,  77 => 13,  70 => 9,  63 => 5,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block body %}
    <h1>Modifier un utilisateur</h1>

    {{form_start(formA)}}

    <div class=\"form-group\">
        <label for=\"\">CIN</label>
        {{ form_widget (formA.CIN) }}
    </div>
    <div class=\"form-group\">
        <label for=\"\">Nom</label>
        {{ form_widget (formA.nom) }}
    </div>
    <div class=\"form-group\">
        <label for=\"\">Prenom</label>
        {{ form_widget (formA.prenom) }}
    </div>
    <div class=\"form-group\">
        <label for=\"\">Date de naissance </label>
        {{ form_widget (formA.date_naissance) }}
    </div>
    <div class=\"form-group\">
        <label for=\"\">Email</label>
        {{ form_widget (formA.mail) }}
    </div>

    <div class=\"form-group\">
        <label for=\"\">Telephone</label>
        {{ form_widget (formA.telephone) }}
    </div>
    <button type=\"submit\" class=\"btn btn-success\">Modifier User</button>

    {{form_end(formA)}}


{% endblock %}", "back-office/user/update.html.twig", "C:\\Users\\Admin\\Desktop\\pii\\pidev\\templates\\back-office\\user\\update.html.twig");
    }
}
