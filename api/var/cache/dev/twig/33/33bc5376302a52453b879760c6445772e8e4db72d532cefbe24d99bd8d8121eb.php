<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4eace393afa27106fa3d35f164f0804689879a3c81cd926f1ad65499d7ab8a1d extends Twig_Template
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
        $__internal_968bab7f15bf8b53499cc673030c7305ef2a9cd33419780ada747d8476b3d6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968bab7f15bf8b53499cc673030c7305ef2a9cd33419780ada747d8476b3d6ad->enter($__internal_968bab7f15bf8b53499cc673030c7305ef2a9cd33419780ada747d8476b3d6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_968bab7f15bf8b53499cc673030c7305ef2a9cd33419780ada747d8476b3d6ad->leave($__internal_968bab7f15bf8b53499cc673030c7305ef2a9cd33419780ada747d8476b3d6ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
