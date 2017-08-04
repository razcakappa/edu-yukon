<?php

/* EDUBundle:Includes:footer.html.twig */
class __TwigTemplate_1cd3bdd2922b1e4aab12dbec92388d8fdb21da162156c2f27d8027708ba2e80b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_559b73508e84779471d14546328cfca82c0b2a6256f8b35e27f40bb2411aac6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559b73508e84779471d14546328cfca82c0b2a6256f8b35e27f40bb2411aac6b->enter($__internal_559b73508e84779471d14546328cfca82c0b2a6256f8b35e27f40bb2411aac6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Includes:footer.html.twig"));

        // line 1
        echo "


    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"myModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">Message send confirmation</h4>
                </div>
                <div class=\"modal-body\">
                    <h4 id=\"title\"></h4>
                    <p><b>To</b></p>
                    <p id=\"to\"></p>
                    <p><b>Message</b></p>
                    <p id=\"message\"></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"button\" id=\"send\" class=\"btn btn-primary\">Send</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<!-- warning modal -->
    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"warningModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h2 class=\"modal-title\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Translate-popup-heading"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"modal-body\">
                    <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Translate-popup-content"), "html", null, true);
        echo "<img src=\"http://home.nzcity.co.nz/photos/objects-earth-disaster.gif\" /></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\"
data-dismiss=\"modal\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Translate-popup-button-no"), "html", null, true);
        echo "</button>
                    <button type=\"button\" id=\"send\" class=\"btn
btn-primary\" onclick=\"window.open('";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/_trans/', '_blank')\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Translate-popup-button-yes"), "html", null, true);
        // line 42
        echo "</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


<div id=\"import-modal-placeholder\" style=\"display:none\">&nbsp;</div>

<!-- Bootstrap Core JavaScript -->
<script src=\"/api/web/assets/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
<!--<script src=\"/api/web/assets/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>-->

<!-- Metis Menu Plugin JavaScript -->
<script src=\"/api/web/assets/bower_components/metisMenu/dist/metisMenu.js\"></script>
<!--<script src=\"/api/web/assets/bower_components/metisMenu/dist/metisMenu.js\"></script>-->

";
        // line 59
        if (array_key_exists("charts", $context)) {
            // line 60
            echo "<!-- Morris Charts JavaScript -->
<script src=\"/api/web/assets/bower_components/raphael/raphael-min.js\"></script>
<script src=\"/api/web/assets/bower_components/morrisjs/morris.min.js\"></script>
<script src=\"/api/web/assets/js/morris-data.js\"></script>
";
        }
        // line 65
        echo "
<!--<script src=\"/api/web/assets/bower_components/datatables/media/js/jquery.dataTables.min.js\"></script>-->
<!--<script src=\"/api/web/assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js\"></script>-->
<script src=\"/api/web/assets/bower_components/datatables/media/js/jquery.dataTables.min.js\"></script>
<script src=\"/api/web/assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js\"></script>

";
        // line 71
        if (array_key_exists("tables", $context)) {
            // line 72
            echo "<!-- DataTables JavaScript -->
<!--<script src=\"/api/web/assets/bower_components/datatables/media/js/jquery.dataTables.min.js\"></script>
<script src=\"/api/web/assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js\"></script>-->

<script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true,
            //language: {
            //    \"url\":\"//cdn.datatables.net/plug-ins/1.10.13/i18n/French.json\"
            //}
        });
        
        //only for massage for out box 
        \$('#dataTables-msg-log').DataTable({
            responsive: true,
            \"order\": [[3,\"desc\"]],
            //language: {
            //    \"url\":\"//cdn.datatables.net/plug-ins/1.10.13/i18n/French.json\"
            //}

        });
       //only for inbox dataTables-msg-inbox
        \$('#dataTables-msg-inbox').DataTable({
            responsive: true,
            \"order\": [[4,\"desc\"]],
            //language: {
                //\"url\":\"//cdn.datatables.net/plug-ins/1.10.13/i18n/French.json\"
            //}

        });
        
       
        
    });
</script>

