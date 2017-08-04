<?php

/* EDUBundle:Form:layout_toclasses_form.html.twig */
class __TwigTemplate_2b149b5df3e85fccbc1eb4be8b6e5ef85b1e83866b95c65fae786ec95175b64f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:Form:layout_toclasses_form.html.twig", 1);
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
        $__internal_2b30244e5ed1a96d866df30e29805ecace1a0c89a507fd6b683964046ada6628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b30244e5ed1a96d866df30e29805ecace1a0c89a507fd6b683964046ada6628->enter($__internal_2b30244e5ed1a96d866df30e29805ecace1a0c89a507fd6b683964046ada6628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Form:layout_toclasses_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b30244e5ed1a96d866df30e29805ecace1a0c89a507fd6b683964046ada6628->leave($__internal_2b30244e5ed1a96d866df30e29805ecace1a0c89a507fd6b683964046ada6628_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_c63d8ecb512d208c69229cad8ca1729b7c27141b76cd913d9a5dcb046d13faf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63d8ecb512d208c69229cad8ca1729b7c27141b76cd913d9a5dcb046d13faf2->enter($__internal_c63d8ecb512d208c69229cad8ca1729b7c27141b76cd913d9a5dcb046d13faf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

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
            
            
        </div>
        <div class=\"col-md-6\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
    <script>
        document.getElementById(\"compose\").addEventListener(\"submit\", function(event){
            event.preventDefault();
            
            var title   = \$(\"#class_message_subject\").val();
            var to      = \$(\"#class_message_class input:checkbox:checked\").next(\"label\").text().match(/.{1,3}/g);

            var message = \$(\"#class_message_content\").val();
            
            \$('#title').text(title);
            \$('#to').text(to);
            \$('#message').text(message);
            
            \$('#myModal').modal('show');
            
            \$('#send').click(function(){
                \$('#compose').submit();
            });
        });
    </script>
    <script>
        \$(document).ready(function(e){ // message/compose/toclass :: display same grade classes in one row
            
            // this array saves the first char of every class name - no duplicates
            var x = new Array();
            
            \$('#class_message_class label').each(function( index ){
                var class_name = \$(this).html();
                
                if(x.indexOf(class_name.charAt(0)) >= 0){ // skip if the char already exists in X
                    return true;
                }
                else{
                    x.push(class_name.charAt(0)); // inserting forst char to X   
                }          
            });
            
            \$('#class_message_class label').each(function( index ){ // select and go through every label element
                var class_name = \$(this).html();
                var element = \$(this);
                
                \$.each(x,function(index){
                    var n = class_name.indexOf(x[index]); // checking class name for grading
                    
                    
                    if(n  >= 0){ // grade found, adding a unique class for later identification 
                        var name = 'TEST-CLASS'+index;
                        element.addClass(name);                    
                        element.prev('input').addClass(name)
                    }
                    
                    return true;
                });
            });
            
            
            \$.each(x,function(index){ // gong through each grade and wrapping with div               
                \$('.TEST-CLASS'+index).wrapAll( \"<div></div>\" );
            });
            
            
        });
    </script>
";
        
        $__internal_c63d8ecb512d208c69229cad8ca1729b7c27141b76cd913d9a5dcb046d13faf2->leave($__internal_c63d8ecb512d208c69229cad8ca1729b7c27141b76cd913d9a5dcb046d13faf2_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Form:layout_toclasses_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  63 => 19,  59 => 18,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
            
            var title   = \$(\"#class_message_subject\").val();
            var to      = \$(\"#class_message_class input:checkbox:checked\").next(\"label\").text().match(/.{1,3}/g);

            var message = \$(\"#class_message_content\").val();
            
            \$('#title').text(title);
            \$('#to').text(to);
            \$('#message').text(message);
            
            \$('#myModal').modal('show');
            
            \$('#send').click(function(){
                \$('#compose').submit();
            });
        });
    </script>
    <script>
        \$(document).ready(function(e){ // message/compose/toclass :: display same grade classes in one row
            
            // this array saves the first char of every class name - no duplicates
            var x = new Array();
            
            \$('#class_message_class label').each(function( index ){
                var class_name = \$(this).html();
                
                if(x.indexOf(class_name.charAt(0)) >= 0){ // skip if the char already exists in X
                    return true;
                }
                else{
                    x.push(class_name.charAt(0)); // inserting forst char to X   
                }          
            });
            
            \$('#class_message_class label').each(function( index ){ // select and go through every label element
                var class_name = \$(this).html();
                var element = \$(this);
                
                \$.each(x,function(index){
                    var n = class_name.indexOf(x[index]); // checking class name for grading
                    
                    
                    if(n  >= 0){ // grade found, adding a unique class for later identification 
                        var name = 'TEST-CLASS'+index;
                        element.addClass(name);                    
                        element.prev('input').addClass(name)
                    }
                    
                    return true;
                });
            });
            
            
            \$.each(x,function(index){ // gong through each grade and wrapping with div               
                \$('.TEST-CLASS'+index).wrapAll( \"<div></div>\" );
            });
            
            
        });
    </script>
{% endblock %}

", "EDUBundle:Form:layout_toclasses_form.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/layout_toclasses_form.html.twig");
    }
}
