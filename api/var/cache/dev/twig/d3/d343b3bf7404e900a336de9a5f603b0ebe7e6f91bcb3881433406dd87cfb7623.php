<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_cfc8ba8341e189aa74333d94244ef099d09f0a8ff1d0d830cc5db6d8639bc3c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e626d9484b64b5b6e0d22beaeb49f334127807c65ec37a0a3eee1bc133dc04a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e626d9484b64b5b6e0d22beaeb49f334127807c65ec37a0a3eee1bc133dc04a4->enter($__internal_e626d9484b64b5b6e0d22beaeb49f334127807c65ec37a0a3eee1bc133dc04a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e626d9484b64b5b6e0d22beaeb49f334127807c65ec37a0a3eee1bc133dc04a4->leave($__internal_e626d9484b64b5b6e0d22beaeb49f334127807c65ec37a0a3eee1bc133dc04a4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ec90c8812a302a6710ee393b5f03c9abfa35cbfa9f3edae61f90355af82e5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec90c8812a302a6710ee393b5f03c9abfa35cbfa9f3edae61f90355af82e5be->enter($__internal_8ec90c8812a302a6710ee393b5f03c9abfa35cbfa9f3edae61f90355af82e5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8ec90c8812a302a6710ee393b5f03c9abfa35cbfa9f3edae61f90355af82e5be->leave($__internal_8ec90c8812a302a6710ee393b5f03c9abfa35cbfa9f3edae61f90355af82e5be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
