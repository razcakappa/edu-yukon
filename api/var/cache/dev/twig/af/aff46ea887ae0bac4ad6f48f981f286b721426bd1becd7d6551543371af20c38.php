<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_48502014ea5ad49aa176a1e82cbb2dbbf94d15ff6778c4f62fc1778fb2e316ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_25e86d4448bc6dbc57f6aac612178b0f64b49d2fcd07ee339c2f099865b63b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e86d4448bc6dbc57f6aac612178b0f64b49d2fcd07ee339c2f099865b63b12->enter($__internal_25e86d4448bc6dbc57f6aac612178b0f64b49d2fcd07ee339c2f099865b63b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25e86d4448bc6dbc57f6aac612178b0f64b49d2fcd07ee339c2f099865b63b12->leave($__internal_25e86d4448bc6dbc57f6aac612178b0f64b49d2fcd07ee339c2f099865b63b12_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fc27059dfe9cd8a001d2dbac5ca4fb5db6667e9a55e40984a3432625d48f233c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc27059dfe9cd8a001d2dbac5ca4fb5db6667e9a55e40984a3432625d48f233c->enter($__internal_fc27059dfe9cd8a001d2dbac5ca4fb5db6667e9a55e40984a3432625d48f233c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fc27059dfe9cd8a001d2dbac5ca4fb5db6667e9a55e40984a3432625d48f233c->leave($__internal_fc27059dfe9cd8a001d2dbac5ca4fb5db6667e9a55e40984a3432625d48f233c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44e253fb7baab76e1c7cdcc5bd5608aa0d2774f3da68253d656bf43f2733d890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e253fb7baab76e1c7cdcc5bd5608aa0d2774f3da68253d656bf43f2733d890->enter($__internal_44e253fb7baab76e1c7cdcc5bd5608aa0d2774f3da68253d656bf43f2733d890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_44e253fb7baab76e1c7cdcc5bd5608aa0d2774f3da68253d656bf43f2733d890->leave($__internal_44e253fb7baab76e1c7cdcc5bd5608aa0d2774f3da68253d656bf43f2733d890_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e18150c9ff0792628684a65adada955fbbb3dfc78160f8bae003e8e53aad5229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18150c9ff0792628684a65adada955fbbb3dfc78160f8bae003e8e53aad5229->enter($__internal_e18150c9ff0792628684a65adada955fbbb3dfc78160f8bae003e8e53aad5229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e18150c9ff0792628684a65adada955fbbb3dfc78160f8bae003e8e53aad5229->leave($__internal_e18150c9ff0792628684a65adada955fbbb3dfc78160f8bae003e8e53aad5229_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
