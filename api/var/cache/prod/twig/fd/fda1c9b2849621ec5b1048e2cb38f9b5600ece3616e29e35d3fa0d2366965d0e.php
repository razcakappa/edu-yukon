<?php

/* EDUBundle:Includes:footer.html.twig */
class __TwigTemplate_6ee61906c6c4c1ab5f947874018bebb07dee2e0a9277aed8e46008b9a5d7e8c0 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
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
        return array (  171 => 129,  112 => 72,  110 => 71,  102 => 65,  95 => 60,  93 => 59,  74 => 42,  70 => 41,  65 => 39,  58 => 35,  52 => 32,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EDUBundle:Includes:footer.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Includes/footer.html.twig");
    }
}
