<?php

/* EDUBundle:users:layout_teaches_users.html.twig */
class __TwigTemplate_0ceb4803918c6e5d3d86aeb0af9550851ca71671231c9f1c27792145ecbbb17d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:users:layout_teaches_users.html.twig", 1);
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
        $__internal_e1d93bc1014dcf68c96006d95981a9e5ce0cfdeecd6b8c4f47436796ddbb3b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d93bc1014dcf68c96006d95981a9e5ce0cfdeecd6b8c4f47436796ddbb3b74->enter($__internal_e1d93bc1014dcf68c96006d95981a9e5ce0cfdeecd6b8c4f47436796ddbb3b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:users:layout_teaches_users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1d93bc1014dcf68c96006d95981a9e5ce0cfdeecd6b8c4f47436796ddbb3b74->leave($__internal_e1d93bc1014dcf68c96006d95981a9e5ce0cfdeecd6b8c4f47436796ddbb3b74_prof);

    }

    // line 2
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_f3a670c2e1e574ee88cfbcf39cb3bbe3ae70afb9af8be4522a6975580862ce0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a670c2e1e574ee88cfbcf39cb3bbe3ae70afb9af8be4522a6975580862ce0b->enter($__internal_f3a670c2e1e574ee88cfbcf39cb3bbe3ae70afb9af8be4522a6975580862ce0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 3
        echo "<div class=\"row\">
 
  <div class=\"col-lg-12\">
    <br />
    <br />
    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
          <thead>
            <tr role=\"row\">
              <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
        echo "
              </th>
              <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" style=\"width: 310px !important\" >";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subjects"), "html", null, true);
        echo "
              </th>
              <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone Number"), "html", null, true);
        echo "</th>
              <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "
              </th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 23, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "enabled", array())) {
                // line 25
                echo "            <tr class=\"gradeA odd\" role=\"row\">
              <td>
                ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "lastname", array()), "html", null, true);
                echo "
              </td>
              <td>
                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "subs", array(), "array"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    // line 31
                    echo "                  <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sub"], "subjects", array()), "name", array()), "html", null, true);
                    echo "</span>";
                    echo (( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) ? (",") : (""));
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "              </td>
              <td>
                ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "phoneNumber", array()), "html", null, true);
                echo "  
              </td>
              <td>
                <!--<a href=\"";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
                echo "/teacher/edit/class/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-success\">-->
                <!--  <i class=\"glyphicon glyphicon-plus\">-->
                <!--  </i>-->
                <!--  ";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Classes"), "html", null, true);
                echo "-->
                <!--</a>-->
                <!--<a href=\"";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 43, $this->getSourceContext()); })()), "html", null, true);
                echo "/teacher/edit/subject/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-success\">-->
                <!--  <i class=\"glyphicon glyphicon-plus\">-->
                <!--  </i>-->
                <!--  ";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subjects"), "html", null, true);
                echo "-->
                <!--</a>-->
                <input type=\"buton\" class=\"btn btn-xs btn-primary\" style=\"width:69px;\" value=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View"), "html", null, true);
                echo "\"  onclick=\"detail(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo ")\">
          </input>
            <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 50, $this->getSourceContext()); })()), "html", null, true);
                echo "/user/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "
            </a>
            <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
                echo "/user/delete/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                echo "
            </a>
          </td>
        </tr>
      ";
            }
            // line 57
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "      </tbody>
    </table>
