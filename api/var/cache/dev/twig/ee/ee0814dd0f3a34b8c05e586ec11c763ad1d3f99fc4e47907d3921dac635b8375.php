<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_03f7c2324e035b7bb48fa1b8470776f2b61c2e9507218ed311b27951a124be74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d371d165e0db2cdda70132f3409cae5d3330d45fd0e0e656ff9b56b7836f6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d371d165e0db2cdda70132f3409cae5d3330d45fd0e0e656ff9b56b7836f6e5->enter($__internal_9d371d165e0db2cdda70132f3409cae5d3330d45fd0e0e656ff9b56b7836f6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9d371d165e0db2cdda70132f3409cae5d3330d45fd0e0e656ff9b56b7836f6e5->leave($__internal_9d371d165e0db2cdda70132f3409cae5d3330d45fd0e0e656ff9b56b7836f6e5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2aa07b84a5d3c1761afcdbe665aa1c13615cb11970d0d1c74ca0b6644a8719e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa07b84a5d3c1761afcdbe665aa1c13615cb11970d0d1c74ca0b6644a8719e7->enter($__internal_2aa07b84a5d3c1761afcdbe665aa1c13615cb11970d0d1c74ca0b6644a8719e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2aa07b84a5d3c1761afcdbe665aa1c13615cb11970d0d1c74ca0b6644a8719e7->leave($__internal_2aa07b84a5d3c1761afcdbe665aa1c13615cb11970d0d1c74ca0b6644a8719e7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
