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

/* comment/_form.html.twig */
class __TwigTemplate_d79398c7887481d05571d74f7793bbedc5f792fe8255bd72aecdb3239a4029f6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/_form.html.twig"));

        // line 1
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                         ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "authorName", [], "any", false, false, false, 2), 'widget');
        echo "
                          ";
        // line 3
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "authorName", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "valid", [], "any", false, false, false, 3)) {
            // line 4
            echo "                        <div class=\"alert alert-danger\">
                        ";
            // line 5
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "authorName", [], "any", false, false, false, 5), 'errors');
            echo "
                        </div>
                        ";
        }
        // line 8
        echo "                        
                        <br>
                        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "content", [], "any", false, false, false, 10), 'widget');
        echo "
                          ";
        // line 11
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "content", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "valid", [], "any", false, false, false, 11)) {
            // line 12
            echo "                        <div class=\"alert alert-danger\">
                        ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "content", [], "any", false, false, false, 13), 'errors');
            echo "
                        </div>
                        ";
        }
        // line 16
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'widget');
        echo "
                         <button class=\"btn\">";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 17, $this->source); })()), "comment")) : ("comment")), "html", null, true);
        echo "</button>
                        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
    <br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "comment/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  84 => 17,  79 => 16,  73 => 13,  70 => 12,  68 => 11,  64 => 10,  60 => 8,  54 => 5,  51 => 4,  49 => 3,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("                        {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
                         {{ form_widget(form.authorName) }}
                          {% if not form.authorName.vars.valid %}
                        <div class=\"alert alert-danger\">
                        {{ form_errors(form.authorName) }}
                        </div>
                        {% endif %}
                        
                        <br>
                        {{ form_widget(form.content) }}
                          {% if not form.content.vars.valid %}
                        <div class=\"alert alert-danger\">
                        {{ form_errors(form.content) }}
                        </div>
                        {% endif %}
                        {{ form_widget(form) }}
                         <button class=\"btn\">{{ button_label|default('comment') }}</button>
                        {{ form_end(form) }}
    <br>
", "comment/_form.html.twig", "C:\\Users\\Admin\\Desktop\\pii\\pidev\\templates\\comment\\_form.html.twig");
    }
}
