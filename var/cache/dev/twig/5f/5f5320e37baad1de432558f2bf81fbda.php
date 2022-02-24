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

/* customer/index.html.twig */
class __TwigTemplate_b34dca3e4fac3acd4202d28f117da328 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "customer/index.html.twig", 1);
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

        echo "Hello CustomerController!";
        
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
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("table/css/style.css"), "html", null, true);
        echo "\">

<section class=\"ftco-section\">
        <div class=\"container\">
            <h1>This is Customer page.</h1>
            <div class=\"row\">
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_create_view");
        echo "\" class=\"col-md-2\"><button type=\"button\" class=\"btn btn-success mb-3\">Create</button></a>
                <div class=\"col-md-10 row\">
                    <div class=\"col-md-10\">
                        <input class=\"form-control\" type=\"file\" accept=\".xls, .xlsx\" id=\"excelFile\" name=\"excelFile\" multiple enctype=\"multipart/form-data\" />
                    </div>
                    <button type=\"submit\" class=\"btn btn-info mb-3 col-md-2 upload-btn\">Upload</button>
                </div>
            </div>
            <div id=\"ExcelTable\"></div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"table-wrap\">
                        <table class=\"table table-bordered table-dark table-hover main-table\">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Email</th>
                              <th>Phone Number</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            ";
        // line 41
        $context["myVal"] = 0;
        // line 42
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 43
            echo "                                <tr>
                                    ";
            // line 44
            $context["myVal"] = ((isset($context["myVal"]) || array_key_exists("myVal", $context) ? $context["myVal"] : (function () { throw new RuntimeError('Variable "myVal" does not exist.', 44, $this->source); })()) + 1);
            // line 45
            echo "                                    <td>";
            echo twig_escape_filter($this->env, (isset($context["myVal"]) || array_key_exists("myVal", $context) ? $context["myVal"] : (function () { throw new RuntimeError('Variable "myVal" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "firstName", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "lastName", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "phoneNumber", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_show", ["id" => twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\">Edit</button></a></td>
                                    <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-danger delete-btn\" >Delete</button></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jQuery-v3.5.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/xlsx.js\"></script>
    <script>
        \$(\".upload-btn\").on(\"click\", function(e){
            var fileUpload = document.getElementById(\"excelFile\");            
            var regex = /^([a-zA-Z0-9\\s_\\\\.\\-:])+(.xls|.xlsx)\$/;
            if (regex.test(fileUpload.value.toLowerCase())) {
                if (typeof (FileReader) != \"undefined\") {
                    var reader = new FileReader();

                    //For Browsers other than IE.
                    if (reader.readAsBinaryString) {
                        reader.onload = function (e) {
                            GetTableFromExcel(e.target.result);
                        };
                        reader.readAsBinaryString(fileUpload.files[0]);
                    } else {
                        //For IE Browser.
                        reader.onload = function (e) {
                            var data = \"\";
                            var bytes = new Uint8Array(e.target.result);
                            for (var i = 0; i < bytes.byteLength; i++) {
                                data += String.fromCharCode(bytes[i]);
                            }
                            GetTableFromExcel(data);
                        };
                        reader.readAsArrayBuffer(fileUpload.files[0]);
                    }
                } else {
                    alert(\"This browser does not support HTML5.\");
                }
            } else {
                alert(\"Please upload a valid Excel file.\");
            }
        });
        function GetTableFromExcel(data) {
            //Read the Excel File data in binary
            var workbook = XLSX.read(data, {
                type: 'binary'
            });
     
            //get the name of First Sheet.
            var Sheet = workbook.SheetNames[0];
            //Read all rows from First Sheet into an JSON array.
            var excelRows = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[Sheet]);
            
            //Add the data rows from Excel file.
            for (var i = 0; i < excelRows.length; i++) {
                var existFlag = false;
                var firstName = excelRows[i].firstName;
                var lastName = excelRows[i].lastName;
                var email = excelRows[i].email;
                var phoneNumber = excelRows[i].phoneNumber;
                \$(\".main-table tr:gt(0)\").each(function () {
                    var this_row = \$(this);
                    var cur_firstName = \$.trim(this_row.find('td:eq(1)').html());
                    var cur_lastName = \$.trim(this_row.find('td:eq(2)').html());
                    var cur_phoneNumber = \$.trim(this_row.find('td:eq(4)').html());
                    var cur_email = \$.trim(this_row.find('td:eq(3)').html());//td:eq(0) means first td of this row
                    if(cur_email == email){
                        existFlag = true;
                        if(firstName == cur_firstName && lastName == cur_lastName && phoneNumber == cur_phoneNumber)
                            return false;
                        \$.ajax({
                            url:'";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_update_byemail");
        echo "',
                            type: \"POST\",
                            data: {
                                \"firstName\": firstName,
                                \"lastName\": lastName,
                                \"email\": email,
                                \"phoneNumber\": phoneNumber
                            },
                            async: true,
                            success: function (data)
                            {
                            }
                        });
                        
                    }
                });
                if(existFlag == false){
                    \$.ajax({
                        url:'";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_create_byemail");
        echo "',
                        type: \"POST\",
                        data: {
                            \"firstName\": firstName,
                            \"lastName\": lastName,
                            \"email\": email,
                            \"phoneNumber\": phoneNumber
                        },
                        async: true,
                        success: function (data)
                        {
                        }
                    });
                }
            }
            location.reload();
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "customer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 144,  254 => 126,  186 => 61,  177 => 54,  168 => 51,  164 => 50,  160 => 49,  156 => 48,  152 => 47,  148 => 46,  143 => 45,  141 => 44,  138 => 43,  133 => 42,  131 => 41,  103 => 16,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CustomerController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<link rel=\"stylesheet\" href=\"{{asset('table/css/style.css')}}\">

<section class=\"ftco-section\">
        <div class=\"container\">
            <h1>This is Customer page.</h1>
            <div class=\"row\">
                <a href=\"{{path('customer_create_view')}}\" class=\"col-md-2\"><button type=\"button\" class=\"btn btn-success mb-3\">Create</button></a>
                <div class=\"col-md-10 row\">
                    <div class=\"col-md-10\">
                        <input class=\"form-control\" type=\"file\" accept=\".xls, .xlsx\" id=\"excelFile\" name=\"excelFile\" multiple enctype=\"multipart/form-data\" />
                    </div>
                    <button type=\"submit\" class=\"btn btn-info mb-3 col-md-2 upload-btn\">Upload</button>
                </div>
            </div>
            <div id=\"ExcelTable\"></div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"table-wrap\">
                        <table class=\"table table-bordered table-dark table-hover main-table\">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Email</th>
                              <th>Phone Number</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            {% set myVal = 0 %}
                            {% for customer in customers %}
                                <tr>
                                    {%set myVal = myVal + 1 %}
                                    <td>{{myVal}}</td>
                                    <td>{{customer.firstName}}</td>
                                    <td>{{customer.lastName}}</td>
                                    <td>{{customer.email}}</td>
                                    <td>{{customer.phoneNumber}}</td>
                                    <td><a href=\"{{path('customer_show', {'id': customer.id })}}\"><button type=\"button\" class=\"btn btn-success\">Edit</button></a></td>
                                    <td><a href=\"{{path('customer_delete', {'id': customer.id })}}\"><button type=\"button\" class=\"btn btn-danger delete-btn\" >Delete</button></a></td>
                                </tr>
                            {% endfor %}
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src=\"{{asset('assets/jQuery-v3.5.1.js')}}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/xlsx.js\"></script>
    <script>
        \$(\".upload-btn\").on(\"click\", function(e){
            var fileUpload = document.getElementById(\"excelFile\");            
            var regex = /^([a-zA-Z0-9\\s_\\\\.\\-:])+(.xls|.xlsx)\$/;
            if (regex.test(fileUpload.value.toLowerCase())) {
                if (typeof (FileReader) != \"undefined\") {
                    var reader = new FileReader();

                    //For Browsers other than IE.
                    if (reader.readAsBinaryString) {
                        reader.onload = function (e) {
                            GetTableFromExcel(e.target.result);
                        };
                        reader.readAsBinaryString(fileUpload.files[0]);
                    } else {
                        //For IE Browser.
                        reader.onload = function (e) {
                            var data = \"\";
                            var bytes = new Uint8Array(e.target.result);
                            for (var i = 0; i < bytes.byteLength; i++) {
                                data += String.fromCharCode(bytes[i]);
                            }
                            GetTableFromExcel(data);
                        };
                        reader.readAsArrayBuffer(fileUpload.files[0]);
                    }
                } else {
                    alert(\"This browser does not support HTML5.\");
                }
            } else {
                alert(\"Please upload a valid Excel file.\");
            }
        });
        function GetTableFromExcel(data) {
            //Read the Excel File data in binary
            var workbook = XLSX.read(data, {
                type: 'binary'
            });
     
            //get the name of First Sheet.
            var Sheet = workbook.SheetNames[0];
            //Read all rows from First Sheet into an JSON array.
            var excelRows = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[Sheet]);
            
            //Add the data rows from Excel file.
            for (var i = 0; i < excelRows.length; i++) {
                var existFlag = false;
                var firstName = excelRows[i].firstName;
                var lastName = excelRows[i].lastName;
                var email = excelRows[i].email;
                var phoneNumber = excelRows[i].phoneNumber;
                \$(\".main-table tr:gt(0)\").each(function () {
                    var this_row = \$(this);
                    var cur_firstName = \$.trim(this_row.find('td:eq(1)').html());
                    var cur_lastName = \$.trim(this_row.find('td:eq(2)').html());
                    var cur_phoneNumber = \$.trim(this_row.find('td:eq(4)').html());
                    var cur_email = \$.trim(this_row.find('td:eq(3)').html());//td:eq(0) means first td of this row
                    if(cur_email == email){
                        existFlag = true;
                        if(firstName == cur_firstName && lastName == cur_lastName && phoneNumber == cur_phoneNumber)
                            return false;
                        \$.ajax({
                            url:'{{ (path('customer_update_byemail')) }}',
                            type: \"POST\",
                            data: {
                                \"firstName\": firstName,
                                \"lastName\": lastName,
                                \"email\": email,
                                \"phoneNumber\": phoneNumber
                            },
                            async: true,
                            success: function (data)
                            {
                            }
                        });
                        
                    }
                });
                if(existFlag == false){
                    \$.ajax({
                        url:'{{ (path('customer_create_byemail')) }}',
                        type: \"POST\",
                        data: {
                            \"firstName\": firstName,
                            \"lastName\": lastName,
                            \"email\": email,
                            \"phoneNumber\": phoneNumber
                        },
                        async: true,
                        success: function (data)
                        {
                        }
                    });
                }
            }
            location.reload();
        }
    </script>
{% endblock %}
", "customer/index.html.twig", "E:\\development\\symfony\\Miguel\\miguel-symfony-website\\templates\\customer\\index.html.twig");
    }
}
