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

/* publication/show.html.twig */
class __TwigTemplate_87b4030f66896490b5745513cb1d5102ee6fa3ab2d99ba2d77835c3a391533d2 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "publication/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Publication";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section class=\"probootstrap_section bg-light\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Publications</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6\">

           
         <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <center><img class=\"probootstrap-media-image\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("picture/" . twig_get_attribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 18, $this->source); })()), "image", [], "any", false, false, false, 18))), "html", null, true);
        echo "\">
              </img></center>
              <div class=\"media-body\">
                <h5 class=\"mb-3\">Title : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), "html", null, true);
        echo "</h5>
                <p>Content : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 22, $this->source); })()), "content", [], "any", false, false, false, 22), "html", null, true);
        echo " </p>
                <p>Views : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 23, $this->source); })()), "abn", [], "any", false, false, false, 23), "html", null, true);
        echo " </p>
                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lescom", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\">Show Comments</a> </td>
              </div>
        </div>
           
</div>
        </div>
      </div>
    </section>


    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pubs");
        echo "\">back to list</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "publication/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 34,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  87 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Publication{% endblock %}

{% block body %}
<section class=\"probootstrap_section bg-light\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Publications</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6\">

           
         <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <center><img class=\"probootstrap-media-image\" src=\"{{ asset('picture/' ~ publication.image) }}\">
              </img></center>
              <div class=\"media-body\">
                <h5 class=\"mb-3\">Title : {{ publication.title }}</h5>
                <p>Content : {{ publication.content }} </p>
                <p>Views : {{ publication.abn }} </p>
                <a href=\"{{ path('lescom', {'id': publication.id}) }}\">Show Comments</a> </td>
              </div>
        </div>
           
</div>
        </div>
      </div>
    </section>


    <a href=\"{{ path('pubs') }}\">back to list</a>
{% endblock %}
", "publication/show.html.twig", "C:\\Users\\Admin\\Desktop\\pii\\pidev\\templates\\publication\\show.html.twig");
    }
}
