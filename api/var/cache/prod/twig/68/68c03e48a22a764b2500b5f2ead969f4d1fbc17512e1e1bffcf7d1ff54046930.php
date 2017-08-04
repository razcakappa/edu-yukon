<?php

/* EDUBundle:users:layout_teaches_users.html.twig */
class __TwigTemplate_986e6b49d7a73beaaf275d637488dd1a7b0375866ab1dd83f74f813418434ce0 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_cmi_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/user/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "
            </a>
            <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
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
        return array (  568 => 220,  547 => 218,  530 => 217,  524 => 214,  518 => 210,  499 => 208,  482 => 207,  476 => 204,  468 => 199,  462 => 196,  454 => 191,  448 => 188,  438 => 181,  432 => 178,  423 => 172,  417 => 169,  409 => 164,  403 => 161,  395 => 155,  389 => 153,  386 => 152,  380 => 150,  377 => 149,  371 => 147,  369 => 146,  363 => 143,  356 => 138,  349 => 136,  344 => 134,  339 => 133,  334 => 131,  329 => 130,  323 => 128,  320 => 127,  314 => 125,  312 => 124,  308 => 122,  304 => 121,  297 => 117,  288 => 111,  282 => 108,  272 => 103,  266 => 100,  258 => 95,  252 => 92,  235 => 84,  228 => 82,  221 => 78,  209 => 69,  205 => 67,  203 => 66,  199 => 65,  190 => 58,  184 => 57,  172 => 52,  163 => 50,  156 => 48,  151 => 46,  143 => 43,  138 => 41,  130 => 38,  124 => 35,  120 => 33,  101 => 31,  84 => 30,  76 => 27,  72 => 25,  69 => 24,  65 => 23,  57 => 18,  53 => 17,  48 => 15,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:users:layout_teaches_users.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/users/layout_teaches_users.html.twig");
    }
}
