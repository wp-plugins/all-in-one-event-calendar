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
            foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                // line 17
                echo "
\t\t\t\t\t";
                // line 18
                if ((!twig_test_empty($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "date")))) {
                    // line 19
                    echo "\t\t\t\t\t\t<td ";
                    if ((!twig_test_empty($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "today")))) {
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
                        // line 35
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
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
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "multiday_end_day"), "method"), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-start-truncated=\"";
                            // line 39
                            echo (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start_truncated"), "method")) ? ("true") : ("false"));
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-end-truncated=\"";
                            // line 40
                            echo (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "end_truncated"), "method")) ? ("true") : ("false"));
                            echo "\"
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t\tdata-instance-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "instance_id"), "method"), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event
\t\t\t\t\t\t\t\t\t\t\tai1ec-popup-trigger
\t\t\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 45
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 46
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "instance_id"), "method"), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "color_style"), "method"), "html_attr");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 54
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 56
                        if ((!$this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday"))) {
                            // line 57
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 58
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "short_start_time"), "method"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 61
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t";
                        // line 64
                        $this->env->loadTemplate("event-popup.twig")->display(array_merge($context, array("text_venue_separator" => (isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null))));
                        // line 67
                        echo "
\t\t\t\t\t\t\t\t";
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
                    // line 69
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                } else {
                    // line 71
                    echo " ";
                    // line 72
                    echo "\t\t\t\t\t\t<td class=\"ai1ec-empty\"></td>
\t\t\t\t\t";
                }
                // line 73
                echo " ";
                // line 74
                echo "
\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo " ";
            // line 76
            echo "\t\t\t</tr>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo " ";
        // line 78
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
        return array (  261 => 74,  255 => 72,  191 => 47,  171 => 40,  120 => 29,  321 => 132,  316 => 129,  310 => 124,  305 => 122,  295 => 78,  292 => 115,  285 => 111,  268 => 105,  256 => 99,  237 => 92,  215 => 56,  187 => 46,  165 => 67,  150 => 61,  146 => 60,  136 => 58,  105 => 44,  85 => 36,  133 => 49,  118 => 49,  98 => 31,  69 => 23,  33 => 7,  47 => 18,  100 => 42,  88 => 37,  298 => 115,  288 => 112,  281 => 110,  279 => 110,  263 => 103,  253 => 71,  244 => 94,  239 => 93,  228 => 87,  226 => 61,  220 => 58,  200 => 76,  195 => 48,  193 => 72,  177 => 61,  155 => 63,  121 => 50,  92 => 25,  44 => 10,  313 => 125,  306 => 118,  302 => 120,  299 => 88,  296 => 114,  294 => 80,  280 => 74,  274 => 71,  266 => 104,  260 => 66,  209 => 79,  178 => 43,  175 => 60,  159 => 64,  152 => 62,  148 => 32,  144 => 46,  102 => 26,  90 => 38,  78 => 23,  42 => 9,  39 => 7,  217 => 57,  211 => 80,  194 => 50,  183 => 45,  168 => 64,  161 => 61,  143 => 45,  116 => 38,  111 => 24,  93 => 27,  86 => 21,  81 => 24,  59 => 15,  287 => 106,  283 => 105,  276 => 75,  267 => 102,  254 => 97,  248 => 69,  242 => 94,  236 => 89,  233 => 67,  231 => 64,  224 => 84,  221 => 84,  216 => 82,  210 => 54,  207 => 56,  204 => 77,  202 => 53,  197 => 51,  189 => 65,  180 => 71,  176 => 42,  174 => 59,  170 => 69,  153 => 55,  140 => 47,  137 => 46,  132 => 56,  122 => 45,  112 => 36,  107 => 29,  101 => 27,  99 => 27,  95 => 26,  91 => 17,  83 => 25,  79 => 28,  58 => 15,  50 => 12,  45 => 11,  29 => 10,  25 => 4,  164 => 37,  156 => 36,  145 => 49,  139 => 44,  131 => 42,  127 => 47,  123 => 29,  114 => 25,  104 => 52,  96 => 19,  77 => 23,  74 => 16,  68 => 14,  60 => 28,  27 => 4,  66 => 16,  640 => 354,  632 => 348,  624 => 343,  615 => 336,  613 => 334,  607 => 330,  605 => 329,  602 => 328,  596 => 325,  593 => 324,  591 => 323,  588 => 322,  581 => 318,  576 => 316,  572 => 315,  569 => 314,  566 => 313,  563 => 311,  554 => 305,  545 => 299,  539 => 296,  530 => 290,  521 => 284,  516 => 281,  513 => 280,  506 => 274,  500 => 272,  493 => 269,  491 => 268,  485 => 264,  479 => 262,  472 => 259,  470 => 258,  465 => 255,  457 => 249,  449 => 244,  435 => 233,  429 => 229,  422 => 223,  416 => 221,  409 => 218,  407 => 217,  401 => 213,  395 => 211,  388 => 208,  386 => 207,  381 => 204,  375 => 199,  369 => 197,  362 => 194,  360 => 193,  355 => 190,  350 => 186,  344 => 183,  341 => 182,  335 => 179,  329 => 176,  326 => 175,  324 => 174,  320 => 172,  317 => 170,  311 => 166,  308 => 123,  300 => 119,  297 => 117,  293 => 77,  291 => 79,  284 => 75,  278 => 76,  271 => 106,  269 => 106,  264 => 67,  258 => 101,  245 => 93,  243 => 130,  238 => 127,  225 => 61,  212 => 84,  208 => 117,  203 => 78,  192 => 77,  188 => 48,  179 => 70,  166 => 57,  158 => 88,  141 => 45,  134 => 34,  124 => 30,  115 => 48,  109 => 23,  97 => 28,  80 => 24,  71 => 15,  62 => 19,  49 => 12,  35 => 7,  30 => 4,  63 => 18,  57 => 14,  54 => 12,  43 => 17,  31 => 8,  24 => 4,  21 => 2,  82 => 35,  73 => 22,  70 => 24,  64 => 15,  55 => 16,  52 => 15,  48 => 11,  46 => 10,  41 => 11,  37 => 8,  32 => 11,  22 => 2,  265 => 123,  259 => 73,  252 => 98,  250 => 97,  247 => 96,  241 => 112,  234 => 91,  232 => 122,  229 => 107,  227 => 62,  219 => 82,  213 => 81,  205 => 52,  201 => 79,  199 => 74,  196 => 77,  190 => 76,  186 => 84,  184 => 67,  181 => 82,  173 => 67,  169 => 39,  167 => 39,  162 => 38,  160 => 37,  157 => 52,  151 => 35,  149 => 47,  142 => 59,  135 => 42,  130 => 40,  128 => 31,  125 => 52,  117 => 34,  113 => 48,  108 => 45,  106 => 22,  103 => 21,  94 => 18,  89 => 26,  87 => 24,  84 => 25,  76 => 27,  72 => 27,  67 => 19,  65 => 18,  61 => 16,  56 => 16,  53 => 15,  51 => 13,  40 => 8,  34 => 12,  28 => 5,  26 => 3,  36 => 7,  23 => 3,  19 => 1,);
    }
}
