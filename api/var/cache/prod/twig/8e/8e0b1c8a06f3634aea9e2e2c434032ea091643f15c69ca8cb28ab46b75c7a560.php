<?php

/* EDUBundle:Includes:menu.html.twig */
class __TwigTemplate_3afb5be378d648e231310cda8bc2c39d2cd5e35b82d63713d8af06ef06840ea3 extends Twig_Template
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
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\">
            <img  style=\"float:left;\" src=\"/api/web/assets/images/logo.png\" width=\"55\">
        </a>
    </div>
    <!-- /.navbar-header -->
    <!--WORKING LANG-->
    <!--ul class=\"lang-menu\" style=\"list-style-type: none; font-size: 11px;display:block; position: absolute; right: 25px; top: 0; z-index: 9999;\">
        <li style=\"float: left; margin: 10px 5px\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/lang?_locale=fr\" style=\"display: block\">
            ";
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getLocale", array(), "method") == "fr")) {
            // line 19
            echo "                <b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("French"), "html", null, true);
            echo "</b>
            ";
        } else {
            // line 21
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("French"), "html", null, true);
            echo "
            ";
        }
        // line 23
        echo "        </a></li>
        <li style=\"float: left; margin: 10px 0\"><a>|</a></li>
        <li style=\"float: left; margin: 10px 5px\"><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/lang?_locale=nl\" style=\"display: block\">
            ";
        // line 26
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getLocale", array(), "method") == "nl")) {
            // line 27
            echo "                <b> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dutch"), "html", null, true);
            echo " </b>
            ";
        } else {
            // line 29
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dutch"), "html", null, true);
            echo "
            ";
        }
        // line 31
        echo "        </a></li>
        <li style=\"float: left; margin: 10px 0\"><a>|</a></li>
        <li style=\"float: left; margin: 10px 5px\"><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/lang?_locale=en\" style=\"display: block\">
            ";
        // line 34
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getLocale", array(), "method") == "en")) {
            // line 35
            echo "                <b> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
            echo " </b>
            ";
        } else {
            // line 37
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
            echo "
            ";
        }
        // line 39
        echo "        </a></li>
    </ul-->
    
    <!-- /.navbar-top-links -->
    <div class=\"navbar-default sidebar\" role=\"navigation\">
        <div class=\"sidebar-nav navbar-collapse\" id=\"navigate\" >
            <!-- <ul class=\"navbar-brand\" id=\"side-menu\">-->
            <ul class=\"nav\" id=\"side-menu\">
            ";
        // line 47
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 48
            echo "            <!--<ul class=\"navbar-brand\" id=\"side-menu\">-->
                <li>
                    <a href=\"#\">
                        <i class=\"fa fa-users\"></i> ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users"), "html", null, true);
            echo "
                    <span class=\"fa arrow\"  ></span>
                        
                    </a>
                    
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/user/add\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add New User"), "html", null, true);
            echo "</a>
                        </li>
                        
                        <li>
                            <a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_users");
            echo "?\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Users"), "html", null, true);
            echo "
                                ";
            // line 63
            if (array_key_exists("count", $context)) {
                // line 64
                echo "                                    &nbsp;<span class=\"badge\" style=\"background-color:#337ab7 !important\">";
                echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
                echo "</span>
                                ";
            }
            // line 66
            echo "                            </a>
                        </li>
                        <li> 
                            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/user/teachers\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Teachers"), "html", null, true);
            echo "</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/user/students\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Students"), "html", null, true);
            echo "</a>
                        </li>
                    </ul>
                </li>
                
               
                <li>
                    <a href=\"#\"><i class=\"fa fa-university\"></i> ";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Classes"), "html", null, true);
            echo "<span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/class/add\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New Class"), "html", null, true);
            echo "</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/class/all\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Classes"), "html", null, true);
            echo "</a>
                        </li>
                    </ul>
                    
                </li>
                 
                <li >
                    <a href=\"#\"><i class=\"fa fa-folder-open\"></i> ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sujects"), "html", null, true);
            echo " <span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a class=\"sub-menu\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/subject/add\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add Suject"), "html", null, true);
            echo "</a>
                        </li>
                        <li>
                            <a class=\"sub-menu\" href=\"";
            // line 98
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/subject/all\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Subjects"), "html", null, true);
            echo "</a>
                        </li>
                    </ul>
                   
                </li>
                <!--li>
                    <a href=\"javascript:void(0)\" onclick=\"\$('#warningModal').modal('show');\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Translate-menu"), "html", null, true);
            // line 105
            echo "<span class=\"fa arrow\"></span></a>
                </li-->
            ";
        }
        // line 108
        echo "            </ul>
        </div>
        
        
    </div>
    
        <script>
            
            
            \$('ul#side-menu li').click(function(e){
             
               var uli = \$(this).find(\"ul\").attr(\"aria-expanded\");
                  // cheack click li element
                if(uli =='true'){
                    // cheack below li elemet active
                  
                    \$(this).addClass('active');
                }
                else{
                  
                    \$(this).removeClass('active');
                }
                
            
            });
            
          
            \$( document ).ready(function() {
              
            var path= window.location.pathname; 
            var result = path.split(\"/\");
            
            if(result[result.length-2]=='compose'){
            document.getElementById(\"compose_main\").className=\"nav nav-second-level collapse in\";                                      }
            
            
            });
            
        </script>
       
    <!-- /.navbar-static-side -->
";
    }

    public function getTemplateName()
    {
        return "EDUBundle:Includes:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 108,  230 => 105,  228 => 104,  217 => 98,  209 => 95,  203 => 92,  191 => 85,  183 => 82,  177 => 79,  165 => 72,  157 => 69,  152 => 66,  146 => 64,  144 => 63,  138 => 62,  129 => 58,  119 => 51,  114 => 48,  112 => 47,  102 => 39,  96 => 37,  90 => 35,  88 => 34,  84 => 33,  80 => 31,  74 => 29,  68 => 27,  66 => 26,  62 => 25,  58 => 23,  52 => 21,  46 => 19,  44 => 18,  40 => 17,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:Includes:menu.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Includes/menu.html.twig");
    }
}
