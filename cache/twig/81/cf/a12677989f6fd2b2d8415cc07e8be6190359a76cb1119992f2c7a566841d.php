<?php

/* big-filtering.twig */
class __TwigTemplate_81cfa12677989f6fd2b2d8415cc07e8be6190359a76cb1119992f2c7a566841d extends Twig_Template
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
        echo "<div class=\"ai1ec-bf-container\">

\t<div class=\"ai1ec-bf-header\">
\t\t<div class=\"ai1ec-bf-select\">
\t\t\t<select class=\"ai1ec-bf-selected\" multiple
\t\t\t\tplaceholder=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["text_filter"]) ? $context["text_filter"] : null), "html_attr");
        echo "\"></select>
\t\t</div>
\t\t<div class=\"ai1ec-bf-suggestions\">
\t\t\t<button class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-sm\"
\t\t\t\tdata-toggle=\"ai1ec-button\">
\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["text_suggestions"]) ? $context["text_suggestions"] : null), "html", null, true);
        echo "
\t\t\t\t<span class=\"ai1ec-caret\"></span>
\t\t\t</button>
\t\t</div>
\t</div>
\t<div class=\"ai1ec-bf-filter-groups\">
\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 18
            echo "\t\t\t<div class=\"ai1ec-bf-filter-group\">
\t\t\t\t<div class=\"ai1ec-bf-heading\">
\t\t\t\t\t<i class=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon"), "html_attr");
            echo "\"></i>
\t\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "name"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-bf-list\">
\t\t\t\t\t";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 25
                echo "\t\t\t\t\t<div class=\"ai1ec-bf-item";
                if ((4 < $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"))) {
                    echo " ai1ec-hidden";
                }
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "href"), "html_attr");
                echo "\"
\t\t\t\t\t\t   data-term_id=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "term_id"), "html_attr");
                echo "\"
\t\t\t\t\t\t   class=\"ai1ec-bf-item-link";
                // line 28
                if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "term_id"), (isset($context["selected_items"]) ? $context["selected_items"] : null))) {
                    echo " ai1ec-active";
                }
                echo "\">
\t\t\t\t\t\t   ";
                // line 29
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name");
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 32
                if ((4 == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"))) {
                    // line 33
                    echo "\t\t\t\t\t\t\t<div class=\"ai1ec-bf-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"ai1ec-bf-more\">…</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "big-filtering.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 41,  127 => 38,  89 => 27,  47 => 18,  221 => 81,  217 => 79,  213 => 78,  211 => 77,  194 => 73,  168 => 61,  166 => 60,  161 => 58,  147 => 50,  115 => 35,  110 => 34,  278 => 96,  274 => 95,  267 => 94,  260 => 93,  258 => 92,  250 => 90,  245 => 87,  239 => 84,  233 => 82,  227 => 79,  224 => 78,  222 => 77,  215 => 74,  210 => 72,  198 => 67,  191 => 64,  187 => 63,  178 => 58,  169 => 55,  159 => 50,  153 => 48,  151 => 51,  133 => 41,  122 => 35,  114 => 33,  112 => 32,  99 => 29,  95 => 25,  83 => 22,  78 => 25,  137 => 67,  131 => 64,  125 => 61,  117 => 34,  103 => 54,  90 => 45,  82 => 39,  52 => 23,  34 => 11,  677 => 347,  669 => 341,  661 => 336,  652 => 329,  650 => 328,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 297,  574 => 291,  567 => 286,  561 => 284,  555 => 282,  553 => 281,  548 => 278,  545 => 277,  538 => 271,  532 => 269,  525 => 266,  523 => 265,  517 => 261,  511 => 259,  504 => 256,  502 => 255,  497 => 252,  489 => 246,  481 => 241,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 215,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 184,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 157,  295 => 156,  288 => 151,  282 => 98,  275 => 146,  273 => 145,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  247 => 131,  242 => 128,  236 => 83,  229 => 121,  212 => 73,  207 => 71,  203 => 75,  192 => 110,  183 => 69,  170 => 95,  138 => 44,  128 => 38,  107 => 33,  91 => 24,  80 => 24,  66 => 16,  61 => 24,  43 => 17,  73 => 18,  64 => 15,  55 => 21,  88 => 26,  79 => 23,  75 => 36,  68 => 33,  57 => 14,  118 => 43,  96 => 28,  85 => 26,  69 => 24,  60 => 28,  58 => 13,  49 => 12,  36 => 9,  204 => 84,  196 => 74,  177 => 100,  171 => 73,  165 => 53,  163 => 52,  158 => 61,  154 => 60,  150 => 76,  146 => 45,  142 => 44,  136 => 56,  130 => 42,  105 => 32,  101 => 27,  93 => 28,  87 => 23,  81 => 24,  74 => 36,  67 => 18,  65 => 19,  59 => 15,  53 => 13,  44 => 11,  25 => 4,  21 => 2,  77 => 34,  70 => 17,  62 => 15,  54 => 13,  50 => 15,  29 => 5,  40 => 11,  38 => 8,  27 => 5,  218 => 75,  216 => 119,  208 => 116,  201 => 68,  199 => 82,  188 => 109,  179 => 67,  173 => 64,  167 => 95,  162 => 89,  160 => 91,  155 => 85,  145 => 78,  141 => 81,  134 => 43,  126 => 41,  124 => 66,  121 => 38,  119 => 62,  113 => 37,  109 => 57,  104 => 56,  100 => 53,  92 => 27,  84 => 40,  76 => 23,  72 => 21,  63 => 16,  56 => 19,  51 => 20,  30 => 6,  46 => 18,  32 => 8,  26 => 6,  23 => 3,  48 => 15,  33 => 6,  28 => 5,  24 => 3,  41 => 10,  39 => 10,  37 => 6,  35 => 7,  31 => 7,  19 => 1,);
    }
}
