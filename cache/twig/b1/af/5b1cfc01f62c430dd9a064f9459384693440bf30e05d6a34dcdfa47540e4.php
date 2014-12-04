<?php

/* agenda-widget.twig */
class __TwigTemplate_b1af5b1cfc01f62c430dd9a064f9459384693440bf30e05d6a34dcdfa47540e4 extends Twig_Template
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
        echo "<style>
<!--
";
        // line 3
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "
-->
</style>
<div class=\"timely ai1ec-agenda-widget-view ai1ec-clearfix\">

\t";
        // line 8
        if (twig_test_empty((isset($context["dates"]) ? $context["dates"] : null))) {
            // line 9
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["text_upcoming_events"]) ? $context["text_upcoming_events"] : null), "html", null, true);
            echo "
\t\t</p>
\t";
        } else {
            // line 13
            echo "\t\t<div>
\t\t\t";
            // line 14
            $context["tag_for_days"] = "a";
            // line 15
            echo "\t\t\t";
            if (((isset($context["link_for_days"]) ? $context["link_for_days"] : null) == false)) {
                // line 16
                echo "\t\t\t\t";
                $context["tag_for_days"] = "span";
                // line 17
                echo "\t\t\t";
            }
            // line 18
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["date"] => $context["date_info"]) {
                // line 19
                echo "\t\t\t\t<div class=\"ai1ec-date
\t\t\t\t\t";
                // line 20
                if ((!twig_test_empty($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "today")))) {
                    echo "ai1ec-today";
                }
                echo "\">
\t\t\t\t\t<";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["tag_for_days"]) ? $context["tag_for_days"] : null), "html", null, true);
                echo " class=\"ai1ec-date-title ai1ec-load-view\"
\t\t\t\t\t\thref=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "href"), "html_attr");
                echo "\">
