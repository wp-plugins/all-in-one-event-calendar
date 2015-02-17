<?php

/* create-event-form.twig */
class __TwigTemplate_7a118b4d92f97f1deee45684469b3beb98e214e0d5a32c9a259b9bcf81a41145 extends Twig_Template
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
        echo "<div class=\"ai1ec-modal-header\">
\t<button type=\"button\" class=\"ai1ec-close\" data-dismiss=\"ai1ec-modal\">×</button>
\t<h2>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["post_your_event"]) ? $context["post_your_event"] : null), "html", null, true);
        echo "</h2>
</div>

<form class=\"ai1ec-create-event-form ai1ec-form-horizontal\" method=\"POST\"
\taction=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["form_action"]) ? $context["form_action"] : null), "html_attr");
        echo "\">

";
        // line 9
        echo (isset($context["nonce_field"]) ? $context["nonce_field"] : null);
        echo "
<input type=\"hidden\" name=\"ai1ec_start_time\" id=\"ai1ec-start-time\" />
<input type=\"hidden\" name=\"ai1ec_end_time\" id=\"ai1ec-end-time\" />
<input type=\"hidden\" name=\"ai1ec_all_day_event\" id=\"ai1ec-all-day-event\" />
<input type=\"hidden\" name=\"ai1ec_instant_event\" id=\"ai1ec-instant-event\" />

<div class=\"ai1ec-modal-body\">

\t";
        // line 18
        echo "\t<div class=\"ai1ec-alert ai1ec-alert-danger ai1ec-hide ai1ec-missing-field\">
\t\t";
        // line 19
        echo sprintf((isset($context["required_field_text"]) ? $context["required_field_text"] : null), "<em></em>");
        echo "
\t</div>

\t<div class=\"ai1ec-alert ai1ec-alert-danger ai1ec-hide ai1ec-submit-error\"></div>
\t";
        // line 24
        echo "\t";
        echo (isset($context["custom_form_fields"]) ? $context["custom_form_fields"] : null);
        echo "
\t";
        // line 26
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t<input type=\"text\" id=\"ai1ec-event-title\" name=\"post_title\"
\t\t\t\tplaceholder=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["title_required"]) ? $context["title_required"] : null), "html_attr");
        echo "\"
\t\t\t\trequired=\"true\" class=\"ai1ec-form-control\">
\t\t</div>
\t</div>

\t<div class=\"ai1ec-form-group\">
\t\t";
        // line 36
        echo "\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<div class=\"ai1ec-form-group ai1ec-start-time\">
\t\t\t\t<div class=\"ai1ec-col-xs-6\">
\t\t\t\t\t<input data-date-format=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["date_format_pattern"]) ? $context["date_format_pattern"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\tdata-date-weekstart=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["week_start_day"]) ? $context["week_start_day"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\tid=\"ai1ec-start-date-input\" type=\"text\"
\t\t\t\t\t\trequired=\"true\" readonly=\"readonly\"
\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-datepicker\"
\t\t\t\t\t\tplaceholder=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["date_placeholder"]) ? $context["date_placeholder"] : null), "html_attr");
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"ai1ec-col-xs-6\">
\t\t\t\t\t<div id=\"ai1ec-start-time-input-wrap\"
\t\t\t\t\t\tclass=\"ai1ec-collapse bootstrap-timepicker\">
\t\t\t\t\t\t<input id=\"ai1ec-start-time-input\" type=\"text\"
\t\t\t\t\t\t\tdata-show-meridian=\"";
        // line 51
        echo (((isset($context["input_24h_time"]) ? $context["input_24h_time"] : null)) ? ("false") : ("true"));
        echo "\"
\t\t\t\t\t\t\tdisabled=\"disabled\"
\t\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-timepicker ai1ec-tooltip-trigger\"
\t\t\t\t\t\t\tplaceholder=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["time_placeholder"]) ? $context["time_placeholder"] : null), "html_attr");
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 58
        echo "\t\t\t\t\t<label for=\"ai1ec-has-time\" class=\"ai1ec-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"ai1ec-has-time\"
\t\t\t\t\t\t\tvalue=\"1\" disabled=\"disabled\" data-toggle=\"ai1ec-collapse\"
\t\t\t\t\t\t\tdata-target=\"#ai1ec-start-time-input-wrap\">
\t\t\t\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["add_time"]) ? $context["add_time"] : null), "html", null, true);
        echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 69
        echo "\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<div id=\"ai1ec-end-time-wrap\" class=\"ai1ec-collapse ai1ec-row\">
