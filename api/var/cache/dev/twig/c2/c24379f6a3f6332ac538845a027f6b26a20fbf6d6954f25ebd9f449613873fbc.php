<?php

/* EDUBundle:users:layout_parents_users.html.twig */
class __TwigTemplate_3d5ac64269334a56c870f2b536bd265bb5d1859184dab9eb7433523cd72b1f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:users:layout_parents_users.html.twig", 1);
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
        $__internal_181a0a637c01008f7c9c2e6fb3d26adb807dc4b1e6a32f32e463488ebedd808c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181a0a637c01008f7c9c2e6fb3d26adb807dc4b1e6a32f32e463488ebedd808c->enter($__internal_181a0a637c01008f7c9c2e6fb3d26adb807dc4b1e6a32f32e463488ebedd808c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:users:layout_parents_users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_181a0a637c01008f7c9c2e6fb3d26adb807dc4b1e6a32f32e463488ebedd808c->leave($__internal_181a0a637c01008f7c9c2e6fb3d26adb807dc4b1e6a32f32e463488ebedd808c_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_cb445b48498e4ec6e8de85c015f2fe57e4d2b41ae53cc3869c90db44ba338504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb445b48498e4ec6e8de85c015f2fe57e4d2b41ae53cc3869c90db44ba338504->enter($__internal_cb445b48498e4ec6e8de85c015f2fe57e4d2b41ae53cc3869c90db44ba338504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <br /><br />
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <thead>
                            <tr role=\"row\">
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
        echo "</th>
                                <!--<th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "</th>-->
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone Number"), "html", null, true);
        echo "</th>
                                <!--<th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >Edit</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >Delete</th>-->
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 22, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "                            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "enabled", array())) {
                // line 24
                echo "                                <tr class=\"gradeA odd\" role=\"row\">
                                    <td>
                                        ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
                echo "
                                    </td>
                                    <!--<td>-->
                                    <!--    ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
                echo "-->
                                    <!--</td>-->
                                    <td>
                                        ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "phoneNumber", array()), "html", null, true);
                echo "  
                                     </td>
                                    <td>
                                        <!--
                                        <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 39, $this->getSourceContext()); })()), "html", null, true);
                echo "/parent/info/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View"), "html", null, true);
                echo "</a>
                                    -->
                                        
                                     <input type=\"buton\" class=\"btn btn-xs btn-primary\" style=\"width:69px;\" value=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View"), "html", null, true);
                echo "\"  onclick=\"detail(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                echo ")\">
                                        
                                        
                                        
                                        <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 46, $this->getSourceContext()); })()), "html", null, true);
                echo "/user/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a>
                                        <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 47, $this->getSourceContext()); })()), "html", null, true);
                echo "/user/delete/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                echo "</a>
                                    </td>
                                </tr>
                            ";
            }
            // line 51
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
     ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user_var"]) || array_key_exists("user_var", $context) ? $context["user_var"] : (function () { throw new Twig_Error_Runtime('Variable "user_var" does not exist.', 58, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 59
            echo "        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "enabled", array())) {
                // line 60
                echo "                                
    <div class=\"container\">
  <!-- Modal -->
  <div class=\"modal fade\" id=\"detail_";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" role=\"dialog\" tabindex=\"-1\">
    
    <div class=\"modal-dialog\" role=\"document\">
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;
          </button>
          <h4 class=\"modal-title\"><b>";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user-all-popup-heading"), "html", null, true);
                echo "</b>
          </h4>
        </div>
        <div class=\"modal-body\">
          <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 75, $this->getSourceContext()); })()), "html", null, true);
                echo "/user/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "username", array()), "html", null, true);
                echo " </a>
            <br/><br/>
              <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
          <tbody>
                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    ";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parentUser-username"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "username", array()), "html", null, true);
                echo " 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parentUser-name"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "lastname", array()), "html", null, true);
                echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parentUser-email"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "email", array()), "html", null, true);
                echo "
                                </td>
                            </tr>
                            <!-- new-->
                            <tr>
                                <td>
                                    ";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Role"), "html", null, true);
                echo "
                                </td>
                                <td>
                                
                                ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "getRoles", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 111
                    echo "                                      
                                   
                                        ";
                    // line 113
                    if (($context["user"] == "ROLE_ADMIN")) {
                        // line 114
                        echo "                                               <span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_admin"), "html", null, true);
                        echo "</span></br>
                                        ";
                    }
                    // line 116
                    echo "                                        ";
                    if (($context["user"] == "ROLE_PARENT")) {
                        // line 117
                        echo "                                               <span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_parent"), "html", null, true);
                        echo "</span></br>
                                        ";
                    }
                    // line 119
                    echo "                                        ";
                    if (($context["user"] == "ROLE_TEACHER")) {
                        echo "          
                                               <span> ";
                        // line 120
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_teacher"), "html", null, true);
                        echo "</span></br>
                                        ";
                    }
                    // line 122
                    echo "                                        ";
                    if (($context["user"] == "ROLE_STUDENT")) {
                        echo "          
                                               <span> ";
                        // line 123
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_student"), "html", null, true);
                        echo "</span></br>
                                        ";
                    }
                    // line 125
                    echo "                                   
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "                                      
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Language"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 135
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "locale", array()) == "fr")) {
                    // line 136
                    echo "                                        <span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_france"), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 138
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "locale", array()) == "nl")) {
                    // line 139
                    echo "                                        <span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_netherland"), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 141
                echo "                                     ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "locale", array()) == "en")) {
                    // line 142
                    echo "                                        <span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_english"), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 144
                echo "                                    
                                    
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    ";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Address"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "contact", array()), "address", array()), "html", null, true);
                echo "
                                </td>
                            </tr>
                              <tr>
                                <td>
                                    ";
                // line 158
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Postcode"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "contact", array()), "postCode", array()), "html", null, true);
                echo "
                                </td>
                            </tr>
                              
                                <tr>
                                <td>
                                    ";
                // line 167
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-conatct_number"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "contact", array()), "contactNumber", array()), "html", null, true);
                echo "
                                </td>
                            </tr>
                            <!-- new end-->
                            <tr>
                                <td>
                                    ";
                // line 176
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parentUser-phoneNumber"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "phoneNumber", array()), "html", null, true);
                echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                // line 184
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parentUser-lastLogin"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 187
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "lastlogin", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td>
                                    ";
                // line 194
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parentUser-chuld"), "html", null, true);
                echo "
                                </td>
                                
                                <td>
                                    ";
                // line 198
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "child", array(), "array"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 199
                    echo "                                        <span>";
                    echo twig_escape_filter($this->env, $context["child"], "html", null, true);
                    echo "
                                        ";
                    // line 200
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()) == false)) {
                        echo ",
                                        ";
                    }
                    // line 202
                    echo "                                        </span>
                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 204
                echo "                                </td>
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
            // line 219
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "    
    
    
    
