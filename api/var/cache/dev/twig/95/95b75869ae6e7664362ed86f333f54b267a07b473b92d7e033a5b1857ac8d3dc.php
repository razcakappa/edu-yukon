<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_10766e020d7234c2d4c6a7c211975d8d7e780bee898ecf18746c465bae00ae54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bd5166c8c23bac657b86f7a834748e8cecc895d43b2d5c38d516ae2c3947599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd5166c8c23bac657b86f7a834748e8cecc895d43b2d5c38d516ae2c3947599->enter($__internal_7bd5166c8c23bac657b86f7a834748e8cecc895d43b2d5c38d516ae2c3947599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7bd5166c8c23bac657b86f7a834748e8cecc895d43b2d5c38d516ae2c3947599->leave($__internal_7bd5166c8c23bac657b86f7a834748e8cecc895d43b2d5c38d516ae2c3947599_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
