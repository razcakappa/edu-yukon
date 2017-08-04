<?php

/* EDUBundle:Form:layout_tograde_form.html.twig */
class __TwigTemplate_b164f8ad8024f3bbbe14bbf6d2beee99f9625e2bbb2b6865712c953f897dc235 extends Twig_Template
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 43
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  81 => 43,  77 => 42,  73 => 41,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:Form:layout_tograde_form.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/layout_tograde_form.html.twig");
    }
}
