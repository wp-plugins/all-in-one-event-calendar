<?php

/* add-ons-list/page.twig */
class __TwigTemplate_8c5c438803e41f884dbf4e4b50d7b9a7360a971a329595c86d2bbcb90a37629f extends Twig_Template
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
        echo "<div class=\"wrap\" id=\"ai1ec-add-ons\">
\t<h2>
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "title"), "html", null, true);
        echo "
\t\t&nbsp;&mdash;&nbsp;<a href=\"https://time.ly/downloads/\" class=\"button-primary\" title=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "button_title"), "html_attr");
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "button_title"), "html", null, true);
        echo "</a>
\t</h2>
\t<p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "paragraph_content"), "html", null, true);
        echo "</p>
\t";
        // line 7
        if ((isset($context["is_error"]) ? $context["is_error"] : null)) {
            // line 8
            echo "\t\t<div class=\"error\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "error"), "html", null, true);
            echo "</p></div>
\t";
        } else {
            // line 10
            echo "\t\t";
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
\t";
        }
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "add-ons-list/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 28,  113 => 27,  109 => 26,  98 => 22,  68 => 15,  48 => 9,  107 => 34,  95 => 31,  78 => 17,  91 => 20,  70 => 18,  43 => 8,  20 => 1,  69 => 19,  63 => 16,  112 => 33,  106 => 30,  103 => 25,  100 => 28,  86 => 22,  74 => 16,  97 => 21,  89 => 19,  66 => 17,  55 => 14,  51 => 10,  40 => 8,  39 => 5,  34 => 6,  37 => 7,  72 => 37,  44 => 18,  73 => 20,  31 => 4,  83 => 18,  65 => 20,  59 => 15,  47 => 9,  41 => 8,  64 => 21,  60 => 20,  46 => 10,  28 => 5,  26 => 6,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 25,  88 => 25,  85 => 24,  79 => 20,  75 => 16,  71 => 17,  61 => 13,  57 => 15,  53 => 10,  49 => 9,  42 => 8,  35 => 9,  32 => 6,  27 => 4,  23 => 3,  101 => 29,  94 => 39,  87 => 28,  81 => 17,  77 => 21,  67 => 12,  62 => 14,  56 => 11,  52 => 12,  50 => 7,  45 => 6,  38 => 7,  30 => 5,  24 => 2,  22 => 2,  36 => 5,  33 => 3,  29 => 4,  25 => 4,  21 => 2,  19 => 1,);
    }
}
