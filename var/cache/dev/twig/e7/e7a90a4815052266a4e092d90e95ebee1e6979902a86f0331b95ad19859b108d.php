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

/* publication/lespub.html.twig */
class __TwigTemplate_bc9c21336897446b302e2bbb2a503ab1529ea7fd064b07f0a2e613deaced840a extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/lespub.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "publication/lespub.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        <section class=\"probootstrap_section bg-light\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Publications</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6\">

           
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 17
            echo "         <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <center><img class=\"probootstrap-media-image\" src=";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("picture/" . twig_get_attribute($this->env, $this->source, $context["publication"], "image", [], "any", false, false, false, 18))), "html", null, true);
            echo ">
              </img></center>
              <div class=\"media-body\">
                <h5 class=\"mb-3\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
                <p>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "content", [], "any", false, false, false, 22), "html", null, true);
            echo " </p>
                <br>
                 <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_show", ["id" => twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">show</a></br>
                 <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">edit</a>
                 <br><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_new", ["id" => twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">Add comment</a></br>
              </div>
        </div>
           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "publication/lespub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  113 => 31,  102 => 26,  98 => 25,  94 => 24,  89 => 22,  85 => 21,  79 => 18,  76 => 17,  72 => 16,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


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

           
        {% for publication in publications %}
         <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <center><img class=\"probootstrap-media-image\" src={{ asset('picture/' ~ publication.image) }}>
              </img></center>
              <div class=\"media-body\">
                <h5 class=\"mb-3\">{{ publication.title }}</h5>
                <p>{{ publication.content }} </p>
                <br>
                 <a href=\"{{ path('publication_show', {'id': publication.id}) }}\">show</a></br>
                 <a href=\"{{ path('publication_edit', {'id': publication.id}) }}\">edit</a>
                 <br><a href=\"{{ path('comment_new', {'id': publication.id}) }}\">Add comment</a></br>
              </div>
        </div>
           
        {% endfor %}
</div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <a href=\"{{ path('publication_new') }}\">Create new</a>
{% endblock %}
", "publication/lespub.html.twig", "C:\\Users\\Admin\\Desktop\\pii\\pidev\\templates\\publication\\lespub.html.twig");
    }
}
