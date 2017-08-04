<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_fbeb57ca8c4330b19e437f7db0bc50c8d6dedbf4c7162169a7ea8495133bf930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e64f13ebbd68947fcae1f032fe0c07db08522c8949fd48fb245a26eb978e2489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64f13ebbd68947fcae1f032fe0c07db08522c8949fd48fb245a26eb978e2489->enter($__internal_e64f13ebbd68947fcae1f032fe0c07db08522c8949fd48fb245a26eb978e2489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e64f13ebbd68947fcae1f032fe0c07db08522c8949fd48fb245a26eb978e2489->leave($__internal_e64f13ebbd68947fcae1f032fe0c07db08522c8949fd48fb245a26eb978e2489_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da5421154d00af80697441d7f4ad9a100f16787b89f46ed8a598acccd4c498d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5421154d00af80697441d7f4ad9a100f16787b89f46ed8a598acccd4c498d6->enter($__internal_da5421154d00af80697441d7f4ad9a100f16787b89f46ed8a598acccd4c498d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_da5421154d00af80697441d7f4ad9a100f16787b89f46ed8a598acccd4c498d6->leave($__internal_da5421154d00af80697441d7f4ad9a100f16787b89f46ed8a598acccd4c498d6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0aceb5d7833d25f2a05841aefac7dd6d2ce394e1aa9c14a8c8fdf3c313a1b2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aceb5d7833d25f2a05841aefac7dd6d2ce394e1aa9c14a8c8fdf3c313a1b2b4->enter($__internal_0aceb5d7833d25f2a05841aefac7dd6d2ce394e1aa9c14a8c8fdf3c313a1b2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0aceb5d7833d25f2a05841aefac7dd6d2ce394e1aa9c14a8c8fdf3c313a1b2b4->leave($__internal_0aceb5d7833d25f2a05841aefac7dd6d2ce394e1aa9c14a8c8fdf3c313a1b2b4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
