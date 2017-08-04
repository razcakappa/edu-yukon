<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_308be1fd0a9e45d43b5a162e951263a3f8b7bacf293d82899ceafcf789332a22 extends Twig_Template
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
        $__internal_c33984d738b762088a2930eaa08ca5cec344f3404d282dc37471a53e7689ca79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33984d738b762088a2930eaa08ca5cec344f3404d282dc37471a53e7689ca79->enter($__internal_c33984d738b762088a2930eaa08ca5cec344f3404d282dc37471a53e7689ca79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c33984d738b762088a2930eaa08ca5cec344f3404d282dc37471a53e7689ca79->leave($__internal_c33984d738b762088a2930eaa08ca5cec344f3404d282dc37471a53e7689ca79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
