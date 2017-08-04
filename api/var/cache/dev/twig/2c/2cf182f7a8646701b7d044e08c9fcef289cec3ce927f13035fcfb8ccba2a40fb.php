<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7b8a4e6245ee79122f7d96a87777db70e5374becf7661f9b7559e045ab8a0d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c5a8475e50a0051d3aca44b9bb0bc33bf09b6c630929d2c9cd0a39592a31dbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a8475e50a0051d3aca44b9bb0bc33bf09b6c630929d2c9cd0a39592a31dbac->enter($__internal_c5a8475e50a0051d3aca44b9bb0bc33bf09b6c630929d2c9cd0a39592a31dbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5a8475e50a0051d3aca44b9bb0bc33bf09b6c630929d2c9cd0a39592a31dbac->leave($__internal_c5a8475e50a0051d3aca44b9bb0bc33bf09b6c630929d2c9cd0a39592a31dbac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5afac3ba1c72461803c3af3622811949ad77679f8cc0d99e1cfadf7cf223ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5afac3ba1c72461803c3af3622811949ad77679f8cc0d99e1cfadf7cf223ca9->enter($__internal_d5afac3ba1c72461803c3af3622811949ad77679f8cc0d99e1cfadf7cf223ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d5afac3ba1c72461803c3af3622811949ad77679f8cc0d99e1cfadf7cf223ca9->leave($__internal_d5afac3ba1c72461803c3af3622811949ad77679f8cc0d99e1cfadf7cf223ca9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
