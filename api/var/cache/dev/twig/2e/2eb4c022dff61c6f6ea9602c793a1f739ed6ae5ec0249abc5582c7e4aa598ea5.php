<?php

/* EDUBundle:subjects:layout_all_subjects.html.twig */
class __TwigTemplate_a7278c7d6ff1b74b7803017e4e95953eab950dd2f7ee6219efd208544290de1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:subjects:layout_all_subjects.html.twig", 1);
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
        $__internal_97c98326704a5021569949e756da0189bbdc2b8677b717e919055a7048399246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c98326704a5021569949e756da0189bbdc2b8677b717e919055a7048399246->enter($__internal_97c98326704a5021569949e756da0189bbdc2b8677b717e919055a7048399246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:subjects:layout_all_subjects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97c98326704a5021569949e756da0189bbdc2b8677b717e919055a7048399246->leave($__internal_97c98326704a5021569949e756da0189bbdc2b8677b717e919055a7048399246_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_48796453d02993d7fd3063c67aa1a135f6f70468f885746a2b9db63fa2852972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48796453d02993d7fd3063c67aa1a135f6f70468f885746a2b9db63fa2852972->enter($__internal_48796453d02993d7fd3063c67aa1a135f6f70468f885746a2b9db63fa2852972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo "/subject/add\" class=\"btn btn-success btn-xs\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add New Subject"), "html", null, true);
        echo " </a>
            <br /><br />
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <thead>
                            <tr role=\"row\">
                                <!--<th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subject ID"), "html", null, true);
        echo "</th>-->
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subject Name"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new Twig_Error_Runtime('Variable "subjects" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 20
            echo "                            <tr class=\"gradeA odd\" role=\"row\">
                                <!--<td>-->
                                <!--    ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sub"], "id", array()), "html", null, true);
            echo "-->
                                <!--</td>-->
                                <td>
                                    ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sub"], "name", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 28, $this->getSourceContext()); })()), "html", null, true);
            echo "/subject/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sub"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
            echo "</a>
                                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
            echo "/subject/delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sub"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
            echo "</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_48796453d02993d7fd3063c67aa1a135f6f70468f885746a2b9db63fa2852972->leave($__internal_48796453d02993d7fd3063c67aa1a135f6f70468f885746a2b9db63fa2852972_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:subjects:layout_all_subjects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  99 => 29,  91 => 28,  85 => 25,  79 => 22,  75 => 20,  71 => 19,  64 => 15,  60 => 14,  56 => 13,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}

{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <a href=\"{{ base_url}}/subject/add\" class=\"btn btn-success btn-xs\">{{ 'Add New Subject'|trans }} </a>
            <br /><br />
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <thead>
                            <tr role=\"row\">
                                <!--<th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Subject ID'|trans }}</th>-->
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Subject Name'|trans }}</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >{{ 'Actions'|trans }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        {%  for sub in subjects %}
                            <tr class=\"gradeA odd\" role=\"row\">
                                <!--<td>-->
                                <!--    {{ sub.id }}-->
                                <!--</td>-->
                                <td>
                                    {{ sub.name }}
                                </td>
                                <td>
                                    <a href=\"{{base_url}}/subject/edit/{{ sub.id }}\" class=\"btn btn-xs btn-default\">{{ 'Edit'|trans }}</a>
                                    <a href=\"{{base_url}}/subject/delete/{{ sub.id }}\" class=\"btn btn-xs btn-danger\">{{ 'Delete'|trans }}</a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "EDUBundle:subjects:layout_all_subjects.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/subjects/layout_all_subjects.html.twig");
    }
}
