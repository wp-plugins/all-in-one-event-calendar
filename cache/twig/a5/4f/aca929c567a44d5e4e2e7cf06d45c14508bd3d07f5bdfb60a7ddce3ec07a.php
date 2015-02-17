<?php

/* month.twig */
class __TwigTemplate_a54faca929c567a44d5e4e2e7cf06d45c14508bd3d07f5bdfb60a7ddce3ec07a extends Twig_Template
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
        echo (isset($context["navigation"]) ? $context["navigation"] : null);
        echo "

<table class=\"ai1ec-month-view ai1ec-popover-boundary
\t";
        // line 4
        if ((isset($context["month_word_wrap"]) ? $context["month_word_wrap"] : null)) {
            echo "ai1ec-word-wrap";
        }
        echo "\">
\t<thead>
\t\t<tr>
\t\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weekdays"]) ? $context["weekdays"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weekday"]) {
            // line 8
            echo "\t\t\t\t<th scope=\"col\" class=\"ai1ec-weekday\">";
            echo twig_escape_filter($this->env, (isset($context["weekday"]) ? $context["weekday"] : null), "html", null, true);
            echo "</th>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weekday'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cell_array"]) ? $context["cell_array"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["week"]) {
            // line 14
            echo "\t\t\t";
            $context["added_stretcher"] = false;
            // line 15
            echo "\t\t\t<tr class=\"ai1ec-week\">
\t\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["week"]) ? $context["week"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                // line 17
                echo "
\t\t\t\t\t";
                // line 18
                if ($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "date")) {
                    // line 19
                    echo "\t\t\t\t\t\t<td ";
                    if ($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "today")) {
                        echo "class=\"ai1ec-today\"";
                    }
                    echo ">
\t\t\t\t\t\t\t";
                    // line 21
                    echo "\t\t\t\t\t\t\t";
                    if ((!(isset($context["added_stretcher"]) ? $context["added_stretcher"] : null))) {
                        // line 22
                        echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-day-stretcher\"></div>
\t\t\t\t\t\t\t\t";
                        // line 23
                        $context["added_stretcher"] = true;
                        // line 24
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 25
                    echo "
\t\t\t\t\t\t\t<div class=\"ai1ec-day\">
\t\t\t\t\t\t\t\t<div class=\"ai1ec-date\">
\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-view\"
\t\t\t\t\t\t\t\t\t\t";
                    // line 29
                    echo (isset($context["data_type"]) ? $context["data_type"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\thref=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day"]) ? $context["day"] : null), "date_link"), "html_attr");
                    echo "\"
\t\t\t\t\t\t\t\t\t\t>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day"]) ? $context["day"] : null), "date"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                    // line 34
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "events"));
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 35
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\t";
                        // line 36
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
                            // line 37
                            echo "\t\t\t\t\t\t\t\t\t\t\tdata-end-day=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "multiday_end_day"), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-start-truncated=\"";
                            // line 38
                            echo (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "start_truncated")) ? ("true") : ("false"));
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-end-truncated=\"";
                            // line 39
                            echo (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "end_truncated")) ? ("true") : ("false"));
                            echo "\"
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 41
                        echo "\t\t\t\t\t\t\t\t\t\tdata-instance-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event
\t\t\t\t\t\t\t\t\t\t\tai1ec-popup-trigger
\t\t\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 45
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 46
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        // line 47
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
                            echo "ai1ec-multiday";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t\t>

\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event\"
\t\t\t\t\t\t\t\t\t\t\t style=\"";
                        // line 51
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "color_style"), "html_attr");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 53
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 55
                        if ((!$this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday"))) {
                            // line 56
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 57
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "short_start_time"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 60
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-popover ai1ec-popup ai1ec-popup-in-";
                        // line 63
                        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                        echo "-view\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 64
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors")) {
                            // line 65
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-color-swatches\">";
                            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors");
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 67
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-popup-title\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 69
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                        // line 70
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 71
                        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))) {
                            // line 72
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 73
                            echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))) {
                            // line 76
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
\t\t\t\t\t\t\t\t\t\t\t\t\tai1ec-buy-tickets\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                            // line 78
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 79
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 81
                        echo "\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t";
                        // line 83
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link")) {
                            // line 84
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"post-edit-link\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                            // line 85
                            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                            // line 86
                            echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 89
                        echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 91
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "popup_timespan");
                        echo "
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 96
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t";
                        // line 99
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt")) {
                            // line 100
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-popup-excerpt\">";
                            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt");
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 102
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 104
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                } else {
                    // line 106
                    echo " ";
                    // line 107
                    echo "\t\t\t\t\t\t<td class=\"ai1ec-empty\"></td>
\t\t\t\t\t";
                }
                // line 108
                echo " ";
                // line 109
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo " ";
            // line 111
            echo "\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo " ";
        // line 113
        echo "\t</tbody>
</table>

