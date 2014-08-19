<?php

/* event-popup.twig */
class __TwigTemplate_943e432a0dcbd7fe60a569412aaad985e131799f5363073300d0a6cd788b4d71 extends Twig_Template
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
        echo "<div class=\"ai1ec-popover ai1ec-popup ";
        echo twig_escape_filter($this->env, (isset($context["popup_classes"]) ? $context["popup_classes"] : null), "html", null, true);
        echo "\">

\t";
        // line 3
        $context["category_colors"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "category_colors"), "method");
        // line 4
        echo "\t";
        if ((!twig_test_empty((isset($context["category_colors"]) ? $context["category_colors"] : null)))) {
            // line 5
            echo "\t\t<div class=\"ai1ec-color-swatches\">";
            echo (isset($context["category_colors"]) ? $context["category_colors"] : null);
            echo "</div>
\t";
        }
        // line 7
        echo "
\t<span class=\"ai1ec-popup-title\">
\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
        echo "\"
\t\t\t>";
        // line 10
        echo $this->env->getExtension('ai1ec')->truncate($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method"));
        echo "</a>
\t\t";
        // line 11
        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method"))))) {
            // line 12
            echo "\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t>";
            // line 13
            echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method")), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 15
        echo "\t\t";
        if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method"))))) {
            // line 16
            echo "\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
\t\t\t\tai1ec-buy-tickets\" target=\"_blank\"
\t\t\t\thref=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method"), "html_attr");
            echo "\"
\t\t\t\t>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "ticket_url_label"), "method"), "html", null, true);
            echo "</a>
\t\t";
        }
        // line 21
        echo "\t</span>

\t";
        // line 23
        $context["edit_post_link"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "edit_post_link"), "method");
        // line 24
        echo "\t";
        if ((!twig_test_empty((isset($context["edit_post_link"]) ? $context["edit_post_link"] : null)))) {
            // line 25
            echo "\t\t<a class=\"post-edit-link\" href=\"";
            echo (isset($context["edit_post_link"]) ? $context["edit_post_link"] : null);
            echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
            echo "
\t\t</a>
\t";
        }
        // line 29
        echo "
\t<div class=\"ai1ec-event-time\">
\t\t";
        // line 31
        if (twig_test_empty((isset($context["popup_timespan"]) ? $context["popup_timespan"] : null))) {
            // line 32
            echo "\t\t\t";
            echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null), "short");
            echo "
\t\t";
        } else {
            // line 34
            echo "\t\t\t";
            echo (isset($context["popup_timespan"]) ? $context["popup_timespan"] : null);
            echo "
\t\t";
        }
        // line 36
        echo "\t</div>

\t";
        // line 38
        echo $this->env->getExtension('ai1ec')->avatar((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "content_img", 2 => "location_avatar", 3 => "category_avatar"));
        // line 43
        echo "

