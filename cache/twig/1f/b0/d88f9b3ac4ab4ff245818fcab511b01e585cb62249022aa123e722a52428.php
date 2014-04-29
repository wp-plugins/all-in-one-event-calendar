<?php

/* calendar.twig */
class __TwigTemplate_1fb0d88f9b3ac4ab4ff245818fcab511b01e585cb62249022aa123e722a52428 extends Twig_Template
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
<div id=\"ai1ec-container\" class=\"ai1ec-container\">
\t<!-- AI1EC_PAGE_CONTENT_PLACEHOLDER -->
\t<div id=\"ai1ec-calendar\" class=\"timely\">
\t\t";
        // line 6
        echo $this->getAttribute((isset($context["filter_menu"]) ? $context["filter_menu"] : null), "get_content", array(), "method");
        echo "
\t\t<div id=\"ai1ec-calendar-view-container\">
\t\t\t<div id=\"ai1ec-calendar-view-loading\" class=\"ai1ec-loading\"></div>
\t\t\t<div id=\"ai1ec-calendar-view\">
\t\t\t\t";
        // line 10
        echo (isset($context["view"]) ? $context["view"] : null);
        echo "
\t\t\t</div>
\t\t</div>

\t\t";
        // line 14
        echo (isset($context["subscribe_buttons"]) ? $context["subscribe_buttons"] : null);
        echo "
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
        return array (  34 => 10,  32 => 6,  28 => 5,  57 => 18,  54 => 17,  43 => 12,  37 => 10,  24 => 3,  90 => 26,  84 => 24,  77 => 21,  62 => 16,  47 => 11,  40 => 11,  33 => 6,  21 => 2,  96 => 28,  86 => 24,  82 => 23,  78 => 22,  75 => 18,  69 => 19,  89 => 23,  85 => 24,  81 => 23,  76 => 22,  70 => 24,  68 => 19,  61 => 17,  56 => 16,  52 => 15,  45 => 11,  39 => 8,  305 => 117,  301 => 115,  297 => 114,  295 => 113,  287 => 111,  280 => 110,  278 => 109,  268 => 105,  262 => 102,  257 => 100,  252 => 97,  249 => 96,  243 => 93,  238 => 91,  233 => 88,  230 => 87,  227 => 86,  225 => 85,  219 => 82,  215 => 81,  209 => 79,  204 => 77,  200 => 76,  195 => 73,  193 => 72,  184 => 67,  180 => 65,  177 => 61,  175 => 60,  166 => 57,  159 => 52,  155 => 50,  149 => 47,  144 => 46,  141 => 45,  139 => 44,  135 => 42,  130 => 40,  127 => 39,  125 => 38,  121 => 37,  107 => 29,  103 => 28,  99 => 29,  95 => 26,  92 => 25,  87 => 24,  83 => 23,  79 => 19,  73 => 20,  71 => 17,  67 => 23,  63 => 21,  55 => 13,  51 => 12,  41 => 14,  36 => 7,  30 => 6,  25 => 4,  35 => 7,  31 => 7,  65 => 17,  59 => 15,  53 => 13,  46 => 7,  42 => 6,  29 => 5,  26 => 4,  22 => 2,  48 => 15,  44 => 10,  38 => 9,  27 => 6,  23 => 3,  19 => 2,);
    }
}
