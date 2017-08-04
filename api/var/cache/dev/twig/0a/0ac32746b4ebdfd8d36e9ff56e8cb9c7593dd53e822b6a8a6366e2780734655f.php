<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a5224dd6c0bf283d135b1493929c2d0ab8bd828efac00512fe92512b944814c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d8b0669dc41cb66acb718f8211ce0bf56ce313b352b5032a87e74b3737c83c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8b0669dc41cb66acb718f8211ce0bf56ce313b352b5032a87e74b3737c83c3->enter($__internal_2d8b0669dc41cb66acb718f8211ce0bf56ce313b352b5032a87e74b3737c83c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2d8b0669dc41cb66acb718f8211ce0bf56ce313b352b5032a87e74b3737c83c3->leave($__internal_2d8b0669dc41cb66acb718f8211ce0bf56ce313b352b5032a87e74b3737c83c3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_00fc0dbc5a770a1a507d3ffe5e2870751f6b02f73e6be26d6151e5b11853a07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fc0dbc5a770a1a507d3ffe5e2870751f6b02f73e6be26d6151e5b11853a07e->enter($__internal_00fc0dbc5a770a1a507d3ffe5e2870751f6b02f73e6be26d6151e5b11853a07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_00fc0dbc5a770a1a507d3ffe5e2870751f6b02f73e6be26d6151e5b11853a07e->leave($__internal_00fc0dbc5a770a1a507d3ffe5e2870751f6b02f73e6be26d6151e5b11853a07e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_258b13ff36900ad3f647ef71c5d7e70140912efe2d42fc57de57faf9aa6d9b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258b13ff36900ad3f647ef71c5d7e70140912efe2d42fc57de57faf9aa6d9b0c->enter($__internal_258b13ff36900ad3f647ef71c5d7e70140912efe2d42fc57de57faf9aa6d9b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_258b13ff36900ad3f647ef71c5d7e70140912efe2d42fc57de57faf9aa6d9b0c->leave($__internal_258b13ff36900ad3f647ef71c5d7e70140912efe2d42fc57de57faf9aa6d9b0c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dfd71ac4400f697bf97dc642c89752c50ebd7bb9d0c4294ee1527fc4a7ad45e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd71ac4400f697bf97dc642c89752c50ebd7bb9d0c4294ee1527fc4a7ad45e9->enter($__internal_dfd71ac4400f697bf97dc642c89752c50ebd7bb9d0c4294ee1527fc4a7ad45e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dfd71ac4400f697bf97dc642c89752c50ebd7bb9d0c4294ee1527fc4a7ad45e9->leave($__internal_dfd71ac4400f697bf97dc642c89752c50ebd7bb9d0c4294ee1527fc4a7ad45e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
