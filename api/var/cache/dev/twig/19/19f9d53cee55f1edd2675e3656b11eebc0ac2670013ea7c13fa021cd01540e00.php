<?php

/* EDUBundle:Form:layout_commom_form.html.twig */
class __TwigTemplate_aac70494322811b32b61a5ebe6ba65e7927d335f80caa35a52ada7f17d72644a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EDUBundle::layout.html.twig", "EDUBundle:Form:layout_commom_form.html.twig", 1);
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
        $__internal_5d331df69bd05fc7e22e8e17b1def3861ba4cd47448a6bb028f1e6502e339f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d331df69bd05fc7e22e8e17b1def3861ba4cd47448a6bb028f1e6502e339f80->enter($__internal_5d331df69bd05fc7e22e8e17b1def3861ba4cd47448a6bb028f1e6502e339f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Form:layout_commom_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d331df69bd05fc7e22e8e17b1def3861ba4cd47448a6bb028f1e6502e339f80->leave($__internal_5d331df69bd05fc7e22e8e17b1def3861ba4cd47448a6bb028f1e6502e339f80_prof);

    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
        $__internal_2289980ee7a403379b6b64a24cc46f68a9ceab99ced8d7dbab358780bfd591b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2289980ee7a403379b6b64a24cc46f68a9ceab99ced8d7dbab358780bfd591b7->enter($__internal_2289980ee7a403379b6b64a24cc46f68a9ceab99ced8d7dbab358780bfd591b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmi_body"));

        // line 4
        echo "    

<div class=\"row\">
    <script>
    function form_submit(key_type){
       //alert(key_type);
       \$(\"#form_\"+key_type).submit();   
    }
    </script>
\t<style>
\t\t
\t.table > thead > tr > th {
\t\tvertical-align: middle;
\t}
\t
\ttable.dataTable thead .sorting_asc::after, table.dataTable thead .sorting_desc::after, table.dataTable thead .sorting::after{
\t\tpadding: 0 10px;
\t\tfloat: none;
\t\t
\t}
\t</style>
    
\t";
        // line 26
        if (array_key_exists("names", $context)) {
            // line 27
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new Twig_Error_Runtime('Variable "names" does not exist.', 27, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                echo "\t
\t\t\t<div class=\"col-md-3 \">
\t\t\t\t<div class=\"box_wrap well\">
\t\t\t\t\t<form name=\"form_users\" id=\"form_";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["name"], "Name", array(), "array"), "html", null, true);
                echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" id=\"key_type_";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["name"], "Name", array(), "array"), "html", null, true);
                echo "\" name=\"type\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["name"], "Name", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t";
                // line 34
                $context["title"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["name"], "title", array(), "array");
                echo "\t
\t\t\t\t\t
\t\t\t\t\t";
                // line 36
                if (((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 36, $this->getSourceContext()); })()) == "users-csv-box-title")) {
                    // line 37
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("users-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 38
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 38, $this->getSourceContext()); })()) == "classes-csv-box-title")) {
                    // line 39
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classes-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 40
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 40, $this->getSourceContext()); })()) == "subjects-csv-box-title")) {
                    // line 41
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("subjects-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 42
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 42, $this->getSourceContext()); })()) == "halls-csv-box-title-csv-box-title")) {
                    // line 43
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("halls-csv-box-title-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 44
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 44, $this->getSourceContext()); })()) == "student_parent-csv-box-title")) {
                    // line 45
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("student_parent-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 46
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 46, $this->getSourceContext()); })()) == "class_student-csv-box-title")) {
                    // line 47
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("class_student-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 48
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 48, $this->getSourceContext()); })()) == "class_subs-csv-box-title")) {
                    // line 49
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("class_subs-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 50
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 50, $this->getSourceContext()); })()) == "class_teacher-csv-box-title")) {
                    // line 51
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("class_teacher-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 52
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 52, $this->getSourceContext()); })()) == "teacher_subjects-csv-box-title")) {
                    // line 53
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teacher_subjects-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 55
                echo "\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t<a href=\"";
                // line 57
                echo twig_escape_filter($this->env, (isset($context["site_url"]) || array_key_exists("site_url", $context) ? $context["site_url"] : (function () { throw new Twig_Error_Runtime('Variable "site_url" does not exist.', 57, $this->getSourceContext()); })()), "html", null, true);
                echo "api/web/sample_csvs/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["name"], "Name", array(), "array"), "html", null, true);
                echo ".csv\"  target=\"_blank\" type=\"button\" class=\"btn btn-primary btn_download\">
\t\t\t\t\t";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv-user-sample"), "html", null, true);
                echo "</br> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv-downlord"), "html", null, true);
                echo " <i class=\"fa fa-chevron-circle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"choose_file_title\">
