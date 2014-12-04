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
            echo "\"
\t\t\t";
            // line 41
            echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
            echo ">
\t\t\t";
            // line 42
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
            echo "
\t\t</a>
\t";
        }
        // line 45
        echo "
\t";
        // line 46
        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt")))) {
            // line 47
            echo "\t\t<div class=\"ai1ec-popup-excerpt\">";
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt");
            echo "</div>
\t";
        }
        // line 49
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
        return array (  136 => 46,  133 => 45,  110 => 36,  98 => 32,  100 => 31,  90 => 27,  39 => 7,  311 => 116,  290 => 111,  278 => 106,  272 => 103,  267 => 101,  243 => 89,  240 => 88,  235 => 86,  209 => 76,  204 => 73,  202 => 72,  193 => 67,  187 => 64,  166 => 57,  144 => 49,  141 => 45,  92 => 29,  319 => 94,  317 => 93,  313 => 92,  310 => 91,  307 => 115,  305 => 114,  302 => 82,  291 => 77,  287 => 75,  285 => 74,  280 => 72,  277 => 71,  271 => 69,  269 => 68,  253 => 94,  238 => 65,  218 => 79,  189 => 46,  180 => 42,  163 => 36,  45 => 11,  42 => 13,  50 => 11,  47 => 14,  226 => 81,  220 => 62,  188 => 69,  182 => 66,  175 => 60,  152 => 33,  143 => 45,  122 => 38,  97 => 28,  93 => 25,  86 => 26,  71 => 21,  293 => 100,  289 => 99,  260 => 91,  254 => 88,  251 => 87,  248 => 92,  239 => 82,  237 => 87,  233 => 79,  230 => 83,  225 => 82,  222 => 80,  210 => 70,  208 => 54,  195 => 49,  171 => 54,  161 => 50,  159 => 52,  154 => 47,  150 => 46,  146 => 45,  137 => 42,  132 => 39,  126 => 36,  121 => 37,  118 => 33,  116 => 39,  111 => 35,  105 => 27,  99 => 27,  95 => 26,  83 => 23,  78 => 20,  62 => 17,  59 => 16,  38 => 9,  33 => 9,  29 => 9,  25 => 3,  164 => 83,  156 => 52,  139 => 44,  131 => 42,  127 => 42,  123 => 41,  114 => 38,  104 => 34,  96 => 31,  77 => 20,  74 => 19,  60 => 28,  69 => 18,  644 => 354,  636 => 348,  628 => 343,  619 => 336,  617 => 335,  611 => 331,  609 => 330,  606 => 329,  600 => 326,  597 => 325,  595 => 324,  592 => 323,  585 => 319,  580 => 317,  576 => 316,  573 => 315,  570 => 314,  567 => 312,  558 => 306,  549 => 300,  543 => 297,  534 => 291,  525 => 285,  520 => 282,  517 => 281,  510 => 275,  504 => 273,  497 => 270,  495 => 269,  489 => 265,  483 => 263,  476 => 260,  474 => 259,  469 => 256,  461 => 250,  453 => 245,  439 => 234,  433 => 230,  426 => 224,  420 => 222,  413 => 219,  411 => 218,  405 => 214,  399 => 212,  392 => 209,  390 => 208,  385 => 205,  379 => 200,  373 => 198,  366 => 195,  364 => 194,  359 => 191,  354 => 187,  348 => 184,  345 => 183,  339 => 180,  333 => 177,  330 => 176,  328 => 175,  324 => 173,  321 => 171,  315 => 118,  312 => 166,  304 => 160,  301 => 159,  297 => 112,  295 => 78,  288 => 110,  282 => 73,  275 => 70,  273 => 96,  268 => 142,  262 => 98,  256 => 135,  249 => 132,  242 => 83,  236 => 64,  216 => 72,  212 => 77,  207 => 117,  203 => 52,  192 => 71,  183 => 63,  177 => 61,  170 => 38,  155 => 50,  145 => 71,  138 => 47,  134 => 32,  119 => 40,  107 => 29,  101 => 51,  91 => 23,  80 => 21,  66 => 19,  35 => 7,  30 => 5,  63 => 18,  54 => 14,  43 => 7,  24 => 4,  21 => 2,  82 => 21,  73 => 22,  70 => 20,  64 => 15,  55 => 14,  52 => 15,  48 => 9,  46 => 13,  41 => 11,  37 => 8,  32 => 6,  22 => 2,  88 => 26,  81 => 25,  79 => 24,  75 => 22,  68 => 33,  57 => 14,  49 => 12,  44 => 8,  31 => 6,  27 => 4,  265 => 94,  259 => 97,  252 => 117,  250 => 116,  247 => 131,  241 => 112,  234 => 109,  232 => 108,  229 => 83,  227 => 77,  219 => 100,  213 => 77,  205 => 53,  201 => 91,  199 => 51,  196 => 112,  190 => 86,  186 => 45,  184 => 83,  181 => 58,  173 => 55,  169 => 77,  167 => 52,  162 => 89,  160 => 53,  157 => 71,  151 => 74,  149 => 47,  142 => 44,  135 => 42,  130 => 40,  128 => 69,  125 => 38,  117 => 31,  113 => 58,  108 => 29,  106 => 32,  103 => 28,  94 => 29,  89 => 26,  87 => 24,  84 => 25,  76 => 28,  72 => 21,  67 => 19,  65 => 17,  61 => 17,  56 => 16,  53 => 17,  51 => 13,  40 => 9,  34 => 7,  28 => 5,  26 => 5,  36 => 7,  23 => 3,  19 => 1,);
    }
}
