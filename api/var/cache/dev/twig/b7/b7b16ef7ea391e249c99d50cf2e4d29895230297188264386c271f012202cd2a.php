<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6d1628e379bd993c34058916508eb13d981be6daa10036ea94d4f66ea507169c extends Twig_Template
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
        $__internal_263aff7d68f8822973030e28141095c881e32edb4bb636aab5c3ba2e74255d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263aff7d68f8822973030e28141095c881e32edb4bb636aab5c3ba2e74255d51->enter($__internal_263aff7d68f8822973030e28141095c881e32edb4bb636aab5c3ba2e74255d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_263aff7d68f8822973030e28141095c881e32edb4bb636aab5c3ba2e74255d51->leave($__internal_263aff7d68f8822973030e28141095c881e32edb4bb636aab5c3ba2e74255d51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
