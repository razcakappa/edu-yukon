<?php

/* EDUBundle:subjects:layout_subjects_delete.html.twig */
class __TwigTemplate_7842a8ff7ebdac0a29112eac504f53b733b46574cd10faa8951dcf2a47d20ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:subjects:layout_subjects_delete.html.twig", 1);
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
        $__internal_f40d45e251c2c27e3b19df66e6effd6b2a8b3a86bb001369f76cd1bc0ab12d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40d45e251c2c27e3b19df66e6effd6b2a8b3a86bb001369f76cd1bc0ab12d43->enter($__internal_f40d45e251c2c27e3b19df66e6effd6b2a8b3a86bb001369f76cd1bc0ab12d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:subjects:layout_subjects_delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f40d45e251c2c27e3b19df66e6effd6b2a8b3a86bb001369f76cd1bc0ab12d43->leave($__internal_f40d45e251c2c27e3b19df66e6effd6b2a8b3a86bb001369f76cd1bc0ab12d43_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_bde0a42c80dc6d3d84ce5509b0d92d39770d25c92442fe5172b8a9c84d7cb850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde0a42c80dc6d3d84ce5509b0d92d39770d25c92442fe5172b8a9c84d7cb850->enter($__internal_bde0a42c80dc6d3d84ce5509b0d92d39770d25c92442fe5172b8a9c84d7cb850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    ";
        // line 7
        echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h4 class=\"bg-danger\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure to delete subject"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 9, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h4>
                <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo "/subject/delete/confirm/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-sm btn-danger\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, Delete"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 10, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo " </a>
                <br/><br/>
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                            <tbody>
                                <tr class=\"gradeA odd\" role=\"row\">
                                    <td>
                                        ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Class ID"), "html", null, true);
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 21, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo " 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Class Name"), "html", null, true);
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 29, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_bde0a42c80dc6d3d84ce5509b0d92d39770d25c92442fe5172b8a9c84d7cb850->leave($__internal_bde0a42c80dc6d3d84ce5509b0d92d39770d25c92442fe5172b8a9c84d7cb850_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:subjects:layout_subjects_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  83 => 26,  75 => 21,  69 => 18,  52 => 10,  46 => 9,  42 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}

{% block cmi_body %}
    {# {% if is_granted('ROLE_SUPER_ADMIN') %}
        <h4 class=\"bg-warning\"> You Can not delete ADMIN Accounts </h4>
    {% else %} #}
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h4 class=\"bg-danger\">{{ 'Are you sure to delete subject'|trans }} {{ subject.name }}</h4>
                <a href=\"{{base_url}}/subject/delete/confirm/{{ subject.id }}\" class=\"btn btn-sm btn-danger\">{{ 'Yes, Delete'|trans }} {{ subject.name }} </a>
                <br/><br/>
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                            <tbody>
                                <tr class=\"gradeA odd\" role=\"row\">
                                    <td>
                                        {{ 'Class ID'|trans }}
                                    </td>
                                    <td>
                                        {{ subject.id }} 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ 'Class Name'|trans }}
                                    </td>
                                    <td>
                                        {{ subject.name }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {# {% endif %} #}
{% endblock %}
", "EDUBundle:subjects:layout_subjects_delete.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/subjects/layout_subjects_delete.html.twig");
    }
}
