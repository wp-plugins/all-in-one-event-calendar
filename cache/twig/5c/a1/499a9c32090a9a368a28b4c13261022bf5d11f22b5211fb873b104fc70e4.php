<?php

/* agenda.twig */
class __TwigTemplate_5ca1499a9c32090a9a368a28b4c13261022bf5d11f22b5211fb873b104fc70e4 extends Twig_Template
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

<div class=\"ai1ec-agenda-view\">
\t";
        // line 4
        if (twig_test_empty((isset($context["dates"]) ? $context["dates"] : null))) {
            // line 5
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["text_upcoming_events"]) ? $context["text_upcoming_events"] : null), "html", null, true);
            echo "
\t\t</p>
\t";
        } else {
            // line 9
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
            foreach ($context['_seq'] as $context["date"] => $context["date_info"]) {
                // line 10
                echo "\t\t\t<div class=\"ai1ec-date
\t\t\t\t";
                // line 11
                if ((!twig_test_empty($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "today")))) {
                    echo "ai1ec-today";
                }
                echo "\">
\t\t\t\t<a class=\"ai1ec-date-title ai1ec-load-view\"
\t\t\t\t\thref=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "href"), "html_attr");
                echo "\"
\t\t\t\t\t";
                // line 14
                echo (isset($context["data_type"]) ? $context["data_type"] : null);
                echo ">
\t\t\t\t\t<div class=\"ai1ec-month\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "month"), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"ai1ec-day\">";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "day"), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"ai1ec-weekday\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "weekday"), "html", null, true);
                echo "</div>
\t\t\t\t\t";
                // line 18
                if ((isset($context["show_year_in_agenda_dates"]) ? $context["show_year_in_agenda_dates"] : null)) {
                    // line 19
                    echo "\t\t\t\t\t\t<div class=\"ai1ec-year\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "year"), "html", null, true);
                    echo "</div>
\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t</a>
\t\t\t\t<div class=\"ai1ec-date-events\">
\t\t\t\t\t";
                // line 23
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "events"));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 24
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 25
                        echo "\t\t\t\t\t\t\t<div class=\"ai1ec-event
\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 28
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        // line 29
                        echo "\t\t\t\t\t\t\t\t";
                        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
                            echo "ai1ec-expanded";
                        }
                        echo "\">

