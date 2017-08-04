<?php

/* EDUBundle:Form:layout_editsub_form.html.twig */
class __TwigTemplate_14ab7374e4e1de5b16d49616e0ffd15a7d4efbfb7b0915876150b83d3441726b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:Form:layout_editsub_form.html.twig", 1);
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
        $__internal_2abace482a1bb084d5838330f2c184ecf7a85f7be4a89bc4a19bab83e0a94197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abace482a1bb084d5838330f2c184ecf7a85f7be4a89bc4a19bab83e0a94197->enter($__internal_2abace482a1bb084d5838330f2c184ecf7a85f7be4a89bc4a19bab83e0a94197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Form:layout_editsub_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2abace482a1bb084d5838330f2c184ecf7a85f7be4a89bc4a19bab83e0a94197->leave($__internal_2abace482a1bb084d5838330f2c184ecf7a85f7be4a89bc4a19bab83e0a94197_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_336f4c61ffd0a355145379bc012839226ba4942497578c34e4df329abf4323d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336f4c61ffd0a355145379bc012839226ba4942497578c34e4df329abf4323d0->enter($__internal_336f4c61ffd0a355145379bc012839226ba4942497578c34e4df329abf4323d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    
\t<div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
    
";
        
        $__internal_336f4c61ffd0a355145379bc012839226ba4942497578c34e4df329abf4323d0->leave($__internal_336f4c61ffd0a355145379bc012839226ba4942497578c34e4df329abf4323d0_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Form:layout_editsub_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}
    
{% block cmi_body %}
    
\t<div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            {{form_start(form)}}
            {{form_widget(form)}}
            {{form_end(form)}}
        </div>
    </div>
    
{% endblock %}", "EDUBundle:Form:layout_editsub_form.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/layout_editsub_form.html.twig");
    }
}
