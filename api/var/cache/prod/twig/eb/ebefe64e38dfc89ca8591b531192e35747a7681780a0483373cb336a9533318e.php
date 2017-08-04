<?php

/* EDUBundle:Form:layout_commom_form.html.twig */
class __TwigTemplate_ae7a8a38e89ccffe90f0101db07110ea57caf385802dc455b2696c7bbc496e83 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cmi_body($context, array $blocks = array())
    {
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
            $context['_seq'] = twig_ensure_traversable(($context["names"] ?? null));
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
                if ((($context["title"] ?? null) == "users-csv-box-title")) {
                    // line 37
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("users-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 38
($context["title"] ?? null) == "classes-csv-box-title")) {
                    // line 39
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classes-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 40
($context["title"] ?? null) == "subjects-csv-box-title")) {
                    // line 41
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("subjects-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 42
($context["title"] ?? null) == "halls-csv-box-title-csv-box-title")) {
                    // line 43
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("halls-csv-box-title-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 44
($context["title"] ?? null) == "student_parent-csv-box-title")) {
                    // line 45
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("student_parent-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 46
($context["title"] ?? null) == "class_student-csv-box-title")) {
                    // line 47
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("class_student-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 48
($context["title"] ?? null) == "class_subs-csv-box-title")) {
                    // line 49
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("class_subs-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 50
($context["title"] ?? null) == "class_teacher-csv-box-title")) {
                    // line 51
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("class_teacher-csv-box-title"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ((                // line 52
($context["title"] ?? null) == "teacher_subjects-csv-box-title")) {
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
                echo twig_escape_filter($this->env, ($context["site_url"] ?? null), "html", null, true);
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
        return array (  253 => 113,  247 => 110,  236 => 104,  228 => 101,  221 => 97,  199 => 77,  196 => 76,  181 => 71,  174 => 67,  165 => 61,  157 => 58,  151 => 57,  147 => 55,  141 => 53,  139 => 52,  134 => 51,  132 => 50,  127 => 49,  125 => 48,  120 => 47,  118 => 46,  113 => 45,  111 => 44,  106 => 43,  104 => 42,  99 => 41,  97 => 40,  92 => 39,  90 => 38,  85 => 37,  83 => 36,  78 => 34,  70 => 31,  66 => 30,  57 => 27,  55 => 26,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:Form:layout_commom_form.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/layout_commom_form.html.twig");
    }
}
