<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9fcc15293be2aaa79edb681adf248aaa3345c9ef0898cbbd28eade5035639538 extends Twig_Template
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
        $__internal_859f07e7c7981e414031a32da938682ee78e445b00f653ebd71d8a5430e9b5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859f07e7c7981e414031a32da938682ee78e445b00f653ebd71d8a5430e9b5ca->enter($__internal_859f07e7c7981e414031a32da938682ee78e445b00f653ebd71d8a5430e9b5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_859f07e7c7981e414031a32da938682ee78e445b00f653ebd71d8a5430e9b5ca->leave($__internal_859f07e7c7981e414031a32da938682ee78e445b00f653ebd71d8a5430e9b5ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
