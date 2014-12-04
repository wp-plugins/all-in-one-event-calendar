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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "no_results"), "html", null, true);
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
                        echo "\">

\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-inner ai1ec-clearfix\">

\t\t\t\t\t\t\t\t\t";
                        // line 32
                        $context["edit_post_link"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["edit_post_link"]) ? $context["edit_post_link"] : null)))) {
                            // line 34
                            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"post-edit-link\" href=\"";
                            echo (isset($context["edit_post_link"]) ? $context["edit_post_link"] : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                            // line 35
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "edit"), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\t  ";
                        // line 42
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_text_color");
                        echo "
\t\t\t\t\t\t\t\t\t\t  ";
                        // line 43
                        echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t  title=\"";
                        // line 44
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 45
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-avatar-wrap ai1ec-pull-left\">
\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 51
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 52
                        echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 53
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-meta\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 60
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "timespan_short");
                        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        // line 62
                        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")))) {
                            // line 63
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-tags ai1ec-meta-divide\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 66
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-description\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 71
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt");
                        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo " ";
                    // line 76
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 77
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo " ";
            // line 80
            echo "\t";
        }
        echo " ";
        // line 81
        echo "</div>

<div class=\"ai1ec-pull-left\">";
        // line 83
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
        return array (  226 => 81,  220 => 79,  188 => 69,  182 => 66,  175 => 62,  152 => 51,  143 => 45,  122 => 38,  97 => 28,  93 => 27,  86 => 25,  71 => 19,  293 => 100,  289 => 99,  260 => 91,  254 => 88,  251 => 87,  248 => 86,  239 => 82,  237 => 81,  233 => 79,  230 => 83,  225 => 76,  222 => 80,  210 => 70,  208 => 69,  195 => 65,  171 => 54,  161 => 50,  159 => 49,  154 => 47,  150 => 46,  146 => 45,  137 => 42,  132 => 39,  126 => 36,  121 => 35,  118 => 34,  116 => 35,  111 => 34,  105 => 28,  99 => 26,  95 => 25,  83 => 22,  78 => 20,  62 => 15,  59 => 15,  38 => 8,  33 => 6,  29 => 5,  25 => 4,  164 => 83,  156 => 52,  139 => 44,  131 => 42,  127 => 41,  123 => 64,  114 => 60,  104 => 52,  96 => 46,  77 => 23,  74 => 37,  60 => 28,  69 => 24,  644 => 354,  636 => 348,  628 => 343,  619 => 336,  617 => 335,  611 => 331,  609 => 330,  606 => 329,  600 => 326,  597 => 325,  595 => 324,  592 => 323,  585 => 319,  580 => 317,  576 => 316,  573 => 315,  570 => 314,  567 => 312,  558 => 306,  549 => 300,  543 => 297,  534 => 291,  525 => 285,  520 => 282,  517 => 281,  510 => 275,  504 => 273,  497 => 270,  495 => 269,  489 => 265,  483 => 263,  476 => 260,  474 => 259,  469 => 256,  461 => 250,  453 => 245,  439 => 234,  433 => 230,  426 => 224,  420 => 222,  413 => 219,  411 => 218,  405 => 214,  399 => 212,  392 => 209,  390 => 208,  385 => 205,  379 => 200,  373 => 198,  366 => 195,  364 => 194,  359 => 191,  354 => 187,  348 => 184,  345 => 183,  339 => 180,  333 => 177,  330 => 176,  328 => 175,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 102,  295 => 156,  288 => 151,  282 => 98,  275 => 97,  273 => 96,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  242 => 83,  236 => 123,  216 => 72,  212 => 77,  207 => 117,  203 => 75,  192 => 71,  183 => 103,  177 => 63,  170 => 60,  155 => 85,  145 => 71,  138 => 74,  134 => 73,  119 => 62,  107 => 54,  101 => 51,  91 => 24,  80 => 39,  66 => 16,  35 => 7,  30 => 6,  63 => 22,  54 => 13,  43 => 17,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 17,  64 => 15,  55 => 12,  52 => 23,  48 => 15,  46 => 18,  41 => 10,  37 => 9,  32 => 4,  22 => 2,  88 => 26,  81 => 24,  79 => 23,  75 => 36,  68 => 33,  57 => 14,  49 => 12,  44 => 11,  31 => 7,  27 => 5,  265 => 94,  259 => 120,  252 => 117,  250 => 116,  247 => 131,  241 => 112,  234 => 109,  232 => 108,  229 => 121,  227 => 77,  219 => 100,  213 => 71,  205 => 76,  201 => 91,  199 => 66,  196 => 112,  190 => 86,  186 => 60,  184 => 83,  181 => 58,  173 => 55,  169 => 77,  167 => 52,  162 => 89,  160 => 53,  157 => 71,  151 => 74,  149 => 68,  142 => 44,  135 => 43,  130 => 56,  128 => 69,  125 => 54,  117 => 61,  113 => 58,  108 => 33,  106 => 32,  103 => 27,  94 => 39,  89 => 26,  87 => 23,  84 => 40,  76 => 28,  72 => 21,  67 => 23,  65 => 17,  61 => 21,  56 => 19,  53 => 13,  51 => 17,  40 => 6,  34 => 11,  28 => 3,  26 => 4,  36 => 9,  23 => 3,  19 => 1,);
    }
}
