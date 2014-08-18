<?php

/* stream.twig */
class __TwigTemplate_26624a4f92c0d3894cd5eb735508b4c009471e957872345c3b56f7b41ef3ea7e extends Twig_Template
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

<div class=\"ai1ec-stream-view\">
\t";
        // line 4
        if (twig_test_empty((isset($context["dates"]) ? $context["dates"] : null))) {
            // line 5
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("There are no upcoming events to display at this time."), "html", null, true);
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
                echo "\t\t\t<div class=\"ai1ec-date ";
                if ($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "today")) {
                    echo "ai1ec-today";
                }
                echo "\">
\t\t\t\t<div class=\"ai1ec-date-title\">
\t\t\t\t\t<a class=\"ai1ec-load-view\" href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "href"), "html_attr");
                echo "\"
\t\t\t\t\t\t";
                // line 13
                echo (isset($context["data_type"]) ? $context["data_type"] : null);
                echo ">
\t\t\t\t\t\t";
                // line 14
                if ((isset($context["show_year_in_agenda_dates"]) ? $context["show_year_in_agenda_dates"] : null)) {
                    // line 15
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n((isset($context["date"]) ? $context["date"] : null), "F j, Y (l)"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 17
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n((isset($context["date"]) ? $context["date"] : null), "F j (l)"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t\t</a>
\t\t\t\t</div>

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
                        echo "\t\t\t\t\t\t\t<div class=\"ai1ec-clearfix ai1ec-event
\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "instance_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 28
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        echo "\">

\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-inner ai1ec-clearfix\">

\t\t\t\t\t\t\t\t\t";
                        // line 32
                        $context["edit_post_link"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "edit_post_link"), "method");
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["edit_post_link"]) ? $context["edit_post_link"] : null)))) {
                            // line 34
                            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"post-edit-link\" href=\"";
                            echo (isset($context["edit_post_link"]) ? $context["edit_post_link"] : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                            // line 35
                            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Edit"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 38
                        echo "
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\t  ";
                        // line 42
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "category_text_color"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t\t  ";
                        // line 43
                        echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t  title=\"";
                        // line 44
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 45
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-avatar-wrap ai1ec-pull-left\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 50
                        echo $this->env->getExtension('ai1ec')->avatar((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "content_img", 2 => "category_avatar", 3 => "default_avatar"));
                        // line 55
                        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-meta\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 61
                        echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null), "short");
                        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        // line 63
                        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method")))) {
                            // line 64
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-tags ai1ec-meta-divide\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 67
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 70
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-description\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 72
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "post_excerpt"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo " ";
                    // line 77
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 78
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo " ";
            // line 81
            echo "\t";
        }
        echo " ";
        // line 82
        echo "</div>

<div class=\"ai1ec-pull-left\">";
        // line 84
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "stream.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 82,  211 => 80,  194 => 76,  183 => 72,  179 => 70,  168 => 64,  161 => 61,  143 => 45,  116 => 35,  111 => 34,  93 => 27,  86 => 25,  81 => 24,  59 => 15,  291 => 108,  283 => 105,  276 => 104,  267 => 102,  254 => 97,  248 => 94,  245 => 93,  233 => 88,  231 => 87,  224 => 84,  221 => 84,  207 => 77,  204 => 76,  202 => 75,  197 => 69,  189 => 65,  180 => 62,  176 => 60,  170 => 57,  153 => 55,  140 => 47,  137 => 46,  132 => 40,  122 => 38,  112 => 32,  99 => 26,  95 => 25,  91 => 24,  83 => 22,  79 => 21,  58 => 14,  50 => 12,  45 => 11,  29 => 5,  25 => 4,  164 => 55,  156 => 77,  139 => 44,  131 => 42,  127 => 41,  123 => 64,  114 => 33,  104 => 52,  96 => 46,  77 => 23,  74 => 19,  68 => 33,  60 => 28,  27 => 5,  66 => 16,  598 => 338,  590 => 332,  582 => 327,  573 => 320,  571 => 318,  565 => 314,  563 => 313,  560 => 312,  554 => 309,  551 => 308,  549 => 307,  546 => 306,  539 => 302,  534 => 300,  530 => 299,  527 => 298,  524 => 297,  521 => 295,  512 => 289,  503 => 283,  497 => 280,  488 => 274,  479 => 268,  474 => 265,  471 => 264,  464 => 258,  458 => 256,  451 => 253,  449 => 252,  443 => 248,  437 => 246,  430 => 243,  428 => 242,  423 => 239,  415 => 233,  407 => 228,  393 => 217,  387 => 213,  380 => 207,  374 => 205,  367 => 202,  365 => 201,  359 => 197,  353 => 195,  346 => 192,  344 => 191,  339 => 188,  333 => 183,  327 => 181,  320 => 178,  318 => 177,  313 => 174,  308 => 170,  302 => 167,  299 => 166,  293 => 163,  287 => 106,  284 => 159,  282 => 158,  278 => 156,  275 => 154,  269 => 103,  266 => 149,  258 => 143,  255 => 142,  251 => 140,  249 => 139,  242 => 92,  236 => 89,  222 => 125,  216 => 81,  210 => 78,  203 => 78,  187 => 104,  174 => 59,  166 => 63,  159 => 86,  155 => 85,  145 => 49,  138 => 74,  134 => 41,  119 => 62,  107 => 29,  101 => 27,  97 => 28,  80 => 39,  71 => 19,  62 => 15,  49 => 12,  35 => 9,  30 => 6,  63 => 21,  57 => 14,  54 => 17,  43 => 17,  31 => 6,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 24,  64 => 15,  55 => 13,  52 => 23,  48 => 15,  46 => 18,  41 => 10,  37 => 9,  32 => 4,  22 => 2,  265 => 123,  259 => 100,  252 => 117,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 108,  229 => 129,  227 => 85,  219 => 82,  213 => 81,  205 => 93,  201 => 114,  199 => 74,  196 => 77,  190 => 86,  186 => 84,  184 => 63,  181 => 101,  173 => 67,  169 => 77,  167 => 76,  162 => 54,  160 => 72,  157 => 52,  151 => 50,  149 => 50,  142 => 63,  135 => 43,  130 => 56,  128 => 38,  125 => 54,  117 => 34,  113 => 58,  108 => 33,  106 => 32,  103 => 43,  94 => 39,  89 => 26,  87 => 23,  84 => 40,  76 => 38,  72 => 27,  67 => 23,  65 => 17,  61 => 21,  56 => 19,  53 => 13,  51 => 17,  40 => 10,  34 => 7,  28 => 3,  26 => 4,  36 => 9,  23 => 3,  19 => 1,);
    }
}
