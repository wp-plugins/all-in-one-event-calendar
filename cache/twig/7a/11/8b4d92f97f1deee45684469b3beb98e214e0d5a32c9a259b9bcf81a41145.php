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
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Post Your Event"), "html", null, true);
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
        echo sprintf(Ai1ec_I18n::__("The %s field is required."), "<em></em>");
        echo "
\t</div>

\t<div class=\"ai1ec-alert ai1ec-alert-danger ai1ec-hide ai1ec-submit-error\"></div>

\t";
        // line 25
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t<input type=\"text\" id=\"ai1ec-event-title\" name=\"post_title\"
\t\t\t\tplaceholder=\"";
        // line 28
        echo twig_escape_filter($this->env, "Event Title (required)", "html_attr");
        echo "\"
\t\t\t\trequired=\"true\" class=\"ai1ec-form-control\">
\t\t</div>
\t</div>

\t<div class=\"ai1ec-form-group\">
\t\t";
        // line 35
        echo "\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<div class=\"ai1ec-form-group ai1ec-start-time\">
\t\t\t\t<div class=\"ai1ec-col-xs-6\">
\t\t\t\t\t<input data-date-format=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["date_format_pattern"]) ? $context["date_format_pattern"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\tdata-date-weekstart=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["week_start_day"]) ? $context["week_start_day"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\tid=\"ai1ec-start-date-input\" type=\"text\"
\t\t\t\t\t\trequired=\"true\" readonly=\"readonly\"
\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-datepicker\"
\t\t\t\t\t\tplaceholder=\"";
        // line 43
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Date (required)"), "html_attr");
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"ai1ec-col-xs-6\">
\t\t\t\t\t<div id=\"ai1ec-start-time-input-wrap\"
\t\t\t\t\t\tclass=\"ai1ec-collapse bootstrap-timepicker\">
\t\t\t\t\t\t<input id=\"ai1ec-start-time-input\" type=\"text\"
\t\t\t\t\t\t\tdata-show-meridian=\"";
        // line 50
        echo (((isset($context["input_24h_time"]) ? $context["input_24h_time"] : null)) ? ("false") : ("true"));
        echo "\"
\t\t\t\t\t\t\tdisabled=\"disabled\"
\t\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-timepicker ai1ec-tooltip-trigger\"
\t\t\t\t\t\t\tplaceholder=\"";
        // line 53
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Time"), "html_attr");
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 57
        echo "\t\t\t\t\t<label for=\"ai1ec-has-time\" class=\"ai1ec-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"ai1ec-has-time\"
\t\t\t\t\t\t\tvalue=\"1\" disabled=\"disabled\" data-toggle=\"ai1ec-collapse\"
\t\t\t\t\t\t\tdata-target=\"#ai1ec-start-time-input-wrap\">
\t\t\t\t\t\t";
        // line 61
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add time"), "html", null, true);
        echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 68
        echo "\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<div id=\"ai1ec-end-time-wrap\" class=\"ai1ec-collapse ai1ec-row\">
\t\t\t\t<div class=\"ai1ec-col-xs-6\">
\t\t\t\t\t<input
\t\t\t\t\t\tdata-date-format=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["date_format_pattern"]) ? $context["date_format_pattern"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\tdata-date-weekstart=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["week_start_day"]) ? $context["week_start_day"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\tid=\"ai1ec-end-date-input\" type=\"text\"
\t\t\t\t\t\treadonly=\"readonly\" disabled=\"disabled\"
\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-datepicker\"
\t\t\t\t\t\tplaceholder=\"";
        // line 77
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("End date"), "html_attr");
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"ai1ec-col-xs-6\">
\t\t\t\t\t<div id=\"ai1ec-end-time-input-wrap\"
\t\t\t\t\t\tclass=\"ai1ec-collapse bootstrap-timepicker\">
\t\t\t\t\t\t<input id=\"ai1ec-end-time-input\" type=\"text\"
\t\t\t\t\t\t\tdata-show-meridian=\"";
        // line 84
        echo (((isset($context["input_24h_time"]) ? $context["input_24h_time"] : null)) ? ("false") : ("true"));
        echo "\"
