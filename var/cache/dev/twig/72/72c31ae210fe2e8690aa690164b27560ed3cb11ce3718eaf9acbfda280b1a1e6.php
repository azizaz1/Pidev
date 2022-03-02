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

/* publication/index.html.twig */
class __TwigTemplate_dc52b71bb0cba4d0a7e3f98e1bb80e13e1fdfc5b0982eb235b8ea272bbe449dc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/index.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "publication/index.html.twig", 1);
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
        echo "    <h1>Publication Table</h1>
<a class=\"btn btn-success\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listo");
        echo "\">Create pdf</a>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Content</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("picture/" . twig_get_attribute($this->env, $this->source, $context["publication"], "image", [], "any", false, false, false, 23))), "html", null, true);
            echo "\" alt=\"\" width=\"130\" height=\"130\" \"></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "content", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>
                        ";
            // line 26
            echo twig_include($this->env, $context, "publication/_delete_form.html.twig");
            echo "

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 31
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "publication/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 38,  156 => 35,  147 => 31,  129 => 26,  124 => 24,  120 => 23,  116 => 22,  112 => 21,  109 => 20,  91 => 19,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Publication{% endblock %}

{% block body %}
    <h1>Publication Table</h1>
<a class=\"btn btn-success\" href=\"{{ path('listo') }}\">Create pdf</a>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Content</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for publication in publications %}
            <tr>
                <td>{{ publication.id }}</td>
                <td>{{ publication.title }}</td>
                <td><img src=\"{{ asset('picture/' ~ publication.image) }}\" alt=\"\" width=\"130\" height=\"130\" \"></td>
                <td>{{ publication.content }}</td>
                <td>
                        {{ include('publication/_delete_form.html.twig') }}

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('publication_new') }}\">Create new</a>
{% endblock %}
", "publication/index.html.twig", "C:\\Users\\Admin\\Desktop\\pii\\pidev\\templates\\publication\\index.html.twig");
    }
}
