<?php

/* EDUBundle:student:layout_student_update.html.twig */
class __TwigTemplate_1fe5a5ca026bbfdf971c707b8cc3ec838a26ac9b939c02eb30d4eed3ceec7723 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:student:layout_student_update.html.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <table width=\"100%\" class=\"table table-striped table-bordered table-hover dataTable no-footer dtr-inline\" id=\"dataTables-example\" role=\"grid\" aria-describedby=\"dataTables-example_info\" style=\"width: 100%;\">
                        <tbody>
                            <tr class=\"gradeA odd\" role=\"row\">
                                <td>
                                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current Class"), "html", null, true);
        echo " 
                                </td>
                                <td>
                                    ";
        // line 24
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current Parent"), "html", null, true);
        echo " 
                                </td>
                                <td>
                                    ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["parent"] ?? null), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["parent"] ?? null), "lastname", array()), "html", null, true);
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo " 
                                </td>
                                <td>
                                    ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array()), "html", null, true);
        echo " 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
        echo " 
                                </td>
                                <td>
                                    ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "lastname", array()), "html", null, true);
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo " 
                                </td>
                                <td>
                                    ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone Number"), "html", null, true);
        echo " 
                                </td>
                                <td>
                                    ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "phoneNumber", array()), "html", null, true);
        echo "
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EDUBundle:student:layout_student_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 64,  133 => 61,  125 => 56,  119 => 53,  109 => 48,  103 => 45,  95 => 40,  89 => 37,  79 => 32,  73 => 29,  65 => 24,  59 => 21,  46 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:student:layout_student_update.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/student/layout_student_update.html.twig");
    }
}