";
        
        $__internal_cb445b48498e4ec6e8de85c015f2fe57e4d2b41ae53cc3869c90db44ba338504->leave($__internal_cb445b48498e4ec6e8de85c015f2fe57e4d2b41ae53cc3869c90db44ba338504_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:users:layout_parents_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 220,  501 => 219,  484 => 204,  469 => 202,  464 => 200,  459 => 199,  442 => 198,  435 => 194,  425 => 187,  419 => 184,  411 => 179,  405 => 176,  396 => 170,  390 => 167,  381 => 161,  375 => 158,  367 => 153,  361 => 150,  353 => 144,  347 => 142,  344 => 141,  338 => 139,  335 => 138,  329 => 136,  327 => 135,  321 => 132,  314 => 127,  307 => 125,  302 => 123,  297 => 122,  292 => 120,  287 => 119,  281 => 117,  278 => 116,  272 => 114,  270 => 113,  266 => 111,  262 => 110,  255 => 106,  246 => 100,  240 => 97,  230 => 92,  224 => 89,  216 => 84,  210 => 81,  195 => 75,  188 => 71,  177 => 63,  172 => 60,  169 => 59,  165 => 58,  157 => 52,  151 => 51,  140 => 47,  132 => 46,  123 => 42,  113 => 39,  106 => 35,  100 => 32,  94 => 29,  86 => 26,  82 => 24,  79 => 23,  75 => 22,  68 => 18,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}

