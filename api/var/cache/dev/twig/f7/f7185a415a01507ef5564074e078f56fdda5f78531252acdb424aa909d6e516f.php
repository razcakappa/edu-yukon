<?php

/* EDUBundle:users:layout_all_users.html.twig */
class __TwigTemplate_b33e3d270f897009b5a75e9cf8ffbb8e2a60345cedc5633a6c5b9abad4ff29ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:users:layout_all_users.html.twig", 1);
        $this->blocks = array(
            'cmi_body' => array($this, 'block_cmi_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EDUBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_023d1d6fa1382a646c91a53dfa5ab42bd4c85b921c5e28b00aeac488f0396c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023d1d6fa1382a646c91a53dfa5ab42bd4c85b921c5e28b00aeac488f0396c76->enter($__internal_023d1d6fa1382a646c91a53dfa5ab42bd4c85b921c5e28b00aeac488f0396c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:users:layout_all_users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_023d1d6fa1382a646c91a53dfa5ab42bd4c85b921c5e28b00aeac488f0396c76->leave($__internal_023d1d6fa1382a646c91a53dfa5ab42bd4c85b921c5e28b00aeac488f0396c76_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_005e1df1654ebc01b6214619787870b85b27b014e3ed87829c93d9636ea561f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005e1df1654ebc01b6214619787870b85b27b014e3ed87829c93d9636ea561f6->enter($__internal_005e1df1654ebc01b6214619787870b85b27b014e3ed87829c93d9636ea561f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo "/user/add\" class=\"btn btn-success btn-xs\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add New User"), "html", null, true);
        echo "</a>
            <br /><br />
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <thead>
                            <tr role=\"row\">
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
        echo "</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone Number"), "html", null, true);
        echo "</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "                            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "enabled", array())) {
                // line 22
                echo "                                ";
                if (((null === twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "updated", array())) ||  !twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "updated", array()))) {
                    // line 23
                    echo "                                    <tr class=\"gradeA odd\" role=\"row\">
                                        <td>
                                            ";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
                    echo "
                                        </td>
                                        <td>
                                            ";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
                    echo "
                                        </td>
                                        <td>
                                           ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "phoneNumber", array()), "html", null, true);
                    echo "  
                                        </td>
                                        <td>
                                            
                                            <input type=\"buton\" class=\"btn btn-xs btn-primary\" style=\"width:69px;\" value=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View"), "html", null, true);
                    echo "\"  onclick=\"detail(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                    echo ")\">
                                            </input>  
                                            
                                            
                                            <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 39, $this->getSourceContext()); })()), "html", null, true);
                    echo "/user/edit/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-xs btn-default\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo "</a>
                                            <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
                    echo "/user/delete/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-xs btn-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                    echo "</a>
                                        </td>
                                    </tr>
                                ";
                } else {
                    // line 44
                    echo "                                    <tr class=\"gradeA odd\" role=\"row\">
                                        <td>
                                            <b>";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
                    echo "</b>
                                        </td>
                                        <td>
                                            <b>";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
                    echo "</b>
                                        </td>
                                        <td>
                                            <b>";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "phoneNumber", array()), "html", null, true);
                    echo "</b>
                                        </td>
                                        <td>
                                           
                                              <input type=\"buton\" class=\"btn btn-xs btn-primary\" style=\"width:69px;\" value=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View"), "html", null, true);
                    echo "\"  onclick=\"detail(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                    echo ")\">
                                             </input>  
                                            
                                            
                                            <a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 60, $this->getSourceContext()); })()), "html", null, true);
                    echo "/user/edit/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-xs btn-default\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo "</a>
                                            <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 61, $this->getSourceContext()); })()), "html", null, true);
                    echo "/user/delete/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-xs btn-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                    echo "</a>
                                        </td>
                                    </tr>
                                ";
                }
                // line 65
                echo "                            ";
            }
            // line 66
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!--moodle-->


  ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 76, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 77
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "enabled", array())) {
                // line 78
                echo "    ";
                if (((null === twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "updated", array())) ||  !twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "updated", array()))) {
                    echo "   
    
    
    <div class=\"container\">
  <!-- Modal -->
  <div class=\"modal fade\" id=\"detail_";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                    echo "\" role=\"dialog\" tabindex=\"-1\">
    
  
    <div class=\"modal-dialog\" role=\"document\">
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;
          </button>
          <h4 class=\"modal-title\"><b>";
                    // line 92
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user-all-popup-heading"), "html", null, true);
                    echo "</b>
          </h4>
        </div>
        <div class=\"modal-body\">
          <!--<a href=\"";
                    // line 96
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_teachers");
                    echo "\" class=\"btn btn-sm btn-primary\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go Back"), "html", null, true);
                    echo "
          </a>-->
           <a href=\"";
                    // line 98
                    echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 98, $this->getSourceContext()); })()), "html", null, true);
                    echo "/user/edit/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-default\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
                    echo " </a>
          </a>
          <br/>
          <br/>
          <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
             <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <tbody>
                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    ";
                    // line 107
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Username"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
                    echo " 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                    // line 115
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Name"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 118
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
                    echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Email"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 126
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
                    echo "
                                </td>
                            </tr>
                            <!-- new-->
                            <tr>
                                <td>
                                    ";
                    // line 132
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Role"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                
                                ";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getRoles", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 137
                        echo "                                      
                   
                                        ";
                        // line 139
                        if (($context["user"] == "ROLE_ADMIN")) {
                            // line 140
                            echo "                                               <span> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_admin"), "html", null, true);
                            echo "</span></br>
                                        ";
                        }
                        // line 142
                        echo "                                        ";
                        if (($context["user"] == "ROLE_PARENT")) {
                            // line 143
                            echo "                                               <span> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_parent"), "html", null, true);
                            echo "</span></br>
                                        ";
                        }
                        // line 145
                        echo "                                        ";
                        if (($context["user"] == "ROLE_TEACHER")) {
                            // line 146
                            echo "                                               <span> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_teacher"), "html", null, true);
                            echo "</span></br>
                                        ";
                        }
                        // line 148
                        echo "                                        ";
                        if (($context["user"] == "ROLE_STUDENT")) {
                            // line 149
                            echo "                                               <span> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_student"), "html", null, true);
                            echo "</span></br>
                                        ";
                        }
                        // line 151
                        echo "                                     
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 153
                    echo "                                      
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                    // line 158
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Language"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 161
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "locale", array()) == "fr")) {
                        // line 162
                        echo "                                        <span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_france"), "html", null, true);
                        echo "</span>
                                    ";
                    }
                    // line 164
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "locale", array()) == "nl")) {
                        // line 165
                        echo "                                        <span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_netherland"), "html", null, true);
                        echo "</span>
                                    ";
                    }
                    // line 167
                    echo "                                     ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "locale", array()) == "en")) {
                        // line 168
                        echo "                                        <span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_english"), "html", null, true);
                        echo "</span>
                                    ";
                    }
                    // line 170
                    echo "                                    
                                    
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    ";
                    // line 176
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Address"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 179
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "contact", array()), "address", array()), "html", null, true);
                    echo "
                                </td>
                            </tr>
                              <tr>
                                <td>
                                    ";
                    // line 184
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Postcode"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 187
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "contact", array()), "postCode", array()), "html", null, true);
                    echo "
                                </td>
                            </tr>
                              
                                <tr>
                                <td>
                                    ";
                    // line 193
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-conatct_number"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 196
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "contact", array()), "contactNumber", array()), "html", null, true);
                    echo "
                                </td>
                            </tr>
                        
                            <!--  -->
                            <tr>
                                <td>
                                    ";
                    // line 203
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-phoneNumber"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 206
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "phoneNumber", array()), "html", null, true);
                    echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                    // line 211
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-lastLogin"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 214
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastlogin", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "
                                </td>
                            </tr>
                        </tbody>
                    </table>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
    ";
                } else {
                    // line 229
                    echo "         <div class=\"container\">
  <!-- Modal -->
  <div class=\"modal fade\" id=\"detail_";
                    // line 231
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                    echo "\" role=\"dialog\" tabindex=\"-1\">
    
  
    <div class=\"modal-dialog\" role=\"document\">
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;
          </button>
          <h4 class=\"modal-title\"><b>";
                    // line 240
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user-all-popup-heading"), "html", null, true);
                    echo "</b>
          </h4>
        </div>
        <div class=\"modal-body\">
          <!--<a href=\"";
                    // line 244
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_teachers");
                    echo "\" class=\"btn btn-sm btn-primary\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go Back"), "html", null, true);
                    echo "
          </a>-->
           <a href=\"";
                    // line 246
                    echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 246, $this->getSourceContext()); })()), "html", null, true);
                    echo "/user/edit/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-default\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
                    echo " </a>
          </a>
          <br/>
          <br/>
          <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
             <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <tbody>
                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    ";
                    // line 255
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Username"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 258
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
                    echo " 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                    // line 263
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Name"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 266
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
                    echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                    // line 271
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Email"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 274
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
                    echo "
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    ";
                    // line 279
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Role"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                   ";
                    // line 282
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getRoles", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 283
                        echo "                                      
                                        ";
                        // line 284
                        if (($context["user"] == "ROLE_ADMIN")) {
                            // line 285
                            echo "                                               <span> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_admin"), "html", null, true);
                            echo "</span></br>
                                        ";
                        }
                        // line 287
                        echo "                                        ";
                        if (($context["user"] == "ROLE_PARENT")) {
                            // line 288
                            echo "                                               <span> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_parent"), "html", null, true);
                            echo "</span></br>
                                        ";
                        }
                        // line 290
                        echo "                                        ";
                        if (($context["user"] == "ROLE_TEACHER")) {
                            echo "          
                                               <span> ";
                            // line 291
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_teacher"), "html", null, true);
                            echo "</span></br>
                                        ";
                        }
                        // line 293
                        echo "                                        ";
                        if (($context["user"] == "ROLE_STUDENT")) {
                            echo "          
                                               <span> ";
                            // line 294
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_student"), "html", null, true);
                            echo "</span></br>
                                        ";
                        }
                        // line 296
                        echo "                                   
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 298
                    echo "                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                    // line 302
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Language"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 305
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "locale", array()) == "fr")) {
                        // line 306
                        echo "                                        <span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_france"), "html", null, true);
                        echo "</span>
                                    ";
                    }
                    // line 308
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "locale", array()) == "nl")) {
                        // line 309
                        echo "                                        <span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_netherland"), "html", null, true);
                        echo "</span>
                                    ";
                    }
                    // line 311
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "locale", array()) == "en")) {
                        // line 312
                        echo "                                        <span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_english"), "html", null, true);
                        echo "</span>
                                    ";
                    }
                    // line 314
                    echo "                                    
                                    
                            
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    ";
                    // line 321
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Address"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 324
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "contact", array()), "address", array()), "html", null, true);
                    echo "
                                </td>
                            </tr>
                              <tr>
                                <td>
                                    ";
                    // line 329
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Postcode"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 332
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "contact", array()), "postCode", array()), "html", null, true);
                    echo "
                                </td>
                            </tr>
                              
                                <tr>
                                <td>
                                    ";
                    // line 338
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-conatct_number"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 341
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "contact", array()), "contactNumber", array()), "html", null, true);
                    echo "
                                </td>
                            </tr>
                                
                            <tr>
                                <td>
                                    ";
                    // line 347
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.phoneNumber"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 350
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "phoneNumber", array()), "html", null, true);
                    echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                    // line 355
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-lastLogin"), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 358
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastlogin", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "
                                </td>
                            </tr>
                        </tbody>
                    </table>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
   
