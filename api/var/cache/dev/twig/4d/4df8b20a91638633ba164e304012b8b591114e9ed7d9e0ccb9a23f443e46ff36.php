<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2227b3bf02bc4d793bd3a10fdf2f2aa818362356342ec1145525282459fcd8b9 extends Twig_Template
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
        $__internal_864fe4ddbd8fe4aa41db6eba4ad3d7e46ad51511f63512c62068a08ed23fe568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864fe4ddbd8fe4aa41db6eba4ad3d7e46ad51511f63512c62068a08ed23fe568->enter($__internal_864fe4ddbd8fe4aa41db6eba4ad3d7e46ad51511f63512c62068a08ed23fe568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_864fe4ddbd8fe4aa41db6eba4ad3d7e46ad51511f63512c62068a08ed23fe568->leave($__internal_864fe4ddbd8fe4aa41db6eba4ad3d7e46ad51511f63512c62068a08ed23fe568_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/edu-yukon/api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
