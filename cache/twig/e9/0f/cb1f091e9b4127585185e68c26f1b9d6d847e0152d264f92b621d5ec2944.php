<?php

/* posterboard.twig */
class __TwigTemplate_e90fcb1f091e9b4127585185e68c26f1b9d6d847e0152d264f92b621d5ec2944 extends Twig_Template
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

<div class=\"ai1ec-posterboard-view\"
\tdata-ai1ec-tile-min-width=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["tile_min_width"]) ? $context["tile_min_width"] : null), "html", null, true);
        echo "\"
\tdata-ai1ec-posterboard-equal-height=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["posterboard_equal_height"]) ? $context["posterboard_equal_height"] : null), "html", null, true);
        echo "\">
\t";
        // line 6
        if (twig_test_empty((isset($context["dates"]) ? $context["dates"] : null))) {
            // line 7
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "no_results"), "html", null, true);
            echo "
\t\t</p>
\t";
        } else {
            // line 11
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
            foreach ($context['_seq'] as $context["date"] => $context["date_info"]) {
                // line 12
                echo "\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "events"));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 13
                    echo "\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 14
                        echo "\t\t\t\t\t<div class=\"ai1ec-event
\t\t\t\t\t\tai1ec-event-id-";
                        // line 15
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id"), "html", null, true);
                        echo "
\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 16
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t";
                        // line 17
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        echo "\">
\t\t\t\t\t\t<div class=\"ai1ec-event-wrap ai1ec-clearfix\">
\t\t\t\t\t\t\t<div class=\"ai1ec-date-block-wrap\"
\t\t\t\t\t\t\t\t";
                        // line 20
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_bg_color");
                        echo ">
\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-view\"
\t\t\t\t\t\t\t\t\thref=\"";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "href"), "html_attr");
                        echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-month\">";
                        // line 23
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "month"), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-day\">";
                        // line 24
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "day"), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-weekday\">";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "weekday"), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t";
                        // line 26
                        if ((isset($context["show_year_in_agenda_dates"]) ? $context["show_year_in_agenda_dates"] : null)) {
                            // line 27
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-year\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "year"), "html", null, true);
                            echo "</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 29
                        echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
                        // line 32
                        $context["edit_post_link"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
                        // line 33
                        echo "\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["edit_post_link"]) ? $context["edit_post_link"] : null)))) {
                            // line 34
                            echo "\t\t\t\t\t\t\t\t<a class=\"post-edit-link\" href=\"";
                            echo (isset($context["edit_post_link"]) ? $context["edit_post_link"] : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                            // line 35
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "edit"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                        }
                        // line 38
                        echo "
\t\t\t\t\t\t\t<div class=\"ai1ec-event-title-wrap\">
\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-title\"
\t\t\t\t\t\t\t\t\ttitle=\"";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title"), "html_attr");
                        echo "\"><div>
\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 43
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t  ";
                        // line 44
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_text_color");
                        echo ">
\t\t\t\t\t\t\t\t\t\t";
                        // line 45
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        // line 47
                        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "event_location")))) {
                            // line 48
                            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "event_location"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 50
                        echo "\t\t\t\t\t\t\t\t</div></div>
\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t";
                        // line 52
                        if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))))) {
                            // line 53
                            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary
\t\t\t\t\t\t\t\t\t\t\t\tai1ec-btn-xs ai1ec-buy-tickets\"
\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\" href=\"";
                            // line 55
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 56
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 58
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "timespan_short");
                        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ai1ec-clearfix\">
