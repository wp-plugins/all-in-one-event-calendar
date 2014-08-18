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
        echo (isset($context["before_widget"]) ? $context["before_widget"] : null);
        echo "

";
        // line 3
        if ((!twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
            // line 4
            echo "\t";
            echo (((isset($context["before_title"]) ? $context["before_title"] : null) . (isset($context["title"]) ? $context["title"] : null)) . (isset($context["after_title"]) ? $context["after_title"] : null));
            echo "
";
        }
        // line 6
        echo "
<div class=\"timely ai1ec-agenda-widget-view ai1ec-clearfix\">

\t";
        // line 9
        if (twig_test_empty((isset($context["dates"]) ? $context["dates"] : null))) {
            // line 10
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["text_upcoming_events"]) ? $context["text_upcoming_events"] : null), "html", null, true);
            echo "
\t\t</p>
\t";
        } else {
            // line 14
            echo "\t\t<div>
\t\t\t";
            // line 15
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
                // line 16
                echo "\t\t\t\t<div class=\"ai1ec-date
\t\t\t\t\t";
                // line 17
                if ((!twig_test_empty($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "today")))) {
                    echo "ai1ec-today";
                }
                echo "\">
\t\t\t\t\t<a class=\"ai1ec-date-title ai1ec-load-view\"
\t\t\t\t\t\thref=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "href"), "html_attr");
                echo "\">
