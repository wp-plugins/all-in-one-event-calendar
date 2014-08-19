<?php

/* submit-ics-modal.twig */
class __TwigTemplate_8ab3a406d66e131df0ce2cd5f806db207bd6b5c7b1b0a7d4aea4080218183ebd extends Twig_Template
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
        echo "<div class=\"timely ai1ec-modal ai1ec-fade\" id=\"ai1ec-submit-ics-modal\">
\t<div class=\"ai1ec-modal-dialog\">
\t\t<div class=\"ai1ec-modal-content\">
\t\t\t<div class=\"ai1ec-loading\"></div>
\t\t\t<div class=\"ai1ec-modal-header\">
\t\t\t\t<button type=\"button\" class=\"ai1ec-close\" data-dismiss=\"ai1ec-modal\">×</button>
\t\t\t\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add Your Calendar Feed"), "html", null, true);
        echo "</h2>
\t\t\t</div>
\t\t\t<form class=\"ai1ec-submit-ics-form ai1ec-form-horizontal\">
\t\t\t\t<span class=\"ai1ec-nonce-fields\">
\t\t\t\t\t";
        // line 11
        echo (isset($context["nonce_field"]) ? $context["nonce_field"] : null);
        echo "
\t\t\t\t</span>
\t\t\t\t<div class=\"ai1ec-modal-body\">
\t\t\t\t\t<div id=\"ai1ec-submission-pane\" class=\"ai1ec-collapse ai1ec-in\">
\t\t\t\t\t\t<div class=\"ai1ec-alerts\"></div>
\t\t\t\t\t\t<div class=\"ai1ec-prose\">
\t\t\t\t\t\t\t<p>";
        // line 17
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("If you know of an event feed you think belongs in this calendar, paste its iCalendar (.ics) feed’s URL below. If approved, its events will be added to this calendar."), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ai1ec-form-group\">
\t\t\t\t\t\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t\t\t\t\t\t<input class=\"ai1ec-form-control\" type=\"text\" value=\"\"
\t\t\t\t\t\t\t\t\tid=\"ai1ec_calendar_url\" name=\"ai1ec_calendar_url\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
        // line 23
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Paste your calendar’s iCalendar (.ics) feed URL"), "html_attr");
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ai1ec-form-group\">
\t\t\t\t\t\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 28
        echo (isset($context["categories"]) ? $context["categories"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t\t\t\t\t\t<input class=\"ai1ec-form-control\" type=\"text\" value=\"\"
\t\t\t\t\t\t\t\t\tid=\"ai1ec_submitter_email\" name=\"ai1ec_submitter_email\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
        // line 33
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Enter your e-mail address"), "html_attr");
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 37
        echo "\t\t\t\t\t\t";
        if ((isset($context["recaptcha_key"]) ? $context["recaptcha_key"] : null)) {
            // line 38
            echo "\t\t\t\t\t\t\t<div class=\"ai1ec-recaptcha\"
\t\t\t\t\t\t\t\tdata-placeholder=\"";
            // line 39
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Verification words"), "html_attr");
            echo "\"
\t\t\t\t\t\t\t\tdata-recaptcha-key=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["recaptcha_key"]) ? $context["recaptcha_key"] : null), "html_attr");
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"ai1ec-initializing-message\">
\t\t\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Loading reCAPTCHA..."), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<p class=\"ai1ec-centered\">
\t\t\t\t\t\t<a href=\"#ai1ec-submission-pane\" id=\"ai1ec-download-toggle\"
\t\t\t\t\t\t\tclass=\"ai1ec-btn ai1ec-btn-info ai1ec-btn-lg\" data-toggle=\"ai1ec-collapse\">
\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-download ai1ec-fa-lg\"></i>
\t\t\t\t\t\t\t";
        // line 52
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Get Your Own Calendar"), "html", null, true);
        echo "
\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-chevron-down\"></i>
\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-chevron-up ai1ec-hide\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>

