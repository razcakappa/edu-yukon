<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5f4fdf30c5cb3624a40c62d5b8e8666c31bfabb1f478d999d69411d6af7d02cc extends Twig_Template
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
        $__internal_063be8038067a8fde22ddf25e9d1db628fbde11d9382199a60c4e24be47377b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063be8038067a8fde22ddf25e9d1db628fbde11d9382199a60c4e24be47377b7->enter($__internal_063be8038067a8fde22ddf25e9d1db628fbde11d9382199a60c4e24be47377b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_063be8038067a8fde22ddf25e9d1db628fbde11d9382199a60c4e24be47377b7->leave($__internal_063be8038067a8fde22ddf25e9d1db628fbde11d9382199a60c4e24be47377b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
