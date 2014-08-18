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
\t\t\t\t\t\t\ttitle=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["timezone_expr"]) ? $context["timezone_expr"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\t\tdata-show-meridian=\"";
        // line 51
        echo (((isset($context["input_24h_time"]) ? $context["input_24h_time"] : null)) ? ("false") : ("true"));
        echo "\"
\t\t\t\t\t\t\treadonly=\"readonly\" disabled=\"disabled\"
\t\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-timepicker ai1ec-tooltip-trigger\"
\t\t\t\t\t\t\tplaceholder=\"";
        // line 54
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Time"), "html_attr");
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
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add time"), "html", null, true);
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
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("End date"), "html_attr");
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"ai1ec-col-xs-6\">
\t\t\t\t\t<div id=\"ai1ec-end-time-input-wrap\"
\t\t\t\t\t\tclass=\"ai1ec-collapse bootstrap-timepicker\">
\t\t\t\t\t\t<input id=\"ai1ec-end-time-input\" type=\"text\"
\t\t\t\t\t\t\ttitle=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["timezone_expr"]) ? $context["timezone_expr"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\t\tdata-show-meridian=\"";
        // line 86
        echo (((isset($context["input_24h_time"]) ? $context["input_24h_time"] : null)) ? ("false") : ("true"));
        echo "\"
\t\t\t\t\t\t\tdata-alignment=\"right\"
\t\t\t\t\t\t\treadonly=\"readonly\" disabled=\"disabled\"
\t\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-timepicker ai1ec-tooltip-trigger\"
\t\t\t\t\t\t\tplaceholder=\"";
        // line 90
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("End time"), "html_attr");
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 96
        echo "\t\t\t<label for=\"ai1ec-has-end-time\" class=\"ai1ec-checkbox\">
\t\t\t\t<input type=\"checkbox\" id=\"ai1ec-has-end-time\"
\t\t\t\t\tvalue=\"1\" disabled=\"disabled\" data-toggle=\"ai1ec-collapse\"
\t\t\t\t\tdata-target=\"#ai1ec-end-time-wrap\">
\t\t\t\t<span class=\"ai1ec-without-time\">
\t\t\t\t\t";
        // line 101
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add end date"), "html", null, true);
        echo "
\t\t\t\t</span>
\t\t\t\t<span class=\"ai1ec-with-time\">
\t\t\t\t\t";
        // line 104
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add end date/time"), "html", null, true);
        echo "
\t\t\t\t</span>
\t\t\t</label>
\t\t</div>
\t</div>

\t";
        // line 111
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t<input type=\"text\" id=\"ai1ec_venue\" name=\"ai1ec_venue\"
\t\t\t\t";
        // line 114
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_venue_required")) {
            // line 115
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Venue name (required)"), "html_attr");
            echo "\"
\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 118
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Venue name"), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 120
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t</div>

\t";
        // line 125
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-9\">
\t\t\t<input type=\"text\" id=\"ai1ec_address\" name=\"ai1ec_address\"
\t\t\t\t";
        // line 128
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_address_required")) {
            // line 129
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Address (required)"), "html_attr");
            echo "\"
\t\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 132
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Address"), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 134
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-3\">
\t\t\t<label for=\"ai1ec-google-map\" class=\"ai1ec-checkbox\">
\t\t\t\t<input type=\"checkbox\" id=\"ai1ec-google-map\" name=\"ai1ec_google_map\"
\t\t\t\t\t";
        // line 139
        if ((isset($context["interactive_gmaps"]) ? $context["interactive_gmaps"] : null)) {
            // line 140
            echo "\t\t\t\t\t\tdata-toggle=\"ai1ec-collapse\" data-target=\"#ai1ec-map-wrap\"
\t\t\t\t\t";
        }
        // line 142
        echo "\t\t\t\t\tdisabled=\"disabled\">
\t\t\t\t";
        // line 143
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Include map"), "html", null, true);
        echo "
\t\t\t</label>
\t\t</div>
\t</div>

\t";
        // line 149
        echo "\t";
        if ((isset($context["interactive_gmaps"]) ? $context["interactive_gmaps"] : null)) {
            // line 150
            echo "\t\t<div id=\"ai1ec-map-wrap\" class=\"ai1ec-collapse\">
\t\t\t<div id=\"ai1ec_map_canvas\"></div>
\t\t</div>
\t";
        }
        // line 154
        echo "
\t";
        // line 156
        echo "\t<div class=\"ai1ec-form-group\">

