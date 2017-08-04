<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9b860a2124518226530cb64d82b256c4dbb06895e7a7d3c8fdcc2c51510d1682 extends Twig_Template
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
        $__internal_7a195c2ccca59253f8bcc4181cd1494ac4efbd1093a819ea427e85d08398d19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a195c2ccca59253f8bcc4181cd1494ac4efbd1093a819ea427e85d08398d19a->enter($__internal_7a195c2ccca59253f8bcc4181cd1494ac4efbd1093a819ea427e85d08398d19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7a195c2ccca59253f8bcc4181cd1494ac4efbd1093a819ea427e85d08398d19a->leave($__internal_7a195c2ccca59253f8bcc4181cd1494ac4efbd1093a819ea427e85d08398d19a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