";
                }
                // line 374
                echo " 
";
            }
            // line 376
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "  
    
";
        
        $__internal_005e1df1654ebc01b6214619787870b85b27b014e3ed87829c93d9636ea561f6->leave($__internal_005e1df1654ebc01b6214619787870b85b27b014e3ed87829c93d9636ea561f6_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:users:layout_all_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  793 => 377,  786 => 376,  782 => 374,  763 => 358,  757 => 355,  749 => 350,  743 => 347,  734 => 341,  728 => 338,  719 => 332,  713 => 329,  705 => 324,  699 => 321,  690 => 314,  684 => 312,  681 => 311,  675 => 309,  672 => 308,  666 => 306,  664 => 305,  658 => 302,  652 => 298,  645 => 296,  640 => 294,  635 => 293,  630 => 291,  625 => 290,  619 => 288,  616 => 287,  610 => 285,  608 => 284,  605 => 283,  601 => 282,  595 => 279,  587 => 274,  581 => 271,  571 => 266,  565 => 263,  557 => 258,  551 => 255,  533 => 246,  526 => 244,  519 => 240,  507 => 231,  503 => 229,  485 => 214,  479 => 211,  471 => 206,  465 => 203,  455 => 196,  449 => 193,  440 => 187,  434 => 184,  426 => 179,  420 => 176,  412 => 170,  406 => 168,  403 => 167,  397 => 165,  394 => 164,  388 => 162,  386 => 161,  380 => 158,  373 => 153,  366 => 151,  360 => 149,  357 => 148,  351 => 146,  348 => 145,  342 => 143,  339 => 142,  333 => 140,  331 => 139,  327 => 137,  323 => 136,  316 => 132,  307 => 126,  301 => 123,  291 => 118,  285 => 115,  277 => 110,  271 => 107,  253 => 98,  246 => 96,  239 => 92,  227 => 83,  218 => 78,  215 => 77,  211 => 76,  200 => 67,  194 => 66,  191 => 65,  180 => 61,  172 => 60,  163 => 56,  156 => 52,  150 => 49,  142 => 46,  138 => 44,  127 => 40,  119 => 39,  110 => 35,  103 => 31,  97 => 28,  89 => 25,  85 => 23,  82 => 22,  79 => 21,  75 => 20,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}

