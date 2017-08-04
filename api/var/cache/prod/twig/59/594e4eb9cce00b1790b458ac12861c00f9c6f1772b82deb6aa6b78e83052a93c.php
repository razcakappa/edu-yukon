<?php

/* EDUBundle:rid:layout_all_rid.html.twig */
class __TwigTemplate_2e20aa3602f09d126d46c8fa9e4fc3d95332d50da0132f0dfde387e355f8073c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CMIBundle::layout.html.twig", "EDUBundle:rid:layout_all_rid.html.twig", 1);
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

    // line 2
    public function block_cmi_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <h3><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cmi_rid_add");
        echo "\">Add RID</a></h3>
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <thead>
                            <tr role=\"row\">
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >Name</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >Edit</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rids"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rid"]) {
            // line 18
            echo "                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["rid"], "name", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cmi_rid_edit", array("ridId" => twig_get_attribute($this->env, $this->getSourceContext(), $context["rid"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cmi_rid_delete", array("rid" => twig_get_attribute($this->env, $this->getSourceContext(), $context["rid"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure?')\">Delete</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
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
        return "EDUBundle:rid:layout_all_rid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 30,  70 => 26,  64 => 23,  58 => 20,  54 => 18,  50 => 17,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:rid:layout_all_rid.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/rid/layout_all_rid.html.twig");
    }
}
