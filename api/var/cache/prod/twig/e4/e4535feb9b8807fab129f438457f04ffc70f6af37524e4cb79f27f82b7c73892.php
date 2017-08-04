<?php

/* EDUBundle:subjects:layout_subjects_delete.html.twig */
class __TwigTemplate_1c9ce2fabd99c0dc2a339d8426a3b632a5b2de2b7c76932b02a9553197b8c7bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:subjects:layout_subjects_delete.html.twig", 1);
        $this->blocks = array(
            'cmi_body' => array($this, 'block_cmi_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EDUBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 7
        echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h4 class=\"bg-danger\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure to delete subject"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["subject"] ?? null), "name", array()), "html", null, true);
        echo "</h4>
                <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/subject/delete/confirm/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["subject"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-sm btn-danger\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, Delete"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["subject"] ?? null), "name", array()), "html", null, true);
        echo " </a>
                <br/><br/>
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                            <tbody>
                                <tr class=\"gradeA odd\" role=\"row\">
                                    <td>
                                        ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Class ID"), "html", null, true);
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["subject"] ?? null), "id", array()), "html", null, true);
        echo " 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Class Name"), "html", null, true);
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["subject"] ?? null), "name", array()), "html", null, true);
        echo "
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "EDUBundle:subjects:layout_subjects_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  74 => 26,  66 => 21,  60 => 18,  43 => 10,  37 => 9,  33 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:subjects:layout_subjects_delete.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/subjects/layout_subjects_delete.html.twig");
    }
}
