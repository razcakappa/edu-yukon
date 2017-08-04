<?php

/* EDUBundle:beam:layout_all_beam.html.twig */
class __TwigTemplate_e2a714aac168a80ccec4b160383128e2ecf5f14273e13f59b2d90652277d9085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CMIBundle::layout.html.twig", "EDUBundle:beam:layout_all_beam.html.twig", 1);
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
        $__internal_7e22e7eae37b03b2babca47e366d2b4b2a1b637ec19ed499d1c9015ced071c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e22e7eae37b03b2babca47e366d2b4b2a1b637ec19ed499d1c9015ced071c91->enter($__internal_7e22e7eae37b03b2babca47e366d2b4b2a1b637ec19ed499d1c9015ced071c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:beam:layout_all_beam.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e22e7eae37b03b2babca47e366d2b4b2a1b637ec19ed499d1c9015ced071c91->leave($__internal_7e22e7eae37b03b2babca47e366d2b4b2a1b637ec19ed499d1c9015ced071c91_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_9ba382096c0494560c410e9b7f3acfed4272ad68bed6233fed6b605fd14e5abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba382096c0494560c410e9b7f3acfed4272ad68bed6233fed6b605fd14e5abf->enter($__internal_9ba382096c0494560c410e9b7f3acfed4272ad68bed6233fed6b605fd14e5abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <h3><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cmi_beam_add");
        echo "\">Add Beam</a></h3>
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <thead>
                            <tr role=\"row\">
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >Content</th>
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >FR</th>
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >NL</th>
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >EN</th>
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["beams"]) || array_key_exists("beams", $context) ? $context["beams"] : (function () { throw new Twig_Error_Runtime('Variable "beams" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["beam"]) {
            // line 22
            echo "                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    ";
            // line 24
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beam"], "name", array()), 0, 350);
            echo "
                                </td>
                                <td>
                                    ";
            // line 27
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["beam"], "beamLabel", array()), 0, array(), "array"), "label", array()), 0, 350);
            echo "
                                </td>
                                <td>
                                    ";
            // line 30
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["beam"], "beamLabel", array()), 1, array(), "array"), "label", array()), 0, 350);
            echo "
                                </td>
                                <td>
                                    ";
            // line 33
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["beam"], "beamLabel", array()), 2, array(), "array"), "label", array()), 0, 350);
            echo "
                                </td>
                                <td>
                                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cmi_beam_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["beam"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_9ba382096c0494560c410e9b7f3acfed4272ad68bed6233fed6b605fd14e5abf->leave($__internal_9ba382096c0494560c410e9b7f3acfed4272ad68bed6233fed6b605fd14e5abf_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:beam:layout_all_beam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 40,  94 => 36,  88 => 33,  82 => 30,  76 => 27,  70 => 24,  66 => 22,  62 => 21,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CMIBundle::layout.html.twig\" %}

{% block cmi_body %}

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <h3><a href=\"{{ path('cmi_beam_add') }}\">Add Beam</a></h3>
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <thead>
                            <tr role=\"row\">
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >Content</th>
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >FR</th>
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >NL</th>
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >EN</th>
                                <th  tabindex=\"0\" aria-controls=\"dataTables-example\" rowspan=\"1\" colspan=\"1\" >Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        {%  for beam in beams %}
                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    {{ beam.name|slice(0,350)|raw }}
                                </td>
                                <td>
                                    {{ beam.beamLabel[0].label|slice(0,350)|raw }}
                                </td>
                                <td>
                                    {{ beam.beamLabel[1].label|slice(0,350)|raw }}
                                </td>
                                <td>
                                    {{ beam.beamLabel[2].label|slice(0,350)|raw }}
                                </td>
                                <td>
                                    <a href=\"{{ path('cmi_beam_edit', {'id':beam.id}) }}\">Edit</a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "EDUBundle:beam:layout_all_beam.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/beam/layout_all_beam.html.twig");
    }
}
