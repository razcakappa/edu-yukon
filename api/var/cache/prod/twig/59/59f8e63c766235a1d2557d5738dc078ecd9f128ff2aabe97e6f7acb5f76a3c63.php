<?php

/* EDUBundle:Form:layout_toclasses_form.html.twig */
class __TwigTemplate_4b027d08a67c7196331b73620bcd5399893f74b851cfa42aefd4735dfb9b0801 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
       
        <div class=\"col-md-12\">
            
            <p>";
        // line 8
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</p>
        </div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-2\">
            
            
        </div>
        <div class=\"col-md-6\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  58 => 20,  54 => 19,  50 => 18,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:Form:layout_toclasses_form.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/layout_toclasses_form.html.twig");
    }
}
