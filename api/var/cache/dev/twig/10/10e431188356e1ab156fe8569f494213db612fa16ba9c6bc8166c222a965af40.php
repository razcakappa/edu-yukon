<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ef09a5bdc3b74b1cbbc37b3cc713c7e41bf30a1d95496f86ed478c6d906cc217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cf9be5c8c67a2bba1def33399536bdcdfa49c999f81d1ddd1f7b4578c4b8894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf9be5c8c67a2bba1def33399536bdcdfa49c999f81d1ddd1f7b4578c4b8894->enter($__internal_9cf9be5c8c67a2bba1def33399536bdcdfa49c999f81d1ddd1f7b4578c4b8894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cf9be5c8c67a2bba1def33399536bdcdfa49c999f81d1ddd1f7b4578c4b8894->leave($__internal_9cf9be5c8c67a2bba1def33399536bdcdfa49c999f81d1ddd1f7b4578c4b8894_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60fd7973d8efe686e2bfc5a3397bc6dbeb0dd35a0a362c9a30f11990708130a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60fd7973d8efe686e2bfc5a3397bc6dbeb0dd35a0a362c9a30f11990708130a4->enter($__internal_60fd7973d8efe686e2bfc5a3397bc6dbeb0dd35a0a362c9a30f11990708130a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_60fd7973d8efe686e2bfc5a3397bc6dbeb0dd35a0a362c9a30f11990708130a4->leave($__internal_60fd7973d8efe686e2bfc5a3397bc6dbeb0dd35a0a362c9a30f11990708130a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
