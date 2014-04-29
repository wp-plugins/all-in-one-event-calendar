<?php

/* setting/superwidget.twig */
class __TwigTemplate_31416a842b873aa15c2afe2fd664e027ecf1ba867877537f21b06052271bb848 extends Twig_Template
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
\t<p>
\t\t<a href=\"#ai1ec-superwidget\" id=\"ai1ec-embedding-trigger\"
\t\t\tdata-toggle=\"ai1ec-collapse\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-magic ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t";
        // line 7
        echo Ai1ec_I18n::__("Embed the calendar using the Super Widget");
        echo "
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-caret-down\"></i>
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-caret-up ai1ec-hide\"></i>
\t\t</a>
\t</p>
\t<div id=\"ai1ec-superwidget\" class=\"ai1ec-collapse ai1ec-in\">
\t\t<div class=\"ai1ec-well ai1ec-prose\">
\t\t\t<p>";
        // line 14
        echo Ai1ec_I18n::__("You can also embed a calendar into a remote webpage (for example, a static HTML page hosted on a different server). Here's how:");
        echo "</p>
\t\t\t<ol>
\t\t\t\t<li>
\t\t\t\t\t<p>";
        // line 17
        echo Ai1ec_I18n::__("Add this line just before the closing <code>&lt;/head&gt;</code> tag:");
        echo "</p>
\t\t\t\t\t<pre>&lt;script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["siteurl"]) ? $context["siteurl"] : null));
        echo "\"&gt;&lt;/script&gt;</pre>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<p>";
        // line 21
        echo Ai1ec_I18n::__("Insert this markup where you would like to embed the Super Widget (using default options):");
        echo "</p>
\t\t\t\t\t<pre>&lt;div class=\"timely-calendar\"&gt;&lt;/div&gt;</pre>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<p>
\t\t\t\t\t\t<span class=\"ai1ec-text-muted\">";
        // line 26
        echo Ai1ec_I18n::__("Optional.");
        echo "</span>
\t\t\t\t\t\t";
        // line 27
        echo Ai1ec_I18n::__("Add options to your Super Widget:");
        echo "
\t\t\t\t\t</p>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>";
        // line 30
        echo Ai1ec_I18n::__("Posterboard view:");
        echo " <code>&lt;div class=\"timely-calendar\" data-action=\"posterboard\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 31
        echo Ai1ec_I18n::__("Stream view:");
        echo " <code>&lt;div class=\"timely-calendar\" data-action=\"stream\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 32
        echo Ai1ec_I18n::__("Month view:");
        echo " <code>&lt;div class=\"timely-calendar\" data-action=\"month\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 33
        echo Ai1ec_I18n::__("Week view:");
        echo " <code>&lt;div class=\"timely-calendar\" data-action=\"week\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 34
        echo Ai1ec_I18n::__("Day view:");
        echo " <code>&lt;div class=\"timely-calendar\" data-action=\"day\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 35
        echo Ai1ec_I18n::__("Agenda view:");
        echo " <code>&lt;div class=\"timely-calendar\" data-action=\"agenda\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 36
        echo Ai1ec_I18n::__("Default view as per settings:");
        echo " <code>&lt;div class=\"timely-calendar\"&gt;&lt;/div&gt;</code></li>
\t
\t\t\t\t\t\t<li>";
        // line 38
        echo Ai1ec_I18n::__("Filter by event category ID:");
        echo " <code>&lt;div class=\"timely-calendar\" data-cat_ids=\"1\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 39
        echo Ai1ec_I18n::__("Filter by event category IDs (separate IDs by comma):");
        echo " <code>&lt;div class=\"timely-calendar\" data-cat_ids=\"1,2\"&gt;&lt;/div&gt;</code></li>
\t
\t\t\t\t\t\t<li>";
        // line 41
        echo Ai1ec_I18n::__("Filter by event tag ID:");
        echo " <code>&lt;div class=\"timely-calendar\" data-tag_ids=\"1\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 42
        echo Ai1ec_I18n::__("Filter by event tag IDs (separate IDs by comma):");
        echo " <code>&lt;div class=\"timely-calendar\" data-tag_ids=\"1,2\"&gt;&lt;/div&gt;</code></li>
\t
\t\t\t\t\t\t<li>";
        // line 44
        echo Ai1ec_I18n::__("Filter by post ID:");
        echo " <code>&lt;div class=\"timely-calendar\" data-post_ids=\"1\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t\t<li>";
        // line 45
        echo Ai1ec_I18n::__("Filter by post IDs (separate IDs by comma):");
        echo " <code>&lt;div class=\"timely-calendar\" data-post_ids=\"1,2\"&gt;&lt;/div&gt;</code></li>
\t
\t\t\t\t\t\t<li>";
        // line 47
        echo Ai1ec_I18n::__("Hide title and navigation buttons:");
        echo " <code>&lt;div class=\"timely-calendar\" data-no_navigation=\"true\"&gt;&lt;/div&gt;</code></li>
\t
\t\t\t\t\t\t<li>";
        // line 49
        echo Ai1ec_I18n::__("Set a default start date: *");
        echo " <code>&lt;div class=\"timely-calendar\" data-exact_date=\"21-12-2012\"&gt;&lt;/div&gt;</code></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ol>
\t\t\t<div class=\"ai1ec-alert ai1ec-alert-warning\">
\t\t\t\t";
        // line 54
        echo Ai1ec_I18n::__("* Provide a date in the same format specified by the <strong>Input dates in this format</strong> setting on the <strong>Adding/Editing Events</strong> tab.");
        echo "
\t\t\t</div>
\t\t\t<div class=\"ai1ec-alert ai1ec-alert-warning\">
\t\t\t\t<strong>";
        // line 57
        echo Ai1ec_I18n::__("Warning:");
        echo "</strong>
\t\t\t\t";
        // line 58
        echo Ai1ec_I18n::__("It is currently not supported to embed more than one calendar in the same page. Do not attempt to embed the calendar via Super Widget in a page that already displays the calendar.");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/superwidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 58,  145 => 57,  139 => 54,  131 => 49,  126 => 47,  121 => 45,  117 => 44,  112 => 42,  108 => 41,  103 => 39,  99 => 38,  86 => 34,  78 => 32,  64 => 27,  60 => 26,  62 => 18,  137 => 43,  123 => 38,  114 => 35,  106 => 34,  100 => 33,  95 => 31,  77 => 28,  163 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  133 => 42,  130 => 23,  127 => 39,  124 => 21,  97 => 17,  91 => 30,  67 => 24,  39 => 9,  96 => 35,  76 => 12,  70 => 30,  53 => 19,  82 => 33,  72 => 23,  68 => 21,  61 => 21,  57 => 20,  50 => 13,  42 => 17,  22 => 2,  118 => 36,  109 => 20,  98 => 19,  94 => 36,  90 => 35,  87 => 31,  83 => 29,  80 => 14,  74 => 31,  66 => 11,  63 => 10,  55 => 8,  44 => 5,  21 => 1,  35 => 2,  30 => 5,  51 => 7,  41 => 4,  27 => 4,  23 => 3,  20 => 1,  56 => 13,  46 => 18,  34 => 4,  31 => 5,  59 => 9,  48 => 5,  45 => 17,  43 => 7,  38 => 3,  29 => 5,  26 => 7,  71 => 25,  58 => 17,  52 => 21,  49 => 18,  47 => 6,  40 => 6,  36 => 14,  32 => 6,  28 => 5,  24 => 2,  19 => 2,);
    }
}