\t\t\t\t<div class=\"ai1ec-col-xs-6\">
\t\t\t\t\t<input
\t\t\t\t\t\tdata-date-format=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["date_format_pattern"]) ? $context["date_format_pattern"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\tdata-date-weekstart=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["week_start_day"]) ? $context["week_start_day"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\tid=\"ai1ec-end-date-input\" type=\"text\"
\t\t\t\t\t\treadonly=\"readonly\" disabled=\"disabled\"
\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-datepicker\"
\t\t\t\t\t\tplaceholder=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["end_date"]) ? $context["end_date"] : null), "html_attr");
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"ai1ec-col-xs-6\">
\t\t\t\t\t<div id=\"ai1ec-end-time-input-wrap\"
\t\t\t\t\t\tclass=\"ai1ec-collapse bootstrap-timepicker\">
\t\t\t\t\t\t<input id=\"ai1ec-end-time-input\" type=\"text\"
\t\t\t\t\t\t\tdata-show-meridian=\"";
        // line 85
        echo (((isset($context["input_24h_time"]) ? $context["input_24h_time"] : null)) ? ("false") : ("true"));
        echo "\"
\t\t\t\t\t\t\tdata-alignment=\"right\"
\t\t\t\t\t\t\tdisabled=\"disabled\"
\t\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-timepicker ai1ec-tooltip-trigger\"
\t\t\t\t\t\t\tplaceholder=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["end_time"]) ? $context["end_time"] : null), "html_attr");
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 95
        echo "\t\t\t<label for=\"ai1ec-has-end-time\" class=\"ai1ec-checkbox\">
\t\t\t\t<input type=\"checkbox\" id=\"ai1ec-has-end-time\"
\t\t\t\t\tvalue=\"1\" disabled=\"disabled\" data-toggle=\"ai1ec-collapse\"
\t\t\t\t\tdata-target=\"#ai1ec-end-time-wrap\">
\t\t\t\t<span class=\"ai1ec-without-time\">
\t\t\t\t\t";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["add_end_date"]) ? $context["add_end_date"] : null), "html", null, true);
        echo "
\t\t\t\t</span>
\t\t\t\t<span class=\"ai1ec-with-time\">
\t\t\t\t\t";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["add_end_date_time"]) ? $context["add_end_date_time"] : null), "html", null, true);
        echo "
\t\t\t\t</span>
\t\t\t</label>
\t\t</div>
\t</div>

\t";
        // line 110
        echo "\t<div class=\"ai1ec-form-group ai1ec-timezone-select\">
\t\t<div class=\"ai1ec-col-sm-3 ai1ec-timezone-label\">
\t\t\t<label>";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["time_zone"]) ? $context["time_zone"] : null), "html", null, true);
        echo "</label>
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-9\">
\t\t\t<select id=\"ai1ec_timezone_name\" name=\"ai1ec_timezone_name\" class=\"ai1ec-timezone-select ai1ec-form-control\">
\t\t\t\t";
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timezones_list"]) ? $context["timezones_list"] : null));
        foreach ($context['_seq'] as $context["group"] => $context["timezones"]) {
            // line 117
            echo "\t\t\t\t\t<optgroup label=\"";
            echo twig_escape_filter($this->env, (isset($context["group"]) ? $context["group"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 118
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["timezones"]) ? $context["timezones"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
                // line 119
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timezone"]) ? $context["timezone"] : null), "value"), "html", null, true);
                echo "\" ";
                echo ((((isset($context["default_timezone"]) ? $context["default_timezone"] : null) == $this->getAttribute((isset($context["timezone"]) ? $context["timezone"] : null), "value"))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timezone"]) ? $context["timezone"] : null), "text"), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['timezones'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t\t\t</select>
\t\t</div>
\t</div>

\t";
        // line 128
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t<input type=\"text\" id=\"ai1ec_venue\" name=\"ai1ec_venue\"
\t\t\t\t";
        // line 131
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_venue_required")) {
            // line 132
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["venue_name_required"]) ? $context["venue_name_required"] : null), "html_attr");
            echo "\"
\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 135
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["venue_name"]) ? $context["venue_name"] : null), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t</div>

\t";
        // line 142
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-9\">
\t\t\t<input type=\"text\" id=\"ai1ec_address\" name=\"ai1ec_address\"
\t\t\t\t";
        // line 145
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_address_required")) {
            // line 146
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["address_required"]) ? $context["address_required"] : null), "html_attr");
            echo "\"