<script>
    function pop_warning(){
        \$('#warningModal').appendTo(\"body\").modal('show');
     
    }

\$(\"ul#side-menu li a\").click(function() {
    var uli = \$(this).find('ul');
         //alert(uli);
    if(uli.hasClass(\"in\"))// && !\$(this).hasClass('active'))
    {
         //\$(this).addClass('active');
         alert('yet');
    }
        
});

</script>

";
        }
        // line 129
        echo "
<!-- custom import script -->
<!--<script src=\"/api/web/assets/js/import-module.js\"></script>-->
<!--<script src=\"/api/web/assets/js/sb-admin-2.js\"></script>-->
<script src=\"/api/web/assets/js/import-module.js\"></script>
<script src=\"/api/web/assets/js/sb-admin-2.js\"></script>
</body>

</html>
";
        
        $__internal_559b73508e84779471d14546328cfca82c0b2a6256f8b35e27f40bb2411aac6b->leave($__internal_559b73508e84779471d14546328cfca82c0b2a6256f8b35e27f40bb2411aac6b_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Includes:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 129,  115 => 72,  113 => 71,  105 => 65,  98 => 60,  96 => 59,  77 => 42,  73 => 41,  68 => 39,  61 => 35,  55 => 32,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("


    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"myModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">Message send confirmation</h4>
                </div>
                <div class=\"modal-body\">
                    <h4 id=\"title\"></h4>
                    <p><b>To</b></p>
                    <p id=\"to\"></p>
                    <p><b>Message</b></p>
                    <p id=\"message\"></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"button\" id=\"send\" class=\"btn btn-primary\">Send</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<!-- warning modal -->
    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"warningModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h2 class=\"modal-title\">{{ 'Translate-popup-heading'|trans }}</h2>
                </div>
                <div class=\"modal-body\">
                    <p>{{ 'Translate-popup-content'|trans }}<img src=\"http://home.nzcity.co.nz/photos/objects-earth-disaster.gif\" /></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\"
data-dismiss=\"modal\">{{'Translate-popup-button-no'|trans }}</button>
                    <button type=\"button\" id=\"send\" class=\"btn
btn-primary\" onclick=\"window.open('{{ app.request.getBaseURL()}}/_trans/', '_blank')\" data-dismiss=\"modal\">{{
'Translate-popup-button-yes'|trans }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


<div id=\"import-modal-placeholder\" style=\"display:none\">&nbsp;</div>

<!-- Bootstrap Core JavaScript -->
<script src=\"/api/web/assets/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
<!--<script src=\"/api/web/assets/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>-->

<!-- Metis Menu Plugin JavaScript -->
<script src=\"/api/web/assets/bower_components/metisMenu/dist/metisMenu.js\"></script>
<!--<script src=\"/api/web/assets/bower_components/metisMenu/dist/metisMenu.js\"></script>-->

{% if charts is defined %}
<!-- Morris Charts JavaScript -->
<script src=\"/api/web/assets/bower_components/raphael/raphael-min.js\"></script>
<script src=\"/api/web/assets/bower_components/morrisjs/morris.min.js\"></script>
<script src=\"/api/web/assets/js/morris-data.js\"></script>
{% endif %}

<!--<script src=\"/api/web/assets/bower_components/datatables/media/js/jquery.dataTables.min.js\"></script>-->
<!--<script src=\"/api/web/assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js\"></script>-->
<script src=\"/api/web/assets/bower_components/datatables/media/js/jquery.dataTables.min.js\"></script>
<script src=\"/api/web/assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js\"></script>

{% if tables is defined %}
<!-- DataTables JavaScript -->
<!--<script src=\"/api/web/assets/bower_components/datatables/media/js/jquery.dataTables.min.js\"></script>
<script src=\"/api/web/assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js\"></script>-->

<script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true,
            //language: {
            //    \"url\":\"//cdn.datatables.net/plug-ins/1.10.13/i18n/French.json\"
            //}
        });
        
        //only for massage for out box 
        \$('#dataTables-msg-log').DataTable({
            responsive: true,
            \"order\": [[3,\"desc\"]],
            //language: {
            //    \"url\":\"//cdn.datatables.net/plug-ins/1.10.13/i18n/French.json\"
            //}

        });
       //only for inbox dataTables-msg-inbox
        \$('#dataTables-msg-inbox').DataTable({
            responsive: true,
            \"order\": [[4,\"desc\"]],
            //language: {
                //\"url\":\"//cdn.datatables.net/plug-ins/1.10.13/i18n/French.json\"
            //}

        });
        
       
        
    });
</script>

<script>
    function pop_warning(){
        \$('#warningModal').appendTo(\"body\").modal('show');
     
    }

\$(\"ul#side-menu li a\").click(function() {
    var uli = \$(this).find('ul');
         //alert(uli);
    if(uli.hasClass(\"in\"))// && !\$(this).hasClass('active'))
    {
         //\$(this).addClass('active');
         alert('yet');
    }
        
});

</script>

{% endif %}

<!-- custom import script -->
<!--<script src=\"/api/web/assets/js/import-module.js\"></script>-->
<!--<script src=\"/api/web/assets/js/sb-admin-2.js\"></script>-->
<script src=\"/api/web/assets/js/import-module.js\"></script>
<script src=\"/api/web/assets/js/sb-admin-2.js\"></script>
</body>

</html>
", "EDUBundle:Includes:footer.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Includes/footer.html.twig");
    }
}