\t\t";
        // line 158
        if ((!twig_test_empty((isset($context["cat_select"]) ? $context["cat_select"] : null)))) {
            // line 159
            echo "\t\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t\t";
            // line 160
            echo (isset($context["cat_select"]) ? $context["cat_select"] : null);
            echo "
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t\t";
            // line 163
            echo (isset($context["tag_select"]) ? $context["tag_select"] : null);
            echo "
\t\t\t</div>
\t\t";
        } else {
            // line 166
            echo "\t\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t\t";
            // line 167
            echo (isset($context["tag_select"]) ? $context["tag_select"] : null);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 170
        echo "
\t</div>

\t";
        // line 174
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t<textarea id=\"ai1ec-description\" name=\"post_content\" class=\"ai1ec-form-control\" rows=\"4\"
\t\t\t\t";
        // line 177
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_description_required")) {
            // line 178
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Description (required)"), "html_attr");
            echo "\"
\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 181
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Description"), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 183
        echo "\t\t\t\t></textarea>
\t\t</div>
\t</div>

\t";
        // line 188
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<input type=\"text\" id=\"ai1ec_contact_name\" name=\"ai1ec_contact_name\"
\t\t\t";
        // line 191
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_organizer_name_required")) {
            // line 192
            echo "\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Organizer name (required)"), "html_attr");
            echo "\"
\t\t\t\trequired=\"true\"
\t\t\t";
        } else {
            // line 195
            echo "\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Organizer name"), "html_attr");
            echo "\"
\t\t\t";
        }
        // line 197
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<input type=\"text\" id=\"ai1ec_contact_email\" name=\"ai1ec_contact_email\"
\t\t\t\t";
        // line 201
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_organizer_email_required")) {
            // line 202
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Organizer email (required)"), "html_attr");
            echo "\"
\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 205
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Organizer email"), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 207
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t</div>

\t<div id=\"ai1ec-extra-fields\">
\t\t";
        // line 213
        echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-4\">
\t\t\t\t<div id=\"ai1ec_cost_wrap\" class=\"ai1ec-collapse\">
\t\t\t\t\t<input type=\"text\" id=\"ai1ec_cost\" name=\"ai1ec_cost\"
\t\t\t\t\t\tplaceholder=\"";
        // line 217
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
        // line 228
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Free"), "html", null, true);
        echo "
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-8\">
\t\t\t\t<input type=\"text\" id=\"ai1ec_ticket_url\" name=\"ai1ec_ticket_url\"
\t\t\t\t\tplaceholder=\"";
        // line 233
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Registration URL"), "html_attr");
        echo "\"
\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t</div>
\t\t</div>

\t\t";
        // line 239
        echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-4\">
\t\t\t\t<input type=\"text\" id=\"ai1ec_contact_phone\" name=\"ai1ec_contact_phone\"
\t\t\t\t\t";
        // line 242
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_phonenumber_required")) {
            // line 243
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Phone number (required)"), "html_attr");
            echo "\"
\t\t\t\t\t\trequired=\"true\"
\t\t\t\t\t";
        } else {
            // line 246
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Phone number"), "html_attr");
            echo "\"
\t\t\t\t\t";
        }
        // line 248
        echo "\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-8\">
\t\t\t\t<input type=\"text\" id=\"ai1ec_contact_url\" name=\"ai1ec_contact_url\"
\t\t\t\t\t";
        // line 252
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_contact_required")) {
            // line 253
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("External website URL (required)"), "html_attr");
            echo "\"
\t\t\t\t\t\trequired=\"true\"
\t\t\t\t\t";
        } else {
            // line 256
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("External website URL"), "html_attr");
            echo "\"