\t\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 149
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["address"]) ? $context["address"] : null), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 151
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-3\">
\t\t\t<label for=\"ai1ec-google-map\" class=\"ai1ec-checkbox\">
\t\t\t\t<input type=\"checkbox\" id=\"ai1ec-google-map\" name=\"ai1ec_google_map\"
\t\t\t\t\t";
        // line 156
        if ((isset($context["interactive_gmaps"]) ? $context["interactive_gmaps"] : null)) {
            // line 157
            echo "\t\t\t\t\t\tdata-toggle=\"ai1ec-collapse\" data-target=\"#ai1ec-map-wrap\"
\t\t\t\t\t";
        }
        // line 159
        echo "\t\t\t\t\tdisabled=\"disabled\">
\t\t\t\t";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["include_map"]) ? $context["include_map"] : null), "html", null, true);
        echo "
\t\t\t</label>
\t\t</div>
\t</div>

\t";
        // line 166
        echo "\t";
        if ((isset($context["interactive_gmaps"]) ? $context["interactive_gmaps"] : null)) {
            // line 167
            echo "\t\t<div id=\"ai1ec-map-wrap\" class=\"ai1ec-collapse\">
\t\t\t<div id=\"ai1ec_map_canvas\"></div>
\t\t</div>
\t";
        }
        // line 171
        echo "
\t";
        // line 173
        echo "\t";
        if ((!twig_test_empty((isset($context["taxonomies"]) ? $context["taxonomies"] : null)))) {
            // line 174
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taxonomies"]) ? $context["taxonomies"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["taxonomy"]) {
                // line 175
                echo "\t\t\t";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                    // line 176
                    echo "\t\t\t\t<div class=\"ai1ec-form-group\">
\t\t\t";
                }
                // line 178
                echo "\t\t\t<div class=\"ai1ec-col-sm-";
                echo ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1))) ? (12) : (6));
                echo "\">
\t\t\t\t";
                // line 179
                echo (isset($context["taxonomy"]) ? $context["taxonomy"] : null);
                echo "
\t\t\t</div>
\t\t\t";
                // line 181
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 0) || $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    // line 182
                    echo "\t\t\t\t</div>
\t\t\t";
                }
                // line 184
                echo "\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomy'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "\t";
        }
        // line 186
        echo "
\t";
        // line 188
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t<textarea id=\"ai1ec-description\" name=\"post_content\" class=\"ai1ec-form-control\" rows=\"4\"
\t\t\t\t";
        // line 191
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_description_required")) {
            // line 192
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["description_required"]) ? $context["description_required"] : null), "html_attr");
            echo "\"
\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 195
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 197
        echo "\t\t\t\t></textarea>
\t\t</div>
\t</div>

\t";
        // line 202
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<input type=\"text\" id=\"ai1ec_contact_name\" name=\"ai1ec_contact_name\"
\t\t\t";
        // line 205
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_organizer_name_required")) {
            // line 206
            echo "\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["organizer_name_required"]) ? $context["organizer_name_required"] : null), "html_attr");
            echo "\"
\t\t\t\trequired=\"true\"
\t\t\t";
        } else {
            // line 209
            echo "\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["organizer_name"]) ? $context["organizer_name"] : null), "html_attr");
            echo "\"
\t\t\t";
        }
        // line 211
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<input type=\"text\" id=\"ai1ec_contact_email\" name=\"ai1ec_contact_email\"
\t\t\t\t";
        // line 215
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_organizer_email_required")) {
            // line 216
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["organizer_email_required"]) ? $context["organizer_email_required"] : null), "html_attr");
            echo "\"
\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 219
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["organizer_email"]) ? $context["organizer_email"] : null), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 221
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t</div>

\t<div id=\"ai1ec-extra-fields\">
\t\t";
        // line 227
        echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-4\">
