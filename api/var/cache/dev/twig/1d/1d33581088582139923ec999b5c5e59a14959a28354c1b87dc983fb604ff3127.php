<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7639c00a8a7a914034def8b179bdcb89566fad8d0c0a45ab77466b138e06fd9b extends Twig_Template
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
        $__internal_638486cd8d8e807c839406855ecc2a3c5f6497c49cbb3b25b8379b4cb2fd331a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638486cd8d8e807c839406855ecc2a3c5f6497c49cbb3b25b8379b4cb2fd331a->enter($__internal_638486cd8d8e807c839406855ecc2a3c5f6497c49cbb3b25b8379b4cb2fd331a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_638486cd8d8e807c839406855ecc2a3c5f6497c49cbb3b25b8379b4cb2fd331a->leave($__internal_638486cd8d8e807c839406855ecc2a3c5f6497c49cbb3b25b8379b4cb2fd331a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
