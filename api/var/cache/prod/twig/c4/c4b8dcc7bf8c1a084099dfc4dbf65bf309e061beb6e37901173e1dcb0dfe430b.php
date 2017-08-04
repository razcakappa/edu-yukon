<?php

/* JMSTranslationBundle:Translate:index.html.twig */
class __TwigTemplate_3ef5ceb95139ee30d45aae06131e54a1d4b0f8a6b6b4d4b3290d71465e3450c7 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script language=\"javascript\" type=\"text/javascript\">
        var updateMessagePath = ";
        // line 6
        echo json_encode($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jms_translation_update_message", array("config" => ($context["selectedConfig"] ?? null), "domain" => ($context["selectedDomain"] ?? null), "locale" => ($context["selectedLocale"] ?? null))));
        echo ";
        var isWritable        = ";
        // line 7
        echo (((($context["isWriteable"] ?? null) === true)) ? ("true") : ("false"));
        echo ";
        var JMS               = new JMSTranslationManager(updateMessagePath, isWritable);

        JMS.ready();
    </script>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["configs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 19
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["config"], "html", null, true);
            echo "\"";
            if (($context["config"] == ($context["selectedConfig"] ?? null))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 25
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "\"";
            if (($context["domain"] == ($context["selectedDomain"] ?? null))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 31
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\"";
            if (($context["locale"] == ($context["selectedLocale"] ?? null))) {
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
        if ((($context["isWriteable"] ?? null) === false)) {
            // line 37
            echo "    <div class=\"alert-message error\">
        The translation file \"<strong>";
            // line 38
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo "</strong>\" is not writable.
    </div>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if (("xliff" != ($context["format"] ?? null))) {
            // line 43
            echo "    <div class=\"alert-message warning\">
        Due to limitations of the different loaders/dumpers, some features are unfortunately limited to the XLIFF format.

        <br /><br />

        However, you can easily convert your existing translation files to the XLIFF format by running:<br />
        <code>php app/console translation:extract ";
            // line 49
            echo twig_escape_filter($this->env, ($context["selectedLocale"] ?? null), "html", null, true);
            echo " --config=";
            echo twig_escape_filter($this->env, ($context["selectedConfig"] ?? null), "html", null, true);
            echo " --output-format=xliff</code>
    </div>
    ";
        }
        // line 52
        echo "
    <h2>Available Messages</h2>

    ";
        // line 55
        if ( !twig_test_empty(($context["newMessages"] ?? null))) {
            // line 56
            echo "    <h3>New Messages</h3>
    ";
            // line 57
            $this->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig", "JMSTranslationBundle:Translate:index.html.twig", 57)->display(array_merge($context, array("messages" => ($context["newMessages"] ?? null))));
            // line 58
            echo "    ";
        }
        // line 59
        echo "
    ";
        // line 60
        if ( !twig_test_empty(($context["existingMessages"] ?? null))) {
            // line 61
            echo "    <h3>Existing Messages</h3>
    ";
            // line 62
            $this->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig", "JMSTranslationBundle:Translate:index.html.twig", 62)->display(array_merge($context, array("messages" => ($context["existingMessages"] ?? null))));
            // line 63
            echo "    ";
        }
        // line 64
        echo "
";
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
        return array (  195 => 64,  192 => 63,  190 => 62,  187 => 61,  185 => 60,  182 => 59,  179 => 58,  177 => 57,  174 => 56,  172 => 55,  167 => 52,  159 => 49,  151 => 43,  149 => 42,  146 => 41,  140 => 38,  137 => 37,  135 => 36,  130 => 33,  115 => 31,  111 => 30,  106 => 27,  91 => 25,  87 => 24,  82 => 21,  67 => 19,  63 => 18,  58 => 16,  55 => 15,  52 => 14,  42 => 7,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JMSTranslationBundle:Translate:index.html.twig", "/var/www/edu-yukon/api/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views/Translate/index.html.twig");
    }
}
