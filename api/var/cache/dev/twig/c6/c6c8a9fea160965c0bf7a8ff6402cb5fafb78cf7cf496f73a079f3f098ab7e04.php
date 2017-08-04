<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_5881043ffeee9bc411dee59287c45ecc68db9658d02e43f612fe5f7a98a0713f extends Twig_Template
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
        $__internal_6bd8479af73ed1b3d2ab0f16c982789f124665c5225d12d7516b7107577099f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd8479af73ed1b3d2ab0f16c982789f124665c5225d12d7516b7107577099f1->enter($__internal_6bd8479af73ed1b3d2ab0f16c982789f124665c5225d12d7516b7107577099f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6bd8479af73ed1b3d2ab0f16c982789f124665c5225d12d7516b7107577099f1->leave($__internal_6bd8479af73ed1b3d2ab0f16c982789f124665c5225d12d7516b7107577099f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
