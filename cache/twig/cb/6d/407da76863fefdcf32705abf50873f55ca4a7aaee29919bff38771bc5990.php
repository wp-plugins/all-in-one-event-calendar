<?php

/* upgrade/waitbox.twig */
class __TwigTemplate_cb6d407da76863fefdcf32705abf50873f55ca4a7aaee29919bff38771bc5990 extends Twig_Template
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
        echo "<div class=\"ai1ec-clearfix\"></div>
<div class=\"ai1ec-container timely ai1ec-hidden ai1ec-col-lg-6 ai1ec-col-lg-offset-3\" id=\"wait-container\">
\t<div class=\"ai1ec-panel ai1ec-panel-primary\">
\t\t<div class=\"ai1ec-panel-heading\">
\t\t\t<div class=\"ai1ec-panel-title\">
\t\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["label"]) ? $context["label"] : null), "waitbox"), "title"), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ai1ec-panel-body ai1ec-text-center\">
\t\t\t<div class=\"ai1ec-alert ai1ec-timely-upgrade-result ai1ec-hidden\"></div>
\t\t\t<h2 class=\"ai1ec-timely-upgrade-info\">";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["label"]) ? $context["label"] : null), "waitbox"), "message");
        echo "</h2>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "upgrade/waitbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  106 => 30,  103 => 29,  100 => 28,  86 => 22,  74 => 18,  97 => 53,  89 => 48,  66 => 34,  55 => 26,  51 => 25,  40 => 6,  39 => 8,  34 => 11,  37 => 8,  72 => 37,  44 => 7,  73 => 18,  31 => 5,  83 => 33,  65 => 20,  59 => 17,  47 => 15,  41 => 10,  64 => 21,  60 => 20,  46 => 12,  28 => 8,  26 => 6,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 25,  88 => 25,  85 => 24,  79 => 20,  75 => 20,  71 => 17,  61 => 13,  57 => 15,  53 => 10,  49 => 9,  42 => 9,  35 => 9,  32 => 6,  27 => 4,  23 => 3,  101 => 29,  94 => 39,  87 => 37,  81 => 21,  77 => 39,  67 => 18,  62 => 22,  56 => 11,  52 => 17,  50 => 16,  45 => 11,  38 => 7,  30 => 5,  24 => 3,  22 => 2,  36 => 7,  33 => 6,  29 => 4,  25 => 4,  21 => 2,  19 => 1,);
    }
}
