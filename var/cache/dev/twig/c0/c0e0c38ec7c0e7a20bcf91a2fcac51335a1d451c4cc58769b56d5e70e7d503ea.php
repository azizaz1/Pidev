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

/* publication/mypdf.html.twig */
class __TwigTemplate_ff861210b4e596e7f02d90cef3725d0902e4307725f4be1034e0b6eed0d18375 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/mypdf.html.twig"));

        // line 1
        echo " <h1>Publication Table</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 13
            echo "            <tr>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "content", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
            
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tbody>
    </table>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "publication/mypdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  68 => 16,  64 => 15,  60 => 14,  57 => 13,  53 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <h1>Publication Table</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
        {% for publication in publications %}
            <tr>
                <td>{{ publication.id }}</td>
                <td>{{ publication.title }}</td>
                <td>{{ publication.content }}</td>
            
            </tr>
            {% endfor %}
        </tbody>
    </table>", "publication/mypdf.html.twig", "C:\\Users\\Admin\\Desktop\\pii\\pidev\\templates\\publication\\mypdf.html.twig");
    }
}
