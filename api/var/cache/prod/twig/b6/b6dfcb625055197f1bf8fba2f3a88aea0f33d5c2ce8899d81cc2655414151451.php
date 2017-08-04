<?php

/* EDUBundle::layout.html.twig */
class __TwigTemplate_b5e72f2e49eaac241e346ee73dd9046b7a265527c9c63b08cf06d9d6c1d1dfc2 extends Twig_Template
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
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
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
    }

    // line 24
    public function block_crossx_top_buttons($context, array $blocks = array())
    {
        // line 25
        echo "                ";
    }

    // line 35
    public function block_cmi_body($context, array $blocks = array())
    {
        // line 36
        echo "        ";
    }

    // line 38
    public function block_fos_user_content($context, array $blocks = array())
    {
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
        return array (  129 => 38,  125 => 36,  122 => 35,  118 => 25,  115 => 24,  111 => 46,  102 => 39,  100 => 38,  97 => 37,  94 => 35,  83 => 33,  78 => 32,  67 => 30,  63 => 29,  58 => 26,  56 => 24,  50 => 23,  42 => 18,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle::layout.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/layout.html.twig");
    }
}
