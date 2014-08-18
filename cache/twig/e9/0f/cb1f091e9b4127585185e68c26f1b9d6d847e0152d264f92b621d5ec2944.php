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
        echo "\">
\t";
        // line 5
        if (twig_test_empty((isset($context["dates"]) ? $context["dates"] : null))) {
            // line 6
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 7
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("There are no upcoming events to display at this time."), "html", null, true);
            echo "
\t\t</p>
\t";
        } else {
            // line 10
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
            foreach ($context['_seq'] as $context["date"] => $context["date_info"]) {
                // line 11
                echo "\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "events"));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 12
                    echo "\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 13
                        echo "\t\t\t\t\t<div class=\"ai1ec-event
\t\t\t\t\t\tai1ec-event-id-";
                        // line 14
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 15
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "instance_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t";
                        // line 16
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        echo "\">
\t\t\t\t\t\t<div class=\"ai1ec-event-wrap ai1ec-clearfix\">
\t\t\t\t\t\t\t<div class=\"ai1ec-date-block-wrap\"
\t\t\t\t\t\t\t\t";
                        // line 19
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "category_bg_color"), "method");
                        echo ">
\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-view\"
\t\t\t\t\t\t\t\t\thref=\"";
                        // line 21
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "href"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t";
                        // line 22
                        echo (isset($context["data_type"]) ? $context["data_type"] : null);
                        echo ">
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-month\">";
                        // line 23
                        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->month((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-day\">";
                        // line 24
                        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-weekday\">";
                        // line 25
                        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t";
                        // line 26
                        if ((isset($context["show_year_in_agenda_dates"]) ? $context["show_year_in_agenda_dates"] : null)) {
                            // line 27
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-year\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->year((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
                            echo "</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 29
                        echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
                        // line 32
                        $context["edit_post_link"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "edit_post_link"), "method");
                        // line 33
                        echo "\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["edit_post_link"]) ? $context["edit_post_link"] : null)))) {
                            // line 34
                            echo "\t\t\t\t\t\t\t\t<a class=\"post-edit-link\" href=\"";
                            echo (isset($context["edit_post_link"]) ? $context["edit_post_link"] : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                            // line 35
                            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Edit"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                        }
                        // line 38
                        echo "
\t\t\t\t\t\t\t<div class=\"ai1ec-event-title-wrap\">
\t\t\t\t\t\t\t\t";
                        // line 40
                        $context["title"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method");
                        // line 41
                        echo "\t\t\t\t\t\t\t\t";
                        $context["location"] = ((((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method"))))) ? ((" " . sprintf(Ai1ec_I18n::__("@ %s"), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method")))) : (""));
                        // line 46
                        echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-title\"
\t\t\t\t\t\t\t\t\ttitle=\"";
                        // line 47
                        echo ((isset($context["title"]) ? $context["title"] : null) . (isset($context["location"]) ? $context["location"] : null));
                        echo "\"><div>
\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 49
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t  ";
                        // line 50
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "category_text_color"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t  ";
                        // line 51
                        echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                        echo ">
\t\t\t\t\t\t\t\t\t\t";
                        // line 52
                        echo (isset($context["title"]) ? $context["title"] : null);
                        echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        // line 54
                        if ((!twig_test_empty((isset($context["location"]) ? $context["location"] : null)))) {
                            // line 55
                            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\">";
                            echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 57
                        echo "\t\t\t\t\t\t\t\t</div></div>
\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t";
                        // line 59
                        if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method"))))) {
                            // line 60
                            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary
\t\t\t\t\t\t\t\t\t\t\t\tai1ec-btn-xs ai1ec-buy-tickets\"
\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\" href=\"";
                            // line 62
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method"), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 63
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "ticket_url_label"), "method"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 65
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null));
                        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ai1ec-clearfix\">
\t\t\t\t\t\t\t\t";
                        // line 69
                        echo $this->env->getExtension('ai1ec')->avatar((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "content_img", 2 => "location_avatar", 3 => "category_avatar"));
                        // line 74
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 75
                        $context["post_excerpt"] = trim($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "post_excerpt"), "method"));
                        // line 76
                        echo "\t\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["post_excerpt"]) ? $context["post_excerpt"] : null)))) {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-description\">
\t\t\t\t\t\t\t\t\t\t";
                            // line 78
                            echo (isset($context["post_excerpt"]) ? $context["post_excerpt"] : null);
                            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 81
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        // line 82
                        $context["categories"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "categories_html"), "method");
                        // line 83
                        echo "\t\t\t\t\t\t\t";
                        $context["tags"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "tags_html"), "method");
                        // line 84
                        echo "\t\t\t\t\t\t\t";
                        if (((!twig_test_empty((isset($context["categories"]) ? $context["categories"] : null))) || (!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null))))) {
                            // line 85
                            echo "\t\t\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                            // line 87
                            if ((!twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)))) {
                                // line 88
                                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-categories\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 89
                                echo (isset($context["categories"]) ? $context["categories"] : null);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 92
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if ((!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null)))) {
                                // line 93
                                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-tags\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 94
                                echo (isset($context["tags"]) ? $context["tags"] : null);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 97
                            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t";
                        }
                        // line 100
                        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo " ";
                    // line 103
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 104
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
            // line 105
            echo "\t";
        }
        echo " ";
        // line 106
        echo "</div>