<div class=\"ai1ec-pull-left\">";
        // line 116
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "month.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 116,  322 => 112,  306 => 109,  300 => 107,  298 => 106,  293 => 104,  286 => 102,  257 => 89,  251 => 86,  244 => 84,  225 => 76,  214 => 72,  200 => 67,  174 => 56,  172 => 55,  148 => 46,  108 => 34,  102 => 31,  140 => 44,  132 => 45,  129 => 44,  123 => 41,  116 => 39,  98 => 30,  86 => 26,  22 => 2,  309 => 116,  299 => 112,  284 => 109,  272 => 96,  266 => 101,  261 => 91,  237 => 87,  234 => 86,  231 => 85,  223 => 81,  219 => 80,  206 => 75,  190 => 66,  184 => 63,  149 => 47,  144 => 45,  139 => 44,  319 => 95,  317 => 94,  313 => 110,  310 => 92,  307 => 84,  305 => 114,  302 => 82,  291 => 110,  287 => 75,  285 => 74,  280 => 100,  277 => 71,  271 => 69,  269 => 68,  253 => 95,  238 => 81,  220 => 62,  205 => 53,  195 => 49,  189 => 46,  186 => 45,  180 => 62,  175 => 60,  152 => 47,  111 => 35,  45 => 11,  42 => 13,  120 => 35,  94 => 29,  71 => 21,  135 => 42,  127 => 39,  89 => 26,  47 => 12,  221 => 81,  217 => 73,  213 => 56,  211 => 77,  194 => 65,  168 => 61,  166 => 57,  161 => 58,  147 => 45,  115 => 34,  110 => 36,  278 => 99,  274 => 95,  267 => 94,  260 => 93,  258 => 92,  250 => 90,  245 => 87,  239 => 84,  233 => 79,  227 => 79,  224 => 78,  222 => 75,  215 => 78,  210 => 76,  198 => 67,  191 => 64,  187 => 63,  178 => 58,  169 => 55,  159 => 52,  153 => 48,  151 => 51,  133 => 41,  122 => 35,  114 => 38,  112 => 35,  99 => 27,  95 => 26,  83 => 23,  78 => 25,  137 => 67,  131 => 64,  125 => 38,  117 => 36,  103 => 28,  90 => 27,  82 => 39,  52 => 15,  34 => 7,  677 => 347,  669 => 341,  661 => 336,  652 => 329,  650 => 328,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 297,  574 => 291,  567 => 286,  561 => 284,  555 => 282,  553 => 281,  548 => 278,  545 => 277,  538 => 271,  532 => 269,  525 => 266,  523 => 265,  517 => 261,  511 => 259,  504 => 256,  502 => 255,  497 => 252,  489 => 246,  481 => 241,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 215,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 184,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 113,  321 => 171,  315 => 111,  312 => 166,  304 => 108,  301 => 113,  297 => 157,  295 => 78,  288 => 151,  282 => 108,  275 => 70,  273 => 145,  268 => 95,  262 => 137,  256 => 96,  249 => 132,  247 => 85,  242 => 83,  236 => 64,  229 => 78,  212 => 71,  207 => 71,  203 => 52,  192 => 64,  183 => 60,  170 => 38,  138 => 44,  128 => 39,  107 => 29,  91 => 23,  80 => 22,  66 => 19,  61 => 16,  43 => 7,  73 => 22,  64 => 15,  55 => 14,  88 => 25,  79 => 24,  75 => 22,  68 => 18,  57 => 21,  118 => 43,  96 => 31,  85 => 24,  69 => 24,  60 => 21,  58 => 15,  49 => 12,  36 => 12,  204 => 69,  196 => 74,  177 => 57,  171 => 73,  165 => 53,  163 => 36,  158 => 61,  154 => 60,  150 => 76,  146 => 45,  142 => 44,  136 => 41,  130 => 40,  105 => 27,  101 => 27,  93 => 28,  87 => 24,  81 => 25,  74 => 19,  67 => 19,  65 => 17,  59 => 16,  53 => 17,  44 => 15,  25 => 4,  21 => 2,  77 => 21,  70 => 19,  62 => 17,  54 => 14,  50 => 17,  29 => 9,  40 => 14,  38 => 5,  27 => 4,  218 => 59,  216 => 119,  208 => 70,  201 => 72,  199 => 71,  188 => 63,  179 => 67,  173 => 64,  167 => 53,  162 => 51,  160 => 91,  155 => 50,  145 => 78,  141 => 45,  134 => 46,  126 => 37,  124 => 38,  121 => 37,  119 => 37,  113 => 37,  109 => 32,  104 => 34,  100 => 31,  92 => 29,  84 => 25,  76 => 23,  72 => 21,  63 => 18,  56 => 19,  51 => 13,  30 => 5,  46 => 10,  32 => 10,  26 => 3,  23 => 3,  48 => 16,  33 => 7,  28 => 5,  24 => 4,  41 => 9,  39 => 7,  37 => 8,  35 => 7,  31 => 6,  19 => 1,);
    }
}
