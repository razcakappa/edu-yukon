<?php

/* EDUBundle:class:layout_new_class.html.twig */
class __TwigTemplate_cb6418f381fe403d81659f2edd77460208245923df423986123e2c5663210494 extends Twig_Template
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
        $__internal_3b5de64cacec13d07131bf117dd0ac3c715b91c4eedf47314a5684dae34a2e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5de64cacec13d07131bf117dd0ac3c715b91c4eedf47314a5684dae34a2e4e->enter($__internal_3b5de64cacec13d07131bf117dd0ac3c715b91c4eedf47314a5684dae34a2e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:class:layout_new_class.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b5de64cacec13d07131bf117dd0ac3c715b91c4eedf47314a5684dae34a2e4e->leave($__internal_3b5de64cacec13d07131bf117dd0ac3c715b91c4eedf47314a5684dae34a2e4e_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_411ca8d8b791c32c45f6cfc7698a5be20eb522fecb09bed453de1b027494fa93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411ca8d8b791c32c45f6cfc7698a5be20eb522fecb09bed453de1b027494fa93->enter($__internal_411ca8d8b791c32c45f6cfc7698a5be20eb522fecb09bed453de1b027494fa93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

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
        
        $__internal_411ca8d8b791c32c45f6cfc7698a5be20eb522fecb09bed453de1b027494fa93->leave($__internal_411ca8d8b791c32c45f6cfc7698a5be20eb522fecb09bed453de1b027494fa93_prof);

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