\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-header\">
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-toggle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-minus-circle ai1ec-fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-plus-circle ai1ec-fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 37
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 38
                        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))))) {
                            // line 39
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 40
                            echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t";
                        // line 44
                        $context["edit_post_link"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["edit_post_link"]) ? $context["edit_post_link"] : null)))) {
                            // line 46
                            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"post-edit-link\" href=\"";
                            echo (isset($context["edit_post_link"]) ? $context["edit_post_link"] : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                            // line 47
                            echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 50
                        echo "
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t ";
                        // line 52
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "timespan_short");
                        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                        // line 57
                        echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-summary ";
                        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
                            echo "ai1ec-expanded";
                        }
                        echo "\">

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-description\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 60
                        if ((twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "content_img_url")) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped"))))) {
                            // line 61
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a ";
                            echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                            // line 63
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 64
                            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 67
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_content");
                        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-summary-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-btn-group ai1ec-actions\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 72
                        if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))))) {
                            // line 73
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary
\t\t\t\t\t\t\t\t\t\t\t\t\t\tai1ec-btn-xs ai1ec-buy-tickets\"
\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                            // line 76
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 77
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 79
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a ";
                        echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"ai1ec-read-more ai1ec-btn ai1ec-btn-default
\t\t\t\t\t\t\t\t\t\t\t\t\tai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 82
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 83
                        echo twig_escape_filter($this->env, (isset($context["text_read_more"]) ? $context["text_read_more"] : null), "html", null, true);
                        echo " <i class=\"ai1ec-fa ai1ec-fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        // line 86
                        $context["categories"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "categories_html");
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["tags"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "tags_html");
                        // line 88
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)))) {
                            // line 89
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-categories\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-field-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 92
                            echo twig_escape_filter($this->env, (isset($context["text_categories"]) ? $context["text_categories"] : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 94
                            echo (isset($context["categories"]) ? $context["categories"] : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 97
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null)))) {
                            // line 98
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-tags\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-field-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-tags\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 101
                            echo twig_escape_filter($this->env, (isset($context["text_tags"]) ? $context["text_tags"] : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 103
                            echo (isset($context["tags"]) ? $context["tags"] : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo " ";
                    // line 111
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 112
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo " ";
            // line 115
            echo "\t";
        }
        echo " ";
        // line 116
        echo "</div>

<div class=\"ai1ec-pull-left\">";
        // line 118
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "agenda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 116,  290 => 111,  278 => 106,  272 => 103,  267 => 101,  243 => 89,  240 => 88,  235 => 86,  209 => 76,  204 => 73,  202 => 72,  193 => 67,  187 => 64,  166 => 57,  144 => 46,  141 => 45,  92 => 25,  319 => 94,  317 => 93,  313 => 92,  310 => 91,  307 => 115,  305 => 114,  302 => 82,  291 => 77,  287 => 75,  285 => 74,  280 => 72,  277 => 71,  271 => 69,  269 => 68,  253 => 94,  238 => 65,  218 => 79,  189 => 46,  180 => 42,  163 => 36,  45 => 14,  42 => 13,  50 => 16,  47 => 15,  226 => 81,  220 => 62,  188 => 69,  182 => 66,  175 => 60,  152 => 33,  143 => 45,  122 => 38,  97 => 28,  93 => 25,  86 => 25,  71 => 18,  293 => 100,  289 => 99,  260 => 91,  254 => 88,  251 => 87,  248 => 92,  239 => 82,  237 => 87,  233 => 79,  230 => 83,  225 => 82,  222 => 80,  210 => 70,  208 => 54,  195 => 49,  171 => 54,  161 => 50,  159 => 52,  154 => 47,  150 => 46,  146 => 45,  137 => 42,  132 => 39,  126 => 36,  121 => 37,  118 => 33,  116 => 35,  111 => 29,  105 => 27,  99 => 27,  95 => 26,  83 => 23,  78 => 20,  62 => 14,  59 => 15,  38 => 5,  33 => 9,  29 => 9,  25 => 4,  164 => 83,  156 => 52,  139 => 44,  131 => 42,  127 => 39,  123 => 64,  114 => 60,  104 => 28,  96 => 46,  77 => 20,  74 => 19,  60 => 28,  69 => 18,  644 => 354,  636 => 348,  628 => 343,  619 => 336,  617 => 335,  611 => 331,  609 => 330,  606 => 329,  600 => 326,  597 => 325,  595 => 324,  592 => 323,  585 => 319,  580 => 317,  576 => 316,  573 => 315,  570 => 314,  567 => 312,  558 => 306,  549 => 300,  543 => 297,  534 => 291,  525 => 285,  520 => 282,  517 => 281,  510 => 275,  504 => 273,  497 => 270,  495 => 269,  489 => 265,  483 => 263,  476 => 260,  474 => 259,  469 => 256,  461 => 250,  453 => 245,  439 => 234,  433 => 230,  426 => 224,  420 => 222,  413 => 219,  411 => 218,  405 => 214,  399 => 212,  392 => 209,  390 => 208,  385 => 205,  379 => 200,  373 => 198,  366 => 195,  364 => 194,  359 => 191,  354 => 187,  348 => 184,  345 => 183,  339 => 180,  333 => 177,  330 => 176,  328 => 175,  324 => 173,  321 => 171,  315 => 118,  312 => 166,  304 => 160,  301 => 159,  297 => 112,  295 => 78,  288 => 110,  282 => 73,  275 => 70,  273 => 96,  268 => 142,  262 => 98,  256 => 135,  249 => 132,  242 => 83,  236 => 64,  216 => 72,  212 => 77,  207 => 117,  203 => 52,  192 => 71,  183 => 63,  177 => 61,  170 => 38,  155 => 50,  145 => 71,  138 => 74,  134 => 32,  119 => 62,  107 => 29,  101 => 51,  91 => 23,  80 => 21,  66 => 21,  35 => 12,  30 => 6,  63 => 16,  54 => 13,  43 => 7,  24 => 3,  21 => 2,  82 => 21,  73 => 19,  70 => 17,  64 => 15,  55 => 14,  52 => 10,  48 => 9,  46 => 18,  41 => 10,  37 => 10,  32 => 8,  22 => 2,  88 => 26,  81 => 24,  79 => 21,  75 => 36,  68 => 33,  57 => 14,  49 => 12,  44 => 11,  31 => 8,  27 => 5,  265 => 94,  259 => 97,  252 => 117,  250 => 116,  247 => 131,  241 => 112,  234 => 109,  232 => 108,  229 => 83,  227 => 77,  219 => 100,  213 => 77,  205 => 53,  201 => 91,  199 => 51,  196 => 112,  190 => 86,  186 => 45,  184 => 83,  181 => 58,  173 => 55,  169 => 77,  167 => 52,  162 => 89,  160 => 53,  157 => 71,  151 => 74,  149 => 47,  142 => 44,  135 => 42,  130 => 40,  128 => 69,  125 => 38,  117 => 31,  113 => 58,  108 => 29,  106 => 32,  103 => 28,  94 => 39,  89 => 26,  87 => 24,  84 => 22,  76 => 28,  72 => 21,  67 => 17,  65 => 17,  61 => 20,  56 => 18,  53 => 17,  51 => 13,  40 => 6,  34 => 4,  28 => 3,  26 => 4,  36 => 9,  23 => 3,  19 => 1,);
    }
}
