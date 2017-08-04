<?php

/* EDUBundle:rid:layout_all_rid.html.twig */
class __TwigTemplate_f0dc9700838f93040e855b99b4b3823f4a2d417fdb6b9cd1a282c6345dfe56c3 extends Twig_Template
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
        $__internal_56ee0fed467d40f73c3d9e4d02b32f97597366a1e6d3044e6e42c02a9963c6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ee0fed467d40f73c3d9e4d02b32f97597366a1e6d3044e6e42c02a9963c6d5->enter($__internal_56ee0fed467d40f73c3d9e4d02b32f97597366a1e6d3044e6e42c02a9963c6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:rid:layout_all_rid.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56ee0fed467d40f73c3d9e4d02b32f97597366a1e6d3044e6e42c02a9963c6d5->leave($__internal_56ee0fed467d40f73c3d9e4d02b32f97597366a1e6d3044e6e42c02a9963c6d5_prof);

    }

    // line 2
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_2a624e559a75af4fac1e21cc5dc0f0360baa97a57a5617b3777a3df38406dacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a624e559a75af4fac1e21cc5dc0f0360baa97a57a5617b3777a3df38406dacf->enter($__internal_2a624e559a75af4fac1e21cc5dc0f0360baa97a57a5617b3777a3df38406dacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["rids"]) || array_key_exists("rids", $context) ? $context["rids"] : (function () { throw new Twig_Error_Runtime('Variable "rids" does not exist.', 17, $this->getSourceContext()); })()));
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
        
        $__internal_2a624e559a75af4fac1e21cc5dc0f0360baa97a57a5617b3777a3df38406dacf->leave($__internal_2a624e559a75af4fac1e21cc5dc0f0360baa97a57a5617b3777a3df38406dacf_prof);

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
        return array (  89 => 30,  79 => 26,  73 => 23,  67 => 20,  63 => 18,  59 => 17,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CMIBundle::layout.html.twig\" %}
{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <h3><a href=\"{{ path('cmi_rid_add') }}\">Add RID</a></h3>
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <thead>
                            <tr role=\"row\">
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >Name</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >Edit</th>
                                <th  tabindex=\"0\"  rowspan=\"1\" colspan=\"1\" >Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        {%  for rid in rids %}
                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    {{ rid.name }}
                                </td>
                                <td>
                                    <a href=\"{{ path('cmi_rid_edit', {'ridId':rid.id}) }}\">Edit</a>
                                </td>
                                <td>
                                    <a href=\"{{ path('cmi_rid_delete', {'rid':rid.id}) }}\" onclick=\"return confirm('Are you sure?')\">Delete</a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "EDUBundle:rid:layout_all_rid.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/rid/layout_all_rid.html.twig");
    }
}
