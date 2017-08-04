<?php

/* EDUBundle:Default/form:editNote.html.twig */
class __TwigTemplate_df8fdb4bed781fcbe1f937a4013ca9223f3c1885cd14d743d24f52febf3307ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CMIBundle::layout.html.twig", "EDUBundle:Default/form:editNote.html.twig", 3);
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
        $__internal_7003dafe34242b2f196f0d80eef11c2ea531d8a22b08f4256fdd755fd2641927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7003dafe34242b2f196f0d80eef11c2ea531d8a22b08f4256fdd755fd2641927->enter($__internal_7003dafe34242b2f196f0d80eef11c2ea531d8a22b08f4256fdd755fd2641927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Default/form:editNote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7003dafe34242b2f196f0d80eef11c2ea531d8a22b08f4256fdd755fd2641927->leave($__internal_7003dafe34242b2f196f0d80eef11c2ea531d8a22b08f4256fdd755fd2641927_prof);

    }

    // line 5
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_af7b34a80a540f15f678835afc365afe9d88c261f4f5771ef7fdb95de64b9f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7b34a80a540f15f678835afc365afe9d88c261f4f5771ef7fdb95de64b9f91->enter($__internal_af7b34a80a540f15f678835afc365afe9d88c261f4f5771ef7fdb95de64b9f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

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
                    ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_end');
        echo "
                    ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new Twig_Error_Runtime('Variable "form2" does not exist.', 14, $this->getSourceContext()); })()), 'form_start', array("attr" => array("role" => "form", "enctype" => "multipart/form-data")));
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new Twig_Error_Runtime('Variable "form2" does not exist.', 15, $this->getSourceContext()); })()), 'widget');
        echo "
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <div class=\"form-group\">
                                <label>Icon</label>
                                <input type=\"file\" name=\"image\" />
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\">Save</button>
                    ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new Twig_Error_Runtime('Variable "form2" does not exist.', 25, $this->getSourceContext()); })()), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_af7b34a80a540f15f678835afc365afe9d88c261f4f5771ef7fdb95de64b9f91->leave($__internal_af7b34a80a540f15f678835afc365afe9d88c261f4f5771ef7fdb95de64b9f91_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Default/form:editNote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  40 => 6,  34 => 5,  11 => 3,);
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
                    {{ form_end(form) }}
                    {{ form_start(form2, {'attr': {'role': 'form', 'enctype': 'multipart/form-data'}}) }}
                    {{ form_widget(form2) }}
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <div class=\"form-group\">
                                <label>Icon</label>
                                <input type=\"file\" name=\"image\" />
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\">Save</button>
                    {{ form_end(form2) }}

                </div>
            </div>
        </div>
    </div>

{% endblock %}", "EDUBundle:Default/form:editNote.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Default/form/editNote.html.twig");
    }
}