\t\t\t\t\t\t<div class=\"ai1ec-month\">";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->month((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
                echo "</div>
\t\t\t\t\t\t<div class=\"ai1ec-day\">";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
                echo "</div>
\t\t\t\t\t\t<div class=\"ai1ec-weekday\">";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
                echo "</div>
\t\t\t\t\t\t";
                // line 26
                if ((isset($context["show_year_in_agenda_dates"]) ? $context["show_year_in_agenda_dates"] : null)) {
                    // line 27
                    echo "\t\t\t\t\t\t\t<div class=\"ai1ec-year\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->year((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t</";
                echo twig_escape_filter($this->env, (isset($context["tag_for_days"]) ? $context["tag_for_days"] : null), "html", null, true);
                echo ">
\t\t\t\t\t<div class=\"ai1ec-date-events\">
\t\t\t\t\t\t";
                // line 31
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "events"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 32
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-event
\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 34
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 35
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "instance_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 36
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        echo "\">

\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"ai1ec-popup-trigger ai1ec-load-event\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 40
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            // line 41
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-allday-badge\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 42
                            echo twig_escape_filter($this->env, (isset($context["text_all_day"]) ? $context["text_all_day"] : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 45
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 46
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "short_start_time"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 49
                        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 51
                        echo $this->env->getExtension('ai1ec')->truncate($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title"));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 52
                        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))))) {
                            // line 53
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 54
                            echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 56
                        echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t";
                        // line 59
                        $this->env->loadTemplate("event-popup.twig")->display(array_merge($context, array("text_venue_separator" => (isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null))));
                        // line 62
                        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo " ";
                    // line 65
                    echo "\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 66
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo " ";
            // line 69
            echo "\t\t</div>
\t";
        }
        // line 70
        echo " ";
        // line 71
        echo "
\t";
        // line 72
        if (((isset($context["show_calendar_button"]) ? $context["show_calendar_button"] : null) || (isset($context["show_subscribe_buttons"]) ? $context["show_subscribe_buttons"] : null))) {
            // line 73
            echo "\t\t<p>
\t\t\t";
            // line 74
            if ((isset($context["show_calendar_button"]) ? $context["show_calendar_button"] : null)) {
                // line 75
                echo "\t\t\t\t<a class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs ai1ec-pull-right
\t\t\t\t\tai1ec-calendar-link\"
\t\t\t\t\thref=\"";
                // line 77
                echo twig_escape_filter($this->env, (isset($context["calendar_url"]) ? $context["calendar_url"] : null), "html_attr");
                echo "\">
\t\t\t\t\t";
                // line 78
                echo twig_escape_filter($this->env, (isset($context["text_view_calendar"]) ? $context["text_view_calendar"] : null), "html", null, true);
                echo "
\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-arrow-right\"></i>
\t\t\t\t</a>
\t\t\t";
            }
            // line 82
            echo "
\t\t\t";
            // line 83
            if ((isset($context["show_subscribe_buttons"]) ? $context["show_subscribe_buttons"] : null)) {
                // line 84
                echo "\t\t\t\t";
                $this->env->loadTemplate("subscribe-buttons.twig")->display(array_merge($context, array("button_classes" => "ai1ec-btn-xs", "export_url" => (isset($context["subscribe_url"]) ? $context["subscribe_url"] : null), "export_url_no_html" => (isset($context["subscribe_url_no_html"]) ? $context["subscribe_url_no_html"] : null), "subscribe_label" => (isset($context["text_subscribe_label"]) ? $context["text_subscribe_label"] : null), "text" => (isset($context["subscribe_buttons_text"]) ? $context["subscribe_buttons_text"] : null))));
                // line 91
                echo "\t\t\t";
            }
            // line 92
            echo "\t\t</p>
\t";
        }
        // line 93
        echo " ";
        // line 94
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "agenda-widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 94,  317 => 93,  313 => 92,  310 => 91,  307 => 84,  305 => 83,  302 => 82,  291 => 77,  287 => 75,  285 => 74,  280 => 72,  277 => 71,  271 => 69,  269 => 68,  253 => 66,  238 => 65,  218 => 59,  189 => 46,  180 => 42,  163 => 36,  45 => 14,  42 => 13,  50 => 16,  47 => 15,  226 => 81,  220 => 62,  188 => 69,  182 => 66,  175 => 40,  152 => 33,  143 => 45,  122 => 38,  97 => 28,  93 => 25,  86 => 25,  71 => 23,  293 => 100,  289 => 99,  260 => 91,  254 => 88,  251 => 87,  248 => 86,  239 => 82,  237 => 81,  233 => 79,  230 => 83,  225 => 76,  222 => 80,  210 => 70,  208 => 54,  195 => 49,  171 => 54,  161 => 50,  159 => 35,  154 => 47,  150 => 46,  146 => 45,  137 => 42,  132 => 39,  126 => 36,  121 => 35,  118 => 33,  116 => 35,  111 => 29,  105 => 27,  99 => 25,  95 => 24,  83 => 21,  78 => 20,  62 => 14,  59 => 15,  38 => 5,  33 => 9,  29 => 9,  25 => 4,  164 => 83,  156 => 52,  139 => 44,  131 => 42,  127 => 41,  123 => 64,  114 => 60,  104 => 28,  96 => 46,  77 => 20,  74 => 19,  60 => 28,  69 => 18,  644 => 354,  636 => 348,  628 => 343,  619 => 336,  617 => 335,  611 => 331,  609 => 330,  606 => 329,  600 => 326,  597 => 325,  595 => 324,  592 => 323,  585 => 319,  580 => 317,  576 => 316,  573 => 315,  570 => 314,  567 => 312,  558 => 306,  549 => 300,  543 => 297,  534 => 291,  525 => 285,  520 => 282,  517 => 281,  510 => 275,  504 => 273,  497 => 270,  495 => 269,  489 => 265,  483 => 263,  476 => 260,  474 => 259,  469 => 256,  461 => 250,  453 => 245,  439 => 234,  433 => 230,  426 => 224,  420 => 222,  413 => 219,  411 => 218,  405 => 214,  399 => 212,  392 => 209,  390 => 208,  385 => 205,  379 => 200,  373 => 198,  366 => 195,  364 => 194,  359 => 191,  354 => 187,  348 => 184,  345 => 183,  339 => 180,  333 => 177,  330 => 176,  328 => 175,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 102,  295 => 78,  288 => 151,  282 => 73,  275 => 70,  273 => 96,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  242 => 83,  236 => 64,  216 => 72,  212 => 77,  207 => 117,  203 => 52,  192 => 71,  183 => 103,  177 => 41,  170 => 38,  155 => 34,  145 => 71,  138 => 74,  134 => 32,  119 => 62,  107 => 54,  101 => 51,  91 => 23,  80 => 21,  66 => 21,  35 => 12,  30 => 6,  63 => 22,  54 => 13,  43 => 7,  24 => 3,  21 => 2,  82 => 21,  73 => 19,  70 => 17,  64 => 15,  55 => 17,  52 => 10,  48 => 9,  46 => 18,  41 => 10,  37 => 10,  32 => 8,  22 => 2,  88 => 26,  81 => 24,  79 => 23,  75 => 36,  68 => 33,  57 => 14,  49 => 12,  44 => 11,  31 => 8,  27 => 5,  265 => 94,  259 => 120,  252 => 117,  250 => 116,  247 => 131,  241 => 112,  234 => 109,  232 => 108,  229 => 121,  227 => 77,  219 => 100,  213 => 56,  205 => 53,  201 => 91,  199 => 51,  196 => 112,  190 => 86,  186 => 45,  184 => 83,  181 => 58,  173 => 55,  169 => 77,  167 => 52,  162 => 89,  160 => 53,  157 => 71,  151 => 74,  149 => 68,  142 => 44,  135 => 43,  130 => 56,  128 => 69,  125 => 54,  117 => 31,  113 => 58,  108 => 29,  106 => 32,  103 => 26,  94 => 39,  89 => 26,  87 => 22,  84 => 22,  76 => 28,  72 => 21,  67 => 23,  65 => 17,  61 => 20,  56 => 18,  53 => 17,  51 => 17,  40 => 6,  34 => 4,  28 => 3,  26 => 4,  36 => 10,  23 => 3,  19 => 1,);
    }
}
