<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4effe8aa85ca45cff2be329eea32868e642facf818d6c9915011acaa6fe83de8 extends Twig_Template
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
        $__internal_5d432d1f83cff39b6ca148a45c0bacb871b2bc106695f28d32ee622f05081e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d432d1f83cff39b6ca148a45c0bacb871b2bc106695f28d32ee622f05081e6b->enter($__internal_5d432d1f83cff39b6ca148a45c0bacb871b2bc106695f28d32ee622f05081e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5d432d1f83cff39b6ca148a45c0bacb871b2bc106695f28d32ee622f05081e6b->leave($__internal_5d432d1f83cff39b6ca148a45c0bacb871b2bc106695f28d32ee622f05081e6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
