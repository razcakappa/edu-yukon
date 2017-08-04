<?php

/* EDUBundle:Includes:menu.html.twig */
class __TwigTemplate_b3643c89d3d3ab149ec97e83d0f30d5d4f61c79cee1e65e38c019309defe9137 extends Twig_Template
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
        $__internal_3d35491ee9fbad1efa4a103c64eefb22040c3100c99fd00128bd307e87449ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d35491ee9fbad1efa4a103c64eefb22040c3100c99fd00128bd307e87449ae1->enter($__internal_3d35491ee9fbad1efa4a103c64eefb22040c3100c99fd00128bd307e87449ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Includes:menu.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
            <img  style=\"float:left;\" src=\"/api/web/assets/images/logo.png\" width=\"55\">
        </a>
    </div>
    <!-- /.navbar-header -->
    <!--WORKING LANG-->
    <!--ul class=\"lang-menu\" style=\"list-style-type: none; font-size: 11px;display:block; position: absolute; right: 25px; top: 0; z-index: 9999;\">
        <li style=\"float: left; margin: 10px 5px\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
        echo "/lang?_locale=fr\" style=\"display: block\">
            ";
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "request", array()), "getLocale", array(), "method") == "fr")) {
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
        echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
        echo "/lang?_locale=nl\" style=\"display: block\">
            ";
        // line 26
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "request", array()), "getLocale", array(), "method") == "nl")) {
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
        echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 33, $this->getSourceContext()); })()), "html", null, true);
        echo "/lang?_locale=en\" style=\"display: block\">
            ";
        // line 34
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->getSourceContext()); })()), "request", array()), "getLocale", array(), "method") == "en")) {
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
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 58, $this->getSourceContext()); })()), "html", null, true);
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
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 64, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
                                ";
            }
            // line 66
            echo "                            </a>
                        </li>
                        <li> 
                            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 69, $this->getSourceContext()); })()), "html", null, true);
            echo "/user/teachers\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Teachers"), "html", null, true);
            echo "</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 72, $this->getSourceContext()); })()), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 82, $this->getSourceContext()); })()), "html", null, true);
            echo "/class/add\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New Class"), "html", null, true);
            echo "</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 85, $this->getSourceContext()); })()), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 95, $this->getSourceContext()); })()), "html", null, true);
            echo "/subject/add\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add Suject"), "html", null, true);
            echo "</a>
                        </li>
                        <li>
                            <a class=\"sub-menu\" href=\"";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 98, $this->getSourceContext()); })()), "html", null, true);
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
        
        $__internal_3d35491ee9fbad1efa4a103c64eefb22040c3100c99fd00128bd307e87449ae1->leave($__internal_3d35491ee9fbad1efa4a103c64eefb22040c3100c99fd00128bd307e87449ae1_prof);

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
        return array (  238 => 108,  233 => 105,  231 => 104,  220 => 98,  212 => 95,  206 => 92,  194 => 85,  186 => 82,  180 => 79,  168 => 72,  160 => 69,  155 => 66,  149 => 64,  147 => 63,  141 => 62,  132 => 58,  122 => 51,  117 => 48,  115 => 47,  105 => 39,  99 => 37,  93 => 35,  91 => 34,  87 => 33,  83 => 31,  77 => 29,  71 => 27,  69 => 26,  65 => 25,  61 => 23,  55 => 21,  49 => 19,  47 => 18,  43 => 17,  33 => 10,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"{{ base_url }}\">
            <img  style=\"float:left;\" src=\"/api/web/assets/images/logo.png\" width=\"55\">
        </a>
    </div>
    <!-- /.navbar-header -->
    <!--WORKING LANG-->
    <!--ul class=\"lang-menu\" style=\"list-style-type: none; font-size: 11px;display:block; position: absolute; right: 25px; top: 0; z-index: 9999;\">
        <li style=\"float: left; margin: 10px 5px\"><a href=\"{{ base_url}}/lang?_locale=fr\" style=\"display: block\">
            {% if app.request.getLocale() == 'fr' %}
                <b>{{ 'French'|trans }}</b>
            {% else %}
                {{ 'French'|trans }}
            {% endif %}
        </a></li>
        <li style=\"float: left; margin: 10px 0\"><a>|</a></li>
        <li style=\"float: left; margin: 10px 5px\"><a href=\"{{ base_url}}/lang?_locale=nl\" style=\"display: block\">
            {% if app.request.getLocale() == 'nl' %}
                <b> {{ 'Dutch'|trans }} </b>
            {% else %}
                {{ 'Dutch'|trans }}
            {% endif %}
        </a></li>
        <li style=\"float: left; margin: 10px 0\"><a>|</a></li>
        <li style=\"float: left; margin: 10px 5px\"><a href=\"{{ base_url}}/lang?_locale=en\" style=\"display: block\">
            {% if app.request.getLocale() == 'en' %}
                <b> {{ 'English'|trans }} </b>
            {% else %}
                {{ 'English'|trans }}
            {% endif %}
        </a></li>
    </ul-->
    
    <!-- /.navbar-top-links -->
    <div class=\"navbar-default sidebar\" role=\"navigation\">
        <div class=\"sidebar-nav navbar-collapse\" id=\"navigate\" >
            <!-- <ul class=\"navbar-brand\" id=\"side-menu\">-->
            <ul class=\"nav\" id=\"side-menu\">
            {% if is_granted('ROLE_ADMIN') %}
            <!--<ul class=\"navbar-brand\" id=\"side-menu\">-->
                <li>
                    <a href=\"#\">
                        <i class=\"fa fa-users\"></i> {{ 'Users'|trans }}
                    <span class=\"fa arrow\"  ></span>
                        
                    </a>
                    
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"{{ base_url }}/user/add\">{{ 'Add New User'|trans }}</a>
                        </li>
                        
                        <li>
                            <a href=\"{{ path('edu_users') }}?\">{{ 'All Users'|trans }}
                                {% if count is defined %}
                                    &nbsp;<span class=\"badge\" style=\"background-color:#337ab7 !important\">{{ count }}</span>
                                {% endif %}
                            </a>
                        </li>
                        <li> 
                            <a href=\"{{ base_url }}/user/teachers\">{{ 'Teachers'|trans }}</a>
                        </li>
                        <li>
                            <a href=\"{{ base_url }}/user/students\">{{ 'Students'|trans }}</a>
                        </li>
                    </ul>
                </li>
                
               
                <li>
                    <a href=\"#\"><i class=\"fa fa-university\"></i> {{ 'Classes'|trans }}<span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"{{ base_url}}/class/add\">{{ 'New Class'|trans }}</a>
                        </li>
                        <li>
                            <a href=\"{{ base_url}}/class/all\">{{ 'All Classes'|trans }}</a>
                        </li>
                    </ul>
                    
                </li>
                 
                <li >
                    <a href=\"#\"><i class=\"fa fa-folder-open\"></i> {{ 'Sujects'|trans }} <span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a class=\"sub-menu\" href=\"{{ base_url}}/subject/add\">{{ 'Add Suject'|trans }}</a>
                        </li>
                        <li>
                            <a class=\"sub-menu\" href=\"{{ base_url}}/subject/all\">{{ 'All Subjects'|trans }}</a>
                        </li>
                    </ul>
                   
                </li>
                <!--li>
                    <a href=\"javascript:void(0)\" onclick=\"\$('#warningModal').modal('show');\"><i class=\"fa fa-file-text-o fa-fw\"></i> {{
'Translate-menu'|trans }}<span class=\"fa arrow\"></span></a>
                </li-->
            {% endif %}
            </ul>
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
", "EDUBundle:Includes:menu.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Includes/menu.html.twig");
    }
}
