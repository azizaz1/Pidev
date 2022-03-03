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

/* base-front.html.twig */
class __TwigTemplate_72d6628815addf3e5b84d99aba247cd035299c45433a039fb4a780d2e13a0713 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
  
      <!-- 
    More Templates Visit ==> ProBootstrap.com
    Free Template by ProBootstrap.com under the License Creative Commons 3.0 ==> (probootstrap.com/license)

    IMPORTANT: You can do whatever you want with this template but you need to keep the footer link back to ProBootstrap.com
    -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"description\" content=\"Free Bootstrap 4 Theme by ProBootstrap.com\">
\t\t<meta name=\"keywords\" content=\"free website templates, free bootstrap themes, free template, free bootstrap, free website template\">
     <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\">
     <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
 
    ";
        // line 20
        $this->displayBlock('css', $context, $blocks);
        // line 43
        echo "     
\t</head>
   
\t<body>


    <nav class=\"navbar navbar-expand-lg navbar-dark probootstrap_navbar\" id=\"probootstrap-navbar\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">getaway</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#probootstrap-menu\" aria-controls=\"probootstrap-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span><i class=\"ion-navicon\"></i></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"probootstrap-menu\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\"><a class=\"nav-link\" href=\"\"/test1\"\">Home</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/shop\">Boutique</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"services.html\">Services</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"travel.html\">Travel With Us</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    
    <section class=\"probootstrap-cover overflow-hidden relative\"  style=\"background-image: url('/front-office/images/bg_1.jpg');\" data-stellar-background-ratio=\"0.5\"  id=\"section-home\">
      
   
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row align-items-center\">
          <div class=\"col-md\">
          
            <h2 class=\"heading mb-2 display-4 font-light probootstrap-animate\">Explore The World With Ease</h2>
            <p class=\"lead mb-5 probootstrap-animate\">
              

            </p>
              <a href=\"onepage.html\" role=\"button\" class=\"btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3\">See OnePage Verion</a> 
            </p>
          </div> 
          <div class=\"col-md probootstrap-animate\">
            <form action=\"#\" class=\"probootstrap-form\">
              <div class=\"form-group\">
                <div class=\"row mb-3\">
                  <div class=\"col-md\">
                    <div class=\"form-group\">
                      <label for=\"id_label_single\">From</label>

                      <label for=\"id_label_single\" style=\"width: 100%;\">
                        <select class=\"js-example-basic-single js-states form-control\" id=\"id_label_single\" style=\"width: 100%;\">
                          <option value=\"Australia\">Australia</option>
                          <option value=\"Japan\">Japan</option>
                          <option value=\"United States\">United States</option>
                          <option value=\"Brazil\">Brazil</option>
                          <option value=\"China\">China</option>
                          <option value=\"Israel\">Israel</option>
                          <option value=\"Philippines\">Philippines</option>
                          <option value=\"Malaysia\">Malaysia</option>
                          <option value=\"Canada\">Canada</option>
                          <option value=\"Chile\">Chile</option>
                          <option value=\"Chile\">Zimbabwe</option>
                        </select>
                      </label>


                    </div>
                  </div>
                  <div class=\"col-md\">
                    <div class=\"form-group\">
                      <label for=\"id_label_single2\">To</label>
                      <div class=\"probootstrap_select-wrap\">
                        <label for=\"id_label_single2\" style=\"width: 100%;\">
                        <select class=\"js-example-basic-single js-states form-control\" id=\"id_label_single2\" style=\"width: 100%;\">
                          <option value=\"Australia\">Australia</option>
                          <option value=\"Japan\">Japan</option>
                          <option value=\"United States\">United States</option>
                          <option value=\"Brazil\">Brazil</option>
                          <option value=\"China\">China</option>
                          <option value=\"Israel\">Israel</option>
                          <option value=\"Philippines\">Philippines</option>
                          <option value=\"Malaysia\">Malaysia</option>
                          <option value=\"Canada\">Canada</option>
                          <option value=\"Chile\">Chile</option>
                          <option value=\"Chile\">Zimbabwe</option>
                        </select>
                      </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END row -->
                <div class=\"row mb-5\">
                  <div class=\"col-md\">
                    <div class=\"form-group\">
                      <label for=\"probootstrap-date-departure\">Departure</label>
                      <div class=\"probootstrap-date-wrap\">
                        <span class=\"icon ion-calendar\"></span> 
                        <input type=\"text\" id=\"probootstrap-date-departure\" class=\"form-control\" placeholder=\"\">
                      </div>
                    </div>
                  </div>
                  <div class=\"col-md\">
                    <div class=\"form-group\">
                      <label for=\"probootstrap-date-arrival\">Arrival</label>
                      <div class=\"probootstrap-date-wrap\">
                        <span class=\"icon ion-calendar\"></span> 
                        <input type=\"text\" id=\"probootstrap-date-arrival\" class=\"form-control\" placeholder=\"\">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END row -->
                <div class=\"row\">
                  <div class=\"col-md\">
                    <label for=\"round\" class=\"mr-5\"><input type=\"radio\" id=\"round\" name=\"direction\">  Round</label>
                    <label for=\"oneway\"><input type=\"radio\" id=\"oneway\" name=\"direction\">  Oneway</label>
                  </div>
                  <div class=\"col-md\">
                    <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary btn-block\">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    
    </section>
    
    ";
        // line 174
        $this->displayBlock('body', $context, $blocks);
        // line 695
        echo "</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "getaway &mdash; Free HTML5 Bootstrap 4 Theme by ProBootstrap.com ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 21
        echo "    
 <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:300,400,700\" rel=\"stylesheet\">
   
   
