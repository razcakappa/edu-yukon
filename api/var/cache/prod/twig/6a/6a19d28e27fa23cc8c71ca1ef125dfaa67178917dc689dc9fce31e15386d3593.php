<?php

/* EDUBundle:beam:layout_all_beam.html.twig */
class __TwigTemplate_79ae07127605d0b87d25e8fa6603bc3682f46dfb43abbf660f2c7475a44049a3 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["beams"] ?? null));
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
        return array (  95 => 40,  85 => 36,  79 => 33,  73 => 30,  67 => 27,  61 => 24,  57 => 22,  53 => 21,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:beam:layout_all_beam.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/beam/layout_all_beam.html.twig");
    }
}
