<?php

/* EDUBundle:Form:edituser.html.twig */
class __TwigTemplate_1b165eeb29663d0457f962a5580aaa1b280b9a105448ecf4229ce8e0e1469f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:Form:edituser.html.twig", 1);
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
        $__internal_f3c52bec31281c127c311745cb39acc541aac0143367943202af78dabecc1945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c52bec31281c127c311745cb39acc541aac0143367943202af78dabecc1945->enter($__internal_f3c52bec31281c127c311745cb39acc541aac0143367943202af78dabecc1945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Form:edituser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3c52bec31281c127c311745cb39acc541aac0143367943202af78dabecc1945->leave($__internal_f3c52bec31281c127c311745cb39acc541aac0143367943202af78dabecc1945_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_7ef5a5709facb43b856492dd08d559747a31b54042a53fd222f1ba6f125e59bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef5a5709facb43b856492dd08d559747a31b54042a53fd222f1ba6f125e59bc->enter($__internal_7ef5a5709facb43b856492dd08d559747a31b54042a53fd222f1ba6f125e59bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            ";
        // line 9
        if (twig_in_filter("ROLE_TEACHER", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->getSourceContext()); })()), "roles", array()))) {
            // line 10
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "/teacher/edit/class/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\">
                    <i class=\"glyphicon glyphicon-plus\">
                    </i>
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Classes"), "html", null, true);
            echo "
                </a>
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "/teacher/edit/subject/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\">
                    <i class=\"glyphicon glyphicon-plus\">
                    </i>
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subjects"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 21
        echo "            ";
        if (twig_in_filter("ROLE_STUDENT", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->getSourceContext()); })()), "roles", array()))) {
            // line 22
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo "/student/manage/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 22, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage"), "html", null, true);
            echo "</a>
            ";
        }
        // line 24
        echo "        </div>
    </div>
    <br><br>
    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'form_start');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_7ef5a5709facb43b856492dd08d559747a31b54042a53fd222f1ba6f125e59bc->leave($__internal_7ef5a5709facb43b856492dd08d559747a31b54042a53fd222f1ba6f125e59bc_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Form:edituser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  104 => 33,  100 => 32,  90 => 24,  80 => 22,  77 => 21,  71 => 18,  63 => 15,  58 => 13,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}
    
{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            {% if 'ROLE_TEACHER' in user.roles  %}
                <a href=\"{{ base_url}}/teacher/edit/class/{{ user.id }}\" class=\"btn btn-xs btn-success\">
                    <i class=\"glyphicon glyphicon-plus\">
                    </i>
                    {{ 'Classes'|trans }}
                </a>
                <a href=\"{{ base_url}}/teacher/edit/subject/{{ user.id }}\" class=\"btn btn-xs btn-success\">
                    <i class=\"glyphicon glyphicon-plus\">
                    </i>
                    {{ 'Subjects'|trans }}
                </a>
            {% endif %}
            {% if 'ROLE_STUDENT' in user.roles  %}
                <a href=\"{{ base_url}}/student/manage/{{ user.id }}\" class=\"btn btn-xs btn-success\"><i class=\"glyphicon glyphicon-plus\"></i> {{ 'Manage'|trans }}</a>
            {% endif %}
        </div>
    </div>
    <br><br>
    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            {{form_start(form)}}
                {{form_widget(form)}}
            {{form_end(form)}}
        </div>
    </div>
{% endblock %}", "EDUBundle:Form:edituser.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/edituser.html.twig");
    }
}