\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/fonts/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/fonts/flaticon/font/flaticon.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/fonts/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/select2.css"), "html", null, true);
        echo "\">
    

    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/helpers.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/style.css"), "html", null, true);
        echo "\">
    
    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 174
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 175
        echo "    
    

    <section class=\"probootstrap_section\" id=\"section-feature-testimonial\">
      <div class=\"container\">
        <div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-12 text-center mb-5 probootstrap-animate\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Why we Love Places</h2>
            <blockquote class=\"\">
              <p class=\"lead mb-4\"><em>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</em></p>
              <p class=\"probootstrap-author\">
                <a href=\"https://probootstrap.com/\" target=\"_blank\">
                  <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/person_1.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap.com\" class=\"rounded-circle\">
                  <span class=\"probootstrap-name\">James Smith</span>
                  <span class=\"probootstrap-title\">Chief Executive Officer</span>
                </a>
              </p>
            </blockquote>

          </div>
        </div>
        
      </div>
    </section>
    <!-- END section -->


    <section class=\"probootstrap_section\" id=\"section-city-guides\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Top Places Around The World</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
            <a href=\"#\" class=\"probootstrap-thumbnail\">
              <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/img_1.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap.com\" class=\"img-fluid\">
              <div class=\"probootstrap-text\">
                <h3>Buena</h3>
              </div>
            </a>
          </div>
          <div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
            <a href=\"#\" class=\"probootstrap-thumbnail\">
              <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/img_2.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap.com\" class=\"img-fluid\">
              <h3>Road</h3>
            </a>
          </div>
          <div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
            <a href=\"#\" class=\"probootstrap-thumbnail\">
              <img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/img_3.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap.com\" class=\"img-fluid\">
              <h3>Australia</h3>
            </a>
          </div>
          <div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
            <a href=\"#\" class=\"probootstrap-thumbnail\">
              <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/img_4.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap.com\" class=\"img-fluid\">
              <h3>Japan</h3>
            </a>
          </div>
        </div>
      </div>
    </section>
    
  

    <section class=\"probootstrap_section\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Our Services</h2>
          </div>
        </div>
      </div>
    </section>
        

    <section class=\"probootstrap-section-half d-md-flex\" id=\"section-about\">
      <div class=\"probootstrap-image probootstrap-animate\" data-animate-effect=\"fadeIn\" style=\"background-image: url(assets/front-office/images/img_2.jpg)\"></div>
      <div class=\"probootstrap-text\">
        <div class=\"probootstrap-inner probootstrap-animate\" data-animate-effect=\"fadeInRight\">
          <h2 class=\"heading mb-4\">Customer Service</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          <p><a href=\"#\" class=\"btn btn-primary\">Read More</a></p>
        </div>
      </div>
    </section>


    <section class=\"probootstrap-section-half d-md-flex\">
      <div class=\"probootstrap-image order-2 probootstrap-animate\" data-animate-effect=\"fadeIn\" style=\"background-image: url(assets/front-office/images/img_3.jpg)\"></div>
      <div class=\"probootstrap-text order-1\">
        <div class=\"probootstrap-inner probootstrap-animate\" data-animate-effect=\"fadeInLeft\">
          <h2 class=\"heading mb-4\">Payment Options</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          <p><a href=\"#\" class=\"btn btn-primary\">Learn More</a></p>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class=\"probootstrap_section\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Travel With Us</h2>
          </div>
        </div>
        
        <div class=\"row probootstrap-animate\">
          <div class=\"col-md-12\">
            <div class=\"owl-carousel js-owl-carousel\">
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-teatro-de-la-caridad\"></span>
                <em>Teatro de la Caridad</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-royal-museum-of-the-armed-forces\"></span>
                <em>Royal Museum of the Armed Forces</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-parthenon\"></span>
                <em>Parthenon</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-marina-bay-sands\"></span>
                <em>Marina Bay Sands</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-samarra-minaret\"></span>
                <em>Samarra Minaret</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-chiang-kai-shek-memorial\"></span>
                <em>Chiang Kai Shek Memorial</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-heuvelse-kerk-tilburg\"></span>
                <em>Heuvelse Kerk Tilburg</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-cathedral-of-cordoba\"></span>
                <em>Cathedral of Cordoba</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-london-bridge\"></span>
                <em>London Bridge</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-taj-mahal\"></span>
                <em>Taj Mahal</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-leaning-tower-of-pisa\"></span>
                <em>Leaning Tower of Pisa</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-burj-al-arab\"></span>
                <em>Burj al Arab</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-gate-of-india\"></span>
                <em>Gate of India</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-osaka-castle\"></span>
                <em>Osaka Castle</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-statue-of-liberty\"></span>
                <em>Statue of Liberty</em>
              </a>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class=\"probootstrap_section bg-light\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">More Services</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6\">

            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_1.jpg)\">
              </div>
              <div class=\"media-body\">
                <h5 class=\"mb-3\">01. Service Title Here</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>

            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_2.jpg)\">
              </div>
              <div class=\"media-body\">
                <h5 class=\"mb-3\">02. Service Title Here</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>

          </div>
          <div class=\"col-md-6\">
            
            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_4.jpg)\">
              </div>
              <div class=\"media-body\">
                <h5 class=\"mb-3\">03. Service Title Here</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>

            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_5.jpg)\">
              </div>
              <div class=\"media-body\">
                <h5 class=\"mb-3\">04. Service Title Here</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class=\"probootstrap_section\" id=\"section-feature-testimonial\">
      <div class=\"container\">
        <div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-12 text-center mb-5 probootstrap-animate\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Testimonial</h2>
            <blockquote class=\"\">
              <p class=\"lead mb-4\"><em>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</em></p>
              <p class=\"probootstrap-author\">
                <a href=\"https://probootstrap.com/\" target=\"_blank\">
                  <img src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/person_1.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap.com\" class=\"rounded-circle\">
                  <span class=\"probootstrap-name\">James Smith</span>
                  <span class=\"probootstrap-title\">Chief Executive Officer</span>
                </a>
              </p>
            </blockquote>

          </div>
        </div>
        
      </div>
    </section>
    <!-- END section -->

    <section class=\"probootstrap_section bg-light\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">News</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6\">

            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_1.jpg)\">
              </div>
              <div class=\"media-body\">
                <span class=\"text-uppercase\">January 1st 2018</span>
                <h5 class=\"mb-3\">Travel To United States Without Visa</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <p><a href=\"#\">Read More</a></p>
              </div>
            </div>

            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_2.jpg)\">
              </div>
              <div class=\"media-body\">
                <span class=\"text-uppercase\">January 1st 2018</span>
                <h5 class=\"mb-3\">Travel To United States Without Visa</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <p><a href=\"#\">Read More</a></p>
              </div>
            </div>

          </div>
          <div class=\"col-md-6\">
            
            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_4.jpg)\">
              </div>
              <div class=\"media-body\">
                <span class=\"text-uppercase\">January 1st 2018</span>
                <h5 class=\"mb-3\">Travel To United States Without Visa</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <p><a href=\"#\">Read More</a></p>
              </div>
            </div>

            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_5.jpg)\">
              </div>
              <div class=\"media-body\">
                <span class=\"text-uppercase\">January 1st 2018</span>
                <h5 class=\"mb-3\">Travel To United States Without Visa</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <p><a href=\"#\">Read More</a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class=\"probootstrap_section\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Travel With Us</h2>
          </div>
        </div>
        
        <div class=\"row probootstrap-animate\">
          <div class=\"col-md-12\">
            <div class=\"owl-carousel js-owl-carousel-2\">
              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/sq_img_2.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/sq_img_1.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/sq_img_2.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/sq_img_4.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/sq_img_5.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->


              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"";
        // line 568
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/sq_img_2.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/sq_img_1.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/sq_img_3.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/sq_img_4.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/sq_img_5.jpg"), "html", null, true);
        echo "\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <footer class=\"probootstrap_section probootstrap-border-top\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-3\">
            <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
            <ul class=\"list-unstyled\">
              <li><a href=\"https://free-template.co\" target=\"_blank\">Home</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">About</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Services</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Contact</a></li>
            </ul>
          </div>
          <div class=\"col-md-3\">
            <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
            <ul class=\"list-unstyled\">
              <li><a href=\"https://free-template.co\" target=\"_blank\">Home</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">About</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Services</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Contact</a></li>
            </ul>
          </div>
          <div class=\"col-md-3\">
            <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
            <ul class=\"list-unstyled\">
              <li><a href=\"https://free-template.co\" target=\"_blank\">Home</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">About</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Services</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Contact</a></li>
            </ul>
          </div>
          <div class=\"col-md-3\">
            <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
            <ul class=\"list-unstyled\">
              <li><a href=\"https://free-template.co\" target=\"_blank\">Home</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">About</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Services</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class=\"row pt-5\">
          <div class=\"col-md-12 text-center\">
            <p class=\"probootstrap_font-14\">&copy; 2017. All Rights Reserved. <br> Designed &amp; Developed by <a href=\"https://probootstrap.com/\" target=\"_blank\">ProBootstrap</a><small> (Don't remove credit link on this footer. See <a href=\"https://probootstrap.com/license/\">license</a>)</small></p>
            <p class=\"probootstrap_font-14\">Demo Images: <a href=\"https://unsplash.com/\" target=\"_blank\">Unsplash</a></p>
          </div>
        </div>
      </div>
    </footer>

   ";
        // line 677
        $this->displayBlock('js', $context, $blocks);
        // line 692
        echo "  
