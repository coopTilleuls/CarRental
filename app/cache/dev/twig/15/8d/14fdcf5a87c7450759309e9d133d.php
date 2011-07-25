<?php

/* form_div_layout.html.twig */
class __TwigTemplate_158d14fdcf5a87c7450759309e9d133d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'widget_choice_options' => array($this, 'block_widget_choice_options'),
            'choice_widget' => array($this, 'block_choice_widget'),
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
            'field_widget' => array($this, 'block_field_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'field_label' => array($this, 'block_field_label'),
            'form_label' => array($this, 'block_form_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'field_row' => array($this, 'block_field_row'),
            'prototype_row' => array($this, 'block_prototype_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'field_enctype' => array($this, 'block_field_enctype'),
            'field_errors' => array($this, 'block_field_errors'),
            'field_rest' => array($this, 'block_field_rest'),
            'field_rows' => array($this, 'block_field_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('widget_choice_options', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('date_widget', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('time_widget', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('number_widget', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('money_widget', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('url_widget', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('search_widget', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 156
        echo "
";
        // line 157
        $this->displayBlock('field_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('password_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 175
        echo "
";
        // line 176
        $this->displayBlock('email_widget', $context, $blocks);
        // line 182
        echo "
";
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('field_label', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('form_label', $context, $blocks);
        // line 196
        echo "
";
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('field_row', $context, $blocks);
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('prototype_row', $context, $blocks);
        // line 220
        echo "
";
        // line 221
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('field_enctype', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('field_errors', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('field_rest', $context, $blocks);
        // line 254
        echo "
";
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('field_rows', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('widget_container_attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <div ";
        echo $this->renderBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->renderBlock("field_rows", $context, $blocks);
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    <textarea ";
        echo $this->renderBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 18
    public function block_widget_choice_options($context, array $blocks = array())
    {
        // line 19
        ob_start();
        // line 20
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'options'));
        foreach ($context['_seq'] as $context['choice'] => $context['label']) {
            // line 21
            echo "        ";
            if ($this->env->getExtension('form')->isChoiceGroup($this->getContext($context, 'label'))) {
                // line 22
                echo "            <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'choice')), "html");
                echo "\">
                ";
                // line 23
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'label'));
                foreach ($context['_seq'] as $context['nestedChoice'] => $context['nestedLabel']) {
                    // line 24
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'nestedChoice'), "html");
                    echo "\"";
                    if ($this->env->getExtension('form')->isChoiceSelected($this->getContext($context, 'form'), $this->getContext($context, 'nestedChoice'))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'nestedLabel')), "html");
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nestedChoice'], $context['nestedLabel'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 26
                echo "            </optgroup>
        ";
            } else {
                // line 28
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, 'choice'), "html");
                echo "\"";
                if ($this->env->getExtension('form')->isChoiceSelected($this->getContext($context, 'form'), $this->getContext($context, 'choice'))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'label')), "html");
                echo "</option>
        ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 34
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 35
        ob_start();
        // line 36
        echo "    ";
        if ($this->getContext($context, 'expanded')) {
            // line 37
            echo "        <div ";
            echo $this->renderBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'form'));
            foreach ($context['_seq'] as $context['_key'] => $context['child']) {
                // line 39
                echo "            ";
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'child'));
                echo "
            ";
                // line 40
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'child'));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 42
            echo "        </div>
    ";
        } else {
            // line 44
            echo "    <select ";
            echo $this->renderBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, 'multiple')) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 45
            if ((!twig_test_none($this->getContext($context, 'empty_value')))) {
                // line 46
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'empty_value')), "html");
                echo "</option>
        ";
            }
            // line 48
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, 'preferred_choices')) > 0)) {
                // line 49
                echo "            ";
                $context['options'] = $this->getContext($context, 'preferred_choices');
                // line 50
                echo "            ";
                echo $this->renderBlock("widget_choice_options", $context, $blocks);
                echo "
            <option disabled=\"disabled\">";
                // line 51
                echo twig_escape_filter($this->env, $this->getContext($context, 'separator'), "html");
                echo "</option>
        ";
            }
            // line 53
            echo "        ";
            $context['options'] = $this->getContext($context, 'choices');
            // line 54
            echo "        ";
            echo $this->renderBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 60
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 61
        ob_start();
        // line 62
        echo "    <input type=\"checkbox\" ";
        echo $this->renderBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
            echo "\"";
        }
        if ($this->getContext($context, 'checked')) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 66
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 67
        ob_start();
        // line 68
        echo "    <input type=\"radio\" ";
        echo $this->renderBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
            echo "\"";
        }
        if ($this->getContext($context, 'checked')) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 72
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 73
        ob_start();
        // line 74
        echo "    ";
        if (($this->getContext($context, 'widget') == "single_text")) {
            // line 75
            echo "        ";
            echo $this->renderBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 77
            echo "        <div ";
            echo $this->renderBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 78
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "date", array(), "any", false));
            echo "
            ";
            // line 79
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "time", array(), "any", false));
            echo "
            ";
            // line 80
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "date", array(), "any", false));
            echo "
            ";
            // line 81
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "time", array(), "any", false));
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 87
    public function block_date_widget($context, array $blocks = array())
    {
        // line 88
        ob_start();
        // line 89
        echo "    ";
        if (($this->getContext($context, 'widget') == "single_text")) {
            // line 90
            echo "        ";
            echo $this->renderBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 92
            echo "        <div ";
            echo $this->renderBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 93
            echo twig_strtr($this->getContext($context, 'date_pattern'), array("{{ year }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "year", array(), "any", false)), "{{ month }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "month", array(), "any", false)), "{{ day }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "day", array(), "any", false))));
            // line 97
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 103
    public function block_time_widget($context, array $blocks = array())
    {
        // line 104
        ob_start();
        // line 105
        echo "    ";
        if (($this->getContext($context, 'widget') == "single_text")) {
            // line 106
            echo "        ";
            echo $this->renderBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 108
            echo "        <div ";
            echo $this->renderBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 109
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "hour", array(), "any", false), array("attr" => array("size" => "1")));
            echo ":";
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "minute", array(), "any", false), array("attr" => array("size" => "1")));
            if ($this->getContext($context, 'with_seconds')) {
                echo ":";
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "second", array(), "any", false), array("attr" => array("size" => "1")));
            }
            // line 110
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 115
    public function block_number_widget($context, array $blocks = array())
    {
        // line 116
        ob_start();
        // line 117
        echo "    ";
        // line 118
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "text")) : ("text"));
        // line 119
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 123
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 124
        ob_start();
        // line 125
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "number")) : ("number"));
        // line 126
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 130
    public function block_money_widget($context, array $blocks = array())
    {
        // line 131
        ob_start();
        // line 132
        echo "    ";
        echo twig_strtr($this->getContext($context, 'money_pattern'), array("{{ widget }}" => $this->renderBlock("field_widget", $context, $blocks)));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 136
    public function block_url_widget($context, array $blocks = array())
    {
        // line 137
        ob_start();
        // line 138
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "url")) : ("url"));
        // line 139
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 143
    public function block_search_widget($context, array $blocks = array())
    {
        // line 144
        ob_start();
        // line 145
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "search")) : ("search"));
        // line 146
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 150
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 151
        ob_start();
        // line 152
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "text")) : ("text"));
        // line 153
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo " %
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 157
    public function block_field_widget($context, array $blocks = array())
    {
        // line 158
        ob_start();
        // line 159
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "text")) : ("text"));
        // line 160
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'type'), "html");
        echo "\" ";
        echo $this->renderBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
        echo "\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 164
    public function block_password_widget($context, array $blocks = array())
    {
        // line 165
        ob_start();
        // line 166
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "password")) : ("password"));
        // line 167
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 171
    public function block_hidden_widget($context, array $blocks = array())
    {
        // line 172
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "hidden")) : ("hidden"));
        // line 173
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
    }

    // line 176
    public function block_email_widget($context, array $blocks = array())
    {
        // line 177
        ob_start();
        // line 178
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "email")) : ("email"));
        // line 179
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 185
    public function block_field_label($context, array $blocks = array())
    {
        // line 186
        ob_start();
        // line 187
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
        foreach ($context['_seq'] as $context['attrname'] => $context['attrvalue']) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrname'), "html");
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrvalue'), "html");
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'label')), "html");
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 191
    public function block_form_label($context, array $blocks = array())
    {
        // line 192
        ob_start();
        // line 193
        echo "    <label ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
        foreach ($context['_seq'] as $context['attrname'] => $context['attrvalue']) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrname'), "html");
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrvalue'), "html");
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'label')), "html");
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 199
    public function block_repeated_row($context, array $blocks = array())
    {
        // line 200
        ob_start();
        // line 201
        echo "    ";
        echo $this->renderBlock("field_rows", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 205
    public function block_field_row($context, array $blocks = array())
    {
        // line 206
        ob_start();
        // line 207
        echo "    <div>
        ";
        // line 208
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'form'), ((array_key_exists("label", $context)) ? (twig_default_filter($this->getContext($context, 'label'), null)) : (null)));
        echo "
        ";
        // line 209
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
        echo "
        ";
        // line 210
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 215
    public function block_prototype_row($context, array $blocks = array())
    {
        // line 216
        ob_start();
        // line 217
        echo "    <script type=\"text/html\" id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'proto_id'), "html");
        echo "\">";
        echo $this->env->getExtension('form')->renderRow($this->getContext($context, 'form'));
        echo "</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 221
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 222
        echo "    ";
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
";
    }

    // line 227
    public function block_field_enctype($context, array $blocks = array())
    {
        // line 228
        ob_start();
        // line 229
        echo "    ";
        if ($this->getContext($context, 'multipart')) {
            echo "enctype=\"multipart/form-data\"";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 233
    public function block_field_errors($context, array $blocks = array())
    {
        // line 234
        ob_start();
        // line 235
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, 'errors')) > 0)) {
            // line 236
            echo "    <ul>
        ";
            // line 237
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'errors'));
            foreach ($context['_seq'] as $context['_key'] => $context['error']) {
                // line 238
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, 'error'), "messageTemplate", array(), "any", false), $this->getAttribute($this->getContext($context, 'error'), "messageParameters", array(), "any", false), "validators"), "html");
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 240
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 245
    public function block_field_rest($context, array $blocks = array())
    {
        // line 246
        ob_start();
        // line 247
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'form'));
        foreach ($context['_seq'] as $context['_key'] => $context['child']) {
            // line 248
            echo "        ";
            if ((!$this->getAttribute($this->getContext($context, 'child'), "rendered", array(), "any", false))) {
                // line 249
                echo "            ";
                echo $this->env->getExtension('form')->renderRow($this->getContext($context, 'child'));
                echo "
        ";
            }
            // line 251
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 257
    public function block_field_rows($context, array $blocks = array())
    {
        // line 258
        ob_start();
        // line 259
        echo "    ";
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
        echo "
    ";
        // line 260
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'form'));
        foreach ($context['_seq'] as $context['_key'] => $context['child']) {
            // line 261
            echo "        ";
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, 'child'));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 266
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 267
        ob_start();
        // line 268
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'full_name'), "html");
        echo "\"";
        if ($this->getContext($context, 'read_only')) {
            echo " disabled=\"disabled\"";
        }
        if ($this->getContext($context, 'required')) {
            echo " required=\"required\"";
        }
        if ($this->getContext($context, 'max_length')) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'max_length'), "html");
            echo "\"";
        }
        if ($this->getContext($context, 'pattern')) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'pattern'), "html");
            echo "\"";
        }
        // line 269
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
        foreach ($context['_seq'] as $context['attrname'] => $context['attrvalue']) {
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrname'), "html");
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrvalue'), "html");
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 273
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 274
        ob_start();
        // line 275
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\"
    ";
        // line 276
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
        foreach ($context['_seq'] as $context['attrname'] => $context['attrvalue']) {
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrname'), "html");
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrvalue'), "html");
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function isTraitable()
    {
        return true;
    }
}
