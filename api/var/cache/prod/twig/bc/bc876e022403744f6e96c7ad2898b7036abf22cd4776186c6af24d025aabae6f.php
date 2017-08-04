<?php

/* EDUBundle:Default/form:editNote.html.twig */
class __TwigTemplate_cb79190242e9fc2675a4c1b657de251fe434e53c8ea8bce0500770ead753778b extends Twig_Template
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("role" => "form", "enctype" => "multipart/form-data")));
        echo "
                    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                    ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                    ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form2"] ?? null), 'form_start', array("attr" => array("role" => "form", "enctype" => "multipart/form-data")));
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form2"] ?? null), 'widget');
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form2"] ?? null), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>

";
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
        return array (  67 => 25,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  31 => 6,  28 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:Default/form:editNote.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Default/form/editNote.html.twig");
    }
}
