<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d22f62689537c2f3c24cdea6497b28f26594e22b5ffbb6a81e22720e0e293dd4 extends Twig_Template
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
        $__internal_084b3f1a174ea07b69a830a6d164bee066381bf8cf0d7f73d109fa53974d0c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084b3f1a174ea07b69a830a6d164bee066381bf8cf0d7f73d109fa53974d0c89->enter($__internal_084b3f1a174ea07b69a830a6d164bee066381bf8cf0d7f73d109fa53974d0c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "EDUBundle:Includes:header.html.twig");
        echo "
<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <img width=\"30%\" src=\"/api/web/assets/images/logo.png\" style=\"display: block; margin: 8px auto;\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Please Sign In</h3>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->getSourceContext()); })())) {
            // line 13
            echo "                        <div class=\"alert alert-danger\">
                            <strong>Login error : </strong> ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->getSourceContext()); })()), "messageKey", array()), array(), "messages"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 17
        echo "                    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
                        <fieldset>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" autofocus />
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                            </div>
                            <input type=\"submit\" class=\"btn btn-lg btn-success btn-block\" id=\"_submit\" name=\"_submit\" value=\"Login !\" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 34
        echo twig_include($this->env, $context, "EDUBundle:Includes:footer.html.twig");
        echo "
";
        
        $__internal_084b3f1a174ea07b69a830a6d164bee066381bf8cf0d7f73d109fa53974d0c89->leave($__internal_084b3f1a174ea07b69a830a6d164bee066381bf8cf0d7f73d109fa53974d0c89_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 34,  58 => 21,  52 => 18,  47 => 17,  41 => 14,  38 => 13,  36 => 12,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include(\"EDUBundle:Includes:header.html.twig\") }}
<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <img width=\"30%\" src=\"/api/web/assets/images/logo.png\" style=\"display: block; margin: 8px auto;\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Please Sign In</h3>
                </div>
                <div class=\"panel-body\">
                    {% if error %}
                        <div class=\"alert alert-danger\">
                            <strong>Login error : </strong> {{ error.messageKey|trans({}, 'messages') }}
                        </div>
                    {% endif %}
                    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                        <fieldset>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autofocus />
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                            </div>
                            <input type=\"submit\" class=\"btn btn-lg btn-success btn-block\" id=\"_submit\" name=\"_submit\" value=\"Login !\" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{ include(\"EDUBundle:Includes:footer.html.twig\") }}
", "@FOSUser/Security/login.html.twig", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