\t";
        // line 45
        $context["post_excerpt"] = trim($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "post_excerpt"), "method"));
        // line 46
        echo "\t";
        if ((!twig_test_empty((isset($context["post_excerpt"]) ? $context["post_excerpt"] : null)))) {
            // line 47
            echo "\t\t<div class=\"ai1ec-popup-excerpt\">";
            echo (isset($context["post_excerpt"]) ? $context["post_excerpt"] : null);
            echo "</div>
\t";
        }
        // line 49
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "event-popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 49,  118 => 43,  98 => 31,  69 => 19,  33 => 9,  47 => 14,  100 => 32,  88 => 26,  298 => 115,  288 => 112,  281 => 111,  279 => 110,  263 => 103,  253 => 98,  244 => 94,  239 => 92,  228 => 87,  226 => 86,  220 => 83,  200 => 76,  195 => 73,  193 => 72,  177 => 61,  155 => 50,  121 => 37,  92 => 25,  44 => 10,  313 => 94,  306 => 118,  302 => 116,  299 => 88,  296 => 114,  294 => 80,  280 => 74,  274 => 71,  266 => 68,  260 => 66,  209 => 79,  178 => 43,  175 => 60,  159 => 52,  152 => 33,  148 => 32,  144 => 46,  102 => 26,  90 => 27,  78 => 23,  42 => 11,  39 => 7,  217 => 82,  211 => 80,  194 => 50,  183 => 72,  168 => 64,  161 => 61,  143 => 45,  116 => 38,  111 => 35,  93 => 27,  86 => 21,  81 => 24,  59 => 15,  287 => 106,  283 => 105,  276 => 72,  267 => 102,  254 => 97,  248 => 94,  242 => 63,  236 => 89,  233 => 88,  231 => 88,  224 => 84,  221 => 84,  216 => 82,  210 => 78,  207 => 56,  204 => 77,  202 => 53,  197 => 51,  189 => 65,  180 => 65,  176 => 60,  174 => 59,  170 => 57,  153 => 55,  140 => 47,  137 => 46,  132 => 40,  122 => 45,  112 => 36,  107 => 29,  101 => 27,  99 => 27,  95 => 26,  91 => 24,  83 => 25,  79 => 24,  58 => 15,  50 => 12,  45 => 11,  29 => 9,  25 => 3,  164 => 37,  156 => 77,  145 => 49,  139 => 44,  131 => 42,  127 => 47,  123 => 29,  114 => 33,  104 => 52,  96 => 24,  77 => 23,  74 => 21,  68 => 16,  60 => 28,  27 => 4,  66 => 16,  640 => 354,  632 => 348,  624 => 343,  615 => 336,  613 => 334,  607 => 330,  605 => 329,  602 => 328,  596 => 325,  593 => 324,  591 => 323,  588 => 322,  581 => 318,  576 => 316,  572 => 315,  569 => 314,  566 => 313,  563 => 311,  554 => 305,  545 => 299,  539 => 296,  530 => 290,  521 => 284,  516 => 281,  513 => 280,  506 => 274,  500 => 272,  493 => 269,  491 => 268,  485 => 264,  479 => 262,  472 => 259,  470 => 258,  465 => 255,  457 => 249,  449 => 244,  435 => 233,  429 => 229,  422 => 223,  416 => 221,  409 => 218,  407 => 217,  401 => 213,  395 => 211,  388 => 208,  386 => 207,  381 => 204,  375 => 199,  369 => 197,  362 => 194,  360 => 193,  355 => 190,  350 => 186,  344 => 183,  341 => 182,  335 => 179,  329 => 176,  326 => 175,  324 => 174,  320 => 172,  317 => 170,  311 => 166,  308 => 91,  300 => 159,  297 => 158,  293 => 156,  291 => 79,  284 => 75,  278 => 148,  271 => 70,  269 => 106,  264 => 67,  258 => 101,  245 => 93,  243 => 130,  238 => 127,  225 => 61,  212 => 118,  208 => 117,  203 => 78,  192 => 49,  188 => 48,  179 => 70,  166 => 57,  158 => 88,  141 => 45,  134 => 41,  124 => 46,  115 => 61,  109 => 57,  97 => 28,  80 => 24,  71 => 21,  62 => 15,  49 => 12,  35 => 7,  30 => 5,  63 => 18,  57 => 14,  54 => 12,  43 => 17,  31 => 6,  24 => 4,  21 => 2,  82 => 20,  73 => 22,  70 => 24,  64 => 15,  55 => 14,  52 => 15,  48 => 11,  46 => 18,  41 => 11,  37 => 8,  32 => 6,  22 => 2,  265 => 123,  259 => 100,  252 => 134,  250 => 97,  247 => 115,  241 => 112,  234 => 89,  232 => 122,  229 => 107,  227 => 62,  219 => 82,  213 => 81,  205 => 93,  201 => 91,  199 => 74,  196 => 77,  190 => 86,  186 => 84,  184 => 67,  181 => 82,  173 => 67,  169 => 39,  167 => 76,  162 => 54,  160 => 72,  157 => 52,  151 => 50,  149 => 47,  142 => 63,  135 => 42,  130 => 40,  128 => 38,  125 => 38,  117 => 34,  113 => 48,  108 => 33,  106 => 34,  103 => 28,  94 => 29,  89 => 26,  87 => 24,  84 => 25,  76 => 38,  72 => 27,  67 => 19,  65 => 18,  61 => 16,  56 => 16,  53 => 13,  51 => 15,  40 => 9,  34 => 7,  28 => 5,  26 => 5,  36 => 7,  23 => 3,  19 => 1,);
    }
}
