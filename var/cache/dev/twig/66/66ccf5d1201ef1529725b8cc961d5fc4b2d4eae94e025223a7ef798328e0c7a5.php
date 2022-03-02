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

/* publication/_form.html.twig */
class __TwigTemplate_1aa8a7edc0ce4f24f84980fc9b070d81f8e2be4a2e6adaaeec396335a2758cc5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/_form.html.twig"));

        // line 1
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                         ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), 'widget');
        echo "
                          ";
        // line 3
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "valid", [], "any", false, false, false, 3)) {
            // line 4
            echo "                        <div class=\"alert alert-danger\">
                        ";
            // line 5
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), 'errors');
            echo "
                        </div>
                        ";
        }
        // line 8
        echo "                         <div class=\"col-md-12 col-sm-12\">
        <label class=\"control-label\">Image<small>Please add a your image .</small></label>
        <div class=\"fileupload fileupload-new\" data-provides=\"fileupload\">
            <div class=\"fileupload-preview thumbnail\"></div>
            <br>
            <span class=\"btn btn-default btn-file\">
                                                    <span class=\"fileupload-new\">Select Image</span>
                                                    <span class=\"fileupload-exists\">Change</span>
                                                     ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16), 'widget');
        echo "
                                                </span>
            <a href=\"#\" class=\"btn btn-default fileupload-exists\" data-dismiss=\"fileupload\"><i class=\"fa fa-close\"></i></a>
        </div>
    </div>
</div><!-- end row -->
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "content", [], "any", false, false, false, 22), 'widget');
        echo "
                          ";
        // line 23
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "content", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "valid", [], "any", false, false, false, 23)) {
            // line 24
            echo "                        <div class=\"alert alert-danger\">
                        ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "content", [], "any", false, false, false, 25), 'errors');
            echo "
                        </div>
                        ";
        }
        // line 28
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'widget');
        echo "
                         <button class=\"btn\">";
        // line 29
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 29, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
    <br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "publication/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 30,  99 => 29,  94 => 28,  88 => 25,  85 => 24,  83 => 23,  79 => 22,  70 => 16,  60 => 8,  54 => 5,  51 => 4,  49 => 3,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("                        {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
                         {{ form_widget(form.title) }}
                          {% if not form.title.vars.valid %}
                        <div class=\"alert alert-danger\">
                        {{ form_errors(form.title) }}
                        </div>
                        {% endif %}
                         <div class=\"col-md-12 col-sm-12\">
        <label class=\"control-label\">Image<small>Please add a your image .</small></label>
        <div class=\"fileupload fileupload-new\" data-provides=\"fileupload\">
            <div class=\"fileupload-preview thumbnail\"></div>
            <br>
            <span class=\"btn btn-default btn-file\">
                                                    <span class=\"fileupload-new\">Select Image</span>
                                                    <span class=\"fileupload-exists\">Change</span>
                                                     {{ form_widget(form.image) }}
                                                </span>
            <a href=\"#\" class=\"btn btn-default fileupload-exists\" data-dismiss=\"fileupload\"><i class=\"fa fa-close\"></i></a>
        </div>
    </div>
</div><!-- end row -->
                        {{ form_widget(form.content) }}
                          {% if not form.content.vars.valid %}
                        <div class=\"alert alert-danger\">
                        {{ form_errors(form.content) }}
                        </div>
                        {% endif %}
                        {{ form_widget(form) }}
                         <button class=\"btn\">{{ button_label|default('Save') }}</button>
                        {{ form_end(form) }}
    <br>
", "publication/_form.html.twig", "C:\\Users\\Admin\\Desktop\\pii\\pidev\\templates\\publication\\_form.html.twig");
    }
}
