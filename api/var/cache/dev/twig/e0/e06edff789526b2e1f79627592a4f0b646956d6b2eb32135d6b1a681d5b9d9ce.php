<?php

/* NelmioApiDocBundle::layout.html.twig */
class __TwigTemplate_b1c9bbfa0fbf6ae29daf4f2c8cbe296bef374f4f777725efcfca226844ec2539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4909e999f526c82244920c31b0c1803f4f5974f985728fdd4a17b4f68b7feeec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4909e999f526c82244920c31b0c1803f4f5974f985728fdd4a17b4f68b7feeec->enter($__internal_4909e999f526c82244920c31b0c1803f4f5974f985728fdd4a17b4f68b7feeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
    <head>
        <meta charset=\"utf-8\" />
        <!-- Always force latest IE rendering engine (even in intranet) and Chrome Frame -->
        <meta content=\"IE=edge,chrome=1\" http-equiv=\"X-UA-Compatible\" />
        <title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["apiName"]) || array_key_exists("apiName", $context) ? $context["apiName"] : (function () { throw new Twig_Error_Runtime('Variable "apiName" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
        <style type=\"text/css\">
            ";
        // line 9
        echo (isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new Twig_Error_Runtime('Variable "css" does not exist.', 9, $this->getSourceContext()); })());
        echo "
        </style>
        <script type=\"text/javascript\">
            ";
        // line 12
        echo (isset($context["js"]) || array_key_exists("js", $context) ? $context["js"] : (function () { throw new Twig_Error_Runtime('Variable "js" does not exist.', 12, $this->getSourceContext()); })());
        echo "
        </script>
    </head>
    <body>
        <div id=\"header\">
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nelmio_api_doc_index");
        echo "\"><h1>";
        echo twig_escape_filter($this->env, (isset($context["apiName"]) || array_key_exists("apiName", $context) ? $context["apiName"] : (function () { throw new Twig_Error_Runtime('Variable "apiName" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1></a>
            ";
        // line 18
        if ((isset($context["enableSandbox"]) || array_key_exists("enableSandbox", $context) ? $context["enableSandbox"] : (function () { throw new Twig_Error_Runtime('Variable "enableSandbox" does not exist.', 18, $this->getSourceContext()); })())) {
            // line 19
            echo "                <div id=\"sandbox_configuration\">
                    ";
            // line 20
            if ((twig_length_filter($this->env, (isset($context["bodyFormats"]) || array_key_exists("bodyFormats", $context) ? $context["bodyFormats"] : (function () { throw new Twig_Error_Runtime('Variable "bodyFormats" does not exist.', 20, $this->getSourceContext()); })())) > 0)) {
                // line 21
                echo "                    body format:
                    <select id=\"body_format\">
                        ";
                // line 23
                if (twig_in_filter("form", (isset($context["bodyFormats"]) || array_key_exists("bodyFormats", $context) ? $context["bodyFormats"] : (function () { throw new Twig_Error_Runtime('Variable "bodyFormats" does not exist.', 23, $this->getSourceContext()); })()))) {
                    echo "<option value=\"form\"";
                    echo ((((isset($context["defaultBodyFormat"]) || array_key_exists("defaultBodyFormat", $context) ? $context["defaultBodyFormat"] : (function () { throw new Twig_Error_Runtime('Variable "defaultBodyFormat" does not exist.', 23, $this->getSourceContext()); })()) == "form")) ? (" selected") : (""));
                    echo ">Form Data</option>";
                }
                // line 24
                echo "                        ";
                if (twig_in_filter("json", (isset($context["bodyFormats"]) || array_key_exists("bodyFormats", $context) ? $context["bodyFormats"] : (function () { throw new Twig_Error_Runtime('Variable "bodyFormats" does not exist.', 24, $this->getSourceContext()); })()))) {
                    echo "<option value=\"json\"";
                    echo ((((isset($context["defaultBodyFormat"]) || array_key_exists("defaultBodyFormat", $context) ? $context["defaultBodyFormat"] : (function () { throw new Twig_Error_Runtime('Variable "defaultBodyFormat" does not exist.', 24, $this->getSourceContext()); })()) == "json")) ? (" selected") : (""));
                    echo ">JSON</option>";
                }
                // line 25
                echo "                    </select>
                    ";
            }
            // line 27
            echo "                    ";
            if ((twig_length_filter($this->env, (isset($context["requestFormats"]) || array_key_exists("requestFormats", $context) ? $context["requestFormats"] : (function () { throw new Twig_Error_Runtime('Variable "requestFormats" does not exist.', 27, $this->getSourceContext()); })())) > 0)) {
                // line 28
                echo "                    request format:
                    <select id=\"request_format\">
                    ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["requestFormats"]) || array_key_exists("requestFormats", $context) ? $context["requestFormats"] : (function () { throw new Twig_Error_Runtime('Variable "requestFormats" does not exist.', 30, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["format"] => $context["header"]) {
                    // line 31
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["header"], "html", null, true);
                    echo "\"";
                    echo ((((isset($context["defaultRequestFormat"]) || array_key_exists("defaultRequestFormat", $context) ? $context["defaultRequestFormat"] : (function () { throw new Twig_Error_Runtime('Variable "defaultRequestFormat" does not exist.', 31, $this->getSourceContext()); })()) == $context["format"])) ? (" selected") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, $context["format"], "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['format'], $context['header'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                    ";
            }
            // line 34
            echo "                    </select>
                    ";
            // line 35
            if ((isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 35, $this->getSourceContext()); })())) {
                // line 36
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 36, $this->getSourceContext()); })()), "delivery", array()) == "http") && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 36, $this->getSourceContext()); })()), "type", array()) == "basic"))) {
                    // line 37
                    echo "                            api login: <input type=\"text\" id=\"api_login\" value=\"\"/>
                            api password: <input type=\"text\" id=\"api_pass\" value=\"\"/>
                        ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(),                 // line 39
(isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 39, $this->getSourceContext()); })()), "delivery", array()), array(0 => "query", 1 => "http", 2 => "header"))) {
                    // line 40
                    echo "                            api key: <input type=\"text\" id=\"api_key\" value=\"\"/>
                        ";
                }
                // line 42
                echo "
                        ";
                // line 43
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 43, $this->getSourceContext()); })()), "custom_endpoint", array())) {
                    // line 44
                    echo "                            api endpoint: <input type=\"text\" id=\"api_endpoint\" value=\"\"/>
                        ";
                }
                // line 46
                echo "                        <button id=\"save_api_auth\" type=\"button\">Save</button>
                        <button id=\"clear_api_auth\" type=\"button\">Clear</button>
                    ";
            }
            // line 49
            echo "                </div>
            ";
        }
        // line 51
        echo "            <br style=\"clear: both;\" />
        </div>
        ";
        // line 53
        $this->loadTemplate((isset($context["motdTemplate"]) || array_key_exists("motdTemplate", $context) ? $context["motdTemplate"] : (function () { throw new Twig_Error_Runtime('Variable "motdTemplate" does not exist.', 53, $this->getSourceContext()); })()), "NelmioApiDocBundle::layout.html.twig", 53)->display($context);
        // line 54
        echo "        <div class=\"container\" id=\"resources_container\">
            <ul id=\"resources\">
                ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "            </ul>
        </div>
        <p id=\"colophon\">
            Documentation auto-generated on ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new Twig_Error_Runtime('Variable "date" does not exist.', 60, $this->getSourceContext()); })()), "html", null, true);
        echo "
        </p>
        <script type=\"text/javascript\">

            var getHash = function() {
              return window.location.hash || '';
            };

            var setHash = function(hash) {
                window.location.hash = hash;
            };

            var clearHash = function() {
                var scrollTop, scrollLeft;

                if(typeof history === 'object' && typeof history.pushState === 'function') {
                    history.replaceState('', document.title, window.location.pathname + window.location.search);
                } else {
                    scrollTop = document.body.scrollTop;
                    scrollLeft = document.body.scrollLeft;

                    setHash('');

                    document.body.scrollTop = scrollTop;
                    document.body.scrollLeft = scrollLeft;
                }
            };

            \$(window).load(function() {
                var id = getHash().substr(1).replace( /([:\\.\\[\\]\\{\\}|])/g, \"\\\\\$1\");
                var elem = \$('#' + id);
                if (elem.length) {
                    setTimeout(function() {
                        \$('body,html').scrollTop(elem.position().top);
                    });
                    elem.find('.toggler').click();
                    var section = elem.parents('.section').first();
                    if (section) {
                        section.addClass('active');
                        section.find('.section-list').slideDown('fast');
                    }
                }
                ";
        // line 102
        if ((isset($context["enableSandbox"]) || array_key_exists("enableSandbox", $context) ? $context["enableSandbox"] : (function () { throw new Twig_Error_Runtime('Variable "enableSandbox" does not exist.', 102, $this->getSourceContext()); })())) {
            // line 103
            echo "                    loadStoredAuthParams();
                ";
        }
        // line 105
        echo "            });

            \$('.toggler').click(function(event) {
                var contentContainer = \$(this).next();

                if(contentContainer.is(':visible')) {
                    clearHash();
                } else {
                    setHash(\$(this).data('href'));
                }

                contentContainer.slideToggle('fast');
                return false;
            });

            \$('.action-show-hide, .section > h1').on('click', function(){
                var section = \$(this).parents('.section').first();
                if (section.hasClass('active')) {
                    section.removeClass('active');
                    section.find('.section-list').slideUp('fast');
                } else {
                    section.addClass('active');
                    section.find('.section-list').slideDown('fast');
                }

            });

            \$('.action-list').on('click', function(){
                var section = \$(this).parents('.section').first();
                if (!section.hasClass('active')) {
                    section.addClass('active');
                }
                section.find('.section-list').slideDown('fast');
                section.find('.operation > .content').slideUp('fast');
            });

            \$('.action-expand').on('click', function(){
                var section = \$(this).parents('.section').first();
                if (!section.hasClass('active')) {
                    section.addClass('active');
                }
                \$(section).find('ul').slideDown('fast');
                \$(section).find('.operation > .content').slideDown('fast');
            });

            ";
        // line 150
        if ((isset($context["enableSandbox"]) || array_key_exists("enableSandbox", $context) ? $context["enableSandbox"] : (function () { throw new Twig_Error_Runtime('Variable "enableSandbox" does not exist.', 150, $this->getSourceContext()); })())) {
            // line 151
            echo "                var getStoredValue, storeValue, deleteStoredValue;
                var apiAuthKeys = ['api_key', 'api_login', 'api_pass', 'api_endpoint'];

                if ('localStorage' in window) {
                    var buildKey = function (key) {
                        return 'nelmio_' + key;
                    }

                    getStoredValue = function (key) {
                        return localStorage.getItem(buildKey(key));
                    }

                    storeValue = function (key, value) {
                        localStorage.setItem(buildKey(key), value);
                    }

                    deleteStoredValue = function (key) {
                        localStorage.removeItem(buildKey(key));
                    }
                } else {
                    getStoredValue = storeValue = deleteStoredValue = function (){};
                }

                var loadStoredAuthParams = function() {
                    \$.each(apiAuthKeys, function(_, value) {
                        var elm = \$('#' + value);
                        if (elm.length) {
                            elm.val(getStoredValue(value));
                        }
                    });
                }

                var setParameterType = function (\$context,setType) {
                    // no 2nd argument, use default from parameters
                    if (typeof setType == \"undefined\") {
                        setType = \$context.parent().attr(\"data-dataType\");
                        \$context.val(setType);
                    }

                    \$context.parent().find('.value').remove();
                    var placeholder = \"\";
                    if (\$context.parent().attr(\"data-dataType\") != \"\" && typeof \$context.parent().attr(\"data-dataType\") != \"undefined\") {
                        placeholder += \"[\" + \$context.parent().attr(\"data-dataType\") + \"] \";
                    }
                    if (\$context.parent().attr(\"data-format\") != \"\" && typeof \$context.parent().attr(\"data-format\") != \"undefined\") {
                        placeholder += \$context.parent().attr(\"data-format\");
                    }
                    if (\$context.parent().attr(\"data-description\") != \"\" && typeof \$context.parent().attr(\"data-description\") != \"undefined\") {
                        placeholder += \$context.parent().attr(\"data-description\");
                    } else {
                        placeholder += \"Value\";
                    }

                    switch(setType) {
                        case \"boolean\":
                            \$('<select class=\"value\"><option value=\"\"></option><option value=\"1\">True</option><option value=\"0\">False</option></select>').insertAfter(\$context);
                            break;
                        case \"file\":
                            \$('<input type=\"file\" class=\"value\" placeholder=\"'+ placeholder +'\">').insertAfter(\$context);
                            break;
                        case \"textarea\":
                            \$('<textarea class=\"value\" placeholder=\"'+ placeholder +'\" />').insertAfter(\$context);
                            break;
                        default:
                            \$('<input type=\"text\" class=\"value\" placeholder=\"'+ placeholder +'\">').insertAfter(\$context);
                    }
                };

                var toggleButtonText = function (\$btn) {
                    if (\$btn.text() === 'Default') {
                        \$btn.text('Raw');
                    } else {
                        \$btn.text('Default');
                    }
                };

                var renderRawBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-raw');

                    \$container.addClass('prettyprinted');
                    \$container.html(\$('<div/>').text(rawData).html());

                    \$btn.removeClass('to-raw');
                    \$btn.addClass('to-prettify');

                    toggleButtonText(\$btn);
                };

                var renderPrettifiedBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-prettify');

                    \$container.removeClass('prettyprinted');
                    \$container.html(attachCollapseMarker(prettifyResponse(rawData)));
                    prettyPrint && prettyPrint();

                    \$btn.removeClass('to-prettify');
                    \$btn.addClass('to-raw');

                    toggleButtonText(\$btn);
                };

                var unflattenDict = function (body) {
                    var found = true;
                    while(found) {
                        found = false;

                        for (var key in body) {
                            var okey;
                            var value = body[key];
                            var dictMatch = key.match(/^(.+)\\[([^\\]]+)\\]\$/);

                            if(dictMatch) {
                                found = true;
                                okey = dictMatch[1];
                                var subkey = dictMatch[2];
                                body[okey] = body[okey] || {};
                                body[okey][subkey] = value;
                                delete body[key];
                            } else {
                                body[key] = value;
                            }
                        }
                    }
                    return body;
                };

                \$('#save_api_auth').click(function(event) {
                    \$.each(apiAuthKeys, function(_, value) {
                        var elm = \$('#' + value);
                        if (elm.length) {
                            storeValue(value, elm.val());
                        }
                    });
                });

                \$('#clear_api_auth').click(function(event) {
                    \$.each(apiAuthKeys, function(_, value) {
                        deleteStoredValue(value);
                        var elm = \$('#' + value);
                        if (elm.length) {
                            elm.val('');
                        }
                    });
                });

                \$('.tabs li').click(function() {
                    var contentGroup = \$(this).parents('.content');

                    \$('.pane.selected', contentGroup).removeClass('selected');
                    \$('.pane.' + \$(this).data('pane'), contentGroup).addClass('selected');

                    \$('li', \$(this).parent()).removeClass('selected');
                    \$(this).addClass('selected');
                });

                var getJsonCollapseHtml = function(sectionOpenCharacter) {
                    var \$toggler = \$('<span>').addClass('json-collapse-section').
                            attr('data-section-open-character', sectionOpenCharacter).
                            append(\$('<span>').addClass('json-collapse-marker')
                                    .html('&#9663;')
                    ).append(sectionOpenCharacter);
                    return \$('<div>').append(\$toggler).html();
                };

                var attachCollapseMarker = function (prettifiedJsonString) {
                    prettifiedJsonString = prettifiedJsonString.replace(/(\\{|\\[)\\n/g, function(match, sectionOpenCharacter) {
                        return getJsonCollapseHtml(sectionOpenCharacter) + '<span class=\"json-collapse-content\">\\n';
                    });
                    return prettifiedJsonString.replace(/([^\\[][\\}\\]],?)\\n/g, '\$1</span>\\n');
                };

                var prettifyResponse = function(text) {
                    try {
                        var data = typeof text === 'string' ? JSON.parse(text) : text;
                        text = JSON.stringify(data, undefined, '  ');
                    } catch (err) {
                    }

                    // HTML encode the result
                    return \$('<div>').text(text).html();
                };

                var displayFinalUrl = function(xhr, method, url, data, container) {
                    container.text(method + ' ' + getFinalUrl(method, url, data));
                };

                var displayRequestBody = function(method, data, container, header) {
                    if ('GET' != method && !jQuery.isEmptyObject(data) && data !== \"\" && data !== undefined) {
                        if (jQuery.type(data) !== 'string') {
                            data = decodeURIComponent(jQuery.param(data));
                        }

                        container.text(data);
                        container.show();
                        header.show();
                    } else {
                        container.hide();
                        header.hide();
                    }
                };

                var displayProfilerUrl = function(xhr, link, container) {
                    var profilerUrl = xhr.getResponseHeader('X-Debug-Token-Link');
                    if (profilerUrl) {
                        link.attr('href', profilerUrl);
                        container.show();
                    } else {
                        link.attr('href', '');
                        container.hide();
                    }
                };

                var displayResponseData = function(xhr, container) {
                    var data = xhr.responseText;

                    container.data('raw-response', data);

                    renderPrettifiedBody(container);

                    container.parents('.pane').find('.to-prettify').text('Raw');
                    container.parents('.pane').find('.to-raw').text('Raw');
                };

                var displayResponseHeaders = function(xhr, container) {
                    var text = xhr.status + ' ' + xhr.statusText + \"\\n\\n\";
                    text += xhr.getAllResponseHeaders();

                    container.text(text);
                };

                var displayCurl = function(method, url, headers, data, result_container) {
                    var escapeShell = function(param) {
                        param = \"\" + param;
                        return '\"' + param.replace(/([\"\\s'\$`\\\\])/g,'\\\\\$1') + '\"';
                    };

                    url = getFinalUrl(method, url, data);

                    var command = \"curl\";
                    command += \" -X \" + escapeShell(method);

                    if (method != \"GET\" && !jQuery.isEmptyObject(data) && data !== \"\" && data !== undefined) {
                        if (jQuery.type(data) !== 'string') {
                            data = decodeURIComponent(jQuery.param(data));
                        }
                        command += \" -d \" + escapeShell(data);
                    }

                    for (headerKey in headers) {
                        if (headers.hasOwnProperty(headerKey)) {
                            command += \" -H \" + escapeShell(headerKey + ': ' + headers[headerKey]);
                        }
                    }

                    command += \" \" + url;

                    result_container.text(command);
                };

                var getFinalUrl = function(method, url, data) {
                    if ('GET' == method && !jQuery.isEmptyObject(data)) {
                        var separator = url.indexOf('?') >= 0 ? '&' : '?';
                        url = url + separator + decodeURIComponent(jQuery.param(data));
                    }

                    return url;
                };

                var displayResponse = function(xhr, method, url, headers, data, result_container) {
                    displayFinalUrl(xhr, method, url, data, \$('.url', result_container));
                    displayRequestBody(method, data, \$('.request-body', result_container), \$('.request-body-header', result_container));
                    displayProfilerUrl(xhr, \$('.profiler-link', result_container), \$('.profiler', result_container));
                    displayResponseData(xhr, \$('.response', result_container));
                    displayResponseHeaders(xhr, \$('.headers', result_container));
                    displayCurl(method, url, headers, data, \$('.curl-command', result_container));

                    result_container.show();
                };

                \$('.pane.sandbox form').submit(function() {
                    var url = \$(this).attr('action'),
                        method = \$('[name=\"header_method\"]', this).val(),
                        self = this,
                        params = {},
                        filters = {},
                        formData = new FormData(),
                        doubledParams = {},
                        doubledFilters = {},
                        headers = {},
                        content = \$(this).find('textarea.content').val(),
                        result_container = \$('.result', \$(this).parent());

                    if (method === 'ANY') {
                        method = 'POST';
                    }

                    // set requestFormat
                    var requestFormatMethod = '";
            // line 454
            echo twig_escape_filter($this->env, (isset($context["requestFormatMethod"]) || array_key_exists("requestFormatMethod", $context) ? $context["requestFormatMethod"] : (function () { throw new Twig_Error_Runtime('Variable "requestFormatMethod" does not exist.', 454, $this->getSourceContext()); })()), "html", null, true);
            echo "';
                    if (requestFormatMethod == 'format_param') {
                        params['_format'] = \$('#request_format option:selected').text();
                        formData.append('_format',\$('#request_format option:selected').text());
                    } else if (requestFormatMethod == 'accept_header') {
                        headers['Accept'] = \$('#request_format').val();
                    }

                    // set default bodyFormat
                    var bodyFormat = \$('#body_format').val() || '";
            // line 463
            echo twig_escape_filter($this->env, (isset($context["defaultBodyFormat"]) || array_key_exists("defaultBodyFormat", $context) ? $context["defaultBodyFormat"] : (function () { throw new Twig_Error_Runtime('Variable "defaultBodyFormat" does not exist.', 463, $this->getSourceContext()); })()), "html", null, true);
            echo "';

                    if(!('Content-type' in headers)) {
                        if (bodyFormat == 'form') {
                            headers['Content-type'] = 'application/x-www-form-urlencoded';
                        } else {
                            headers['Content-type'] = 'application/json';
                        }
                    }

                    var hasFileTypes = false;
                    \$('.parameters .tuple_type', \$(this)).each(function() {
                        if (\$(this).val() == 'file') {
                            hasFileTypes = true;
                        }
                    });

                    if (hasFileTypes && method != 'POST') {
                        alert(\"Sorry, you can only submit files via POST.\");
                        return false;
                    }

                    if (hasFileTypes && bodyFormat != 'form') {
                        alert(\"Body Format must be set to 'Form Data' when utilizing file upload type parameters.\\nYour current bodyFormat is '\" + bodyFormat + \"'. Change your BodyFormat or do not use file type\\nparameters.\");
                        return false;
                    }

                    if (hasFileTypes) {
                        // retrieve all the parameters to send for file upload
                        \$('.parameters .tuple', \$(this)).each(function() {
                            var key, value;

                            key = \$('.key', \$(this)).val();
                            if (\$('.value', \$(this)).attr('type') === 'file' ) {
                                value = \$('.value', \$(this)).prop('files')[0];
                                if(!value) {
                                    value = new File([], '');
                                }
                            } else {
                                value = \$('.value', \$(this)).val();
                            }

                            if (value) {
                                formData.append(key,value);
                            }
                        });
                    }


                    // retrieve all the parameters to send
                    \$('.parameters .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            // convert boolean values to boolean
                            if ('json' === bodyFormat && 'boolean' === \$('.tuple_type', \$(this)).val()) {
                                value = '1' === value;
                            }

                            // temporary save all additional/doubled parameters
                            if (key in params) {
                                doubledParams[key] = value;
                            } else {
                                params[key] = value;
                            }
                        }
                    });




                    // retrieve all the filters to send
                    \$('.parameters .tuple.filter', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            // temporary save all additional/doubled parameters
                            if (key in filters) {
                                doubledFilters[key] = value;
                            } else {
                                filters[key] = value;
                            }
                        }
                    });




                    // retrieve the additional headers to send
                    \$('.headers .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            headers[key] = value;
                        }

                    });

                    // fix parameters in URL
                    for (var key in \$.extend({}, params)) {
                        if (url.indexOf('{' + key + '}') !== -1) {
                            url = url.replace('{' + key + '}', params[key]);
                            delete params[key];
                        }
                    };

                    // merge additional params back to real params object
                    if (!\$.isEmptyObject(doubledParams)) {
                        \$.extend(params, doubledParams);
                    }

                    // disable all the fiels and buttons
                    \$('input, button', \$(this)).attr('disabled', 'disabled');

                    // append the query authentication
                    var api_key_val = \$('#api_key').val();
                    if (authentication_delivery == 'query' && api_key_val.length>0) {
                        url += url.indexOf('?') > 0 ? '&' : '?';
                        url += api_key_parameter + '=' + api_key_val;
                    }

                    // prepare the api enpoint
                    ";
            // line 594
            if (((((isset($context["endpoint"]) || array_key_exists("endpoint", $context) ? $context["endpoint"] : (function () { throw new Twig_Error_Runtime('Variable "endpoint" does not exist.', 594, $this->getSourceContext()); })()) == "") &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 594, $this->getSourceContext()); })()), "request", array()))) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 594, $this->getSourceContext()); })()), "request", array()), "host", array()))) {
                // line 595
                echo "var endpoint = '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 595, $this->getSourceContext()); })()), "request", array()), "getBaseUrl", array(), "method"), "html", null, true);
                echo "';
                    ";
            } else {
                // line 597
                echo "var endpoint = '";
                echo twig_escape_filter($this->env, (isset($context["endpoint"]) || array_key_exists("endpoint", $context) ? $context["endpoint"] : (function () { throw new Twig_Error_Runtime('Variable "endpoint" does not exist.', 597, $this->getSourceContext()); })()), "html", null, true);
                echo "';
                    ";
            }
            // line 599
            if (((isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 599, $this->getSourceContext()); })()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 599, $this->getSourceContext()); })()), "custom_endpoint", array()))) {
                // line 600
                echo "                    if (\$('#api_endpoint') && typeof(\$('#api_endpoint').val()) != 'undefined') {
                        endpoint = \$('#api_endpoint').val();
                    }
                    ";
            }
            // line 604
            echo "
                    //add filters as GET params and remove them from params
                    if(method != 'GET'){
                        for (var filterKey in \$.extend({}, filters)){
                            url += url.indexOf('?') > 0 ? '&' : '?';
                            url += filterKey + '=' + filters[filterKey];

                            if (params.hasOwnProperty(filterKey)){
                                delete(params[filterKey]);
                            }
                        }
                    }

                    // prepare final parameters
                    var body = {};
                    if(bodyFormat == 'json' && method != 'GET') {
                        body = unflattenDict(params);
                        body = JSON.stringify(body);
                    } else {
                        body = params;
                    }
                    var data = content.length ? content : body;
                    var ajaxOptions = {
                        url: (url.indexOf('http')!=0?endpoint:'') + url,
                        xhrFields: { withCredentials: true },
                        type: method,
                        data: data,
                        headers: headers,
                        crossDomain: true,
                        beforeSend: function (xhr) {
                            if (authentication_delivery) {
                                var value;

                                if ('http' == authentication_delivery) {
                                    if ('basic' == authentication_type) {
                                        value = 'Basic ' + btoa(\$('#api_login').val() + ':' + \$('#api_pass').val());
                                    } else if ('bearer' == authentication_type) {
                                        value = 'Bearer ' + \$('#api_key').val();
                                    }
                                } else if ('header' == authentication_delivery) {
                                    value = \$('#api_key').val();
                                }

                                xhr.setRequestHeader(api_key_parameter, value);
                            }
                        },
                        complete: function(xhr) {
                            displayResponse(xhr, method, url, headers, data, result_container);

                            // and enable them back
                            \$('input:not(.content-type), button', \$(self)).removeAttr('disabled');
                        }
                    };

                    // overrides body format to send data properly
                    if (hasFileTypes) {
                        ajaxOptions.data = formData;
                        ajaxOptions.processData = false;
                        ajaxOptions.contentType = false;
                        delete(headers['Content-type']);
                    }

                    // and trigger the API call
                    \$.ajax(ajaxOptions);

                    return false;
                });

                \$('.operations').on('click', '.operation > .heading', function(e) {
                    if (history.pushState) {
                        history.pushState(null, null, \$(this).data('href'));
                        e.preventDefault();
                    }
                });

                \$(document).on('click', '.json-collapse-section', function() {
                    var openChar = \$(this).data('section-open-character'),
                            closingChar = (openChar == '{' ? '}' : ']');
                    if (\$(this).next('.json-collapse-content').is(':visible')) {
                        \$(this).html('&oplus;' +  openChar + '...' + closingChar);
                    } else {
                        \$(this).html('&#9663;' + \$(this).data('section-open-character'));
                    }
                    \$(this).next('.json-collapse-content').toggle();
                });

                \$(document).on('copy', '.prettyprinted', function () {
                    var \$toggleMarkers = \$(this).find('.json-collapse-marker');
                    \$toggleMarkers.hide();
                    setTimeout(function () {
                        \$toggleMarkers.show();
                    }, 100);
                });

                \$('.pane.sandbox').on('click', '.to-raw', function(e) {
                    renderRawBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$('.pane.sandbox').on('click', '.to-prettify', function(e) {
                    renderPrettifiedBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$('.pane.sandbox').on('click', '.to-expand, .to-shrink', function(e) {
                    var \$headers = \$(this).parents('.result').find('.headers');
                    var \$label = \$(this).parents('.result').find('a.to-expand');

                    if (\$headers.hasClass('to-expand')) {
                        \$headers.removeClass('to-expand');
                        \$headers.addClass('to-shrink');
                        \$label.text('Shrink');
                    } else {
                        \$headers.removeClass('to-shrink');
                        \$headers.addClass('to-expand');
                        \$label.text('Expand');
                    }

                    e.preventDefault();
                });


                // sets the correct parameter type on load
                \$('.pane.sandbox .tuple_type').each(function() {
                    setParameterType(\$(this));
                });


                // handles parameter type change
                \$('.pane.sandbox').on('change', '.tuple_type', function() {
                    setParameterType(\$(this),\$(this).val());
                });



                \$('.pane.sandbox').on('click', '.add_parameter', function() {
                    var html = \$(this).parents('.pane').find('.parameters_tuple_template').html();

                    \$(this).before(html);

                    return false;
                });

                \$('.pane.sandbox').on('click', '.add_header', function() {
                    var html = \$(this).parents('.pane').find('.headers_tuple_template').html();

                    \$(this).before(html);

                    return false;
                });

                \$('.pane.sandbox').on('click', '.remove', function() {
                    \$(this).parent().remove();
                });

                \$('.pane.sandbox').on('click', '.set-content-type', function(e) {
                    var html;
                    var \$element;
                    var \$headers = \$(this).parents('form').find('.headers');
                    var content_type = \$(this).prev('input.value').val();

                    e.preventDefault();

                    if (content_type.length === 0) {
                        return;
                    }

                    \$headers.find('input.key').each(function() {
                        if (\$.trim(\$(this).val().toLowerCase()) === 'content-type') {
                            \$element = \$(this).parents('p');
                            return false;
                        }
                    });

                    if (typeof \$element === 'undefined') {
                        html = \$(this).parents('.pane').find('.tuple_template').html();

                        \$element = \$headers.find('legend').after(html).next('p');
                    }

                    \$element.find('input.key').val('Content-Type');
                    \$element.find('input.value').val(content_type);

                });

                ";
            // line 791
            if (((isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 791, $this->getSourceContext()); })()) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 791, $this->getSourceContext()); })()), "delivery", array()) == "http"))) {
                // line 792
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 792, $this->getSourceContext()); })()), "delivery", array()), "html", null, true);
                echo "';
                var api_key_parameter = '";
                // line 793
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 793, $this->getSourceContext()); })()), "name", array()), "html", null, true);
                echo "';
                var authentication_type = '";
                // line 794
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 794, $this->getSourceContext()); })()), "type", array()), "html", null, true);
                echo "';
                ";
            } elseif ((            // line 795
(isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 795, $this->getSourceContext()); })()) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 795, $this->getSourceContext()); })()), "delivery", array()) == "query"))) {
                // line 796
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 796, $this->getSourceContext()); })()), "delivery", array()), "html", null, true);
                echo "';
                var api_key_parameter = '";
                // line 797
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 797, $this->getSourceContext()); })()), "name", array()), "html", null, true);
                echo "';
                var search = window.location.search;
                var api_key_start = search.indexOf(api_key_parameter) + api_key_parameter.length + 1;

                if (api_key_start > 0 ) {
                    var api_key_end = search.indexOf('&', api_key_start);

                    var api_key = -1 == api_key_end
                        ? search.substr(api_key_start)
                        : search.substring(api_key_start, api_key_end);

                    \$('#api_key').val(api_key);
                }
                ";
            } elseif ((            // line 810
(isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 810, $this->getSourceContext()); })()) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 810, $this->getSourceContext()); })()), "delivery", array()) == "header"))) {
                // line 811
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 811, $this->getSourceContext()); })()), "delivery", array()), "html", null, true);
                echo "';
                var api_key_parameter = '";
                // line 812
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new Twig_Error_Runtime('Variable "authentication" does not exist.', 812, $this->getSourceContext()); })()), "name", array()), "html", null, true);
                echo "';
                ";
            } else {
                // line 814
                echo "                var authentication_delivery = false;
                ";
            }
            // line 816
            echo "            ";
        }
        // line 817
        echo "        </script>
    </body>
