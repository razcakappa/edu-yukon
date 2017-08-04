<?php

/* EDUBundle:Default/form:createMessage.html.twig */
class __TwigTemplate_d348a53587bc078de28dfcee2523626a73a4e7411a94596f12556b591b641a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CMIBundle::layout.html.twig", "EDUBundle:Default/form:createMessage.html.twig", 3);
        $this->blocks = array(
            'cmi_body' => array($this, 'block_cmi_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CMIBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba791449bed3d3c335e854c1a582367930ba278a484ccf6cc07c216bef155348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba791449bed3d3c335e854c1a582367930ba278a484ccf6cc07c216bef155348->enter($__internal_ba791449bed3d3c335e854c1a582367930ba278a484ccf6cc07c216bef155348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Default/form:createMessage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba791449bed3d3c335e854c1a582367930ba278a484ccf6cc07c216bef155348->leave($__internal_ba791449bed3d3c335e854c1a582367930ba278a484ccf6cc07c216bef155348_prof);

    }

    // line 5
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_799bf56054a5e7c064cd1dd7eee1a05a022c2850ac16de1853032078d5143241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799bf56054a5e7c064cd1dd7eee1a05a022c2850ac16de1853032078d5143241->enter($__internal_799bf56054a5e7c064cd1dd7eee1a05a022c2850ac16de1853032078d5143241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 6
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start', array("attr" => array("role" => "form", "enctype" => "multipart/form-data")));
        echo "
                    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'widget');
        echo "
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <div class=\"form-group\">
                                <label>File</label>
                                <input type=\"file\" name=\"image\" />
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\">Save</button>
                    ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_799bf56054a5e7c064cd1dd7eee1a05a022c2850ac16de1853032078d5143241->leave($__internal_799bf56054a5e7c064cd1dd7eee1a05a022c2850ac16de1853032078d5143241_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Default/form:createMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  51 => 12,  47 => 11,  40 => 6,  34 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends \"CMIBundle::layout.html.twig\" %}

{% block cmi_body %}

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    {{ form_start(form, {'attr': {'role': 'form', 'enctype': 'multipart/form-data'}}) }}
                    {{ form_widget(form) }}
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <div class=\"form-group\">
                                <label>File</label>
                                <input type=\"file\" name=\"image\" />
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\">Save</button>
                    {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>

{% endblock %}", "EDUBundle:Default/form:createMessage.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Default/form/createMessage.html.twig");
    }
}
