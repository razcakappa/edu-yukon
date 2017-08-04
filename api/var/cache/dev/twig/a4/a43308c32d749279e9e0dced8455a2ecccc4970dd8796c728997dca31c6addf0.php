<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_7288759537957fb3cedb96d79fecb50134e0ad463bf6b3a8c3f43efaf67ebbd0 extends Twig_Template
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
        $__internal_e181ec6610e3ba342dd396ef0701e98f74bd00faaa887a8178bf36e134c59ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e181ec6610e3ba342dd396ef0701e98f74bd00faaa887a8178bf36e134c59ea8->enter($__internal_e181ec6610e3ba342dd396ef0701e98f74bd00faaa887a8178bf36e134c59ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e181ec6610e3ba342dd396ef0701e98f74bd00faaa887a8178bf36e134c59ea8->leave($__internal_e181ec6610e3ba342dd396ef0701e98f74bd00faaa887a8178bf36e134c59ea8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
