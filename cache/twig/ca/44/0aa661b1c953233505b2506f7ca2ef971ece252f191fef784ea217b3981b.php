<?php

/* setting/embedding.twig */
class __TwigTemplate_ca440aa661b1c953233505b2506f7ca2ef971ece252f191fef784ea217b3981b extends Twig_Template
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
<p>
\t<a href=\"#ai1ec-embedding\" id=\"ai1ec-embedding-trigger\"
\t\tdata-toggle=\"ai1ec-collapse\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-code ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t";
        // line 7
        echo Ai1ec_I18n::__("Embed the calendar using a shortcode");
        echo "
\t\t<i class=\"ai1ec-fa ai1ec-fa-caret-down\"></i>
\t\t<i class=\"ai1ec-fa ai1ec-fa-caret-up ai1ec-hide\"></i>
\t</a>
</p>
<div id=\"ai1ec-embedding\" class=\"ai1ec-collapse\">
\t<div class=\"ai1ec-well ai1ec-prose\">
\t\t<p>";
        // line 14
        echo Ai1ec_I18n::__("Insert one of these shortcodes into your page body to embed the calendar into any arbitrary WordPress Page:");
        echo "</p>
\t\t<ul>
\t\t\t<li>";
        // line 16
        echo Ai1ec_I18n::__("Month view:");
        echo " <code>[ai1ec view=\"monthly\"]</code></li>
\t\t\t<li>";
        // line 17
        echo Ai1ec_I18n::__("Week view:");
        echo " <code>[ai1ec view=\"weekly\"]</code></li>
\t\t\t<li>";
        // line 18
        echo Ai1ec_I18n::__("Day view:");
        echo " <code>[ai1ec view=\"daily\"]</code></li>
\t\t\t<li>";
        // line 19
        echo Ai1ec_I18n::__("Agenda view:");
        echo " <code>[ai1ec view=\"agenda\"]</code></li>
\t\t\t<li><em>General form:</em> ";
        // line 20
        echo Ai1ec_I18n::__("Some Other view:");
        echo " <code>[ai1ec view=\"someother\"]</code></li>
\t\t\t<li>";
        // line 21
        echo Ai1ec_I18n::__("Default view as per settings:");
        echo " <code>[ai1ec]</code></li>
\t\t</ul>
\t\t<p>
\t\t\t<span class=\"ai1ec-text-muted\">";
        // line 24
        echo Ai1ec_I18n::__("Optional.");
        echo "</span>
\t\t\t";
        // line 25
        echo Ai1ec_I18n::__("Add options to display a filtered calender. (You can find out category and tag IDs by inspecting the URL of your filtered calendar page.)");
        echo "
\t\t</p>
\t\t<ul>
\t\t\t<li>";
        // line 28
        echo Ai1ec_I18n::__("Filter by event category name/slug:");
        echo " <code>[ai1ec cat_name=\"";
        echo Ai1ec_I18n::__("Holidays");
        echo "\"]</code></li>
\t\t\t<li>";
        // line 29
        echo Ai1ec_I18n::__("Filter by event category names/slugs (separate names by comma):");
        echo " <code>[ai1ec cat_name=\"";
        echo Ai1ec_I18n::__("Lunar Cycles");
        echo ",";
        echo Ai1ec_I18n::__("zodiac-date-ranges");
        echo "\"]</code></li>
\t\t\t<li>";
        // line 30
        echo Ai1ec_I18n::__("Filter by event category ID:");
        echo " <code>[ai1ec cat_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 31
        echo Ai1ec_I18n::__("Filter by event category IDs (separate IDs by comma):");
        echo " <code>[ai1ec cat_id=\"1,2\"]</code></li>

\t\t\t<li>";
        // line 33
        echo Ai1ec_I18n::__("Filter by event tag name/slug:");
        echo " <code>[ai1ec tag_name=\"";
        echo Ai1ec_I18n::__("tips-and-tricks");
        echo "\"]</code></li>
\t\t\t<li>";
        // line 34
        echo Ai1ec_I18n::__("Filter by event tag names/slugs (separate names by comma):");
        echo " <code>[ai1ec tag_name=\"";
        echo Ai1ec_I18n::__("creative writing");
        echo ",";
        echo Ai1ec_I18n::__("performing arts");
        echo "\"]</code></li>
\t\t\t<li>";
        // line 35
        echo Ai1ec_I18n::__("Filter by event tag ID:");
        echo " <code>[ai1ec tag_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 36
        echo Ai1ec_I18n::__("Filter by event tag IDs (separate IDs by comma):");
        echo " <code>[ai1ec tag_id=\"1,2\"]</code></li>

\t\t\t<li>";
        // line 38
        echo Ai1ec_I18n::__("Filter by post ID:");
        echo " <code>[ai1ec post_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 39
        echo Ai1ec_I18n::__("Filter by post IDs (separate IDs by comma):");
        echo " <code>[ai1ec post_id=\"1,2\"]</code></li>
\t\t</ul>
\t\t<div class=\"ai1ec-alert ai1ec-alert-warning\">
\t\t\t<strong>";
        // line 42
        echo Ai1ec_I18n::__("Warning:");
        echo "</strong>
\t\t\t";
        // line 43
        echo Ai1ec_I18n::__("It is currently not supported to embed more than one calendar in the same page. Do not attempt to embed the calendar via shortcode in a page that already displays the calendar.");
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
        return array (  137 => 43,  123 => 38,  114 => 35,  106 => 34,  100 => 33,  95 => 31,  77 => 28,  163 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  133 => 42,  130 => 23,  127 => 39,  124 => 21,  97 => 17,  91 => 30,  67 => 24,  39 => 2,  96 => 35,  76 => 12,  70 => 22,  53 => 19,  82 => 30,  72 => 23,  68 => 25,  61 => 21,  57 => 20,  50 => 14,  42 => 11,  22 => 2,  118 => 36,  109 => 20,  98 => 19,  94 => 34,  90 => 32,  87 => 31,  83 => 29,  80 => 13,  74 => 13,  66 => 20,  63 => 9,  55 => 7,  44 => 12,  21 => 1,  35 => 7,  30 => 3,  51 => 6,  41 => 16,  27 => 4,  23 => 3,  20 => 1,  56 => 13,  46 => 14,  34 => 4,  31 => 5,  59 => 8,  48 => 5,  45 => 17,  43 => 7,  38 => 8,  29 => 5,  26 => 7,  71 => 25,  58 => 17,  52 => 11,  49 => 18,  47 => 12,  40 => 6,  36 => 14,  32 => 5,  28 => 5,  24 => 1,  19 => 2,);
    }
}