\t\t\t\t\t\t\tdata-alignment=\"right\"
\t\t\t\t\t\t\tdisabled=\"disabled\"
\t\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-timepicker ai1ec-tooltip-trigger\"
\t\t\t\t\t\t\tplaceholder=\"";
        // line 88
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("End time"), "html_attr");
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 94
        echo "\t\t\t<label for=\"ai1ec-has-end-time\" class=\"ai1ec-checkbox\">
\t\t\t\t<input type=\"checkbox\" id=\"ai1ec-has-end-time\"
\t\t\t\t\tvalue=\"1\" disabled=\"disabled\" data-toggle=\"ai1ec-collapse\"
\t\t\t\t\tdata-target=\"#ai1ec-end-time-wrap\">
\t\t\t\t<span class=\"ai1ec-without-time\">
\t\t\t\t\t";
        // line 99
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add end date"), "html", null, true);
        echo "
\t\t\t\t</span>
\t\t\t\t<span class=\"ai1ec-with-time\">
\t\t\t\t\t";
        // line 102
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add end date/time"), "html", null, true);
        echo "
\t\t\t\t</span>
\t\t\t</label>
\t\t</div>
\t</div>

\t";
        // line 109
        echo "\t<div class=\"ai1ec-form-group ai1ec-timezone-select\">