{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <br /><br />
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <thead>
                            <tr role=\"row\">
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Name'|trans }}</th>
                                <!--<th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Username'|trans }}</th>-->
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Email'|trans }}</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Phone Number'|trans }}</th>
                                <!--<th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >Edit</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >Delete</th>-->
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Actions'|trans }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        {%  for user in users %}
                            {% if user.enabled %}
                                <tr class=\"gradeA odd\" role=\"row\">
                                    <td>
                                        {{ user.firstname }} {{ user.lastname }}
                                    </td>
                                    <!--<td>-->
                                    <!--    {{ user.username }}-->
                                    <!--</td>-->
                                    <td>
                                        {{ user.email }}
                                    </td>
                                    <td>
                                        {{ user.phoneNumber }}  
                                     </td>
                                    <td>
                                        <!--
                                        <a href=\"{{ base_url}}/parent/info/{{ user.id }}\" class=\"btn btn-xs btn-primary\">{{ 'View'|trans }}</a>
                                    -->
                                        
                                     <input type=\"buton\" class=\"btn btn-xs btn-primary\" style=\"width:69px;\" value=\"{{ 'View'|trans }}\"  onclick=\"detail({{ user.id }})\">
                                        
                                        
                                        
                                        <a href=\"{{ base_url}}/user/edit/{{ user.id }}\" class=\"btn btn-xs btn-default\">{{ 'Edit'|trans }}</a>
                                        <a href=\"{{ base_url}}/user/delete/{{ user.id }}\" class=\"btn btn-xs btn-danger\">{{ 'Delete'|trans }}</a>
                                    </td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
     {%  for user in user_var %}
        {% if user['user'].enabled %}
                                
    <div class=\"container\">
  <!-- Modal -->
  <div class=\"modal fade\" id=\"detail_{{ user['user'].id }}\" role=\"dialog\" tabindex=\"-1\">
    
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
          <a href=\"{{base_url}}/user/edit/{{ user['user'].id }}\" class=\"btn btn-sm btn-default\">{{ 'Edit'|trans }} {{ user['user'].username }} </a>
            <br/><br/>
              <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
          <tbody>
                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    {{ 'parentUser-username'|trans }}
                                </td>
                                <td>
                                    {{ user['user'].username }} 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'parentUser-name'|trans }}
                                </td>
                                <td>
                                    {{ user['user'].firstname }} {{ user['user'].lastname }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'parentUser-email'|trans }}
                                </td>
                                <td>
                                    {{ user['user'].email }}
                                </td>
                            </tr>
                            <!-- new-->
                            <tr>
                                <td>
                                    {{ 'allUser-Role'|trans }}
                                </td>
                                <td>
                                
                                {% for user in user['user'].getRoles() %}
                                      
                                   
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
                                    {% if user['user'].locale =='fr' %}
                                        <span> {{ 'user_language_france'|trans }}</span>
                                    {% endif %}
                                    {% if user['user'].locale =='nl' %}
                                        <span> {{ 'user_language_netherland'|trans }}</span>
                                    {% endif %}
                                     {% if user['user'].locale =='en' %}
                                        <span> {{ 'user_language_english'|trans }}</span>
                                    {% endif %}
                                    
                                    
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    {{ 'allUser-Address'|trans }}
                                </td>
                                <td>
                                    {{ user['user'].contact.address }}
                                </td>
                            </tr>
                              <tr>
                                <td>
                                    {{ 'allUser-Postcode'|trans }}
                                </td>
                                <td>
                                    {{ user['user'].contact.postCode }}
                                </td>
                            </tr>
                              
                                <tr>
                                <td>
                                    {{ 'allUser-conatct_number'|trans }}
                                </td>
                                <td>
                                    {{ user['user'].contact.contactNumber }}
                                </td>
                            </tr>
                            <!-- new end-->
                            <tr>
                                <td>
                                    {{ 'parentUser-phoneNumber'|trans }}
                                </td>
                                <td>
                                    {{ user['user'].phoneNumber }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'parentUser-lastLogin'|trans }}
                                </td>
                                <td>
                                    {{ user['user'].lastlogin|date('Y-m-d H:i:s') }}
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td>
                                    {{ 'parentUser-chuld'|trans }}
                                </td>
                                
                                <td>
                                    {%  for child in user['child'] %}
                                        <span>{{child }}
                                        {% if loop.last == false %},
                                        {% endif %}
                                        </span>
                                    {% endfor %}
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
             {% endfor %}
    
    
    
    
{% endblock %}", "EDUBundle:users:layout_parents_users.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/users/layout_parents_users.html.twig");
    }
}
