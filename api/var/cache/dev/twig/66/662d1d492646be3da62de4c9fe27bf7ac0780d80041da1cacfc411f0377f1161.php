<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b323315ba9015c5a2a23a8f1b17d095d412a55eebf84b0678e50725230e2cfee extends Twig_Template
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
        $__internal_76e628207bdffaf234bfbad098643ffc644bf65dac1e94b544f39ceafa9907f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e628207bdffaf234bfbad098643ffc644bf65dac1e94b544f39ceafa9907f2->enter($__internal_76e628207bdffaf234bfbad098643ffc644bf65dac1e94b544f39ceafa9907f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_76e628207bdffaf234bfbad098643ffc644bf65dac1e94b544f39ceafa9907f2->leave($__internal_76e628207bdffaf234bfbad098643ffc644bf65dac1e94b544f39ceafa9907f2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6c70e7cf405a3c4b62d024e5a25bc139d8ccdf2795ff714a0e4b1bee17809df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c70e7cf405a3c4b62d024e5a25bc139d8ccdf2795ff714a0e4b1bee17809df6->enter($__internal_6c70e7cf405a3c4b62d024e5a25bc139d8ccdf2795ff714a0e4b1bee17809df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_6c70e7cf405a3c4b62d024e5a25bc139d8ccdf2795ff714a0e4b1bee17809df6->leave($__internal_6c70e7cf405a3c4b62d024e5a25bc139d8ccdf2795ff714a0e4b1bee17809df6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b02a942b1eadeb0c2cd9498fb5adc0aecc9cc098f52bc4464c5794672e06058d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02a942b1eadeb0c2cd9498fb5adc0aecc9cc098f52bc4464c5794672e06058d->enter($__internal_b02a942b1eadeb0c2cd9498fb5adc0aecc9cc098f52bc4464c5794672e06058d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_b02a942b1eadeb0c2cd9498fb5adc0aecc9cc098f52bc4464c5794672e06058d->leave($__internal_b02a942b1eadeb0c2cd9498fb5adc0aecc9cc098f52bc4464c5794672e06058d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_34b0e5ae6161e5a10ce89d25ad08dfced40ef19cf12ed3a803f904770a9bee1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b0e5ae6161e5a10ce89d25ad08dfced40ef19cf12ed3a803f904770a9bee1b->enter($__internal_34b0e5ae6161e5a10ce89d25ad08dfced40ef19cf12ed3a803f904770a9bee1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_34b0e5ae6161e5a10ce89d25ad08dfced40ef19cf12ed3a803f904770a9bee1b->leave($__internal_34b0e5ae6161e5a10ce89d25ad08dfced40ef19cf12ed3a803f904770a9bee1b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
