<?php

/* calendar.twig */
class __TwigTemplate_fe5fa372e0eb51f713beb664be0cf0c9c8c78572b1851c15eac685f6cd98c181 extends Twig_Template
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
        // line 2
        echo "<!-- START All-in-One Event Calendar Plugin - Version ";
        echo (isset($context["version"]) ? $context["version"] : null);
        echo " -->
<div id=\"ai1ec-container\" class=\"ai1ec-main-container ";
        // line 3
        echo (isset($context["ai1ec_calendar_classes"]) ? $context["ai1ec_calendar_classes"] : null);
        echo "\">
\t<!-- AI1EC_PAGE_CONTENT_PLACEHOLDER -->
\t<div id=\"ai1ec-calendar\" class=\"timely ai1ec-calendar\">
\t\t";
        // line 6
        if (array_key_exists("ai1ec_above_calendar", $context)) {
            // line 7
            echo "\t\t";
            echo (isset($context["ai1ec_above_calendar"]) ? $context["ai1ec_above_calendar"] : null);
            echo "
\t\t";
        }
        // line 9
        echo "\t\t";
        echo (isset($context["filter_menu"]) ? $context["filter_menu"] : null);
        echo "
\t\t<div id=\"ai1ec-calendar-view-container\" class=\"ai1ec-calendar-view-container\">
\t\t\t<div id=\"ai1ec-calendar-view-loading\" class=\"ai1ec-loading ai1ec-calendar-view-loading\"></div>
\t\t\t<div id=\"ai1ec-calendar-view\" class=\"ai1ec-calendar-view\">
\t\t\t\t";
        // line 13
        echo (isset($context["view"]) ? $context["view"] : null);
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"ai1ec-pull-right\">";
        // line 17
        echo (isset($context["subscribe_buttons"]) ? $context["subscribe_buttons"] : null);
        echo "</div>
\t</div><!-- /.timely -->
</div>
<!-- END All-in-One Event Calendar Plugin -->
";
    }

    public function getTemplateName()
    {
        return "calendar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 116,  290 => 111,  278 => 106,  272 => 103,  267 => 101,  243 => 89,  240 => 88,  235 => 86,  209 => 76,  204 => 73,  202 => 72,  193 => 67,  187 => 64,  166 => 57,  144 => 46,  141 => 45,  92 => 25,  319 => 94,  317 => 93,  313 => 92,  310 => 91,  307 => 115,  305 => 114,  302 => 82,  291 => 77,  287 => 75,  285 => 74,  280 => 72,  277 => 71,  271 => 69,  269 => 68,  253 => 94,  238 => 65,  218 => 79,  189 => 46,  180 => 42,  163 => 36,  45 => 14,  42 => 13,  50 => 16,  47 => 15,  226 => 81,  220 => 62,  188 => 69,  182 => 66,  175 => 60,  152 => 33,  143 => 45,  122 => 38,  97 => 28,  93 => 25,  86 => 25,  71 => 18,  293 => 100,  289 => 99,  260 => 91,  254 => 88,  251 => 87,  248 => 92,  239 => 82,  237 => 87,  233 => 79,  230 => 83,  225 => 82,  222 => 80,  210 => 70,  208 => 54,  195 => 49,  171 => 54,  161 => 50,  159 => 52,  154 => 47,  150 => 46,  146 => 45,  137 => 42,  132 => 39,  126 => 36,  121 => 37,  118 => 33,  116 => 35,  111 => 29,  105 => 27,  99 => 27,  95 => 26,  83 => 23,  78 => 20,  62 => 14,  59 => 15,  38 => 9,  33 => 9,  29 => 9,  25 => 4,  164 => 83,  156 => 52,  139 => 44,  131 => 42,  127 => 39,  123 => 64,  114 => 60,  104 => 28,  96 => 46,  77 => 20,  74 => 19,  60 => 28,  69 => 18,  644 => 354,  636 => 348,  628 => 343,  619 => 336,  617 => 335,  611 => 331,  609 => 330,  606 => 329,  600 => 326,  597 => 325,  595 => 324,  592 => 323,  585 => 319,  580 => 317,  576 => 316,  573 => 315,  570 => 314,  567 => 312,  558 => 306,  549 => 300,  543 => 297,  534 => 291,  525 => 285,  520 => 282,  517 => 281,  510 => 275,  504 => 273,  497 => 270,  495 => 269,  489 => 265,  483 => 263,  476 => 260,  474 => 259,  469 => 256,  461 => 250,  453 => 245,  439 => 234,  433 => 230,  426 => 224,  420 => 222,  413 => 219,  411 => 218,  405 => 214,  399 => 212,  392 => 209,  390 => 208,  385 => 205,  379 => 200,  373 => 198,  366 => 195,  364 => 194,  359 => 191,  354 => 187,  348 => 184,  345 => 183,  339 => 180,  333 => 177,  330 => 176,  328 => 175,  324 => 173,  321 => 171,  315 => 118,  312 => 166,  304 => 160,  301 => 159,  297 => 112,  295 => 78,  288 => 110,  282 => 73,  275 => 70,  273 => 96,  268 => 142,  262 => 98,  256 => 135,  249 => 132,  242 => 83,  236 => 64,  216 => 72,  212 => 77,  207 => 117,  203 => 52,  192 => 71,  183 => 63,  177 => 61,  170 => 38,  155 => 50,  145 => 71,  138 => 74,  134 => 32,  119 => 62,  107 => 29,  101 => 51,  91 => 23,  80 => 21,  66 => 21,  35 => 12,  30 => 6,  63 => 16,  54 => 13,  43 => 7,  24 => 3,  21 => 2,  82 => 21,  73 => 19,  70 => 17,  64 => 15,  55 => 14,  52 => 10,  48 => 9,  46 => 13,  41 => 10,  37 => 10,  32 => 7,  22 => 2,  88 => 26,  81 => 24,  79 => 21,  75 => 36,  68 => 33,  57 => 14,  49 => 12,  44 => 11,  31 => 8,  27 => 5,  265 => 94,  259 => 97,  252 => 117,  250 => 116,  247 => 131,  241 => 112,  234 => 109,  232 => 108,  229 => 83,  227 => 77,  219 => 100,  213 => 77,  205 => 53,  201 => 91,  199 => 51,  196 => 112,  190 => 86,  186 => 45,  184 => 83,  181 => 58,  173 => 55,  169 => 77,  167 => 52,  162 => 89,  160 => 53,  157 => 71,  151 => 74,  149 => 47,  142 => 44,  135 => 42,  130 => 40,  128 => 69,  125 => 38,  117 => 31,  113 => 58,  108 => 29,  106 => 32,  103 => 28,  94 => 39,  89 => 26,  87 => 24,  84 => 22,  76 => 28,  72 => 21,  67 => 17,  65 => 17,  61 => 20,  56 => 18,  53 => 17,  51 => 13,  40 => 6,  34 => 4,  28 => 3,  26 => 4,  36 => 9,  23 => 3,  19 => 2,);
    }
}
