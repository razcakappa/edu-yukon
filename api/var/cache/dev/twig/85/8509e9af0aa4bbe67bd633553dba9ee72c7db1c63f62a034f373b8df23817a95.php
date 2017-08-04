<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_6d5276096f68857e8edb8f1e1daf2db602d3c50052bc0efb54b15bb687c95326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_1a85eb838699dc9d45e5de8863dc19c231e75cedf3a8cfe772f150b0723d3731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a85eb838699dc9d45e5de8863dc19c231e75cedf3a8cfe772f150b0723d3731->enter($__internal_1a85eb838699dc9d45e5de8863dc19c231e75cedf3a8cfe772f150b0723d3731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a85eb838699dc9d45e5de8863dc19c231e75cedf3a8cfe772f150b0723d3731->leave($__internal_1a85eb838699dc9d45e5de8863dc19c231e75cedf3a8cfe772f150b0723d3731_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc72d6b36e1dc5bbe64807a4b9622c932506cb0aedc165cad01b126106b477ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc72d6b36e1dc5bbe64807a4b9622c932506cb0aedc165cad01b126106b477ee->enter($__internal_dc72d6b36e1dc5bbe64807a4b9622c932506cb0aedc165cad01b126106b477ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_dc72d6b36e1dc5bbe64807a4b9622c932506cb0aedc165cad01b126106b477ee->leave($__internal_dc72d6b36e1dc5bbe64807a4b9622c932506cb0aedc165cad01b126106b477ee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
