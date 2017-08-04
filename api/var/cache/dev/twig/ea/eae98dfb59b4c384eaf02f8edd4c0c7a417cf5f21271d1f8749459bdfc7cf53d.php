<?php

/* EDUBundle:Form:newuser.html.twig */
class __TwigTemplate_58e06d6325092b3c42d8376eefea49713f60a913d06a897ee4294e4694694486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:Form:newuser.html.twig", 1);
        $this->blocks = array(
            'cmi_body' => array($this, 'block_cmi_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EDUBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_813e0717d407069bd616775bb962e086fe0b61608b28598a2fe3e9b07dea9f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813e0717d407069bd616775bb962e086fe0b61608b28598a2fe3e9b07dea9f37->enter($__internal_813e0717d407069bd616775bb962e086fe0b61608b28598a2fe3e9b07dea9f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Form:newuser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_813e0717d407069bd616775bb962e086fe0b61608b28598a2fe3e9b07dea9f37->leave($__internal_813e0717d407069bd616775bb962e086fe0b61608b28598a2fe3e9b07dea9f37_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_c8d9e00f0b3fba1c0a91719b2dbbd9662c5fb16ebb7dc8ed9477f41cf5f1a663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d9e00f0b3fba1c0a91719b2dbbd9662c5fb16ebb7dc8ed9477f41cf5f1a663->enter($__internal_c8d9e00f0b3fba1c0a91719b2dbbd9662c5fb16ebb7dc8ed9477f41cf5f1a663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "
                ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_c8d9e00f0b3fba1c0a91719b2dbbd9662c5fb16ebb7dc8ed9477f41cf5f1a663->leave($__internal_c8d9e00f0b3fba1c0a91719b2dbbd9662c5fb16ebb7dc8ed9477f41cf5f1a663_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Form:newuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}
    
{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            {{form_start(form)}}
                {{form_widget(form)}}
            {{form_end(form)}}
        </div>
    </div>
{% endblock %}", "EDUBundle:Form:newuser.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/newuser.html.twig");
    }
}
