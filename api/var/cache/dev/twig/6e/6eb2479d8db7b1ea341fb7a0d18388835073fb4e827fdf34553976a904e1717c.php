<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_e0b7d2ed842d04e5dc04c7e0cfb8a0cdc69e50c605b5be8992945dbfd5122ade extends Twig_Template
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
        $__internal_9b76b27d612bba386419bb7581d04d6982dfa24af4ddf85d7a1e84040a9efa19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b76b27d612bba386419bb7581d04d6982dfa24af4ddf85d7a1e84040a9efa19->enter($__internal_9b76b27d612bba386419bb7581d04d6982dfa24af4ddf85d7a1e84040a9efa19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_9b76b27d612bba386419bb7581d04d6982dfa24af4ddf85d7a1e84040a9efa19->leave($__internal_9b76b27d612bba386419bb7581d04d6982dfa24af4ddf85d7a1e84040a9efa19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