\t\t\t\t\t<div id=\"ai1ec-info-pane\" class=\"ai1ec-collapse ai1ec-prose\">
\t\t\t\t\t\t";
        // line 60
        echo "\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 61
        echo Ai1ec_I18n::__("If you already have your own <a href=\"http://wordpress.org/\" target=\"_blank\">WordPress</a> website, it’s easy to install your own <strong>All-in-One Event Calendar from Timely</strong>:");
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t<li>";
        // line 64
        echo Ai1ec_I18n::__("Browse to <a href=\"http://time.ly/get-your-own-calendar\" target=\"_blank\">time.ly/get-your-own-calendar</a>.");
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 65
        echo Ai1ec_I18n::__("Download the <em>free</em> <strong>All-in-One Event Calendar</strong> plugin.");
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 66
        echo Ai1ec_I18n::__("Log into your WordPress dashboard.");
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 67
        echo Ai1ec_I18n::__("Browse to <strong>Plugins</strong> &gt; <strong>Add New</strong> &gt; <strong>Upload</strong>.");
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 68
        echo Ai1ec_I18n::__("Choose the .zip file you just downloaded, and click <strong>Install Now</strong>.");
        echo "</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 71
        echo Ai1ec_I18n::__("That’s it! You’ll have your own <strong>All-in-One Calendar</strong> up and running within minutes.");
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 74
        echo Ai1ec_I18n::__("For help or for more information, please visit <a href=\"http://support.time.ly/\" target=\"_blank\">Timely Support</a>.");
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        // line 77
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-modal-footer\">
\t\t\t\t\t<div class=\"ai1ec-collapse ai1ec-in ai1ec-pane\">
\t\t\t\t\t\t<button type=\"submit\"
\t\t\t\t\t\t\tclass=\"ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary ai1ec-submit\">
\t\t\t\t\t\t\t";
        // line 83
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Submit for review"), "html", null, true);
        echo "
\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-chevron-right\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "submit-ics-modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 83,  156 => 77,  145 => 71,  139 => 68,  131 => 66,  127 => 65,  123 => 64,  114 => 60,  104 => 52,  96 => 46,  77 => 38,  74 => 37,  68 => 33,  60 => 28,  27 => 7,  66 => 23,  640 => 354,  632 => 348,  624 => 343,  615 => 336,  613 => 334,  607 => 330,  605 => 329,  602 => 328,  596 => 325,  593 => 324,  591 => 323,  588 => 322,  581 => 318,  576 => 316,  572 => 315,  569 => 314,  566 => 313,  563 => 311,  554 => 305,  545 => 299,  539 => 296,  530 => 290,  521 => 284,  516 => 281,  513 => 280,  506 => 274,  500 => 272,  493 => 269,  491 => 268,  485 => 264,  479 => 262,  472 => 259,  470 => 258,  465 => 255,  457 => 249,  449 => 244,  435 => 233,  429 => 229,  422 => 223,  416 => 221,  409 => 218,  407 => 217,  401 => 213,  395 => 211,  388 => 208,  386 => 207,  381 => 204,  375 => 199,  369 => 197,  362 => 194,  360 => 193,  355 => 190,  350 => 186,  344 => 183,  341 => 182,  335 => 179,  329 => 176,  326 => 175,  324 => 174,  320 => 172,  317 => 170,  311 => 166,  308 => 165,  300 => 159,  297 => 158,  293 => 156,  291 => 155,  284 => 150,  278 => 148,  271 => 145,  269 => 144,  264 => 141,  258 => 136,  245 => 131,  243 => 130,  238 => 127,  225 => 120,  212 => 118,  208 => 117,  203 => 116,  192 => 111,  188 => 109,  179 => 102,  166 => 94,  158 => 88,  141 => 77,  134 => 73,  124 => 68,  115 => 61,  109 => 57,  97 => 50,  80 => 39,  71 => 35,  62 => 28,  49 => 14,  35 => 9,  30 => 7,  63 => 21,  57 => 25,  54 => 17,  43 => 17,  31 => 7,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 24,  64 => 15,  55 => 12,  52 => 23,  48 => 15,  46 => 18,  41 => 7,  37 => 9,  32 => 8,  22 => 2,  265 => 123,  259 => 120,  252 => 134,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 122,  229 => 107,  227 => 106,  219 => 100,  213 => 96,  205 => 93,  201 => 91,  199 => 115,  196 => 89,  190 => 86,  186 => 84,  184 => 83,  181 => 82,  173 => 99,  169 => 77,  167 => 76,  162 => 73,  160 => 72,  157 => 71,  151 => 74,  149 => 68,  142 => 63,  135 => 67,  130 => 72,  128 => 55,  125 => 54,  117 => 61,  113 => 48,  108 => 45,  106 => 44,  103 => 53,  94 => 39,  89 => 42,  87 => 43,  84 => 40,  76 => 38,  72 => 27,  67 => 23,  65 => 23,  61 => 21,  56 => 19,  53 => 18,  51 => 17,  40 => 11,  34 => 11,  28 => 3,  26 => 4,  36 => 4,  23 => 3,  19 => 1,);
    }
}