\t\t\t\t<div id=\"ai1ec_cost_wrap\" class=\"ai1ec-collapse ai1ec-in\">
\t\t\t\t\t<input type=\"text\" id=\"ai1ec_cost\" name=\"ai1ec_cost\"
\t\t\t\t\t\tplaceholder=\"";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["cost_placeholder"]) ? $context["cost_placeholder"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t\t</div>
\t\t\t\t<label for=\"ai1ec_is_free\" class=\"ai1ec-checkbox\">
\t\t\t\t\t<input type=\"checkbox\"
\t\t\t\t\t\tname=\"ai1ec_is_free\"
\t\t\t\t\t\tdata-toggle=\"ai1ec-collapse\"
\t\t\t\t\t\tdata-target=\"#ai1ec_cost_wrap\"
\t\t\t\t\t\tid=\"ai1ec_is_free\"
\t\t\t\t\t\tvalue=\"1\">
\t\t\t\t\t";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["free_label"]) ? $context["free_label"] : null), "html", null, true);
        echo "
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-8\">
\t\t\t\t<input type=\"text\" id=\"ai1ec_ticket_url\" name=\"ai1ec_ticket_url\"
\t\t\t\t\tplaceholder=\"";
        // line 246
        echo twig_escape_filter($this->env, (isset($context["registration_url"]) ? $context["registration_url"] : null), "html_attr");
        echo "\"
\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t</div>
\t\t</div>

\t\t";
        // line 252
        echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-4\">
\t\t\t\t<input type=\"text\" id=\"ai1ec_contact_phone\" name=\"ai1ec_contact_phone\"
\t\t\t\t\t";
        // line 255
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_phonenumber_required")) {
            // line 256
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["phone_number_required"]) ? $context["phone_number_required"] : null), "html_attr");
            echo "\"
\t\t\t\t\t\trequired=\"true\"
\t\t\t\t\t";
        } else {
            // line 259
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["phone_number"]) ? $context["phone_number"] : null), "html_attr");
            echo "\"
\t\t\t\t\t";
        }
        // line 261
        echo "\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-8\">
\t\t\t\t<input type=\"text\" id=\"ai1ec_contact_url\" name=\"ai1ec_contact_url\"
\t\t\t\t\t";
        // line 265
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_contact_required")) {
            // line 266
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["external_website_required"]) ? $context["external_website_required"] : null), "html_attr");
            echo "\"
\t\t\t\t\t\trequired=\"true\"
\t\t\t\t\t";
        } else {
            // line 269
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, (isset($context["external_website"]) ? $context["external_website"] : null), "html_attr");
            echo "\"
\t\t\t\t\t";
        }
        // line 271
        echo "\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 277
        echo "\t";
        if ((isset($context["allow_uploads"]) ? $context["allow_uploads"] : null)) {
            // line 278
            echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-3\">
\t\t\t\t<label for=\"ai1ec-image\" class=\"ai1ec-file-upload-label\">
\t\t\t\t";
            // line 281
            if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_image_required")) {
                // line 282
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["image_label_required"]) ? $context["image_label_required"] : null), "html", null, true);
                echo "
\t\t\t\t";
            } else {
                // line 284
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["image_label"]) ? $context["image_label"] : null), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 286
            echo "\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-9\">
