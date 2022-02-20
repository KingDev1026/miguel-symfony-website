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

/* home/index.html.twig */
class __TwigTemplate_1106b6b4559919960e2ff6ab3b7a119f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center justify-content-center\">
    <div class=\"container\" data-aos=\"fade-up\">

      <div class=\"row justify-content-center\" data-aos=\"fade-up\" data-aos-delay=\"150\">
        <div class=\"col-xl-6 col-lg-8\">
          <h1>I can implement anything you want<span>.</span></h1>
          <h2>Please choose your option.</h2>
        </div>
      </div>

      <div class=\"row gy-4 mt-5 justify-content-center\" data-aos=\"zoom-in\" data-aos-delay=\"250\">
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-store-line\"></i>
            <h3><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer");
        echo "\">workshops</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-bar-chart-box-line\"></i>
            <h3><a href=\"\">tires</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-calendar-todo-line\"></i>
            <h3><a href=\"\">awards</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-paint-brush-line\"></i>
            <h3><a href=\"\">vehicles</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-database-2-line\"></i>
            <h3><a href=\"\">rejections</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-database-2-line\"></i>
            <h3><a href=\"\">fields</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-database-2-line\"></i>
            <h3><a href=\"\">marches</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-database-2-line\"></i>
            <h3><a href=\"\">I send you</a></h3>
          </div>
        </div>
      </div>
      </div>


    </div>
  </section><!-- End Hero -->
  <!-- Vendor JS Files -->
  <script src=\"";
        // line 78
        echo "assets/home/vendor/purecounter/purecounter.js";
        echo "\"></script>
  <script src=\"";
        // line 79
        echo "assets/home/vendor/aos/aos.js";
        echo "\"></script>
  <script src=\"";
        // line 80
        echo "assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js";
        echo "\"></script>
  <script src=\"";
        // line 81
        echo "assets/home/vendor/glightbox/js/glightbox.min.js";
        echo "\"></script>
  <script src=\"";
        // line 82
        echo "assets/home/vendor/isotope-layout/isotope.pkgd.min.js";
        echo "\"></script>
  <script src=\"";
        // line 83
        echo "assets/home/vendor/swiper/swiper-bundle.min.js";
        echo "\"></script>
  <script src=\"";
        // line 84
        echo "assets/home/vendor/php-email-form/validate.js";
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"assets/home/js/main.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 84,  185 => 83,  181 => 82,  177 => 81,  173 => 80,  169 => 79,  165 => 78,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center justify-content-center\">
    <div class=\"container\" data-aos=\"fade-up\">

      <div class=\"row justify-content-center\" data-aos=\"fade-up\" data-aos-delay=\"150\">
        <div class=\"col-xl-6 col-lg-8\">
          <h1>I can implement anything you want<span>.</span></h1>
          <h2>Please choose your option.</h2>
        </div>
      </div>

      <div class=\"row gy-4 mt-5 justify-content-center\" data-aos=\"zoom-in\" data-aos-delay=\"250\">
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-store-line\"></i>
            <h3><a href=\"{{path('customer')}}\">workshops</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-bar-chart-box-line\"></i>
            <h3><a href=\"\">tires</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-calendar-todo-line\"></i>
            <h3><a href=\"\">awards</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-paint-brush-line\"></i>
            <h3><a href=\"\">vehicles</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-database-2-line\"></i>
            <h3><a href=\"\">rejections</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-database-2-line\"></i>
            <h3><a href=\"\">fields</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-database-2-line\"></i>
            <h3><a href=\"\">marches</a></h3>
          </div>
        </div>
        <div class=\"col-xl-2 col-md-4\">
          <div class=\"icon-box\">
            <i class=\"ri-database-2-line\"></i>
            <h3><a href=\"\">I send you</a></h3>
          </div>
        </div>
      </div>
      </div>


    </div>
  </section><!-- End Hero -->
  <!-- Vendor JS Files -->
  <script src=\"{{('assets/home/vendor/purecounter/purecounter.js')}}\"></script>
  <script src=\"{{('assets/home/vendor/aos/aos.js')}}\"></script>
  <script src=\"{{('assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
  <script src=\"{{('assets/home/vendor/glightbox/js/glightbox.min.js')}}\"></script>
  <script src=\"{{('assets/home/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
  <script src=\"{{('assets/home/vendor/swiper/swiper-bundle.min.js')}}\"></script>
  <script src=\"{{('assets/home/vendor/php-email-form/validate.js')}}\"></script>

  <!-- Template Main JS File -->
  <script src=\"assets/home/js/main.js\"></script>
{% endblock %}
", "home/index.html.twig", "E:\\development\\symfony\\Miguel\\miguel-symfony-website\\templates\\home\\index.html.twig");
    }
}
