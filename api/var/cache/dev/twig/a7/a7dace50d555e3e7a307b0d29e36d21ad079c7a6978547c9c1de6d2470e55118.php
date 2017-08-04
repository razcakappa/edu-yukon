<?php

/* EDUBundle:Form:layout_tograde_form.html.twig */
class __TwigTemplate_454314acd8643216b97bd662d3d6d68373e064b541c0030b4c28f49653a6df71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:Form:layout_tograde_form.html.twig", 1);
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
        $__internal_c2abcfe5ba966e8e5931e2609b573a58a2d9e2a0fff787273d88f4b81b24d252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2abcfe5ba966e8e5931e2609b573a58a2d9e2a0fff787273d88f4b81b24d252->enter($__internal_c2abcfe5ba966e8e5931e2609b573a58a2d9e2a0fff787273d88f4b81b24d252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Form:layout_tograde_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2abcfe5ba966e8e5931e2609b573a58a2d9e2a0fff787273d88f4b81b24d252->leave($__internal_c2abcfe5ba966e8e5931e2609b573a58a2d9e2a0fff787273d88f4b81b24d252_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_bbacc8adc2f52890562a2e5e58fb3df20791aefe0261277062f6ee42ebf6ccb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbacc8adc2f52890562a2e5e58fb3df20791aefe0261277062f6ee42ebf6ccb3->enter($__internal_bbacc8adc2f52890562a2e5e58fb3df20791aefe0261277062f6ee42ebf6ccb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    <div class=\"row\">
        
        
        <div class=\"col-md-12\">
            <p>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"row\">
       
        
        <div class=\"col-md-2\">
        <script>
            
            /*
        \$(document).ready(function() {
               \$(\"#grade_message_Select_All_Grade\").click(function() {
                
                var Grade_val= \$( \"#grade_message_Grade_val\" ).val();
                
                var res = Grade_val.split(\"-\");
                
                
                for (i = 0; i < res.length; i++) {
                  
                    
                    \$('.grade_message_'.i).prop('checked', true);
                    
                    }
                 
                 
                 
               });
                
            });*/      
             </script>
        </div>
        <div class=\"col-md-6\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 43
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
    <script>
        document.getElementById(\"compose\").addEventListener(\"submit\", function(event){
            event.preventDefault();
            
            var title   = \$(\"#grade_message_subject\").val();
            //var to      = \$(\"#new_message_receiver :selected\").text();
            //
            var to      = \$(\"#grade_message input:checkbox:checked\").prev(\"label\").text().match(/.{1,9}/g);
            var message = \$(\"#grade_message_content\").val();
            
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
        
        $__internal_bbacc8adc2f52890562a2e5e58fb3df20791aefe0261277062f6ee42ebf6ccb3->leave($__internal_bbacc8adc2f52890562a2e5e58fb3df20791aefe0261277062f6ee42ebf6ccb3_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Form:layout_tograde_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 43,  86 => 42,  82 => 41,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
        <script>
            
            /*
        \$(document).ready(function() {
               \$(\"#grade_message_Select_All_Grade\").click(function() {
                
                var Grade_val= \$( \"#grade_message_Grade_val\" ).val();
                
                var res = Grade_val.split(\"-\");
                
                
                for (i = 0; i < res.length; i++) {
                  
                    
                    \$('.grade_message_'.i).prop('checked', true);
                    
                    }
                 
                 
                 
               });
                
            });*/      
             </script>
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
            
            var title   = \$(\"#grade_message_subject\").val();
            //var to      = \$(\"#new_message_receiver :selected\").text();
            //
            var to      = \$(\"#grade_message input:checkbox:checked\").prev(\"label\").text().match(/.{1,9}/g);
            var message = \$(\"#grade_message_content\").val();
            
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
", "EDUBundle:Form:layout_tograde_form.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/layout_tograde_form.html.twig");
    }
}
