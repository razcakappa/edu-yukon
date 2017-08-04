<?php

/* EDUBundle:users:layout_new_user.html.twig */
class __TwigTemplate_0bcc8a5124f3657a6b71de38fce6ce249304920e5df662a9074753536b9674bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:users:layout_new_user.html.twig", 1);
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
        $__internal_e2cc3b6e75bbf209547aa00d5d47b3ffb875db3de634e9fc3a6fcc85fcb23b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cc3b6e75bbf209547aa00d5d47b3ffb875db3de634e9fc3a6fcc85fcb23b9c->enter($__internal_e2cc3b6e75bbf209547aa00d5d47b3ffb875db3de634e9fc3a6fcc85fcb23b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:users:layout_new_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2cc3b6e75bbf209547aa00d5d47b3ffb875db3de634e9fc3a6fcc85fcb23b9c->leave($__internal_e2cc3b6e75bbf209547aa00d5d47b3ffb875db3de634e9fc3a6fcc85fcb23b9c_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_eeee66a064c907bd09fa184f8f617e49bfa9d09d9cc3c0416e8b0af63b215ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeee66a064c907bd09fa184f8f617e49bfa9d09d9cc3c0416e8b0af63b215ce5->enter($__internal_eeee66a064c907bd09fa184f8f617e49bfa9d09d9cc3c0416e8b0af63b215ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

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
        
        $__internal_eeee66a064c907bd09fa184f8f617e49bfa9d09d9cc3c0416e8b0af63b215ce5->leave($__internal_eeee66a064c907bd09fa184f8f617e49bfa9d09d9cc3c0416e8b0af63b215ce5_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:users:layout_new_user.html.twig";
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
{% endblock %}", "EDUBundle:users:layout_new_user.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/users/layout_new_user.html.twig");
    }
}
