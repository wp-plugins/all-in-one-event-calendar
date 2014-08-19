<?php

/* datepicker_link.twig */
class __TwigTemplate_4932ea4178e92f66ddbdb1feb9ec1496773dcb031265fc870a3e981abc68ca2a extends Twig_Template
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
        echo "<a
\tclass=\"ai1ec-minical-trigger ai1ec-btn ai1ec-btn-sm ai1ec-btn-default
    ai1ec-tooltip-trigger\"
\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 5
            echo "\t\t";
            echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t";
        echo (isset($context["data_type"]) ? $context["data_type"] : null);
        echo "
\ttitle=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["text_date"]) ? $context["text_date"] : null), "html", null, true);
        echo "\"
\t>
\t<i class=\"ai1ec-fa ai1ec-fa-calendar-o ai1ec-fa-fw ai1ec-fa-lg\"></i>
  <span class=\"ai1ec-calendar-title\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</span>
  <span class=\"ai1ec-calendar-title-short\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title_short"]) ? $context["title_short"] : null), "html", null, true);
        echo "</span>
</a>
";
    }

    public function getTemplateName()
    {
        return "datepicker_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  88 => 26,  298 => 115,  288 => 112,  281 => 111,  279 => 110,  263 => 103,  253 => 98,  244 => 94,  239 => 92,  228 => 87,  226 => 86,  220 => 83,  200 => 76,  195 => 73,  193 => 72,  177 => 61,  155 => 50,  121 => 37,  92 => 25,  44 => 8,  313 => 94,  306 => 118,  302 => 116,  299 => 88,  296 => 114,  294 => 80,  280 => 74,  274 => 71,  266 => 68,  260 => 66,  209 => 79,  178 => 43,  175 => 60,  159 => 52,  152 => 33,  148 => 32,  144 => 46,  102 => 26,  90 => 27,  78 => 19,  42 => 11,  39 => 7,  217 => 82,  211 => 80,  194 => 50,  183 => 72,  168 => 64,  161 => 61,  143 => 45,  116 => 35,  111 => 35,  93 => 27,  86 => 21,  81 => 24,  59 => 15,  287 => 106,  283 => 105,  276 => 72,  267 => 102,  254 => 97,  248 => 94,  242 => 63,  236 => 89,  233 => 88,  231 => 88,  224 => 84,  221 => 84,  216 => 82,  210 => 78,  207 => 56,  204 => 77,  202 => 53,  197 => 51,  189 => 65,  180 => 65,  176 => 60,  174 => 59,  170 => 57,  153 => 55,  140 => 47,  137 => 46,  132 => 40,  122 => 38,  112 => 32,  107 => 29,  101 => 27,  99 => 27,  95 => 26,  91 => 24,  83 => 23,  79 => 24,  58 => 14,  50 => 11,  45 => 11,  29 => 9,  25 => 4,  164 => 37,  156 => 77,  145 => 49,  139 => 44,  131 => 42,  127 => 39,  123 => 29,  114 => 33,  104 => 52,  96 => 24,  77 => 23,  74 => 19,  68 => 16,  60 => 28,  27 => 6,  66 => 16,  640 => 354,  632 => 348,  624 => 343,  615 => 336,  613 => 334,  607 => 330,  605 => 329,  602 => 328,  596 => 325,  593 => 324,  591 => 323,  588 => 322,  581 => 318,  576 => 316,  572 => 315,  569 => 314,  566 => 313,  563 => 311,  554 => 305,  545 => 299,  539 => 296,  530 => 290,  521 => 284,  516 => 281,  513 => 280,  506 => 274,  500 => 272,  493 => 269,  491 => 268,  485 => 264,  479 => 262,  472 => 259,  470 => 258,  465 => 255,  457 => 249,  449 => 244,  435 => 233,  429 => 229,  422 => 223,  416 => 221,  409 => 218,  407 => 217,  401 => 213,  395 => 211,  388 => 208,  386 => 207,  381 => 204,  375 => 199,  369 => 197,  362 => 194,  360 => 193,  355 => 190,  350 => 186,  344 => 183,  341 => 182,  335 => 179,  329 => 176,  326 => 175,  324 => 174,  320 => 172,  317 => 170,  311 => 166,  308 => 91,  300 => 159,  297 => 158,  293 => 156,  291 => 79,  284 => 75,  278 => 148,  271 => 70,  269 => 106,  264 => 67,  258 => 101,  245 => 93,  243 => 130,  238 => 127,  225 => 61,  212 => 118,  208 => 117,  203 => 78,  192 => 49,  188 => 48,  179 => 70,  166 => 57,  158 => 88,  141 => 45,  134 => 41,  124 => 68,  115 => 61,  109 => 57,  97 => 28,  80 => 39,  71 => 21,  62 => 15,  49 => 12,  35 => 7,  30 => 6,  63 => 18,  57 => 14,  54 => 12,  43 => 17,  31 => 6,  24 => 4,  21 => 2,  82 => 20,  73 => 22,  70 => 24,  64 => 15,  55 => 14,  52 => 15,  48 => 14,  46 => 18,  41 => 14,  37 => 9,  32 => 6,  22 => 2,  265 => 123,  259 => 100,  252 => 134,  250 => 97,  247 => 115,  241 => 112,  234 => 89,  232 => 122,  229 => 107,  227 => 62,  219 => 82,  213 => 81,  205 => 93,  201 => 91,  199 => 74,  196 => 77,  190 => 86,  186 => 84,  184 => 67,  181 => 82,  173 => 67,  169 => 39,  167 => 76,  162 => 54,  160 => 72,  157 => 52,  151 => 50,  149 => 47,  142 => 63,  135 => 42,  130 => 40,  128 => 38,  125 => 38,  117 => 34,  113 => 48,  108 => 33,  106 => 28,  103 => 28,  94 => 29,  89 => 26,  87 => 24,  84 => 25,  76 => 38,  72 => 27,  67 => 19,  65 => 17,  61 => 17,  56 => 16,  53 => 13,  51 => 13,  40 => 10,  34 => 10,  28 => 5,  26 => 4,  36 => 9,  23 => 3,  19 => 1,);
    }
}
