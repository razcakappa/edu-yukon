<?php

/* EDUBundle:Form:basic.html.twig */
class __TwigTemplate_d4f45a5784c147c5f3dc014720ca362cbb7495469eda2f517551c70faeeda8b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CMIBundle::layout.html.twig", "EDUBundle:Form:basic.html.twig", 1);
        $this->blocks = array(
            'crossx_body' => array($this, 'block_crossx_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CMIBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0631ac316d5454ddb8742c0d934b68af60ea889fca1376f9846b7ac417da3d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0631ac316d5454ddb8742c0d934b68af60ea889fca1376f9846b7ac417da3d24->enter($__internal_0631ac316d5454ddb8742c0d934b68af60ea889fca1376f9846b7ac417da3d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Form:basic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0631ac316d5454ddb8742c0d934b68af60ea889fca1376f9846b7ac417da3d24->leave($__internal_0631ac316d5454ddb8742c0d934b68af60ea889fca1376f9846b7ac417da3d24_prof);

    }

    // line 3
    public function block_crossx_body($context, array $blocks = array())
    {
        $__internal_8a1a08577aa74a7da6910d7e1d0bfbb2b9ff85ba189749f0df44ec358f5415d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1a08577aa74a7da6910d7e1d0bfbb2b9ff85ba189749f0df44ec358f5415d0->enter($__internal_8a1a08577aa74a7da6910d7e1d0bfbb2b9ff85ba189749f0df44ec358f5415d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crossx_body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start', array("attr" => array("role" => "form")));
        echo "

                    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'rest');
        echo "

                    ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_8a1a08577aa74a7da6910d7e1d0bfbb2b9ff85ba189749f0df44ec358f5415d0->leave($__internal_8a1a08577aa74a7da6910d7e1d0bfbb2b9ff85ba189749f0df44ec358f5415d0_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Form:basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  52 => 11,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CMIBundle::layout.html.twig\" %}

{% block crossx_body %}

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    {{ form_start(form, {'attr': {'role': 'form'}}) }}

                    {{ form_rest(form) }}

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "EDUBundle:Form:basic.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/basic.html.twig");
    }
}
