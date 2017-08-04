<?php

/* EDUBundle:class:layout_new_class.html.twig */
class __TwigTemplate_2a3d5e0e339ab329f6926d29a71314c593e744865078ae688169c883c2949ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:class:layout_new_class.html.twig", 1);
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
        $__internal_9276f24fa6316f3ac6d5151e582dc11b5da6f2219b8207d2c0d4be183f071545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9276f24fa6316f3ac6d5151e582dc11b5da6f2219b8207d2c0d4be183f071545->enter($__internal_9276f24fa6316f3ac6d5151e582dc11b5da6f2219b8207d2c0d4be183f071545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:class:layout_new_class.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9276f24fa6316f3ac6d5151e582dc11b5da6f2219b8207d2c0d4be183f071545->leave($__internal_9276f24fa6316f3ac6d5151e582dc11b5da6f2219b8207d2c0d4be183f071545_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_500fbadba36542660b0de92d93f84b45086a7a0f2fc07952537e663b61fbcebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500fbadba36542660b0de92d93f84b45086a7a0f2fc07952537e663b61fbcebe->enter($__internal_500fbadba36542660b0de92d93f84b45086a7a0f2fc07952537e663b61fbcebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_500fbadba36542660b0de92d93f84b45086a7a0f2fc07952537e663b61fbcebe->leave($__internal_500fbadba36542660b0de92d93f84b45086a7a0f2fc07952537e663b61fbcebe_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:class:layout_new_class.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}
    
{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            {{form_start(form)}}
            {{form_widget(form)}}
            {{form_end(form)}}
        </div>
    </div>
{% endblock %}", "EDUBundle:class:layout_new_class.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/class/layout_new_class.html.twig");
    }
}
