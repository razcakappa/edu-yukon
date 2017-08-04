<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_239c56cf8fc3327bbc3674a749b4ba943b708902a12603c446efcd3b1873669c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0dde61363997bfa1e5962521ba444466285d9646946d47f6b6e15dd442eeca04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dde61363997bfa1e5962521ba444466285d9646946d47f6b6e15dd442eeca04->enter($__internal_0dde61363997bfa1e5962521ba444466285d9646946d47f6b6e15dd442eeca04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dde61363997bfa1e5962521ba444466285d9646946d47f6b6e15dd442eeca04->leave($__internal_0dde61363997bfa1e5962521ba444466285d9646946d47f6b6e15dd442eeca04_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7187d71f212de7ec0b5948a05bb051ba76895d6c6964f552d2649846d00c2bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7187d71f212de7ec0b5948a05bb051ba76895d6c6964f552d2649846d00c2bb3->enter($__internal_7187d71f212de7ec0b5948a05bb051ba76895d6c6964f552d2649846d00c2bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_7187d71f212de7ec0b5948a05bb051ba76895d6c6964f552d2649846d00c2bb3->leave($__internal_7187d71f212de7ec0b5948a05bb051ba76895d6c6964f552d2649846d00c2bb3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
