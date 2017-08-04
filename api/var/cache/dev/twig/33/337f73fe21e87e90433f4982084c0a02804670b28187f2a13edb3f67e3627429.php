<?php

/* EDUBundle:class:layout_all_classes.html.twig */
class __TwigTemplate_f627931e8db06016bdff2ff49ec18da7309cbdc127662bf9d26c1d750f6fbfaa extends Twig_Template
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
        $__internal_7a033fc21c56bd62b8471b36526dd1861ea5e001f7a150e8204f22bcce58e5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a033fc21c56bd62b8471b36526dd1861ea5e001f7a150e8204f22bcce58e5dc->enter($__internal_7a033fc21c56bd62b8471b36526dd1861ea5e001f7a150e8204f22bcce58e5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:class:layout_all_classes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a033fc21c56bd62b8471b36526dd1861ea5e001f7a150e8204f22bcce58e5dc->leave($__internal_7a033fc21c56bd62b8471b36526dd1861ea5e001f7a150e8204f22bcce58e5dc_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_512e615f1ef035cd7c10b66a70435ab1407a006267a2c6debe1c105c0cc6a461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512e615f1ef035cd7c10b66a70435ab1407a006267a2c6debe1c105c0cc6a461->enter($__internal_512e615f1ef035cd7c10b66a70435ab1407a006267a2c6debe1c105c0cc6a461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 19, $this->getSourceContext()); })()));
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
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 28, $this->getSourceContext()); })()), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
            echo "/class/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["class"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
            echo "</a>
                                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 50, $this->getSourceContext()); })()));
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
        
        $__internal_512e615f1ef035cd7c10b66a70435ab1407a006267a2c6debe1c105c0cc6a461->leave($__internal_512e615f1ef035cd7c10b66a70435ab1407a006267a2c6debe1c105c0cc6a461_prof);

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
        return array (  206 => 81,  197 => 79,  193 => 78,  187 => 75,  179 => 70,  173 => 67,  162 => 59,  152 => 52,  149 => 51,  145 => 50,  135 => 42,  118 => 35,  110 => 34,  104 => 33,  98 => 30,  91 => 28,  85 => 25,  79 => 22,  75 => 20,  71 => 19,  64 => 15,  60 => 14,  56 => 13,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}

{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <a href=\"{{base_url}}/class/add\" class=\"btn btn-success btn-xs\">{{ 'Add New Class'|trans }}</a>
            <br /><br />
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <thead>
                            <tr role=\"row\">
                                <!--<th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Class ID'|trans }}</th>-->
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Class Name'|trans }}</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Actions'|trans }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        {%  for class in classes %}
                            <tr class=\"gradeA odd\" role=\"row\">
                                <!--<td>-->
                                <!--    {{ class.id }}-->
                                <!--</td>-->
                                <td>
                                    {{ class.className }}
                                </td>
                                <td>
                                    <!--<a href=\"{{base_url}}/class/edit/subject/{{ class.id }}\" class=\"btn btn-xs btn-success\">
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                        {{ 'Subjects'|trans }}
                                    </a>-->

                                    <input type=\"buton\" class=\"btn btn-xs btn-primary\" style=\"width:69px;\" value=\"{{ 'View'|trans }}\"  onclick=\"detail({{ class.id }})\">
                                    <a href=\"{{base_url}}/class/edit/{{ class.id }}\" class=\"btn btn-xs btn-default\">{{ 'Edit'|trans }}</a>
                                    <a href=\"{{base_url}}/class/delete/{{ class.id }}\" class=\"btn btn-xs btn-danger\">{{ 'Delete'|trans }}</a>
                                </td>
                            </tr>



                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


{%  for class in classes %}
  <!-- Modal -->
  <div class=\"modal fade\" id=\"detail_{{ class.id }}\" role=\"dialog\" tabindex=\"-1\">
    <div class=\"modal-dialog\" role=\"document\">
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;
          </button>
          <h4 class=\"modal-title\"><b>{{ 'class-all-popup-heading'|trans }}</b>
          </h4>
        </div>
        <div class=\"modal-body\">
          <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <tbody>
                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    {{ 'class_name_all_view'|trans }}
                                </td>
                                <td>
                                    {{ class.className }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ 'class_subjects_all_view'|trans }}
                                </td>
                                <td>
                                    {%  for subject in class.subjects %}
                                        {{ subject.subjects }},&nbsp;  
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
{% endfor %}
{% endblock %}
", "EDUBundle:class:layout_all_classes.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/class/layout_all_classes.html.twig");
    }
}
