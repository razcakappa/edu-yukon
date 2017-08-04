<?php

/* EDUBundle:users:layout_all_users.html.twig */
class __TwigTemplate_2828fe8141e0df43275f0bfc4e2f7435ee48946da0b0884675241cd21e074e9a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                    echo "/user/edit/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-xs btn-default\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo "</a>
                                            <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                    echo "/user/edit/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-xs btn-default\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo "</a>
                                            <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
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
        return array (  784 => 377,  777 => 376,  773 => 374,  754 => 358,  748 => 355,  740 => 350,  734 => 347,  725 => 341,  719 => 338,  710 => 332,  704 => 329,  696 => 324,  690 => 321,  681 => 314,  675 => 312,  672 => 311,  666 => 309,  663 => 308,  657 => 306,  655 => 305,  649 => 302,  643 => 298,  636 => 296,  631 => 294,  626 => 293,  621 => 291,  616 => 290,  610 => 288,  607 => 287,  601 => 285,  599 => 284,  596 => 283,  592 => 282,  586 => 279,  578 => 274,  572 => 271,  562 => 266,  556 => 263,  548 => 258,  542 => 255,  524 => 246,  517 => 244,  510 => 240,  498 => 231,  494 => 229,  476 => 214,  470 => 211,  462 => 206,  456 => 203,  446 => 196,  440 => 193,  431 => 187,  425 => 184,  417 => 179,  411 => 176,  403 => 170,  397 => 168,  394 => 167,  388 => 165,  385 => 164,  379 => 162,  377 => 161,  371 => 158,  364 => 153,  357 => 151,  351 => 149,  348 => 148,  342 => 146,  339 => 145,  333 => 143,  330 => 142,  324 => 140,  322 => 139,  318 => 137,  314 => 136,  307 => 132,  298 => 126,  292 => 123,  282 => 118,  276 => 115,  268 => 110,  262 => 107,  244 => 98,  237 => 96,  230 => 92,  218 => 83,  209 => 78,  206 => 77,  202 => 76,  191 => 67,  185 => 66,  182 => 65,  171 => 61,  163 => 60,  154 => 56,  147 => 52,  141 => 49,  133 => 46,  129 => 44,  118 => 40,  110 => 39,  101 => 35,  94 => 31,  88 => 28,  80 => 25,  76 => 23,  73 => 22,  70 => 21,  66 => 20,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:users:layout_all_users.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/users/layout_all_users.html.twig");
    }
}
