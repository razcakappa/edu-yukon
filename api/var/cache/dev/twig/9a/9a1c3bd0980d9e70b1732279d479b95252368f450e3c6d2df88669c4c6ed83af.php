<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_9a9a7649ac992665f4b012722149e0f51e60dbaadedaa9cf055cb7e45e3f4b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1011ffbb7cc3086b777e234d95e6a2d534d9f44c7a55d6eb3b793622a7829b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1011ffbb7cc3086b777e234d95e6a2d534d9f44c7a55d6eb3b793622a7829b1e->enter($__internal_1011ffbb7cc3086b777e234d95e6a2d534d9f44c7a55d6eb3b793622a7829b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1011ffbb7cc3086b777e234d95e6a2d534d9f44c7a55d6eb3b793622a7829b1e->leave($__internal_1011ffbb7cc3086b777e234d95e6a2d534d9f44c7a55d6eb3b793622a7829b1e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_78d00f462a70717e3ef71f3f9fc1eb5433c56ed82b130d1d63773f70c98a6bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d00f462a70717e3ef71f3f9fc1eb5433c56ed82b130d1d63773f70c98a6bdc->enter($__internal_78d00f462a70717e3ef71f3f9fc1eb5433c56ed82b130d1d63773f70c98a6bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_78d00f462a70717e3ef71f3f9fc1eb5433c56ed82b130d1d63773f70c98a6bdc->leave($__internal_78d00f462a70717e3ef71f3f9fc1eb5433c56ed82b130d1d63773f70c98a6bdc_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    {% include 'NelmioApiDocBundle::method.html.twig' %}
                </ul>
            </li>
        </ul>
    </li>
{% endblock content %}
", "NelmioApiDocBundle::resource.html.twig", "/var/www/edu-yukon/api/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/resource.html.twig");
    }
}
