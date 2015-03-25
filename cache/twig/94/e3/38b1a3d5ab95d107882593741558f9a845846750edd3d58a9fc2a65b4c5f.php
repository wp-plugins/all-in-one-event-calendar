<?php

/* setting/embedding.twig */
class __TwigTemplate_94e338b1a3d5ab95d107882593741558f9a845846750edd3d58a9fc2a65b4c5f extends Twig_Template
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
        echo "<div class=\"ai1ec-col-sm-12\">
<div id=\"ai1ec-embedding\">
\t<div class=\"ai1ec-well ai1ec-prose\">
\t\t<p>";
        // line 5
        echo (isset($context["text_insert_shortcode"]) ? $context["text_insert_shortcode"] : null);
        echo "</p>
\t\t<ul>
\t\t\t<li>";
        // line 7
        echo (isset($context["text_month_view"]) ? $context["text_month_view"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"monthly\"]</code></li>
\t\t\t<li>";
        // line 8
        echo (isset($context["text_week_view"]) ? $context["text_week_view"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"weekly\"]</code></li>
\t\t\t<li>";
        // line 9
        echo (isset($context["text_day_view"]) ? $context["text_day_view"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"oneday\"]</code></li>
\t\t\t<li>";
        // line 10
        echo (isset($context["text_agenda_view"]) ? $context["text_agenda_view"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"agenda\"]</code></li>

\t\t\t";
        // line 12
        echo (isset($context["viewing_events_shortcodes"]) ? $context["viewing_events_shortcodes"] : null);
        echo "

\t\t\t<li><em>";
        // line 14
        echo (isset($context["text_general_form"]) ? $context["text_general_form"] : null);
        echo "</em> ";
        echo (isset($context["text_other_view"]) ? $context["text_other_view"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"someother\"]</code></li>
\t\t\t<li>";
        // line 15
        echo (isset($context["text_default_view"]) ? $context["text_default_view"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec]</code></li>
\t\t</ul>
\t\t<p>
\t\t\t<span class=\"ai1ec-text-muted\">";
        // line 18
        echo (isset($context["text_optional"]) ? $context["text_optional"] : null);
        echo "</span>
\t\t\t";
        // line 19
        echo (isset($context["text_filter_label"]) ? $context["text_filter_label"] : null);
        echo "
\t\t</p>
\t\t<ul>
\t\t\t<li>";
        // line 22
        echo (isset($context["text_filter_category"]) ? $context["text_filter_category"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_name=\"";
        echo (isset($context["text_filter_category_1"]) ? $context["text_filter_category_1"] : null);
        echo "\"]</code></li>
\t\t\t<li>";
        // line 23
        echo (isset($context["text_filter_category_comma"]) ? $context["text_filter_category_comma"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_name=\"";
        echo (isset($context["text_filter_category_2"]) ? $context["text_filter_category_2"] : null);
        echo ",";
        echo (isset($context["text_filter_category_3"]) ? $context["text_filter_category_3"] : null);
        echo "\"]</code></li>
\t\t\t<li>";
        // line 24
        echo (isset($context["text_filter_category_id"]) ? $context["text_filter_category_id"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 25
        echo (isset($context["text_filter_category_id_comma"]) ? $context["text_filter_category_id_comma"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_id=\"1,2\"]</code></li>

\t\t\t<li>";
        // line 27
        echo (isset($context["text_filter_tag"]) ? $context["text_filter_tag"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_name=\"";
        echo (isset($context["text_filter_tag_1"]) ? $context["text_filter_tag_1"] : null);
        echo "\"]</code></li>
\t\t\t<li>";
        // line 28
        echo (isset($context["text_filter_tag_comma"]) ? $context["text_filter_tag_comma"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_name=\"";
        echo (isset($context["text_filter_tag_2"]) ? $context["text_filter_tag_2"] : null);
        echo ",";
        echo (isset($context["text_filter_tag_3"]) ? $context["text_filter_tag_3"] : null);
        echo "\"]</code></li>
\t\t\t<li>";
        // line 29
        echo (isset($context["text_filter_tag_id"]) ? $context["text_filter_tag_id"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 30
        echo (isset($context["text_filter_tag_id_comma"]) ? $context["text_filter_tag_id_comma"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_id=\"1,2\"]</code></li>

\t\t\t<li>";
        // line 32
        echo (isset($context["text_filter_post_id"]) ? $context["text_filter_post_id"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec post_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 33
        echo (isset($context["text_filter_post_id_comma"]) ? $context["text_filter_post_id_comma"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec post_id=\"1,2\"]</code></li>
\t\t\t<li>";
        // line 34
        echo (isset($context["text_events_limit"]) ? $context["text_events_limit"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec events_limit=\"5\"]</code></li>
\t\t</ul>
\t\t<div class=\"ai1ec-alert ai1ec-alert-warning\">
\t\t\t<strong>";
        // line 37
        echo (isset($context["text_warning"]) ? $context["text_warning"] : null);
        echo "</strong>
\t\t\t";
        // line 38
        echo (isset($context["text_single_calendar"]) ? $context["text_single_calendar"] : null);
        echo "
\t\t</div>
\t</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/embedding.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 33,  145 => 31,  141 => 30,  134 => 28,  121 => 24,  102 => 28,  99 => 19,  90 => 17,  163 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  130 => 26,  80 => 14,  76 => 12,  168 => 36,  159 => 50,  157 => 48,  153 => 46,  137 => 38,  133 => 37,  128 => 40,  124 => 21,  120 => 38,  116 => 37,  104 => 32,  54 => 14,  117 => 28,  113 => 36,  109 => 20,  98 => 22,  68 => 15,  48 => 5,  107 => 34,  95 => 18,  78 => 17,  91 => 25,  70 => 18,  43 => 8,  20 => 1,  69 => 19,  63 => 18,  112 => 33,  106 => 21,  103 => 25,  100 => 28,  86 => 27,  74 => 13,  97 => 17,  89 => 28,  66 => 11,  55 => 8,  51 => 14,  40 => 8,  39 => 2,  34 => 4,  37 => 9,  72 => 37,  44 => 12,  73 => 22,  31 => 3,  83 => 15,  65 => 20,  59 => 9,  47 => 10,  41 => 10,  64 => 18,  60 => 17,  46 => 12,  28 => 2,  26 => 3,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 35,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 34,  123 => 33,  119 => 32,  114 => 30,  110 => 29,  108 => 31,  96 => 27,  92 => 25,  88 => 25,  85 => 24,  79 => 23,  75 => 16,  71 => 11,  61 => 13,  57 => 15,  53 => 10,  49 => 9,  42 => 11,  35 => 7,  32 => 5,  27 => 4,  23 => 3,  101 => 29,  94 => 39,  87 => 24,  81 => 24,  77 => 21,  67 => 19,  62 => 14,  56 => 11,  52 => 12,  50 => 14,  45 => 4,  38 => 3,  30 => 5,  24 => 5,  22 => 2,  36 => 5,  33 => 8,  29 => 7,  25 => 4,  21 => 1,  19 => 2,);
    }
}