\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\thref=\"";
                        // line 63
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 64
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
                        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                        // line 66
                        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt")))) {
                            // line 67
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-description\">
\t\t\t\t\t\t\t\t\t\t";
                            // line 68
                            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt");
                            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 71
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        // line 72
                        $context["categories"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "categories_html");
                        // line 73
                        echo "\t\t\t\t\t\t\t";
                        $context["tags"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "tags_html");
                        // line 74
                        echo "\t\t\t\t\t\t\t";
                        if (((!twig_test_empty((isset($context["categories"]) ? $context["categories"] : null))) || (!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null))))) {
                            // line 75
                            echo "\t\t\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                            // line 77
                            if ((!twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)))) {
                                // line 78
                                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-categories\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 79
                                echo (isset($context["categories"]) ? $context["categories"] : null);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 82
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if ((!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null)))) {
                                // line 83
                                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-tags\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 84
                                echo (isset($context["tags"]) ? $context["tags"] : null);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 87
                            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t";
                        }
                        // line 90
                        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo " ";
                    // line 93
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 94
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
            // line 95
            echo "\t";
        }
        echo " ";
        // line 96
        echo "</div>

<div class=\"ai1ec-pull-left\">";
        // line 98
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "posterboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 96,  274 => 95,  267 => 94,  260 => 93,  258 => 92,  250 => 90,  245 => 87,  239 => 84,  233 => 82,  227 => 79,  224 => 78,  222 => 77,  215 => 74,  210 => 72,  198 => 67,  191 => 64,  187 => 63,  178 => 58,  169 => 55,  159 => 50,  153 => 48,  151 => 47,  133 => 41,  122 => 35,  114 => 33,  112 => 32,  99 => 26,  95 => 25,  83 => 22,  78 => 20,  137 => 67,  131 => 64,  125 => 61,  117 => 34,  103 => 54,  90 => 45,  82 => 39,  52 => 23,  34 => 11,  677 => 347,  669 => 341,  661 => 336,  652 => 329,  650 => 328,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 297,  574 => 291,  567 => 286,  561 => 284,  555 => 282,  553 => 281,  548 => 278,  545 => 277,  538 => 271,  532 => 269,  525 => 266,  523 => 265,  517 => 261,  511 => 259,  504 => 256,  502 => 255,  497 => 252,  489 => 246,  481 => 241,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 215,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 184,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 157,  295 => 156,  288 => 151,  282 => 98,  275 => 146,  273 => 145,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  247 => 131,  242 => 128,  236 => 83,  229 => 121,  212 => 73,  207 => 71,  203 => 116,  192 => 110,  183 => 103,  170 => 95,  138 => 43,  128 => 38,  107 => 29,  91 => 24,  80 => 39,  66 => 16,  61 => 21,  43 => 17,  73 => 18,  64 => 15,  55 => 12,  88 => 23,  79 => 23,  75 => 36,  68 => 33,  57 => 18,  118 => 43,  96 => 33,  85 => 22,  69 => 24,  60 => 28,  58 => 13,  49 => 12,  36 => 10,  204 => 84,  196 => 66,  177 => 100,  171 => 73,  165 => 53,  163 => 52,  158 => 61,  154 => 60,  150 => 76,  146 => 45,  142 => 44,  136 => 56,  130 => 54,  105 => 36,  101 => 27,  93 => 42,  87 => 23,  81 => 24,  74 => 36,  67 => 23,  65 => 19,  59 => 14,  53 => 14,  44 => 11,  25 => 4,  21 => 2,  77 => 34,  70 => 17,  62 => 15,  54 => 13,  50 => 15,  29 => 5,  40 => 11,  38 => 8,  27 => 7,  218 => 75,  216 => 119,  208 => 116,  201 => 68,  199 => 82,  188 => 109,  179 => 102,  173 => 56,  167 => 95,  162 => 89,  160 => 91,  155 => 85,  145 => 78,  141 => 81,  134 => 73,  126 => 71,  124 => 66,  121 => 60,  119 => 62,  113 => 58,  109 => 57,  104 => 56,  100 => 53,  92 => 32,  84 => 40,  76 => 37,  72 => 21,  63 => 22,  56 => 19,  51 => 10,  30 => 7,  46 => 18,  32 => 8,  26 => 4,  23 => 3,  48 => 15,  33 => 6,  28 => 5,  24 => 3,  41 => 7,  39 => 10,  37 => 6,  35 => 7,  31 => 7,  19 => 1,);
    }
}
