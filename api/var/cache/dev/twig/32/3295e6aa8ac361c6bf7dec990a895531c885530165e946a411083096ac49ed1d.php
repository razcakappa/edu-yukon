<?php

/* EDUBundle:users:layout_edit_user.html.twig */
class __TwigTemplate_c7b7b8cad5f3597b6f4819575b63b2cb8ee44ab0076b946ddf5126ea9057c02e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:users:layout_edit_user.html.twig", 1);
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
        $__internal_adb66fab188da6ab20d16dfd4b593d141dc79b1f7a32999a00c62b1567d49e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb66fab188da6ab20d16dfd4b593d141dc79b1f7a32999a00c62b1567d49e35->enter($__internal_adb66fab188da6ab20d16dfd4b593d141dc79b1f7a32999a00c62b1567d49e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:users:layout_edit_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adb66fab188da6ab20d16dfd4b593d141dc79b1f7a32999a00c62b1567d49e35->leave($__internal_adb66fab188da6ab20d16dfd4b593d141dc79b1f7a32999a00c62b1567d49e35_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_c2a8bd75de9d1056a0860b7617591f6fd8d2730199cf33d0fea02551e1c1798f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a8bd75de9d1056a0860b7617591f6fd8d2730199cf33d0fea02551e1c1798f->enter($__internal_c2a8bd75de9d1056a0860b7617591f6fd8d2730199cf33d0fea02551e1c1798f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

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
        
        $__internal_c2a8bd75de9d1056a0860b7617591f6fd8d2730199cf33d0fea02551e1c1798f->leave($__internal_c2a8bd75de9d1056a0860b7617591f6fd8d2730199cf33d0fea02551e1c1798f_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:users:layout_edit_user.html.twig";
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
{% endblock %}", "EDUBundle:users:layout_edit_user.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/users/layout_edit_user.html.twig");
    }
}
