<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c4abaf2ff84a9e93b5313caa0d2dca913b5753dc62a02169db1c0cf8950b640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32fd13907c32a6f9e8fa27b0540722978a8035cedbb15f3e3e6d2ce5ac64367d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fd13907c32a6f9e8fa27b0540722978a8035cedbb15f3e3e6d2ce5ac64367d->enter($__internal_32fd13907c32a6f9e8fa27b0540722978a8035cedbb15f3e3e6d2ce5ac64367d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32fd13907c32a6f9e8fa27b0540722978a8035cedbb15f3e3e6d2ce5ac64367d->leave($__internal_32fd13907c32a6f9e8fa27b0540722978a8035cedbb15f3e3e6d2ce5ac64367d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_365b353384bb5259e8d1381b794dd9a9a2a5e2be38c3969ee86f7611d753bf9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365b353384bb5259e8d1381b794dd9a9a2a5e2be38c3969ee86f7611d753bf9d->enter($__internal_365b353384bb5259e8d1381b794dd9a9a2a5e2be38c3969ee86f7611d753bf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_365b353384bb5259e8d1381b794dd9a9a2a5e2be38c3969ee86f7611d753bf9d->leave($__internal_365b353384bb5259e8d1381b794dd9a9a2a5e2be38c3969ee86f7611d753bf9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fede964469a1548b4b7e6593a60f8ba1240b5ed0d85b02aa3c52abfbc02d53e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fede964469a1548b4b7e6593a60f8ba1240b5ed0d85b02aa3c52abfbc02d53e3->enter($__internal_fede964469a1548b4b7e6593a60f8ba1240b5ed0d85b02aa3c52abfbc02d53e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fede964469a1548b4b7e6593a60f8ba1240b5ed0d85b02aa3c52abfbc02d53e3->leave($__internal_fede964469a1548b4b7e6593a60f8ba1240b5ed0d85b02aa3c52abfbc02d53e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58f42b1a49737e04354814158af5c41bfd1cfb852c304eab592325cfa4e980cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f42b1a49737e04354814158af5c41bfd1cfb852c304eab592325cfa4e980cf->enter($__internal_58f42b1a49737e04354814158af5c41bfd1cfb852c304eab592325cfa4e980cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_58f42b1a49737e04354814158af5c41bfd1cfb852c304eab592325cfa4e980cf->leave($__internal_58f42b1a49737e04354814158af5c41bfd1cfb852c304eab592325cfa4e980cf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
