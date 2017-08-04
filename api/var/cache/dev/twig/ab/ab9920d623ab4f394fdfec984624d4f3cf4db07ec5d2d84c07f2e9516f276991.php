<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b5f37ff322feb9c6ba0053b386350ea57e31402dd13b8d3a0414fdbc00b3ed6d extends Twig_Template
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
        $__internal_aafd88a0dbdad8c72143c3fa0aa309ed135da0e4b394010422e6f48ee8707be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafd88a0dbdad8c72143c3fa0aa309ed135da0e4b394010422e6f48ee8707be3->enter($__internal_aafd88a0dbdad8c72143c3fa0aa309ed135da0e4b394010422e6f48ee8707be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_aafd88a0dbdad8c72143c3fa0aa309ed135da0e4b394010422e6f48ee8707be3->leave($__internal_aafd88a0dbdad8c72143c3fa0aa309ed135da0e4b394010422e6f48ee8707be3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
