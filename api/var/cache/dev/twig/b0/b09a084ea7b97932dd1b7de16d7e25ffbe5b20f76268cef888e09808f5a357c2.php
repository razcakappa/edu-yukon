<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_af085ed598173a18e0b236819e6f7bb0debb48a3188e7368c03a9a32a67130a6 extends Twig_Template
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
        $__internal_0f6061e0ec248286981fc5ceb94f0b54808d13ec5888b619f268bcb01dd55768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6061e0ec248286981fc5ceb94f0b54808d13ec5888b619f268bcb01dd55768->enter($__internal_0f6061e0ec248286981fc5ceb94f0b54808d13ec5888b619f268bcb01dd55768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0f6061e0ec248286981fc5ceb94f0b54808d13ec5888b619f268bcb01dd55768->leave($__internal_0f6061e0ec248286981fc5ceb94f0b54808d13ec5888b619f268bcb01dd55768_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
