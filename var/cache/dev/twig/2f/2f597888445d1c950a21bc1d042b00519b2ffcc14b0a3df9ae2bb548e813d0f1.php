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

/* event/monfront2.html.twig */
class __TwigTemplate_63ec3b9a047f69860ded5f78f986add508ad3038142b90c3d35c78b13214ff37 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/monfront2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/monfront2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html style=\"font-size: 16px;\">
  <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"Les Evenements\">
    <meta name=\"description\" content=\"\">
    <meta name=\"page_type\" content=\"np-template-header-footer-from-plugin\">
    <title>Accueil</title>
    <link rel=\"stylesheet\" href=\"montache/nicepage.css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"montache/Accueil.css\" media=\"screen\">
    <script class=\"u-script\" type=\"montache/text/javascript\" src=\"jquery.js\" defer=\"\"></script>
    <script class=\"u-script\" type=\"montache/text/javascript\" src=\"nicepage.js\" defer=\"\"></script>
    <meta name=\"generator\" content=\"Nicepage 4.4.3, nicepage.com\">
    <link id=\"u-theme-google-font\" rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\">
    <link id=\"u-page-google-font\" rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\">
    
    
    
    <script type=\"application/ld+json\">{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"Organization\",
\t\t\"name\": \"\"
}</script>
    <meta name=\"theme-color\" content=\"#478ac9\">
    <meta property=\"og:title\" content=\"Accueil\">
    <meta property=\"og:type\" content=\"website\">
  </head>
  <body data-home-page=\"Accueil.html\" data-home-page-title=\"Accueil\" class=\"u-body u-xl-mode\">
    <section class=\"u-align-center u-clearfix u-grey-90 u-section-1\" id=\"carousel_ed7d\">
            <h1 class=\"u-custom-font u-font-oswald u-text u-text-1\">Les Evenements</h1>

";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
    </section>
    
    
    
    
  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["events"]);
        foreach ($context['_seq'] as $context["_key"] => $context["events"]) {
            // line 35
            echo "      <div class=\"u-align-center u-clearfix u-sheet u-valign-middle u-sheet-1\">

          <div class=\"u-repeater u-repeater-1\">
            <div class=\"u-container-style u-list-item u-repeater-item u-white \">
              <div class=\"u-container-layout u-similar-container u-container-layout-1\">
                <h4 class=\"u-align-center u-custom-font u-font-montserrat u-text u-text-palette-4-base u-text-2\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["events"], "idevent", [], "any", false, false, false, 40), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["events"], "nom", [], "any", false, false, false, 40), "html", null, true);
            echo "</h4>
                <img alt=\"\" class=\"u-expanded-width u-image u-image-default u-image-1\" src=\"montache/images/20180906140119000000_3041.jpg\">
                                <p class=\"u-align-center u-text u-text-default u-text-3\">Date</p>

                <p class=\"u-align-center u-text u-text-default u-text-3\">";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["events"], "getDate", [], "method", false, false, false, 44), "d-m-Y "), "html", null, true);
            echo "</p>
                <ul class=\"u-align-left u-custom-list u-text u-text-default u-text-4\">
                  <li>
                   <p class=\"u-align-center u-text u-text-default u-text-3\">Prix</p>
                    <div class=\"u-list-icon\">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" xml:space=\"preserve\" class=\"u-svg-content\" viewBox=\"0 0 512 512\" id=\"svg-7189\"><path d=\"m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z\" fill=\"currentColor\"></path></svg>
                    </div>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["events"], "price", [], "any", false, false, false, 50), "html", null, true);
            echo "DT 
                  </li>
                  
                  
                  
                </ul>
                <a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_participation");
            echo "\" class=\"u-btn u-btn-rectangle u-button-style u-palette-4-base u-btn-1\">reserver</a>
              </div>
            </div>
           
           
      
      
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['events'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/monfront2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  159 => 64,  145 => 56,  136 => 50,  127 => 44,  118 => 40,  111 => 35,  107 => 34,  97 => 33,  80 => 65,  78 => 33,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html style=\"font-size: 16px;\">
  <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"Les Evenements\">
    <meta name=\"description\" content=\"\">
    <meta name=\"page_type\" content=\"np-template-header-footer-from-plugin\">
    <title>Accueil</title>
    <link rel=\"stylesheet\" href=\"montache/nicepage.css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"montache/Accueil.css\" media=\"screen\">
    <script class=\"u-script\" type=\"montache/text/javascript\" src=\"jquery.js\" defer=\"\"></script>
    <script class=\"u-script\" type=\"montache/text/javascript\" src=\"nicepage.js\" defer=\"\"></script>
    <meta name=\"generator\" content=\"Nicepage 4.4.3, nicepage.com\">
    <link id=\"u-theme-google-font\" rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\">
    <link id=\"u-page-google-font\" rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\">
    
    
    
    <script type=\"application/ld+json\">{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"Organization\",
\t\t\"name\": \"\"
}</script>
    <meta name=\"theme-color\" content=\"#478ac9\">
    <meta property=\"og:title\" content=\"Accueil\">
    <meta property=\"og:type\" content=\"website\">
  </head>
  <body data-home-page=\"Accueil.html\" data-home-page-title=\"Accueil\" class=\"u-body u-xl-mode\">
    <section class=\"u-align-center u-clearfix u-grey-90 u-section-1\" id=\"carousel_ed7d\">
            <h1 class=\"u-custom-font u-font-oswald u-text u-text-1\">Les Evenements</h1>

{% block body %}
{% for events in events %}
      <div class=\"u-align-center u-clearfix u-sheet u-valign-middle u-sheet-1\">

          <div class=\"u-repeater u-repeater-1\">
            <div class=\"u-container-style u-list-item u-repeater-item u-white \">
              <div class=\"u-container-layout u-similar-container u-container-layout-1\">
                <h4 class=\"u-align-center u-custom-font u-font-montserrat u-text u-text-palette-4-base u-text-2\">{{ events.idevent }}-{{ events.nom }}</h4>
                <img alt=\"\" class=\"u-expanded-width u-image u-image-default u-image-1\" src=\"montache/images/20180906140119000000_3041.jpg\">
                                <p class=\"u-align-center u-text u-text-default u-text-3\">Date</p>

                <p class=\"u-align-center u-text u-text-default u-text-3\">{{ events.getDate()|date('d-m-Y ') }}</p>
                <ul class=\"u-align-left u-custom-list u-text u-text-default u-text-4\">
                  <li>
                   <p class=\"u-align-center u-text u-text-default u-text-3\">Prix</p>
                    <div class=\"u-list-icon\">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" xml:space=\"preserve\" class=\"u-svg-content\" viewBox=\"0 0 512 512\" id=\"svg-7189\"><path d=\"m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z\" fill=\"currentColor\"></path></svg>
                    </div>{{ events.price }}DT 
                  </li>
                  
                  
                  
                </ul>
                <a href=\"{{ path('add_participation') }}\" class=\"u-btn u-btn-rectangle u-button-style u-palette-4-base u-btn-1\">reserver</a>
              </div>
            </div>
           
           
      
      
            {% endfor %}
      {% endblock %}

    </section>
    
    
    
    
  </body>
</html>", "event/monfront2.html.twig", "C:\\xamppp\\htdocs\\pidev2\\templates\\event\\monfront2.html.twig");
    }
}
