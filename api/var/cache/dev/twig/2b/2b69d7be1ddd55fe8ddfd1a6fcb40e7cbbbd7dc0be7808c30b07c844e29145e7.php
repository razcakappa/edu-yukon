<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_84ac57a2d0aae3bfcc4c4b17a69d3b90d76a0001ec426157e62c1ca08ed63534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_c804751027f83c571d8f29e862c85709900c65cfd1bb89742bb515cf84d3989f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c804751027f83c571d8f29e862c85709900c65cfd1bb89742bb515cf84d3989f->enter($__internal_c804751027f83c571d8f29e862c85709900c65cfd1bb89742bb515cf84d3989f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c804751027f83c571d8f29e862c85709900c65cfd1bb89742bb515cf84d3989f->leave($__internal_c804751027f83c571d8f29e862c85709900c65cfd1bb89742bb515cf84d3989f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_141c8d21b9793af79064f0a843b64267e064f1c86aa0addf313200902af7f891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141c8d21b9793af79064f0a843b64267e064f1c86aa0addf313200902af7f891->enter($__internal_141c8d21b9793af79064f0a843b64267e064f1c86aa0addf313200902af7f891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_141c8d21b9793af79064f0a843b64267e064f1c86aa0addf313200902af7f891->leave($__internal_141c8d21b9793af79064f0a843b64267e064f1c86aa0addf313200902af7f891_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
