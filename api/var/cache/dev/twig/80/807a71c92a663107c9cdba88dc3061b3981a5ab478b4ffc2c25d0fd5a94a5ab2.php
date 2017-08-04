<?php

/* EDUBundle:Default/form:createNote.html.twig */
class __TwigTemplate_e1c89c7d844d9b7ab379b62fa3b8f8198240afe2ce67d3a57f671623758ba365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CMIBundle::layout.html.twig", "EDUBundle:Default/form:createNote.html.twig", 3);
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
        $__internal_c1b62f7b634b4ff9ca16d1851a92c2ac94950c2ba255fa1cd6c3ebff216e007b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b62f7b634b4ff9ca16d1851a92c2ac94950c2ba255fa1cd6c3ebff216e007b->enter($__internal_c1b62f7b634b4ff9ca16d1851a92c2ac94950c2ba255fa1cd6c3ebff216e007b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Default/form:createNote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1b62f7b634b4ff9ca16d1851a92c2ac94950c2ba255fa1cd6c3ebff216e007b->leave($__internal_c1b62f7b634b4ff9ca16d1851a92c2ac94950c2ba255fa1cd6c3ebff216e007b_prof);

    }

    // line 5
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_a14959d4399d5dcbd2b461894332ba09538167d0d45739dde5ef9cce2333039a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14959d4399d5dcbd2b461894332ba09538167d0d45739dde5ef9cce2333039a->enter($__internal_a14959d4399d5dcbd2b461894332ba09538167d0d45739dde5ef9cce2333039a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "Section", array()), 'row');
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "noteContent", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["noteLabel"]) {
            // line 15
            echo "                        <h4>Note ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["noteLabel"], "vars", array()), "value", array()), "language", array())), "html", null, true);
            echo "</h4>
                        ";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["noteLabel"], 'widget');
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noteLabel'], $context['_parent'], $context['loop']);
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
        
        $__internal_a14959d4399d5dcbd2b461894332ba09538167d0d45739dde5ef9cce2333039a->leave($__internal_a14959d4399d5dcbd2b461894332ba09538167d0d45739dde5ef9cce2333039a_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Default/form:createNote.html.twig";
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
                    {{ form_start(form, {'attr': {'role': 'form', 'enctype': 'multipart/form-data'}}) }}
                    {{ form_row(form.Section) }}
                    {{ form_row(form.code) }}
                    {% for noteLabel in form.noteContent %}
                        <h4>Note {{ noteLabel.vars.value.language|upper }}</h4>
                        {{ form_widget(noteLabel) }}
                    {% endfor %}
                    <button type=\"submit\">Save</button>
                    {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>

{% endblock %}", "EDUBundle:Default/form:createNote.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Default/form/createNote.html.twig");
    }
}
