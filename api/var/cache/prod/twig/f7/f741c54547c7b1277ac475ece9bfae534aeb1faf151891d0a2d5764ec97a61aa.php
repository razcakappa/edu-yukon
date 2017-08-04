<?php

/* EDUBundle:class:layout_all_classes.html.twig */
class __TwigTemplate_1dd6f36b55b8db4517e1bcd80b8ccfb325b45555cf3847858095ccacb92b4c91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:class:layout_all_classes.html.twig", 1);
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
        echo "/class/add\" class=\"btn btn-success btn-xs\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add New Class"), "html", null, true);
        echo "</a>
            <br /><br />
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <thead>
                            <tr role=\"row\">
                                <!--<th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Class ID"), "html", null, true);
        echo "</th>-->
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Class Name"), "html", null, true);
        echo "</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 20
            echo "                            <tr class=\"gradeA odd\" role=\"row\">
                                <!--<td>-->
                                <!--    ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["class"], "id", array()), "html", null, true);
            echo "-->
                                <!--</td>-->
                                <td>
                                    ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["class"], "className", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    <!--<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/class/edit/subject/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["class"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\">
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                        ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subjects"), "html", null, true);
            echo "
                                    </a>-->

                                    <input type=\"buton\" class=\"btn btn-xs btn-primary\" style=\"width:69px;\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View"), "html", null, true);
            echo "\"  onclick=\"detail(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["class"], "id", array()), "html", null, true);
            echo ")\">
                                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/class/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["class"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
            echo "</a>
                                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/class/delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["class"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
            echo "</a>
                                </td>
                            </tr>



                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 51
            echo "  <!-- Modal -->
  <div class=\"modal fade\" id=\"detail_";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["class"], "id", array()), "html", null, true);
            echo "\" role=\"dialog\" tabindex=\"-1\">
    <div class=\"modal-dialog\" role=\"document\">
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;
          </button>
          <h4 class=\"modal-title\"><b>";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("class-all-popup-heading"), "html", null, true);
            echo "</b>
          </h4>
        </div>
        <div class=\"modal-body\">
          <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <tbody>
                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("class_name_all_view"), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["class"], "className", array()), "html", null, true);
            echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("class_subjects_all_view"), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["class"], "subjects", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 79
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["subject"], "subjects", array()), "html", null, true);
                echo ",&nbsp;  
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
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
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "EDUBundle:class:layout_all_classes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 81,  188 => 79,  184 => 78,  178 => 75,  170 => 70,  164 => 67,  153 => 59,  143 => 52,  140 => 51,  136 => 50,  126 => 42,  109 => 35,  101 => 34,  95 => 33,  89 => 30,  82 => 28,  76 => 25,  70 => 22,  66 => 20,  62 => 19,  55 => 15,  51 => 14,  47 => 13,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:class:layout_all_classes.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/class/layout_all_classes.html.twig");
    }
}
