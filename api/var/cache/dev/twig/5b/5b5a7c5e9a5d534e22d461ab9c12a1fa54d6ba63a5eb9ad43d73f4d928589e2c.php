<?php

/* EDUBundle:class:layout_edit_class.html.twig */
class __TwigTemplate_c14f89f3e4cf3839552cebafe7f2a0bbd0decc343bff6e5ae597bd5f610c500b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:class:layout_edit_class.html.twig", 1);
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
        $__internal_45067e63fc64aef48495c99cd3985fce0491f865c53318e22219053be6d671dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45067e63fc64aef48495c99cd3985fce0491f865c53318e22219053be6d671dc->enter($__internal_45067e63fc64aef48495c99cd3985fce0491f865c53318e22219053be6d671dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:class:layout_edit_class.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45067e63fc64aef48495c99cd3985fce0491f865c53318e22219053be6d671dc->leave($__internal_45067e63fc64aef48495c99cd3985fce0491f865c53318e22219053be6d671dc_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_7e0b87859207642e7fe18c938597db68fa462885f8fc28c72b97229f11a50d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0b87859207642e7fe18c938597db68fa462885f8fc28c72b97229f11a50d38->enter($__internal_7e0b87859207642e7fe18c938597db68fa462885f8fc28c72b97229f11a50d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "/class/edit/subject/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 9, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-xs btn-success\">
                <i class=\"glyphicon glyphicon-plus\"></i>
                ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subjects"), "html", null, true);
        echo "
            </a>
        </div>
    </div>
    <br><br>
    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_7e0b87859207642e7fe18c938597db68fa462885f8fc28c72b97229f11a50d38->leave($__internal_7e0b87859207642e7fe18c938597db68fa462885f8fc28c72b97229f11a50d38_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:class:layout_edit_class.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  71 => 22,  67 => 21,  54 => 11,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}
    
{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            <a href=\"{{base_url}}/class/edit/subject/{{ class.id }}\" class=\"btn btn-xs btn-success\">
                <i class=\"glyphicon glyphicon-plus\"></i>
                {{ 'Subjects'|trans }}
            </a>
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
{% endblock %}", "EDUBundle:class:layout_edit_class.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/class/layout_edit_class.html.twig");
    }
}
