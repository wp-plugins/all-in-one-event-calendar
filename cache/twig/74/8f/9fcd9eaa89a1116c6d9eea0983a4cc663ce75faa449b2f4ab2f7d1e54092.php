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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "item_title"), "html", null, true);
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
        return array (  50 => 15,  47 => 14,  226 => 81,  220 => 79,  188 => 69,  182 => 66,  175 => 62,  152 => 51,  143 => 45,  122 => 38,  97 => 28,  93 => 27,  86 => 25,  71 => 23,  293 => 100,  289 => 99,  260 => 91,  254 => 88,  251 => 87,  248 => 86,  239 => 82,  237 => 81,  233 => 79,  230 => 83,  225 => 76,  222 => 80,  210 => 70,  208 => 69,  195 => 65,  171 => 54,  161 => 50,  159 => 49,  154 => 47,  150 => 46,  146 => 45,  137 => 42,  132 => 39,  126 => 36,  121 => 35,  118 => 34,  116 => 35,  111 => 34,  105 => 28,  99 => 26,  95 => 25,  83 => 22,  78 => 20,  62 => 15,  59 => 15,  38 => 8,  33 => 6,  29 => 5,  25 => 4,  164 => 83,  156 => 52,  139 => 44,  131 => 42,  127 => 41,  123 => 64,  114 => 60,  104 => 52,  96 => 46,  77 => 23,  74 => 37,  60 => 28,  69 => 24,  644 => 354,  636 => 348,  628 => 343,  619 => 336,  617 => 335,  611 => 331,  609 => 330,  606 => 329,  600 => 326,  597 => 325,  595 => 324,  592 => 323,  585 => 319,  580 => 317,  576 => 316,  573 => 315,  570 => 314,  567 => 312,  558 => 306,  549 => 300,  543 => 297,  534 => 291,  525 => 285,  520 => 282,  517 => 281,  510 => 275,  504 => 273,  497 => 270,  495 => 269,  489 => 265,  483 => 263,  476 => 260,  474 => 259,  469 => 256,  461 => 250,  453 => 245,  439 => 234,  433 => 230,  426 => 224,  420 => 222,  413 => 219,  411 => 218,  405 => 214,  399 => 212,  392 => 209,  390 => 208,  385 => 205,  379 => 200,  373 => 198,  366 => 195,  364 => 194,  359 => 191,  354 => 187,  348 => 184,  345 => 183,  339 => 180,  333 => 177,  330 => 176,  328 => 175,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 102,  295 => 156,  288 => 151,  282 => 98,  275 => 97,  273 => 96,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  242 => 83,  236 => 123,  216 => 72,  212 => 77,  207 => 117,  203 => 75,  192 => 71,  183 => 103,  177 => 63,  170 => 60,  155 => 85,  145 => 71,  138 => 74,  134 => 73,  119 => 62,  107 => 54,  101 => 51,  91 => 24,  80 => 39,  66 => 21,  35 => 7,  30 => 6,  63 => 22,  54 => 13,  43 => 13,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 17,  64 => 15,  55 => 17,  52 => 16,  48 => 15,  46 => 18,  41 => 10,  37 => 10,  32 => 8,  22 => 2,  88 => 26,  81 => 24,  79 => 23,  75 => 36,  68 => 33,  57 => 14,  49 => 12,  44 => 11,  31 => 7,  27 => 5,  265 => 94,  259 => 120,  252 => 117,  250 => 116,  247 => 131,  241 => 112,  234 => 109,  232 => 108,  229 => 121,  227 => 77,  219 => 100,  213 => 71,  205 => 76,  201 => 91,  199 => 66,  196 => 112,  190 => 86,  186 => 60,  184 => 83,  181 => 58,  173 => 55,  169 => 77,  167 => 52,  162 => 89,  160 => 53,  157 => 71,  151 => 74,  149 => 68,  142 => 44,  135 => 43,  130 => 56,  128 => 69,  125 => 54,  117 => 61,  113 => 58,  108 => 33,  106 => 32,  103 => 27,  94 => 39,  89 => 26,  87 => 23,  84 => 40,  76 => 28,  72 => 21,  67 => 23,  65 => 17,  61 => 20,  56 => 19,  53 => 13,  51 => 17,  40 => 6,  34 => 9,  28 => 3,  26 => 4,  36 => 9,  23 => 3,  19 => 1,);
    }
}
