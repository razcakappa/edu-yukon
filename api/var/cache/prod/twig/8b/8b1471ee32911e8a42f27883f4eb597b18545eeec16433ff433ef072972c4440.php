<?php

/* JMSTranslationBundle:Translate:messages.html.twig */
class __TwigTemplate_214b48a3aa819b3efe8cf75aace10d38e8a81a557822d4299616fa4c2225247a extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
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
            if ((($context["isWriteable"] ?? null) === false)) {
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
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["alternativeMessages"] ?? null), $context["id"], array(), "array"));
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
                    if (($context["link"] ?? null)) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
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
                    if (($context["link"] ?? null)) {
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
($context["alternativeMessages"] ?? null), $context["id"], array(), "array", false, true), ($context["sourceLanguage"] ?? null), array(), "array", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 49
($context["alternativeMessages"] ?? null), $context["id"], array(), "array"), ($context["sourceLanguage"] ?? null), array(), "array"), "localeString", array()) != twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "desc", array()))))) {
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
        return array (  182 => 60,  173 => 56,  166 => 53,  161 => 51,  158 => 50,  156 => 49,  155 => 48,  154 => 47,  153 => 46,  152 => 45,  149 => 44,  145 => 42,  139 => 41,  133 => 40,  129 => 39,  119 => 38,  117 => 37,  113 => 36,  109 => 34,  107 => 33,  104 => 32,  101 => 31,  90 => 28,  87 => 27,  83 => 26,  80 => 25,  78 => 24,  75 => 23,  70 => 21,  67 => 20,  65 => 19,  54 => 17,  43 => 14,  39 => 13,  35 => 11,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JMSTranslationBundle:Translate:messages.html.twig", "/var/www/edu-yukon/api/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views/Translate/messages.html.twig");
    }
}
