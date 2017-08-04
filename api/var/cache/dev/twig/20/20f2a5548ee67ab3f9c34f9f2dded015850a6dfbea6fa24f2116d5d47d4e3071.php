<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_247f245f96a3db4df4fa446ed004a3e5df7d82a0942cc37add679ca52f0ea035 extends Twig_Template
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
        $__internal_04727e347fb5074458d959082e64252958c83175dc8461328122972cb89a234e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04727e347fb5074458d959082e64252958c83175dc8461328122972cb89a234e->enter($__internal_04727e347fb5074458d959082e64252958c83175dc8461328122972cb89a234e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_04727e347fb5074458d959082e64252958c83175dc8461328122972cb89a234e->leave($__internal_04727e347fb5074458d959082e64252958c83175dc8461328122972cb89a234e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