\t\t\t\t<div class=\"ai1ec-fileupload ai1ec-fileupload-new\" data-provides=\"fileupload\">
\t\t\t\t\t<div class=\"ai1ec-fileupload-new ai1ec-thumbnail\">
\t\t\t\t\t\t<img src=\"";
            // line 291
            echo twig_escape_filter($this->env, (isset($context["default_image"]) ? $context["default_image"] : null), "html_attr");
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ai1ec-fileupload-preview ai1ec-fileupload-exists ai1ec-thumbnail\"></div>
\t\t\t\t\t<span class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-file\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-picture-o ai1ec-fa-fw\"></i>
\t\t\t\t\t\t<span class=\"ai1ec-fileupload-new\">
\t\t\t\t\t\t\t";
            // line 297
            echo twig_escape_filter($this->env, (isset($context["select_image_label"]) ? $context["select_image_label"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"ai1ec-fileupload-exists\">
\t\t\t\t\t\t\t";
            // line 300
            echo twig_escape_filter($this->env, (isset($context["change_label"]) ? $context["change_label"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input type=\"file\" name=\"ai1ec_image\" ";
            // line 302
            if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_image_required")) {
                echo " required=\"true\" placeholder=\"";
                echo twig_escape_filter($this->env, (isset($context["image_label_required"]) ? $context["image_label_required"] : null), "html", null, true);
                echo "\"";
            }
            echo ">
\t\t\t\t\t</span>
\t\t\t\t\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-default ai1ec-text-danger ai1ec-fileupload-exists\" data-dismiss=\"fileupload\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-times\"></i>
\t\t\t\t\t\t";
            // line 306
            echo twig_escape_filter($this->env, (isset($context["remove_label"]) ? $context["remove_label"] : null), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 312
        echo "
\t";
        // line 313
        if ((array_key_exists("form_captcha_challenge", $context) && (isset($context["form_captcha_challenge"]) ? $context["form_captcha_challenge"] : null))) {
            // line 314
            echo "\t\t";
            echo (isset($context["form_captcha_challenge"]) ? $context["form_captcha_challenge"] : null);
            echo "
\t";
        }
        // line 316
        echo "
\t";
        // line 317
        if ((isset($context["require_disclaimer"]) ? $context["require_disclaimer"] : null)) {
            // line 318
            echo "\t\t<div class=\"ai1ec-alert ai1ec-alert-danger ai1ec-hide ai1ec-required-disclaimer\">
\t\t\t";
            // line 319
            echo twig_escape_filter($this->env, (isset($context["submit_event_agreement"]) ? $context["submit_event_agreement"] : null), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 322
        echo "
\t";
        // line 323
        if ((isset($context["require_disclaimer"]) ? $context["require_disclaimer"] : null)) {
            // line 324
            echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t\t<label for=\"require_disclaimer\" class=\"ai1ec-checkbox\">
\t\t\t\t\t<input type=\"checkbox\" id=\"require_disclaimer\" value=\"1\" />
\t\t\t\t\t\t";
            // line 328
            echo sprintf((isset($context["submit_event_agreed"]) ? $context["submit_event_agreed"] : null), "data-toggle=\"ai1ec-collapse\" data-target=\"#show_disclaimer\" class=\"ai1ec-collapsible-toggle\" id=\"open_require_disclaimer\"");
            // line 329
            echo "
\t\t\t\t</label>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ai1ec-form-group ai1ec-collapse\" id=\"show_disclaimer\">
\t\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t\t<div class=\"well well-small\">
\t\t\t\t\t";
            // line 336
            echo (isset($context["disclaimer"]) ? $context["disclaimer"] : null);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 341
        echo "
</div>

<div class=\"ai1ec-modal-footer\">
\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary ai1ec-submit\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-upload ai1ec-fa-fw\"></i>
\t\t";
        // line 347
        echo twig_escape_filter($this->env, (isset($context["submit_event"]) ? $context["submit_event"] : null), "html", null, true);
        echo "
\t\t<i class=\"ai1ec-fa ai1ec-chevron-right\"></i>
\t</a>
</div>

</form>
";
    }

    public function getTemplateName()
    {
        return "create-event-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  677 => 347,  669 => 341,  661 => 336,  652 => 329,  650 => 328,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 297,  574 => 291,  567 => 286,  561 => 284,  555 => 282,  553 => 281,  548 => 278,  545 => 277,  538 => 271,  532 => 269,  525 => 266,  523 => 265,  517 => 261,  511 => 259,  504 => 256,  502 => 255,  497 => 252,  489 => 246,  481 => 241,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 215,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 184,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 157,  295 => 156,  288 => 151,  282 => 149,  275 => 146,  273 => 145,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  247 => 131,  242 => 128,  236 => 123,  229 => 121,  212 => 118,  207 => 117,  203 => 116,  192 => 110,  183 => 103,  170 => 95,  138 => 74,  128 => 69,  107 => 54,  91 => 44,  80 => 39,  66 => 29,  61 => 26,  43 => 12,  73 => 18,  64 => 15,  55 => 12,  88 => 23,  79 => 23,  75 => 36,  68 => 20,  57 => 18,  118 => 43,  96 => 33,  85 => 22,  69 => 20,  60 => 16,  58 => 13,  49 => 19,  36 => 10,  204 => 84,  196 => 112,  177 => 100,  171 => 73,  165 => 69,  163 => 63,  158 => 61,  154 => 60,  150 => 59,  146 => 58,  142 => 57,  136 => 56,  130 => 54,  105 => 36,  101 => 51,  93 => 42,  87 => 29,  81 => 24,  74 => 32,  67 => 23,  65 => 19,  59 => 18,  53 => 14,  44 => 8,  25 => 3,  21 => 2,  77 => 34,  70 => 24,  62 => 21,  54 => 17,  50 => 15,  29 => 6,  40 => 11,  38 => 5,  27 => 7,  218 => 120,  216 => 119,  208 => 116,  201 => 115,  199 => 82,  188 => 109,  179 => 102,  173 => 98,  167 => 95,  162 => 89,  160 => 91,  155 => 85,  145 => 78,  141 => 81,  134 => 73,  126 => 71,  124 => 66,  121 => 65,  119 => 62,  113 => 58,  109 => 57,  104 => 56,  100 => 55,  92 => 32,  84 => 40,  76 => 19,  72 => 21,  63 => 21,  56 => 24,  51 => 10,  30 => 7,  46 => 18,  32 => 8,  26 => 4,  23 => 3,  48 => 15,  33 => 7,  28 => 5,  24 => 3,  41 => 11,  39 => 10,  37 => 10,  35 => 9,  31 => 7,  19 => 1,);
    }
}