{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <a href=\"{{ base_url}}/user/add\" class=\"btn btn-success btn-xs\">{{ 'Add New User'|trans }}</a>
            <br /><br />
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <thead>
                            <tr role=\"row\">
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Name'|trans }}</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Email'|trans }}</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Phone Number'|trans }}</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Actions'|trans }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        {%  for user in users %}
                            {% if user.enabled %}
                                {% if user.updated is null or not user.updated %}
                                    <tr class=\"gradeA odd\" role=\"row\">
                                        <td>
                                            {{ user.firstname }} {{ user.lastname }}
                                        </td>
                                        <td>
                                            {{ user.email }}
                                        </td>
                                        <td>
                                           {{ user.phoneNumber }}  
                                        </td>
                                        <td>
                                            
                                            <input type=\"buton\" class=\"btn btn-xs btn-primary\" style=\"width:69px;\" value=\"{{ 'View'|trans }}\"  onclick=\"detail({{ user.id }})\">
                                            </input>  
                                            
                                            
                                            <a href=\"{{ base_url }}/user/edit/{{ user.id }}\" class=\"btn btn-xs btn-default\">{{ 'Edit'|trans }}</a>
                                            <a href=\"{{ base_url }}/user/delete/{{ user.id }}\" class=\"btn btn-xs btn-danger\">{{ 'Delete'|trans }}</a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr class=\"gradeA odd\" role=\"row\">
                                        <td>
                                            <b>{{ user.firstname }} {{ user.lastname }}</b>
                                        </td>
                                        <td>
                                            <b>{{ user.email }}</b>
                                        </td>
                                        <td>
                                            <b>{{ user.phoneNumber }}</b>
                                        </td>
                                        <td>
                                           
                                              <input type=\"buton\" class=\"btn btn-xs btn-primary\" style=\"width:69px;\" value=\"{{ 'View'|trans }}\"  onclick=\"detail({{ user.id }})\">
                                             </input>  
                                            
                                            
                                            <a href=\"{{ base_url }}/user/edit/{{ user.id }}\" class=\"btn btn-xs btn-default\">{{ 'Edit'|trans }}</a>
                                            <a href=\"{{ base_url }}/user/delete/{{ user.id }}\" class=\"btn btn-xs btn-danger\">{{ 'Delete'|trans }}</a>
                                        </td>
                                    </tr>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!--moodle-->


  {%  for user in users %}
    {% if user.enabled %}
    {% if user.updated is null or not user.updated %}   
    
    
    <div class=\"container\">
  <!-- Modal -->
  <div class=\"modal fade\" id=\"detail_{{ user.id }}\" role=\"dialog\" tabindex=\"-1\">
    
  
    <div class=\"modal-dialog\" role=\"document\">
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;
          </button>
          <h4 class=\"modal-title\"><b>{{ 'user-all-popup-heading'|trans }}</b>
          </h4>
        </div>
        <div class=\"modal-body\">
          <!--<a href=\"{{ path('user_teachers') }}\" class=\"btn btn-sm btn-primary\">{{ 'Go Back'|trans }}
          </a>-->
           <a href=\"{{base_url}}/user/edit/{{ user.id }}\" class=\"btn btn-sm btn-default\">{{ 'Edit'|trans }} {{ user.username }} </a>
          </a>
          <br/>
          <br/>
          <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
             <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <tbody>
                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    {{ 'allUser-Username'|trans }}
                                </td>
                                <td>
                                    {{ user.username }} 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'allUser-Name'|trans }}
                                </td>
                                <td>
                                    {{ user.firstname }} {{ user.lastname }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'allUser-Email'|trans }}
                                </td>
                                <td>
                                    {{ user.email }}
                                </td>
                            </tr>
                            <!-- new-->
                            <tr>
                                <td>
                                    {{ 'allUser-Role'|trans }}
                                </td>
                                <td>
                                
                                {% for user in user.getRoles() %}
                                      
                   
                                        {% if user =='ROLE_ADMIN' %}
                                               <span> {{ 'user_admin'|trans }}</span></br>
                                        {% endif %}
                                        {% if user =='ROLE_PARENT' %}
                                               <span> {{ 'user_parent'|trans }}</span></br>
                                        {% endif %}
                                        {% if user =='ROLE_TEACHER' %}
                                               <span> {{ 'user_teacher'|trans }}</span></br>
                                        {% endif %}
                                        {% if user =='ROLE_STUDENT' %}
                                               <span> {{ 'user_student'|trans }}</span></br>
                                        {% endif %}
                                     
                                {% endfor %}
                                      
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'allUser-Language'|trans }}
                                </td>
                                <td>
                                    {% if user.locale =='fr' %}
                                        <span> {{ 'user_language_france'|trans }}</span>
                                    {% endif %}
                                    {% if user.locale =='nl' %}
                                        <span> {{ 'user_language_netherland'|trans }}</span>
                                    {% endif %}
                                     {% if user.locale =='en' %}
                                        <span> {{ 'user_language_english'|trans }}</span>
                                    {% endif %}
                                    
                                    
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    {{ 'allUser-Address'|trans }}
                                </td>
                                <td>
                                    {{ user.contact.address }}
                                </td>
                            </tr>
                              <tr>
                                <td>
                                    {{ 'allUser-Postcode'|trans }}
                                </td>
                                <td>
                                    {{ user.contact.postCode }}
                                </td>
                            </tr>
                              
                                <tr>
                                <td>
                                    {{ 'allUser-conatct_number'|trans }}
                                </td>
                                <td>
                                    {{ user.contact.contactNumber }}
                                </td>
                            </tr>
                        
                            <!--  -->
                            <tr>
                                <td>
                                    {{ 'allUser-phoneNumber'|trans }}
                                </td>
                                <td>
                                    {{ user.phoneNumber }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'allUser-lastLogin'|trans }}
                                </td>
                                <td>
                                    {{ user.lastlogin|date('Y-m-d H:i:s') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
    {% else %}
         <div class=\"container\">
  <!-- Modal -->
  <div class=\"modal fade\" id=\"detail_{{ user.id }}\" role=\"dialog\" tabindex=\"-1\">
    
  
    <div class=\"modal-dialog\" role=\"document\">
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;
          </button>
          <h4 class=\"modal-title\"><b>{{ 'user-all-popup-heading'|trans }}</b>
          </h4>
        </div>
        <div class=\"modal-body\">
          <!--<a href=\"{{ path('user_teachers') }}\" class=\"btn btn-sm btn-primary\">{{ 'Go Back'|trans }}
          </a>-->
           <a href=\"{{base_url}}/user/edit/{{ user.id }}\" class=\"btn btn-sm btn-default\">{{ 'Edit'|trans }} {{ user.username }} </a>
          </a>
          <br/>
          <br/>
          <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
             <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <tbody>
                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    {{ 'allUser-Username'|trans }}
                                </td>
                                <td>
                                    {{ user.username }} 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'allUser-Name'|trans }}
                                </td>
                                <td>
                                    {{ user.firstname }} {{ user.lastname }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'allUser-Email'|trans }}
                                </td>
                                <td>
                                    {{ user.email }}
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    {{ 'allUser-Role'|trans }}
                                </td>
                                <td>
                                   {% for user in user.getRoles() %}
                                      
                                        {% if user =='ROLE_ADMIN' %}
                                               <span> {{ 'user_admin'|trans }}</span></br>
                                        {% endif %}
                                        {% if user =='ROLE_PARENT' %}
                                               <span> {{ 'user_parent'|trans }}</span></br>
                                        {% endif %}
                                        {% if user =='ROLE_TEACHER' %}          
                                               <span> {{ 'user_teacher'|trans }}</span></br>
                                        {% endif %}
                                        {% if user =='ROLE_STUDENT' %}          
                                               <span> {{ 'user_student'|trans }}</span></br>
                                        {% endif %}
                                   
                                {% endfor %}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'allUser-Language'|trans }}
                                </td>
                                <td>
                                    {% if user.locale =='fr' %}
                                        <span> {{ 'user_language_france'|trans }}</span>
                                    {% endif %}
                                    {% if user.locale =='nl' %}
                                        <span> {{ 'user_language_netherland'|trans }}</span>
                                    {% endif %}
                                    {% if user.locale =='en' %}
                                        <span> {{ 'user_language_english'|trans }}</span>
                                    {% endif %}
                                    
                                    
                            
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    {{ 'allUser-Address'|trans }}
                                </td>
                                <td>
                                    {{ user.contact.address }}
                                </td>
                            </tr>
                              <tr>
                                <td>
                                    {{ 'allUser-Postcode'|trans }}
                                </td>
                                <td>
                                    {{ user.contact.postCode }}
                                </td>
                            </tr>
                              
                                <tr>
                                <td>
                                    {{ 'allUser-conatct_number'|trans }}
                                </td>
                                <td>
                                    {{ user.contact.contactNumber }}
                                </td>
                            </tr>
                                
                            <tr>
                                <td>
                                    {{ 'user.phoneNumber'|trans }}
                                </td>
                                <td>
                                    {{ user.phoneNumber }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'allUser-lastLogin'|trans }}
                                </td>
                                <td>
                                    {{ user.lastlogin|date('Y-m-d H:i:s') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
   
{% endif %}
 
{% endif %}

    {% endfor %}  
    
{% endblock %}
", "EDUBundle:users:layout_all_users.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/users/layout_all_users.html.twig");
    }
}
