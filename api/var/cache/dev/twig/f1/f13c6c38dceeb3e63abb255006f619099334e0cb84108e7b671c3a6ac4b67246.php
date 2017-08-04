<?php

/* EDUBundle:Form:newuser.html.twig */
class __TwigTemplate_677888e032066f3aa6cab9144a2915488fb8c6831288859540bf9cb406252986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:Form:newuser.html.twig", 1);
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
        $__internal_348f99d980d9824d685a9d3ff1592641901539227f3f963d47d63916d768dd84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348f99d980d9824d685a9d3ff1592641901539227f3f963d47d63916d768dd84->enter($__internal_348f99d980d9824d685a9d3ff1592641901539227f3f963d47d63916d768dd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Form:newuser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_348f99d980d9824d685a9d3ff1592641901539227f3f963d47d63916d768dd84->leave($__internal_348f99d980d9824d685a9d3ff1592641901539227f3f963d47d63916d768dd84_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_555c3976dc6b0ab4e10c9d2bb9222ed648de5ffa2ee3d88d5b517e34a2fe2505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555c3976dc6b0ab4e10c9d2bb9222ed648de5ffa2ee3d88d5b517e34a2fe2505->enter($__internal_555c3976dc6b0ab4e10c9d2bb9222ed648de5ffa2ee3d88d5b517e34a2fe2505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

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
        
        $__internal_555c3976dc6b0ab4e10c9d2bb9222ed648de5ffa2ee3d88d5b517e34a2fe2505->leave($__internal_555c3976dc6b0ab4e10c9d2bb9222ed648de5ffa2ee3d88d5b517e34a2fe2505_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Form:newuser.html.twig";
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
{% endblock %}", "EDUBundle:Form:newuser.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/newuser.html.twig");
    }
}
