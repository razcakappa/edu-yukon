<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_caf812a426750f77b8b3cae43e85b939b33b849540308bb90110af69bb994295 extends Twig_Template
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
        $__internal_7ed48181871e49c7c4ef1cf7efe276d4233fdf98b0eae0c16f8cc8925401c3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed48181871e49c7c4ef1cf7efe276d4233fdf98b0eae0c16f8cc8925401c3d3->enter($__internal_7ed48181871e49c7c4ef1cf7efe276d4233fdf98b0eae0c16f8cc8925401c3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7ed48181871e49c7c4ef1cf7efe276d4233fdf98b0eae0c16f8cc8925401c3d3->leave($__internal_7ed48181871e49c7c4ef1cf7efe276d4233fdf98b0eae0c16f8cc8925401c3d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
