<?php

/* EDUBundle:Form:layout_toalluser_form.html.twig */
class __TwigTemplate_a3070be5988a8c076a2daf7ef360a7d34ad6ed5a63893c3f6f070fe5116b86e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:Form:layout_toalluser_form.html.twig", 1);
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
        $__internal_bf9337e732e66154d077abaaca9cc7b42f9b6b16cb7c36c6abfbeab4159322d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9337e732e66154d077abaaca9cc7b42f9b6b16cb7c36c6abfbeab4159322d1->enter($__internal_bf9337e732e66154d077abaaca9cc7b42f9b6b16cb7c36c6abfbeab4159322d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Form:layout_toalluser_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf9337e732e66154d077abaaca9cc7b42f9b6b16cb7c36c6abfbeab4159322d1->leave($__internal_bf9337e732e66154d077abaaca9cc7b42f9b6b16cb7c36c6abfbeab4159322d1_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_e402d0ace5f8ba265192bd3cbf9589bc62969ec5b208ea4b9ccd16ada31cc2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e402d0ace5f8ba265192bd3cbf9589bc62969ec5b208ea4b9ccd16ada31cc2b0->enter($__internal_e402d0ace5f8ba265192bd3cbf9589bc62969ec5b208ea4b9ccd16ada31cc2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

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
            
            var title   = \$(\"#new_message_to_all_subject\").val();
            //var to      = \$(\"#new_message_receiver :selected\").text();
            var message = \$(\"#new_message_to_all_content\").val();
            
            \$('#title').text(title);
            \$('#to').text('All Users');
            \$('#message').text(message);
            
            \$('#myModal').modal('show');
            
            \$('#send').click(function(){
                \$('#compose').submit();
            });
        });
    </script>
";
        
        $__internal_e402d0ace5f8ba265192bd3cbf9589bc62969ec5b208ea4b9ccd16ada31cc2b0->leave($__internal_e402d0ace5f8ba265192bd3cbf9589bc62969ec5b208ea4b9ccd16ada31cc2b0_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Form:layout_toalluser_form.html.twig";
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
            
            var title   = \$(\"#new_message_to_all_subject\").val();
            //var to      = \$(\"#new_message_receiver :selected\").text();
            var message = \$(\"#new_message_to_all_content\").val();
            
            \$('#title').text(title);
            \$('#to').text('All Users');
            \$('#message').text(message);
            
            \$('#myModal').modal('show');
            
            \$('#send').click(function(){
                \$('#compose').submit();
            });
        });
    </script>
{% endblock %}
", "EDUBundle:Form:layout_toalluser_form.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/layout_toalluser_form.html.twig");
    }
}
