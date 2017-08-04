<?php

/* EDUBundle:Default/email:registration.html.twig */
class __TwigTemplate_8635f73edb1b3e36cfd042c34e0acc73bd743ce201fc8457874526c8f66d603a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body_text' => array($this, 'block_body_text'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_828b4eee380a864f8d6ed0cbfb7fee3be427f49da8d53455ae4cef5f076ec052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828b4eee380a864f8d6ed0cbfb7fee3be427f49da8d53455ae4cef5f076ec052->enter($__internal_828b4eee380a864f8d6ed0cbfb7fee3be427f49da8d53455ae4cef5f076ec052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Default/email:registration.html.twig"));

        // line 1
        $this->displayBlock('body_text', $context, $blocks);
        
        $__internal_828b4eee380a864f8d6ed0cbfb7fee3be427f49da8d53455ae4cef5f076ec052->leave($__internal_828b4eee380a864f8d6ed0cbfb7fee3be427f49da8d53455ae4cef5f076ec052_prof);

    }

    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fceaa22f8af0733a05ed0bb49fb4e0c5693fca10c663021a306e61be68e32b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fceaa22f8af0733a05ed0bb49fb4e0c5693fca10c663021a306e61be68e32b6d->enter($__internal_fceaa22f8af0733a05ed0bb49fb4e0c5693fca10c663021a306e61be68e32b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 2
        echo "    ";
        // line 3
        echo "        Hello ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 3, $this->getSourceContext()); })()), "username", array());
        echo " !
        <br/>
    ";
        
        $__internal_fceaa22f8af0733a05ed0bb49fb4e0c5693fca10c663021a306e61be68e32b6d->leave($__internal_fceaa22f8af0733a05ed0bb49fb4e0c5693fca10c663021a306e61be68e32b6d_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Default/email:registration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  35 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body_text %}
    {% autoescape false %}
        Hello {{ user.username }} !
        <br/>
    {% endautoescape %}
{% endblock %}
", "EDUBundle:Default/email:registration.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Default/email/registration.html.twig");
    }
}
