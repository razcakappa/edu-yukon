<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2fc6ed0aafecc9c5f90e1ea55d1372defe6a123c222b8202c37d781a89a8fa83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_7de96e407ab31495b62fa03efd5a5bf4bc5f5c15ce0643b2eacdda1d3ed1c451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de96e407ab31495b62fa03efd5a5bf4bc5f5c15ce0643b2eacdda1d3ed1c451->enter($__internal_7de96e407ab31495b62fa03efd5a5bf4bc5f5c15ce0643b2eacdda1d3ed1c451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7de96e407ab31495b62fa03efd5a5bf4bc5f5c15ce0643b2eacdda1d3ed1c451->leave($__internal_7de96e407ab31495b62fa03efd5a5bf4bc5f5c15ce0643b2eacdda1d3ed1c451_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5fdace22328845eb327de16738958221b2c7986bc0f89c2058e67633b7c3e64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdace22328845eb327de16738958221b2c7986bc0f89c2058e67633b7c3e64f->enter($__internal_5fdace22328845eb327de16738958221b2c7986bc0f89c2058e67633b7c3e64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5fdace22328845eb327de16738958221b2c7986bc0f89c2058e67633b7c3e64f->leave($__internal_5fdace22328845eb327de16738958221b2c7986bc0f89c2058e67633b7c3e64f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
