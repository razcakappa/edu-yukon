<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_4be6106ed5b99ab8cc298574b1013c99065035b5ca621bed11bb04f4eb457536 extends Twig_Template
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
        $__internal_dd7e1674cd65aa0a042e073e77ac848d943b2837a98ac76324454f44423a5363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7e1674cd65aa0a042e073e77ac848d943b2837a98ac76324454f44423a5363->enter($__internal_dd7e1674cd65aa0a042e073e77ac848d943b2837a98ac76324454f44423a5363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_dd7e1674cd65aa0a042e073e77ac848d943b2837a98ac76324454f44423a5363->leave($__internal_dd7e1674cd65aa0a042e073e77ac848d943b2837a98ac76324454f44423a5363_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