</div>
</div>
</div>
</div>
<!-- moodle-->
";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 65, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 66
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "enabled", array())) {
                // line 67
                echo "<div class=\"container\">
  <!-- Modal -->
  <div class=\"modal fade\" id=\"detail_";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" role=\"dialog\" tabindex=\"-1\">
    
  
    <div class=\"modal-dialog\" role=\"document\">
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;
          </button>
          <h4 class=\"modal-title\"><b>";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user-all-popup-heading"), "html", null, true);
                echo "</b>
          </h4>
        </div>
        <div class=\"modal-body\">
          <!--<a href=\"";
                // line 82
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_teachers");
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go Back"), "html", null, true);
                echo "
          </a>-->
          <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 84, $this->getSourceContext()); })()), "html", null, true);
                echo "/user/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "username", array()), "html", null, true);
                echo " 
          </a>
          <br/>
          <br/>
          <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
            <tbody>
              <tr class=\"gradeA odd\" role=\"row\">
                <td>
                  ";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teacherUser-userName"), "html", null, true);
                echo "
                </td>
                <td>
                  ";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "username", array()), "html", null, true);
                echo " 
                </td>
              </tr>
              <tr>
                <td>
                  ";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teacherUser-name"), "html", null, true);
                echo "
                </td>
                <td>
                  ";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "lastname", array()), "html", null, true);
                echo "
                </td>
              </tr>
              <tr>
                <td>
                  ";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teacherUser-email"), "html", null, true);
                echo "
                </td>
                <td>
                  ";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "email", array()), "html", null, true);
                echo "
                </td>
              </tr>              
              <!-- new-->
              <tr>
                  <td>
                      ";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Role"), "html", null, true);
                echo "
                  </td>
                  <td>
                  
                  ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "getRoles", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 122
                    echo "                        
                     
                          ";
                    // line 124
                    if (($context["user"] == "ROLE_ADMIN")) {
                        // line 125
                        echo "                                 <span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_admin"), "html", null, true);
                        echo "</span></br>
                          ";
                    }
                    // line 127
                    echo "                          ";
                    if (($context["user"] == "ROLE_PARENT")) {
                        // line 128
                        echo "                                 <span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_parent"), "html", null, true);
                        echo "</span></br>
                          ";
                    }
                    // line 130
                    echo "                          ";
                    if (($context["user"] == "ROLE_TEACHER")) {
                        echo "          
                                 <span> ";
                        // line 131
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_teacher"), "html", null, true);
                        echo "</span></br>
                          ";
                    }
                    // line 133
                    echo "                          ";
                    if (($context["user"] == "ROLE_STUDENT")) {
                        echo "          
                                 <span> ";
                        // line 134
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_student"), "html", null, true);
                        echo "</span></br>
                          ";
                    }
                    // line 136
                    echo "                          
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "                        
                  </td>
              </tr>
              <tr>
                  <td>
                      ";
                // line 143
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Language"), "html", null, true);
                echo "
                  </td>
                  <td>
                      ";
                // line 146
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "locale", array()) == "fr")) {
                    // line 147
                    echo "                          <span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_france"), "html", null, true);
                    echo "</span>
                      ";
                }
                // line 149
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "locale", array()) == "nl")) {
                    // line 150
                    echo "                          <span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_netherland"), "html", null, true);
                    echo "</span>
                      ";
                }
                // line 152
                echo "                       ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "locale", array()) == "en")) {
                    // line 153
                    echo "                          <span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_language_english"), "html", null, true);
                    echo "</span>
                      ";
                }
                // line 155
                echo "                      
                      
                  </td>
              </tr>
               <tr>
                  <td>
                      ";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Address"), "html", null, true);
                echo "
                  </td>
                  <td>
                      ";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "contact", array()), "address", array()), "html", null, true);
                echo "
                  </td>
              </tr>
                <tr>
                  <td>
                      ";
                // line 169
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-Postcode"), "html", null, true);
                echo "
                  </td>
                  <td>
                      ";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "contact", array()), "postCode", array()), "html", null, true);
                echo "
                  </td>
              </tr>
                
                  <tr>
                  <td>
                      ";
                // line 178
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allUser-conatct_number"), "html", null, true);
                echo "
                  </td>
                  <td>
                      ";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "contact", array()), "contactNumber", array()), "html", null, true);
                echo "
                  </td>
              </tr>

              <!-- new end-->
              <tr>
                <td>
                  ";
                // line 188
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teacherUser-phoneNumber"), "html", null, true);
                echo "
                </td>
                <td>
                  ";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "phoneNumber", array()), "html", null, true);
                echo "
                </td>
              </tr>
              <tr>
                <td>
                  ";
                // line 196
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teacherUser-lastLogin"), "html", null, true);
                echo "
                </td>
                <td>
                  ";
                // line 199
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "lastlogin", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "
                </td>
              </tr>
              <tr>
                <td>
                  ";
                // line 204
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teacherUser-subjects"), "html", null, true);
                echo "
                </td>
                <td>
                  ";
                // line 207
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "subs", array(), "array"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    // line 208
                    echo "                    <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sub"], "subjects", array()), "name", array()), "html", null, true);
                    echo "</span>";
                    echo (( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) ? (",") : (""));
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 210
                echo "                </td>
              </tr>
              <tr>
                <td>
                  ";
                // line 214
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teacherUser-children"), "html", null, true);
                echo "
                </td>
                <td>
                  ";
                // line 217
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "childs", array(), "array"));
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
                    // line 218
                    echo "                    <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "users", array()), "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "users", array()), "lastname", array()), "html", null, true);
                    echo "</span>";
                    echo (( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) ? (", ") : (""));
                    echo "
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
                // line 220
                echo "                </td>
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f3a670c2e1e574ee88cfbcf39cb3bbe3ae70afb9af8be4522a6975580862ce0b->leave($__internal_f3a670c2e1e574ee88cfbcf39cb3bbe3ae70afb9af8be4522a6975580862ce0b_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:users:layout_teaches_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 220,  556 => 218,  539 => 217,  533 => 214,  527 => 210,  508 => 208,  491 => 207,  485 => 204,  477 => 199,  471 => 196,  463 => 191,  457 => 188,  447 => 181,  441 => 178,  432 => 172,  426 => 169,  418 => 164,  412 => 161,  404 => 155,  398 => 153,  395 => 152,  389 => 150,  386 => 149,  380 => 147,  378 => 146,  372 => 143,  365 => 138,  358 => 136,  353 => 134,  348 => 133,  343 => 131,  338 => 130,  332 => 128,  329 => 127,  323 => 125,  321 => 124,  317 => 122,  313 => 121,  306 => 117,  297 => 111,  291 => 108,  281 => 103,  275 => 100,  267 => 95,  261 => 92,  244 => 84,  237 => 82,  230 => 78,  218 => 69,  214 => 67,  212 => 66,  208 => 65,  199 => 58,  193 => 57,  181 => 52,  172 => 50,  165 => 48,  160 => 46,  152 => 43,  147 => 41,  139 => 38,  133 => 35,  129 => 33,  110 => 31,  93 => 30,  85 => 27,  81 => 25,  78 => 24,  74 => 23,  66 => 18,  62 => 17,  57 => 15,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}
{% block cmi_body %}
<div class=\"row\">
 
  <div class=\"col-lg-12\">
    <br />
    <br />
    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
          <thead>
            <tr role=\"row\">
              <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Name'|trans }}
              </th>
              <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" style=\"width: 310px !important\" >{{ 'Subjects'|trans }}
              </th>
              <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Phone Number'|trans }}</th>
              <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Actions'|trans }}
              </th>
            </tr>
          </thead>
          <tbody>
            {%  for user in users %}
            {% if user['user'].enabled %}
            <tr class=\"gradeA odd\" role=\"row\">
              <td>
                {{ user['user'].firstname }} {{ user['user'].lastname }}
              </td>
              <td>
                {%  for sub in user['subs'] %}
                  <span>{{sub.subjects.name}}</span>{{ not loop.last ? ',' }}
                {% endfor %}
              </td>
              <td>
                {{ user['user'].phoneNumber }}  
              </td>
              <td>
                <!--<a href=\"{{ base_url}}/teacher/edit/class/{{ user['user'].id }}\" class=\"btn btn-xs btn-success\">-->
                <!--  <i class=\"glyphicon glyphicon-plus\">-->
                <!--  </i>-->
                <!--  {{ 'Classes'|trans }}-->
                <!--</a>-->
                <!--<a href=\"{{ base_url}}/teacher/edit/subject/{{ user['user'].id }}\" class=\"btn btn-xs btn-success\">-->
                <!--  <i class=\"glyphicon glyphicon-plus\">-->
                <!--  </i>-->
                <!--  {{ 'Subjects'|trans }}-->
                <!--</a>-->
                <input type=\"buton\" class=\"btn btn-xs btn-primary\" style=\"width:69px;\" value=\"{{ 'View'|trans }}\"  onclick=\"detail({{ user['user'].id }})\">
          </input>
            <a href=\"{{ base_url}}/user/edit/{{ user['user'].id }}\" class=\"btn btn-xs btn-default\">{{ 'Edit'|trans }}
            </a>
            <a href=\"{{ base_url}}/user/delete/{{ user['user'].id }}\" class=\"btn btn-xs btn-danger\">{{ 'Delete'|trans }}
            </a>
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
<!-- moodle-->
{%  for user in users %}
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
          <!--<a href=\"{{ path('user_teachers') }}\" class=\"btn btn-sm btn-primary\">{{ 'Go Back'|trans }}
          </a>-->
          <a href=\"{{base_url}}/user/edit/{{ user['user'].id }}\" class=\"btn btn-sm btn-default\">{{ 'Edit'|trans }} {{ user['user'].username }} 
          </a>
          <br/>
          <br/>
          <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
            <tbody>
              <tr class=\"gradeA odd\" role=\"row\">
                <td>
                  {{ 'teacherUser-userName'|trans }}
                </td>
                <td>
                  {{ user['user'].username }} 
                </td>
              </tr>
              <tr>
                <td>
                  {{ 'teacherUser-name'|trans }}
                </td>
                <td>
                  {{ user['user'].firstname }} {{ user['user'].lastname }}
                </td>
              </tr>
              <tr>
                <td>
                  {{ 'teacherUser-email'|trans }}
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
                  {{ 'teacherUser-phoneNumber'|trans }}
                </td>
                <td>
                  {{ user['user'].phoneNumber }}
                </td>
              </tr>
              <tr>
                <td>
                  {{ 'teacherUser-lastLogin'|trans }}
                </td>
                <td>
                  {{ user['user'].lastlogin|date('Y-m-d H:i:s') }}
                </td>
              </tr>
              <tr>
                <td>
                  {{ 'teacherUser-subjects'|trans }}
                </td>
                <td>
                  {%  for sub in user['subs'] %}
                    <span>{{sub.subjects.name}}</span>{{ not loop.last ? ',' }}
                  {% endfor %}
                </td>
              </tr>
              <tr>
                <td>
                  {{ 'teacherUser-children'|trans }}
                </td>
                <td>
                  {% for child in user['childs'] %}
                    <span>{{ child.users.firstname }} {{ child.users.lastname }}</span>{{ not loop.last ? ', ' }}
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
", "EDUBundle:users:layout_teaches_users.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/users/layout_teaches_users.html.twig");
    }
}