\t\t<div class=\"ai1ec-col-sm-3 ai1ec-timezone-label\">
\t\t\t<label>";
        // line 111
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Time zone:"), "html", null, true);
        echo "</label>
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-9\">
\t\t\t<select id=\"ai1ec_timezone_name\" name=\"ai1ec_timezone_name\" class=\"ai1ec-timezone-select ai1ec-form-control\">
\t\t\t\t";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timezones_list"]) ? $context["timezones_list"] : null));
        foreach ($context['_seq'] as $context["group"] => $context["timezones"]) {
            // line 116
            echo "\t\t\t\t\t<optgroup label=\"";
            echo twig_escape_filter($this->env, (isset($context["group"]) ? $context["group"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 117
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["timezones"]) ? $context["timezones"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
                // line 118
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
            // line 120
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['timezones'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "\t\t\t</select>
\t\t</div>
\t</div>

\t";
        // line 127
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t<input type=\"text\" id=\"ai1ec_venue\" name=\"ai1ec_venue\"
\t\t\t\t";
        // line 130
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_venue_required")) {
            // line 131
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Venue name (required)"), "html_attr");
            echo "\"
\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 134
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Venue name"), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 136
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t</div>

\t";
        // line 141
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-9\">
\t\t\t<input type=\"text\" id=\"ai1ec_address\" name=\"ai1ec_address\"
\t\t\t\t";
        // line 144
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_address_required")) {
            // line 145
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Address (required)"), "html_attr");
            echo "\"
\t\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 148
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Address"), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 150
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-3\">
\t\t\t<label for=\"ai1ec-google-map\" class=\"ai1ec-checkbox\">
\t\t\t\t<input type=\"checkbox\" id=\"ai1ec-google-map\" name=\"ai1ec_google_map\"
\t\t\t\t\t";
        // line 155
        if ((isset($context["interactive_gmaps"]) ? $context["interactive_gmaps"] : null)) {
            // line 156
            echo "\t\t\t\t\t\tdata-toggle=\"ai1ec-collapse\" data-target=\"#ai1ec-map-wrap\"
\t\t\t\t\t";
        }
        // line 158
        echo "\t\t\t\t\tdisabled=\"disabled\">
\t\t\t\t";
        // line 159
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Include map"), "html", null, true);
        echo "
\t\t\t</label>
\t\t</div>
\t</div>

\t";
        // line 165
        echo "\t";
        if ((isset($context["interactive_gmaps"]) ? $context["interactive_gmaps"] : null)) {
            // line 166
            echo "\t\t<div id=\"ai1ec-map-wrap\" class=\"ai1ec-collapse\">
\t\t\t<div id=\"ai1ec_map_canvas\"></div>
\t\t</div>
\t";
        }
        // line 170
        echo "
\t";
        // line 172
        echo "\t<div class=\"ai1ec-form-group\">

\t\t";
        // line 174
        if ((!twig_test_empty((isset($context["cat_select"]) ? $context["cat_select"] : null)))) {
            // line 175
            echo "\t\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t\t";
            // line 176
            echo (isset($context["cat_select"]) ? $context["cat_select"] : null);
            echo "
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t\t";
            // line 179
            echo (isset($context["tag_select"]) ? $context["tag_select"] : null);
            echo "
\t\t\t</div>
\t\t";
        } else {
            // line 182
            echo "\t\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t\t";
            // line 183
            echo (isset($context["tag_select"]) ? $context["tag_select"] : null);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 186
        echo "
\t</div>

\t";
        // line 190
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t<textarea id=\"ai1ec-description\" name=\"post_content\" class=\"ai1ec-form-control\" rows=\"4\"
\t\t\t\t";
        // line 193
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_description_required")) {
            // line 194
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Description (required)"), "html_attr");
            echo "\"
\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 197
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Description"), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 199
        echo "\t\t\t\t></textarea>
\t\t</div>
\t</div>

\t";
        // line 204
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<input type=\"text\" id=\"ai1ec_contact_name\" name=\"ai1ec_contact_name\"
\t\t\t";
        // line 207
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_organizer_name_required")) {
            // line 208
            echo "\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Organizer name (required)"), "html_attr");
            echo "\"
\t\t\t\trequired=\"true\"
\t\t\t";
        } else {
            // line 211
            echo "\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Organizer name"), "html_attr");
            echo "\"
\t\t\t";
        }
        // line 213
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<input type=\"text\" id=\"ai1ec_contact_email\" name=\"ai1ec_contact_email\"
\t\t\t\t";
        // line 217
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_organizer_email_required")) {
            // line 218
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Organizer email (required)"), "html_attr");
            echo "\"
\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 221
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Organizer email"), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 223
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t</div>

\t<div id=\"ai1ec-extra-fields\">
\t\t";
        // line 229
        echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-4\">
\t\t\t\t<div id=\"ai1ec_cost_wrap\" class=\"ai1ec-collapse\">
\t\t\t\t\t<input type=\"text\" id=\"ai1ec_cost\" name=\"ai1ec_cost\"
\t\t\t\t\t\tplaceholder=\"";
        // line 233
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Cost"), "html_attr");
        echo "\"
\t\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t\t</div>
\t\t\t\t<label for=\"ai1ec_is_free\" class=\"ai1ec-checkbox\">
\t\t\t\t\t<input type=\"checkbox\"
\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\tname=\"ai1ec_is_free\"
\t\t\t\t\t\tdata-toggle=\"ai1ec-collapse\"
\t\t\t\t\t\tdata-target=\"#ai1ec_cost_wrap\"
\t\t\t\t\t\tid=\"ai1ec_is_free\"
\t\t\t\t\t\tvalue=\"1\">
\t\t\t\t\t";
        // line 244
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Free"), "html", null, true);
        echo "
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-8\">
\t\t\t\t<input type=\"text\" id=\"ai1ec_ticket_url\" name=\"ai1ec_ticket_url\"
\t\t\t\t\tplaceholder=\"";
        // line 249
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Registration URL"), "html_attr");
        echo "\"
\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t</div>
\t\t</div>

\t\t";
        // line 255
        echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-4\">
\t\t\t\t<input type=\"text\" id=\"ai1ec_contact_phone\" name=\"ai1ec_contact_phone\"
\t\t\t\t\t";
        // line 258
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_phonenumber_required")) {
            // line 259
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Phone number (required)"), "html_attr");
            echo "\"
\t\t\t\t\t\trequired=\"true\"
\t\t\t\t\t";
        } else {
            // line 262
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Phone number"), "html_attr");
            echo "\"
\t\t\t\t\t";
        }
        // line 264
        echo "\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-8\">
