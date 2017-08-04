<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_4fc9553ca03b86bbf58a9f8261ef578f6b4b722a029b617fc2e06ba840f888fc extends Twig_Template
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
        $__internal_ca165ff9aaad55a03c8f99eda6b6524908418624bf516459ef1a3aa5d6b93906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca165ff9aaad55a03c8f99eda6b6524908418624bf516459ef1a3aa5d6b93906->enter($__internal_ca165ff9aaad55a03c8f99eda6b6524908418624bf516459ef1a3aa5d6b93906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_ca165ff9aaad55a03c8f99eda6b6524908418624bf516459ef1a3aa5d6b93906->leave($__internal_ca165ff9aaad55a03c8f99eda6b6524908418624bf516459ef1a3aa5d6b93906_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
