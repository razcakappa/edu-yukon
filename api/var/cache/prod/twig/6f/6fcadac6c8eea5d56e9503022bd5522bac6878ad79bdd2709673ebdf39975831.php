<?php

/* EDUBundle:Includes:header.html.twig */
class __TwigTemplate_aea943afdd96126e6b9788e6ff3e590e48a71abf2d8bb89007821f14abd9555d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    
    <title>EDU Admin</title>
    
    <!-- Bootstrap Core CSS -->
    <link href=\"/api/web/assets/bower_components/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    
    <!--<link href=\"/api/web/assets/bower_components/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">-->
    
    <!-- MetisMenu CSS -->
    <link href=\"/api/web/assets/bower_components/metisMenu/dist/metisMenu.min.css\" rel=\"stylesheet\">
    
    <!--<link href=\"/api/web/assets/bower_components/metisMenu/dist/metisMenu.min.css\" rel=\"stylesheet\">-->
    
    
    ";
        // line 25
        if (array_key_exists("tables", $context)) {
            // line 26
            echo "    <!-- DataTables CSS -->
    <link href=\"/api/web/assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css\" rel=\"stylesheet\">
    <!--<link href=\"/api/web/assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css\" rel=\"stylesheet\">-->
    
    ";
        }
        // line 31
        echo "    
    <!-- Custom CSS -->
    <link href=\"/api/web/assets/css/sb-admin-2.css\" rel=\"stylesheet\">
    <!--<link href=\"/api/web/assets/css/sb-admin-2.css\" rel=\"stylesheet\">-->
    
    <!-- EDU CSS -->
    <!--<link href=\"/api/web/assets/css/edu.css\" rel=\"stylesheet\">-->
    <link href=\"/api/web/assets/css/edu.css\" rel=\"stylesheet\">
    
    ";
        // line 40
        if (array_key_exists("charts", $context)) {
            // line 41
            echo "    <!-- Morris Charts CSS -->
    <!--<link href=\"/api/web/assets/bower_components/morrisjs/morris.css\" rel=\"stylesheet\">-->
    <link href=\"//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css\" rel=\"stylesheet\">
    
    ";
        }
        // line 46
        echo "    
    <!-- Custom Fonts -->
    <link href=\"/api/web/assets/bower_components/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <!--<link href=\"/api/web/assets/bower_components/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">-->
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    
    <!-- jQuery -->
    <script src=\"/api/web/assets/bower_components/jquery/dist/jquery.min.js\"></script>
    <!--<script src=\"/api/web/assets/bower_components/jquery/dist/jquery.min.js\"></script>-->
    
    <![endif]-->
    <script src=\"/api/web/assets/js/vendor/script.js\"></script> 
    <link href=\"/api/web/assets/css/vendor/file.css\" rel=\"stylesheet\" type=\"text/css\">
    <!--<script src=\"/api/web/assets/js/vendor/script.js\"></script> -->
    <!--<link href=\"/api/web/assets/css/vendor/file.css\" rel=\"stylesheet\" type=\"text/css\">-->
    
    <style type=\"text/css\">
        .modal-header {
          background-color: #2A7AB9;
        }
        .modal-content {
            border-radius: 25px;
        }
        
        .modal-body table{
         overflow: auto;
         }
        
        .navbar-default.sidebar{
            border-top: 1px solid #DDDDDD;
            margin-top: 88px;
        }
        .navbar-header{
            height: 100px !important;
        }
        
        .navbar-header a.navbar-brand{
            padding: 0;
        }
        
        .navbar-header a.navbar-brand img{
            height: auto;
            margin-left: 10px;
            width: 150px;
        }
    </style>
</head>

<body>
";
    }

    public function getTemplateName()
    {
        return "EDUBundle:Includes:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 46,  67 => 41,  65 => 40,  54 => 31,  47 => 26,  45 => 25,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:Includes:header.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Includes/header.html.twig");
    }
}
