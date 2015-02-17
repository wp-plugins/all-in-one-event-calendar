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
                echo "\">
\t\t\t\t\t\t";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "full_month"), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "day"), "html", null, true);
                // line 15
                if ((isset($context["show_year_in_agenda_dates"]) ? $context["show_year_in_agenda_dates"] : null)) {
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "year"), "html", null, true);
                    // line 16
                    echo "
\t\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t\t\t(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "full_weekday"), "html", null, true);
                echo ")
\t\t\t\t\t</a>
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
\t\t\t\t\t\t\t\t\t\t  title=\"";
                        // line 43
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 44
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-avatar-wrap ai1ec-pull-left\">
\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 50
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 51
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-meta\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 58
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "timespan_short");
                        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        // line 60
                        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")))) {
                            // line 61
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-tags ai1ec-meta-divide\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 64
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 67
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-description\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 69
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
                    // line 73
                    echo " ";
                    // line 74
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 75
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo " ";
            // line 78
            echo "\t";
        }
        echo " ";
        // line 79
        echo "</div>

<div class=\"ai1ec-pull-left\">";
        // line 81
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
        return array (  221 => 81,  217 => 79,  213 => 78,  211 => 77,  194 => 73,  168 => 61,  166 => 60,  161 => 58,  147 => 50,  115 => 35,  110 => 34,  278 => 96,  274 => 95,  267 => 94,  260 => 93,  258 => 92,  250 => 90,  245 => 87,  239 => 84,  233 => 82,  227 => 79,  224 => 78,  222 => 77,  215 => 74,  210 => 72,  198 => 67,  191 => 64,  187 => 63,  178 => 58,  169 => 55,  159 => 50,  153 => 48,  151 => 51,  133 => 41,  122 => 35,  114 => 33,  112 => 32,  99 => 26,  95 => 25,  83 => 22,  78 => 20,  137 => 67,  131 => 64,  125 => 61,  117 => 34,  103 => 54,  90 => 45,  82 => 39,  52 => 23,  34 => 11,  677 => 347,  669 => 341,  661 => 336,  652 => 329,  650 => 328,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 297,  574 => 291,  567 => 286,  561 => 284,  555 => 282,  553 => 281,  548 => 278,  545 => 277,  538 => 271,  532 => 269,  525 => 266,  523 => 265,  517 => 261,  511 => 259,  504 => 256,  502 => 255,  497 => 252,  489 => 246,  481 => 241,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 215,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 184,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 157,  295 => 156,  288 => 151,  282 => 98,  275 => 146,  273 => 145,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  247 => 131,  242 => 128,  236 => 83,  229 => 121,  212 => 73,  207 => 71,  203 => 75,  192 => 110,  183 => 69,  170 => 95,  138 => 44,  128 => 38,  107 => 33,  91 => 24,  80 => 24,  66 => 16,  61 => 21,  43 => 17,  73 => 18,  64 => 15,  55 => 12,  88 => 26,  79 => 23,  75 => 36,  68 => 33,  57 => 14,  118 => 43,  96 => 28,  85 => 25,  69 => 24,  60 => 28,  58 => 13,  49 => 12,  36 => 9,  204 => 84,  196 => 74,  177 => 100,  171 => 73,  165 => 53,  163 => 52,  158 => 61,  154 => 60,  150 => 76,  146 => 45,  142 => 44,  136 => 56,  130 => 42,  105 => 32,  101 => 27,  93 => 42,  87 => 23,  81 => 24,  74 => 36,  67 => 18,  65 => 19,  59 => 15,  53 => 13,  44 => 11,  25 => 4,  21 => 2,  77 => 34,  70 => 17,  62 => 15,  54 => 13,  50 => 15,  29 => 5,  40 => 11,  38 => 8,  27 => 5,  218 => 75,  216 => 119,  208 => 116,  201 => 68,  199 => 82,  188 => 109,  179 => 67,  173 => 64,  167 => 95,  162 => 89,  160 => 91,  155 => 85,  145 => 78,  141 => 81,  134 => 43,  126 => 41,  124 => 66,  121 => 38,  119 => 62,  113 => 58,  109 => 57,  104 => 56,  100 => 53,  92 => 27,  84 => 40,  76 => 23,  72 => 21,  63 => 16,  56 => 19,  51 => 10,  30 => 6,  46 => 18,  32 => 8,  26 => 4,  23 => 3,  48 => 15,  33 => 6,  28 => 5,  24 => 3,  41 => 10,  39 => 10,  37 => 6,  35 => 7,  31 => 7,  19 => 1,);
    }
}
