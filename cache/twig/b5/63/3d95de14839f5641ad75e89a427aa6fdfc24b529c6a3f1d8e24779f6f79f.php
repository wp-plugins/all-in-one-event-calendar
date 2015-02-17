<?php

/* categories.twig */
class __TwigTemplate_b5633d95de14839f5641ad75e89a427aa6fdfc24b529c6a3f1d8e24779f6f79f extends Twig_Template
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
        echo "<li class=\"ai1ec-dropdown ai1ec-category-filter
\t";
        // line 2
        if ((!twig_test_empty((isset($context["selected_cat_ids"]) ? $context["selected_cat_ids"] : null)))) {
            echo "ai1ec-active";
        }
        echo "\">
\t<a class=\"ai1ec-dropdown-toggle\" data-toggle=\"ai1ec-dropdown\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open\"></i>
\t\t<span class=\"ai1ec-clear-filter ai1ec-tooltip-trigger\"
\t\t\tdata-href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["clear_filter"]) ? $context["clear_filter"] : null), "html", null, true);
        echo "\"
\t\t\t";
        // line 7
        echo (isset($context["data_type"]) ? $context["data_type"] : null);
        echo "
\t\t\ttitle=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["text_clear_category_filter"]) ? $context["text_clear_category_filter"] : null), "html", null, true);
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-times-circle\"></i>
\t\t</span>
\t\t";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["text_categories"]) ? $context["text_categories"] : null), "html", null, true);
        echo "
\t\t<span class=\"ai1ec-caret\"></span>
\t</a>
\t<div class=\"ai1ec-dropdown-menu\">
\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 16
            echo "\t\t\t<div data-term=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), "html", null, true);
            echo "\"
\t\t\t\t";
            // line 17
            if (twig_in_filter($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), (isset($context["selected_cat_ids"]) ? $context["selected_cat_ids"] : null))) {
                // line 18
                echo "\t\t\t\t\tclass=\"ai1ec-active\"
\t\t\t\t";
            }
            // line 19
            echo ">
\t\t\t\t<a class=\"ai1ec-load-view ai1ec-category\"
\t\t\t\t\t";
            // line 21
            if ((!twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description")))) {
                // line 22
                echo "\t\t\t\t\t\ttitle=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description"), "html_attr");
                echo "\"
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t";
            echo (isset($context["data_type"]) ? $context["data_type"] : null);
            echo "
\t\t\t\t\thref=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "href"), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 26
            if (twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color"))) {
                // line 27
                echo "\t\t\t\t\t\t<span class=\"ai1ec-color-swatch-empty\"></span>
\t\t\t\t\t";
            } else {
                // line 29
                echo "\t\t\t\t\t\t";
                echo $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color");
                echo "
\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t";
            echo $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "name");
            echo "
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t</div>
</li>

";
    }

    public function getTemplateName()
    {
        return "categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  309 => 116,  299 => 112,  284 => 109,  272 => 104,  266 => 101,  261 => 99,  237 => 87,  234 => 86,  231 => 85,  223 => 81,  219 => 80,  206 => 75,  190 => 66,  184 => 63,  149 => 47,  144 => 46,  139 => 44,  319 => 95,  317 => 94,  313 => 93,  310 => 92,  307 => 84,  305 => 114,  302 => 82,  291 => 110,  287 => 75,  285 => 74,  280 => 72,  277 => 71,  271 => 69,  269 => 68,  253 => 95,  238 => 65,  220 => 62,  205 => 53,  195 => 49,  189 => 46,  186 => 45,  180 => 62,  175 => 60,  152 => 33,  111 => 35,  45 => 11,  42 => 13,  120 => 35,  94 => 29,  71 => 21,  135 => 42,  127 => 39,  89 => 26,  47 => 15,  221 => 81,  217 => 79,  213 => 56,  211 => 77,  194 => 73,  168 => 61,  166 => 57,  161 => 58,  147 => 45,  115 => 34,  110 => 34,  278 => 96,  274 => 95,  267 => 94,  260 => 93,  258 => 92,  250 => 90,  245 => 87,  239 => 84,  233 => 82,  227 => 79,  224 => 78,  222 => 77,  215 => 78,  210 => 76,  198 => 67,  191 => 64,  187 => 63,  178 => 58,  169 => 55,  159 => 52,  153 => 48,  151 => 51,  133 => 41,  122 => 35,  114 => 33,  112 => 32,  99 => 27,  95 => 26,  83 => 23,  78 => 25,  137 => 67,  131 => 64,  125 => 38,  117 => 31,  103 => 28,  90 => 27,  82 => 39,  52 => 15,  34 => 4,  677 => 347,  669 => 341,  661 => 336,  652 => 329,  650 => 328,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 297,  574 => 291,  567 => 286,  561 => 284,  555 => 282,  553 => 281,  548 => 278,  545 => 277,  538 => 271,  532 => 269,  525 => 266,  523 => 265,  517 => 261,  511 => 259,  504 => 256,  502 => 255,  497 => 252,  489 => 246,  481 => 241,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 215,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 184,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 113,  297 => 157,  295 => 78,  288 => 151,  282 => 108,  275 => 70,  273 => 145,  268 => 142,  262 => 137,  256 => 96,  249 => 132,  247 => 92,  242 => 90,  236 => 64,  229 => 84,  212 => 73,  207 => 71,  203 => 52,  192 => 110,  183 => 69,  170 => 38,  138 => 44,  128 => 38,  107 => 29,  91 => 23,  80 => 24,  66 => 21,  61 => 17,  43 => 7,  73 => 22,  64 => 15,  55 => 14,  88 => 26,  79 => 24,  75 => 21,  68 => 33,  57 => 21,  118 => 43,  96 => 28,  85 => 25,  69 => 24,  60 => 28,  58 => 13,  49 => 16,  36 => 9,  204 => 84,  196 => 74,  177 => 61,  171 => 73,  165 => 53,  163 => 36,  158 => 61,  154 => 60,  150 => 76,  146 => 45,  142 => 44,  136 => 41,  130 => 40,  105 => 27,  101 => 27,  93 => 28,  87 => 24,  81 => 24,  74 => 19,  67 => 19,  65 => 19,  59 => 15,  53 => 17,  44 => 11,  25 => 4,  21 => 2,  77 => 20,  70 => 19,  62 => 14,  54 => 13,  50 => 16,  29 => 9,  40 => 11,  38 => 5,  27 => 5,  218 => 59,  216 => 119,  208 => 54,  201 => 72,  199 => 71,  188 => 109,  179 => 67,  173 => 64,  167 => 95,  162 => 89,  160 => 91,  155 => 50,  145 => 78,  141 => 45,  134 => 32,  126 => 37,  124 => 36,  121 => 37,  119 => 62,  113 => 37,  109 => 32,  104 => 56,  100 => 31,  92 => 25,  84 => 25,  76 => 23,  72 => 21,  63 => 18,  56 => 16,  51 => 13,  30 => 6,  46 => 18,  32 => 8,  26 => 3,  23 => 3,  48 => 9,  33 => 8,  28 => 3,  24 => 3,  41 => 10,  39 => 8,  37 => 10,  35 => 7,  31 => 6,  19 => 1,);
    }
}
