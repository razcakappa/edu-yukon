<?php

/* EDUBundle:users:layout_parents_users.html.twig */
class __TwigTemplate_63fe7bd79c5f8f249cb376091165c570c322b2a6a317248af05f8ad0af4a4849 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/user/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a>
                                        <a href=\"";
                // line 47
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
        $context['_seq'] = twig_ensure_traversable(($context["user_var"] ?? null));
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
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
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
        return array (  498 => 220,  492 => 219,  475 => 204,  460 => 202,  455 => 200,  450 => 199,  433 => 198,  426 => 194,  416 => 187,  410 => 184,  402 => 179,  396 => 176,  387 => 170,  381 => 167,  372 => 161,  366 => 158,  358 => 153,  352 => 150,  344 => 144,  338 => 142,  335 => 141,  329 => 139,  326 => 138,  320 => 136,  318 => 135,  312 => 132,  305 => 127,  298 => 125,  293 => 123,  288 => 122,  283 => 120,  278 => 119,  272 => 117,  269 => 116,  263 => 114,  261 => 113,  257 => 111,  253 => 110,  246 => 106,  237 => 100,  231 => 97,  221 => 92,  215 => 89,  207 => 84,  201 => 81,  186 => 75,  179 => 71,  168 => 63,  163 => 60,  160 => 59,  156 => 58,  148 => 52,  142 => 51,  131 => 47,  123 => 46,  114 => 42,  104 => 39,  97 => 35,  91 => 32,  85 => 29,  77 => 26,  73 => 24,  70 => 23,  66 => 22,  59 => 18,  53 => 15,  49 => 14,  45 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:users:layout_parents_users.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/users/layout_parents_users.html.twig");
    }
}
