<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9d14b81f0bc64d1bbb4b6622e2e0d5ba1fa9f4e8d7d7fac390a75206b4bfb4af extends Twig_Template
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
        $__internal_128f9f44afcbb6eddbd667772ebc21d8b500944fe91fac9439f989589a5f8bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128f9f44afcbb6eddbd667772ebc21d8b500944fe91fac9439f989589a5f8bea->enter($__internal_128f9f44afcbb6eddbd667772ebc21d8b500944fe91fac9439f989589a5f8bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_128f9f44afcbb6eddbd667772ebc21d8b500944fe91fac9439f989589a5f8bea->leave($__internal_128f9f44afcbb6eddbd667772ebc21d8b500944fe91fac9439f989589a5f8bea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
