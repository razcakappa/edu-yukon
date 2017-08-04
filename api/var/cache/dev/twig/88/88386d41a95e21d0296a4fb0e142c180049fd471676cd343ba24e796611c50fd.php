<?php

/* JMSTranslationBundle:Translate:messages.html.twig */
class __TwigTemplate_0d70a0061c0699dfdecb699dbbae247581bfa702f44d3762291a2ec467be4c7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17952483dd0b1e58d246661db72b4a9e9ae0cbeb0653bbebd7c3803a24836f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17952483dd0b1e58d246661db72b4a9e9ae0cbeb0653bbebd7c3803a24836f12->enter($__internal_17952483dd0b1e58d246661db72b4a9e9ae0cbeb0653bbebd7c3803a24836f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JMSTranslationBundle:Translate:messages.html.twig"));

        // line 1
        echo "    <table>
        <thead>
            <tr>
                <th width=\"20%\">ID</th>
                <th width=\"40%\">Translation</th>
                <th width=\"40%\">Additional Information</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 10, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["message"]) {
            // line 11
            echo "            <tr>
                <td>
                    <a class=\"jms-translation-anchor\" id=\"";
            // line 13
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" />
                    <p><abbr title=\"";
            // line 14
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $context["id"], 0, 25), "html", null, true);
            if ((twig_length_filter($this->env, $context["id"]) > 25)) {
                echo "...";
            }
            echo "</abbr></p>
                </td>
                <td>
                    <textarea data-id=\"";
            // line 17
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" class=\"span6\"";
            if (((isset($context["isWriteable"]) || array_key_exists("isWriteable", $context) ? $context["isWriteable"] : (function () { throw new Twig_Error_Runtime('Variable "isWriteable" does not exist.', 17, $this->getSourceContext()); })()) === false)) {
                echo " readonly=\"readonly\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "localeString", array()), "html", null, true);
            echo "</textarea></td>
                <td>
                    ";
            // line 19
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "meaning", array()))) {
                // line 20
                echo "                        <h6>Meaning</h6>
                        <p>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "meaning", array()), "html", null, true);
                echo "</p>
                    ";
            }
            // line 23
            echo "
                    ";
            // line 24
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["alternativeMessages"] ?? null), $context["id"], array(), "array", true, true)) {
                // line 25
                echo "                        <h6>Alternative Translations</h6>
                        ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["alternativeMessages"]) || array_key_exists("alternativeMessages", $context) ? $context["alternativeMessages"] : (function () { throw new Twig_Error_Runtime('Variable "alternativeMessages" does not exist.', 26, $this->getSourceContext()); })()), $context["id"], array(), "array"));
                foreach ($context['_seq'] as $context["locale"] => $context["altMessage"]) {
                    // line 27
                    echo "                        <p>
                            <strong>";
                    // line 28
                    echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                    echo ":</strong> <pre>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["altMessage"], "localeString", array()), "html", null, true);
                    echo "</pre>
                        </p>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['locale'], $context['altMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                    ";
            }
            // line 32
            echo "
                    ";
            // line 33
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "sources", array())) > 0)) {
                // line 34
                echo "                        <h6>Sources</h6>
                        <ul>
                        ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "sources", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                    // line 37
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), $context["source"], "path", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["source"], "line", array()));
                    // line 38
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 38, $this->getSourceContext()); })())) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $context["source"], "html", null, true);
                        echo "\">";
                    } else {
                        echo "<span>";
                    }
                    // line 39
                    echo "                                <li class=\"jms-sources-list-item truncate-left\">";
                    echo twig_escape_filter($this->env, $context["source"], "html", null, true);
                    echo "</li>";
                    // line 40
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 40, $this->getSourceContext()); })())) {
                        echo "</a>";
                    } else {
                        echo "</span>";
                    }
                    // line 41
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                        </ul>
                    ";
            }
            // line 44
            echo "
                    ";
            // line 45
            if (((( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "desc", array())) && (twig_get_attribute($this->env, $this->getSourceContext(),             // line 46
$context["message"], "localeString", array()) != twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "desc", array()))) && (            // line 47
$context["id"] != twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "desc", array()))) && ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 48
($context["alternativeMessages"] ?? null), $context["id"], array(), "array", false, true), (isset($context["sourceLanguage"]) || array_key_exists("sourceLanguage", $context) ? $context["sourceLanguage"] : (function () { throw new Twig_Error_Runtime('Variable "sourceLanguage" does not exist.', 48, $this->getSourceContext()); })()), array(), "array", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 49
(isset($context["alternativeMessages"]) || array_key_exists("alternativeMessages", $context) ? $context["alternativeMessages"] : (function () { throw new Twig_Error_Runtime('Variable "alternativeMessages" does not exist.', 49, $this->getSourceContext()); })()), $context["id"], array(), "array"), (isset($context["sourceLanguage"]) || array_key_exists("sourceLanguage", $context) ? $context["sourceLanguage"] : (function () { throw new Twig_Error_Runtime('Variable "sourceLanguage" does not exist.', 49, $this->getSourceContext()); })()), array(), "array"), "localeString", array()) != twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "desc", array()))))) {
                // line 50
                echo "                        <h6>Description</h6>
                        <p>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "desc", array()), "html", null, true);
                echo "</p>
                    ";
            }
            // line 53
            echo "                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "            <tr>
                <td colspan=\"3\">No messages found</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>
