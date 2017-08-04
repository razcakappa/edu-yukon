<?php

/* @FOSUser/Security/login.html.twig.bk */
class __TwigTemplate_65e3a3f0c30af2b487d3e3cd362058e556111007d12bafefae97cf3ae4021718 extends Twig_Template
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
        echo twig_include($this->env, $context, "EDUBundle:Includes:header.html.twig");
        echo "
<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <img width=\"30%\" src=\"/api/assets/images/logo.png\" style=\"display: block; margin: 8px auto;\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Please Sign In</h3>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 12
        if (($context["error"] ?? null)) {
            // line 13
            echo "                        <div class=\"alert alert-danger\">
                            <strong>Login error : </strong> ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageKey", array()), array(), "messages"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />
                        <fieldset>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig.bk";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 34,  55 => 21,  49 => 18,  44 => 17,  38 => 14,  35 => 13,  33 => 12,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login.html.twig.bk", "/var/www/edu-yukon/api/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig.bk");
    }
}
