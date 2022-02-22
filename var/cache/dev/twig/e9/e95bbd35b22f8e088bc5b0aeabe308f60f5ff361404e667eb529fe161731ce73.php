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

/* event/monfront.html.twig */
class __TwigTemplate_c170cb10851be5fd52c6356b92d726a81eb277b89b3100257747fab3b9eb55b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/monfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/monfront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <link rel=\"stylesheet\" href=\"events/test.css\">
</head>
<body>

<title>Pricing Table</title>
    <h1>Les Evénements</h1>
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["events"]);
        foreach ($context['_seq'] as $context["_key"] => $context["events"]) {
            // line 13
            echo "    <div class=\"snip1265\">
        <div class=\"plan\">
          <header><i class=\"ion-ios-navigate-outline\"></i>
            <a href=\"img/gallery/gallery-1.jpg\" ></a>
            <h4 class=\"plan-title\">
              ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["events"], "idevent", [], "any", false, false, false, 18), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["events"], "nom", [], "any", false, false, false, 18), "html", null, true);
            echo "
            </h4>
            <div class=\"plan-cost\"><span class=\"plan-price\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["events"], "price", [], "any", false, false, false, 20), "html", null, true);
            echo "DT</span><span class=\"plan-type\"></span></div>
          </header>
          <ul class=\"plan-features\">
            <li>Place:";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["events"], "place", [], "any", false, false, false, 23), "html", null, true);
            echo "<i class=\"ion-ios-navigate-outline\"></i>
            </li>
            <li>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["events"], "getDate", [], "method", false, false, false, 25), "d-m-Y "), "html", null, true);
            echo "
            </li>
            <li>Espace Musculation
            </li>
            <li>Cours Collectfs Fitness
            </li>
            <li>Sauna
            </li>
            
          </ul>
          <div class=\"plan-select\"><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_participation");
            echo "\">Réserver</a></div>
        </div>
        </div>
        </body>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['events'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/monfront.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 41,  117 => 35,  104 => 25,  99 => 23,  93 => 20,  86 => 18,  79 => 13,  75 => 12,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <link rel=\"stylesheet\" href=\"events/test.css\">
</head>
<body>

<title>Pricing Table</title>
    <h1>Les Evénements</h1>
{% block body %}
{% for events in events %}
    <div class=\"snip1265\">
        <div class=\"plan\">
          <header><i class=\"ion-ios-navigate-outline\"></i>
            <a href=\"img/gallery/gallery-1.jpg\" ></a>
            <h4 class=\"plan-title\">
              {{ events.idevent }}-{{ events.nom }}
            </h4>
            <div class=\"plan-cost\"><span class=\"plan-price\">{{ events.price }}DT</span><span class=\"plan-type\"></span></div>
          </header>
          <ul class=\"plan-features\">
            <li>Place:{{ events.place }}<i class=\"ion-ios-navigate-outline\"></i>
            </li>
            <li>{{ events.getDate()|date('d-m-Y ') }}
            </li>
            <li>Espace Musculation
            </li>
            <li>Cours Collectfs Fitness
            </li>
            <li>Sauna
            </li>
            
          </ul>
          <div class=\"plan-select\"><a href=\"{{ path('add_participation') }}\">Réserver</a></div>
        </div>
        </div>
        </body>

        {% endfor %}
      {% endblock %}", "event/monfront.html.twig", "C:\\xamppp\\htdocs\\pidev2\\templates\\event\\monfront.html.twig");
    }
}