<div class=\"ai1ec-pull-left\">";
        // line 108
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
        return array (  291 => 108,  283 => 105,  276 => 104,  267 => 102,  254 => 97,  248 => 94,  245 => 93,  233 => 88,  231 => 87,  224 => 84,  221 => 83,  207 => 77,  204 => 76,  202 => 75,  197 => 69,  189 => 65,  180 => 62,  176 => 60,  170 => 57,  153 => 51,  140 => 47,  137 => 46,  132 => 40,  122 => 35,  112 => 32,  99 => 26,  95 => 25,  91 => 24,  83 => 22,  79 => 21,  58 => 14,  50 => 12,  45 => 11,  29 => 5,  25 => 4,  164 => 55,  156 => 77,  139 => 68,  131 => 66,  127 => 65,  123 => 64,  114 => 33,  104 => 52,  96 => 46,  77 => 38,  74 => 19,  68 => 33,  60 => 28,  27 => 7,  66 => 16,  598 => 338,  590 => 332,  582 => 327,  573 => 320,  571 => 318,  565 => 314,  563 => 313,  560 => 312,  554 => 309,  551 => 308,  549 => 307,  546 => 306,  539 => 302,  534 => 300,  530 => 299,  527 => 298,  524 => 297,  521 => 295,  512 => 289,  503 => 283,  497 => 280,  488 => 274,  479 => 268,  474 => 265,  471 => 264,  464 => 258,  458 => 256,  451 => 253,  449 => 252,  443 => 248,  437 => 246,  430 => 243,  428 => 242,  423 => 239,  415 => 233,  407 => 228,  393 => 217,  387 => 213,  380 => 207,  374 => 205,  367 => 202,  365 => 201,  359 => 197,  353 => 195,  346 => 192,  344 => 191,  339 => 188,  333 => 183,  327 => 181,  320 => 178,  318 => 177,  313 => 174,  308 => 170,  302 => 167,  299 => 166,  293 => 163,  287 => 106,  284 => 159,  282 => 158,  278 => 156,  275 => 154,  269 => 103,  266 => 149,  258 => 143,  255 => 142,  251 => 140,  249 => 139,  242 => 92,  236 => 89,  222 => 125,  216 => 81,  210 => 78,  203 => 115,  187 => 104,  174 => 59,  166 => 90,  159 => 86,  155 => 85,  145 => 49,  138 => 74,  134 => 41,  119 => 62,  107 => 29,  101 => 27,  97 => 50,  80 => 39,  71 => 35,  62 => 15,  49 => 14,  35 => 9,  30 => 7,  63 => 21,  57 => 25,  54 => 17,  43 => 17,  31 => 6,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 24,  64 => 15,  55 => 13,  52 => 23,  48 => 15,  46 => 18,  41 => 7,  37 => 9,  32 => 4,  22 => 2,  265 => 123,  259 => 100,  252 => 117,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 108,  229 => 129,  227 => 85,  219 => 82,  213 => 96,  205 => 93,  201 => 114,  199 => 74,  196 => 111,  190 => 86,  186 => 84,  184 => 63,  181 => 101,  173 => 79,  169 => 77,  167 => 76,  162 => 54,  160 => 72,  157 => 52,  151 => 74,  149 => 50,  142 => 63,  135 => 67,  130 => 56,  128 => 38,  125 => 54,  117 => 34,  113 => 58,  108 => 45,  106 => 44,  103 => 43,  94 => 39,  89 => 42,  87 => 23,  84 => 40,  76 => 38,  72 => 27,  67 => 23,  65 => 23,  61 => 21,  56 => 19,  53 => 18,  51 => 17,  40 => 10,  34 => 7,  28 => 3,  26 => 4,  36 => 5,  23 => 3,  19 => 1,);
    }
}
