<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ac36c0f832f575947775b5a9d2c54aadee9cd7e1d5527916185769ce2a9d5bf0 extends Twig_Template
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
        $__internal_ee85478cda9c07daffeb7542f9380352e008f980d03ac3d41b25c6fef507f6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee85478cda9c07daffeb7542f9380352e008f980d03ac3d41b25c6fef507f6c6->enter($__internal_ee85478cda9c07daffeb7542f9380352e008f980d03ac3d41b25c6fef507f6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ee85478cda9c07daffeb7542f9380352e008f980d03ac3d41b25c6fef507f6c6->leave($__internal_ee85478cda9c07daffeb7542f9380352e008f980d03ac3d41b25c6fef507f6c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