\t</body>
     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 677
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        echo " 
    <script src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"asset";
        // line 681
        echo "front-office/js/bootstrap.min.js";
        echo "\"></script>
    <script src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/select2.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 690
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  932 => 690,  927 => 688,  922 => 686,  918 => 685,  914 => 684,  909 => 682,  905 => 681,  901 => 680,  896 => 678,  884 => 677,  872 => 692,  870 => 677,  802 => 612,  788 => 601,  774 => 590,  760 => 579,  746 => 568,  731 => 556,  717 => 545,  703 => 534,  689 => 523,  675 => 512,  582 => 422,  389 => 232,  380 => 226,  371 => 220,  360 => 212,  332 => 187,  318 => 175,  308 => 174,  294 => 39,  290 => 38,  284 => 35,  280 => 34,  276 => 33,  271 => 31,  266 => 29,  261 => 27,  257 => 26,  253 => 25,  247 => 21,  237 => 20,  218 => 14,  208 => 695,  206 => 174,  73 => 43,  71 => 20,  62 => 14,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
  
      <!-- 
    More Templates Visit ==> ProBootstrap.com
    Free Template by ProBootstrap.com under the License Creative Commons 3.0 ==> (probootstrap.com/license)

    IMPORTANT: You can do whatever you want with this template but you need to keep the footer link back to ProBootstrap.com
    -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<title>{% block title %}getaway &mdash; Free HTML5 Bootstrap 4 Theme by ProBootstrap.com {% endblock %}</title>
