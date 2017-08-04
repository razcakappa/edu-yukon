<?php

/* @FOSUser/Security/login.html.twig.bk-origin */
class __TwigTemplate_778fa653412424f919eb1dd302208e3b23c8c97a589d51ecaaec4721dabeee88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig.bk-origin", 1);
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
        $__internal_1c8bfbe9eb534228dac4f05148aae92bebdc077cf5989b65c45626460dd441e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8bfbe9eb534228dac4f05148aae92bebdc077cf5989b65c45626460dd441e1->enter($__internal_1c8bfbe9eb534228dac4f05148aae92bebdc077cf5989b65c45626460dd441e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig.bk-origin"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c8bfbe9eb534228dac4f05148aae92bebdc077cf5989b65c45626460dd441e1->leave($__internal_1c8bfbe9eb534228dac4f05148aae92bebdc077cf5989b65c45626460dd441e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c855f2db3875ef362284d5318d5364d715b4703b06d9771adacf4f90c9e58264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c855f2db3875ef362284d5318d5364d715b4703b06d9771adacf4f90c9e58264->enter($__internal_c855f2db3875ef362284d5318d5364d715b4703b06d9771adacf4f90c9e58264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c855f2db3875ef362284d5318d5364d715b4703b06d9771adacf4f90c9e58264->leave($__internal_c855f2db3875ef362284d5318d5364d715b4703b06d9771adacf4f90c9e58264_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig.bk-origin";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig.bk-origin", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig.bk-origin");
    }
}
