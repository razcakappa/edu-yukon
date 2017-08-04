<?php

/* EDUBundle:sections:layout_all_sections.html.twig */
class __TwigTemplate_6f2c2bfcc9e6fb56c20323559fbe0f692e30e3693f5636dada194d4c1d2f81d7 extends Twig_Template
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
        $__internal_e6e2f0f0c6025bca23d551d52ff55657b420a21b2720858b5f6fdb842b8e8def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e2f0f0c6025bca23d551d52ff55657b420a21b2720858b5f6fdb842b8e8def->enter($__internal_e6e2f0f0c6025bca23d551d52ff55657b420a21b2720858b5f6fdb842b8e8def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:sections:layout_all_sections.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6e2f0f0c6025bca23d551d52ff55657b420a21b2720858b5f6fdb842b8e8def->leave($__internal_e6e2f0f0c6025bca23d551d52ff55657b420a21b2720858b5f6fdb842b8e8def_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_fcc1afa0bbc0358b18992e1ae73997a8d11b9a0aa816dfe10f9c1a395c53209a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc1afa0bbc0358b18992e1ae73997a8d11b9a0aa816dfe10f9c1a395c53209a->enter($__internal_fcc1afa0bbc0358b18992e1ae73997a8d11b9a0aa816dfe10f9c1a395c53209a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new Twig_Error_Runtime('Variable "sections" does not exist.', 20, $this->getSourceContext()); })()));
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
        
        $__internal_fcc1afa0bbc0358b18992e1ae73997a8d11b9a0aa816dfe10f9c1a395c53209a->leave($__internal_fcc1afa0bbc0358b18992e1ae73997a8d11b9a0aa816dfe10f9c1a395c53209a_prof);

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
        return array (  161 => 49,  151 => 45,  147 => 43,  140 => 42,  138 => 41,  133 => 40,  127 => 39,  125 => 38,  121 => 36,  114 => 35,  112 => 34,  107 => 33,  101 => 32,  99 => 31,  95 => 29,  88 => 28,  86 => 27,  81 => 26,  75 => 25,  73 => 24,  68 => 22,  65 => 21,  61 => 20,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CMIBundle::layout.html.twig\" %}

{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <h3><a href=\"{{ path('cmi_create_section') }}\">Add Section</a></h3>
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
                        {%  for section in sections %}
                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>{{ section.code}}</td>
                                <td>
                                    {% set sectionNameId =0  %}
                                    {% for sectionName in section.sectionLabel if sectionName.language==\"en\" %}
                                        {{ sectionName.name }}
                                        {% set sectionNameId = sectionName.id %}
                                    {% endfor %}
                                </td>
                                <td>
                                    {% set sectionNameId =0  %}
                                    {% for sectionName in section.sectionLabel if sectionName.language==\"fr\" %}
                                        {{ sectionName.name }}
                                        {% set sectionNameId = sectionName.id %}
                                    {% endfor %}
                                </td>
                                <td>
                                    {% set sectionNameId =0  %}
                                    {% for sectionName in section.sectionLabel if sectionName.language==\"nl\" %}
                                        {{ sectionName.name }}
                                        {% set sectionNameId = sectionName.id %}
                                    {% endfor %}
                                </td>
                                <td>
                                    <a href=\"{{ path('cmi_section_edit', {'id':section.id}) }}\">Edit</a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "EDUBundle:sections:layout_all_sections.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/sections/layout_all_sections.html.twig");
    }
}
