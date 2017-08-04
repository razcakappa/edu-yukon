<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_84025baf01224e057b2002df2ecab908a116c9096f3a5cff98b9e92e1ca73a0b extends Twig_Template
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
        $__internal_9ef7be48ea6a3677e696e23b9fdcb8ab653c352d8c6f3dbb0aaaaa6980a7a647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef7be48ea6a3677e696e23b9fdcb8ab653c352d8c6f3dbb0aaaaa6980a7a647->enter($__internal_9ef7be48ea6a3677e696e23b9fdcb8ab653c352d8c6f3dbb0aaaaa6980a7a647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9ef7be48ea6a3677e696e23b9fdcb8ab653c352d8c6f3dbb0aaaaa6980a7a647->leave($__internal_9ef7be48ea6a3677e696e23b9fdcb8ab653c352d8c6f3dbb0aaaaa6980a7a647_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
