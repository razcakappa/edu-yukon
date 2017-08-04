<?php

/* ::base.html.twig */
class __TwigTemplate_a06ca0635eb214cf273cd78363f4788a0712669af19878470a103f7361044ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2dd63f7ac6120bfb305bd5450db23ac38ffc8df33be5adcaca30a6e029afbb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2dd63f7ac6120bfb305bd5450db23ac38ffc8df33be5adcaca30a6e029afbb8->enter($__internal_e2dd63f7ac6120bfb305bd5450db23ac38ffc8df33be5adcaca30a6e029afbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e2dd63f7ac6120bfb305bd5450db23ac38ffc8df33be5adcaca30a6e029afbb8->leave($__internal_e2dd63f7ac6120bfb305bd5450db23ac38ffc8df33be5adcaca30a6e029afbb8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_202f4423ef68a3cc052ae51829821ae5cc7416336865cdfc0f5572b0b9b8c90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202f4423ef68a3cc052ae51829821ae5cc7416336865cdfc0f5572b0b9b8c90d->enter($__internal_202f4423ef68a3cc052ae51829821ae5cc7416336865cdfc0f5572b0b9b8c90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_202f4423ef68a3cc052ae51829821ae5cc7416336865cdfc0f5572b0b9b8c90d->leave($__internal_202f4423ef68a3cc052ae51829821ae5cc7416336865cdfc0f5572b0b9b8c90d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7569acb2e8bdef33529be88768a135dd95dfc0aae639cbf32a9ef4f9cab8aa5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7569acb2e8bdef33529be88768a135dd95dfc0aae639cbf32a9ef4f9cab8aa5c->enter($__internal_7569acb2e8bdef33529be88768a135dd95dfc0aae639cbf32a9ef4f9cab8aa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7569acb2e8bdef33529be88768a135dd95dfc0aae639cbf32a9ef4f9cab8aa5c->leave($__internal_7569acb2e8bdef33529be88768a135dd95dfc0aae639cbf32a9ef4f9cab8aa5c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_077a95174c5aed6ee1ba15e4eba3f4c3366a02e0718be256a528e4f4bcc114d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077a95174c5aed6ee1ba15e4eba3f4c3366a02e0718be256a528e4f4bcc114d5->enter($__internal_077a95174c5aed6ee1ba15e4eba3f4c3366a02e0718be256a528e4f4bcc114d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_077a95174c5aed6ee1ba15e4eba3f4c3366a02e0718be256a528e4f4bcc114d5->leave($__internal_077a95174c5aed6ee1ba15e4eba3f4c3366a02e0718be256a528e4f4bcc114d5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64bddd8dfa260d24b99a835dfe1d6214899cd3faae4f1f98fb34b323cc97eb5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bddd8dfa260d24b99a835dfe1d6214899cd3faae4f1f98fb34b323cc97eb5b->enter($__internal_64bddd8dfa260d24b99a835dfe1d6214899cd3faae4f1f98fb34b323cc97eb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_64bddd8dfa260d24b99a835dfe1d6214899cd3faae4f1f98fb34b323cc97eb5b->leave($__internal_64bddd8dfa260d24b99a835dfe1d6214899cd3faae4f1f98fb34b323cc97eb5b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/edu-yukon/api/app/Resources/views/base.html.twig");
    }
}
