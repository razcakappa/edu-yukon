<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_59abaffd13a5b44a37d9d3684ccd320d4020220fa56838ffda4698db85721d7e extends Twig_Template
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
        $__internal_f278f125d7ba0d9f6a9934f45dfb718fa3ca4f4611cb12027d320fce35cb6cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f278f125d7ba0d9f6a9934f45dfb718fa3ca4f4611cb12027d320fce35cb6cd9->enter($__internal_f278f125d7ba0d9f6a9934f45dfb718fa3ca4f4611cb12027d320fce35cb6cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f278f125d7ba0d9f6a9934f45dfb718fa3ca4f4611cb12027d320fce35cb6cd9->leave($__internal_f278f125d7ba0d9f6a9934f45dfb718fa3ca4f4611cb12027d320fce35cb6cd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
