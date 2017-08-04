<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_868eeaabc55e66f4da5785b6309a84814af43526ba937816dfe60642c5312e04 extends Twig_Template
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
        $__internal_2da1a193b63359f644b774c9e5c7a52a920930f0106797146c44a293836ea904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da1a193b63359f644b774c9e5c7a52a920930f0106797146c44a293836ea904->enter($__internal_2da1a193b63359f644b774c9e5c7a52a920930f0106797146c44a293836ea904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2da1a193b63359f644b774c9e5c7a52a920930f0106797146c44a293836ea904->leave($__internal_2da1a193b63359f644b774c9e5c7a52a920930f0106797146c44a293836ea904_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