";
        
        $__internal_17952483dd0b1e58d246661db72b4a9e9ae0cbeb0653bbebd7c3803a24836f12->leave($__internal_17952483dd0b1e58d246661db72b4a9e9ae0cbeb0653bbebd7c3803a24836f12_prof);

    }

    public function getTemplateName()
    {
        return "JMSTranslationBundle:Translate:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 60,  176 => 56,  169 => 53,  164 => 51,  161 => 50,  159 => 49,  158 => 48,  157 => 47,  156 => 46,  155 => 45,  152 => 44,  148 => 42,  142 => 41,  136 => 40,  132 => 39,  122 => 38,  120 => 37,  116 => 36,  112 => 34,  110 => 33,  107 => 32,  104 => 31,  93 => 28,  90 => 27,  86 => 26,  83 => 25,  81 => 24,  78 => 23,  73 => 21,  70 => 20,  68 => 19,  57 => 17,  46 => 14,  42 => 13,  38 => 11,  33 => 10,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <table>
        <thead>
            <tr>
                <th width=\"20%\">ID</th>
                <th width=\"40%\">Translation</th>
                <th width=\"40%\">Additional Information</th>
            </tr>
        </thead>
        <tbody>
            {% for id, message in messages %}
            <tr>
                <td>
                    <a class=\"jms-translation-anchor\" id=\"{{ id }}\" />
                    <p><abbr title=\"{{ id }}\">{{ id|slice(0, 25) }}{% if id|length > 25 %}...{% endif %}</abbr></p>
                </td>
                <td>
                    <textarea data-id=\"{{ id }}\" class=\"span6\"{% if isWriteable is same as(false) %} readonly=\"readonly\"{% endif %}>{{ message.localeString }}</textarea></td>
                <td>
                    {% if message.meaning is not empty %}
                        <h6>Meaning</h6>
                        <p>{{ message.meaning }}</p>
                    {% endif %}

                    {% if alternativeMessages[id] is defined %}
                        <h6>Alternative Translations</h6>
                        {% for locale, altMessage in alternativeMessages[id] %}
                        <p>
                            <strong>{{ locale }}:</strong> <pre>{{ altMessage.localeString }}</pre>
                        </p>
                        {% endfor %}
                    {% endif %}

                    {% if message.sources|length > 0 %}
                        <h6>Sources</h6>
                        <ul>
                        {% for source in message.sources %}
                            {%- set link = source.path|file_link(source.line) %}
                            {%- if link %}<a href=\"{{ link }}\" title=\"{{ source }}\">{% else %}<span>{% endif %}
                                <li class=\"jms-sources-list-item truncate-left\">{{ source }}</li>
                            {%- if link %}</a>{% else %}</span>{% endif %}
                        {% endfor %}
                        </ul>
                    {% endif %}

                    {% if message.desc is not empty
                            and message.localeString != message.desc
                            and id != message.desc
                            and (alternativeMessages[id][sourceLanguage] is not defined
                                 or alternativeMessages[id][sourceLanguage].localeString != message.desc) %}
                        <h6>Description</h6>
                        <p>{{ message.desc }}</p>
                    {% endif %}
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"3\">No messages found</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
", "JMSTranslationBundle:Translate:messages.html.twig", "/var/www/edu-yukon/api/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views/Translate/messages.html.twig");
    }
}