\t\t\t\t\t\t<div class=\"ai1ec-month\">";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->month((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
                echo "</div>
\t\t\t\t\t\t<div class=\"ai1ec-day\">";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
                echo "</div>
\t\t\t\t\t\t<div class=\"ai1ec-weekday\">";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
                echo "</div>
\t\t\t\t\t\t";
                // line 23
                if ((isset($context["show_year_in_agenda_dates"]) ? $context["show_year_in_agenda_dates"] : null)) {
                    // line 24
                    echo "\t\t\t\t\t\t\t<div class=\"ai1ec-year\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->year((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"ai1ec-date-events\">
\t\t\t\t\t\t";
                // line 28
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
                    // line 29
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
                        // line 30
                        echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-event
\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 31
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 32
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "instance_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 33
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        echo "\">

\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 35
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"ai1ec-popup-trigger\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 37
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            // line 38
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-allday-badge\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 39
                            echo twig_escape_filter($this->env, (isset($context["text_all_day"]) ? $context["text_all_day"] : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 42
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 43
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "short_start_time"), "method"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 46
                        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 48
                        echo $this->env->getExtension('ai1ec')->truncate($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method"));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 49
                        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method"))))) {
                            // line 50
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 51
                            echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method")), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 53
                        echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t";
                        // line 56
                        $this->env->loadTemplate("event-popup.twig")->display(array_merge($context, array("text_venue_separator" => (isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null))));
                        // line 59
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
                    // line 61
                    echo " ";
                    // line 62
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
                // line 63
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
            // line 65
            echo " ";
            // line 66
            echo "\t\t</div>
\t";
        }
        // line 67
        echo " ";
        // line 68
        echo "
\t";
        // line 69
        if (((isset($context["show_calendar_button"]) ? $context["show_calendar_button"] : null) || (isset($context["show_subscribe_buttons"]) ? $context["show_subscribe_buttons"] : null))) {
            // line 70
            echo "\t\t<p>
\t\t\t";
            // line 71
            if ((isset($context["show_calendar_button"]) ? $context["show_calendar_button"] : null)) {
                // line 72
                echo "\t\t\t\t<a class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs ai1ec-pull-right
\t\t\t\t\tai1ec-calendar-link\"
\t\t\t\t\thref=\"";
                // line 74
                echo twig_escape_filter($this->env, (isset($context["calendar_url"]) ? $context["calendar_url"] : null), "html_attr");
                echo "\">
\t\t\t\t\t";
                // line 75
                echo twig_escape_filter($this->env, (isset($context["text_view_calendar"]) ? $context["text_view_calendar"] : null), "html", null, true);
                echo "
\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-arrow-right\"></i>
\t\t\t\t</a>
\t\t\t";
            }
            // line 79
            echo "
\t\t\t";
            // line 80
            if ((isset($context["show_subscribe_buttons"]) ? $context["show_subscribe_buttons"] : null)) {
                // line 81
                echo "\t\t\t\t";
                $this->env->loadTemplate("subscribe-buttons.twig")->display(array_merge($context, array("button_classes" => "ai1ec-btn-xs", "export_url" => (isset($context["subscribe_url"]) ? $context["subscribe_url"] : null), "export_url_no_html" => (isset($context["subscribe_url_no_html"]) ? $context["subscribe_url_no_html"] : null), "subscribe_label" => (isset($context["text_subscribe_label"]) ? $context["text_subscribe_label"] : null), "text" => (isset($context["subscribe_buttons_text"]) ? $context["subscribe_buttons_text"] : null))));
                // line 88
                echo "\t\t\t";
            }
            // line 89
            echo "\t\t</p>
\t";
        }
        // line 90
        echo " ";
        // line 91
        echo "
</div>

";
        // line 94
        echo (isset($context["after_widget"]) ? $context["after_widget"] : null);
        echo "
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
        return array (  306 => 90,  296 => 81,  294 => 80,  280 => 74,  274 => 71,  271 => 70,  264 => 67,  260 => 66,  225 => 61,  209 => 59,  192 => 49,  188 => 48,  178 => 43,  175 => 42,  152 => 33,  148 => 32,  144 => 31,  141 => 30,  102 => 26,  90 => 22,  78 => 19,  42 => 11,  39 => 10,  217 => 82,  211 => 80,  194 => 50,  183 => 72,  179 => 70,  168 => 64,  161 => 61,  143 => 45,  116 => 35,  111 => 34,  93 => 27,  86 => 21,  81 => 24,  59 => 15,  291 => 79,  283 => 105,  276 => 72,  267 => 102,  254 => 97,  248 => 94,  245 => 93,  233 => 88,  231 => 87,  224 => 84,  221 => 84,  207 => 56,  204 => 76,  202 => 53,  197 => 51,  189 => 65,  180 => 62,  176 => 60,  170 => 57,  153 => 55,  140 => 47,  137 => 46,  132 => 40,  122 => 38,  112 => 32,  99 => 26,  95 => 25,  91 => 24,  83 => 22,  79 => 21,  58 => 14,  50 => 12,  45 => 11,  29 => 9,  25 => 4,  164 => 37,  156 => 77,  139 => 44,  131 => 42,  127 => 41,  123 => 29,  114 => 33,  104 => 52,  96 => 24,  77 => 23,  74 => 19,  68 => 16,  60 => 28,  27 => 5,  66 => 16,  598 => 338,  590 => 332,  582 => 327,  573 => 320,  571 => 318,  565 => 314,  563 => 313,  560 => 312,  554 => 309,  551 => 308,  549 => 307,  546 => 306,  539 => 302,  534 => 300,  530 => 299,  527 => 298,  524 => 297,  521 => 295,  512 => 289,  503 => 283,  497 => 280,  488 => 274,  479 => 268,  474 => 265,  471 => 264,  464 => 258,  458 => 256,  451 => 253,  449 => 252,  443 => 248,  437 => 246,  430 => 243,  428 => 242,  423 => 239,  415 => 233,  407 => 228,  393 => 217,  387 => 213,  380 => 207,  374 => 205,  367 => 202,  365 => 201,  359 => 197,  353 => 195,  346 => 192,  344 => 191,  339 => 188,  333 => 183,  327 => 181,  320 => 178,  318 => 177,  313 => 94,  308 => 91,  302 => 89,  299 => 88,  293 => 163,  287 => 106,  284 => 75,  282 => 158,  278 => 156,  275 => 154,  269 => 69,  266 => 68,  258 => 65,  255 => 142,  251 => 140,  249 => 139,  242 => 63,  236 => 89,  222 => 125,  216 => 81,  210 => 78,  203 => 78,  187 => 104,  174 => 59,  166 => 38,  159 => 35,  155 => 85,  145 => 49,  138 => 74,  134 => 41,  119 => 62,  107 => 29,  101 => 27,  97 => 28,  80 => 39,  71 => 17,  62 => 15,  49 => 12,  35 => 12,  30 => 6,  63 => 21,  57 => 14,  54 => 17,  43 => 17,  31 => 6,  24 => 3,  21 => 2,  82 => 20,  73 => 18,  70 => 24,  64 => 15,  55 => 13,  52 => 23,  48 => 14,  46 => 18,  41 => 10,  37 => 9,  32 => 6,  22 => 2,  265 => 123,  259 => 100,  252 => 117,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 108,  229 => 129,  227 => 62,  219 => 82,  213 => 81,  205 => 93,  201 => 114,  199 => 74,  196 => 77,  190 => 86,  186 => 84,  184 => 46,  181 => 101,  173 => 67,  169 => 39,  167 => 76,  162 => 54,  160 => 72,  157 => 52,  151 => 50,  149 => 50,  142 => 63,  135 => 43,  130 => 56,  128 => 38,  125 => 54,  117 => 34,  113 => 58,  108 => 33,  106 => 28,  103 => 43,  94 => 23,  89 => 26,  87 => 23,  84 => 40,  76 => 38,  72 => 27,  67 => 23,  65 => 17,  61 => 21,  56 => 19,  53 => 13,  51 => 15,  40 => 10,  34 => 7,  28 => 3,  26 => 4,  36 => 9,  23 => 3,  19 => 1,);
    }
}
