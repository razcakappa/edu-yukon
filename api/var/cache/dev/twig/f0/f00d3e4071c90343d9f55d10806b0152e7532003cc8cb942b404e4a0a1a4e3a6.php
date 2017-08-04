<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ccdaf2ac67bb7368302387e7b84ef1a14af19a5ab8a1907e4f734b1784c539ea extends Twig_Template
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
        $__internal_fde78e11d4e42f7f8a84dfd6d8388b1ecdefe1cd141394f20ec9406fc9c4666e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde78e11d4e42f7f8a84dfd6d8388b1ecdefe1cd141394f20ec9406fc9c4666e->enter($__internal_fde78e11d4e42f7f8a84dfd6d8388b1ecdefe1cd141394f20ec9406fc9c4666e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fde78e11d4e42f7f8a84dfd6d8388b1ecdefe1cd141394f20ec9406fc9c4666e->leave($__internal_fde78e11d4e42f7f8a84dfd6d8388b1ecdefe1cd141394f20ec9406fc9c4666e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
