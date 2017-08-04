<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_34086647f2b2f20f8dee9da993d945926630c5485259c92291bc5a06d3d273cd extends Twig_Template
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
        $__internal_92678b56345ada9a7cf2e803b309cb2608452d3a610b7de9e2a97dfb1b1ae149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92678b56345ada9a7cf2e803b309cb2608452d3a610b7de9e2a97dfb1b1ae149->enter($__internal_92678b56345ada9a7cf2e803b309cb2608452d3a610b7de9e2a97dfb1b1ae149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_92678b56345ada9a7cf2e803b309cb2608452d3a610b7de9e2a97dfb1b1ae149->leave($__internal_92678b56345ada9a7cf2e803b309cb2608452d3a610b7de9e2a97dfb1b1ae149_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
