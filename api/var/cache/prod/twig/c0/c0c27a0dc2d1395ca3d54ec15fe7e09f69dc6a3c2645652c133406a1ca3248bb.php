<?php

/* EDUBundle:Form:edituser.html.twig */
class __TwigTemplate_efe7868f3971990fd65af9f6b7dd75e1bb2363e0980ab6cda5d5cfa41e857853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:Form:edituser.html.twig", 1);
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
        if (twig_in_filter("ROLE_TEACHER", twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "roles", array()))) {
            // line 10
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/teacher/edit/class/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\">
                    <i class=\"glyphicon glyphicon-plus\">
                    </i>
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Classes"), "html", null, true);
            echo "
                </a>
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/teacher/edit/subject/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\">
                    <i class=\"glyphicon glyphicon-plus\">
                    </i>
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subjects"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 21
        echo "            ";
        if (twig_in_filter("ROLE_STUDENT", twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "roles", array()))) {
            // line 22
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/student/manage/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage"), "html", null, true);
            echo "</a>
            ";
        }
        // line 24
        echo "        </div>
    </div>
    <br><br>
    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EDUBundle:Form:edituser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  95 => 33,  91 => 32,  81 => 24,  71 => 22,  68 => 21,  62 => 18,  54 => 15,  49 => 13,  40 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:Form:edituser.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/edituser.html.twig");
    }
}
