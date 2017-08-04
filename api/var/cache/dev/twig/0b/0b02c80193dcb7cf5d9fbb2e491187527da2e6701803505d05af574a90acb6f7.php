<?php

/* EDUBundle:Form:layout_commom_hall.html.twig */
class __TwigTemplate_d70e6f469c9135e5aa1d3d40098db10c000baa06d3287211b11ce6a9d480966a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:Form:layout_commom_hall.html.twig", 1);
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
        $__internal_5f0416218d0a0bf37791f022d4a50102b52090b0ba97dcc4c107170c0c7ba193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0416218d0a0bf37791f022d4a50102b52090b0ba97dcc4c107170c0c7ba193->enter($__internal_5f0416218d0a0bf37791f022d4a50102b52090b0ba97dcc4c107170c0c7ba193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Form:layout_commom_hall.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f0416218d0a0bf37791f022d4a50102b52090b0ba97dcc4c107170c0c7ba193->leave($__internal_5f0416218d0a0bf37791f022d4a50102b52090b0ba97dcc4c107170c0c7ba193_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_28fdb446a3eabc522120b0844e0d5ac6d715538fa48cfaef64397cdac741abaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28fdb446a3eabc522120b0844e0d5ac6d715538fa48cfaef64397cdac741abaf->enter($__internal_28fdb446a3eabc522120b0844e0d5ac6d715538fa48cfaef64397cdac741abaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <p>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_28fdb446a3eabc522120b0844e0d5ac6d715538fa48cfaef64397cdac741abaf->leave($__internal_28fdb446a3eabc522120b0844e0d5ac6d715538fa48cfaef64397cdac741abaf_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Form:layout_commom_hall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  59 => 15,  55 => 14,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}
    
{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <p>{{ message }}</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            {{form_start(form)}}
            {{form_widget(form)}}
            {{form_end(form)}}
        </div>
    </div>
{% endblock %}", "EDUBundle:Form:layout_commom_hall.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/layout_commom_hall.html.twig");
    }
}
