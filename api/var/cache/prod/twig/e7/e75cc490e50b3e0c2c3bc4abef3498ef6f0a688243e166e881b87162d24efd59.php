<?php

/* email/email_registration.twig */
class __TwigTemplate_2c2fa6b2ea68a985a04b7a48d628ecf504b75a98af070f486bf38f6ac56d9485 extends Twig_Template
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
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_text', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        echo "Your account on CMI";
    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "        Hello ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array());
        echo " !

        Your login is : ";
        // line 7
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "email", array());
        echo "
        Your password is : ";
        // line 8
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "password", array());
        echo "

        Greetings,
        CMI
    ";
    }

    public function getTemplateName()
    {
        return "email/email_registration.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  47 => 7,  41 => 5,  39 => 4,  36 => 3,  30 => 1,  26 => 3,  23 => 2,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "email/email_registration.twig", "/var/www/edu-yukon/api/app/Resources/views/email/email_registration.twig");
    }
}
