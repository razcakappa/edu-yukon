<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_911525180a3827f7c29ca06ed031e736bc695f424fe5a18c1d025ef32438cc7e extends Twig_Template
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
        $__internal_db417e48f4ee173de3787efe1943945b9531715f318c7f700168b0c9499f562a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db417e48f4ee173de3787efe1943945b9531715f318c7f700168b0c9499f562a->enter($__internal_db417e48f4ee173de3787efe1943945b9531715f318c7f700168b0c9499f562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_db417e48f4ee173de3787efe1943945b9531715f318c7f700168b0c9499f562a->leave($__internal_db417e48f4ee173de3787efe1943945b9531715f318c7f700168b0c9499f562a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
