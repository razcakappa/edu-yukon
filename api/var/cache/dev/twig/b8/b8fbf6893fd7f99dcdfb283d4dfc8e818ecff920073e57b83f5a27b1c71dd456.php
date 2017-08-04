<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_5c67e18b39bdafb235eb761952a9953e7649c48c2405c82081b3d603cb8cb2b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_c85673571c614d59d3aa9cb5e2d75954780736e0b790e229be4b27819bdcd3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85673571c614d59d3aa9cb5e2d75954780736e0b790e229be4b27819bdcd3bc->enter($__internal_c85673571c614d59d3aa9cb5e2d75954780736e0b790e229be4b27819bdcd3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c85673571c614d59d3aa9cb5e2d75954780736e0b790e229be4b27819bdcd3bc->leave($__internal_c85673571c614d59d3aa9cb5e2d75954780736e0b790e229be4b27819bdcd3bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba24ee2df6747dad169b40a12e012699b1f9ff3ffd5971dc43b1f51968029bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba24ee2df6747dad169b40a12e012699b1f9ff3ffd5971dc43b1f51968029bd3->enter($__internal_ba24ee2df6747dad169b40a12e012699b1f9ff3ffd5971dc43b1f51968029bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ba24ee2df6747dad169b40a12e012699b1f9ff3ffd5971dc43b1f51968029bd3->leave($__internal_ba24ee2df6747dad169b40a12e012699b1f9ff3ffd5971dc43b1f51968029bd3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
