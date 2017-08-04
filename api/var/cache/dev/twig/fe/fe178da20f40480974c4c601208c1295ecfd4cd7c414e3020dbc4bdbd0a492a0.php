<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d2f29aec7886f6987b34964458d9de8a24ba43af513c9bdc9cd9611438873519 extends Twig_Template
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
        $__internal_01a5d5286cb8e9667466ee54ee7561aeeae56a13a4725f9a8a8b0ba68e25bde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a5d5286cb8e9667466ee54ee7561aeeae56a13a4725f9a8a8b0ba68e25bde3->enter($__internal_01a5d5286cb8e9667466ee54ee7561aeeae56a13a4725f9a8a8b0ba68e25bde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_01a5d5286cb8e9667466ee54ee7561aeeae56a13a4725f9a8a8b0ba68e25bde3->leave($__internal_01a5d5286cb8e9667466ee54ee7561aeeae56a13a4725f9a8a8b0ba68e25bde3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
