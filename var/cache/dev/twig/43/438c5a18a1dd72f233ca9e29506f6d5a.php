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

/* customer/create.html.twig */
class __TwigTemplate_9f24bff4f448e0d2c7c5799198a748ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "customer/create.html.twig", 1);
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

        echo "Create customer";
        
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
        echo "
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<form class=\"container\"  method=\"post\">
  <h1 class=\"mt-3\">Edit Data Page.</h1>
  <div class=\"form-group mt-3\">
    <label for=\"firstName\">First Name</label>
    <input type=\"firstName\" class=\"form-control\" id=\"firstName\" placeholder=\"Enter First Name\" >
  </div>
  <div class=\"form-group mt-3\">
    <label for=\"lastName\">Last Name</label>
    <input type=\"lastName\" class=\"form-control\" id=\"lastName\" placeholder=\"Enter Last Name\" >
  </div>
  <div class=\"form-group mt-3\">
    <label for=\"email\">Email address</label>
    <input type=\"email\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" >
  </div>
  <div class=\"form-group\">
    <label for=\"phoneNumber\">PhoneNumber</label>
    <input type=\"phoneNumber\" class=\"form-control\" id=\"phoneNumber\" placeholder=\"phoneNumber\" >
  </div>
  
  <button type=\"submit\" class=\"btn btn-primary my-3\">Create</button>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "customer/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create customer{% endblock %}

{% block body %}

<link href=\"{{asset('assets/home/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
<form class=\"container\"  method=\"post\">
  <h1 class=\"mt-3\">Edit Data Page.</h1>
  <div class=\"form-group mt-3\">
    <label for=\"firstName\">First Name</label>
    <input type=\"firstName\" class=\"form-control\" id=\"firstName\" placeholder=\"Enter First Name\" >
  </div>
  <div class=\"form-group mt-3\">
    <label for=\"lastName\">Last Name</label>
    <input type=\"lastName\" class=\"form-control\" id=\"lastName\" placeholder=\"Enter Last Name\" >
  </div>
  <div class=\"form-group mt-3\">
    <label for=\"email\">Email address</label>
    <input type=\"email\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" >
  </div>
  <div class=\"form-group\">
    <label for=\"phoneNumber\">PhoneNumber</label>
    <input type=\"phoneNumber\" class=\"form-control\" id=\"phoneNumber\" placeholder=\"phoneNumber\" >
  </div>
  
  <button type=\"submit\" class=\"btn btn-primary my-3\">Create</button>
</form>
{% endblock %}", "customer/create.html.twig", "E:\\development\\symfony\\Miguel\\miguel-symfony-website\\templates\\customer\\create.html.twig");
    }
}