\t\t\t\t<input type=\"text\" id=\"ai1ec_contact_url\" name=\"ai1ec_contact_url\"
\t\t\t\t\t";
        // line 268
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_contact_required")) {
            // line 269
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("External website URL (required)"), "html_attr");
            echo "\"
\t\t\t\t\t\trequired=\"true\"
\t\t\t\t\t";
        } else {
            // line 272
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("External website URL"), "html_attr");
            echo "\"
\t\t\t\t\t";
        }
        // line 274
        echo "\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 280
        echo "\t";
        if ((isset($context["allow_uploads"]) ? $context["allow_uploads"] : null)) {
            // line 281
            echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-3\">
\t\t\t\t<label for=\"ai1ec-image\" class=\"ai1ec-file-upload-label\">
\t\t\t\t\t";
            // line 284
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Image:"), "html", null, true);
            echo "
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-9\">
\t\t\t\t<div class=\"ai1ec-fileupload ai1ec-fileupload-new\" data-provides=\"fileupload\">
\t\t\t\t\t<div class=\"ai1ec-fileupload-new ai1ec-thumbnail\">
\t\t\t\t\t\t<img src=\"";
            // line 290
            echo twig_escape_filter($this->env, (isset($context["default_image"]) ? $context["default_image"] : null), "html_attr");
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ai1ec-fileupload-preview ai1ec-fileupload-exists ai1ec-thumbnail\"></div>
\t\t\t\t\t<span class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-file\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-picture-o ai1ec-fa-fw\"></i>
\t\t\t\t\t\t<span class=\"ai1ec-fileupload-new\">
\t\t\t\t\t\t\t";
            // line 296
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Select image"), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"ai1ec-fileupload-exists\">
\t\t\t\t\t\t\t";
            // line 299
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Change"), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input type=\"file\" name=\"ai1ec_image\">
\t\t\t\t\t</span>
\t\t\t\t\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-default ai1ec-text-danger ai1ec-fileupload-exists\" data-dismiss=\"fileupload\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-times\"></i>
\t\t\t\t\t\t";
            // line 305
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Remove"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 311
        echo "
\t";
        // line 313
        echo "\t";
        if ((isset($context["recaptcha_key"]) ? $context["recaptcha_key"] : null)) {
            // line 314
            echo "\t\t<div class=\"ai1ec-recaptcha\"
\t\t\tdata-placeholder=\"";
            // line 315
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Verification words"), "html_attr");
            echo "\"
\t\t\tdata-recaptcha-key=\"";
            // line 316
            echo twig_escape_filter($this->env, (isset($context["recaptcha_key"]) ? $context["recaptcha_key"] : null), "html_attr");
            echo "\">
\t\t\t<div class=\"ai1ec-initializing-message\">
\t\t\t\t";
            // line 318
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Loading reCAPTCHA..."), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 322
        echo "
\t";
        // line 323
        if ((isset($context["require_disclaimer"]) ? $context["require_disclaimer"] : null)) {
            // line 324
            echo "\t\t<div class=\"ai1ec-alert ai1ec-alert-danger ai1ec-hide ai1ec-required-disclaimer\">
\t\t\t";
            // line 325
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("You must check the checkbox stating you agree to the posting rules to submit the event."), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 328
        echo "
\t";
        // line 329
        if ((isset($context["require_disclaimer"]) ? $context["require_disclaimer"] : null)) {
            // line 330
            echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t\t<label for=\"require_disclaimer\" class=\"ai1ec-checkbox\">
\t\t\t\t\t<input type=\"checkbox\" id=\"require_disclaimer\" value=\"1\" />
\t\t\t\t\t\t";
            // line 334
            echo sprintf(Ai1ec_I18n::__("I have read and agreed that this event conforms to the <a %s>posting rules</a>"), "data-toggle=\"ai1ec-collapse\" data-target=\"#show_disclaimer\" class=\"ai1ec-collapsible-toggle\" id=\"open_require_disclaimer\"");
            // line 336
            echo "
\t\t\t\t</label>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ai1ec-form-group ai1ec-collapse\" id=\"show_disclaimer\">
\t\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t\t<div class=\"well well-small\">
\t\t\t\t\t";
            // line 343
            echo (isset($context["disclaimer"]) ? $context["disclaimer"] : null);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 348
        echo "
</div>

<div class=\"ai1ec-modal-footer\">
\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary ai1ec-submit\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-upload ai1ec-fa-fw\"></i>
\t\t";
        // line 354
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Submit Event"), "html", null, true);
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
        return array (  640 => 354,  632 => 348,  624 => 343,  615 => 336,  613 => 334,  607 => 330,  605 => 329,  602 => 328,  596 => 325,  593 => 324,  591 => 323,  588 => 322,  581 => 318,  576 => 316,  572 => 315,  569 => 314,  566 => 313,  563 => 311,  554 => 305,  545 => 299,  539 => 296,  530 => 290,  521 => 284,  516 => 281,  513 => 280,  506 => 274,  500 => 272,  493 => 269,  491 => 268,  485 => 264,  479 => 262,  472 => 259,  470 => 258,  465 => 255,  457 => 249,  449 => 244,  435 => 233,  429 => 229,  422 => 223,  416 => 221,  409 => 218,  407 => 217,  401 => 213,  395 => 211,  388 => 208,  386 => 207,  381 => 204,  375 => 199,  369 => 197,  362 => 194,  360 => 193,  355 => 190,  350 => 186,  344 => 183,  341 => 182,  335 => 179,  329 => 176,  326 => 175,  324 => 174,  320 => 172,  317 => 170,  311 => 166,  308 => 165,  300 => 159,  297 => 158,  293 => 156,  291 => 155,  284 => 150,  278 => 148,  271 => 145,  269 => 144,  264 => 141,  258 => 136,  245 => 131,  243 => 130,  238 => 127,  225 => 120,  212 => 118,  208 => 117,  203 => 116,  192 => 111,  188 => 109,  179 => 102,  166 => 94,  158 => 88,  141 => 77,  134 => 73,  124 => 68,  115 => 61,  109 => 57,  97 => 50,  80 => 39,  71 => 35,  62 => 28,  49 => 19,  35 => 9,  30 => 7,  63 => 21,  57 => 25,  54 => 17,  43 => 12,  31 => 7,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 24,  64 => 15,  55 => 12,  52 => 11,  48 => 15,  46 => 18,  41 => 7,  37 => 10,  32 => 4,  22 => 2,  265 => 123,  259 => 120,  252 => 134,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 122,  229 => 107,  227 => 106,  219 => 100,  213 => 96,  205 => 93,  201 => 91,  199 => 115,  196 => 89,  190 => 86,  186 => 84,  184 => 83,  181 => 82,  173 => 99,  169 => 77,  167 => 76,  162 => 73,  160 => 72,  157 => 71,  151 => 84,  149 => 68,  142 => 63,  135 => 59,  130 => 72,  128 => 55,  125 => 54,  117 => 49,  113 => 48,  108 => 45,  106 => 44,  103 => 53,  94 => 39,  89 => 36,  87 => 43,  84 => 34,  76 => 38,  72 => 27,  67 => 23,  65 => 23,  61 => 14,  56 => 19,  53 => 18,  51 => 17,  40 => 11,  34 => 5,  28 => 3,  26 => 4,  36 => 4,  23 => 3,  19 => 1,);
    }
}
