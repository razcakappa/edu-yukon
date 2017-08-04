<?php

/* JMSTranslationBundle::base.html.twig */
class __TwigTemplate_fb34dac15eb9dfa9c155b2828bbd193c4731fbd0add579d3051966481ffba8b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'topjavascripts' => array($this, 'block_topjavascripts'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f28a8d110d8900af8aa15854d740a7ffb33d10842b0022522755d887d7adde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f28a8d110d8900af8aa15854d740a7ffb33d10842b0022522755d887d7adde3->enter($__internal_5f28a8d110d8900af8aa15854d740a7ffb33d10842b0022522755d887d7adde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JMSTranslationBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/jmstranslation/css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/jmstranslation/css/layout.css"), "html", null, true);
        echo "\" />
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 9
        $this->displayBlock('topjavascripts', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        <div class=\"topbar\">
            <div class=\"topbar-inner\">
                <div class=\"container\">
                    <h3><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jms_translation_index");
        echo "\" class=\"logo\">JMSTranslationBundle UI</a></h3>
                    
                </div>
            </div>
        </div>
        <div class=\"container\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        </div>

        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </body>
</html>
";
        
        $__internal_5f28a8d110d8900af8aa15854d740a7ffb33d10842b0022522755d887d7adde3->leave($__internal_5f28a8d110d8900af8aa15854d740a7ffb33d10842b0022522755d887d7adde3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11bdb39eadddc7120dfe853e1878b8a4b1f48759b224d53388dbff157265989a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bdb39eadddc7120dfe853e1878b8a4b1f48759b224d53388dbff157265989a->enter($__internal_11bdb39eadddc7120dfe853e1878b8a4b1f48759b224d53388dbff157265989a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JMSTranslationBundle UI";
        
        $__internal_11bdb39eadddc7120dfe853e1878b8a4b1f48759b224d53388dbff157265989a->leave($__internal_11bdb39eadddc7120dfe853e1878b8a4b1f48759b224d53388dbff157265989a_prof);

    }

    // line 9
    public function block_topjavascripts($context, array $blocks = array())
    {
        $__internal_b66923bf874cc41b7977fbdc391ce0a607fa6cd64c3a1d8ec595422112ccba62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66923bf874cc41b7977fbdc391ce0a607fa6cd64c3a1d8ec595422112ccba62->enter($__internal_b66923bf874cc41b7977fbdc391ce0a607fa6cd64c3a1d8ec595422112ccba62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topjavascripts"));

        
        $__internal_b66923bf874cc41b7977fbdc391ce0a607fa6cd64c3a1d8ec595422112ccba62->leave($__internal_b66923bf874cc41b7977fbdc391ce0a607fa6cd64c3a1d8ec595422112ccba62_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe864d85ef6a76576aac8465b71bf3a434f5af6ad5728096ea69661251b8a691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe864d85ef6a76576aac8465b71bf3a434f5af6ad5728096ea69661251b8a691->enter($__internal_fe864d85ef6a76576aac8465b71bf3a434f5af6ad5728096ea69661251b8a691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe864d85ef6a76576aac8465b71bf3a434f5af6ad5728096ea69661251b8a691->leave($__internal_fe864d85ef6a76576aac8465b71bf3a434f5af6ad5728096ea69661251b8a691_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4edf4d0bfa3f0f352eb99213ffbd5171ae87f0a77179b586f9e9b899ceadcaf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edf4d0bfa3f0f352eb99213ffbd5171ae87f0a77179b586f9e9b899ceadcaf9->enter($__internal_4edf4d0bfa3f0f352eb99213ffbd5171ae87f0a77179b586f9e9b899ceadcaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "        <script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/jmstranslation/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/jmstranslation/js/trunk8.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/jmstranslation/js/jms.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_4edf4d0bfa3f0f352eb99213ffbd5171ae87f0a77179b586f9e9b899ceadcaf9->leave($__internal_4edf4d0bfa3f0f352eb99213ffbd5171ae87f0a77179b586f9e9b899ceadcaf9_prof);

    }

    public function getTemplateName()
    {
        return "JMSTranslationBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 27,  128 => 26,  123 => 25,  117 => 24,  106 => 21,  95 => 9,  83 => 5,  74 => 29,  72 => 24,  68 => 22,  66 => 21,  57 => 15,  50 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>{% block title %}JMSTranslationBundle UI{% endblock %}</title>
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset(\"bundles/jmstranslation/css/bootstrap.css\") }}\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset(\"bundles/jmstranslation/css/layout.css\") }}\" />
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
        {% block topjavascripts %}{% endblock %}
    </head>
    <body>
        <div class=\"topbar\">
            <div class=\"topbar-inner\">
                <div class=\"container\">
                    <h3><a href=\"{{ path(\"jms_translation_index\") }}\" class=\"logo\">JMSTranslationBundle UI</a></h3>
                    
                </div>
            </div>
        </div>
        <div class=\"container\">
            {% block body %}{% endblock %}
        </div>

        {% block javascripts %}
        <script language=\"javascript\" type=\"text/javascript\" src=\"{{ asset(\"bundles/jmstranslation/js/jquery.js\") }}\"></script>
        <script language=\"javascript\" type=\"text/javascript\" src=\"{{ asset(\"bundles/jmstranslation/js/trunk8.js\") }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset(\"bundles/jmstranslation/js/jms.js\") }}\"></script>
        {% endblock %}
    </body>
</html>
", "JMSTranslationBundle::base.html.twig", "/var/www/edu-yukon/api/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views/base.html.twig");
    }
}
