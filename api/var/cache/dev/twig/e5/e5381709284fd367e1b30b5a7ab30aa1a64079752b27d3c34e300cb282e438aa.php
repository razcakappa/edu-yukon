<?php

/* EDUBundle:Default/form:createUser.html.twig */
class __TwigTemplate_1597d5f04158c887ba5e3e90f59da7372157ec6858d6ac89691798499e24da09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CMIBundle::layout.html.twig", "EDUBundle:Default/form:createUser.html.twig", 1);
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
        $__internal_8c9e70d87f6f9e9dde95928e90f52b83fc4b4adb7bf44ee39208e94c43ed4e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9e70d87f6f9e9dde95928e90f52b83fc4b4adb7bf44ee39208e94c43ed4e02->enter($__internal_8c9e70d87f6f9e9dde95928e90f52b83fc4b4adb7bf44ee39208e94c43ed4e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Default/form:createUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c9e70d87f6f9e9dde95928e90f52b83fc4b4adb7bf44ee39208e94c43ed4e02->leave($__internal_8c9e70d87f6f9e9dde95928e90f52b83fc4b4adb7bf44ee39208e94c43ed4e02_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_9fabf06dbca4936c3536216e6bbe04253e1d5affb484e1f3449cb02b1f068914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fabf06dbca4936c3536216e6bbe04253e1d5affb484e1f3449cb02b1f068914->enter($__internal_9fabf06dbca4936c3536216e6bbe04253e1d5affb484e1f3449cb02b1f068914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "
                    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'widget');
        echo "
                    <button type=\"submit\">Save</button>
                    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_9fabf06dbca4936c3536216e6bbe04253e1d5affb484e1f3449cb02b1f068914->leave($__internal_9fabf06dbca4936c3536216e6bbe04253e1d5affb484e1f3449cb02b1f068914_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Default/form:createUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CMIBundle::layout.html.twig\" %}

{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    {{ form_start(form) }}
                    {{ form_widget(form) }}
                    <button type=\"submit\">Save</button>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "EDUBundle:Default/form:createUser.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Default/form/createUser.html.twig");
    }
}
