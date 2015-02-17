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
                $this->env->loadTemplate("subscribe-buttons.twig")->display(array_merge($context, array("button_classes" => "ai1ec-btn-xs", "export_url" => (isset($context["subscribe_url"]) ? $context["subscribe_url"] : null), "export_url_no_html" => (isset($context["subscribe_url_no_html"]) ? $context["subscribe_url_no_html"] : null), "subscribe_label" => (isset($context["text_subscribe_label"]) ? $context["text_subscribe_label"] : null), "text" => (isset($context["subscribe_buttons_text"]) ? $context["subscribe_buttons_text"] : null), "alignment" => "right")));
                // line 92
                echo "\t\t\t";
            }
            // line 93
            echo "\t\t</p>
\t";
        }
        // line 94
        echo " ";
        // line 95
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
        return array (  319 => 95,  317 => 94,  313 => 93,  310 => 92,  307 => 84,  305 => 83,  302 => 82,  291 => 77,  287 => 75,  285 => 74,  280 => 72,  277 => 71,  271 => 69,  269 => 68,  253 => 66,  238 => 65,  220 => 62,  205 => 53,  195 => 49,  189 => 46,  186 => 45,  180 => 42,  175 => 40,  152 => 33,  111 => 29,  45 => 14,  42 => 13,  120 => 35,  94 => 27,  71 => 23,  135 => 41,  127 => 38,  89 => 26,  47 => 15,  221 => 81,  217 => 79,  213 => 56,  211 => 77,  194 => 73,  168 => 61,  166 => 60,  161 => 58,  147 => 45,  115 => 34,  110 => 34,  278 => 96,  274 => 95,  267 => 94,  260 => 93,  258 => 92,  250 => 90,  245 => 87,  239 => 84,  233 => 82,  227 => 79,  224 => 78,  222 => 77,  215 => 74,  210 => 72,  198 => 67,  191 => 64,  187 => 63,  178 => 58,  169 => 55,  159 => 35,  153 => 48,  151 => 51,  133 => 41,  122 => 35,  114 => 33,  112 => 32,  99 => 25,  95 => 24,  83 => 21,  78 => 25,  137 => 67,  131 => 64,  125 => 61,  117 => 31,  103 => 26,  90 => 45,  82 => 39,  52 => 10,  34 => 4,  677 => 347,  669 => 341,  661 => 336,  652 => 329,  650 => 328,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 297,  574 => 291,  567 => 286,  561 => 284,  555 => 282,  553 => 281,  548 => 278,  545 => 277,  538 => 271,  532 => 269,  525 => 266,  523 => 265,  517 => 261,  511 => 259,  504 => 256,  502 => 255,  497 => 252,  489 => 246,  481 => 241,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 215,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 184,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 157,  295 => 78,  288 => 151,  282 => 73,  275 => 70,  273 => 145,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  247 => 131,  242 => 128,  236 => 64,  229 => 121,  212 => 73,  207 => 71,  203 => 52,  192 => 110,  183 => 69,  170 => 38,  138 => 44,  128 => 38,  107 => 31,  91 => 23,  80 => 24,  66 => 21,  61 => 20,  43 => 7,  73 => 18,  64 => 15,  55 => 17,  88 => 26,  79 => 22,  75 => 21,  68 => 33,  57 => 14,  118 => 43,  96 => 28,  85 => 25,  69 => 24,  60 => 28,  58 => 13,  49 => 12,  36 => 10,  204 => 84,  196 => 74,  177 => 41,  171 => 73,  165 => 53,  163 => 36,  158 => 61,  154 => 60,  150 => 76,  146 => 45,  142 => 44,  136 => 41,  130 => 39,  105 => 27,  101 => 27,  93 => 28,  87 => 22,  81 => 24,  74 => 19,  67 => 18,  65 => 19,  59 => 15,  53 => 17,  44 => 11,  25 => 4,  21 => 2,  77 => 20,  70 => 19,  62 => 14,  54 => 13,  50 => 16,  29 => 9,  40 => 11,  38 => 5,  27 => 5,  218 => 59,  216 => 119,  208 => 54,  201 => 68,  199 => 51,  188 => 109,  179 => 67,  173 => 64,  167 => 95,  162 => 89,  160 => 91,  155 => 34,  145 => 78,  141 => 81,  134 => 32,  126 => 37,  124 => 36,  121 => 38,  119 => 62,  113 => 37,  109 => 32,  104 => 56,  100 => 29,  92 => 27,  84 => 40,  76 => 23,  72 => 21,  63 => 16,  56 => 18,  51 => 20,  30 => 6,  46 => 18,  32 => 8,  26 => 6,  23 => 3,  48 => 9,  33 => 9,  28 => 3,  24 => 3,  41 => 10,  39 => 10,  37 => 10,  35 => 12,  31 => 8,  19 => 1,);
    }
}
