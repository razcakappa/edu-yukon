<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4abacc7f9d93d346bcb271e00d11362998ed1fae2fb7216b13a3f19ba3581c08 extends Twig_Template
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
        $__internal_a4db4dc9e9d29613e27fd7ec3b0fdd90d608ca2c4e4433f9b692fdae93c0c636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4db4dc9e9d29613e27fd7ec3b0fdd90d608ca2c4e4433f9b692fdae93c0c636->enter($__internal_a4db4dc9e9d29613e27fd7ec3b0fdd90d608ca2c4e4433f9b692fdae93c0c636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a4db4dc9e9d29613e27fd7ec3b0fdd90d608ca2c4e4433f9b692fdae93c0c636->leave($__internal_a4db4dc9e9d29613e27fd7ec3b0fdd90d608ca2c4e4433f9b692fdae93c0c636_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
