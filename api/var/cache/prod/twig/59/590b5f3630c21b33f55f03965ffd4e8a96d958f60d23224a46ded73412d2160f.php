<?php

/* TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_8fd8321ae81618a6e51d60f0b21ba3803d08dc8b259bd921124065326993351c extends Twig_Template
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
        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>

    <script type=\"text/javascript\">
    ";
        // line 7
        echo "        var CKEDITOR_BASEPATH = '";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "basePath", array()) . "/") . ($context["base_path"] ?? null)), "js", null, true);
        echo "';
    ";
        // line 9
        echo "    </script>

    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["base_path"] ?? null) . "ckeditor.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    ";
        // line 14
        echo "        ";
        $context["plugins"] = "";
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["external_plugins"] ?? null));
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
            echo (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "basePath", array()) . twig_get_attribute($this->env, $this->getSourceContext(), $context["external_plugin"], "path", array()));
            echo "', '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["external_plugin"], "file", array());
            echo "');
            ";
            // line 17
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                // line 18
                echo "                ";
                $context["plugins"] = (($context["plugins"] ?? null) . ",");
                // line 19
                echo "            ";
            }
            // line 20
            echo "            ";
            $context["plugins"] = (($context["plugins"] ?? null) . $context["name"]);
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
        if ( !(null === ($context["width"] ?? null))) {
            // line 25
            echo "                width: '";
            echo ($context["width"] ?? null);
            echo "',
            ";
        }
        // line 27
        echo "            ";
        if ((twig_length_filter($this->env, ($context["templates_files"] ?? null)) > 0)) {
            // line 28
            echo "                ";
            $context["templates_files_array"] = array();
            // line 29
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["templates_files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 30
                echo "                    ";
                $context["templates_files_array"] = twig_array_merge(($context["templates_files_array"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["file"])));
                // line 31
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                templates_files: ";
            echo json_encode(($context["templates_files_array"] ?? null));
            echo ",
            ";
        }
        // line 34
        echo "            ";
        if ( !(null === ($context["allowed_content"] ?? null))) {
            // line 35
            echo "                allowedContent: ";
            if ((($context["allowed_content"] ?? null) == "true")) {
                echo "true";
            } else {
                echo "'";
                echo ($context["allowed_content"] ?? null);
                echo "'";
            }
            echo ",
            ";
        }
        // line 37
        echo "            ";
        if ( !(null === ($context["extra_allowed_content"] ?? null))) {
            // line 38
            echo "                extraAllowedContent: ";
            if ((($context["extra_allowed_content"] ?? null) == "true")) {
                echo "true";
            } else {
                echo "'";
                echo ($context["extra_allowed_content"] ?? null);
                echo "'";
            }
            echo ",
            ";
        }
        // line 40
        echo "            ";
        if ( !(null === ($context["templates_replace_content"] ?? null))) {
            // line 41
            echo "                templates_replaceContent: ";
            echo ((($context["templates_replace_content"] ?? null)) ? ("true") : ("false"));
            echo ",
            ";
        }
        // line 43
        echo "            ";
        if ( !(null === ($context["height"] ?? null))) {
            // line 44
            echo "                height: '";
            echo ($context["height"] ?? null);
            echo "',
            ";
        }
        // line 46
        echo "            ";
        if ( !(null === ($context["force_paste_as_plaintext"] ?? null))) {
            // line 47
            echo "                forcePasteAsPlainText: ";
            echo ($context["force_paste_as_plaintext"] ?? null);
            echo ",
            ";
        }
        // line 49
        echo "            ";
        if ( !(null === ($context["language"] ?? null))) {
            // line 50
            echo "                language: '";
            echo ($context["language"] ?? null);
            echo "',
            ";
        }
        // line 52
        echo "            ";
        if ( !(null === ($context["ui_color"] ?? null))) {
            // line 53
            echo "                uiColor: \"";
            echo ($context["ui_color"] ?? null);
            echo "\",
            ";
        }
        // line 55
        echo "            ";
        if ((($context["startup_outline_blocks"] ?? null) == true)) {
            // line 56
            echo "                startupOutlineBlocks: ";
            echo ($context["startup_outline_blocks"] ?? null);
            echo ",
            ";
        }
        // line 58
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_browse_url"] ?? null), "route", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_browse_url"] ?? null), "route", array())))) {
            // line 59
            echo "                filebrowserBrowseUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_browse_url"] ?? null), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_browse_url"] ?? null), "route_parameters", array()));
            echo "',
            ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 60
($context["filebrowser_browse_url"] ?? null), "url", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_browse_url"] ?? null), "url", array())))) {
            // line 61
            echo "                filebrowserBrowseUrl: '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_browse_url"] ?? null), "url", array());
            echo "',
            ";
        }
        // line 63
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_upload_url"] ?? null), "route", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_upload_url"] ?? null), "route", array())))) {
            // line 64
            echo "                filebrowserUploadUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_upload_url"] ?? null), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_upload_url"] ?? null), "route_parameters", array()));
            echo "',
            ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 65
($context["filebrowser_upload_url"] ?? null), "url", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_upload_url"] ?? null), "url", array())))) {
            // line 66
            echo "                filebrowserUploadUrl: '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_upload_url"] ?? null), "url", array());
            echo "',
            ";
        }
        // line 68
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_browse_url"] ?? null), "route", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_browse_url"] ?? null), "route", array())))) {
            // line 69
            echo "                filebrowserImageBrowseUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_browse_url"] ?? null), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_browse_url"] ?? null), "route_parameters", array()));
            echo "',
            ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 70
($context["filebrowser_image_browse_url"] ?? null), "url", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_browse_url"] ?? null), "url", array())))) {
            // line 71
            echo "                filebrowserImageBrowseUrl: '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_browse_url"] ?? null), "url", array());
            echo "',
            ";
        }
        // line 73
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_upload_url"] ?? null), "route", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_upload_url"] ?? null), "route", array())))) {
            // line 74
            echo "                filebrowserImageUploadUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_upload_url"] ?? null), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_upload_url"] ?? null), "route_parameters", array()));
            echo "',
            ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 75
($context["filebrowser_image_upload_url"] ?? null), "url", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_upload_url"] ?? null), "url", array())))) {
            // line 76
            echo "                filebrowserImageUploadUrl: '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_image_upload_url"] ?? null), "url", array());
            echo "',
            ";
        }
        // line 78
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_browse_url"] ?? null), "route", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_browse_url"] ?? null), "route", array())))) {
            // line 79
            echo "                filebrowserFlashBrowseUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_browse_url"] ?? null), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_browse_url"] ?? null), "route_parameters", array()));
            echo "',
            ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 80
($context["filebrowser_flash_browse_url"] ?? null), "url", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_browse_url"] ?? null), "url", array())))) {
            // line 81
            echo "                filebrowserFlashBrowseUrl: '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_browse_url"] ?? null), "url", array());
            echo "',
            ";
        }
        // line 83
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_upload_url"] ?? null), "route", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_upload_url"] ?? null), "route", array())))) {
            // line 84
            echo "                filebrowserFlashUploadUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_upload_url"] ?? null), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_upload_url"] ?? null), "route_parameters", array()));
            echo "',
            ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 85
($context["filebrowser_flash_upload_url"] ?? null), "url", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_upload_url"] ?? null), "url", array())))) {
            // line 86
            echo "                filebrowserFlashUploadUrl: '";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["filebrowser_flash_upload_url"] ?? null), "url", array());
            echo "',
            ";
        }
        // line 88
        echo "            ";
        if ( !(null === ($context["skin"] ?? null))) {
            // line 89
            echo "                skin: '";
            echo ($context["skin"] ?? null);
            echo "',
            ";
        }
        // line 91
        echo "            ";
        if ( !(null === ($context["disable_native_spell_checker"] ?? null))) {
            // line 92
            echo "                disableNativeSpellChecker: ";
            echo ((($context["disable_native_spell_checker"] ?? null)) ? ("true") : ("false"));
            echo ",
            ";
        }
        // line 94
        echo "            ";
        if ((twig_length_filter($this->env, ($context["format_tags"] ?? null)) > 0)) {
            // line 95
            echo "                format_tags: '";
            echo twig_join_filter(($context["format_tags"] ?? null), ";");
            echo "',
            ";
        }
        // line 97
        echo "            ";
        if ( !(null === ($context["body_class"] ?? null))) {
            // line 98
            echo "                bodyClass: '";
            echo ($context["body_class"] ?? null);
            echo "',
            ";
        }
        // line 100
        echo "            ";
        if ( !(null === ($context["contents_css"] ?? null))) {
            // line 101
            echo "                ";
            if (twig_test_iterable(($context["contents_css"] ?? null))) {
                // line 102
                echo "                    ";
                $context["contents_css_array"] = array();
                // line 103
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["contents_css"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 104
                    echo "                        ";
                    $context["contents_css_array"] = twig_array_merge(($context["contents_css_array"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["file"])));
                    // line 105
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                    contentsCss: ";
                echo json_encode(($context["contents_css_array"] ?? null));
                echo ",
                ";
            } else {
                // line 108
                echo "                    contentsCss: '";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["contents_css"] ?? null));
                echo "',
                ";
            }
            // line 110
            echo "            ";
        }
        // line 111
        echo "            ";
        if ( !(null === ($context["basic_entities"] ?? null))) {
            // line 112
            echo "                basicEntities: '";
            echo ($context["basic_entities"] ?? null);
            echo "',
            ";
        }
        // line 114
        echo "            ";
        if ( !(null === ($context["entities"] ?? null))) {
            // line 115
            echo "                entities: '";
            echo ($context["entities"] ?? null);
            echo "',
            ";
        }
        // line 117
        echo "            ";
        if ( !(null === ($context["entities_latin"] ?? null))) {
            // line 118
            echo "                entities_latin: '";
            echo ($context["entities_latin"] ?? null);
            echo "',
            ";
        }
        // line 120
        echo "            ";
        if ( !(null === ($context["startup_mode"] ?? null))) {
            // line 121
            echo "                startupMode: '";
            echo ($context["startup_mode"] ?? null);
            echo "',
            ";
        }
        // line 123
        echo "            ";
        if ( !(null === ($context["enter_mode"] ?? null))) {
            // line 124
            echo "                enterMode: CKEDITOR.";
            echo ($context["enter_mode"] ?? null);
            echo ",
            ";
        }
        // line 126
        echo "            ";
        if (($context["plugins"] ?? null)) {
            // line 127
            echo "                extraPlugins: '";
            echo ($context["plugins"] ?? null);
            echo "',
            ";
        }
        // line 129
        echo "            ";
        if (($context["custom_config"] ?? null)) {
            // line 130
            echo "                customConfig: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["custom_config"] ?? null));
            echo "',
            ";
        }
        // line 132
        echo "            toolbar: ";
        echo json_encode(($context["toolbar"] ?? null));
        echo ",
            baseHref: '";
        // line 133
        echo ((($context["base_href"] ?? null)) ? (($context["base_href"] ?? null)) : (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "schemeAndHttpHost", array()) . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "baseUrl", array())) . "/")));
        echo "'
        };

        CKEDITOR.replace(\"";
        // line 136
        echo ($context["id"] ?? null);
        echo "\", trsteelConfig);
        CKEDITOR.instances[\"";
        // line 137
        echo ($context["id"] ?? null);
        echo "\"].rawConfig = trsteelConfig;

    ";
        // line 140
        echo "    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  481 => 140,  476 => 137,  472 => 136,  466 => 133,  461 => 132,  455 => 130,  452 => 129,  446 => 127,  443 => 126,  437 => 124,  434 => 123,  428 => 121,  425 => 120,  419 => 118,  416 => 117,  410 => 115,  407 => 114,  401 => 112,  398 => 111,  395 => 110,  389 => 108,  383 => 106,  377 => 105,  374 => 104,  369 => 103,  366 => 102,  363 => 101,  360 => 100,  354 => 98,  351 => 97,  345 => 95,  342 => 94,  336 => 92,  333 => 91,  327 => 89,  324 => 88,  318 => 86,  316 => 85,  311 => 84,  308 => 83,  302 => 81,  300 => 80,  295 => 79,  292 => 78,  286 => 76,  284 => 75,  279 => 74,  276 => 73,  270 => 71,  268 => 70,  263 => 69,  260 => 68,  254 => 66,  252 => 65,  247 => 64,  244 => 63,  238 => 61,  236 => 60,  231 => 59,  228 => 58,  222 => 56,  219 => 55,  213 => 53,  210 => 52,  204 => 50,  201 => 49,  195 => 47,  192 => 46,  186 => 44,  183 => 43,  177 => 41,  174 => 40,  162 => 38,  159 => 37,  147 => 35,  144 => 34,  138 => 32,  132 => 31,  129 => 30,  124 => 29,  121 => 28,  118 => 27,  112 => 25,  110 => 24,  106 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  81 => 17,  72 => 16,  54 => 15,  51 => 14,  46 => 11,  42 => 9,  37 => 7,  28 => 3,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig", "/var/www/edu-yukon/api/vendor/trsteel/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
