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

/* base.html.twig */
class __TwigTemplate_3f35047f79ae027f8ed0cf92fc38e912 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

          <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

          <!-- Template Main CSS File -->
          <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        <!-- ======= Header ======= -->
  <header id=\"header\"  style=\"background-color: black;\">
    <div class=\"container d-flex align-items-center justify-content-lg-between\">

      <h1 class=\"logo me-auto me-lg-0\"><a href=\"index.html\">Gp<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo me-auto me-lg-0\"><img src=\"assets/home/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

      <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">Bells</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Records</a></li>
          <li><a class=\"nav-link scrollto \" href=\"#portfolio\">Teachers</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Reports</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Anti fraud</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

      <a href=\"#about\" class=\"get-started-btn scrollto\">Get Started</a>

    </div>
  </header><!-- End Header -->
    ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"footer-info\">
              <h3>Gp<span>.</span></h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class=\"social-links mt-3\">
                <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-2 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Home</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">About us</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Our Services</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
            </ul>
          </div>

          <div class=\"col-lg-4 col-md-6 footer-newsletter\">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
          
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 45,  215 => 5,  129 => 46,  127 => 45,  110 => 31,  94 => 18,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  59 => 7,  55 => 6,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link href=\"{{asset('assets/home/img/favicon.png')}}\" rel=\"icon\">
        <link href=\"{{asset('assets/home/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">

          <link href=\"{{asset('assets/home/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
          <link href=\"{{asset('assets/home/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
          <link href=\"{{asset('assets/home/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
          <link href=\"{{asset('assets/home/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
          <link href=\"{{asset('assets/home/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
          <link href=\"{{asset('assets/home/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
          <link href=\"{{asset('assets/home/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">

          <!-- Template Main CSS File -->
          <link href=\"{{asset('assets/home/css/style.css')}}\" rel=\"stylesheet\">
    </head>
    <body>
        <!-- ======= Header ======= -->
  <header id=\"header\"  style=\"background-color: black;\">
    <div class=\"container d-flex align-items-center justify-content-lg-between\">

      <h1 class=\"logo me-auto me-lg-0\"><a href=\"index.html\">Gp<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo me-auto me-lg-0\"><img src=\"assets/home/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

      <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"{{path('home')}}\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">Bells</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Records</a></li>
          <li><a class=\"nav-link scrollto \" href=\"#portfolio\">Teachers</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Reports</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Anti fraud</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

      <a href=\"#about\" class=\"get-started-btn scrollto\">Get Started</a>

    </div>
  </header><!-- End Header -->
    {% block body %}{% endblock %}
  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"footer-info\">
              <h3>Gp<span>.</span></h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class=\"social-links mt-3\">
                <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-2 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Home</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">About us</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Our Services</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
            </ul>
          </div>

          <div class=\"col-lg-4 col-md-6 footer-newsletter\">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
          
    </body>
</html>
", "base.html.twig", "E:\\development\\symfony\\Miguel\\miguel-symfony-website\\templates\\base.html.twig");
    }
}
