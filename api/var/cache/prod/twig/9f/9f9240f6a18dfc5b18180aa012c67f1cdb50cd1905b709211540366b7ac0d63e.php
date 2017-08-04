<?php

/* EDUBundle:Default/email:registration.html.twig */
class __TwigTemplate_face06d2244b89f8f1fd8faf07abff497fcdd055a0a06f05d72d3f962d2f08c1 extends Twig_Template
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
        // line 1
        $this->displayBlock('body_text', $context, $blocks);
    }

    public function block_body_text($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        // line 3
        echo "        Hello ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array());
        echo " !
        <br/>
    ";
    }

    public function getTemplateName()
    {
        return "EDUBundle:Default/email:registration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:Default/email:registration.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Default/email/registration.html.twig");
    }
}
