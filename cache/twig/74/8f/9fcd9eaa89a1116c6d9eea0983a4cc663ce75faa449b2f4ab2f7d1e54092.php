<?php

/* cog-widget.twig */
class __TwigTemplate_748f9fcd9eaa89a1116c6d9eea0983a4cc663ce75faa449b2f4ab2f7d1e54092 extends Twig_Template
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
        if ($this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "css", array(), "any", true, true)) {
            // line 2
            echo "<style>
<!--
";
            // line 4
            echo $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "css");
            echo "
-->
</style>
";
        }
        // line 8
        if (((isset($context["events"]) ? $context["events"] : null) == false)) {
            // line 9
            echo "\t<p class=\"ai1ec-no-results\">
\t\t";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["text_no_events"]) ? $context["text_no_events"] : null), "html", null, true);
            echo "
\t</p>
";
        }
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 14
            echo "\t<div class=\"ai1ec-cog-item ai1ec-clearfix\">
\t\t";
            // line 15
            if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "item_img")))) {
                // line 16
                echo "\t\t\t<div class=\"ai1ec-cog-image\" 
\t\t\t\t style=\"background-image:url(";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "item_img"), "html_attr");
                echo ")\">
\t\t\t</div>
\t\t";
            }
            // line 20
            echo "\t\t<div class=\"ai1ec-cog-item-title\">";
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "item_title");
            echo "</div>
\t\t<div class=\"ai1ec-cog-item-format\">";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["event_format"]) ? $context["event_format"] : null), "html", null, true);
            echo "</div>
\t\t<div class=\"ai1ec-cog-item-name\">
\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "item_link"), "html_attr");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "item_name"), "html", null, true);
            echo "</a>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "cog-widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  135 => 41,  127 => 38,  89 => 27,  47 => 14,  221 => 81,  217 => 79,  213 => 78,  211 => 77,  194 => 73,  168 => 61,  166 => 60,  161 => 58,  147 => 50,  115 => 35,  110 => 34,  278 => 96,  274 => 95,  267 => 94,  260 => 93,  258 => 92,  250 => 90,  245 => 87,  239 => 84,  233 => 82,  227 => 79,  224 => 78,  222 => 77,  215 => 74,  210 => 72,  198 => 67,  191 => 64,  187 => 63,  178 => 58,  169 => 55,  159 => 50,  153 => 48,  151 => 51,  133 => 41,  122 => 35,  114 => 33,  112 => 32,  99 => 29,  95 => 25,  83 => 22,  78 => 25,  137 => 67,  131 => 64,  125 => 61,  117 => 34,  103 => 54,  90 => 45,  82 => 39,  52 => 16,  34 => 9,  677 => 347,  669 => 341,  661 => 336,  652 => 329,  650 => 328,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 297,  574 => 291,  567 => 286,  561 => 284,  555 => 282,  553 => 281,  548 => 278,  545 => 277,  538 => 271,  532 => 269,  525 => 266,  523 => 265,  517 => 261,  511 => 259,  504 => 256,  502 => 255,  497 => 252,  489 => 246,  481 => 241,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 215,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 184,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 157,  295 => 156,  288 => 151,  282 => 98,  275 => 146,  273 => 145,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  247 => 131,  242 => 128,  236 => 83,  229 => 121,  212 => 73,  207 => 71,  203 => 75,  192 => 110,  183 => 69,  170 => 95,  138 => 44,  128 => 38,  107 => 33,  91 => 24,  80 => 24,  66 => 21,  61 => 20,  43 => 13,  73 => 18,  64 => 15,  55 => 17,  88 => 26,  79 => 23,  75 => 36,  68 => 33,  57 => 14,  118 => 43,  96 => 28,  85 => 26,  69 => 24,  60 => 28,  58 => 13,  49 => 12,  36 => 9,  204 => 84,  196 => 74,  177 => 100,  171 => 73,  165 => 53,  163 => 52,  158 => 61,  154 => 60,  150 => 76,  146 => 45,  142 => 44,  136 => 56,  130 => 42,  105 => 32,  101 => 27,  93 => 28,  87 => 23,  81 => 24,  74 => 36,  67 => 18,  65 => 19,  59 => 15,  53 => 13,  44 => 11,  25 => 4,  21 => 2,  77 => 34,  70 => 17,  62 => 15,  54 => 13,  50 => 15,  29 => 5,  40 => 11,  38 => 8,  27 => 5,  218 => 75,  216 => 119,  208 => 116,  201 => 68,  199 => 82,  188 => 109,  179 => 67,  173 => 64,  167 => 95,  162 => 89,  160 => 91,  155 => 85,  145 => 78,  141 => 81,  134 => 43,  126 => 41,  124 => 66,  121 => 38,  119 => 62,  113 => 37,  109 => 57,  104 => 56,  100 => 53,  92 => 27,  84 => 40,  76 => 23,  72 => 21,  63 => 16,  56 => 19,  51 => 20,  30 => 6,  46 => 18,  32 => 8,  26 => 6,  23 => 3,  48 => 15,  33 => 6,  28 => 5,  24 => 3,  41 => 10,  39 => 10,  37 => 10,  35 => 7,  31 => 7,  19 => 1,);
    }
}
