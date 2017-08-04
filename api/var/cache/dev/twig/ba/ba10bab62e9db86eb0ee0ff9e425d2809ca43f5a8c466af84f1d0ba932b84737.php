<?php

/* EDUBundle:beam:createBeam.html.twig */
class __TwigTemplate_3c7ed3e376cbdbabd5574b147454937ece3abc42617b43a8b1617e47c44b67d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CMIBundle::layout.html.twig", "EDUBundle:beam:createBeam.html.twig", 1);
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
        $__internal_957ef041e51ea71bd0f7a995b1539a86dd7fb5e82fcc3e4a038a97a5dcd1531a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957ef041e51ea71bd0f7a995b1539a86dd7fb5e82fcc3e4a038a97a5dcd1531a->enter($__internal_957ef041e51ea71bd0f7a995b1539a86dd7fb5e82fcc3e4a038a97a5dcd1531a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:beam:createBeam.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_957ef041e51ea71bd0f7a995b1539a86dd7fb5e82fcc3e4a038a97a5dcd1531a->leave($__internal_957ef041e51ea71bd0f7a995b1539a86dd7fb5e82fcc3e4a038a97a5dcd1531a_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_b075f3f8128f96d92bdd7664ab26ca46395286f3296ef00c1ec8c919df4e6178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b075f3f8128f96d92bdd7664ab26ca46395286f3296ef00c1ec8c919df4e6178->enter($__internal_b075f3f8128f96d92bdd7664ab26ca46395286f3296ef00c1ec8c919df4e6178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start', array("attr" => array("role" => "form", "enctype" => "multipart/form-data")));
        echo "
                    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        echo "
                    <button type=\"submit\">Save</button>
                    ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_b075f3f8128f96d92bdd7664ab26ca46395286f3296ef00c1ec8c919df4e6178->leave($__internal_b075f3f8128f96d92bdd7664ab26ca46395286f3296ef00c1ec8c919df4e6178_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:beam:createBeam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CMIBundle::layout.html.twig\" %}

{% block cmi_body %}

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    {{ form_start(form, {'attr': {'role': 'form', 'enctype': 'multipart/form-data'}}) }}
                    {{ form_widget(form) }}
                    <button type=\"submit\">Save</button>
                    {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>

{% endblock %}", "EDUBundle:beam:createBeam.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/beam/createBeam.html.twig");
    }
}
