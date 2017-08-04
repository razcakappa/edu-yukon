<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_a9bd728f3bdbdc9a34c2ef66a6957ad697839985b892999ca9029308e2f6f78e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_82758145d9d0f8f79c294bd491f77acbc013916a9e8944ca98f1034ca0bfb08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82758145d9d0f8f79c294bd491f77acbc013916a9e8944ca98f1034ca0bfb08a->enter($__internal_82758145d9d0f8f79c294bd491f77acbc013916a9e8944ca98f1034ca0bfb08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82758145d9d0f8f79c294bd491f77acbc013916a9e8944ca98f1034ca0bfb08a->leave($__internal_82758145d9d0f8f79c294bd491f77acbc013916a9e8944ca98f1034ca0bfb08a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9321e457879415c98c34aa734f7c102a299c7e897937237c52e43dc0d7bcba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9321e457879415c98c34aa734f7c102a299c7e897937237c52e43dc0d7bcba3->enter($__internal_d9321e457879415c98c34aa734f7c102a299c7e897937237c52e43dc0d7bcba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_d9321e457879415c98c34aa734f7c102a299c7e897937237c52e43dc0d7bcba3->leave($__internal_d9321e457879415c98c34aa734f7c102a299c7e897937237c52e43dc0d7bcba3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
