<?php

/* EDUBundle::layout.html.twig */
class __TwigTemplate_4d11760b303ac51096ee33d46a64e8ca597ad262eba4bc43ceb6e32506c90f0e extends Twig_Template
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
        $__internal_542ff08666cb80bf9e86c50ef8e17ac514a436d98a41db161612dc9593507152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542ff08666cb80bf9e86c50ef8e17ac514a436d98a41db161612dc9593507152->enter($__internal_542ff08666cb80bf9e86c50ef8e17ac514a436d98a41db161612dc9593507152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle::layout.html.twig"));

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
        
        $__internal_542ff08666cb80bf9e86c50ef8e17ac514a436d98a41db161612dc9593507152->leave($__internal_542ff08666cb80bf9e86c50ef8e17ac514a436d98a41db161612dc9593507152_prof);

    }

    // line 24
    public function block_crossx_top_buttons($context, array $blocks = array())
    {
        $__internal_b0f97339985efab6165cc4d710ab18150252c9fd09e445fa81bbab593cc8f6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f97339985efab6165cc4d710ab18150252c9fd09e445fa81bbab593cc8f6a9->enter($__internal_b0f97339985efab6165cc4d710ab18150252c9fd09e445fa81bbab593cc8f6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crossx_top_buttons"));

        // line 25
        echo "                ";
        
        $__internal_b0f97339985efab6165cc4d710ab18150252c9fd09e445fa81bbab593cc8f6a9->leave($__internal_b0f97339985efab6165cc4d710ab18150252c9fd09e445fa81bbab593cc8f6a9_prof);

    }

    // line 35
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_622641bfe031d703d8937057ec0af38290c7467adf94aa1baec2833328d3a496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622641bfe031d703d8937057ec0af38290c7467adf94aa1baec2833328d3a496->enter($__internal_622641bfe031d703d8937057ec0af38290c7467adf94aa1baec2833328d3a496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 36
        echo "        ";
        
        $__internal_622641bfe031d703d8937057ec0af38290c7467adf94aa1baec2833328d3a496->leave($__internal_622641bfe031d703d8937057ec0af38290c7467adf94aa1baec2833328d3a496_prof);

    }

    // line 38
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc2b045926013c2912d1497a01baecd3bdf75a6af003aa1d523750ede8171a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2b045926013c2912d1497a01baecd3bdf75a6af003aa1d523750ede8171a8b->enter($__internal_dc2b045926013c2912d1497a01baecd3bdf75a6af003aa1d523750ede8171a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_dc2b045926013c2912d1497a01baecd3bdf75a6af003aa1d523750ede8171a8b->leave($__internal_dc2b045926013c2912d1497a01baecd3bdf75a6af003aa1d523750ede8171a8b_prof);

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
