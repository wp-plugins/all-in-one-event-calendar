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
                        echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 37
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
                            // line 38
                            echo "\t\t\t\t\t\t\t\t\t\t\tdata-end-day=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "multiday_end_day"), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-start-truncated=\"";
                            // line 39
                            echo (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "start_truncated")) ? ("true") : ("false"));
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-end-truncated=\"";
                            // line 40
                            echo (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "end_truncated")) ? ("true") : ("false"));
                            echo "\"
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t\tdata-instance-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event
\t\t\t\t\t\t\t\t\t\t\tai1ec-popup-trigger
\t\t\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 45
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 46
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 47
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        // line 48
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
                            echo "ai1ec-multiday";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t\t>

\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event\"
\t\t\t\t\t\t\t\t\t\t\t style=\"";
                        // line 52
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "color_style"), "html_attr");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 54
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 56
                        if ((!$this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday"))) {
                            // line 57
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 58
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "short_start_time"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 61
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-popover ai1ec-popup ai1ec-popup-in-";
                        // line 64
                        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                        echo "-view\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 65
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors")) {
                            // line 66
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-color-swatches\">";
                            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors");
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 68
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-popup-title\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 70
                        echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                        // line 72
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 73
                        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))) {
                            // line 74
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 75
                            echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 77
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))) {
                            // line 78
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
\t\t\t\t\t\t\t\t\t\t\t\t\tai1ec-buy-tickets\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                            // line 80
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 81
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 83
                        echo "\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t";
                        // line 85
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link")) {
                            // line 86
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"post-edit-link\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                            // line 87
                            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                            // line 88
                            echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 91
                        echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 93
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "popup_timespan");
                        echo "
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 97
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 98
                        echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 99
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t";
                        // line 102
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt")) {
                            // line 103
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-popup-excerpt\">";
                            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt");
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 105
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                } else {
                    // line 109
                    echo " ";
                    // line 110
                    echo "\t\t\t\t\t\t<td class=\"ai1ec-empty\"></td>
\t\t\t\t\t";
                }
                // line 111
                echo " ";
                // line 112
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo " ";
            // line 114
            echo "\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo " ";
        // line 116
        echo "\t</tbody>
