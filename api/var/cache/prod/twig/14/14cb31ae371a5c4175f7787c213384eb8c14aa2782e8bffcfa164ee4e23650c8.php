<?php

/* EDUBundle:users:layout_students_users.html.twig */
class __TwigTemplate_84a6683b2332fd539e4b453568d2a87c7bf78b12bff57a34732245464ddc35a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:users:layout_students_users.html.twig", 1);
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
                                <!--<th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Class Name"), "html", null, true);
        echo "</th>-->
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("student_list_view_class_column_title"), "html", null, true);
        echo "</th>
                                <!--<th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >Delete</th>-->
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user_var"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), array(), "array"), "class", array()), "html", null, true);
                echo "
                                    </td>
                                    <!--<td>
                                        ";
                // line 38
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "student", array())) {
                    // line 39
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "student", array()), "classes", array())) {
                        // line 40
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "student", array()), "classes", array()), "className", array()), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 42
                    echo "                                        ";
                }
                // line 43
                echo "                                    </td>-->
                                    <td>
                                        <!--<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/student/manage/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-success\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage"), "html", null, true);
                echo "</a>-->
                                        
                                        <!--
                                        <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/student/info/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View"), "html", null, true);
                echo "</a>
                                        -->
                                        
                                          <input type=\"buton\" class=\"btn btn-xs btn-primary\" style=\"width:69px;\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View"), "html", null, true);
                echo "\"  onclick=\"detail(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                echo ")\">
                                        
                                        <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/user/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a>
                                        <a href=\"";
                // line 54
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
            // line 58
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

  ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_var"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 67
            echo "      
    ";
            // line 68
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "enabled", array())) {
                // line 69
                echo "<div class=\"container\">
  <!-- Modal -->
  <div class=\"modal fade\" id=\"detail_";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" role=\"dialog\" tabindex=\"-1\">
    
  
    <div class=\"modal-dialog\" role=\"document\">
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;
          </button>
          <h4 class=\"modal-title\"><b>";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user-all-popup-heading"), "html", null, true);
                echo "</b>
          </h4>
        </div>
        <div class=\"modal-body\">
           <a href=\"";
                // line 84
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
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("studenUser-username"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "username", array()), "html", null, true);
                echo " 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("studenUser-name"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "lastname", array()), "html", null, true);
                echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("studenUser-email"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "email", array()), "html", null, true);
                echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("student_list_view_class_column_title"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user_var"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), array(), "array"), "class", array()), "html", null, true);
                echo "
                                </td>
                            </tr>
                             <!-- new-->
                            <tr>
                                <td>
                                    ";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Role"), "html", null, true);
                echo "
                                </td>
                                <td>
                                
                                ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "getRoles", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 128
                    echo "                                        
                                        ";
                    // line 129
                    if (($context["user"] == "ROLE_ADMIN")) {
                        // line 130
                        echo "                                               <span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_admin"), "html", null, true);
                        echo "</span></br>
                                        ";
                    }
                    // line 132
                    echo "                                        ";
                    if (($context["user"] == "ROLE_PARENT")) {
                        // line 133
                        echo "                                               <span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_parent"), "html", null, true);
                        echo "</span></br>
                                        ";
                    }
                    // line 135
                    echo "                                        ";
                    if (($context["user"] == "ROLE_TEACHER")) {
                        echo "          
                                               <span> ";
                        // line 136
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_teacher"), "html", null, true);
                        echo "</span></br>
                                        ";
                    }
                    // line 138
                    echo "                                        ";
                    if (($context["user"] == "ROLE_STUDENT")) {
                        echo "          
                                               <span> ";
                        // line 139
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_student"), "html", null, true);
                        echo "</span></br>
                                        ";
                    }
                    // line 141
                    echo "                                 
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "                                      
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Language"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 151
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "locale", array()) == "fr")) {
                    // line 152
                    echo "                                        <span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_france"), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 154
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "locale", array()) == "nl")) {
                    // line 155
                    echo "                                        <span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_netherland"), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 157
                echo "                                     ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "locale", array()) == "en")) {
                    // line 158
                    echo "                                        <span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_english"), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 160
                echo "                                    
                                    
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    ";
                // line 166
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Address"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "contact", array()), "address", array()), "html", null, true);
                echo "
                                </td>
                            </tr>
                              <tr>
                                <td>
                                    ";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Postcode"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "contact", array()), "postCode", array()), "html", null, true);
                echo "
                                </td>
                            </tr>
                              
                                <tr>
                                <td>
                                    ";
                // line 183
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-conatct_number"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "contact", array()), "contactNumber", array()), "html", null, true);
                echo "
                                </td>
                            </tr>
                            <!-- new end-->
                            <tr>
                                <td>
                                    ";
                // line 192
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("studenUser-phoneNumber"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "phoneNumber", array()), "html", null, true);
                echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
                // line 200
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("studenUser-lastLogin"), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 203
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "lastlogin", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "
                                </td>
                            </tr>
                            <tr>
                                <td>";
                // line 207
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("studenUser-class"), "html", null, true);
                echo "</td>
                                    <td>
                                        ";
                // line 209
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "class", array(), "array") != "")) {
                    // line 210
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "class", array(), "array"), "className", array()), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 212
                    echo "                                                
                                            ";
                    // line 213
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("not-assigned"), "html", null, true);
                    echo "
                                        ";
                }
                // line 215
                echo "                                                                
                                        </td>
                                        
                                    </tr>
                                <tr>
                                    <td>";
                // line 220
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("studentUser-subject"), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 223
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "subjects", array(), "array"));
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
                    // line 224
                    echo "                                            <span>";
                    echo twig_escape_filter($this->env, $context["child"], "html", null, true);
                    echo "
                                             ";
                    // line 225
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()) == false)) {
                        echo ",
                                            ";
                    }
                    // line 227
                    echo "                                            </span>
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
                // line 229
                echo "                                    </td>
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
            // line 245
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  
    
";
    }

    public function getTemplateName()
    {
        return "EDUBundle:users:layout_students_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 245,  577 => 229,  562 => 227,  557 => 225,  552 => 224,  535 => 223,  529 => 220,  522 => 215,  517 => 213,  514 => 212,  508 => 210,  506 => 209,  501 => 207,  494 => 203,  488 => 200,  480 => 195,  474 => 192,  465 => 186,  459 => 183,  450 => 177,  444 => 174,  436 => 169,  430 => 166,  422 => 160,  416 => 158,  413 => 157,  407 => 155,  404 => 154,  398 => 152,  396 => 151,  390 => 148,  383 => 143,  376 => 141,  371 => 139,  366 => 138,  361 => 136,  356 => 135,  350 => 133,  347 => 132,  341 => 130,  339 => 129,  336 => 128,  332 => 127,  325 => 123,  316 => 117,  310 => 114,  302 => 109,  296 => 106,  286 => 101,  280 => 98,  272 => 93,  266 => 90,  251 => 84,  244 => 80,  232 => 71,  228 => 69,  226 => 68,  223 => 67,  206 => 66,  197 => 59,  183 => 58,  172 => 54,  164 => 53,  157 => 51,  147 => 48,  137 => 45,  133 => 43,  130 => 42,  124 => 40,  121 => 39,  119 => 38,  113 => 35,  107 => 32,  101 => 29,  93 => 26,  89 => 24,  86 => 23,  69 => 22,  62 => 18,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:users:layout_students_users.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/users/layout_students_users.html.twig");
    }
}
