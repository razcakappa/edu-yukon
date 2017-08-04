<?php

/* EDUBundle::layout.html.twig */
class __TwigTemplate_b4eaade6b68d0b1b707d60babb4aaa619bfd8df6c034311a80f91f7b51842b35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'crossx_top_buttons' => array($this, 'block_crossx_top_buttons'),
            'cmi_body' => array($this, 'block_cmi_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be1f38f9314f902abb2c0bda97226590e1f0d42b3120fac3005c3b906b63a8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1f38f9314f902abb2c0bda97226590e1f0d42b3120fac3005c3b906b63a8b7->enter($__internal_be1f38f9314f902abb2c0bda97226590e1f0d42b3120fac3005c3b906b63a8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle::layout.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "EDUBundle:Includes:header.html.twig");
        echo "

<div id=\"wrapper\">
    
     <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\">
  </script>
  <script>
    function detail(x){
  
      var x
     \$('#detail_'+x).appendTo(\"body\").modal('show');
      
    }
  </script>
    

    ";
        // line 18
        echo twig_include($this->env, $context, "EDUBundle:Includes:menu.html.twig");
        echo "

    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 23
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
        }
        echo "</h1>
                ";
        // line 24
        $this->displayBlock('crossx_top_buttons', $context, $blocks);
        // line 26
        echo "            </div>
            <!-- /.col-lg-12 -->
        </div>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "            <div class=\"alert alert-info\" style=\"padding: 15px;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Info"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "            <div class=\"alert alert-danger\" style=\"padding: 15px;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        ";
        $this->displayBlock('cmi_body', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 39
        echo "
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

";
        // line 46
        echo twig_include($this->env, $context, "EDUBundle:Includes:footer.html.twig");
        
        $__internal_be1f38f9314f902abb2c0bda97226590e1f0d42b3120fac3005c3b906b63a8b7->leave($__internal_be1f38f9314f902abb2c0bda97226590e1f0d42b3120fac3005c3b906b63a8b7_prof);

    }

    // line 24
    public function block_crossx_top_buttons($context, array $blocks = array())
    {
        $__internal_e3eb4b503b381d665bc7937fe521d06e9cde3060922a1c3e5b3b890f4d0ae4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3eb4b503b381d665bc7937fe521d06e9cde3060922a1c3e5b3b890f4d0ae4d8->enter($__internal_e3eb4b503b381d665bc7937fe521d06e9cde3060922a1c3e5b3b890f4d0ae4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crossx_top_buttons"));

        // line 25
        echo "                ";
        
        $__internal_e3eb4b503b381d665bc7937fe521d06e9cde3060922a1c3e5b3b890f4d0ae4d8->leave($__internal_e3eb4b503b381d665bc7937fe521d06e9cde3060922a1c3e5b3b890f4d0ae4d8_prof);

    }

    // line 35
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_5df1adfd6c03a3982741b6742cc9109009353b02982a5563ba100a8efe10838e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df1adfd6c03a3982741b6742cc9109009353b02982a5563ba100a8efe10838e->enter($__internal_5df1adfd6c03a3982741b6742cc9109009353b02982a5563ba100a8efe10838e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 36
        echo "        ";
        
        $__internal_5df1adfd6c03a3982741b6742cc9109009353b02982a5563ba100a8efe10838e->leave($__internal_5df1adfd6c03a3982741b6742cc9109009353b02982a5563ba100a8efe10838e_prof);

    }

    // line 38
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ec779da2d00441948234440c741e2a50b20ab801a15f4aa07fcfecc9707e4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec779da2d00441948234440c741e2a50b20ab801a15f4aa07fcfecc9707e4c3->enter($__internal_9ec779da2d00441948234440c741e2a50b20ab801a15f4aa07fcfecc9707e4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_9ec779da2d00441948234440c741e2a50b20ab801a15f4aa07fcfecc9707e4c3->leave($__internal_9ec779da2d00441948234440c741e2a50b20ab801a15f4aa07fcfecc9707e4c3_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 38,  140 => 36,  134 => 35,  127 => 25,  121 => 24,  114 => 46,  105 => 39,  103 => 38,  100 => 37,  97 => 35,  86 => 33,  81 => 32,  70 => 30,  66 => 29,  61 => 26,  59 => 24,  53 => 23,  45 => 18,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include(\"EDUBundle:Includes:header.html.twig\") }}

<div id=\"wrapper\">
    
     <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\">
  </script>
  <script>
    function detail(x){
  
      var x
     \$('#detail_'+x).appendTo(\"body\").modal('show');
      
    }
  </script>
    

    {{ include(\"EDUBundle:Includes:menu.html.twig\") }}

    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% if title is defined %}{{ title }}{% endif %}</h1>
                {% block crossx_top_buttons %}
                {% endblock %}
            </div>
            <!-- /.col-lg-12 -->
        </div>
        {% for message in app.session.flashbag.get('notice') %}
            <div class=\"alert alert-info\" style=\"padding: 15px;\">{{ 'Info'|trans }} : {{ message }}</div>
        {% endfor %}
        {% for message in app.session.flashbag.get('warning') %}
            <div class=\"alert alert-danger\" style=\"padding: 15px;\">{{ 'Error'|trans }} : {{ message }}</div>
        {% endfor %}
        {% block cmi_body %}
        {% endblock %}

        {% block fos_user_content %}{% endblock %}

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

{{ include(\"EDUBundle:Includes:footer.html.twig\") }}", "EDUBundle::layout.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/layout.html.twig");
    }
}
