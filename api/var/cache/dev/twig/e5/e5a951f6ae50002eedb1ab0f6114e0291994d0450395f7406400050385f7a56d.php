<?php

/* EDUBundle:users:layout_students_users.html.twig */
class __TwigTemplate_cacb3623d4f84f9a5009d2e2824ff7d89b8afe28ba4a35c0fb2a845516f2c0e4 extends Twig_Template
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
        $__internal_aaffcdb55f8eb3744dd82743c7f0a4e69289fa8880e5e3eb35122d1aafe716e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaffcdb55f8eb3744dd82743c7f0a4e69289fa8880e5e3eb35122d1aafe716e8->enter($__internal_aaffcdb55f8eb3744dd82743c7f0a4e69289fa8880e5e3eb35122d1aafe716e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:users:layout_students_users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaffcdb55f8eb3744dd82743c7f0a4e69289fa8880e5e3eb35122d1aafe716e8->leave($__internal_aaffcdb55f8eb3744dd82743c7f0a4e69289fa8880e5e3eb35122d1aafe716e8_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_b52deb506421579e7dad838cffac7d0946cf3cb18005d33fda723a8306fa8edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52deb506421579e7dad838cffac7d0946cf3cb18005d33fda723a8306fa8edf->enter($__internal_b52deb506421579e7dad838cffac7d0946cf3cb18005d33fda723a8306fa8edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 22, $this->getSourceContext()); })()));
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user_var"]) || array_key_exists("user_var", $context) ? $context["user_var"] : (function () { throw new Twig_Error_Runtime('Variable "user_var" does not exist.', 35, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), array(), "array"), "class", array()), "html", null, true);
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
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 45, $this->getSourceContext()); })()), "html", null, true);
                echo "/student/manage/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-success\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage"), "html", null, true);
                echo "</a>-->
                                        
                                        <!--
                                        <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
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
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 53, $this->getSourceContext()); })()), "html", null, true);
                echo "/user/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</a>
                                        <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 54, $this->getSourceContext()); })()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["user_var"]) || array_key_exists("user_var", $context) ? $context["user_var"] : (function () { throw new Twig_Error_Runtime('Variable "user_var" does not exist.', 66, $this->getSourceContext()); })()));
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
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 84, $this->getSourceContext()); })()), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user_var"]) || array_key_exists("user_var", $context) ? $context["user_var"] : (function () { throw new Twig_Error_Runtime('Variable "user_var" does not exist.', 117, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), array(), "array"), "class", array()), "html", null, true);
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
        
        $__internal_b52deb506421579e7dad838cffac7d0946cf3cb18005d33fda723a8306fa8edf->leave($__internal_b52deb506421579e7dad838cffac7d0946cf3cb18005d33fda723a8306fa8edf_prof);

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
        return array (  604 => 245,  586 => 229,  571 => 227,  566 => 225,  561 => 224,  544 => 223,  538 => 220,  531 => 215,  526 => 213,  523 => 212,  517 => 210,  515 => 209,  510 => 207,  503 => 203,  497 => 200,  489 => 195,  483 => 192,  474 => 186,  468 => 183,  459 => 177,  453 => 174,  445 => 169,  439 => 166,  431 => 160,  425 => 158,  422 => 157,  416 => 155,  413 => 154,  407 => 152,  405 => 151,  399 => 148,  392 => 143,  385 => 141,  380 => 139,  375 => 138,  370 => 136,  365 => 135,  359 => 133,  356 => 132,  350 => 130,  348 => 129,  345 => 128,  341 => 127,  334 => 123,  325 => 117,  319 => 114,  311 => 109,  305 => 106,  295 => 101,  289 => 98,  281 => 93,  275 => 90,  260 => 84,  253 => 80,  241 => 71,  237 => 69,  235 => 68,  232 => 67,  215 => 66,  206 => 59,  192 => 58,  181 => 54,  173 => 53,  166 => 51,  156 => 48,  146 => 45,  142 => 43,  139 => 42,  133 => 40,  130 => 39,  128 => 38,  122 => 35,  116 => 32,  110 => 29,  102 => 26,  98 => 24,  95 => 23,  78 => 22,  71 => 18,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
                                <!--<th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Class Name'|trans }}</th>-->
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Email'|trans }}</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'student_list_view_class_column_title'|trans }}</th>
                                <!--<th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >Delete</th>-->
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Actions'|trans }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        {%  for user in users %}
                            {% if user.enabled%}
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
                                        {{ user_var[loop.index0].class }}
                                    </td>
                                    <!--<td>
                                        {% if user.student %}
                                            {% if user.student.classes %}
                                                {{ user.student.classes.className }}
                                            {% endif %}
                                        {% endif %}
                                    </td>-->
                                    <td>
                                        <!--<a href=\"{{ base_url}}/student/manage/{{ user.id }}\" class=\"btn btn-xs btn-success\"><i class=\"glyphicon glyphicon-plus\"></i> {{ 'Manage'|trans }}</a>-->
                                        
                                        <!--
                                        <a href=\"{{ base_url}}/student/info/{{ user.id }}\" class=\"btn btn-xs btn-primary\">{{ 'View'|trans }}</a>
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
                                    {{ 'studenUser-username'|trans }}
                                </td>
                                <td>
                                    {{ user['user'].username }} 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'studenUser-name'|trans }}
                                </td>
                                <td>
                                    {{ user['user'].firstname }} {{ user['user'].lastname }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'studenUser-email'|trans }}
                                </td>
                                <td>
                                    {{ user['user'].email }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'student_list_view_class_column_title'|trans }}
                                </td>
                                <td>
                                    {{ user_var[loop.index0].class }}
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
                                    {{ 'studenUser-phoneNumber'|trans }}
                                </td>
                                <td>
                                    {{ user['user'].phoneNumber }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'studenUser-lastLogin'|trans }}
                                </td>
                                <td>
                                    {{ user['user'].lastlogin|date('Y-m-d H:i:s') }}
                                </td>
                            </tr>
                            <tr>
                                <td>{{ 'studenUser-class'|trans }}</td>
                                    <td>
                                        {% if user['class'] != '' %}
                                            {{ user['class'].className }}
                                        {% else %}
                                                
                                            {{ 'not-assigned'|trans }}
                                        {% endif %}
                                                                
                                        </td>
                                        
                                    </tr>
                                <tr>
                                    <td>{{ 'studentUser-subject'|trans }}
                                    </td>
                                    <td>
                                        {%  for child in user['subjects'] %}
                                            <span>{{child}}
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
    
{% endblock %}
", "EDUBundle:users:layout_students_users.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/users/layout_students_users.html.twig");
    }
}
