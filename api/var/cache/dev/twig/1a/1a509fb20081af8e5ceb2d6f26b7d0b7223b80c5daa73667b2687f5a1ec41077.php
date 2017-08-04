<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_51776acf6f3a7333c7c698ecc272207677e48db100c0db86e116b4c281f55b1d extends Twig_Template
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
        $__internal_4c4f06f9147fdca7e6d3703a8ad5a383230fb110233494d94c36d8a70fd98582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4f06f9147fdca7e6d3703a8ad5a383230fb110233494d94c36d8a70fd98582->enter($__internal_4c4f06f9147fdca7e6d3703a8ad5a383230fb110233494d94c36d8a70fd98582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4c4f06f9147fdca7e6d3703a8ad5a383230fb110233494d94c36d8a70fd98582->leave($__internal_4c4f06f9147fdca7e6d3703a8ad5a383230fb110233494d94c36d8a70fd98582_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