\t\t<meta name=\"description\" content=\"Free Bootstrap 4 Theme by ProBootstrap.com\">
\t\t<meta name=\"keywords\" content=\"free website templates, free bootstrap themes, free template, free bootstrap, free website template\">
     <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\">
     <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
 
    {% block css%}
    
 <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:300,400,700\" rel=\"stylesheet\">
   
   
\t\t<link rel=\"stylesheet\" href=\"{{asset('front-office/css/bootstrap/bootstrap.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('front-office/css/animate.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('front-office/fonts/ionicons/css/ionicons.min.css')}}\">
    
    <link rel=\"stylesheet\" href=\"{{asset('front-office/css/owl.carousel.min.css')}}\">
    
    <link rel=\"stylesheet\" href=\"{{asset('front-office/fonts/flaticon/font/flaticon.css')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('front-office/fonts/fontawesome/css/font-awesome.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('front-office/css/bootstrap-datepicker.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('front-office/css/select2.css')}}\">
    

    <link rel=\"stylesheet\" href=\"{{asset('front-office/css/helpers.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('front-office/css/style.css')}}\">
    
    
    {% endblock %}
     
\t</head>
   
\t<body>


    <nav class=\"navbar navbar-expand-lg navbar-dark probootstrap_navbar\" id=\"probootstrap-navbar\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">getaway</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#probootstrap-menu\" aria-controls=\"probootstrap-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span><i class=\"ion-navicon\"></i></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"probootstrap-menu\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\"><a class=\"nav-link\" href=\"\"/test1\"\">Home</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/shop\">Boutique</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"services.html\">Services</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"travel.html\">Travel With Us</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    
    <section class=\"probootstrap-cover overflow-hidden relative\"  style=\"background-image: url('/front-office/images/bg_1.jpg');\" data-stellar-background-ratio=\"0.5\"  id=\"section-home\">
      
   
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row align-items-center\">
          <div class=\"col-md\">
          
            <h2 class=\"heading mb-2 display-4 font-light probootstrap-animate\">Explore The World With Ease</h2>
            <p class=\"lead mb-5 probootstrap-animate\">
              

            </p>
              <a href=\"onepage.html\" role=\"button\" class=\"btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3\">See OnePage Verion</a> 
            </p>
          </div> 
          <div class=\"col-md probootstrap-animate\">
            <form action=\"#\" class=\"probootstrap-form\">
              <div class=\"form-group\">
                <div class=\"row mb-3\">
                  <div class=\"col-md\">
                    <div class=\"form-group\">
                      <label for=\"id_label_single\">From</label>

                      <label for=\"id_label_single\" style=\"width: 100%;\">
                        <select class=\"js-example-basic-single js-states form-control\" id=\"id_label_single\" style=\"width: 100%;\">
                          <option value=\"Australia\">Australia</option>
                          <option value=\"Japan\">Japan</option>
                          <option value=\"United States\">United States</option>
                          <option value=\"Brazil\">Brazil</option>
                          <option value=\"China\">China</option>
                          <option value=\"Israel\">Israel</option>
                          <option value=\"Philippines\">Philippines</option>
                          <option value=\"Malaysia\">Malaysia</option>
                          <option value=\"Canada\">Canada</option>
                          <option value=\"Chile\">Chile</option>
                          <option value=\"Chile\">Zimbabwe</option>
                        </select>
                      </label>


                    </div>
                  </div>
                  <div class=\"col-md\">
                    <div class=\"form-group\">
                      <label for=\"id_label_single2\">To</label>
                      <div class=\"probootstrap_select-wrap\">
                        <label for=\"id_label_single2\" style=\"width: 100%;\">
                        <select class=\"js-example-basic-single js-states form-control\" id=\"id_label_single2\" style=\"width: 100%;\">
                          <option value=\"Australia\">Australia</option>
                          <option value=\"Japan\">Japan</option>
                          <option value=\"United States\">United States</option>
                          <option value=\"Brazil\">Brazil</option>
                          <option value=\"China\">China</option>
                          <option value=\"Israel\">Israel</option>
                          <option value=\"Philippines\">Philippines</option>
                          <option value=\"Malaysia\">Malaysia</option>
                          <option value=\"Canada\">Canada</option>
                          <option value=\"Chile\">Chile</option>
                          <option value=\"Chile\">Zimbabwe</option>
                        </select>
                      </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END row -->
                <div class=\"row mb-5\">
                  <div class=\"col-md\">
                    <div class=\"form-group\">
                      <label for=\"probootstrap-date-departure\">Departure</label>
                      <div class=\"probootstrap-date-wrap\">
                        <span class=\"icon ion-calendar\"></span> 
                        <input type=\"text\" id=\"probootstrap-date-departure\" class=\"form-control\" placeholder=\"\">
                      </div>
                    </div>
                  </div>
                  <div class=\"col-md\">
                    <div class=\"form-group\">
                      <label for=\"probootstrap-date-arrival\">Arrival</label>
                      <div class=\"probootstrap-date-wrap\">
                        <span class=\"icon ion-calendar\"></span> 
                        <input type=\"text\" id=\"probootstrap-date-arrival\" class=\"form-control\" placeholder=\"\">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END row -->
                <div class=\"row\">
                  <div class=\"col-md\">
                    <label for=\"round\" class=\"mr-5\"><input type=\"radio\" id=\"round\" name=\"direction\">  Round</label>
                    <label for=\"oneway\"><input type=\"radio\" id=\"oneway\" name=\"direction\">  Oneway</label>
                  </div>
                  <div class=\"col-md\">
                    <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary btn-block\">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    
    </section>
    
    {% block body %}
    
    

    <section class=\"probootstrap_section\" id=\"section-feature-testimonial\">
      <div class=\"container\">
        <div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-12 text-center mb-5 probootstrap-animate\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Why we Love Places</h2>
            <blockquote class=\"\">
              <p class=\"lead mb-4\"><em>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</em></p>
              <p class=\"probootstrap-author\">
                <a href=\"https://probootstrap.com/\" target=\"_blank\">
                  <img src=\"{{asset('front-office/images/person_1.jpg')}}\" alt=\"Free Template by ProBootstrap.com\" class=\"rounded-circle\">
                  <span class=\"probootstrap-name\">James Smith</span>
                  <span class=\"probootstrap-title\">Chief Executive Officer</span>
                </a>
              </p>
            </blockquote>

          </div>
        </div>
        
      </div>
    </section>
    <!-- END section -->


    <section class=\"probootstrap_section\" id=\"section-city-guides\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Top Places Around The World</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
            <a href=\"#\" class=\"probootstrap-thumbnail\">
              <img src=\"{{asset('front-office/images/img_1.jpg')}}\" alt=\"Free Template by ProBootstrap.com\" class=\"img-fluid\">
              <div class=\"probootstrap-text\">
                <h3>Buena</h3>
              </div>
            </a>
          </div>
          <div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
            <a href=\"#\" class=\"probootstrap-thumbnail\">
              <img src=\"{{asset('front-office/images/img_2.jpg')}}\" alt=\"Free Template by ProBootstrap.com\" class=\"img-fluid\">
              <h3>Road</h3>
            </a>
          </div>
          <div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
            <a href=\"#\" class=\"probootstrap-thumbnail\">
              <img src=\"{{asset('front-office/images/img_3.jpg')}}\" alt=\"Free Template by ProBootstrap.com\" class=\"img-fluid\">
              <h3>Australia</h3>
            </a>
          </div>
          <div class=\"col-lg-3 col-md-6 probootstrap-animate mb-3\">
            <a href=\"#\" class=\"probootstrap-thumbnail\">
              <img src=\"{{asset('front-office/images/img_4.jpg')}}\" alt=\"Free Template by ProBootstrap.com\" class=\"img-fluid\">
              <h3>Japan</h3>
            </a>
          </div>
        </div>
      </div>
    </section>
    
  

    <section class=\"probootstrap_section\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Our Services</h2>
          </div>
        </div>
      </div>
    </section>
        

    <section class=\"probootstrap-section-half d-md-flex\" id=\"section-about\">
      <div class=\"probootstrap-image probootstrap-animate\" data-animate-effect=\"fadeIn\" style=\"background-image: url(assets/front-office/images/img_2.jpg)\"></div>
      <div class=\"probootstrap-text\">
        <div class=\"probootstrap-inner probootstrap-animate\" data-animate-effect=\"fadeInRight\">
          <h2 class=\"heading mb-4\">Customer Service</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          <p><a href=\"#\" class=\"btn btn-primary\">Read More</a></p>
        </div>
      </div>
    </section>


    <section class=\"probootstrap-section-half d-md-flex\">
      <div class=\"probootstrap-image order-2 probootstrap-animate\" data-animate-effect=\"fadeIn\" style=\"background-image: url(assets/front-office/images/img_3.jpg)\"></div>
      <div class=\"probootstrap-text order-1\">
        <div class=\"probootstrap-inner probootstrap-animate\" data-animate-effect=\"fadeInLeft\">
          <h2 class=\"heading mb-4\">Payment Options</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          <p><a href=\"#\" class=\"btn btn-primary\">Learn More</a></p>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class=\"probootstrap_section\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Travel With Us</h2>
          </div>
        </div>
        
        <div class=\"row probootstrap-animate\">
          <div class=\"col-md-12\">
            <div class=\"owl-carousel js-owl-carousel\">
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-teatro-de-la-caridad\"></span>
                <em>Teatro de la Caridad</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-royal-museum-of-the-armed-forces\"></span>
                <em>Royal Museum of the Armed Forces</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-parthenon\"></span>
                <em>Parthenon</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-marina-bay-sands\"></span>
                <em>Marina Bay Sands</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-samarra-minaret\"></span>
                <em>Samarra Minaret</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-chiang-kai-shek-memorial\"></span>
                <em>Chiang Kai Shek Memorial</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-heuvelse-kerk-tilburg\"></span>
                <em>Heuvelse Kerk Tilburg</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-cathedral-of-cordoba\"></span>
                <em>Cathedral of Cordoba</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-london-bridge\"></span>
                <em>London Bridge</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-taj-mahal\"></span>
                <em>Taj Mahal</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-leaning-tower-of-pisa\"></span>
                <em>Leaning Tower of Pisa</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-burj-al-arab\"></span>
                <em>Burj al Arab</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-gate-of-india\"></span>
                <em>Gate of India</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-osaka-castle\"></span>
                <em>Osaka Castle</em>
              </a>
              <a class=\"probootstrap-slide\" href=\"#\">
                <span class=\"flaticon-statue-of-liberty\"></span>
                <em>Statue of Liberty</em>
              </a>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class=\"probootstrap_section bg-light\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">More Services</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6\">

            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_1.jpg)\">
              </div>
              <div class=\"media-body\">
                <h5 class=\"mb-3\">01. Service Title Here</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>

            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_2.jpg)\">
              </div>
              <div class=\"media-body\">
                <h5 class=\"mb-3\">02. Service Title Here</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>

          </div>
          <div class=\"col-md-6\">
            
            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_4.jpg)\">
              </div>
              <div class=\"media-body\">
                <h5 class=\"mb-3\">03. Service Title Here</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>

            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_5.jpg)\">
              </div>
              <div class=\"media-body\">
                <h5 class=\"mb-3\">04. Service Title Here</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class=\"probootstrap_section\" id=\"section-feature-testimonial\">
      <div class=\"container\">
        <div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-12 text-center mb-5 probootstrap-animate\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Testimonial</h2>
            <blockquote class=\"\">
              <p class=\"lead mb-4\"><em>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</em></p>
              <p class=\"probootstrap-author\">
                <a href=\"https://probootstrap.com/\" target=\"_blank\">
                  <img src=\"{{asset('front-office/images/person_1.jpg')}}\" alt=\"Free Template by ProBootstrap.com\" class=\"rounded-circle\">
                  <span class=\"probootstrap-name\">James Smith</span>
                  <span class=\"probootstrap-title\">Chief Executive Officer</span>
                </a>
              </p>
            </blockquote>

          </div>
        </div>
        
      </div>
    </section>
    <!-- END section -->

    <section class=\"probootstrap_section bg-light\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">News</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6\">

            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_1.jpg)\">
              </div>
              <div class=\"media-body\">
                <span class=\"text-uppercase\">January 1st 2018</span>
                <h5 class=\"mb-3\">Travel To United States Without Visa</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <p><a href=\"#\">Read More</a></p>
              </div>
            </div>

            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_2.jpg)\">
              </div>
              <div class=\"media-body\">
                <span class=\"text-uppercase\">January 1st 2018</span>
                <h5 class=\"mb-3\">Travel To United States Without Visa</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <p><a href=\"#\">Read More</a></p>
              </div>
            </div>

          </div>
          <div class=\"col-md-6\">
            
            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_4.jpg)\">
              </div>
              <div class=\"media-body\">
                <span class=\"text-uppercase\">January 1st 2018</span>
                <h5 class=\"mb-3\">Travel To United States Without Visa</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <p><a href=\"#\">Read More</a></p>
              </div>
            </div>

            <div class=\"media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate\">
              <div class=\"probootstrap-media-image\" style=\"background-image: url(assets/front-office/images/img_5.jpg)\">
              </div>
              <div class=\"media-body\">
                <span class=\"text-uppercase\">January 1st 2018</span>
                <h5 class=\"mb-3\">Travel To United States Without Visa</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <p><a href=\"#\">Read More</a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class=\"probootstrap_section\">
      <div class=\"container\">
        <div class=\"row text-center mb-5 probootstrap-animate\">
          <div class=\"col-md-12\">
            <h2 class=\"display-4 border-bottom probootstrap-section-heading\">Travel With Us</h2>
          </div>
        </div>
        
        <div class=\"row probootstrap-animate\">
          <div class=\"col-md-12\">
            <div class=\"owl-carousel js-owl-carousel-2\">
              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"{{asset('front-office/images/sq_img_2.jpg')}}\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"{{asset('front-office/images/sq_img_1.jpg')}}\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"{{asset('front-office/images/sq_img_2.jpg')}}\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"{{asset('front-office/images/sq_img_4.jpg')}}\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"{{asset('front-office/images/sq_img_5.jpg')}}\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->


              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"{{asset('front-office/images/sq_img_2.jpg')}}\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"{{asset('front-office/images/sq_img_1.jpg')}}\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"{{asset('front-office/images/sq_img_3.jpg')}}\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"{{asset('front-office/images/sq_img_4.jpg')}}\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->

              <div>
                <div class=\"media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate\">
                  <img src=\"{{asset('front-office/images/sq_img_5.jpg')}}\" alt=\"Free Template by ProBootstrap\" class=\"img-fluid\">
                  <div class=\"media-body\">
                    <h5 class=\"mb-3\">02. Service Title Here</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                  </div>
                </div>
              </div>
              <!-- END slide item -->
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <footer class=\"probootstrap_section probootstrap-border-top\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-3\">
            <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
            <ul class=\"list-unstyled\">
              <li><a href=\"https://free-template.co\" target=\"_blank\">Home</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">About</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Services</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Contact</a></li>
            </ul>
          </div>
          <div class=\"col-md-3\">
            <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
            <ul class=\"list-unstyled\">
              <li><a href=\"https://free-template.co\" target=\"_blank\">Home</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">About</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Services</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Contact</a></li>
            </ul>
          </div>
          <div class=\"col-md-3\">
            <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
            <ul class=\"list-unstyled\">
              <li><a href=\"https://free-template.co\" target=\"_blank\">Home</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">About</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Services</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Contact</a></li>
            </ul>
          </div>
          <div class=\"col-md-3\">
            <h3 class=\"probootstrap_font-18 mb-3\">Quick Links</h3>
            <ul class=\"list-unstyled\">
              <li><a href=\"https://free-template.co\" target=\"_blank\">Home</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">About</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Services</a></li>
              <li><a href=\"https://free-template.co\" target=\"_blank\">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class=\"row pt-5\">
          <div class=\"col-md-12 text-center\">
            <p class=\"probootstrap_font-14\">&copy; 2017. All Rights Reserved. <br> Designed &amp; Developed by <a href=\"https://probootstrap.com/\" target=\"_blank\">ProBootstrap</a><small> (Don't remove credit link on this footer. See <a href=\"https://probootstrap.com/license/\">license</a>)</small></p>
            <p class=\"probootstrap_font-14\">Demo Images: <a href=\"https://unsplash.com/\" target=\"_blank\">Unsplash</a></p>
          </div>
        </div>
      </div>
    </footer>

   {% block js %} 
    <script src=\"{{asset('front-office/js/jquery.min.js')}}\"></script>
    
    <script src=\"{{asset('front-office/js/popper.min.js')}}\"></script>
    <script src=\"asset{{('front-office/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('front-office/js/owl.carousel.min.js')}}\"></script>

    <script src=\"{{asset('front-office/js/bootstrap-datepicker.js')}}\"></script>
    <script src=\"{{asset('front-office/js/jquery.waypoints.min.js')}}\"></script>
    <script src=\"{{asset('front-office/js/jquery.easing.1.3.js')}}\"></script>

    <script src=\"{{asset('front-office/js/select2.min.js')}}\"></script>

    <script src=\"{{asset('front-office/js/main.js')}}\"></script>
    {% endblock %}
  
\t</body>
     {% endblock %}
</html>", "base-front.html.twig", "C:\\xampp\\htdocs\\pii\\templates\\base-front.html.twig");
    }
}
