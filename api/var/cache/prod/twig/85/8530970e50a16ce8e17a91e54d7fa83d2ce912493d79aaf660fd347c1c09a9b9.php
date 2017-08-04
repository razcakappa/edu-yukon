<?php

/* EDUBundle:Default/form:createSection.html.twig */
class __TwigTemplate_6e413bcb0ea05ce44110e02aff3b8fc158a9dcc067715d737e8205c230575e84 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_cmi_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "code", array()), 'row');
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "Section1", array()), 'row');
        echo "
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "sectionLabel", array()));
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>

";
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
        return array (  70 => 19,  67 => 18,  59 => 16,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  31 => 6,  28 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:Default/form:createSection.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Default/form/createSection.html.twig");
    }
}
