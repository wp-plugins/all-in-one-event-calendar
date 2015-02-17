<?php

/* event-popup.twig */
class __TwigTemplate_943e432a0dcbd7fe60a569412aaad985e131799f5363073300d0a6cd788b4d71 extends Twig_Template
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
        echo "<div class=\"ai1ec-popover ai1ec-popup ";
        echo twig_escape_filter($this->env, (isset($context["popup_classes"]) ? $context["popup_classes"] : null), "html", null, true);
        echo "\">

\t";
        // line 3
        $context["category_colors"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "category_colors"), "method");
        // line 4
        echo "\t";
        if ((!twig_test_empty((isset($context["category_colors"]) ? $context["category_colors"] : null)))) {
            // line 5
            echo "\t\t<div class=\"ai1ec-color-swatches\">";
            echo (isset($context["category_colors"]) ? $context["category_colors"] : null);
            echo "</div>
\t";
        }
        // line 7
        echo "
\t<span class=\"ai1ec-popup-title\">
\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
        echo "\"
\t\t   class=\"ai1ec-load-event\"
\t\t\t>";
        // line 11
        echo $this->env->getExtension('ai1ec')->truncate($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title"));
        echo "</a>
\t\t";
        // line 12
        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))))) {
            // line 13
            echo "\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t>";
            // line 14
            echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 16
        echo "\t\t";
        if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))))) {
            // line 17
            echo "\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
\t\t\t\tai1ec-buy-tickets\" target=\"_blank\"
\t\t\t\thref=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
            echo "\"
\t\t\t\t>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label"), "html", null, true);
            echo "</a>
\t\t";
        }
        // line 22
        echo "\t</span>

\t";
        // line 24
        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link")))) {
            // line 25
            echo "\t\t<a class=\"post-edit-link\" href=\"";
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
            echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
            echo "
\t\t</a>
\t";
        }
        // line 29
        echo "
\t<div class=\"ai1ec-event-time\">
\t\t";
        // line 31
        if (twig_test_empty((isset($context["popup_timespan"]) ? $context["popup_timespan"] : null))) {
            // line 32
            echo "\t\t\t";
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "timespan_short");
            echo "
\t\t";
        } else {
            // line 34
            echo "\t\t\t";
            echo (isset($context["popup_timespan"]) ? $context["popup_timespan"] : null);
            echo "
\t\t";
        }
        // line 36
        echo "\t</div>

\t";
        // line 38
        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped")))) {
            // line 39
            echo "\t\t<a class=\"ai1ec-load-event\"
\t\t\thref=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
            echo "\">
\t\t\t";
            // line 41
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
            echo "
\t\t</a>
\t";
        }
        // line 44
        echo "
\t";
        // line 45
        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt")))) {
            // line 46
            echo "\t\t<div class=\"ai1ec-popup-excerpt\">";
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt");
            echo "</div>
\t";
        }
        // line 48
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "event-popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 48,  132 => 45,  129 => 44,  123 => 41,  116 => 39,  98 => 32,  86 => 26,  22 => 2,  309 => 116,  299 => 112,  284 => 109,  272 => 104,  266 => 101,  261 => 99,  237 => 87,  234 => 86,  231 => 85,  223 => 81,  219 => 80,  206 => 75,  190 => 66,  184 => 63,  149 => 47,  144 => 46,  139 => 44,  319 => 95,  317 => 94,  313 => 93,  310 => 92,  307 => 84,  305 => 114,  302 => 82,  291 => 110,  287 => 75,  285 => 74,  280 => 72,  277 => 71,  271 => 69,  269 => 68,  253 => 95,  238 => 65,  220 => 62,  205 => 53,  195 => 49,  189 => 46,  186 => 45,  180 => 62,  175 => 60,  152 => 33,  111 => 35,  45 => 11,  42 => 13,  120 => 35,  94 => 29,  71 => 21,  135 => 42,  127 => 39,  89 => 26,  47 => 12,  221 => 81,  217 => 79,  213 => 56,  211 => 77,  194 => 73,  168 => 61,  166 => 57,  161 => 58,  147 => 45,  115 => 34,  110 => 36,  278 => 96,  274 => 95,  267 => 94,  260 => 93,  258 => 92,  250 => 90,  245 => 87,  239 => 84,  233 => 82,  227 => 79,  224 => 78,  222 => 77,  215 => 78,  210 => 76,  198 => 67,  191 => 64,  187 => 63,  178 => 58,  169 => 55,  159 => 52,  153 => 48,  151 => 51,  133 => 41,  122 => 35,  114 => 38,  112 => 32,  99 => 27,  95 => 26,  83 => 23,  78 => 25,  137 => 67,  131 => 64,  125 => 38,  117 => 31,  103 => 28,  90 => 27,  82 => 39,  52 => 15,  34 => 7,  677 => 347,  669 => 341,  661 => 336,  652 => 329,  650 => 328,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 297,  574 => 291,  567 => 286,  561 => 284,  555 => 282,  553 => 281,  548 => 278,  545 => 277,  538 => 271,  532 => 269,  525 => 266,  523 => 265,  517 => 261,  511 => 259,  504 => 256,  502 => 255,  497 => 252,  489 => 246,  481 => 241,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 215,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 184,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 113,  297 => 157,  295 => 78,  288 => 151,  282 => 108,  275 => 70,  273 => 145,  268 => 142,  262 => 137,  256 => 96,  249 => 132,  247 => 92,  242 => 90,  236 => 64,  229 => 84,  212 => 73,  207 => 71,  203 => 52,  192 => 110,  183 => 69,  170 => 38,  138 => 44,  128 => 38,  107 => 29,  91 => 23,  80 => 24,  66 => 19,  61 => 17,  43 => 7,  73 => 22,  64 => 15,  55 => 14,  88 => 26,  79 => 24,  75 => 22,  68 => 33,  57 => 21,  118 => 43,  96 => 31,  85 => 25,  69 => 24,  60 => 28,  58 => 13,  49 => 12,  36 => 7,  204 => 84,  196 => 74,  177 => 61,  171 => 73,  165 => 53,  163 => 36,  158 => 61,  154 => 60,  150 => 76,  146 => 45,  142 => 44,  136 => 41,  130 => 40,  105 => 27,  101 => 27,  93 => 28,  87 => 24,  81 => 25,  74 => 19,  67 => 19,  65 => 19,  59 => 16,  53 => 17,  44 => 8,  25 => 3,  21 => 2,  77 => 20,  70 => 20,  62 => 17,  54 => 14,  50 => 11,  29 => 9,  40 => 9,  38 => 5,  27 => 4,  218 => 59,  216 => 119,  208 => 54,  201 => 72,  199 => 71,  188 => 109,  179 => 67,  173 => 64,  167 => 95,  162 => 89,  160 => 91,  155 => 50,  145 => 78,  141 => 45,  134 => 46,  126 => 37,  124 => 36,  121 => 37,  119 => 40,  113 => 37,  109 => 32,  104 => 34,  100 => 31,  92 => 29,  84 => 25,  76 => 23,  72 => 21,  63 => 18,  56 => 16,  51 => 13,  30 => 5,  46 => 18,  32 => 6,  26 => 3,  23 => 3,  48 => 9,  33 => 8,  28 => 5,  24 => 4,  41 => 9,  39 => 7,  37 => 8,  35 => 7,  31 => 6,  19 => 1,);
    }
}
