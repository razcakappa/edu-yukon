<?php

/* EDUBundle:Default/form:createSection.html.twig */
class __TwigTemplate_af27f44bb24f52f48fdcb77a851143ce9389a0b29226f2b00bd23892be5fbfa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CMIBundle::layout.html.twig", "EDUBundle:Default/form:createSection.html.twig", 3);
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
        $__internal_06dc071caa90e56d09d939eef427cede5f34d77cdfd6d8f4a742147032356fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06dc071caa90e56d09d939eef427cede5f34d77cdfd6d8f4a742147032356fd4->enter($__internal_06dc071caa90e56d09d939eef427cede5f34d77cdfd6d8f4a742147032356fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Default/form:createSection.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06dc071caa90e56d09d939eef427cede5f34d77cdfd6d8f4a742147032356fd4->leave($__internal_06dc071caa90e56d09d939eef427cede5f34d77cdfd6d8f4a742147032356fd4_prof);

    }

    // line 5
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_4bd40d38513fd8a9f36ee2b04d78ebafb6611a0526fb24a677776a5a65897297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd40d38513fd8a9f36ee2b04d78ebafb6611a0526fb24a677776a5a65897297->enter($__internal_4bd40d38513fd8a9f36ee2b04d78ebafb6611a0526fb24a677776a5a65897297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 6
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
        echo "
                    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "Section1", array()), 'row');
        echo "
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "sectionLabel", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["sectionLabel"]) {
            // line 15
            echo "                        <h4>Section Label ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sectionLabel"], "vars", array()), "value", array()), "language", array()), "html", null, true);
            echo "</h4>
                        ";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["sectionLabel"], 'widget');
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sectionLabel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    <button type=\"submit\">Save</button>
                    ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_4bd40d38513fd8a9f36ee2b04d78ebafb6611a0526fb24a677776a5a65897297->leave($__internal_4bd40d38513fd8a9f36ee2b04d78ebafb6611a0526fb24a677776a5a65897297_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Default/form:createSection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  76 => 18,  68 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  40 => 6,  34 => 5,  11 => 3,);
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
                    {{ form_start(form) }}
                    {{ form_row(form.code) }}
                    {{ form_row(form.Section1) }}
                    {% for sectionLabel in form.sectionLabel %}
                        <h4>Section Label {{ sectionLabel.vars.value.language }}</h4>
                        {{ form_widget(sectionLabel) }}
                    {% endfor %}
                    <button type=\"submit\">Save</button>
                    {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>

{% endblock %}", "EDUBundle:Default/form:createSection.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Default/form/createSection.html.twig");
    }
}
