<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_105888d48516b9ac3e5f798c1ac41151581510510d8efbd141db7621f0583f99 extends Twig_Template
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
        $__internal_50f493f46281e579e409ec08980813c2bf0095de23b89c881346533f99c04772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f493f46281e579e409ec08980813c2bf0095de23b89c881346533f99c04772->enter($__internal_50f493f46281e579e409ec08980813c2bf0095de23b89c881346533f99c04772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_50f493f46281e579e409ec08980813c2bf0095de23b89c881346533f99c04772->leave($__internal_50f493f46281e579e409ec08980813c2bf0095de23b89c881346533f99c04772_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
