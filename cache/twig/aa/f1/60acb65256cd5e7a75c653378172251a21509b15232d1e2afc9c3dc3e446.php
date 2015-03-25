<?php

/* custom-filter-group.twig */
class __TwigTemplate_aaf160acb65256cd5e7a75c653378172251a21509b15232d1e2afc9c3dc3e446 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 2
            echo "<li class=\"ai1ec-dropdown ai1ec-custom-filter ai1ec-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "group"), "slug"), "html", null, true);
            echo "-filter
\t";
            // line 3
            if ((!twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "selected_items")))) {
                echo "ai1ec-active";
            }
            echo "\"
\t";
            // line 4
            echo (isset($context["data_type"]) ? $context["data_type"] : null);
            echo "
\thref=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "group"), "all_filters"), "html_attr");
            echo "\">
\t<a class=\"ai1ec-dropdown-toggle\" data-toggle=\"ai1ec-dropdown\">
\t\t<i class=\"";
            // line 7
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "group"), "icon"), array("ai1ec-fa-" => "ai1ec-fa ai1ec-fa-")), "html", null, true);
            echo "\"></i>
\t\t<span class=\"ai1ec-clear-filter ai1ec-tooltip-trigger\"
\t\t\tdata-href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "clear_filter_href"), "html", null, true);
            echo "\"
\t\t\t";
            // line 10
            echo (isset($context["data_type"]) ? $context["data_type"] : null);
            echo "
\t\t\ttitle=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "text_clear_tag_filter"), "html", null, true);
            echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-times-circle\"></i>
\t\t</span>
\t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "group"), "name"), "html", null, true);
            echo "
\t\t<span class=\"ai1ec-caret\"></span>
\t</a>
\t<div class=\"ai1ec-dropdown-menu\">
\t\t<div class=\"ai1ec-cog-select-all\">
\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "group"), "all_terms"), "html_attr");
            echo "\"
\t\t\t\tclass=\"ai1ec-load-view ai1ec-btn ai1ec-btn-xs ai1ec-btn-block ai1ec-btn-default\"
\t\t\t\t";
            // line 21
            echo (isset($context["data_type"]) ? $context["data_type"] : null);
            echo ">
\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["text_select_all"]) ? $context["text_select_all"] : null), "html", null, true);
            echo "
\t\t\t</a>
\t\t</div>
\t\t";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "group"), "items"));
            foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
                // line 26
                echo "\t\t\t<div data-term=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), "html", null, true);
                echo "\"
\t\t\t\t";
                // line 27
                if (twig_in_filter($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "selected_items"))) {
                    // line 28
                    echo "\t\t\t\t\tclass=\"ai1ec-active\"
\t\t\t\t";
                }
                // line 29
                echo ">
\t\t\t\t<a class=\"ai1ec-load-view ai1ec-";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "group"), "slug"), "html", null, true);
                echo " ai1ec-custom-filter\"
\t\t\t\t\t";
                // line 31
                if ((!twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description")))) {
                    // line 32
                    echo "\t\t\t\t\t\ttitle=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description"), "html_attr");
                    echo "\"
\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t";
                echo (isset($context["data_type"]) ? $context["data_type"] : null);
                echo "
\t\t\t\t\thref=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "href"), "html_attr");
                echo "\">
\t\t\t\t\t";
                // line 36
                if (twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color"))) {
                    // line 37
                    echo "\t\t\t\t\t\t<span class=\"ai1ec-color-swatch-empty\"></span>
\t\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color");
                    echo "
\t\t\t\t\t";
                }
                // line 41
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
            // line 45
            echo "\t</div>
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "custom-filter-group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 35,  94 => 27,  71 => 23,  135 => 41,  127 => 38,  89 => 26,  47 => 14,  221 => 81,  217 => 79,  213 => 78,  211 => 77,  194 => 73,  168 => 61,  166 => 60,  161 => 58,  147 => 45,  115 => 34,  110 => 34,  278 => 96,  274 => 95,  267 => 94,  260 => 93,  258 => 92,  250 => 90,  245 => 87,  239 => 84,  233 => 82,  227 => 79,  224 => 78,  222 => 77,  215 => 74,  210 => 72,  198 => 67,  191 => 64,  187 => 63,  178 => 58,  169 => 55,  159 => 50,  153 => 48,  151 => 51,  133 => 41,  122 => 35,  114 => 33,  112 => 32,  99 => 29,  95 => 25,  83 => 22,  78 => 25,  137 => 67,  131 => 64,  125 => 61,  117 => 34,  103 => 30,  90 => 45,  82 => 39,  52 => 10,  34 => 4,  677 => 347,  669 => 341,  661 => 336,  652 => 329,  650 => 328,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 297,  574 => 291,  567 => 286,  561 => 284,  555 => 282,  553 => 281,  548 => 278,  545 => 277,  538 => 271,  532 => 269,  525 => 266,  523 => 265,  517 => 261,  511 => 259,  504 => 256,  502 => 255,  497 => 252,  489 => 246,  481 => 241,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 215,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 184,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 157,  295 => 156,  288 => 151,  282 => 98,  275 => 146,  273 => 145,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  247 => 131,  242 => 128,  236 => 83,  229 => 121,  212 => 73,  207 => 71,  203 => 75,  192 => 110,  183 => 69,  170 => 95,  138 => 44,  128 => 38,  107 => 31,  91 => 24,  80 => 24,  66 => 21,  61 => 20,  43 => 7,  73 => 18,  64 => 15,  55 => 17,  88 => 26,  79 => 22,  75 => 21,  68 => 33,  57 => 14,  118 => 43,  96 => 28,  85 => 25,  69 => 24,  60 => 28,  58 => 13,  49 => 12,  36 => 9,  204 => 84,  196 => 74,  177 => 100,  171 => 73,  165 => 53,  163 => 52,  158 => 61,  154 => 60,  150 => 76,  146 => 45,  142 => 44,  136 => 41,  130 => 39,  105 => 32,  101 => 27,  93 => 28,  87 => 23,  81 => 24,  74 => 36,  67 => 18,  65 => 19,  59 => 15,  53 => 13,  44 => 11,  25 => 4,  21 => 2,  77 => 34,  70 => 19,  62 => 14,  54 => 13,  50 => 15,  29 => 5,  40 => 11,  38 => 5,  27 => 5,  218 => 75,  216 => 119,  208 => 116,  201 => 68,  199 => 82,  188 => 109,  179 => 67,  173 => 64,  167 => 95,  162 => 89,  160 => 91,  155 => 85,  145 => 78,  141 => 81,  134 => 43,  126 => 37,  124 => 36,  121 => 38,  119 => 62,  113 => 37,  109 => 32,  104 => 56,  100 => 29,  92 => 27,  84 => 40,  76 => 23,  72 => 21,  63 => 16,  56 => 11,  51 => 20,  30 => 6,  46 => 18,  32 => 8,  26 => 6,  23 => 2,  48 => 9,  33 => 6,  28 => 3,  24 => 3,  41 => 10,  39 => 10,  37 => 10,  35 => 7,  31 => 7,  19 => 1,);
    }
}
