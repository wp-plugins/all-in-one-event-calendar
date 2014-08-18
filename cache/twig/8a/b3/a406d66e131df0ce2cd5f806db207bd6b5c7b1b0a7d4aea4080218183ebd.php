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
        return array (  164 => 83,  156 => 77,  139 => 68,  131 => 66,  127 => 65,  123 => 64,  114 => 60,  104 => 52,  96 => 46,  77 => 38,  74 => 37,  68 => 33,  60 => 28,  27 => 7,  66 => 23,  598 => 338,  590 => 332,  582 => 327,  573 => 320,  571 => 318,  565 => 314,  563 => 313,  560 => 312,  554 => 309,  551 => 308,  549 => 307,  546 => 306,  539 => 302,  534 => 300,  530 => 299,  527 => 298,  524 => 297,  521 => 295,  512 => 289,  503 => 283,  497 => 280,  488 => 274,  479 => 268,  474 => 265,  471 => 264,  464 => 258,  458 => 256,  451 => 253,  449 => 252,  443 => 248,  437 => 246,  430 => 243,  428 => 242,  423 => 239,  415 => 233,  407 => 228,  393 => 217,  387 => 213,  380 => 207,  374 => 205,  367 => 202,  365 => 201,  359 => 197,  353 => 195,  346 => 192,  344 => 191,  339 => 188,  333 => 183,  327 => 181,  320 => 178,  318 => 177,  313 => 174,  308 => 170,  302 => 167,  299 => 166,  293 => 163,  287 => 160,  284 => 159,  282 => 158,  278 => 156,  275 => 154,  269 => 150,  266 => 149,  258 => 143,  255 => 142,  251 => 140,  249 => 139,  242 => 134,  236 => 132,  222 => 125,  216 => 120,  210 => 118,  203 => 115,  187 => 104,  174 => 96,  166 => 90,  159 => 86,  155 => 85,  145 => 71,  138 => 74,  134 => 73,  119 => 62,  107 => 54,  101 => 51,  97 => 50,  80 => 39,  71 => 35,  62 => 28,  49 => 14,  35 => 9,  30 => 7,  63 => 21,  57 => 25,  54 => 17,  43 => 17,  31 => 7,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 24,  64 => 15,  55 => 12,  52 => 23,  48 => 15,  46 => 18,  41 => 7,  37 => 9,  32 => 8,  22 => 2,  265 => 123,  259 => 120,  252 => 117,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 108,  229 => 129,  227 => 128,  219 => 100,  213 => 96,  205 => 93,  201 => 114,  199 => 90,  196 => 111,  190 => 86,  186 => 84,  184 => 83,  181 => 101,  173 => 79,  169 => 77,  167 => 76,  162 => 73,  160 => 72,  157 => 71,  151 => 74,  149 => 68,  142 => 63,  135 => 67,  130 => 56,  128 => 69,  125 => 54,  117 => 61,  113 => 58,  108 => 45,  106 => 44,  103 => 43,  94 => 39,  89 => 42,  87 => 43,  84 => 40,  76 => 38,  72 => 27,  67 => 23,  65 => 23,  61 => 21,  56 => 19,  53 => 18,  51 => 17,  40 => 11,  34 => 11,  28 => 3,  26 => 4,  36 => 4,  23 => 3,  19 => 1,);
    }
}