</table>
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
        return array (  336 => 116,  334 => 115,  327 => 114,  325 => 113,  318 => 112,  316 => 111,  298 => 105,  292 => 103,  284 => 99,  276 => 97,  255 => 87,  246 => 83,  198 => 66,  178 => 57,  176 => 56,  148 => 46,  112 => 35,  102 => 31,  85 => 24,  58 => 15,  136 => 46,  133 => 45,  110 => 36,  98 => 30,  100 => 31,  90 => 27,  39 => 7,  311 => 116,  290 => 102,  278 => 106,  272 => 103,  267 => 101,  243 => 89,  240 => 88,  235 => 86,  209 => 76,  204 => 68,  202 => 72,  193 => 67,  187 => 61,  166 => 52,  144 => 45,  141 => 45,  92 => 29,  319 => 94,  317 => 93,  313 => 92,  310 => 109,  307 => 115,  305 => 107,  302 => 82,  291 => 77,  287 => 75,  285 => 74,  280 => 98,  277 => 71,  271 => 69,  269 => 93,  253 => 94,  238 => 65,  218 => 79,  189 => 46,  180 => 42,  163 => 36,  45 => 11,  42 => 13,  50 => 17,  47 => 18,  226 => 81,  220 => 73,  188 => 69,  182 => 66,  175 => 60,  152 => 47,  143 => 45,  122 => 38,  97 => 28,  93 => 25,  86 => 26,  71 => 21,  293 => 100,  289 => 99,  260 => 91,  254 => 88,  251 => 87,  248 => 92,  239 => 82,  237 => 80,  233 => 78,  230 => 77,  225 => 75,  222 => 74,  210 => 70,  208 => 70,  195 => 49,  171 => 54,  161 => 50,  159 => 52,  154 => 47,  150 => 46,  146 => 45,  137 => 42,  132 => 40,  126 => 36,  121 => 37,  118 => 33,  116 => 39,  111 => 35,  105 => 27,  99 => 27,  95 => 26,  83 => 23,  78 => 20,  62 => 17,  59 => 16,  38 => 9,  33 => 7,  29 => 10,  25 => 4,  164 => 83,  156 => 48,  139 => 44,  131 => 42,  127 => 42,  123 => 38,  114 => 38,  104 => 34,  96 => 31,  77 => 21,  74 => 19,  60 => 21,  69 => 18,  644 => 354,  636 => 348,  628 => 343,  619 => 336,  617 => 335,  611 => 331,  609 => 330,  606 => 329,  600 => 326,  597 => 325,  595 => 324,  592 => 323,  585 => 319,  580 => 317,  576 => 316,  573 => 315,  570 => 314,  567 => 312,  558 => 306,  549 => 300,  543 => 297,  534 => 291,  525 => 285,  520 => 282,  517 => 281,  510 => 275,  504 => 273,  497 => 270,  495 => 269,  489 => 265,  483 => 263,  476 => 260,  474 => 259,  469 => 256,  461 => 250,  453 => 245,  439 => 234,  433 => 230,  426 => 224,  420 => 222,  413 => 219,  411 => 218,  405 => 214,  399 => 212,  392 => 209,  390 => 208,  385 => 205,  379 => 200,  373 => 198,  366 => 195,  364 => 194,  359 => 191,  354 => 187,  348 => 184,  345 => 183,  339 => 180,  333 => 177,  330 => 176,  328 => 175,  324 => 173,  321 => 171,  315 => 118,  312 => 110,  304 => 160,  301 => 159,  297 => 112,  295 => 78,  288 => 110,  282 => 73,  275 => 70,  273 => 96,  268 => 142,  262 => 98,  256 => 135,  249 => 132,  242 => 83,  236 => 64,  216 => 72,  212 => 71,  207 => 117,  203 => 52,  192 => 64,  183 => 63,  177 => 61,  170 => 38,  155 => 50,  145 => 71,  138 => 47,  134 => 32,  119 => 40,  107 => 29,  101 => 51,  91 => 23,  80 => 22,  66 => 19,  35 => 7,  30 => 5,  63 => 18,  54 => 14,  43 => 7,  24 => 3,  21 => 2,  82 => 21,  73 => 22,  70 => 19,  64 => 15,  55 => 14,  52 => 15,  48 => 16,  46 => 10,  41 => 11,  37 => 8,  32 => 10,  22 => 2,  88 => 25,  81 => 25,  79 => 24,  75 => 22,  68 => 18,  57 => 14,  49 => 12,  44 => 15,  31 => 6,  27 => 4,  265 => 91,  259 => 88,  252 => 86,  250 => 85,  247 => 131,  241 => 81,  234 => 109,  232 => 108,  229 => 83,  227 => 77,  219 => 100,  213 => 77,  205 => 53,  201 => 91,  199 => 51,  196 => 65,  190 => 86,  186 => 45,  184 => 83,  181 => 58,  173 => 55,  169 => 77,  167 => 52,  162 => 89,  160 => 53,  157 => 71,  151 => 74,  149 => 47,  142 => 44,  135 => 42,  130 => 40,  128 => 39,  125 => 38,  117 => 36,  113 => 58,  108 => 34,  106 => 32,  103 => 28,  94 => 29,  89 => 26,  87 => 24,  84 => 25,  76 => 28,  72 => 21,  67 => 19,  65 => 17,  61 => 16,  56 => 19,  53 => 17,  51 => 13,  40 => 14,  34 => 12,  28 => 5,  26 => 5,  36 => 12,  23 => 3,  19 => 1,);
    }
}
