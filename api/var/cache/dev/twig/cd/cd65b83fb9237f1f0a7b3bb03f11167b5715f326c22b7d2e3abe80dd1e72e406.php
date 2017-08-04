<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_77e2794db49fee0b07ca557a2f674ea381c4186208316a0b6f28bf54a7933e72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_6463000d2691d295174fdef29e46d5827161b7184f5a406f15a4c6de5e44b0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6463000d2691d295174fdef29e46d5827161b7184f5a406f15a4c6de5e44b0bd->enter($__internal_6463000d2691d295174fdef29e46d5827161b7184f5a406f15a4c6de5e44b0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6463000d2691d295174fdef29e46d5827161b7184f5a406f15a4c6de5e44b0bd->leave($__internal_6463000d2691d295174fdef29e46d5827161b7184f5a406f15a4c6de5e44b0bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0934a1ddaac8e9f0b7b39387086f71ad03a11df8889f04a8d4ffa4609515632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0934a1ddaac8e9f0b7b39387086f71ad03a11df8889f04a8d4ffa4609515632->enter($__internal_e0934a1ddaac8e9f0b7b39387086f71ad03a11df8889f04a8d4ffa4609515632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e0934a1ddaac8e9f0b7b39387086f71ad03a11df8889f04a8d4ffa4609515632->leave($__internal_e0934a1ddaac8e9f0b7b39387086f71ad03a11df8889f04a8d4ffa4609515632_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
