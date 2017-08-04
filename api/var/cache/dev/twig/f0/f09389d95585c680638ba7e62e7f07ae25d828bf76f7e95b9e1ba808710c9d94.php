<?php

/* EDUBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_1b4858bdcba337f6078cb48e9b8d61c582315e1ebece2ce79d652166f95ee38d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c7c236b459dfca0f8b38fa0fc3b81fd8099276b70b7795ddd189d839fa875f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7c236b459dfca0f8b38fa0fc3b81fd8099276b70b7795ddd189d839fa875f1->enter($__internal_6c7c236b459dfca0f8b38fa0fc3b81fd8099276b70b7795ddd189d839fa875f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EDUBundle:Form:form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 21
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 31
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 38
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 42
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 50
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 59
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 79
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 93
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 97
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 101
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 114
        $this->displayBlock('date_widget', $context, $blocks);
        // line 128
        $this->displayBlock('time_widget', $context, $blocks);
        // line 139
        $this->displayBlock('number_widget', $context, $blocks);
        // line 145
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 150
        $this->displayBlock('money_widget', $context, $blocks);
        // line 154
        $this->displayBlock('url_widget', $context, $blocks);
        // line 159
        $this->displayBlock('search_widget', $context, $blocks);
        // line 164
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 169
        $this->displayBlock('password_widget', $context, $blocks);
        // line 174
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 179
        $this->displayBlock('email_widget', $context, $blocks);
        // line 184
        $this->displayBlock('range_widget', $context, $blocks);
        // line 189
        $this->displayBlock('button_widget', $context, $blocks);
        // line 203
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 208
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 215
        $this->displayBlock('form_label', $context, $blocks);
        // line 237
        $this->displayBlock('button_label', $context, $blocks);
        // line 241
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 249
        $this->displayBlock('form_row', $context, $blocks);
        // line 257
        $this->displayBlock('button_row', $context, $blocks);
        // line 263
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 269
        $this->displayBlock('form', $context, $blocks);
        // line 275
        $this->displayBlock('form_start', $context, $blocks);
        // line 288
        $this->displayBlock('form_end', $context, $blocks);
        // line 295
        $this->displayBlock('form_errors', $context, $blocks);
        // line 305
        $this->displayBlock('form_rest', $context, $blocks);
        // line 312
        echo "
";
        // line 315
        $this->displayBlock('form_rows', $context, $blocks);
        // line 321
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 337
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 351
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 365
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_6c7c236b459dfca0f8b38fa0fc3b81fd8099276b70b7795ddd189d839fa875f1->leave($__internal_6c7c236b459dfca0f8b38fa0fc3b81fd8099276b70b7795ddd189d839fa875f1_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_db663751970caa6bbc9eace5ad65492bdfec86d0c8fe1de4eee2dadffd163bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db663751970caa6bbc9eace5ad65492bdfec86d0c8fe1de4eee2dadffd163bcf->enter($__internal_db663751970caa6bbc9eace5ad65492bdfec86d0c8fe1de4eee2dadffd163bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_db663751970caa6bbc9eace5ad65492bdfec86d0c8fe1de4eee2dadffd163bcf->leave($__internal_db663751970caa6bbc9eace5ad65492bdfec86d0c8fe1de4eee2dadffd163bcf_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b8731e752e5d4991ce14627c9cad3f635e109d1c3086a8fbd9e4bfdf12e90b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8731e752e5d4991ce14627c9cad3f635e109d1c3086a8fbd9e4bfdf12e90b9d->enter($__internal_b8731e752e5d4991ce14627c9cad3f635e109d1c3086a8fbd9e4bfdf12e90b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()) == "file") && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "vars", array()), "data", array(), "array"))) {
            // line 14
            echo "        <br/>
        <img src=\"/web/assets/images/";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "vars", array()), "data", array(), "array"), "html", null, true);
            echo "\" width=\"150\" />
        <br/>
    ";
        }
        // line 18
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " class=\"form-control\" ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_b8731e752e5d4991ce14627c9cad3f635e109d1c3086a8fbd9e4bfdf12e90b9d->leave($__internal_b8731e752e5d4991ce14627c9cad3f635e109d1c3086a8fbd9e4bfdf12e90b9d_prof);

    }

    // line 21
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_1d144e7cfc56101d327141ec44f51f4b92f211c65e2b3b6589b12528eeb0c678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d144e7cfc56101d327141ec44f51f4b92f211c65e2b3b6589b12528eeb0c678->enter($__internal_1d144e7cfc56101d327141ec44f51f4b92f211c65e2b3b6589b12528eeb0c678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 22
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 23
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "parent", array()))) {
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), 'errors');
        }
        // line 26
        $this->displayBlock("form_rows", $context, $blocks);
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'rest');
        // line 28
        echo "</div>";
        
        $__internal_1d144e7cfc56101d327141ec44f51f4b92f211c65e2b3b6589b12528eeb0c678->leave($__internal_1d144e7cfc56101d327141ec44f51f4b92f211c65e2b3b6589b12528eeb0c678_prof);

    }

    // line 31
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_5b1db8dfb3d14bf712f968d7954916022fa13f48458136b8fffe0b8e6546c31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1db8dfb3d14bf712f968d7954916022fa13f48458136b8fffe0b8e6546c31a->enter($__internal_5b1db8dfb3d14bf712f968d7954916022fa13f48458136b8fffe0b8e6546c31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 32
        if (array_key_exists("prototype", $context)) {
            // line 33
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 33, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 33, $this->getSourceContext()); })()), 'row')));
        }
        // line 35
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_5b1db8dfb3d14bf712f968d7954916022fa13f48458136b8fffe0b8e6546c31a->leave($__internal_5b1db8dfb3d14bf712f968d7954916022fa13f48458136b8fffe0b8e6546c31a_prof);

    }

    // line 38
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b1e1fc2f614154f7c44b802f2df128d8a85b3435b947ba01d33151f0fd5710aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e1fc2f614154f7c44b802f2df128d8a85b3435b947ba01d33151f0fd5710aa->enter($__internal_b1e1fc2f614154f7c44b802f2df128d8a85b3435b947ba01d33151f0fd5710aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 39
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 39, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_b1e1fc2f614154f7c44b802f2df128d8a85b3435b947ba01d33151f0fd5710aa->leave($__internal_b1e1fc2f614154f7c44b802f2df128d8a85b3435b947ba01d33151f0fd5710aa_prof);

    }

    // line 42
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_469baa714401ce3ae3b9104b8f3b3558f61e8ed8669bcec524133121aef933dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469baa714401ce3ae3b9104b8f3b3558f61e8ed8669bcec524133121aef933dd->enter($__internal_469baa714401ce3ae3b9104b8f3b3558f61e8ed8669bcec524133121aef933dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 43
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 43, $this->getSourceContext()); })())) {
            // line 44
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 46
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_469baa714401ce3ae3b9104b8f3b3558f61e8ed8669bcec524133121aef933dd->leave($__internal_469baa714401ce3ae3b9104b8f3b3558f61e8ed8669bcec524133121aef933dd_prof);

    }

    // line 50
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_eedb8cc9c30b241b571f8b6dd01259230183c3319881d3ac3623ea9e409483ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eedb8cc9c30b241b571f8b6dd01259230183c3319881d3ac3623ea9e409483ef->enter($__internal_eedb8cc9c30b241b571f8b6dd01259230183c3319881d3ac3623ea9e409483ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 51
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 54, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</div>";
        
        $__internal_eedb8cc9c30b241b571f8b6dd01259230183c3319881d3ac3623ea9e409483ef->leave($__internal_eedb8cc9c30b241b571f8b6dd01259230183c3319881d3ac3623ea9e409483ef_prof);

    }

    // line 59
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e272257b36a7cac195be03d872c938bfcf9897410ccc063a32c6c2da3c055df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e272257b36a7cac195be03d872c938bfcf9897410ccc063a32c6c2da3c055df4->enter($__internal_e272257b36a7cac195be03d872c938bfcf9897410ccc063a32c6c2da3c055df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 60
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 60, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 60, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 60, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 61
            $context["required"] = false;
        }
        // line 63
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " class=\"form-control\" ";
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 63, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 64
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 64, $this->getSourceContext()); })()))) {
            // line 65
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 65, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 65, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 65, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 65, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 65, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 65, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 65, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 67
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 67, $this->getSourceContext()); })())) > 0)) {
            // line 68
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 68, $this->getSourceContext()); })());
            // line 69
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 70
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 70, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 70, $this->getSourceContext()); })())))) {
                // line 71
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 71, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 74
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 74, $this->getSourceContext()); })());
        // line 75
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 76
        echo "</select>";
        
        $__internal_e272257b36a7cac195be03d872c938bfcf9897410ccc063a32c6c2da3c055df4->leave($__internal_e272257b36a7cac195be03d872c938bfcf9897410ccc063a32c6c2da3c055df4_prof);

    }

    // line 79
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_ded765f53d733ee1ecaff3099628e7629c7f51eb2f0eac19f0d24ae97e6c6cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded765f53d733ee1ecaff3099628e7629c7f51eb2f0eac19f0d24ae97e6c6cf3->enter($__internal_ded765f53d733ee1ecaff3099628e7629c7f51eb2f0eac19f0d24ae97e6c6cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 80, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 81
            if (twig_test_iterable($context["choice"])) {
                // line 82
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 83
                $context["options"] = $context["choice"];
                // line 84
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 85
                echo "</optgroup>";
            } else {
                // line 87
                $context["attr"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array());
                // line 88
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 88, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 88, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ded765f53d733ee1ecaff3099628e7629c7f51eb2f0eac19f0d24ae97e6c6cf3->leave($__internal_ded765f53d733ee1ecaff3099628e7629c7f51eb2f0eac19f0d24ae97e6c6cf3_prof);

    }

    // line 93
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_7132d0b59d4b5b8295a12f075a31fbe9e6e85e29cf65f04ac6d5b650c4a8c590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7132d0b59d4b5b8295a12f075a31fbe9e6e85e29cf65f04ac6d5b650c4a8c590->enter($__internal_7132d0b59d4b5b8295a12f075a31fbe9e6e85e29cf65f04ac6d5b650c4a8c590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 94
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 94, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 94, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_7132d0b59d4b5b8295a12f075a31fbe9e6e85e29cf65f04ac6d5b650c4a8c590->leave($__internal_7132d0b59d4b5b8295a12f075a31fbe9e6e85e29cf65f04ac6d5b650c4a8c590_prof);

    }

    // line 97
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_8c5f2632f5acfae4e61d4a14a21097bdbbac7b49807967c0dd5c1233b88296ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5f2632f5acfae4e61d4a14a21097bdbbac7b49807967c0dd5c1233b88296ee->enter($__internal_8c5f2632f5acfae4e61d4a14a21097bdbbac7b49807967c0dd5c1233b88296ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 98
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 98, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 98, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_8c5f2632f5acfae4e61d4a14a21097bdbbac7b49807967c0dd5c1233b88296ee->leave($__internal_8c5f2632f5acfae4e61d4a14a21097bdbbac7b49807967c0dd5c1233b88296ee_prof);

    }

    // line 101
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_72d65089c68d846001e68b9cf5e3e8e3d6ece419ad97694579ba0fc1f8ff2d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d65089c68d846001e68b9cf5e3e8e3d6ece419ad97694579ba0fc1f8ff2d7b->enter($__internal_72d65089c68d846001e68b9cf5e3e8e3d6ece419ad97694579ba0fc1f8ff2d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 102
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 102, $this->getSourceContext()); })()) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 106
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 107
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 109
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 109, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 110
            echo "</div>";
        }
        
        $__internal_72d65089c68d846001e68b9cf5e3e8e3d6ece419ad97694579ba0fc1f8ff2d7b->leave($__internal_72d65089c68d846001e68b9cf5e3e8e3d6ece419ad97694579ba0fc1f8ff2d7b_prof);

    }

    // line 114
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_27ce022478243a6b56d3f370e3d095ac9758083a20a026f93c24f39043c2affa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ce022478243a6b56d3f370e3d095ac9758083a20a026f93c24f39043c2affa->enter($__internal_27ce022478243a6b56d3f370e3d095ac9758083a20a026f93c24f39043c2affa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 115
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 115, $this->getSourceContext()); })()) == "single_text")) {
            // line 116
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 118
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 119
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 119, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 120
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 120, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 121
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 121, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 122
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 122, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 124
            echo "</div>";
        }
        
        $__internal_27ce022478243a6b56d3f370e3d095ac9758083a20a026f93c24f39043c2affa->leave($__internal_27ce022478243a6b56d3f370e3d095ac9758083a20a026f93c24f39043c2affa_prof);

    }

    // line 128
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_704ebb016f826bd63e0047686b4f5867ad007a4463f8b9b553f3425c51dcb6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704ebb016f826bd63e0047686b4f5867ad007a4463f8b9b553f3425c51dcb6c3->enter($__internal_704ebb016f826bd63e0047686b4f5867ad007a4463f8b9b553f3425c51dcb6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 129
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 129, $this->getSourceContext()); })()) == "single_text")) {
            // line 130
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 132
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 132, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 133
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 134, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 134, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 134, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 134, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 134, $this->getSourceContext()); })()));
            }
            // line 135
            echo "        </div>";
        }
        
        $__internal_704ebb016f826bd63e0047686b4f5867ad007a4463f8b9b553f3425c51dcb6c3->leave($__internal_704ebb016f826bd63e0047686b4f5867ad007a4463f8b9b553f3425c51dcb6c3_prof);

    }

    // line 139
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_73ede34ecac5269bf73f89743582be6682d34a87ab460684343a300b772301e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ede34ecac5269bf73f89743582be6682d34a87ab460684343a300b772301e9->enter($__internal_73ede34ecac5269bf73f89743582be6682d34a87ab460684343a300b772301e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 141
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 141, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 142
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_73ede34ecac5269bf73f89743582be6682d34a87ab460684343a300b772301e9->leave($__internal_73ede34ecac5269bf73f89743582be6682d34a87ab460684343a300b772301e9_prof);

    }

    // line 145
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_92435aa266bbff5adb2d24d2930b809d0385e4943482c1a8dd7034436cd3ade9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92435aa266bbff5adb2d24d2930b809d0385e4943482c1a8dd7034436cd3ade9->enter($__internal_92435aa266bbff5adb2d24d2930b809d0385e4943482c1a8dd7034436cd3ade9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 146
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 146, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 147
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_92435aa266bbff5adb2d24d2930b809d0385e4943482c1a8dd7034436cd3ade9->leave($__internal_92435aa266bbff5adb2d24d2930b809d0385e4943482c1a8dd7034436cd3ade9_prof);

    }

    // line 150
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f18e66db223f0a499216c33f07ac14e9842a79cbd7b56c72d2791584078e23c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18e66db223f0a499216c33f07ac14e9842a79cbd7b56c72d2791584078e23c8->enter($__internal_f18e66db223f0a499216c33f07ac14e9842a79cbd7b56c72d2791584078e23c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 151
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 151, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_f18e66db223f0a499216c33f07ac14e9842a79cbd7b56c72d2791584078e23c8->leave($__internal_f18e66db223f0a499216c33f07ac14e9842a79cbd7b56c72d2791584078e23c8_prof);

    }

    // line 154
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_376af24044b05730cb541bdab5f22b6dc3b07a5f964be7c0c1d79966f077caa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376af24044b05730cb541bdab5f22b6dc3b07a5f964be7c0c1d79966f077caa2->enter($__internal_376af24044b05730cb541bdab5f22b6dc3b07a5f964be7c0c1d79966f077caa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 155, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 156
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_376af24044b05730cb541bdab5f22b6dc3b07a5f964be7c0c1d79966f077caa2->leave($__internal_376af24044b05730cb541bdab5f22b6dc3b07a5f964be7c0c1d79966f077caa2_prof);

    }

    // line 159
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_9048b0d5fdcd8f674ce53544820057bd0e1639aee2dfdfa58231c8f789c9f9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9048b0d5fdcd8f674ce53544820057bd0e1639aee2dfdfa58231c8f789c9f9a3->enter($__internal_9048b0d5fdcd8f674ce53544820057bd0e1639aee2dfdfa58231c8f789c9f9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 160, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 161
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9048b0d5fdcd8f674ce53544820057bd0e1639aee2dfdfa58231c8f789c9f9a3->leave($__internal_9048b0d5fdcd8f674ce53544820057bd0e1639aee2dfdfa58231c8f789c9f9a3_prof);

    }

    // line 164
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a99f8b741b7c7b6f212569ae40861357087296f2ff7d96952605c75d45afe012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99f8b741b7c7b6f212569ae40861357087296f2ff7d96952605c75d45afe012->enter($__internal_a99f8b741b7c7b6f212569ae40861357087296f2ff7d96952605c75d45afe012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 165, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_a99f8b741b7c7b6f212569ae40861357087296f2ff7d96952605c75d45afe012->leave($__internal_a99f8b741b7c7b6f212569ae40861357087296f2ff7d96952605c75d45afe012_prof);

    }

    // line 169
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_68e28e93aeeab73a75a96e3d35dcaa59005cf1cf80c2228162fc9d043a8f5bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e28e93aeeab73a75a96e3d35dcaa59005cf1cf80c2228162fc9d043a8f5bf0->enter($__internal_68e28e93aeeab73a75a96e3d35dcaa59005cf1cf80c2228162fc9d043a8f5bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_68e28e93aeeab73a75a96e3d35dcaa59005cf1cf80c2228162fc9d043a8f5bf0->leave($__internal_68e28e93aeeab73a75a96e3d35dcaa59005cf1cf80c2228162fc9d043a8f5bf0_prof);

    }

    // line 174
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_5ca2a50baa763cabb4b9b5958917e7ba18840da6c3fc59fe2abe5ed3e59a70ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca2a50baa763cabb4b9b5958917e7ba18840da6c3fc59fe2abe5ed3e59a70ff->enter($__internal_5ca2a50baa763cabb4b9b5958917e7ba18840da6c3fc59fe2abe5ed3e59a70ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5ca2a50baa763cabb4b9b5958917e7ba18840da6c3fc59fe2abe5ed3e59a70ff->leave($__internal_5ca2a50baa763cabb4b9b5958917e7ba18840da6c3fc59fe2abe5ed3e59a70ff_prof);

    }

    // line 179
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_d01069dd08edb34c1de57a347ecf3b66262a0d89a0b7fdf686627cc939f4c76d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01069dd08edb34c1de57a347ecf3b66262a0d89a0b7fdf686627cc939f4c76d->enter($__internal_d01069dd08edb34c1de57a347ecf3b66262a0d89a0b7fdf686627cc939f4c76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 180
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 180, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 181
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d01069dd08edb34c1de57a347ecf3b66262a0d89a0b7fdf686627cc939f4c76d->leave($__internal_d01069dd08edb34c1de57a347ecf3b66262a0d89a0b7fdf686627cc939f4c76d_prof);

    }

    // line 184
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_3baee1525038e9dd2cb758fb426bb3d7bbb486f14ffc4ed597dba5aac0584bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baee1525038e9dd2cb758fb426bb3d7bbb486f14ffc4ed597dba5aac0584bf2->enter($__internal_3baee1525038e9dd2cb758fb426bb3d7bbb486f14ffc4ed597dba5aac0584bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 185
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 185, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 186
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3baee1525038e9dd2cb758fb426bb3d7bbb486f14ffc4ed597dba5aac0584bf2->leave($__internal_3baee1525038e9dd2cb758fb426bb3d7bbb486f14ffc4ed597dba5aac0584bf2_prof);

    }

    // line 189
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f6bab6a2432d235c03d7db6e66103867e9f3a71478eec574be223fae6eb19a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bab6a2432d235c03d7db6e66103867e9f3a71478eec574be223fae6eb19a52->enter($__internal_f6bab6a2432d235c03d7db6e66103867e9f3a71478eec574be223fae6eb19a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 190
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 190, $this->getSourceContext()); })()))) {
            // line 191
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 191, $this->getSourceContext()); })()))) {
                // line 192
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 192, $this->getSourceContext()); })()), array("%name%" =>                 // line 193
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 193, $this->getSourceContext()); })()), "%id%" =>                 // line 194
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 194, $this->getSourceContext()); })())));
            } else {
                // line 197
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 197, $this->getSourceContext()); })()));
            }
        }
        // line 200
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 200, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" class=\"btn btn-success\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 200, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 200, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 200, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 200, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_f6bab6a2432d235c03d7db6e66103867e9f3a71478eec574be223fae6eb19a52->leave($__internal_f6bab6a2432d235c03d7db6e66103867e9f3a71478eec574be223fae6eb19a52_prof);

    }

    // line 203
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_37d37e745c6b0e38b978f74e945505829cc5b6416aa19542d667dafadd8fdd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d37e745c6b0e38b978f74e945505829cc5b6416aa19542d667dafadd8fdd16->enter($__internal_37d37e745c6b0e38b978f74e945505829cc5b6416aa19542d667dafadd8fdd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 205
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_37d37e745c6b0e38b978f74e945505829cc5b6416aa19542d667dafadd8fdd16->leave($__internal_37d37e745c6b0e38b978f74e945505829cc5b6416aa19542d667dafadd8fdd16_prof);

    }

    // line 208
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_604dc21de0092f7527209a5199859a8d6c07980e362b5ea06aba0bb17ab4931d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604dc21de0092f7527209a5199859a8d6c07980e362b5ea06aba0bb17ab4931d->enter($__internal_604dc21de0092f7527209a5199859a8d6c07980e362b5ea06aba0bb17ab4931d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 210
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_604dc21de0092f7527209a5199859a8d6c07980e362b5ea06aba0bb17ab4931d->leave($__internal_604dc21de0092f7527209a5199859a8d6c07980e362b5ea06aba0bb17ab4931d_prof);

    }

    // line 215
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a3b9cb54eac99f38bd0ab3e04d54df61b43e66163b8e322a871c38b4c5a18e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b9cb54eac99f38bd0ab3e04d54df61b43e66163b8e322a871c38b4c5a18e55->enter($__internal_a3b9cb54eac99f38bd0ab3e04d54df61b43e66163b8e322a871c38b4c5a18e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 216
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 216, $this->getSourceContext()); })()) === false)) {
            // line 217
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 217, $this->getSourceContext()); })())) {
                // line 218
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 218, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 218, $this->getSourceContext()); })())));
            }
            // line 220
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 220, $this->getSourceContext()); })())) {
                // line 221
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 221, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 223
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 223, $this->getSourceContext()); })()))) {
                // line 224
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 224, $this->getSourceContext()); })()))) {
                    // line 225
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 225, $this->getSourceContext()); })()), array("%name%" =>                     // line 226
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 226, $this->getSourceContext()); })()), "%id%" =>                     // line 227
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 227, $this->getSourceContext()); })())));
                } else {
                    // line 230
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 230, $this->getSourceContext()); })()));
                }
            }
            // line 233
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 233, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 233, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 233, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 233, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 233, $this->getSourceContext()); })())))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_a3b9cb54eac99f38bd0ab3e04d54df61b43e66163b8e322a871c38b4c5a18e55->leave($__internal_a3b9cb54eac99f38bd0ab3e04d54df61b43e66163b8e322a871c38b4c5a18e55_prof);

    }

    // line 237
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_3b8cf06786bb1315325ae3c6f83ac07d6b201aa14c559e15e3c15b5f39753577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8cf06786bb1315325ae3c6f83ac07d6b201aa14c559e15e3c15b5f39753577->enter($__internal_3b8cf06786bb1315325ae3c6f83ac07d6b201aa14c559e15e3c15b5f39753577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_3b8cf06786bb1315325ae3c6f83ac07d6b201aa14c559e15e3c15b5f39753577->leave($__internal_3b8cf06786bb1315325ae3c6f83ac07d6b201aa14c559e15e3c15b5f39753577_prof);

    }

    // line 241
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_3994f9f71c8dfcc2b8a821cac1772cb01d69729d689c45baf1510e0bacbfb7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3994f9f71c8dfcc2b8a821cac1772cb01d69729d689c45baf1510e0bacbfb7a8->enter($__internal_3994f9f71c8dfcc2b8a821cac1772cb01d69729d689c45baf1510e0bacbfb7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 246
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_3994f9f71c8dfcc2b8a821cac1772cb01d69729d689c45baf1510e0bacbfb7a8->leave($__internal_3994f9f71c8dfcc2b8a821cac1772cb01d69729d689c45baf1510e0bacbfb7a8_prof);

    }

    // line 249
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2eb6792459fbe57f44a3b9703cad0490c6cd81ddc551d0952a631cb1dd12579b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb6792459fbe57f44a3b9703cad0490c6cd81ddc551d0952a631cb1dd12579b->enter($__internal_2eb6792459fbe57f44a3b9703cad0490c6cd81ddc551d0952a631cb1dd12579b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 250
        echo "<div class=\"form-group\">";
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 251, $this->getSourceContext()); })()), 'label');
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 252, $this->getSourceContext()); })()), 'errors');
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 253, $this->getSourceContext()); })()), 'widget');
        // line 254
        echo "</div>";
        
        $__internal_2eb6792459fbe57f44a3b9703cad0490c6cd81ddc551d0952a631cb1dd12579b->leave($__internal_2eb6792459fbe57f44a3b9703cad0490c6cd81ddc551d0952a631cb1dd12579b_prof);

    }

    // line 257
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3420b8f112614098a67b671f9b8245c9d6aa1bc646df91dd0e90cbaa13184ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3420b8f112614098a67b671f9b8245c9d6aa1bc646df91dd0e90cbaa13184ee2->enter($__internal_3420b8f112614098a67b671f9b8245c9d6aa1bc646df91dd0e90cbaa13184ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 258
        echo "<div>";
        // line 259
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 259, $this->getSourceContext()); })()), 'widget');
        // line 260
        echo "</div>";
        
        $__internal_3420b8f112614098a67b671f9b8245c9d6aa1bc646df91dd0e90cbaa13184ee2->leave($__internal_3420b8f112614098a67b671f9b8245c9d6aa1bc646df91dd0e90cbaa13184ee2_prof);

    }

    // line 263
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_dd43bc4b68a6e29b1c156799d07f8423469047addcfd3ca5ba0a1d49bb09b94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd43bc4b68a6e29b1c156799d07f8423469047addcfd3ca5ba0a1d49bb09b94f->enter($__internal_dd43bc4b68a6e29b1c156799d07f8423469047addcfd3ca5ba0a1d49bb09b94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 264
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 264, $this->getSourceContext()); })()), 'widget');
        
        $__internal_dd43bc4b68a6e29b1c156799d07f8423469047addcfd3ca5ba0a1d49bb09b94f->leave($__internal_dd43bc4b68a6e29b1c156799d07f8423469047addcfd3ca5ba0a1d49bb09b94f_prof);

    }

    // line 269
    public function block_form($context, array $blocks = array())
    {
        $__internal_cb42fbd15aca8e1728b57fddb7e6882d9b1a4371282f7f187279be789c8ad054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb42fbd15aca8e1728b57fddb7e6882d9b1a4371282f7f187279be789c8ad054->enter($__internal_cb42fbd15aca8e1728b57fddb7e6882d9b1a4371282f7f187279be789c8ad054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 270
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 270, $this->getSourceContext()); })()), 'form_start');
        // line 271
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 271, $this->getSourceContext()); })()), 'widget');
        // line 272
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 272, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_cb42fbd15aca8e1728b57fddb7e6882d9b1a4371282f7f187279be789c8ad054->leave($__internal_cb42fbd15aca8e1728b57fddb7e6882d9b1a4371282f7f187279be789c8ad054_prof);

    }

    // line 275
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_41ef650292d653984c878280f64c36113df8e2e9ddad098af96a95cec71b229d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ef650292d653984c878280f64c36113df8e2e9ddad098af96a95cec71b229d->enter($__internal_41ef650292d653984c878280f64c36113df8e2e9ddad098af96a95cec71b229d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 276
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 276, $this->getSourceContext()); })()));
        // line 277
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 277, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 278
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 278, $this->getSourceContext()); })());
        } else {
            // line 280
            $context["form_method"] = "POST";
        }
        // line 282
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 282, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 282, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 282, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 282, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 282, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 282, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 283
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 283, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 283, $this->getSourceContext()); })()))) {
            // line 284
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 284, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_41ef650292d653984c878280f64c36113df8e2e9ddad098af96a95cec71b229d->leave($__internal_41ef650292d653984c878280f64c36113df8e2e9ddad098af96a95cec71b229d_prof);

    }

    // line 288
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_38b2e9e38f6b1477a6f9c999437325e733e2b198bc2aea1ad13deec02c40ed9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b2e9e38f6b1477a6f9c999437325e733e2b198bc2aea1ad13deec02c40ed9f->enter($__internal_38b2e9e38f6b1477a6f9c999437325e733e2b198bc2aea1ad13deec02c40ed9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 289
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 289, $this->getSourceContext()); })()))) {
            // line 290
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), 'rest');
        }
        // line 292
        echo "</form>";
        
        $__internal_38b2e9e38f6b1477a6f9c999437325e733e2b198bc2aea1ad13deec02c40ed9f->leave($__internal_38b2e9e38f6b1477a6f9c999437325e733e2b198bc2aea1ad13deec02c40ed9f_prof);

    }

    // line 295
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_57ea5df1cf3ef90c91d5b2411cec2c0ab1e19647a48a8b274e651eee7671ae94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ea5df1cf3ef90c91d5b2411cec2c0ab1e19647a48a8b274e651eee7671ae94->enter($__internal_57ea5df1cf3ef90c91d5b2411cec2c0ab1e19647a48a8b274e651eee7671ae94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 296
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 296, $this->getSourceContext()); })())) > 0)) {
            // line 297
            echo "<ul>";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 298, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 299
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 301
            echo "</ul>";
        }
        
        $__internal_57ea5df1cf3ef90c91d5b2411cec2c0ab1e19647a48a8b274e651eee7671ae94->leave($__internal_57ea5df1cf3ef90c91d5b2411cec2c0ab1e19647a48a8b274e651eee7671ae94_prof);

    }

    // line 305
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_87a5c4201490df5adcb816b611ba03d4d71bfa67323a648c1a28abf92fd5abde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a5c4201490df5adcb816b611ba03d4d71bfa67323a648c1a28abf92fd5abde->enter($__internal_87a5c4201490df5adcb816b611ba03d4d71bfa67323a648c1a28abf92fd5abde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 306, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 307
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 308
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_87a5c4201490df5adcb816b611ba03d4d71bfa67323a648c1a28abf92fd5abde->leave($__internal_87a5c4201490df5adcb816b611ba03d4d71bfa67323a648c1a28abf92fd5abde_prof);

    }

    // line 315
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_b92862fe2ce2259c469e6996956669da77483757d865bd9b554cfc6bb9552f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92862fe2ce2259c469e6996956669da77483757d865bd9b554cfc6bb9552f74->enter($__internal_b92862fe2ce2259c469e6996956669da77483757d865bd9b554cfc6bb9552f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 316
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 316, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 317
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b92862fe2ce2259c469e6996956669da77483757d865bd9b554cfc6bb9552f74->leave($__internal_b92862fe2ce2259c469e6996956669da77483757d865bd9b554cfc6bb9552f74_prof);

    }

    // line 321
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_a1f0bbae1093dbd5acec6cfd86aba76984b89b1e977ad714a1b100ac8a983914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f0bbae1093dbd5acec6cfd86aba76984b89b1e977ad714a1b100ac8a983914->enter($__internal_a1f0bbae1093dbd5acec6cfd86aba76984b89b1e977ad714a1b100ac8a983914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 322
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 323
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 323, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 324
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 324, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 325
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 325, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 326
            echo " ";
            // line 327
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 328
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 328, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 328, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 329
$context["attrvalue"] === true)) {
                // line 330
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 331
$context["attrvalue"] === false)) {
                // line 332
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a1f0bbae1093dbd5acec6cfd86aba76984b89b1e977ad714a1b100ac8a983914->leave($__internal_a1f0bbae1093dbd5acec6cfd86aba76984b89b1e977ad714a1b100ac8a983914_prof);

    }

    // line 337
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_cd3eba4dc316e7d6fad0246b1a3c02b7c18932a8dba51b40c15a97c79c5ef20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3eba4dc316e7d6fad0246b1a3c02b7c18932a8dba51b40c15a97c79c5ef20b->enter($__internal_cd3eba4dc316e7d6fad0246b1a3c02b7c18932a8dba51b40c15a97c79c5ef20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 338
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 338, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 338, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 339, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 340
            echo " ";
            // line 341
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 342
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 342, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 342, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 343
$context["attrvalue"] === true)) {
                // line 344
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 345
$context["attrvalue"] === false)) {
                // line 346
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_cd3eba4dc316e7d6fad0246b1a3c02b7c18932a8dba51b40c15a97c79c5ef20b->leave($__internal_cd3eba4dc316e7d6fad0246b1a3c02b7c18932a8dba51b40c15a97c79c5ef20b_prof);

    }

    // line 351
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_fafea78b4a866bc96ac1c083f07747cdf9ab1de209c87a90818d2aff16d86b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafea78b4a866bc96ac1c083f07747cdf9ab1de209c87a90818d2aff16d86b37->enter($__internal_fafea78b4a866bc96ac1c083f07747cdf9ab1de209c87a90818d2aff16d86b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 352
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 352, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 352, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 352, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 353, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 354
            echo " ";
            // line 355
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 356
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 356, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 356, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 357
$context["attrvalue"] === true)) {
                // line 358
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 359
$context["attrvalue"] === false)) {
                // line 360
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fafea78b4a866bc96ac1c083f07747cdf9ab1de209c87a90818d2aff16d86b37->leave($__internal_fafea78b4a866bc96ac1c083f07747cdf9ab1de209c87a90818d2aff16d86b37_prof);

    }

    // line 365
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_376fbd3e7070325f844c422c5a185cda269a8dee27479d118b4ec146b107f995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376fbd3e7070325f844c422c5a185cda269a8dee27479d118b4ec146b107f995->enter($__internal_376fbd3e7070325f844c422c5a185cda269a8dee27479d118b4ec146b107f995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 366, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 367
            echo " ";
            // line 368
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 369
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 369, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 369, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 370
$context["attrvalue"] === true)) {
                // line 371
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 372
$context["attrvalue"] === false)) {
                // line 373
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_376fbd3e7070325f844c422c5a185cda269a8dee27479d118b4ec146b107f995->leave($__internal_376fbd3e7070325f844c422c5a185cda269a8dee27479d118b4ec146b107f995_prof);

    }

    public function getTemplateName()
    {
        return "EDUBundle:Form:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1278 => 373,  1276 => 372,  1271 => 371,  1269 => 370,  1264 => 369,  1262 => 368,  1260 => 367,  1256 => 366,  1250 => 365,  1235 => 360,  1233 => 359,  1228 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1217 => 354,  1213 => 353,  1204 => 352,  1198 => 351,  1183 => 346,  1181 => 345,  1176 => 344,  1174 => 343,  1169 => 342,  1167 => 341,  1165 => 340,  1161 => 339,  1155 => 338,  1149 => 337,  1134 => 332,  1132 => 331,  1127 => 330,  1125 => 329,  1120 => 328,  1118 => 327,  1116 => 326,  1112 => 325,  1108 => 324,  1104 => 323,  1098 => 322,  1092 => 321,  1081 => 317,  1077 => 316,  1071 => 315,  1059 => 308,  1057 => 307,  1053 => 306,  1047 => 305,  1039 => 301,  1031 => 299,  1027 => 298,  1025 => 297,  1023 => 296,  1017 => 295,  1010 => 292,  1007 => 290,  1005 => 289,  999 => 288,  989 => 284,  987 => 283,  960 => 282,  957 => 280,  954 => 278,  952 => 277,  950 => 276,  944 => 275,  937 => 272,  935 => 271,  933 => 270,  927 => 269,  920 => 264,  914 => 263,  907 => 260,  905 => 259,  903 => 258,  897 => 257,  890 => 254,  888 => 253,  886 => 252,  884 => 251,  882 => 250,  876 => 249,  869 => 246,  863 => 241,  852 => 237,  829 => 233,  825 => 230,  822 => 227,  821 => 226,  820 => 225,  818 => 224,  816 => 223,  813 => 221,  811 => 220,  808 => 218,  806 => 217,  804 => 216,  798 => 215,  791 => 210,  789 => 209,  783 => 208,  776 => 205,  774 => 204,  768 => 203,  755 => 200,  751 => 197,  748 => 194,  747 => 193,  746 => 192,  744 => 191,  742 => 190,  736 => 189,  729 => 186,  727 => 185,  721 => 184,  714 => 181,  712 => 180,  706 => 179,  699 => 176,  697 => 175,  691 => 174,  684 => 171,  682 => 170,  676 => 169,  668 => 166,  666 => 165,  660 => 164,  653 => 161,  651 => 160,  645 => 159,  638 => 156,  636 => 155,  630 => 154,  623 => 151,  617 => 150,  610 => 147,  608 => 146,  602 => 145,  595 => 142,  593 => 141,  587 => 139,  579 => 135,  569 => 134,  564 => 133,  562 => 132,  559 => 130,  557 => 129,  551 => 128,  543 => 124,  541 => 122,  540 => 121,  539 => 120,  538 => 119,  534 => 118,  531 => 116,  529 => 115,  523 => 114,  515 => 110,  513 => 109,  511 => 108,  509 => 107,  507 => 106,  503 => 105,  500 => 103,  498 => 102,  492 => 101,  475 => 98,  469 => 97,  452 => 94,  446 => 93,  417 => 88,  415 => 87,  412 => 85,  410 => 84,  408 => 83,  403 => 82,  401 => 81,  384 => 80,  378 => 79,  371 => 76,  369 => 75,  367 => 74,  361 => 71,  359 => 70,  357 => 69,  355 => 68,  353 => 67,  344 => 65,  342 => 64,  334 => 63,  331 => 61,  329 => 60,  323 => 59,  316 => 56,  310 => 54,  308 => 53,  304 => 52,  300 => 51,  294 => 50,  286 => 46,  283 => 44,  281 => 43,  275 => 42,  264 => 39,  258 => 38,  251 => 35,  248 => 33,  246 => 32,  240 => 31,  233 => 28,  231 => 27,  229 => 26,  226 => 24,  224 => 23,  220 => 22,  214 => 21,  197 => 18,  191 => 15,  188 => 14,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 365,  150 => 351,  148 => 337,  146 => 321,  144 => 315,  141 => 312,  139 => 305,  137 => 295,  135 => 288,  133 => 275,  131 => 269,  129 => 263,  127 => 257,  125 => 249,  123 => 241,  121 => 237,  119 => 215,  117 => 208,  115 => 203,  113 => 189,  111 => 184,  109 => 179,  107 => 174,  105 => 169,  103 => 164,  101 => 159,  99 => 154,  97 => 150,  95 => 145,  93 => 139,  91 => 128,  89 => 114,  87 => 101,  85 => 97,  83 => 93,  81 => 79,  79 => 59,  77 => 50,  75 => 42,  73 => 38,  71 => 31,  69 => 21,  67 => 11,  65 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    {% if type==\"file\" and form.vars['data'] %}
        <br/>
        <img src=\"/web/assets/images/{{ form.vars['data']}}\" width=\"150\" />
        <br/>
    {% endif %}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} class=\"form-control\" {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
        {%- for child in form %}
            {{- form_widget(child) -}}
            {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
        {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }} class=\"form-control\" {% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            {% set attr = choice.attr %}
            <option value=\"{{ choice.value }}\" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
            '%name%': name,
            '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" class=\"btn btn-success\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
    {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        <ul>
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}", "EDUBundle:Form:form_div_layout.html.twig", "/var/www/edu-yukon/api/src/EDUBundle/Resources/views/Form/form_div_layout.html.twig");
    }
}