</html>
";
        
        $__internal_4909e999f526c82244920c31b0c1803f4f5974f985728fdd4a17b4f68b7feeec->leave($__internal_4909e999f526c82244920c31b0c1803f4f5974f985728fdd4a17b4f68b7feeec_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_c98182f50c7ace9a8939855ebd342b2663a2646969c02f2c1efde2ee07e7ce2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98182f50c7ace9a8939855ebd342b2663a2646969c02f2c1efde2ee07e7ce2d->enter($__internal_c98182f50c7ace9a8939855ebd342b2663a2646969c02f2c1efde2ee07e7ce2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c98182f50c7ace9a8939855ebd342b2663a2646969c02f2c1efde2ee07e7ce2d->leave($__internal_c98182f50c7ace9a8939855ebd342b2663a2646969c02f2c1efde2ee07e7ce2d_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  993 => 56,  983 => 817,  980 => 816,  976 => 814,  971 => 812,  966 => 811,  964 => 810,  948 => 797,  943 => 796,  941 => 795,  937 => 794,  933 => 793,  928 => 792,  926 => 791,  737 => 604,  731 => 600,  729 => 599,  723 => 597,  717 => 595,  715 => 594,  581 => 463,  569 => 454,  264 => 151,  262 => 150,  215 => 105,  211 => 103,  209 => 102,  164 => 60,  159 => 57,  157 => 56,  153 => 54,  151 => 53,  147 => 51,  143 => 49,  138 => 46,  134 => 44,  132 => 43,  129 => 42,  125 => 40,  123 => 39,  119 => 37,  116 => 36,  114 => 35,  111 => 34,  108 => 33,  95 => 31,  91 => 30,  87 => 28,  84 => 27,  80 => 25,  73 => 24,  67 => 23,  63 => 21,  61 => 20,  58 => 19,  56 => 18,  50 => 17,  42 => 12,  36 => 9,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
    <head>
        <meta charset=\"utf-8\" />
        <!-- Always force latest IE rendering engine (even in intranet) and Chrome Frame -->
        <meta content=\"IE=edge,chrome=1\" http-equiv=\"X-UA-Compatible\" />
        <title>{{ apiName }}</title>
        <style type=\"text/css\">
            {{ css|raw }}
        </style>
        <script type=\"text/javascript\">
            {{ js|raw }}
        </script>
    </head>
    <body>
        <div id=\"header\">
            <a href=\"{{ path('nelmio_api_doc_index') }}\"><h1>{{ apiName }}</h1></a>
            {% if enableSandbox %}
                <div id=\"sandbox_configuration\">
                    {% if bodyFormats|length > 0 %}
                    body format:
                    <select id=\"body_format\">
                        {% if 'form' in bodyFormats %}<option value=\"form\"{{ defaultBodyFormat == 'form' ? ' selected' : '' }}>Form Data</option>{% endif %}
                        {% if 'json' in bodyFormats %}<option value=\"json\"{{ defaultBodyFormat == 'json' ? ' selected' : '' }}>JSON</option>{% endif %}
                    </select>
                    {% endif %}
                    {% if requestFormats|length > 0 %}
                    request format:
                    <select id=\"request_format\">
                    {% for format, header in requestFormats %}
                        <option value=\"{{ header }}\"{{ defaultRequestFormat == format ? ' selected' : '' }}>{{ format }}</option>
                    {% endfor %}
                    {% endif %}
                    </select>
                    {% if authentication %}
                        {% if authentication.delivery == 'http' and authentication.type == 'basic' %}
                            api login: <input type=\"text\" id=\"api_login\" value=\"\"/>
                            api password: <input type=\"text\" id=\"api_pass\" value=\"\"/>
                        {% elseif authentication.delivery in ['query', 'http', 'header'] %}
                            api key: <input type=\"text\" id=\"api_key\" value=\"\"/>
                        {% endif %}

                        {% if authentication.custom_endpoint %}
                            api endpoint: <input type=\"text\" id=\"api_endpoint\" value=\"\"/>
                        {% endif %}
                        <button id=\"save_api_auth\" type=\"button\">Save</button>
                        <button id=\"clear_api_auth\" type=\"button\">Clear</button>
                    {% endif %}
                </div>
            {% endif %}
            <br style=\"clear: both;\" />
        </div>
        {% include motdTemplate %}
        <div class=\"container\" id=\"resources_container\">
            <ul id=\"resources\">
                {% block content %}{% endblock %}
            </ul>
        </div>
        <p id=\"colophon\">
            Documentation auto-generated on {{ date }}
        </p>
        <script type=\"text/javascript\">

            var getHash = function() {
              return window.location.hash || '';
            };

            var setHash = function(hash) {
                window.location.hash = hash;
            };

            var clearHash = function() {
                var scrollTop, scrollLeft;

                if(typeof history === 'object' && typeof history.pushState === 'function') {
                    history.replaceState('', document.title, window.location.pathname + window.location.search);
                } else {
                    scrollTop = document.body.scrollTop;
                    scrollLeft = document.body.scrollLeft;

                    setHash('');

                    document.body.scrollTop = scrollTop;
                    document.body.scrollLeft = scrollLeft;
                }
            };

            \$(window).load(function() {
                var id = getHash().substr(1).replace( /([:\\.\\[\\]\\{\\}|])/g, \"\\\\\$1\");
                var elem = \$('#' + id);
                if (elem.length) {
                    setTimeout(function() {
                        \$('body,html').scrollTop(elem.position().top);
                    });
                    elem.find('.toggler').click();
                    var section = elem.parents('.section').first();
                    if (section) {
                        section.addClass('active');
                        section.find('.section-list').slideDown('fast');
                    }
                }
                {% if enableSandbox %}
                    loadStoredAuthParams();
                {% endif %}
            });

            \$('.toggler').click(function(event) {
                var contentContainer = \$(this).next();

                if(contentContainer.is(':visible')) {
                    clearHash();
                } else {
                    setHash(\$(this).data('href'));
                }

                contentContainer.slideToggle('fast');
                return false;
            });

            \$('.action-show-hide, .section > h1').on('click', function(){
                var section = \$(this).parents('.section').first();
                if (section.hasClass('active')) {
                    section.removeClass('active');
                    section.find('.section-list').slideUp('fast');
                } else {
                    section.addClass('active');
                    section.find('.section-list').slideDown('fast');
                }

            });

            \$('.action-list').on('click', function(){
                var section = \$(this).parents('.section').first();
                if (!section.hasClass('active')) {
                    section.addClass('active');
                }
                section.find('.section-list').slideDown('fast');
                section.find('.operation > .content').slideUp('fast');
            });

            \$('.action-expand').on('click', function(){
                var section = \$(this).parents('.section').first();
                if (!section.hasClass('active')) {
                    section.addClass('active');
                }
                \$(section).find('ul').slideDown('fast');
                \$(section).find('.operation > .content').slideDown('fast');
            });

            {% if enableSandbox %}
                var getStoredValue, storeValue, deleteStoredValue;
                var apiAuthKeys = ['api_key', 'api_login', 'api_pass', 'api_endpoint'];

                if ('localStorage' in window) {
                    var buildKey = function (key) {
                        return 'nelmio_' + key;
                    }

                    getStoredValue = function (key) {
                        return localStorage.getItem(buildKey(key));
                    }

                    storeValue = function (key, value) {
                        localStorage.setItem(buildKey(key), value);
                    }

                    deleteStoredValue = function (key) {
                        localStorage.removeItem(buildKey(key));
                    }
                } else {
                    getStoredValue = storeValue = deleteStoredValue = function (){};
                }

                var loadStoredAuthParams = function() {
                    \$.each(apiAuthKeys, function(_, value) {
                        var elm = \$('#' + value);
                        if (elm.length) {
                            elm.val(getStoredValue(value));
                        }
                    });
                }

                var setParameterType = function (\$context,setType) {
                    // no 2nd argument, use default from parameters
                    if (typeof setType == \"undefined\") {
                        setType = \$context.parent().attr(\"data-dataType\");
                        \$context.val(setType);
                    }

                    \$context.parent().find('.value').remove();
                    var placeholder = \"\";
                    if (\$context.parent().attr(\"data-dataType\") != \"\" && typeof \$context.parent().attr(\"data-dataType\") != \"undefined\") {
                        placeholder += \"[\" + \$context.parent().attr(\"data-dataType\") + \"] \";
                    }
                    if (\$context.parent().attr(\"data-format\") != \"\" && typeof \$context.parent().attr(\"data-format\") != \"undefined\") {
                        placeholder += \$context.parent().attr(\"data-format\");
                    }
                    if (\$context.parent().attr(\"data-description\") != \"\" && typeof \$context.parent().attr(\"data-description\") != \"undefined\") {
                        placeholder += \$context.parent().attr(\"data-description\");
                    } else {
                        placeholder += \"Value\";
                    }

                    switch(setType) {
                        case \"boolean\":
                            \$('<select class=\"value\"><option value=\"\"></option><option value=\"1\">True</option><option value=\"0\">False</option></select>').insertAfter(\$context);
                            break;
                        case \"file\":
                            \$('<input type=\"file\" class=\"value\" placeholder=\"'+ placeholder +'\">').insertAfter(\$context);
                            break;
                        case \"textarea\":
                            \$('<textarea class=\"value\" placeholder=\"'+ placeholder +'\" />').insertAfter(\$context);
                            break;
                        default:
                            \$('<input type=\"text\" class=\"value\" placeholder=\"'+ placeholder +'\">').insertAfter(\$context);
                    }
                };

                var toggleButtonText = function (\$btn) {
                    if (\$btn.text() === 'Default') {
                        \$btn.text('Raw');
                    } else {
                        \$btn.text('Default');
                    }
                };

                var renderRawBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-raw');

                    \$container.addClass('prettyprinted');
                    \$container.html(\$('<div/>').text(rawData).html());

                    \$btn.removeClass('to-raw');
                    \$btn.addClass('to-prettify');

                    toggleButtonText(\$btn);
                };

                var renderPrettifiedBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-prettify');

                    \$container.removeClass('prettyprinted');
                    \$container.html(attachCollapseMarker(prettifyResponse(rawData)));
                    prettyPrint && prettyPrint();

                    \$btn.removeClass('to-prettify');
                    \$btn.addClass('to-raw');

                    toggleButtonText(\$btn);
                };

                var unflattenDict = function (body) {
                    var found = true;
                    while(found) {
                        found = false;

                        for (var key in body) {
                            var okey;
                            var value = body[key];
                            var dictMatch = key.match(/^(.+)\\[([^\\]]+)\\]\$/);

                            if(dictMatch) {
                                found = true;
                                okey = dictMatch[1];
                                var subkey = dictMatch[2];
                                body[okey] = body[okey] || {};
                                body[okey][subkey] = value;
                                delete body[key];
                            } else {
                                body[key] = value;
                            }
                        }
                    }
                    return body;
                };

                \$('#save_api_auth').click(function(event) {
                    \$.each(apiAuthKeys, function(_, value) {
                        var elm = \$('#' + value);
                        if (elm.length) {
                            storeValue(value, elm.val());
                        }
                    });
                });

                \$('#clear_api_auth').click(function(event) {
                    \$.each(apiAuthKeys, function(_, value) {
                        deleteStoredValue(value);
                        var elm = \$('#' + value);
                        if (elm.length) {
                            elm.val('');
                        }
                    });
                });

                \$('.tabs li').click(function() {
                    var contentGroup = \$(this).parents('.content');

                    \$('.pane.selected', contentGroup).removeClass('selected');
                    \$('.pane.' + \$(this).data('pane'), contentGroup).addClass('selected');

                    \$('li', \$(this).parent()).removeClass('selected');
                    \$(this).addClass('selected');
                });

                var getJsonCollapseHtml = function(sectionOpenCharacter) {
                    var \$toggler = \$('<span>').addClass('json-collapse-section').
                            attr('data-section-open-character', sectionOpenCharacter).
                            append(\$('<span>').addClass('json-collapse-marker')
                                    .html('&#9663;')
                    ).append(sectionOpenCharacter);
                    return \$('<div>').append(\$toggler).html();
                };

                var attachCollapseMarker = function (prettifiedJsonString) {
                    prettifiedJsonString = prettifiedJsonString.replace(/(\\{|\\[)\\n/g, function(match, sectionOpenCharacter) {
                        return getJsonCollapseHtml(sectionOpenCharacter) + '<span class=\"json-collapse-content\">\\n';
                    });
                    return prettifiedJsonString.replace(/([^\\[][\\}\\]],?)\\n/g, '\$1</span>\\n');
                };

                var prettifyResponse = function(text) {
                    try {
                        var data = typeof text === 'string' ? JSON.parse(text) : text;
                        text = JSON.stringify(data, undefined, '  ');
                    } catch (err) {
                    }

                    // HTML encode the result
                    return \$('<div>').text(text).html();
                };

                var displayFinalUrl = function(xhr, method, url, data, container) {
                    container.text(method + ' ' + getFinalUrl(method, url, data));
                };

                var displayRequestBody = function(method, data, container, header) {
                    if ('GET' != method && !jQuery.isEmptyObject(data) && data !== \"\" && data !== undefined) {
                        if (jQuery.type(data) !== 'string') {
                            data = decodeURIComponent(jQuery.param(data));
                        }

                        container.text(data);
                        container.show();
                        header.show();
                    } else {
                        container.hide();
                        header.hide();
                    }
                };

                var displayProfilerUrl = function(xhr, link, container) {
                    var profilerUrl = xhr.getResponseHeader('X-Debug-Token-Link');
                    if (profilerUrl) {
                        link.attr('href', profilerUrl);
                        container.show();
                    } else {
                        link.attr('href', '');
                        container.hide();
                    }
                };

                var displayResponseData = function(xhr, container) {
                    var data = xhr.responseText;

                    container.data('raw-response', data);

                    renderPrettifiedBody(container);

                    container.parents('.pane').find('.to-prettify').text('Raw');
                    container.parents('.pane').find('.to-raw').text('Raw');
                };

                var displayResponseHeaders = function(xhr, container) {
                    var text = xhr.status + ' ' + xhr.statusText + \"\\n\\n\";
                    text += xhr.getAllResponseHeaders();

                    container.text(text);
                };

                var displayCurl = function(method, url, headers, data, result_container) {
                    var escapeShell = function(param) {
                        param = \"\" + param;
                        return '\"' + param.replace(/([\"\\s'\$`\\\\])/g,'\\\\\$1') + '\"';
                    };

                    url = getFinalUrl(method, url, data);

                    var command = \"curl\";
                    command += \" -X \" + escapeShell(method);

                    if (method != \"GET\" && !jQuery.isEmptyObject(data) && data !== \"\" && data !== undefined) {
                        if (jQuery.type(data) !== 'string') {
                            data = decodeURIComponent(jQuery.param(data));
                        }
                        command += \" -d \" + escapeShell(data);
                    }

                    for (headerKey in headers) {
                        if (headers.hasOwnProperty(headerKey)) {
                            command += \" -H \" + escapeShell(headerKey + ': ' + headers[headerKey]);
                        }
                    }

                    command += \" \" + url;

                    result_container.text(command);
                };

                var getFinalUrl = function(method, url, data) {
                    if ('GET' == method && !jQuery.isEmptyObject(data)) {
                        var separator = url.indexOf('?') >= 0 ? '&' : '?';
                        url = url + separator + decodeURIComponent(jQuery.param(data));
                    }

                    return url;
                };

                var displayResponse = function(xhr, method, url, headers, data, result_container) {
                    displayFinalUrl(xhr, method, url, data, \$('.url', result_container));
                    displayRequestBody(method, data, \$('.request-body', result_container), \$('.request-body-header', result_container));
                    displayProfilerUrl(xhr, \$('.profiler-link', result_container), \$('.profiler', result_container));
                    displayResponseData(xhr, \$('.response', result_container));
                    displayResponseHeaders(xhr, \$('.headers', result_container));
                    displayCurl(method, url, headers, data, \$('.curl-command', result_container));

                    result_container.show();
                };

                \$('.pane.sandbox form').submit(function() {
                    var url = \$(this).attr('action'),
                        method = \$('[name=\"header_method\"]', this).val(),
                        self = this,
                        params = {},
                        filters = {},
                        formData = new FormData(),
                        doubledParams = {},
                        doubledFilters = {},
                        headers = {},
                        content = \$(this).find('textarea.content').val(),
                        result_container = \$('.result', \$(this).parent());

                    if (method === 'ANY') {
                        method = 'POST';
                    }

                    // set requestFormat
                    var requestFormatMethod = '{{ requestFormatMethod }}';
                    if (requestFormatMethod == 'format_param') {
                        params['_format'] = \$('#request_format option:selected').text();
                        formData.append('_format',\$('#request_format option:selected').text());
                    } else if (requestFormatMethod == 'accept_header') {
                        headers['Accept'] = \$('#request_format').val();
                    }

                    // set default bodyFormat
                    var bodyFormat = \$('#body_format').val() || '{{ defaultBodyFormat }}';

                    if(!('Content-type' in headers)) {
                        if (bodyFormat == 'form') {
                            headers['Content-type'] = 'application/x-www-form-urlencoded';
                        } else {
                            headers['Content-type'] = 'application/json';
                        }
                    }

                    var hasFileTypes = false;
                    \$('.parameters .tuple_type', \$(this)).each(function() {
                        if (\$(this).val() == 'file') {
                            hasFileTypes = true;
                        }
                    });

                    if (hasFileTypes && method != 'POST') {
                        alert(\"Sorry, you can only submit files via POST.\");
                        return false;
                    }

                    if (hasFileTypes && bodyFormat != 'form') {
                        alert(\"Body Format must be set to 'Form Data' when utilizing file upload type parameters.\\nYour current bodyFormat is '\" + bodyFormat + \"'. Change your BodyFormat or do not use file type\\nparameters.\");
                        return false;
                    }

                    if (hasFileTypes) {
                        // retrieve all the parameters to send for file upload
                        \$('.parameters .tuple', \$(this)).each(function() {
                            var key, value;

                            key = \$('.key', \$(this)).val();
                            if (\$('.value', \$(this)).attr('type') === 'file' ) {
                                value = \$('.value', \$(this)).prop('files')[0];
                                if(!value) {
                                    value = new File([], '');
                                }
                            } else {
                                value = \$('.value', \$(this)).val();
                            }

                            if (value) {
                                formData.append(key,value);
                            }
                        });
                    }


                    // retrieve all the parameters to send
                    \$('.parameters .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            // convert boolean values to boolean
                            if ('json' === bodyFormat && 'boolean' === \$('.tuple_type', \$(this)).val()) {
                                value = '1' === value;
                            }

                            // temporary save all additional/doubled parameters
                            if (key in params) {
                                doubledParams[key] = value;
                            } else {
                                params[key] = value;
                            }
                        }
                    });




                    // retrieve all the filters to send
                    \$('.parameters .tuple.filter', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            // temporary save all additional/doubled parameters
                            if (key in filters) {
                                doubledFilters[key] = value;
                            } else {
                                filters[key] = value;
                            }
                        }
                    });




                    // retrieve the additional headers to send
                    \$('.headers .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            headers[key] = value;
                        }

                    });

                    // fix parameters in URL
                    for (var key in \$.extend({}, params)) {
                        if (url.indexOf('{' + key + '}') !== -1) {
                            url = url.replace('{' + key + '}', params[key]);
                            delete params[key];
                        }
                    };

                    // merge additional params back to real params object
                    if (!\$.isEmptyObject(doubledParams)) {
                        \$.extend(params, doubledParams);
                    }

                    // disable all the fiels and buttons
                    \$('input, button', \$(this)).attr('disabled', 'disabled');

                    // append the query authentication
                    var api_key_val = \$('#api_key').val();
                    if (authentication_delivery == 'query' && api_key_val.length>0) {
                        url += url.indexOf('?') > 0 ? '&' : '?';
                        url += api_key_parameter + '=' + api_key_val;
                    }

                    // prepare the api enpoint
                    {% if endpoint == '' and app.request is not null and app.request.host -%}
                    var endpoint = '{{ app.request.getBaseUrl() }}';
                    {% else -%}
                    var endpoint = '{{ endpoint }}';
                    {% endif -%}
                    {% if authentication and authentication.custom_endpoint %}
                    if (\$('#api_endpoint') && typeof(\$('#api_endpoint').val()) != 'undefined') {
                        endpoint = \$('#api_endpoint').val();
                    }
                    {% endif %}

                    //add filters as GET params and remove them from params
                    if(method != 'GET'){
                        for (var filterKey in \$.extend({}, filters)){
                            url += url.indexOf('?') > 0 ? '&' : '?';
                            url += filterKey + '=' + filters[filterKey];

                            if (params.hasOwnProperty(filterKey)){
                                delete(params[filterKey]);
                            }
                        }
                    }

                    // prepare final parameters
                    var body = {};
                    if(bodyFormat == 'json' && method != 'GET') {
                        body = unflattenDict(params);
                        body = JSON.stringify(body);
                    } else {
                        body = params;
                    }
                    var data = content.length ? content : body;
                    var ajaxOptions = {
                        url: (url.indexOf('http')!=0?endpoint:'') + url,
                        xhrFields: { withCredentials: true },
                        type: method,
                        data: data,
                        headers: headers,
                        crossDomain: true,
                        beforeSend: function (xhr) {
                            if (authentication_delivery) {
                                var value;

                                if ('http' == authentication_delivery) {
                                    if ('basic' == authentication_type) {
                                        value = 'Basic ' + btoa(\$('#api_login').val() + ':' + \$('#api_pass').val());
                                    } else if ('bearer' == authentication_type) {
                                        value = 'Bearer ' + \$('#api_key').val();
                                    }
                                } else if ('header' == authentication_delivery) {
                                    value = \$('#api_key').val();
                                }

                                xhr.setRequestHeader(api_key_parameter, value);
                            }
                        },
                        complete: function(xhr) {
                            displayResponse(xhr, method, url, headers, data, result_container);

                            // and enable them back
                            \$('input:not(.content-type), button', \$(self)).removeAttr('disabled');
                        }
                    };

                    // overrides body format to send data properly
                    if (hasFileTypes) {
                        ajaxOptions.data = formData;
                        ajaxOptions.processData = false;
                        ajaxOptions.contentType = false;
                        delete(headers['Content-type']);
                    }

                    // and trigger the API call
                    \$.ajax(ajaxOptions);

                    return false;
                });

                \$('.operations').on('click', '.operation > .heading', function(e) {
                    if (history.pushState) {
                        history.pushState(null, null, \$(this).data('href'));
                        e.preventDefault();
                    }
                });

                \$(document).on('click', '.json-collapse-section', function() {
                    var openChar = \$(this).data('section-open-character'),
                            closingChar = (openChar == '{' ? '}' : ']');
                    if (\$(this).next('.json-collapse-content').is(':visible')) {
                        \$(this).html('&oplus;' +  openChar + '...' + closingChar);
                    } else {
                        \$(this).html('&#9663;' + \$(this).data('section-open-character'));
                    }
                    \$(this).next('.json-collapse-content').toggle();
                });

                \$(document).on('copy', '.prettyprinted', function () {
                    var \$toggleMarkers = \$(this).find('.json-collapse-marker');
                    \$toggleMarkers.hide();
                    setTimeout(function () {
                        \$toggleMarkers.show();
                    }, 100);
                });

                \$('.pane.sandbox').on('click', '.to-raw', function(e) {
                    renderRawBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$('.pane.sandbox').on('click', '.to-prettify', function(e) {
                    renderPrettifiedBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$('.pane.sandbox').on('click', '.to-expand, .to-shrink', function(e) {
                    var \$headers = \$(this).parents('.result').find('.headers');
                    var \$label = \$(this).parents('.result').find('a.to-expand');

                    if (\$headers.hasClass('to-expand')) {
                        \$headers.removeClass('to-expand');
                        \$headers.addClass('to-shrink');
                        \$label.text('Shrink');
                    } else {
                        \$headers.removeClass('to-shrink');
                        \$headers.addClass('to-expand');
                        \$label.text('Expand');
                    }

                    e.preventDefault();
                });


                // sets the correct parameter type on load
                \$('.pane.sandbox .tuple_type').each(function() {
                    setParameterType(\$(this));
                });


                // handles parameter type change
                \$('.pane.sandbox').on('change', '.tuple_type', function() {
                    setParameterType(\$(this),\$(this).val());
                });



                \$('.pane.sandbox').on('click', '.add_parameter', function() {
                    var html = \$(this).parents('.pane').find('.parameters_tuple_template').html();

                    \$(this).before(html);

                    return false;
                });

                \$('.pane.sandbox').on('click', '.add_header', function() {
                    var html = \$(this).parents('.pane').find('.headers_tuple_template').html();

                    \$(this).before(html);

                    return false;
                });

                \$('.pane.sandbox').on('click', '.remove', function() {
                    \$(this).parent().remove();
                });

                \$('.pane.sandbox').on('click', '.set-content-type', function(e) {
                    var html;
                    var \$element;
                    var \$headers = \$(this).parents('form').find('.headers');
                    var content_type = \$(this).prev('input.value').val();

                    e.preventDefault();

                    if (content_type.length === 0) {
                        return;
                    }

                    \$headers.find('input.key').each(function() {
                        if (\$.trim(\$(this).val().toLowerCase()) === 'content-type') {
                            \$element = \$(this).parents('p');
                            return false;
                        }
                    });

                    if (typeof \$element === 'undefined') {
                        html = \$(this).parents('.pane').find('.tuple_template').html();

                        \$element = \$headers.find('legend').after(html).next('p');
                    }

                    \$element.find('input.key').val('Content-Type');
                    \$element.find('input.value').val(content_type);

                });

                {% if authentication and authentication.delivery == 'http' %}
                var authentication_delivery = '{{ authentication.delivery }}';
                var api_key_parameter = '{{ authentication.name }}';
                var authentication_type = '{{ authentication.type }}';
                {% elseif authentication and authentication.delivery == 'query' %}
                var authentication_delivery = '{{ authentication.delivery }}';
                var api_key_parameter = '{{ authentication.name }}';
                var search = window.location.search;
                var api_key_start = search.indexOf(api_key_parameter) + api_key_parameter.length + 1;

                if (api_key_start > 0 ) {
                    var api_key_end = search.indexOf('&', api_key_start);

                    var api_key = -1 == api_key_end
                        ? search.substr(api_key_start)
                        : search.substring(api_key_start, api_key_end);

                    \$('#api_key').val(api_key);
                }
                {% elseif authentication and authentication.delivery == 'header' %}
                var authentication_delivery = '{{ authentication.delivery }}';
                var api_key_parameter = '{{ authentication.name }}';
                {% else %}
                var authentication_delivery = false;
                {% endif %}
            {% endif %}
        </script>
    </body>
</html>
", "NelmioApiDocBundle::layout.html.twig", "/var/www/edu-yukon/api/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/layout.html.twig");
    }
}
