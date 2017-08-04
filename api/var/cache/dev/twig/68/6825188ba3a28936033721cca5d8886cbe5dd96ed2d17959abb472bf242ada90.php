<?php

/* :email:password_resetting.email.twig */
class __TwigTemplate_c7daae1c536b26ca79ea8a7b1caac2faa91fe695b76e997f92bf20f38da45052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dee9bb1941854845cc9a0b2a9c7e10a58375c662cd76b48d2b6cb97bd6ea1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dee9bb1941854845cc9a0b2a9c7e10a58375c662cd76b48d2b6cb97bd6ea1b0->enter($__internal_8dee9bb1941854845cc9a0b2a9c7e10a58375c662cd76b48d2b6cb97bd6ea1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:password_resetting.email.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_text', $context, $blocks);
        
        $__internal_8dee9bb1941854845cc9a0b2a9c7e10a58375c662cd76b48d2b6cb97bd6ea1b0->leave($__internal_8dee9bb1941854845cc9a0b2a9c7e10a58375c662cd76b48d2b6cb97bd6ea1b0_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ad86c9754bab85500cfd53ff6ecdb786e05d2edd0058d92dc68a8df536d46b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad86c9754bab85500cfd53ff6ecdb786e05d2edd0058d92dc68a8df536d46b61->enter($__internal_ad86c9754bab85500cfd53ff6ecdb786e05d2edd0058d92dc68a8df536d46b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo "Resetting your password";
        
        $__internal_ad86c9754bab85500cfd53ff6ecdb786e05d2edd0058d92dc68a8df536d46b61->leave($__internal_ad86c9754bab85500cfd53ff6ecdb786e05d2edd0058d92dc68a8df536d46b61_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e2f46e9f92404cc9e7d612d985ce70c663ef453aebaaf8d9193765c4bfcfc137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f46e9f92404cc9e7d612d985ce70c663ef453aebaaf8d9193765c4bfcfc137->enter($__internal_e2f46e9f92404cc9e7d612d985ce70c663ef453aebaaf8d9193765c4bfcfc137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 4
        echo "    ";
        // line 5
        echo "        Hello ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "username", array());
        echo " !

        You can reset your password by accessing ";
        // line 7
        echo (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 7, $this->getSourceContext()); })());
        echo "

        Greetings,
        the App team
    ";
        
        $__internal_e2f46e9f92404cc9e7d612d985ce70c663ef453aebaaf8d9193765c4bfcfc137->leave($__internal_e2f46e9f92404cc9e7d612d985ce70c663ef453aebaaf8d9193765c4bfcfc137_prof);

    }

    public function getTemplateName()
    {
        return ":email:password_resetting.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  56 => 5,  54 => 4,  48 => 3,  36 => 1,  29 => 3,  26 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}Resetting your password{% endblock %}

{% block body_text %}
    {% autoescape false %}
        Hello {{ user.username }} !

        You can reset your password by accessing {{ confirmationUrl }}

        Greetings,
        the App team
    {% endautoescape %}
{% endblock %}", ":email:password_resetting.email.twig", "/var/www/edu-yukon/api/app/Resources/views/email/password_resetting.email.twig");
    }
}
