<?php

/* EDUBundle:class:layout_class_delete.html.twig */
class __TwigTemplate_aec35c6c2cb2ffecf9448f7e8fac38f265c147941406b313791b5722388e38d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:class:layout_class_delete.html.twig", 1);
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
        $__internal_76bab0a1d813ff646238e0a37ecd965ffabc5b3ae69fb3b067942a912e9a6382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bab0a1d813ff646238e0a37ecd965ffabc5b3ae69fb3b067942a912e9a6382->enter($__internal_76bab0a1d813ff646238e0a37ecd965ffabc5b3ae69fb3b067942a912e9a6382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:class:layout_class_delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76bab0a1d813ff646238e0a37ecd965ffabc5b3ae69fb3b067942a912e9a6382->leave($__internal_76bab0a1d813ff646238e0a37ecd965ffabc5b3ae69fb3b067942a912e9a6382_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_edc4c8ea7d7a8f7da9871cf8d68e39f9a2c3dfe9434abdc94008a489241fc3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc4c8ea7d7a8f7da9871cf8d68e39f9a2c3dfe9434abdc94008a489241fc3bf->enter($__internal_edc4c8ea7d7a8f7da9871cf8d68e39f9a2c3dfe9434abdc94008a489241fc3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    ";
        // line 7
        echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h4 class=\"bg-danger\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure to delete"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 9, $this->getSourceContext()); })()), "className", array()), "html", null, true);
        echo "</h4>
                <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo "/deleteclass/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-sm btn-danger\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, Delete"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 10, $this->getSourceContext()); })()), "className", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 21, $this->getSourceContext()); })()), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 29, $this->getSourceContext()); })()), "className", array()), "html", null, true);
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
        
        $__internal_edc4c8ea7d7a8f7da9871cf8d68e39f9a2c3dfe9434abdc94008a489241fc3bf->leave($__internal_edc4c8ea7d7a8f7da9871cf8d68e39f9a2c3dfe9434abdc94008a489241fc3bf_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:class:layout_class_delete.html.twig";
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
                <h4 class=\"bg-danger\">{{ 'Are you sure to delete'|trans }}  {{ class.className }}</h4>
                <a href=\"{{base_url}}/deleteclass/{{ class.id }}\" class=\"btn btn-sm btn-danger\">{{ 'Yes, Delete'|trans }} {{ class.className }} </a>
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
                                        {{ class.id }} 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ 'Class Name'|trans }}
                                    </td>
                                    <td>
                                        {{ class.className }}
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
", "EDUBundle:class:layout_class_delete.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/class/layout_class_delete.html.twig");
    }
}
