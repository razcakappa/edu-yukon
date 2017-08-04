<?php

/* EDUBundle:users:layout_user_delete.html.twig */
class __TwigTemplate_44200f412696fbc79edb515cece7833b57dc7b4f900726cc916f730cfdcbd807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:users:layout_user_delete.html.twig", 1);
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
        $__internal_35b115da801c6ca2a1cefe3370cb5d0bb3d1d832b6e39a889e23b9ea506fd08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b115da801c6ca2a1cefe3370cb5d0bb3d1d832b6e39a889e23b9ea506fd08c->enter($__internal_35b115da801c6ca2a1cefe3370cb5d0bb3d1d832b6e39a889e23b9ea506fd08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:users:layout_user_delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35b115da801c6ca2a1cefe3370cb5d0bb3d1d832b6e39a889e23b9ea506fd08c->leave($__internal_35b115da801c6ca2a1cefe3370cb5d0bb3d1d832b6e39a889e23b9ea506fd08c_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_82cb8ab163b28fadb20515bd3a499e11bd9abac43ae9259b27793512cd267118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cb8ab163b28fadb20515bd3a499e11bd9abac43ae9259b27793512cd267118->enter($__internal_82cb8ab163b28fadb20515bd3a499e11bd9abac43ae9259b27793512cd267118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    ";
        // line 7
        echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h4 class=\"bg-danger\"> ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure to delete"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
        echo "</h4>
                <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo "/delete/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-sm btn-danger\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, Delete"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo " 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 29, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 29, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone Number"), "html", null, true);
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 45, $this->getSourceContext()); })()), "phoneNumber", array()), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Login"), "html", null, true);
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 53, $this->getSourceContext()); })()), "lastlogin", array()), "Y-m-d H:i:s"), "html", null, true);
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
        
        $__internal_82cb8ab163b28fadb20515bd3a499e11bd9abac43ae9259b27793512cd267118->leave($__internal_82cb8ab163b28fadb20515bd3a499e11bd9abac43ae9259b27793512cd267118_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:users:layout_user_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 53,  129 => 50,  121 => 45,  115 => 42,  107 => 37,  101 => 34,  91 => 29,  85 => 26,  77 => 21,  71 => 18,  54 => 10,  46 => 9,  42 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
                <h4 class=\"bg-danger\"> {{ 'Are you sure to delete'|trans }} {{ user.firstname }} {{ user.lastname }}</h4>
                <a href=\"{{ base_url}}/delete/{{ user.id }}\" class=\"btn btn-sm btn-danger\">{{ 'Yes, Delete'|trans }} {{ user.username }} </a>
                <br/><br/>
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                            <tbody>
                                <tr class=\"gradeA odd\" role=\"row\">
                                    <td>
                                        {{ 'Username'|trans }}
                                    </td>
                                    <td>
                                        {{ user.username }} 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ 'Name'|trans }}
                                    </td>
                                    <td>
                                        {{ user.firstname }} {{ user.lastname }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ 'Email'|trans }}
                                    </td>
                                    <td>
                                        {{ user.email }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ 'Phone Number'|trans }}
                                    </td>
                                    <td>
                                        {{ user.phoneNumber }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ 'Last Login'|trans }}
                                    </td>
                                    <td>
                                        {{ user.lastlogin|date('Y-m-d H:i:s') }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {# {% endif %} #}
{% endblock %}", "EDUBundle:users:layout_user_delete.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/users/layout_user_delete.html.twig");
    }
}
