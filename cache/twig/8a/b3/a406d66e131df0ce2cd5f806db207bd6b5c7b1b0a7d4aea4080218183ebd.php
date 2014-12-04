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
        echo twig_escape_filter($this->env, (isset($context["add_your_calendar_feed"]) ? $context["add_your_calendar_feed"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["calendar_feed_text"]) ? $context["calendar_feed_text"] : null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ai1ec-form-group\">
\t\t\t\t\t\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t\t\t\t\t\t<input class=\"ai1ec-form-control\" type=\"text\" value=\"\"
\t\t\t\t\t\t\t\t\tid=\"ai1ec_calendar_url\" name=\"ai1ec_calendar_url\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["calendar_feed_url"]) ? $context["calendar_feed_url"] : null), "html_attr");
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
        echo twig_escape_filter($this->env, (isset($context["email_address_placeholder"]) ? $context["email_address_placeholder"] : null), "html_attr");
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
            echo twig_escape_filter($this->env, (isset($context["verification_words"]) ? $context["verification_words"] : null), "html_attr");
            echo "\"
\t\t\t\t\t\t\t\tdata-recaptcha-key=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["recaptcha_key"]) ? $context["recaptcha_key"] : null), "html_attr");
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"ai1ec-initializing-message\">
\t\t\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["loading_recaptcha"]) ? $context["loading_recaptcha"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["get_your_own_calendar"]) ? $context["get_your_own_calendar"] : null), "html", null, true);
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
        echo (isset($context["calendar_install"]) ? $context["calendar_install"] : null);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t<li>";
        // line 64
        echo (isset($context["calendar_browse"]) ? $context["calendar_browse"] : null);
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 65
        echo (isset($context["calendar_download"]) ? $context["calendar_download"] : null);
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 66
        echo (isset($context["wordpress_login"]) ? $context["wordpress_login"] : null);
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 67
        echo (isset($context["calendar_upload"]) ? $context["calendar_upload"] : null);
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 68
        echo (isset($context["calendar_install_now"]) ? $context["calendar_install_now"] : null);
        echo "</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 71
        echo (isset($context["calendar_running"]) ? $context["calendar_running"] : null);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 74
        echo (isset($context["calendar_support"]) ? $context["calendar_support"] : null);
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
        echo twig_escape_filter($this->env, (isset($context["submit_for_review"]) ? $context["submit_for_review"] : null), "html", null, true);
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
        return array (  164 => 83,  156 => 77,  139 => 68,  131 => 66,  127 => 65,  123 => 64,  114 => 60,  104 => 52,  96 => 46,  77 => 38,  74 => 37,  60 => 28,  69 => 24,  644 => 354,  636 => 348,  628 => 343,  619 => 336,  617 => 335,  611 => 331,  609 => 330,  606 => 329,  600 => 326,  597 => 325,  595 => 324,  592 => 323,  585 => 319,  580 => 317,  576 => 316,  573 => 315,  570 => 314,  567 => 312,  558 => 306,  549 => 300,  543 => 297,  534 => 291,  525 => 285,  520 => 282,  517 => 281,  510 => 275,  504 => 273,  497 => 270,  495 => 269,  489 => 265,  483 => 263,  476 => 260,  474 => 259,  469 => 256,  461 => 250,  453 => 245,  439 => 234,  433 => 230,  426 => 224,  420 => 222,  413 => 219,  411 => 218,  405 => 214,  399 => 212,  392 => 209,  390 => 208,  385 => 205,  379 => 200,  373 => 198,  366 => 195,  364 => 194,  359 => 191,  354 => 187,  348 => 184,  345 => 183,  339 => 180,  333 => 177,  330 => 176,  328 => 175,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 157,  295 => 156,  288 => 151,  282 => 149,  275 => 146,  273 => 145,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  242 => 128,  236 => 123,  216 => 119,  212 => 118,  207 => 117,  203 => 116,  192 => 110,  183 => 103,  177 => 100,  170 => 95,  155 => 85,  145 => 71,  138 => 74,  134 => 73,  119 => 62,  107 => 54,  101 => 51,  91 => 44,  80 => 39,  66 => 29,  35 => 9,  30 => 7,  63 => 22,  54 => 17,  43 => 17,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 24,  64 => 15,  55 => 12,  52 => 23,  48 => 15,  46 => 18,  41 => 7,  37 => 9,  32 => 8,  22 => 2,  88 => 26,  81 => 24,  79 => 23,  75 => 36,  68 => 33,  57 => 18,  49 => 14,  44 => 12,  31 => 7,  27 => 7,  265 => 123,  259 => 120,  252 => 117,  250 => 116,  247 => 131,  241 => 112,  234 => 109,  232 => 108,  229 => 121,  227 => 106,  219 => 100,  213 => 96,  205 => 93,  201 => 91,  199 => 90,  196 => 112,  190 => 86,  186 => 84,  184 => 83,  181 => 82,  173 => 79,  169 => 77,  167 => 76,  162 => 89,  160 => 72,  157 => 71,  151 => 74,  149 => 68,  142 => 63,  135 => 67,  130 => 56,  128 => 69,  125 => 54,  117 => 61,  113 => 58,  108 => 45,  106 => 44,  103 => 43,  94 => 39,  89 => 42,  87 => 35,  84 => 40,  76 => 28,  72 => 21,  67 => 23,  65 => 19,  61 => 21,  56 => 19,  53 => 14,  51 => 17,  40 => 11,  34 => 11,  28 => 3,  26 => 4,  36 => 10,  23 => 3,  19 => 1,);
    }
}
