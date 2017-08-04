<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_3a40b2b3766473a5ddee61e2eb2eb46664359e2462266f3388057c59815ba27c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c039f46c9489256d9df50a64fb17c0c2d19a9a63addf48d124d352a78c302cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c039f46c9489256d9df50a64fb17c0c2d19a9a63addf48d124d352a78c302cc->enter($__internal_4c039f46c9489256d9df50a64fb17c0c2d19a9a63addf48d124d352a78c302cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4c039f46c9489256d9df50a64fb17c0c2d19a9a63addf48d124d352a78c302cc->leave($__internal_4c039f46c9489256d9df50a64fb17c0c2d19a9a63addf48d124d352a78c302cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
