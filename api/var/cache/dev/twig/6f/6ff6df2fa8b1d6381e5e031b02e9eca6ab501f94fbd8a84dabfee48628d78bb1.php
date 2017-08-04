<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_751794ef29542acf32aa821c4556af939629d51e9ce46c47175068f8fe0fe3de extends Twig_Template
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
        $__internal_90a6534fda0cbeabb1580ae39faa399980c209f9fa427d391e14d1eb1dd9e561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a6534fda0cbeabb1580ae39faa399980c209f9fa427d391e14d1eb1dd9e561->enter($__internal_90a6534fda0cbeabb1580ae39faa399980c209f9fa427d391e14d1eb1dd9e561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_90a6534fda0cbeabb1580ae39faa399980c209f9fa427d391e14d1eb1dd9e561->leave($__internal_90a6534fda0cbeabb1580ae39faa399980c209f9fa427d391e14d1eb1dd9e561_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