\t\t\t\t\t\t";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv-user-upload"), "html", null, true);
                echo "
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"fileinput fileinput-new\" >
\t\t\t\t\t\t<span class=\" btn-file\"> 
\t\t\t\t\t\t<input type=\"file\" id=\"files_";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["name"], "Name", array(), "array"), "html", null, true);
                echo "\" name=\"file_upload\" required class=\"form-control p10-upld\"  />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"fileinput-filename\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t<button onclick=\"import_init('files_";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["name"], "Name", array(), "array"), "html", null, true);
                echo "','key_type_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["name"], "Name", array(), "array"), "html", null, true);
                echo "')\"  type=\"button\" class=\"btn btn-primary btn_upload\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv-user-import"), "html", null, true);
                echo " </button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t";
        }
        // line 77
        echo "
</div>
\t


<script>
    
    function close_model(){
        \$(\"#mymodal\").remove();
\t}
    
    
    function importModelLoad(status,tbody,key_type) {

        var modle_head='<div class=\"modal fade\" id=\"detail\" role=\"dialog\" tabindex=\"-1\">'+
            '<div class=\"modal-dialog\" role=\"document\">'+
            '<div class=\"modal-content\">'+
            '<div class=\"modal-header\">'+
            '<button type=\"button\" class=\"close\" data-dismiss=\"modal\" onclick=\"close_model()\">&times;'+
            '</button>'+
            '<h4 class=\"modal-title\"><b>";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user-all-popup-heading"), "html", null, true);
        echo "</b>'+
            '</h4></div>';
             //create modle error masages
        var msg_error='<div class=\"alert alert-danger\">'+
                    '<strong>";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_error"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_error_msg"), "html", null, true);
        echo "</div>';
            //create modle sucess masages
        var msg_sucess='<div class=\"alert alert-success\">'+
                    '<strong>";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_sucess"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_sucess_msg"), "html", null, true);
        echo "</div>';
            //start model body
        var tail='<div class=\"modal-body\">';
            //start model footer
        var foter_start='</div><div class=\"modal-footer\">';
           //model error button
        var btn_error='<button type=\"button\"  onclick=\"close_model()\" class=\"btn btn-danger\"             data-dismiss=\"modal\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csvValidationButton-format_wrong"), "html", null, true);
        echo "</button>';
         //model sucess button
        var btn_sucess='<button type=\"button\" onclick=\"form_submit('+\"'\"+key_type+\"'\"+')\" class=\"btn btn-success\">'+
          '";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csvValidationButton-format_correct"), "html", null, true);
        echo "</button>';
          
        var modle_end='</div></div></div></div>';
        
       
        var msg=modle_head;
            if(status==1)
            {msg+=msg_sucess;}
            if(status==0)
            {msg+=msg_error;}
            msg+=tail+tbody+foter_start;
            if(status==1)
            {msg+=btn_error+btn_sucess;}
            if(status==0)
            {msg+=btn_error}
            msg+=modle_end;
            
        
        // create html object and append to body
        document.getElementById(\"import-modal-placeholder\").innerHTML+=msg;
        
        //call bootstarp data table
        \$('#csv_validate').DataTable({
            responsive: true,
            language: {
                \"url\":\"//cdn.datatables.net/plug-ins/1.10.13/i18n/French.json\"
            }
        });
        
        //add style to closet div csv validate
        \$( \"#csv_validate\" ).closest( \"div\" ).css( \"overflow\", \"auto\" );
        //show model
        \$('#detail').appendTo(\"body\").modal('show');
       

    }
   
</script>
";
        
        $__internal_2289980ee7a403379b6b64a24cc46f68a9ceab99ced8d7dbab358780bfd591b7->leave($__internal_2289980ee7a403379b6b64a24cc46f68a9ceab99ced8d7dbab358780bfd591b7_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Form:layout_commom_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 113,  256 => 110,  245 => 104,  237 => 101,  230 => 97,  208 => 77,  205 => 76,  190 => 71,  183 => 67,  174 => 61,  166 => 58,  160 => 57,  156 => 55,  150 => 53,  148 => 52,  143 => 51,  141 => 50,  136 => 49,  134 => 48,  129 => 47,  127 => 46,  122 => 45,  120 => 44,  115 => 43,  113 => 42,  108 => 41,  106 => 40,  101 => 39,  99 => 38,  94 => 37,  92 => 36,  87 => 34,  79 => 31,  75 => 30,  66 => 27,  64 => 26,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EDUBundle::layout.html.twig\" %}
    
{% block cmi_body %}
    

<div class=\"row\">
    <script>
    function form_submit(key_type){
       //alert(key_type);
       \$(\"#form_\"+key_type).submit();   
    }
    </script>
\t<style>
\t\t
\t.table > thead > tr > th {
\t\tvertical-align: middle;
\t}
\t
\ttable.dataTable thead .sorting_asc::after, table.dataTable thead .sorting_desc::after, table.dataTable thead .sorting::after{
\t\tpadding: 0 10px;
\t\tfloat: none;
\t\t
\t}
\t</style>
    
\t{% if names is defined %}
\t\t\t{% for name in names %}\t
\t\t\t<div class=\"col-md-3 \">
\t\t\t\t<div class=\"box_wrap well\">
\t\t\t\t\t<form name=\"form_users\" id=\"form_{{name['Name']}}\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" id=\"key_type_{{name['Name']}}\" name=\"type\" value=\"{{name['Name']}}\">
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t{% set title=name['title'] %}\t
\t\t\t\t\t
\t\t\t\t\t{% if title=='users-csv-box-title' %}
\t\t\t\t\t\t{{'users-csv-box-title'|trans }}
\t\t\t\t\t{% elseif title=='classes-csv-box-title' %}
\t\t\t\t\t\t{{'classes-csv-box-title'|trans }}
\t\t\t\t\t{% elseif title=='subjects-csv-box-title' %}
\t\t\t\t\t\t{{'subjects-csv-box-title'|trans }}
\t\t\t\t\t{% elseif title=='halls-csv-box-title-csv-box-title' %}
\t\t\t\t\t\t{{'halls-csv-box-title-csv-box-title'|trans }}
\t\t\t\t\t{% elseif title=='student_parent-csv-box-title' %}
\t\t\t\t\t\t{{'student_parent-csv-box-title'|trans }}
\t\t\t\t\t{% elseif title=='class_student-csv-box-title' %}
\t\t\t\t\t\t{{'class_student-csv-box-title'|trans }}
\t\t\t\t\t{% elseif title=='class_subs-csv-box-title' %}
\t\t\t\t\t\t{{'class_subs-csv-box-title'|trans }}
\t\t\t\t\t{% elseif title=='class_teacher-csv-box-title' %}
\t\t\t\t\t\t{{'class_teacher-csv-box-title'|trans }}
\t\t\t\t\t{% elseif title=='teacher_subjects-csv-box-title' %}
\t\t\t\t\t\t{{'teacher_subjects-csv-box-title'|trans }}
\t\t\t\t\t{% endif %}
\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t<a href=\"{{site_url}}api/web/sample_csvs/{{name['Name']}}.csv\"  target=\"_blank\" type=\"button\" class=\"btn btn-primary btn_download\">
\t\t\t\t\t{{'csv-user-sample'|trans }}</br> {{'csv-downlord'|trans }} <i class=\"fa fa-chevron-circle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"choose_file_title\">
\t\t\t\t\t\t{{'csv-user-upload'|trans }}
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"fileinput fileinput-new\" >
\t\t\t\t\t\t<span class=\" btn-file\"> 
\t\t\t\t\t\t<input type=\"file\" id=\"files_{{name['Name']}}\" name=\"file_upload\" required class=\"form-control p10-upld\"  />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"fileinput-filename\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t<button onclick=\"import_init('files_{{name['Name']}}','key_type_{{name['Name']}}')\"  type=\"button\" class=\"btn btn-primary btn_upload\">{{'csv-user-import'|trans }} </button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t{% endif %}

</div>
\t


<script>
    
    function close_model(){
        \$(\"#mymodal\").remove();
\t}
    
    
    function importModelLoad(status,tbody,key_type) {

        var modle_head='<div class=\"modal fade\" id=\"detail\" role=\"dialog\" tabindex=\"-1\">'+
            '<div class=\"modal-dialog\" role=\"document\">'+
            '<div class=\"modal-content\">'+
            '<div class=\"modal-header\">'+
            '<button type=\"button\" class=\"close\" data-dismiss=\"modal\" onclick=\"close_model()\">&times;'+
            '</button>'+
            '<h4 class=\"modal-title\"><b>{{ \"user-all-popup-heading\"|trans }}</b>'+
            '</h4></div>';
             //create modle error masages
        var msg_error='<div class=\"alert alert-danger\">'+
                    '<strong>{{ \"csv_error\"|trans }}</strong> {{ \"csv_error_msg\"|trans }}</div>';
            //create modle sucess masages
        var msg_sucess='<div class=\"alert alert-success\">'+
                    '<strong>{{ \"csv_sucess\"|trans }}</strong> {{ \"csv_sucess_msg\"|trans }}</div>';
            //start model body
        var tail='<div class=\"modal-body\">';
            //start model footer
        var foter_start='</div><div class=\"modal-footer\">';
           //model error button
        var btn_error='<button type=\"button\"  onclick=\"close_model()\" class=\"btn btn-danger\"             data-dismiss=\"modal\">{{ 'csvValidationButton-format_wrong'|trans }}</button>';
         //model sucess button
        var btn_sucess='<button type=\"button\" onclick=\"form_submit('+\"'\"+key_type+\"'\"+')\" class=\"btn btn-success\">'+
          '{{ \"csvValidationButton-format_correct\"|trans }}</button>';
          
        var modle_end='</div></div></div></div>';
        
       
        var msg=modle_head;
            if(status==1)
            {msg+=msg_sucess;}
            if(status==0)
            {msg+=msg_error;}
            msg+=tail+tbody+foter_start;
            if(status==1)
            {msg+=btn_error+btn_sucess;}
            if(status==0)
            {msg+=btn_error}
            msg+=modle_end;
            
        
        // create html object and append to body
        document.getElementById(\"import-modal-placeholder\").innerHTML+=msg;
        
        //call bootstarp data table
        \$('#csv_validate').DataTable({
            responsive: true,
            language: {
                \"url\":\"//cdn.datatables.net/plug-ins/1.10.13/i18n/French.json\"
            }
        });
        
        //add style to closet div csv validate
        \$( \"#csv_validate\" ).closest( \"div\" ).css( \"overflow\", \"auto\" );
        //show model
        \$('#detail').appendTo(\"body\").modal('show');
       

    }
   
</script>
{% endblock %}", "EDUBundle:Form:layout_commom_form.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/layout_commom_form.html.twig");
    }
}
