<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_7343871441c3ee8be040a911c386160bd6f357c3acf400f2dee9e335fcf13c98 extends Twig_Template
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
        $__internal_07420496b50b5bd0e76577ed3066ac98c7e4f0f7c3d84ea099d9080f63d31427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07420496b50b5bd0e76577ed3066ac98c7e4f0f7c3d84ea099d9080f63d31427->enter($__internal_07420496b50b5bd0e76577ed3066ac98c7e4f0f7c3d84ea099d9080f63d31427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_07420496b50b5bd0e76577ed3066ac98c7e4f0f7c3d84ea099d9080f63d31427->leave($__internal_07420496b50b5bd0e76577ed3066ac98c7e4f0f7c3d84ea099d9080f63d31427_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
