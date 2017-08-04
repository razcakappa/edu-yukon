<?php

/* EDUBundle:users:layout_parent_info.html.twig */
class __TwigTemplate_bd0aca7b8a158d460c30197135ab2c5fee41100b1cacb2db2318bea30527e40d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:users:layout_parent_info.html.twig", 1);
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
        $__internal_4d7d3bc2f57c6df8456d8c00007ecb970479d2da5b9836c41df6ed9edbf5dca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7d3bc2f57c6df8456d8c00007ecb970479d2da5b9836c41df6ed9edbf5dca6->enter($__internal_4d7d3bc2f57c6df8456d8c00007ecb970479d2da5b9836c41df6ed9edbf5dca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:users:layout_parent_info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d7d3bc2f57c6df8456d8c00007ecb970479d2da5b9836c41df6ed9edbf5dca6->leave($__internal_4d7d3bc2f57c6df8456d8c00007ecb970479d2da5b9836c41df6ed9edbf5dca6_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_9f240e8c1808b3eeb4bc958563bf7fdcd806517c31da21fcaa297ab30544c324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f240e8c1808b3eeb4bc958563bf7fdcd806517c31da21fcaa297ab30544c324->enter($__internal_9f240e8c1808b3eeb4bc958563bf7fdcd806517c31da21fcaa297ab30544c324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_parents");
        echo "\" class=\"btn btn-sm btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go Back"), "html", null, true);
        echo "</a>
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "/user/edit/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-sm btn-default\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo " </a>
            <br/><br/>
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <tbody>
                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "
                                </td>
                                <td>
                                    ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo " 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
        echo "
                                </td>
                                <td>
                                    ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "
                                </td>
                                <td>
                                    ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 34, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone Number"), "html", null, true);
        echo "
                                </td>
                                <td>
                                    ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->getSourceContext()); })()), "phoneNumber", array()), "html", null, true);
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Login"), "html", null, true);
        echo "
                                </td>
                                <td>
                                    ";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 50, $this->getSourceContext()); })()), "lastlogin", array()), "Y-m-d H:i:s"), "html", null, true);
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
        
        $__internal_9f240e8c1808b3eeb4bc958563bf7fdcd806517c31da21fcaa297ab30544c324->leave($__internal_9f240e8c1808b3eeb4bc958563bf7fdcd806517c31da21fcaa297ab30544c324_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:users:layout_parent_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 50,  125 => 47,  117 => 42,  111 => 39,  103 => 34,  97 => 31,  87 => 26,  81 => 23,  73 => 18,  67 => 15,  50 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}

{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <a href=\"{{ path('user_parents') }}\" class=\"btn btn-sm btn-primary\">{{ 'Go Back'|trans }}</a>
            <a href=\"{{base_url}}/user/edit/{{ user.id }}\" class=\"btn btn-sm btn-default\">{{ 'Edit'|trans }} {{ user.username }} </a>
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
{% endblock %}", "EDUBundle:users:layout_parent_info.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/users/layout_parent_info.html.twig");
    }
}
