<?php

/* event-excerpt.twig */
class __TwigTemplate_33e16cf8aa9822e97c186ffb4cb4ca897e21f410bfd489328566d22b282224cc extends Twig_Template
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
        echo "<div class=\"timely ai1ec-excerpt\">
\t<div class=\"ai1ec-time\">
\t\t<strong>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["text_when"]) ? $context["text_when"] : null), "html", null, true);
        echo "</strong>
\t\t";
        // line 4
        echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null));
        echo "
\t</div>
\t";
        // line 6
        if ((!twig_test_empty((isset($context["location"]) ? $context["location"] : null)))) {
            // line 7
            echo "\t\t<div class=\"ai1ec-location\">
\t\t\t<strong>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["text_where"]) ? $context["text_where"] : null), "html", null, true);
            echo "</strong>
\t\t\t";
            // line 9
            echo (isset($context["location"]) ? $context["location"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "event-excerpt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  100 => 31,  88 => 26,  298 => 115,  288 => 112,  281 => 111,  279 => 110,  263 => 103,  253 => 98,  244 => 94,  239 => 92,  228 => 87,  226 => 86,  220 => 83,  200 => 76,  195 => 73,  193 => 72,  177 => 61,  121 => 37,  92 => 25,  44 => 8,  306 => 118,  296 => 114,  294 => 80,  280 => 74,  274 => 71,  271 => 70,  264 => 67,  260 => 66,  225 => 61,  209 => 79,  192 => 49,  188 => 48,  178 => 43,  175 => 60,  152 => 33,  148 => 32,  144 => 46,  141 => 45,  102 => 26,  90 => 27,  78 => 19,  42 => 11,  39 => 7,  217 => 82,  211 => 80,  194 => 50,  183 => 72,  179 => 70,  168 => 64,  161 => 61,  143 => 45,  116 => 35,  111 => 35,  93 => 27,  86 => 21,  81 => 24,  59 => 15,  291 => 79,  283 => 105,  276 => 72,  267 => 102,  254 => 97,  248 => 94,  245 => 93,  233 => 88,  231 => 88,  224 => 84,  221 => 84,  207 => 56,  204 => 77,  202 => 53,  197 => 51,  189 => 65,  180 => 65,  176 => 60,  170 => 57,  153 => 55,  140 => 47,  137 => 46,  132 => 40,  122 => 38,  112 => 32,  99 => 27,  95 => 26,  91 => 24,  83 => 23,  79 => 24,  58 => 14,  50 => 11,  45 => 11,  29 => 9,  25 => 4,  164 => 37,  156 => 77,  139 => 44,  131 => 42,  127 => 39,  123 => 29,  114 => 33,  104 => 52,  96 => 24,  77 => 23,  74 => 19,  68 => 16,  60 => 28,  27 => 4,  66 => 16,  598 => 338,  590 => 332,  582 => 327,  573 => 320,  571 => 318,  565 => 314,  563 => 313,  560 => 312,  554 => 309,  551 => 308,  549 => 307,  546 => 306,  539 => 302,  534 => 300,  530 => 299,  527 => 298,  524 => 297,  521 => 295,  512 => 289,  503 => 283,  497 => 280,  488 => 274,  479 => 268,  474 => 265,  471 => 264,  464 => 258,  458 => 256,  451 => 253,  449 => 252,  443 => 248,  437 => 246,  430 => 243,  428 => 242,  423 => 239,  415 => 233,  407 => 228,  393 => 217,  387 => 213,  380 => 207,  374 => 205,  367 => 202,  365 => 201,  359 => 197,  353 => 195,  346 => 192,  344 => 191,  339 => 188,  333 => 183,  327 => 181,  320 => 178,  318 => 177,  313 => 94,  308 => 91,  302 => 116,  299 => 88,  293 => 163,  287 => 106,  284 => 75,  282 => 158,  278 => 156,  275 => 154,  269 => 106,  266 => 68,  258 => 101,  255 => 142,  251 => 140,  249 => 139,  242 => 63,  236 => 89,  222 => 125,  216 => 82,  210 => 78,  203 => 78,  187 => 104,  174 => 59,  166 => 57,  159 => 52,  155 => 50,  145 => 49,  138 => 74,  134 => 41,  119 => 62,  107 => 29,  101 => 27,  97 => 28,  80 => 39,  71 => 21,  62 => 15,  49 => 12,  35 => 7,  30 => 6,  63 => 18,  57 => 14,  54 => 12,  43 => 17,  31 => 6,  24 => 4,  21 => 2,  82 => 20,  73 => 22,  70 => 24,  64 => 15,  55 => 14,  52 => 15,  48 => 14,  46 => 18,  41 => 9,  37 => 8,  32 => 6,  22 => 2,  265 => 123,  259 => 100,  252 => 117,  250 => 97,  247 => 115,  241 => 112,  234 => 89,  232 => 108,  229 => 129,  227 => 62,  219 => 82,  213 => 81,  205 => 93,  201 => 114,  199 => 74,  196 => 77,  190 => 86,  186 => 84,  184 => 67,  181 => 101,  173 => 67,  169 => 39,  167 => 76,  162 => 54,  160 => 72,  157 => 52,  151 => 50,  149 => 47,  142 => 63,  135 => 42,  130 => 40,  128 => 38,  125 => 38,  117 => 34,  113 => 58,  108 => 33,  106 => 28,  103 => 28,  94 => 29,  89 => 26,  87 => 24,  84 => 25,  76 => 38,  72 => 27,  67 => 19,  65 => 17,  61 => 17,  56 => 16,  53 => 13,  51 => 13,  40 => 10,  34 => 7,  28 => 5,  26 => 4,  36 => 9,  23 => 3,  19 => 1,);
    }
}
