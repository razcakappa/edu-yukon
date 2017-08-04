<?php

/* TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_50dc2a1d23df8ea6b55368a5e12036c3b65e906b7bb142c47c2f6e3b5c204606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf4ee40899ea796bda8b5524ab327aa6d3c1d462e46d679919f45005b566ddf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4ee40899ea796bda8b5524ab327aa6d3c1d462e46d679919f45005b566ddf3->enter($__internal_cf4ee40899ea796bda8b5524ab327aa6d3c1d462e46d679919f45005b566ddf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        
        $__internal_cf4ee40899ea796bda8b5524ab327aa6d3c1d462e46d679919f45005b566ddf3->leave($__internal_cf4ee40899ea796bda8b5524ab327aa6d3c1d462e46d679919f45005b566ddf3_prof);

    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_0fa6d81c1ffb203adf918a076ccbad5fa07cb80e06dfa219c77e3986ab68f84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa6d81c1ffb203adf918a076ccbad5fa07cb80e06dfa219c77e3986ab68f84e->enter($__internal_0fa6d81c1ffb203adf918a076ccbad5fa07cb80e06dfa219c77e3986ab68f84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>

    <script type=\"text/javascript\">
    ";
        // line 7
        echo "        var CKEDITOR_BASEPATH = '";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "request", array()), "basePath", array()) . "/") . (isset($context["base_path"]) || array_key_exists("base_path", $context) ? $context["base_path"] : (function () { throw new Twig_Error_Runtime('Variable "base_path" does not exist.', 7, $this->getSourceContext()); })())), "js", null, true);
        echo "';
    ";
        // line 9
        echo "    </script>

    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_path"]) || array_key_exists("base_path", $context) ? $context["base_path"] : (function () { throw new Twig_Error_Runtime('Variable "base_path" does not exist.', 11, $this->getSourceContext()); })()) . "ckeditor.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    ";
        // line 14
        echo "        ";
        $context["plugins"] = "";
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["external_plugins"]) || array_key_exists("external_plugins", $context) ? $context["external_plugins"] : (function () { throw new Twig_Error_Runtime('Variable "external_plugins" does not exist.', 15, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["external_plugin"]) {
            // line 16
            echo "            CKEDITOR.plugins.addExternal('";
            echo $context["name"];
            echo "', '";
            echo (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "request", array()), "basePath", array()) . twig_get_attribute($this->env, $this->getSourceContext(), $context["external_plugin"], "path", array()));
            echo "', '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["external_plugin"], "file", array());
            echo "');
            ";
            // line 17
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                // line 18
                echo "                ";
                $context["plugins"] = ((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new Twig_Error_Runtime('Variable "plugins" does not exist.', 18, $this->getSourceContext()); })()) . ",");
                // line 19
                echo "            ";
            }
            // line 20
            echo "            ";
            $context["plugins"] = ((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new Twig_Error_Runtime('Variable "plugins" does not exist.', 20, $this->getSourceContext()); })()) . $context["name"]);
            // line 21
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['external_plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        var trsteelConfig = {
            ";
        // line 24
        if ( !(null === (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new Twig_Error_Runtime('Variable "width" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            echo "                width: '";
            echo (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new Twig_Error_Runtime('Variable "width" does not exist.', 25, $this->getSourceContext()); })());
            echo "',
            ";
        }
        // line 27
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["templates_files"]) || array_key_exists("templates_files", $context) ? $context["templates_files"] : (function () { throw new Twig_Error_Runtime('Variable "templates_files" does not exist.', 27, $this->getSourceContext()); })())) > 0)) {
            // line 28
            echo "                ";
            $context["templates_files_array"] = array();
            // line 29
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates_files"]) || array_key_exists("templates_files", $context) ? $context["templates_files"] : (function () { throw new Twig_Error_Runtime('Variable "templates_files" does not exist.', 29, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 30
                echo "                    ";
                $context["templates_files_array"] = twig_array_merge((isset($context["templates_files_array"]) || array_key_exists("templates_files_array", $context) ? $context["templates_files_array"] : (function () { throw new Twig_Error_Runtime('Variable "templates_files_array" does not exist.', 30, $this->getSourceContext()); })()), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["file"])));
                // line 31
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                templates_files: ";
            echo json_encode((isset($context["templates_files_array"]) || array_key_exists("templates_files_array", $context) ? $context["templates_files_array"] : (function () { throw new Twig_Error_Runtime('Variable "templates_files_array" does not exist.', 32, $this->getSourceContext()); })()));
            echo ",
            ";
        }
        // line 34
        echo "            ";
        if ( !(null === (isset($context["allowed_content"]) || array_key_exists("allowed_content", $context) ? $context["allowed_content"] : (function () { throw new Twig_Error_Runtime('Variable "allowed_content" does not exist.', 34, $this->getSourceContext()); })()))) {
            // line 35
            echo "                allowedContent: ";
            if (((isset($context["allowed_content"]) || array_key_exists("allowed_content", $context) ? $context["allowed_content"] : (function () { throw new Twig_Error_Runtime('Variable "allowed_content" does not exist.', 35, $this->getSourceContext()); })()) == "true")) {
                echo "true";
            } else {
                echo "'";
                echo (isset($context["allowed_content"]) || array_key_exists("allowed_content", $context) ? $context["allowed_content"] : (function () { throw new Twig_Error_Runtime('Variable "allowed_content" does not exist.', 35, $this->getSourceContext()); })());
                echo "'";
            }
            echo ",
            ";
        }
        // line 37
        echo "            ";
        if ( !(null === (isset($context["extra_allowed_content"]) || array_key_exists("extra_allowed_content", $context) ? $context["extra_allowed_content"] : (function () { throw new Twig_Error_Runtime('Variable "extra_allowed_content" does not exist.', 37, $this->getSourceContext()); })()))) {
            // line 38
            echo "                extraAllowedContent: ";
            if (((isset($context["extra_allowed_content"]) || array_key_exists("extra_allowed_content", $context) ? $context["extra_allowed_content"] : (function () { throw new Twig_Error_Runtime('Variable "extra_allowed_content" does not exist.', 38, $this->getSourceContext()); })()) == "true")) {
                echo "true";
            } else {
                echo "'";
                echo (isset($context["extra_allowed_content"]) || array_key_exists("extra_allowed_content", $context) ? $context["extra_allowed_content"] : (function () { throw new Twig_Error_Runtime('Variable "extra_allowed_content" does not exist.', 38, $this->getSourceContext()); })());
                echo "'";
            }
            echo ",
            ";
        }
        // line 40
        echo "            ";
        if ( !(null === (isset($context["templates_replace_content"]) || array_key_exists("templates_replace_content", $context) ? $context["templates_replace_content"] : (function () { throw new Twig_Error_Runtime('Variable "templates_replace_content" does not exist.', 40, $this->getSourceContext()); })()))) {
            // line 41
            echo "                templates_replaceContent: ";
            echo (((isset($context["templates_replace_content"]) || array_key_exists("templates_replace_content", $context) ? $context["templates_replace_content"] : (function () { throw new Twig_Error_Runtime('Variable "templates_replace_content" does not exist.', 41, $this->getSourceContext()); })())) ? ("true") : ("false"));
            echo ",
            ";
        }
        // line 43
        echo "            ";
        if ( !(null === (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new Twig_Error_Runtime('Variable "height" does not exist.', 43, $this->getSourceContext()); })()))) {
            // line 44
            echo "                height: '";
            echo (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new Twig_Error_Runtime('Variable "height" does not exist.', 44, $this->getSourceContext()); })());
            echo "',
            ";
        }
        // line 46
        echo "            ";
        if ( !(null === (isset($context["force_paste_as_plaintext"]) || array_key_exists("force_paste_as_plaintext", $context) ? $context["force_paste_as_plaintext"] : (function () { throw new Twig_Error_Runtime('Variable "force_paste_as_plaintext" does not exist.', 46, $this->getSourceContext()); })()))) {
            // line 47
            echo "                forcePasteAsPlainText: ";
            echo (isset($context["force_paste_as_plaintext"]) || array_key_exists("force_paste_as_plaintext", $context) ? $context["force_paste_as_plaintext"] : (function () { throw new Twig_Error_Runtime('Variable "force_paste_as_plaintext" does not exist.', 47, $this->getSourceContext()); })());
            echo ",
            ";
        }
        // line 49
        echo "            ";
        if ( !(null === (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new Twig_Error_Runtime('Variable "language" does not exist.', 49, $this->getSourceContext()); })()))) {
            // line 50
            echo "                language: '";
            echo (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new Twig_Error_Runtime('Variable "language" does not exist.', 50, $this->getSourceContext()); })());
            echo "',
            ";
        }
        // line 52
        echo "            ";
        if ( !(null === (isset($context["ui_color"]) || array_key_exists("ui_color", $context) ? $context["ui_color"] : (function () { throw new Twig_Error_Runtime('Variable "ui_color" does not exist.', 52, $this->getSourceContext()); })()))) {
            // line 53
            echo "                uiColor: \"";
            echo (isset($context["ui_color"]) || array_key_exists("ui_color", $context) ? $context["ui_color"] : (function () { throw new Twig_Error_Runtime('Variable "ui_color" does not exist.', 53, $this->getSourceContext()); })());
            echo "\",
            ";
        }
        // line 55
        echo "            ";
        if (((isset($context["startup_outline_blocks"]) || array_key_exists("startup_outline_blocks", $context) ? $context["startup_outline_blocks"] : (function () { throw new Twig_Error_Runtime('Variable "startup_outline_blocks" does not exist.', 55, $this->getSourceContext()); })()) == true)) {
            // line 56
            echo "                startupOutlineBlocks: ";
            echo (isset($context["startup_outline_blocks"]) || array_key_exists("startup_outline_blocks", $context) ? $context["startup_outline_blocks"] : (function () { throw new Twig_Error_Runtime('Variable "startup_outline_blocks" does not exist.', 56, $this->getSourceContext()); })());
            echo ",
            ";
        }
        // line 58
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_browse_url"] ?? null), "route", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_browse_url"]) || array_key_exists("filebrowser_browse_url", $context) ? $context["filebrowser_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_browse_url" does not exist.', 58, $this->getSourceContext()); })()), "route", array())))) {
            // line 59
            echo "                filebrowserBrowseUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_browse_url"]) || array_key_exists("filebrowser_browse_url", $context) ? $context["filebrowser_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_browse_url" does not exist.', 59, $this->getSourceContext()); })()), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_browse_url"]) || array_key_exists("filebrowser_browse_url", $context) ? $context["filebrowser_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_browse_url" does not exist.', 59, $this->getSourceContext()); })()), "route_parameters", array()));
            echo "',
            ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 60
($context["filebrowser_browse_url"] ?? null), "url", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_browse_url"]) || array_key_exists("filebrowser_browse_url", $context) ? $context["filebrowser_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_browse_url" does not exist.', 60, $this->getSourceContext()); })()), "url", array())))) {
            // line 61
            echo "                filebrowserBrowseUrl: '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_browse_url"]) || array_key_exists("filebrowser_browse_url", $context) ? $context["filebrowser_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_browse_url" does not exist.', 61, $this->getSourceContext()); })()), "url", array());
            echo "',
            ";
        }
        // line 63
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_upload_url"] ?? null), "route", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_upload_url"]) || array_key_exists("filebrowser_upload_url", $context) ? $context["filebrowser_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_upload_url" does not exist.', 63, $this->getSourceContext()); })()), "route", array())))) {
            // line 64
            echo "                filebrowserUploadUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_upload_url"]) || array_key_exists("filebrowser_upload_url", $context) ? $context["filebrowser_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_upload_url" does not exist.', 64, $this->getSourceContext()); })()), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_upload_url"]) || array_key_exists("filebrowser_upload_url", $context) ? $context["filebrowser_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_upload_url" does not exist.', 64, $this->getSourceContext()); })()), "route_parameters", array()));
            echo "',
            ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 65
($context["filebrowser_upload_url"] ?? null), "url", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_upload_url"]) || array_key_exists("filebrowser_upload_url", $context) ? $context["filebrowser_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_upload_url" does not exist.', 65, $this->getSourceContext()); })()), "url", array())))) {
            // line 66
            echo "                filebrowserUploadUrl: '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_upload_url"]) || array_key_exists("filebrowser_upload_url", $context) ? $context["filebrowser_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_upload_url" does not exist.', 66, $this->getSourceContext()); })()), "url", array());
            echo "',
            ";
        }
        // line 68
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_browse_url"] ?? null), "route", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_image_browse_url"]) || array_key_exists("filebrowser_image_browse_url", $context) ? $context["filebrowser_image_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_image_browse_url" does not exist.', 68, $this->getSourceContext()); })()), "route", array())))) {
            // line 69
            echo "                filebrowserImageBrowseUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_image_browse_url"]) || array_key_exists("filebrowser_image_browse_url", $context) ? $context["filebrowser_image_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_image_browse_url" does not exist.', 69, $this->getSourceContext()); })()), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_image_browse_url"]) || array_key_exists("filebrowser_image_browse_url", $context) ? $context["filebrowser_image_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_image_browse_url" does not exist.', 69, $this->getSourceContext()); })()), "route_parameters", array()));
            echo "',
            ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 70
($context["filebrowser_image_browse_url"] ?? null), "url", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_image_browse_url"]) || array_key_exists("filebrowser_image_browse_url", $context) ? $context["filebrowser_image_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_image_browse_url" does not exist.', 70, $this->getSourceContext()); })()), "url", array())))) {
            // line 71
            echo "                filebrowserImageBrowseUrl: '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_image_browse_url"]) || array_key_exists("filebrowser_image_browse_url", $context) ? $context["filebrowser_image_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_image_browse_url" does not exist.', 71, $this->getSourceContext()); })()), "url", array());
            echo "',
            ";
        }
        // line 73
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_upload_url"] ?? null), "route", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_image_upload_url"]) || array_key_exists("filebrowser_image_upload_url", $context) ? $context["filebrowser_image_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_image_upload_url" does not exist.', 73, $this->getSourceContext()); })()), "route", array())))) {
            // line 74
            echo "                filebrowserImageUploadUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_image_upload_url"]) || array_key_exists("filebrowser_image_upload_url", $context) ? $context["filebrowser_image_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_image_upload_url" does not exist.', 74, $this->getSourceContext()); })()), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_image_upload_url"]) || array_key_exists("filebrowser_image_upload_url", $context) ? $context["filebrowser_image_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_image_upload_url" does not exist.', 74, $this->getSourceContext()); })()), "route_parameters", array()));
            echo "',
            ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 75
($context["filebrowser_image_upload_url"] ?? null), "url", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_image_upload_url"]) || array_key_exists("filebrowser_image_upload_url", $context) ? $context["filebrowser_image_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_image_upload_url" does not exist.', 75, $this->getSourceContext()); })()), "url", array())))) {
            // line 76
            echo "                filebrowserImageUploadUrl: '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_image_upload_url"]) || array_key_exists("filebrowser_image_upload_url", $context) ? $context["filebrowser_image_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_image_upload_url" does not exist.', 76, $this->getSourceContext()); })()), "url", array());
            echo "',
            ";
        }
        // line 78
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_browse_url"] ?? null), "route", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_flash_browse_url"]) || array_key_exists("filebrowser_flash_browse_url", $context) ? $context["filebrowser_flash_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_flash_browse_url" does not exist.', 78, $this->getSourceContext()); })()), "route", array())))) {
            // line 79
            echo "                filebrowserFlashBrowseUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_flash_browse_url"]) || array_key_exists("filebrowser_flash_browse_url", $context) ? $context["filebrowser_flash_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_flash_browse_url" does not exist.', 79, $this->getSourceContext()); })()), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_flash_browse_url"]) || array_key_exists("filebrowser_flash_browse_url", $context) ? $context["filebrowser_flash_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_flash_browse_url" does not exist.', 79, $this->getSourceContext()); })()), "route_parameters", array()));
            echo "',
            ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 80
($context["filebrowser_flash_browse_url"] ?? null), "url", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_flash_browse_url"]) || array_key_exists("filebrowser_flash_browse_url", $context) ? $context["filebrowser_flash_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_flash_browse_url" does not exist.', 80, $this->getSourceContext()); })()), "url", array())))) {
            // line 81
            echo "                filebrowserFlashBrowseUrl: '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_flash_browse_url"]) || array_key_exists("filebrowser_flash_browse_url", $context) ? $context["filebrowser_flash_browse_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_flash_browse_url" does not exist.', 81, $this->getSourceContext()); })()), "url", array());
            echo "',
            ";
        }
        // line 83
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_upload_url"] ?? null), "route", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_flash_upload_url"]) || array_key_exists("filebrowser_flash_upload_url", $context) ? $context["filebrowser_flash_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_flash_upload_url" does not exist.', 83, $this->getSourceContext()); })()), "route", array())))) {
            // line 84
            echo "                filebrowserFlashUploadUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_flash_upload_url"]) || array_key_exists("filebrowser_flash_upload_url", $context) ? $context["filebrowser_flash_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_flash_upload_url" does not exist.', 84, $this->getSourceContext()); })()), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_flash_upload_url"]) || array_key_exists("filebrowser_flash_upload_url", $context) ? $context["filebrowser_flash_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_flash_upload_url" does not exist.', 84, $this->getSourceContext()); })()), "route_parameters", array()));
            echo "',
            ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 85
($context["filebrowser_flash_upload_url"] ?? null), "url", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_flash_upload_url"]) || array_key_exists("filebrowser_flash_upload_url", $context) ? $context["filebrowser_flash_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_flash_upload_url" does not exist.', 85, $this->getSourceContext()); })()), "url", array())))) {
            // line 86
            echo "                filebrowserFlashUploadUrl: '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filebrowser_flash_upload_url"]) || array_key_exists("filebrowser_flash_upload_url", $context) ? $context["filebrowser_flash_upload_url"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowser_flash_upload_url" does not exist.', 86, $this->getSourceContext()); })()), "url", array());
            echo "',
            ";
        }
        // line 88
        echo "            ";
        if ( !(null === (isset($context["skin"]) || array_key_exists("skin", $context) ? $context["skin"] : (function () { throw new Twig_Error_Runtime('Variable "skin" does not exist.', 88, $this->getSourceContext()); })()))) {
            // line 89
            echo "                skin: '";
            echo (isset($context["skin"]) || array_key_exists("skin", $context) ? $context["skin"] : (function () { throw new Twig_Error_Runtime('Variable "skin" does not exist.', 89, $this->getSourceContext()); })());
            echo "',
            ";
        }
        // line 91
        echo "            ";
        if ( !(null === (isset($context["disable_native_spell_checker"]) || array_key_exists("disable_native_spell_checker", $context) ? $context["disable_native_spell_checker"] : (function () { throw new Twig_Error_Runtime('Variable "disable_native_spell_checker" does not exist.', 91, $this->getSourceContext()); })()))) {
            // line 92
            echo "                disableNativeSpellChecker: ";
            echo (((isset($context["disable_native_spell_checker"]) || array_key_exists("disable_native_spell_checker", $context) ? $context["disable_native_spell_checker"] : (function () { throw new Twig_Error_Runtime('Variable "disable_native_spell_checker" does not exist.', 92, $this->getSourceContext()); })())) ? ("true") : ("false"));
            echo ",
            ";
        }
        // line 94
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["format_tags"]) || array_key_exists("format_tags", $context) ? $context["format_tags"] : (function () { throw new Twig_Error_Runtime('Variable "format_tags" does not exist.', 94, $this->getSourceContext()); })())) > 0)) {
            // line 95
            echo "                format_tags: '";
            echo twig_join_filter((isset($context["format_tags"]) || array_key_exists("format_tags", $context) ? $context["format_tags"] : (function () { throw new Twig_Error_Runtime('Variable "format_tags" does not exist.', 95, $this->getSourceContext()); })()), ";");
            echo "',
            ";
        }
        // line 97
        echo "            ";
        if ( !(null === (isset($context["body_class"]) || array_key_exists("body_class", $context) ? $context["body_class"] : (function () { throw new Twig_Error_Runtime('Variable "body_class" does not exist.', 97, $this->getSourceContext()); })()))) {
            // line 98
            echo "                bodyClass: '";
            echo (isset($context["body_class"]) || array_key_exists("body_class", $context) ? $context["body_class"] : (function () { throw new Twig_Error_Runtime('Variable "body_class" does not exist.', 98, $this->getSourceContext()); })());
            echo "',
            ";
        }
        // line 100
        echo "            ";
        if ( !(null === (isset($context["contents_css"]) || array_key_exists("contents_css", $context) ? $context["contents_css"] : (function () { throw new Twig_Error_Runtime('Variable "contents_css" does not exist.', 100, $this->getSourceContext()); })()))) {
            // line 101
            echo "                ";
            if (twig_test_iterable((isset($context["contents_css"]) || array_key_exists("contents_css", $context) ? $context["contents_css"] : (function () { throw new Twig_Error_Runtime('Variable "contents_css" does not exist.', 101, $this->getSourceContext()); })()))) {
                // line 102
                echo "                    ";
                $context["contents_css_array"] = array();
                // line 103
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["contents_css"]) || array_key_exists("contents_css", $context) ? $context["contents_css"] : (function () { throw new Twig_Error_Runtime('Variable "contents_css" does not exist.', 103, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 104
                    echo "                        ";
                    $context["contents_css_array"] = twig_array_merge((isset($context["contents_css_array"]) || array_key_exists("contents_css_array", $context) ? $context["contents_css_array"] : (function () { throw new Twig_Error_Runtime('Variable "contents_css_array" does not exist.', 104, $this->getSourceContext()); })()), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["file"])));
                    // line 105
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                    contentsCss: ";
                echo json_encode((isset($context["contents_css_array"]) || array_key_exists("contents_css_array", $context) ? $context["contents_css_array"] : (function () { throw new Twig_Error_Runtime('Variable "contents_css_array" does not exist.', 106, $this->getSourceContext()); })()));
                echo ",
                ";
            } else {
                // line 108
                echo "                    contentsCss: '";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["contents_css"]) || array_key_exists("contents_css", $context) ? $context["contents_css"] : (function () { throw new Twig_Error_Runtime('Variable "contents_css" does not exist.', 108, $this->getSourceContext()); })()));
                echo "',
                ";
            }
            // line 110
            echo "            ";
        }
        // line 111
        echo "            ";
        if ( !(null === (isset($context["basic_entities"]) || array_key_exists("basic_entities", $context) ? $context["basic_entities"] : (function () { throw new Twig_Error_Runtime('Variable "basic_entities" does not exist.', 111, $this->getSourceContext()); })()))) {
            // line 112
            echo "                basicEntities: '";
            echo (isset($context["basic_entities"]) || array_key_exists("basic_entities", $context) ? $context["basic_entities"] : (function () { throw new Twig_Error_Runtime('Variable "basic_entities" does not exist.', 112, $this->getSourceContext()); })());
            echo "',
            ";
        }
        // line 114
        echo "            ";
        if ( !(null === (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 114, $this->getSourceContext()); })()))) {
            // line 115
            echo "                entities: '";
            echo (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 115, $this->getSourceContext()); })());
            echo "',
            ";
        }
        // line 117
        echo "            ";
        if ( !(null === (isset($context["entities_latin"]) || array_key_exists("entities_latin", $context) ? $context["entities_latin"] : (function () { throw new Twig_Error_Runtime('Variable "entities_latin" does not exist.', 117, $this->getSourceContext()); })()))) {
            // line 118
            echo "                entities_latin: '";
            echo (isset($context["entities_latin"]) || array_key_exists("entities_latin", $context) ? $context["entities_latin"] : (function () { throw new Twig_Error_Runtime('Variable "entities_latin" does not exist.', 118, $this->getSourceContext()); })());
            echo "',
            ";
        }
        // line 120
        echo "            ";
        if ( !(null === (isset($context["startup_mode"]) || array_key_exists("startup_mode", $context) ? $context["startup_mode"] : (function () { throw new Twig_Error_Runtime('Variable "startup_mode" does not exist.', 120, $this->getSourceContext()); })()))) {
            // line 121
            echo "                startupMode: '";
            echo (isset($context["startup_mode"]) || array_key_exists("startup_mode", $context) ? $context["startup_mode"] : (function () { throw new Twig_Error_Runtime('Variable "startup_mode" does not exist.', 121, $this->getSourceContext()); })());
            echo "',
            ";
        }
        // line 123
        echo "            ";
        if ( !(null === (isset($context["enter_mode"]) || array_key_exists("enter_mode", $context) ? $context["enter_mode"] : (function () { throw new Twig_Error_Runtime('Variable "enter_mode" does not exist.', 123, $this->getSourceContext()); })()))) {
            // line 124
            echo "                enterMode: CKEDITOR.";
            echo (isset($context["enter_mode"]) || array_key_exists("enter_mode", $context) ? $context["enter_mode"] : (function () { throw new Twig_Error_Runtime('Variable "enter_mode" does not exist.', 124, $this->getSourceContext()); })());
            echo ",
            ";
        }
        // line 126
        echo "            ";
        if ((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new Twig_Error_Runtime('Variable "plugins" does not exist.', 126, $this->getSourceContext()); })())) {
            // line 127
            echo "                extraPlugins: '";
            echo (isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new Twig_Error_Runtime('Variable "plugins" does not exist.', 127, $this->getSourceContext()); })());
            echo "',
            ";
        }
        // line 129
        echo "            ";
        if ((isset($context["custom_config"]) || array_key_exists("custom_config", $context) ? $context["custom_config"] : (function () { throw new Twig_Error_Runtime('Variable "custom_config" does not exist.', 129, $this->getSourceContext()); })())) {
            // line 130
            echo "                customConfig: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["custom_config"]) || array_key_exists("custom_config", $context) ? $context["custom_config"] : (function () { throw new Twig_Error_Runtime('Variable "custom_config" does not exist.', 130, $this->getSourceContext()); })()));
            echo "',
            ";
        }
        // line 132
        echo "            toolbar: ";
        echo json_encode((isset($context["toolbar"]) || array_key_exists("toolbar", $context) ? $context["toolbar"] : (function () { throw new Twig_Error_Runtime('Variable "toolbar" does not exist.', 132, $this->getSourceContext()); })()));
        echo ",
            baseHref: '";
        // line 133
        echo (((isset($context["base_href"]) || array_key_exists("base_href", $context) ? $context["base_href"] : (function () { throw new Twig_Error_Runtime('Variable "base_href" does not exist.', 133, $this->getSourceContext()); })())) ? ((isset($context["base_href"]) || array_key_exists("base_href", $context) ? $context["base_href"] : (function () { throw new Twig_Error_Runtime('Variable "base_href" does not exist.', 133, $this->getSourceContext()); })())) : (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 133, $this->getSourceContext()); })()), "request", array()), "schemeAndHttpHost", array()) . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 133, $this->getSourceContext()); })()), "request", array()), "baseUrl", array())) . "/")));
        echo "'
        };

        CKEDITOR.replace(\"";
        // line 136
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 136, $this->getSourceContext()); })());
        echo "\", trsteelConfig);
        CKEDITOR.instances[\"";
        // line 137
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 137, $this->getSourceContext()); })());
        echo "\"].rawConfig = trsteelConfig;

    ";
        // line 140
        echo "    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0fa6d81c1ffb203adf918a076ccbad5fa07cb80e06dfa219c77e3986ab68f84e->leave($__internal_0fa6d81c1ffb203adf918a076ccbad5fa07cb80e06dfa219c77e3986ab68f84e_prof);

    }

    public function getTemplateName()
    {
        return "TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  490 => 140,  485 => 137,  481 => 136,  475 => 133,  470 => 132,  464 => 130,  461 => 129,  455 => 127,  452 => 126,  446 => 124,  443 => 123,  437 => 121,  434 => 120,  428 => 118,  425 => 117,  419 => 115,  416 => 114,  410 => 112,  407 => 111,  404 => 110,  398 => 108,  392 => 106,  386 => 105,  383 => 104,  378 => 103,  375 => 102,  372 => 101,  369 => 100,  363 => 98,  360 => 97,  354 => 95,  351 => 94,  345 => 92,  342 => 91,  336 => 89,  333 => 88,  327 => 86,  325 => 85,  320 => 84,  317 => 83,  311 => 81,  309 => 80,  304 => 79,  301 => 78,  295 => 76,  293 => 75,  288 => 74,  285 => 73,  279 => 71,  277 => 70,  272 => 69,  269 => 68,  263 => 66,  261 => 65,  256 => 64,  253 => 63,  247 => 61,  245 => 60,  240 => 59,  237 => 58,  231 => 56,  228 => 55,  222 => 53,  219 => 52,  213 => 50,  210 => 49,  204 => 47,  201 => 46,  195 => 44,  192 => 43,  186 => 41,  183 => 40,  171 => 38,  168 => 37,  156 => 35,  153 => 34,  147 => 32,  141 => 31,  138 => 30,  133 => 29,  130 => 28,  127 => 27,  121 => 25,  119 => 24,  115 => 22,  101 => 21,  98 => 20,  95 => 19,  92 => 18,  90 => 17,  81 => 16,  63 => 15,  60 => 14,  55 => 11,  51 => 9,  46 => 7,  37 => 3,  35 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block ckeditor_widget %}
{% spaceless %}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>

    <script type=\"text/javascript\">
    {% autoescape 'js' %}
        var CKEDITOR_BASEPATH = '{{ app.request.basePath ~ '/' ~ base_path }}';
    {% endautoescape %}
    </script>

    <script type=\"text/javascript\" src=\"{{ asset(base_path ~ 'ckeditor.js') }}\"></script>
    <script type=\"text/javascript\">
    {% autoescape false %}
        {% set plugins = '' %}
        {% for name, external_plugin in external_plugins %}
            CKEDITOR.plugins.addExternal('{{ name }}', '{{ app.request.basePath ~ external_plugin.path }}', '{{ external_plugin.file }}');
            {% if not loop.first %}
                {% set plugins = plugins ~ ',' %}
            {% endif %}
            {% set plugins = plugins ~ name %}
        {% endfor %}

        var trsteelConfig = {
            {% if width is not null %}
                width: '{{ width }}',
            {% endif %}
            {% if templates_files|length > 0 %}
                {% set templates_files_array = [] %}
                {% for file in templates_files %}
                    {% set templates_files_array = templates_files_array|merge([asset(file)]) %}
                {% endfor %}
                templates_files: {{ templates_files_array|json_encode }},
            {% endif %}
            {% if allowed_content is not null %}
                allowedContent: {% if allowed_content == 'true' %}true{% else %}'{{ allowed_content }}'{% endif %},
            {% endif %}
            {% if extra_allowed_content is not null %}
                extraAllowedContent: {% if extra_allowed_content == 'true' %}true{% else %}'{{ extra_allowed_content }}'{% endif %},
            {% endif %}
            {% if templates_replace_content is not null %}
                templates_replaceContent: {{ templates_replace_content ? 'true' : 'false' }},
            {% endif %}
            {% if height is not null %}
                height: '{{ height }}',
            {% endif %}
            {% if force_paste_as_plaintext is not null %}
                forcePasteAsPlainText: {{ force_paste_as_plaintext }},
            {% endif %}
            {% if language is not null %}
                language: '{{ language }}',
            {% endif %}
            {% if ui_color is not null %}
                uiColor: \"{{ ui_color }}\",
            {% endif %}
            {% if startup_outline_blocks == true %}
                startupOutlineBlocks: {{ startup_outline_blocks }},
            {% endif %}
            {% if filebrowser_browse_url.route is defined and filebrowser_browse_url.route is not null %}
                filebrowserBrowseUrl: '{{ path(filebrowser_browse_url.route, filebrowser_browse_url.route_parameters) }}',
            {% elseif filebrowser_browse_url.url is defined and filebrowser_browse_url.url is not null  %}
                filebrowserBrowseUrl: '{{ filebrowser_browse_url.url }}',
            {% endif %}
            {% if filebrowser_upload_url.route is defined and filebrowser_upload_url.route is not null %}
                filebrowserUploadUrl: '{{ path(filebrowser_upload_url.route, filebrowser_upload_url.route_parameters) }}',
            {% elseif filebrowser_upload_url.url is defined and filebrowser_upload_url.url is not null  %}
                filebrowserUploadUrl: '{{ filebrowser_upload_url.url }}',
            {% endif %}
            {% if filebrowser_image_browse_url.route is defined and filebrowser_image_browse_url.route is not null %}
                filebrowserImageBrowseUrl: '{{ path(filebrowser_image_browse_url.route, filebrowser_image_browse_url.route_parameters) }}',
            {% elseif filebrowser_image_browse_url.url is defined and filebrowser_image_browse_url.url is not null  %}
                filebrowserImageBrowseUrl: '{{ filebrowser_image_browse_url.url }}',
            {% endif %}
            {% if filebrowser_image_upload_url.route is defined and filebrowser_image_upload_url.route is not null %}
                filebrowserImageUploadUrl: '{{ path(filebrowser_image_upload_url.route, filebrowser_image_upload_url.route_parameters) }}',
            {% elseif filebrowser_image_upload_url.url is defined and filebrowser_image_upload_url.url is not null  %}
                filebrowserImageUploadUrl: '{{ filebrowser_image_upload_url.url }}',
            {% endif %}
            {% if filebrowser_flash_browse_url.route is defined and filebrowser_flash_browse_url.route is not null %}
                filebrowserFlashBrowseUrl: '{{ path(filebrowser_flash_browse_url.route, filebrowser_flash_browse_url.route_parameters) }}',
            {% elseif filebrowser_flash_browse_url.url is defined and filebrowser_flash_browse_url.url is not null  %}
                filebrowserFlashBrowseUrl: '{{ filebrowser_flash_browse_url.url }}',
            {% endif %}
            {% if filebrowser_flash_upload_url.route is defined and filebrowser_flash_upload_url.route is not null %}
                filebrowserFlashUploadUrl: '{{ path(filebrowser_flash_upload_url.route, filebrowser_flash_upload_url.route_parameters) }}',
            {% elseif filebrowser_flash_upload_url.url is defined and filebrowser_flash_upload_url.url is not null  %}
                filebrowserFlashUploadUrl: '{{ filebrowser_flash_upload_url.url }}',
            {% endif %}
            {% if skin is not null %}
                skin: '{{ skin }}',
            {% endif %}
            {% if disable_native_spell_checker is not null %}
                disableNativeSpellChecker: {{ disable_native_spell_checker ? 'true' : 'false' }},
            {% endif %}
            {% if format_tags|length > 0 %}
                format_tags: '{{ format_tags|join(';')|raw }}',
            {% endif %}
            {% if body_class is not null %}
                bodyClass: '{{ body_class }}',
            {% endif %}
            {% if contents_css is not null %}
                {% if contents_css is iterable %}
                    {% set contents_css_array = [] %}
                    {% for file in contents_css %}
                        {% set contents_css_array = contents_css_array|merge([asset(file)]) %}
                    {% endfor %}
                    contentsCss: {{ contents_css_array|json_encode }},
                {% else %}
                    contentsCss: '{{ asset(contents_css) }}',
                {% endif %}
            {% endif %}
            {% if basic_entities is not null %}
                basicEntities: '{{ basic_entities }}',
            {% endif %}
            {% if entities is not null %}
                entities: '{{ entities }}',
            {% endif %}
            {% if entities_latin is not null %}
                entities_latin: '{{ entities_latin }}',
            {% endif %}
            {% if startup_mode is not null %}
                startupMode: '{{ startup_mode }}',
            {% endif %}
            {% if enter_mode is not null %}
                enterMode: CKEDITOR.{{ enter_mode }},
            {% endif %}
            {% if plugins %}
                extraPlugins: '{{ plugins }}',
            {% endif %}
            {% if custom_config %}
                customConfig: '{{ asset(custom_config) }}',
            {% endif %}
            toolbar: {{ toolbar | json_encode | raw }},
            baseHref: '{{ base_href ? base_href : app.request.schemeAndHttpHost ~ app.request.baseUrl ~ '/' }}'
        };

        CKEDITOR.replace(\"{{ id }}\", trsteelConfig);
        CKEDITOR.instances[\"{{ id }}\"].rawConfig = trsteelConfig;

    {% endautoescape %}
    </script>
{% endspaceless %}
{% endblock %}
", "TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig", "/var/www/edu-yukon/api/vendor/trsteel/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
