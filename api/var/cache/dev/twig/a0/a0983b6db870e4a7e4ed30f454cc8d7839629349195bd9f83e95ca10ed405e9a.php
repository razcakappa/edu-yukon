<?php

/* JMSTranslationBundle:Translate:index.html.twig */
class __TwigTemplate_44c60b5cba73b872fbe5ffde3b8fecb4017434bc78a481c13358cad0a02ef156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JMSTranslationBundle::base.html.twig", "JMSTranslationBundle:Translate:index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JMSTranslationBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1118d8f60ef0388ba0520eeac0b8aef027b698c16a8445ee63e4c992cf904cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1118d8f60ef0388ba0520eeac0b8aef027b698c16a8445ee63e4c992cf904cc0->enter($__internal_1118d8f60ef0388ba0520eeac0b8aef027b698c16a8445ee63e4c992cf904cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JMSTranslationBundle:Translate:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1118d8f60ef0388ba0520eeac0b8aef027b698c16a8445ee63e4c992cf904cc0->leave($__internal_1118d8f60ef0388ba0520eeac0b8aef027b698c16a8445ee63e4c992cf904cc0_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1356bd6e5e3b81be86d35d59e5b7dc7f079bd5c392a7e79251e06b6592b5db69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1356bd6e5e3b81be86d35d59e5b7dc7f079bd5c392a7e79251e06b6592b5db69->enter($__internal_1356bd6e5e3b81be86d35d59e5b7dc7f079bd5c392a7e79251e06b6592b5db69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script language=\"javascript\" type=\"text/javascript\">
        var updateMessagePath = ";
        // line 6
        echo json_encode($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jms_translation_update_message", array("config" => (isset($context["selectedConfig"]) || array_key_exists("selectedConfig", $context) ? $context["selectedConfig"] : (function () { throw new Twig_Error_Runtime('Variable "selectedConfig" does not exist.', 6, $this->getSourceContext()); })()), "domain" => (isset($context["selectedDomain"]) || array_key_exists("selectedDomain", $context) ? $context["selectedDomain"] : (function () { throw new Twig_Error_Runtime('Variable "selectedDomain" does not exist.', 6, $this->getSourceContext()); })()), "locale" => (isset($context["selectedLocale"]) || array_key_exists("selectedLocale", $context) ? $context["selectedLocale"] : (function () { throw new Twig_Error_Runtime('Variable "selectedLocale" does not exist.', 6, $this->getSourceContext()); })()))));
        echo ";
        var isWritable        = ";
        // line 7
        echo ((((isset($context["isWriteable"]) || array_key_exists("isWriteable", $context) ? $context["isWriteable"] : (function () { throw new Twig_Error_Runtime('Variable "isWriteable" does not exist.', 7, $this->getSourceContext()); })()) === true)) ? ("true") : ("false"));
        echo ";
        var JMS               = new JMSTranslationManager(updateMessagePath, isWritable);

        JMS.ready();
    </script>
";
        
        $__internal_1356bd6e5e3b81be86d35d59e5b7dc7f079bd5c392a7e79251e06b6592b5db69->leave($__internal_1356bd6e5e3b81be86d35d59e5b7dc7f079bd5c392a7e79251e06b6592b5db69_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_491df213609699a31bd03f9e3afba5fe9517775954c8d07fce64cb47d181b277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491df213609699a31bd03f9e3afba5fe9517775954c8d07fce64cb47d181b277->enter($__internal_491df213609699a31bd03f9e3afba5fe9517775954c8d07fce64cb47d181b277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
    <form id=\"config\" action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jms_translation_index");
        echo "\" method=\"get\">
        <select name=\"config\" class=\"span3\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new Twig_Error_Runtime('Variable "configs" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 19
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["config"], "html", null, true);
            echo "\"";
            if (($context["config"] == (isset($context["selectedConfig"]) || array_key_exists("selectedConfig", $context) ? $context["selectedConfig"] : (function () { throw new Twig_Error_Runtime('Variable "selectedConfig" does not exist.', 19, $this->getSourceContext()); })()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["config"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </select>

        <select name=\"domain\" class=\"span3\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) || array_key_exists("domains", $context) ? $context["domains"] : (function () { throw new Twig_Error_Runtime('Variable "domains" does not exist.', 24, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 25
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "\"";
            if (($context["domain"] == (isset($context["selectedDomain"]) || array_key_exists("selectedDomain", $context) ? $context["selectedDomain"] : (function () { throw new Twig_Error_Runtime('Variable "selectedDomain" does not exist.', 25, $this->getSourceContext()); })()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </select>

        <select name=\"locale\" class=\"span2\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 30, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 31
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\"";
            if (($context["locale"] == (isset($context["selectedLocale"]) || array_key_exists("selectedLocale", $context) ? $context["selectedLocale"] : (function () { throw new Twig_Error_Runtime('Variable "selectedLocale" does not exist.', 31, $this->getSourceContext()); })()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </select>
    </form>

    ";
        // line 36
        if (((isset($context["isWriteable"]) || array_key_exists("isWriteable", $context) ? $context["isWriteable"] : (function () { throw new Twig_Error_Runtime('Variable "isWriteable" does not exist.', 36, $this->getSourceContext()); })()) === false)) {
            // line 37
            echo "    <div class=\"alert-message error\">
        The translation file \"<strong>";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "</strong>\" is not writable.
    </div>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if (("xliff" != (isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new Twig_Error_Runtime('Variable "format" does not exist.', 42, $this->getSourceContext()); })()))) {
            // line 43
            echo "    <div class=\"alert-message warning\">
        Due to limitations of the different loaders/dumpers, some features are unfortunately limited to the XLIFF format.

        <br /><br />

        However, you can easily convert your existing translation files to the XLIFF format by running:<br />
        <code>php app/console translation:extract ";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["selectedLocale"]) || array_key_exists("selectedLocale", $context) ? $context["selectedLocale"] : (function () { throw new Twig_Error_Runtime('Variable "selectedLocale" does not exist.', 49, $this->getSourceContext()); })()), "html", null, true);
            echo " --config=";
            echo twig_escape_filter($this->env, (isset($context["selectedConfig"]) || array_key_exists("selectedConfig", $context) ? $context["selectedConfig"] : (function () { throw new Twig_Error_Runtime('Variable "selectedConfig" does not exist.', 49, $this->getSourceContext()); })()), "html", null, true);
            echo " --output-format=xliff</code>
    </div>
    ";
        }
        // line 52
        echo "
    <h2>Available Messages</h2>

    ";
        // line 55
        if ( !twig_test_empty((isset($context["newMessages"]) || array_key_exists("newMessages", $context) ? $context["newMessages"] : (function () { throw new Twig_Error_Runtime('Variable "newMessages" does not exist.', 55, $this->getSourceContext()); })()))) {
            // line 56
            echo "    <h3>New Messages</h3>
    ";
            // line 57
            $this->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig", "JMSTranslationBundle:Translate:index.html.twig", 57)->display(array_merge($context, array("messages" => (isset($context["newMessages"]) || array_key_exists("newMessages", $context) ? $context["newMessages"] : (function () { throw new Twig_Error_Runtime('Variable "newMessages" does not exist.', 57, $this->getSourceContext()); })()))));
            // line 58
            echo "    ";
        }
        // line 59
        echo "
    ";
        // line 60
        if ( !twig_test_empty((isset($context["existingMessages"]) || array_key_exists("existingMessages", $context) ? $context["existingMessages"] : (function () { throw new Twig_Error_Runtime('Variable "existingMessages" does not exist.', 60, $this->getSourceContext()); })()))) {
            // line 61
            echo "    <h3>Existing Messages</h3>
    ";
            // line 62
            $this->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig", "JMSTranslationBundle:Translate:index.html.twig", 62)->display(array_merge($context, array("messages" => (isset($context["existingMessages"]) || array_key_exists("existingMessages", $context) ? $context["existingMessages"] : (function () { throw new Twig_Error_Runtime('Variable "existingMessages" does not exist.', 62, $this->getSourceContext()); })()))));
            // line 63
            echo "    ";
        }
        // line 64
        echo "
";
        
        $__internal_491df213609699a31bd03f9e3afba5fe9517775954c8d07fce64cb47d181b277->leave($__internal_491df213609699a31bd03f9e3afba5fe9517775954c8d07fce64cb47d181b277_prof);

    }

    public function getTemplateName()
    {
        return "JMSTranslationBundle:Translate:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 64,  207 => 63,  205 => 62,  202 => 61,  200 => 60,  197 => 59,  194 => 58,  192 => 57,  189 => 56,  187 => 55,  182 => 52,  174 => 49,  166 => 43,  164 => 42,  161 => 41,  155 => 38,  152 => 37,  150 => 36,  145 => 33,  130 => 31,  126 => 30,  121 => 27,  106 => 25,  102 => 24,  97 => 21,  82 => 19,  78 => 18,  73 => 16,  70 => 15,  64 => 14,  51 => 7,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JMSTranslationBundle::base.html.twig\" %}

{% block javascripts %}
    {{ parent() }}
    <script language=\"javascript\" type=\"text/javascript\">
        var updateMessagePath = {{ path(\"jms_translation_update_message\", {\"config\": selectedConfig, \"domain\": selectedDomain, \"locale\": selectedLocale})|json_encode|raw }};
        var isWritable        = {{ isWriteable is same as(true) ? 'true' : 'false' }};
        var JMS               = new JMSTranslationManager(updateMessagePath, isWritable);

        JMS.ready();
    </script>
{% endblock %}

{% block body %}

    <form id=\"config\" action=\"{{ path(\"jms_translation_index\") }}\" method=\"get\">
        <select name=\"config\" class=\"span3\">
            {% for config in configs %}
            <option value=\"{{ config }}\"{% if config == selectedConfig %} selected=\"selected\"{% endif %}>{{ config }}</option>
            {% endfor %}
        </select>

        <select name=\"domain\" class=\"span3\">
            {% for domain in domains %}
            <option value=\"{{ domain }}\"{% if domain == selectedDomain %} selected=\"selected\"{% endif %}>{{ domain }}</option>
            {% endfor %}
        </select>

        <select name=\"locale\" class=\"span2\">
            {% for locale in locales %}
            <option value=\"{{ locale }}\"{% if locale == selectedLocale %} selected=\"selected\"{% endif %}>{{ locale }}</option>
            {% endfor %}
        </select>
    </form>

    {% if isWriteable is same as(false) %}
    <div class=\"alert-message error\">
        The translation file \"<strong>{{ file }}</strong>\" is not writable.
    </div>
    {% endif %}

    {% if \"xliff\" != format %}
    <div class=\"alert-message warning\">
        Due to limitations of the different loaders/dumpers, some features are unfortunately limited to the XLIFF format.

        <br /><br />

        However, you can easily convert your existing translation files to the XLIFF format by running:<br />
        <code>php app/console translation:extract {{ selectedLocale }} --config={{ selectedConfig }} --output-format=xliff</code>
    </div>
    {% endif %}

    <h2>Available Messages</h2>

    {% if newMessages is not empty %}
    <h3>New Messages</h3>
    {% include \"JMSTranslationBundle:Translate:messages.html.twig\" with {\"messages\": newMessages} %}
    {% endif %}

    {% if existingMessages is not empty %}
    <h3>Existing Messages</h3>
    {% include \"JMSTranslationBundle:Translate:messages.html.twig\" with {\"messages\": existingMessages} %}
    {% endif %}

{% endblock %}
", "JMSTranslationBundle:Translate:index.html.twig", "/var/www/edu-yukon/api/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views/Translate/index.html.twig");
    }
}
