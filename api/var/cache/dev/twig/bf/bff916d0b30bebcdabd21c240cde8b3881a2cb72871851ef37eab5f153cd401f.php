<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_78c627ab3881c72190f7772311ebbfca92755ee6024dd4b74af8b4e0b6a3c308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_bffe7eca5e30ff657bcaf86c1ad5879139d385be209495408d65397f756bb0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffe7eca5e30ff657bcaf86c1ad5879139d385be209495408d65397f756bb0ee->enter($__internal_bffe7eca5e30ff657bcaf86c1ad5879139d385be209495408d65397f756bb0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bffe7eca5e30ff657bcaf86c1ad5879139d385be209495408d65397f756bb0ee->leave($__internal_bffe7eca5e30ff657bcaf86c1ad5879139d385be209495408d65397f756bb0ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c2bbb821e0745b9be6f64ac774188a51f727b7719341e30f43a1f5e9bd9340c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2bbb821e0745b9be6f64ac774188a51f727b7719341e30f43a1f5e9bd9340c->enter($__internal_1c2bbb821e0745b9be6f64ac774188a51f727b7719341e30f43a1f5e9bd9340c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1c2bbb821e0745b9be6f64ac774188a51f727b7719341e30f43a1f5e9bd9340c->leave($__internal_1c2bbb821e0745b9be6f64ac774188a51f727b7719341e30f43a1f5e9bd9340c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
