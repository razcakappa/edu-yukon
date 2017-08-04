<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5fa4f4d9ef14614a324aef25a309bb039ca0b18a7be282bde79eb35af0450c3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1ec14b813509681b1794f958b6013f61bfa18b7b6e97bd22e4fd36c5b2224091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec14b813509681b1794f958b6013f61bfa18b7b6e97bd22e4fd36c5b2224091->enter($__internal_1ec14b813509681b1794f958b6013f61bfa18b7b6e97bd22e4fd36c5b2224091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ec14b813509681b1794f958b6013f61bfa18b7b6e97bd22e4fd36c5b2224091->leave($__internal_1ec14b813509681b1794f958b6013f61bfa18b7b6e97bd22e4fd36c5b2224091_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4137ec9ba1b8faafbdfb82ef26c9c9636c72ee94983556ecb11db042ebb00c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4137ec9ba1b8faafbdfb82ef26c9c9636c72ee94983556ecb11db042ebb00c25->enter($__internal_4137ec9ba1b8faafbdfb82ef26c9c9636c72ee94983556ecb11db042ebb00c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4137ec9ba1b8faafbdfb82ef26c9c9636c72ee94983556ecb11db042ebb00c25->leave($__internal_4137ec9ba1b8faafbdfb82ef26c9c9636c72ee94983556ecb11db042ebb00c25_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_378f7cd28a11c539cb6d59838cc1f68d1039139fdffb4060195dbb313a472353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378f7cd28a11c539cb6d59838cc1f68d1039139fdffb4060195dbb313a472353->enter($__internal_378f7cd28a11c539cb6d59838cc1f68d1039139fdffb4060195dbb313a472353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_378f7cd28a11c539cb6d59838cc1f68d1039139fdffb4060195dbb313a472353->leave($__internal_378f7cd28a11c539cb6d59838cc1f68d1039139fdffb4060195dbb313a472353_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f19be47bb05f54b2a65ea8ee17148dbc20b2bf68d1110d34b1b7864e26c578a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19be47bb05f54b2a65ea8ee17148dbc20b2bf68d1110d34b1b7864e26c578a1->enter($__internal_f19be47bb05f54b2a65ea8ee17148dbc20b2bf68d1110d34b1b7864e26c578a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f19be47bb05f54b2a65ea8ee17148dbc20b2bf68d1110d34b1b7864e26c578a1->leave($__internal_f19be47bb05f54b2a65ea8ee17148dbc20b2bf68d1110d34b1b7864e26c578a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
