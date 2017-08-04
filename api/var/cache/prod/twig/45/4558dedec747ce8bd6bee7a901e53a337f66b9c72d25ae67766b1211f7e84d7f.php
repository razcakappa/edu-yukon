<?php

/* EDUBundle:sections:layout_all_sections.html.twig */
class __TwigTemplate_ca77560ccf2fff1592f3f35fa47499f1380be2dfe0500923fd31507ce1e30b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CMIBundle::layout.html.twig", "EDUBundle:sections:layout_all_sections.html.twig", 1);
        $this->blocks = array(
            'cmi_body' => array($this, 'block_cmi_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CMIBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <h3><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cmi_create_section");
        echo "\">Add Section</a></h3>
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <thead>
                            <tr role=\"row\">
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >Code</th>
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >EN</th>
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >FR</th>
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >NL</th>
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 21
            echo "                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["section"], "code", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 24
            $context["sectionNameId"] = 0;
            // line 25
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["section"], "sectionLabel", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sectionName"]) {
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["sectionName"], "language", array()) == "en")) {
                    // line 26
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sectionName"], "name", array()), "html", null, true);
                    echo "
                                        ";
                    // line 27
                    $context["sectionNameId"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["sectionName"], "id", array());
                    // line 28
                    echo "                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sectionName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                                </td>
                                <td>
                                    ";
            // line 31
            $context["sectionNameId"] = 0;
            // line 32
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["section"], "sectionLabel", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sectionName"]) {
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["sectionName"], "language", array()) == "fr")) {
                    // line 33
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sectionName"], "name", array()), "html", null, true);
                    echo "
                                        ";
                    // line 34
                    $context["sectionNameId"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["sectionName"], "id", array());
                    // line 35
                    echo "                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sectionName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                                </td>
                                <td>
                                    ";
            // line 38
            $context["sectionNameId"] = 0;
            // line 39
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["section"], "sectionLabel", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sectionName"]) {
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["sectionName"], "language", array()) == "nl")) {
                    // line 40
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sectionName"], "name", array()), "html", null, true);
                    echo "
                                        ";
                    // line 41
                    $context["sectionNameId"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["sectionName"], "id", array());
                    // line 42
                    echo "                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sectionName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                                </td>
                                <td>
                                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cmi_section_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["section"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "EDUBundle:sections:layout_all_sections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 49,  142 => 45,  138 => 43,  131 => 42,  129 => 41,  124 => 40,  118 => 39,  116 => 38,  112 => 36,  105 => 35,  103 => 34,  98 => 33,  92 => 32,  90 => 31,  86 => 29,  79 => 28,  77 => 27,  72 => 26,  66 => 25,  64 => 24,  59 => 22,  56 => 21,  52 => 20,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:sections:layout_all_sections.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/sections/layout_all_sections.html.twig");
    }
}
