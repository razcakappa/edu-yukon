<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4a39fc903cf3205149682607f41ea6f2464c2b57e418248ded563edd329fec0d extends Twig_Template
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
        $__internal_592de5a2ae633984969b129188ce80344fcd9e2f22ee6fc1056c51b840eeef06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592de5a2ae633984969b129188ce80344fcd9e2f22ee6fc1056c51b840eeef06->enter($__internal_592de5a2ae633984969b129188ce80344fcd9e2f22ee6fc1056c51b840eeef06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_592de5a2ae633984969b129188ce80344fcd9e2f22ee6fc1056c51b840eeef06->leave($__internal_592de5a2ae633984969b129188ce80344fcd9e2f22ee6fc1056c51b840eeef06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
