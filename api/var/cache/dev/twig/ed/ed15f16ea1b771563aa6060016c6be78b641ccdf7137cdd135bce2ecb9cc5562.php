<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_dbf9f1c2c3b4583f3de6c50534e0baf85b93f88df0f7bd9e98d7feb19baf18f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_2eef93b9294e11d58a0a15f031a497be3812a30915c725c50aedcc221f823b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eef93b9294e11d58a0a15f031a497be3812a30915c725c50aedcc221f823b37->enter($__internal_2eef93b9294e11d58a0a15f031a497be3812a30915c725c50aedcc221f823b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eef93b9294e11d58a0a15f031a497be3812a30915c725c50aedcc221f823b37->leave($__internal_2eef93b9294e11d58a0a15f031a497be3812a30915c725c50aedcc221f823b37_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0fc4c198789d7d713beed844722e614483a4f8ba24ce130463918236ab9f228c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc4c198789d7d713beed844722e614483a4f8ba24ce130463918236ab9f228c->enter($__internal_0fc4c198789d7d713beed844722e614483a4f8ba24ce130463918236ab9f228c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_0fc4c198789d7d713beed844722e614483a4f8ba24ce130463918236ab9f228c->leave($__internal_0fc4c198789d7d713beed844722e614483a4f8ba24ce130463918236ab9f228c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
