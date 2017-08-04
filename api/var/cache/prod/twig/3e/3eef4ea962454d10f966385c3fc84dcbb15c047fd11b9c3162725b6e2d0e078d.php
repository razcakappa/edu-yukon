<?php

/* :email:password_resetting.email.twig */
class __TwigTemplate_a9d739a5a2b571064bd7045a77f0cbe59edba3701c2883ed6aec058690fcdbe8 extends Twig_Template
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
        echo "Resetting your password";
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

        You can reset your password by accessing ";
        // line 7
        echo ($context["confirmationUrl"] ?? null);
        echo "

        Greetings,
        the App team
    ";
    }

    public function getTemplateName()
    {
        return ":email:password_resetting.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  41 => 5,  39 => 4,  36 => 3,  30 => 1,  26 => 3,  23 => 2,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":email:password_resetting.email.twig", "/var/www/edu-yukon/api/app/Resources/views/email/password_resetting.email.twig");
    }
}
