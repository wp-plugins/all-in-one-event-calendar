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
        // line 36
        if ((array_key_exists("form_captcha_challenge", $context) && (isset($context["form_captcha_challenge"]) ? $context["form_captcha_challenge"] : null))) {
            // line 37
            echo "\t\t\t\t\t\t\t";
            echo (isset($context["form_captcha_challenge"]) ? $context["form_captcha_challenge"] : null);
            echo "
\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<p class=\"ai1ec-centered\">
\t\t\t\t\t\t<a href=\"#ai1ec-submission-pane\" id=\"ai1ec-download-toggle\"
\t\t\t\t\t\t\tclass=\"ai1ec-btn ai1ec-btn-info ai1ec-btn-lg\" data-toggle=\"ai1ec-collapse\">
\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-download ai1ec-fa-lg\"></i>
\t\t\t\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["get_your_own_calendar"]) ? $context["get_your_own_calendar"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-chevron-down\"></i>
\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-chevron-up ai1ec-hide\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>

\t\t\t\t\t<div id=\"ai1ec-info-pane\" class=\"ai1ec-collapse ai1ec-prose\">
\t\t\t\t\t\t";
        // line 53
        echo "\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 54
        echo (isset($context["calendar_install"]) ? $context["calendar_install"] : null);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t<li>";
        // line 57
        echo (isset($context["calendar_browse"]) ? $context["calendar_browse"] : null);
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 58
        echo (isset($context["calendar_download"]) ? $context["calendar_download"] : null);
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 59
        echo (isset($context["wordpress_login"]) ? $context["wordpress_login"] : null);
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 60
        echo (isset($context["calendar_upload"]) ? $context["calendar_upload"] : null);
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 61
        echo (isset($context["calendar_install_now"]) ? $context["calendar_install_now"] : null);
        echo "</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 64
        echo (isset($context["calendar_running"]) ? $context["calendar_running"] : null);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 67
        echo (isset($context["calendar_support"]) ? $context["calendar_support"] : null);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        // line 70
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-modal-footer\">
\t\t\t\t\t<div class=\"ai1ec-collapse ai1ec-in ai1ec-pane\">
\t\t\t\t\t\t<button type=\"submit\"
\t\t\t\t\t\t\tclass=\"ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary ai1ec-submit\">
\t\t\t\t\t\t\t";
        // line 76
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
        return array (  137 => 67,  131 => 64,  125 => 61,  117 => 59,  103 => 54,  90 => 45,  82 => 39,  52 => 23,  34 => 11,  677 => 347,  669 => 341,  661 => 336,  652 => 329,  650 => 328,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 297,  574 => 291,  567 => 286,  561 => 284,  555 => 282,  553 => 281,  548 => 278,  545 => 277,  538 => 271,  532 => 269,  525 => 266,  523 => 265,  517 => 261,  511 => 259,  504 => 256,  502 => 255,  497 => 252,  489 => 246,  481 => 241,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 215,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 184,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 157,  295 => 156,  288 => 151,  282 => 149,  275 => 146,  273 => 145,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  247 => 131,  242 => 128,  236 => 123,  229 => 121,  212 => 118,  207 => 117,  203 => 116,  192 => 110,  183 => 103,  170 => 95,  138 => 74,  128 => 69,  107 => 54,  91 => 44,  80 => 39,  66 => 29,  61 => 21,  43 => 17,  73 => 18,  64 => 15,  55 => 12,  88 => 23,  79 => 23,  75 => 36,  68 => 33,  57 => 18,  118 => 43,  96 => 33,  85 => 22,  69 => 24,  60 => 28,  58 => 13,  49 => 14,  36 => 10,  204 => 84,  196 => 112,  177 => 100,  171 => 73,  165 => 69,  163 => 63,  158 => 61,  154 => 60,  150 => 76,  146 => 58,  142 => 70,  136 => 56,  130 => 54,  105 => 36,  101 => 51,  93 => 42,  87 => 29,  81 => 24,  74 => 36,  67 => 23,  65 => 19,  59 => 18,  53 => 14,  44 => 8,  25 => 3,  21 => 2,  77 => 34,  70 => 24,  62 => 21,  54 => 17,  50 => 15,  29 => 6,  40 => 11,  38 => 5,  27 => 7,  218 => 120,  216 => 119,  208 => 116,  201 => 115,  199 => 82,  188 => 109,  179 => 102,  173 => 98,  167 => 95,  162 => 89,  160 => 91,  155 => 85,  145 => 78,  141 => 81,  134 => 73,  126 => 71,  124 => 66,  121 => 60,  119 => 62,  113 => 58,  109 => 57,  104 => 56,  100 => 53,  92 => 32,  84 => 40,  76 => 37,  72 => 21,  63 => 22,  56 => 19,  51 => 10,  30 => 7,  46 => 18,  32 => 8,  26 => 4,  23 => 3,  48 => 15,  33 => 7,  28 => 5,  24 => 3,  41 => 11,  39 => 10,  37 => 9,  35 => 9,  31 => 7,  19 => 1,);
    }
}
