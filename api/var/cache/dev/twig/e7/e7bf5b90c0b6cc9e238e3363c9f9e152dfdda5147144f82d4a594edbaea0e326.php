<?php

/* email/email_registration.twig */
class __TwigTemplate_767fd64247cb0437d698fa9629794cd3ec29e59b774469f640d5d88ee02e5223 extends Twig_Template
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
        $__internal_3194cc1b082e149d106f845f5ebcd545eac0e5b64eb476a4ead1b91dce1189f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3194cc1b082e149d106f845f5ebcd545eac0e5b64eb476a4ead1b91dce1189f2->enter($__internal_3194cc1b082e149d106f845f5ebcd545eac0e5b64eb476a4ead1b91dce1189f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/email_registration.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_text', $context, $blocks);
        
        $__internal_3194cc1b082e149d106f845f5ebcd545eac0e5b64eb476a4ead1b91dce1189f2->leave($__internal_3194cc1b082e149d106f845f5ebcd545eac0e5b64eb476a4ead1b91dce1189f2_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f43c1b051ac73220c654a9381da0e97ad6db2355272368b34c30335e8992ecbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43c1b051ac73220c654a9381da0e97ad6db2355272368b34c30335e8992ecbb->enter($__internal_f43c1b051ac73220c654a9381da0e97ad6db2355272368b34c30335e8992ecbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo "Your account on CMI";
        
        $__internal_f43c1b051ac73220c654a9381da0e97ad6db2355272368b34c30335e8992ecbb->leave($__internal_f43c1b051ac73220c654a9381da0e97ad6db2355272368b34c30335e8992ecbb_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_260a2fde00b7dd78817e508dc7839f03833c3dff8a54c92087f8df57435f39bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260a2fde00b7dd78817e508dc7839f03833c3dff8a54c92087f8df57435f39bc->enter($__internal_260a2fde00b7dd78817e508dc7839f03833c3dff8a54c92087f8df57435f39bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 4
        echo "    ";
        // line 5
        echo "        Hello ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "username", array());
        echo " !

        Your login is : ";
        // line 7
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "email", array());
        echo "
        Your password is : ";
        // line 8
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "password", array());
        echo "

        Greetings,
        CMI
    ";
        
        $__internal_260a2fde00b7dd78817e508dc7839f03833c3dff8a54c92087f8df57435f39bc->leave($__internal_260a2fde00b7dd78817e508dc7839f03833c3dff8a54c92087f8df57435f39bc_prof);

    }

    public function getTemplateName()
    {
        return "email/email_registration.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  62 => 7,  56 => 5,  54 => 4,  48 => 3,  36 => 1,  29 => 3,  26 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}Your account on CMI{% endblock %}

{% block body_text %}
    {% autoescape false %}
        Hello {{ user.username }} !

        Your login is : {{ user.email }}
        Your password is : {{ user.password }}

        Greetings,
        CMI
    {% endautoescape %}
{% endblock %}", "email/email_registration.twig", "/var/www/edu-yukon/api/app/Resources/views/email/email_registration.twig");
    }
}