\t\t\t\t\t";
        }
        // line 258
        echo "\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 264
        echo "\t";
        if ((isset($context["allow_uploads"]) ? $context["allow_uploads"] : null)) {
            // line 265
            echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-3\">
\t\t\t\t<label for=\"ai1ec-image\" class=\"ai1ec-file-upload-label\">
\t\t\t\t\t";
            // line 268
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Image:"), "html", null, true);
            echo "
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-9\">
\t\t\t\t<div class=\"ai1ec-fileupload ai1ec-fileupload-new\" data-provides=\"fileupload\">
\t\t\t\t\t<div class=\"ai1ec-fileupload-new ai1ec-thumbnail\">
\t\t\t\t\t\t<img src=\"";
            // line 274
            echo twig_escape_filter($this->env, (isset($context["default_image"]) ? $context["default_image"] : null), "html_attr");
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ai1ec-fileupload-preview ai1ec-fileupload-exists ai1ec-thumbnail\"></div>
\t\t\t\t\t<span class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-file\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-picture-o ai1ec-fa-fw\"></i>
\t\t\t\t\t\t<span class=\"ai1ec-fileupload-new\">
\t\t\t\t\t\t\t";
            // line 280
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Select image"), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"ai1ec-fileupload-exists\">
\t\t\t\t\t\t\t";
            // line 283
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Change"), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input type=\"file\" name=\"ai1ec_image\">
\t\t\t\t\t</span>
\t\t\t\t\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-default ai1ec-text-danger ai1ec-fileupload-exists\" data-dismiss=\"fileupload\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-times\"></i>
\t\t\t\t\t\t";
            // line 289
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Remove"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 295
        echo "
\t";
        // line 297
        echo "\t";
        if ((isset($context["recaptcha_key"]) ? $context["recaptcha_key"] : null)) {
            // line 298
            echo "\t\t<div class=\"ai1ec-recaptcha\"
\t\t\tdata-placeholder=\"";
            // line 299
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Verification words"), "html_attr");
            echo "\"
\t\t\tdata-recaptcha-key=\"";
            // line 300
            echo twig_escape_filter($this->env, (isset($context["recaptcha_key"]) ? $context["recaptcha_key"] : null), "html_attr");
            echo "\">
\t\t\t<div class=\"ai1ec-initializing-message\">
\t\t\t\t";
            // line 302
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Loading reCAPTCHA..."), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 306
        echo "
\t";
        // line 307
        if ((isset($context["require_disclaimer"]) ? $context["require_disclaimer"] : null)) {
            // line 308
            echo "\t\t<div class=\"ai1ec-alert ai1ec-alert-danger ai1ec-hide ai1ec-required-disclaimer\">
\t\t\t";
            // line 309
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("You must check the checkbox stating you agree to the posting rules to submit the event."), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 312
        echo "
\t";
        // line 313
        if ((isset($context["require_disclaimer"]) ? $context["require_disclaimer"] : null)) {
            // line 314
            echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t\t<label for=\"require_disclaimer\" class=\"ai1ec-checkbox\">
\t\t\t\t\t<input type=\"checkbox\" id=\"require_disclaimer\" value=\"1\" />
\t\t\t\t\t\t";
            // line 318
            echo sprintf(Ai1ec_I18n::__("I have read and agreed that this event conforms to the <a %s>posting rules</a>"), "data-toggle=\"ai1ec-collapse\" data-target=\"#show_disclaimer\" class=\"ai1ec-collapsible-toggle\" id=\"open_require_disclaimer\"");
            // line 320
            echo "
\t\t\t\t</label>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ai1ec-form-group ai1ec-collapse\" id=\"show_disclaimer\">
\t\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t\t<div class=\"well well-small\">
\t\t\t\t\t";
            // line 327
            echo (isset($context["disclaimer"]) ? $context["disclaimer"] : null);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 332
        echo "
</div>

<div class=\"ai1ec-modal-footer\">
\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary ai1ec-submit\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-upload ai1ec-fa-fw\"></i>
\t\t";
        // line 338
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
        return array (  598 => 338,  590 => 332,  582 => 327,  573 => 320,  571 => 318,  565 => 314,  563 => 313,  560 => 312,  554 => 309,  551 => 308,  549 => 307,  546 => 306,  539 => 302,  534 => 300,  530 => 299,  527 => 298,  524 => 297,  521 => 295,  512 => 289,  503 => 283,  497 => 280,  488 => 274,  479 => 268,  474 => 265,  471 => 264,  464 => 258,  458 => 256,  451 => 253,  449 => 252,  443 => 248,  437 => 246,  430 => 243,  428 => 242,  423 => 239,  415 => 233,  407 => 228,  393 => 217,  387 => 213,  380 => 207,  374 => 205,  367 => 202,  365 => 201,  359 => 197,  353 => 195,  346 => 192,  344 => 191,  339 => 188,  333 => 183,  327 => 181,  320 => 178,  318 => 177,  313 => 174,  308 => 170,  302 => 167,  299 => 166,  293 => 163,  287 => 160,  284 => 159,  282 => 158,  278 => 156,  275 => 154,  269 => 150,  266 => 149,  258 => 143,  255 => 142,  251 => 140,  249 => 139,  242 => 134,  236 => 132,  222 => 125,  216 => 120,  210 => 118,  203 => 115,  187 => 104,  174 => 96,  166 => 90,  159 => 86,  155 => 85,  145 => 78,  138 => 74,  134 => 73,  119 => 62,  107 => 54,  101 => 51,  97 => 50,  80 => 39,  71 => 35,  62 => 28,  49 => 19,  35 => 9,  30 => 7,  63 => 21,  57 => 25,  54 => 17,  43 => 12,  31 => 7,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 24,  64 => 15,  55 => 12,  52 => 11,  48 => 15,  46 => 18,  41 => 7,  37 => 10,  32 => 4,  22 => 2,  265 => 123,  259 => 120,  252 => 117,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 108,  229 => 129,  227 => 128,  219 => 100,  213 => 96,  205 => 93,  201 => 114,  199 => 90,  196 => 111,  190 => 86,  186 => 84,  184 => 83,  181 => 101,  173 => 79,  169 => 77,  167 => 76,  162 => 73,  160 => 72,  157 => 71,  151 => 69,  149 => 68,  142 => 63,  135 => 59,  130 => 56,  128 => 69,  125 => 54,  117 => 49,  113 => 58,  108 => 45,  106 => 44,  103 => 43,  94 => 39,  89 => 36,  87 => 43,  84 => 34,  76 => 38,  72 => 27,  67 => 23,  65 => 23,  61 => 14,  56 => 19,  53 => 18,  51 => 17,  40 => 11,  34 => 5,  28 => 3,  26 => 4,  36 => 4,  23 => 3,  19 => 1,);
    }
}
