<?php

/* oneday.twig */
class __TwigTemplate_95b0bc90e12b886869857ead6c28360f596d7226395498afb6afc90ae60143ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("weekday.base.twig");

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'weekday_html' => array($this, 'block_weekday_html'),
            'event_popup' => array($this, 'block_event_popup'),
            'indent_multiplier' => array($this, 'block_indent_multiplier'),
            'indent_offset' => array($this, 'block_indent_offset'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "weekday.base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_name($context, array $blocks = array())
    {
        echo "oneday";
    }

    // line 5
    public function block_weekday_html($context, array $blocks = array())
    {
        // line 6
        echo "\t<span class=\"ai1ec-weekday-date\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
        echo "</span>
\t<span class=\"ai1ec-weekday-day\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
        echo "</span>
";
    }

    // line 10
    public function block_event_popup($context, array $blocks = array())
    {
        // line 11
        echo "\t";
        $this->env->loadTemplate("event-popup.twig")->display(array_merge($context, array("popup_classes" => "ai1ec-popup-in-oneday-view", "popup_timespan" => $this->env->getExtension('ai1ec')->timespan($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "_orig"), "method"), "short"))));
    }

    // line 17
    public function block_indent_multiplier($context, array $blocks = array())
    {
        echo 16;
    }

    // line 19
    public function block_indent_offset($context, array $blocks = array())
    {
        echo 54;
    }

    public function getTemplateName()
    {
        return "oneday.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  261 => 74,  255 => 72,  191 => 47,  171 => 40,  120 => 29,  321 => 132,  316 => 129,  310 => 124,  305 => 122,  295 => 78,  292 => 115,  285 => 111,  268 => 105,  256 => 99,  237 => 92,  215 => 56,  187 => 46,  165 => 67,  150 => 61,  146 => 60,  136 => 58,  105 => 44,  85 => 36,  133 => 49,  118 => 49,  98 => 31,  69 => 23,  33 => 7,  47 => 18,  100 => 42,  88 => 37,  298 => 115,  288 => 112,  281 => 110,  279 => 110,  263 => 103,  253 => 71,  244 => 94,  239 => 93,  228 => 87,  226 => 61,  220 => 58,  200 => 76,  195 => 48,  193 => 72,  177 => 61,  155 => 63,  121 => 50,  92 => 25,  44 => 10,  313 => 125,  306 => 118,  302 => 120,  299 => 88,  296 => 114,  294 => 80,  280 => 74,  274 => 71,  266 => 104,  260 => 66,  209 => 79,  178 => 43,  175 => 60,  159 => 64,  152 => 62,  148 => 32,  144 => 46,  102 => 26,  90 => 38,  78 => 23,  42 => 9,  39 => 7,  217 => 57,  211 => 80,  194 => 50,  183 => 45,  168 => 64,  161 => 61,  143 => 45,  116 => 38,  111 => 24,  93 => 27,  86 => 21,  81 => 24,  59 => 15,  287 => 106,  283 => 105,  276 => 75,  267 => 102,  254 => 97,  248 => 69,  242 => 94,  236 => 89,  233 => 67,  231 => 64,  224 => 84,  221 => 84,  216 => 82,  210 => 54,  207 => 56,  204 => 77,  202 => 53,  197 => 51,  189 => 65,  180 => 71,  176 => 42,  174 => 59,  170 => 69,  153 => 55,  140 => 47,  137 => 46,  132 => 56,  122 => 45,  112 => 36,  107 => 29,  101 => 27,  99 => 27,  95 => 26,  91 => 17,  83 => 25,  79 => 28,  58 => 15,  50 => 12,  45 => 11,  29 => 10,  25 => 4,  164 => 37,  156 => 36,  145 => 49,  139 => 44,  131 => 42,  127 => 47,  123 => 29,  114 => 25,  104 => 52,  96 => 19,  77 => 23,  74 => 16,  68 => 14,  60 => 17,  27 => 4,  66 => 19,  640 => 354,  632 => 348,  624 => 343,  615 => 336,  613 => 334,  607 => 330,  605 => 329,  602 => 328,  596 => 325,  593 => 324,  591 => 323,  588 => 322,  581 => 318,  576 => 316,  572 => 315,  569 => 314,  566 => 313,  563 => 311,  554 => 305,  545 => 299,  539 => 296,  530 => 290,  521 => 284,  516 => 281,  513 => 280,  506 => 274,  500 => 272,  493 => 269,  491 => 268,  485 => 264,  479 => 262,  472 => 259,  470 => 258,  465 => 255,  457 => 249,  449 => 244,  435 => 233,  429 => 229,  422 => 223,  416 => 221,  409 => 218,  407 => 217,  401 => 213,  395 => 211,  388 => 208,  386 => 207,  381 => 204,  375 => 199,  369 => 197,  362 => 194,  360 => 193,  355 => 190,  350 => 186,  344 => 183,  341 => 182,  335 => 179,  329 => 176,  326 => 175,  324 => 174,  320 => 172,  317 => 170,  311 => 166,  308 => 123,  300 => 119,  297 => 117,  293 => 77,  291 => 79,  284 => 75,  278 => 76,  271 => 106,  269 => 106,  264 => 67,  258 => 101,  245 => 93,  243 => 130,  238 => 127,  225 => 61,  212 => 84,  208 => 117,  203 => 78,  192 => 77,  188 => 48,  179 => 70,  166 => 57,  158 => 88,  141 => 45,  134 => 34,  124 => 30,  115 => 48,  109 => 23,  97 => 28,  80 => 24,  71 => 15,  62 => 19,  49 => 12,  35 => 6,  30 => 4,  63 => 18,  57 => 14,  54 => 12,  43 => 17,  31 => 5,  24 => 4,  21 => 2,  82 => 35,  73 => 22,  70 => 24,  64 => 15,  55 => 11,  52 => 10,  48 => 11,  46 => 7,  41 => 6,  37 => 8,  32 => 3,  22 => 2,  265 => 123,  259 => 73,  252 => 98,  250 => 97,  247 => 96,  241 => 112,  234 => 91,  232 => 122,  229 => 107,  227 => 62,  219 => 82,  213 => 81,  205 => 52,  201 => 79,  199 => 74,  196 => 77,  190 => 76,  186 => 84,  184 => 67,  181 => 82,  173 => 67,  169 => 39,  167 => 39,  162 => 38,  160 => 37,  157 => 52,  151 => 35,  149 => 47,  142 => 59,  135 => 42,  130 => 40,  128 => 31,  125 => 52,  117 => 34,  113 => 48,  108 => 45,  106 => 22,  103 => 21,  94 => 18,  89 => 26,  87 => 24,  84 => 25,  76 => 27,  72 => 27,  67 => 19,  65 => 18,  61 => 16,  56 => 16,  53 => 15,  51 => 13,  40 => 8,  34 => 12,  28 => 5,  26 => 3,  36 => 7,  23 => 3,  19 => 1,);
    }
}
