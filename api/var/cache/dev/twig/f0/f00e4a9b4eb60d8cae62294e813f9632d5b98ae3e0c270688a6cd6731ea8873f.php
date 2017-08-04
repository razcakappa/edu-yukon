<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_fc61bd56190b32d7066b4527078e1bb46b9a0edef34fe7453448b3aabb755e43 extends Twig_Template
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
        $__internal_1bad0a65a278bf047c105f36a2a2879f7577106556d96088e58f0bc9d15a658d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bad0a65a278bf047c105f36a2a2879f7577106556d96088e58f0bc9d15a658d->enter($__internal_1bad0a65a278bf047c105f36a2a2879f7577106556d96088e58f0bc9d15a658d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1bad0a65a278bf047c105f36a2a2879f7577106556d96088e58f0bc9d15a658d->leave($__internal_1bad0a65a278bf047c105f36a2a2879f7577106556d96088e58f0bc9d15a658d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
