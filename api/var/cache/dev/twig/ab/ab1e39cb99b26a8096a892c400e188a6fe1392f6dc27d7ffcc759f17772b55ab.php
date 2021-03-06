<?php

/* EDUBundle:Form:layout_touser_form.html.twig */
class __TwigTemplate_c2649f6eae6b59d03078f3bfee2f7c54acc2bb0147e1107fb15c2fc5bdf48d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:Form:layout_touser_form.html.twig", 1);
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
        $__internal_240a3fae92ba1640ebd55492b8627ac7f1132dab1335eac1f43b26f8d4de14b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240a3fae92ba1640ebd55492b8627ac7f1132dab1335eac1f43b26f8d4de14b7->enter($__internal_240a3fae92ba1640ebd55492b8627ac7f1132dab1335eac1f43b26f8d4de14b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Form:layout_touser_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_240a3fae92ba1640ebd55492b8627ac7f1132dab1335eac1f43b26f8d4de14b7->leave($__internal_240a3fae92ba1640ebd55492b8627ac7f1132dab1335eac1f43b26f8d4de14b7_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_7ebb4e4357041608348fcae06b801739b011d283a985c2ba5014806162c0006e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebb4e4357041608348fcae06b801739b011d283a985c2ba5014806162c0006e->enter($__internal_7ebb4e4357041608348fcae06b801739b011d283a985c2ba5014806162c0006e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <p>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
    <script>
        document.getElementById(\"compose\").addEventListener(\"submit\", function(event){
            event.preventDefault();
            
            var title   = \$(\"#new_message_subject\").val();
            var to      = \$(\"#new_message_receiver :selected\").text();
            var message = \$(\"#new_message_content\").val();
            
            \$('#title').text(title);
            \$('#to').text(to);
            \$('#message').text(message);
            
            \$('#myModal').modal('show');
            
            \$('#send').click(function(){
                \$('#compose').submit();
            });
        });
    </script>
";
        
        $__internal_7ebb4e4357041608348fcae06b801739b011d283a985c2ba5014806162c0006e->leave($__internal_7ebb4e4357041608348fcae06b801739b011d283a985c2ba5014806162c0006e_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Form:layout_touser_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  59 => 15,  55 => 14,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}
    
{% block cmi_body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <p>{{ message }}</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2\">
            
        </div>
        <div class=\"col-md-6\">
            {{form_start(form)}}
            {{form_widget(form)}}
            {{form_end(form)}}
        </div>
    </div>
    <script>
        document.getElementById(\"compose\").addEventListener(\"submit\", function(event){
            event.preventDefault();
            
            var title   = \$(\"#new_message_subject\").val();
            var to      = \$(\"#new_message_receiver :selected\").text();
            var message = \$(\"#new_message_content\").val();
            
            \$('#title').text(title);
            \$('#to').text(to);
            \$('#message').text(message);
            
            \$('#myModal').modal('show');
            
            \$('#send').click(function(){
                \$('#compose').submit();
            });
        });
    </script>
{% endblock %}
", "EDUBundle:Form:layout_touser_form.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/layout_touser_form.html.twig");
    }
}
