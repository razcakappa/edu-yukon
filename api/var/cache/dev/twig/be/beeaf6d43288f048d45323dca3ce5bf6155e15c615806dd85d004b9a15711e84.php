<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_39d3b3dbe7e74d516ec46bb462629f98418353636ab93afb394d51175b033017 extends Twig_Template
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
        $__internal_e7da3e285b3682bc4add6164c57a9bf85d5d0dd4cf900b88d11245982ae03d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7da3e285b3682bc4add6164c57a9bf85d5d0dd4cf900b88d11245982ae03d7a->enter($__internal_e7da3e285b3682bc4add6164c57a9bf85d5d0dd4cf900b88d11245982ae03d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e7da3e285b3682bc4add6164c57a9bf85d5d0dd4cf900b88d11245982ae03d7a->leave($__internal_e7da3e285b3682bc4add6164c57a9bf85d5d0dd4cf900b88d11245982ae03d7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
