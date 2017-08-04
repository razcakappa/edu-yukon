<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2aa069f341f30693d6212dcb5fa636738be995aba740905c107421f068510de8 extends Twig_Template
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
        $__internal_64b9c1bd77a2592cd61764e6e7d8a22757b0ba222fed44c79510a58d8a353a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b9c1bd77a2592cd61764e6e7d8a22757b0ba222fed44c79510a58d8a353a80->enter($__internal_64b9c1bd77a2592cd61764e6e7d8a22757b0ba222fed44c79510a58d8a353a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_64b9c1bd77a2592cd61764e6e7d8a22757b0ba222fed44c79510a58d8a353a80->leave($__internal_64b9c1bd77a2592cd61764e6e7d8a22757b0ba222fed44c79510a58d8a353a80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
