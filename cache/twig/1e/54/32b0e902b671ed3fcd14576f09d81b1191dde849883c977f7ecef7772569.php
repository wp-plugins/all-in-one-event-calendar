<?php

/* event-single.twig */
class __TwigTemplate_1e5432b0e902b671ed3fcd14576f09d81b1191dde849883c977f7ecef7772569 extends Twig_Template
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
        echo "<a id=\"ai1ec-event\"></a>

<header class=\"page-head article-header ai1ec-clearfix\">
\t<div class=\"ai1ec-date-block-wrap ai1ec-pull-right ai1ec-hidden-xs\">
\t\t<div class=\"ai1ec-month\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->month($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method")), "html", null, true);
        echo "</div>
\t\t<div class=\"ai1ec-day\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method")), "html", null, true);
        echo "</div>
\t\t<div class=\"ai1ec-weekday\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method")), "html", null, true);
        echo "</div>
\t</div>
\t<h1 class=\"page-title entry-title\" itemprop=\"headline\">";
        // line 9
        echo (isset($context["filtered_title"]) ? $context["filtered_title"] : null);
        echo "</h1>
</header>

";
        // line 12
        if ((!twig_test_empty((isset($context["banner_image"]) ? $context["banner_image"] : null)))) {
            // line 13
            echo "\t<img src=\"";
            echo (isset($context["banner_image"]) ? $context["banner_image"] : null);
            echo "\" class=\"timely-saas-poster-url ai1ec-hidden\" />
";
        }
        // line 15
        echo "
<div class=\"timely ai1ec-single-event
\tai1ec-event-id-";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post_id"), "method"), "html", null, true);
        echo "
\t";
        // line 18
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
            echo "ai1ec-multiday";
        }
        // line 19
        echo "\t";
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
            echo "ai1ec-allday";
        }
        echo "\">

<div class=\"timely-saas-event-toolbar ai1ec-clearfix\">
\t<div class=\"timely-saas-datetime\">
\t\t";
        // line 23
        echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null), "short");
        echo "
\t\t";
        // line 24
        if ($this->getAttribute((isset($context["timezone_info"]) ? $context["timezone_info"] : null), "show_timezone")) {
            // line 25
            echo "\t\t\t<abbr class=\"ai1ec-initialism ai1ec-tooltip-trigger\"
\t\t\t\ttitle=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timezone_info"]) ? $context["timezone_info"] : null), "text_timezone_title"), "html_attr");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timezone_info"]) ? $context["timezone_info"] : null), "event_timezone"), "html", null, true);
            echo "</abbr>
\t\t";
        }
        // line 28
        echo "\t\t";
        $this->env->loadTemplate("recurrence.twig")->display($context);
        // line 29
        echo "\t</div>
\t<div class=\"ai1ec-pull-right\">
\t\t";
        // line 31
        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method")))) {
            // line 32
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method"), "html_attr");
            echo "\" target=\"_blank\"
\t\t\t\tclass=\"timely-saas-toolbar-tickets\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-ticket\"></i>
\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "tickets_url_label"), "method"), "html", null, true);
            echo "
\t\t\t</a>
\t\t";
        }
        // line 38
        echo "\t\t<a class=\"timely-saas-toolbar-save ai1ec-disabled\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-calendar-o\"></i>
\t\t\tSave
\t\t</a>
\t\t<a class=\"timely-saas-toolbar-share ai1ec-disabled\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-share\"></i>
\t\t\tShare
\t\t</a>
\t</div>
</div>

<div class=\"timely-saas-single-description\">
\t";
        // line 50
        echo $this->env->getExtension('ai1ec')->truncate(strip_tags((isset($context["filtered_content"]) ? $context["filtered_content"] : null)), 250, "…");
        echo "
\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-sm timely-saas-more-button\">Read More &gt;</a>
\t<div class=\"timely-saas-full-description ai1ec-hidden\">
\t\t";
        // line 53
        echo (isset($context["filtered_content"]) ? $context["filtered_content"] : null);
        echo "
\t</div>
</div>

";
        // line 57
        $context["col1"] = "ai1ec-col-sm-4";
        // line 58
        $context["col2"] = "ai1ec-col-sm-8";
        // line 59
        echo "<div class=\"ai1ec-event-details ai1ec-row\">
\t";
        // line 60
        if ((!(isset($context["hide_featured_image"]) ? $context["hide_featured_image"] : null))) {
            // line 61
            echo "\t\t";
            $context["img"] = $this->env->getExtension('ai1ec')->avatar((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "content_img", 2 => "location_avatar", 3 => "category_avatar"), "ai1ec-col-sm-7", false);
            // line 71
            echo "\t\t";
            echo (isset($context["img"]) ? $context["img"] : null);
            echo "
\t";
        }
        // line 73
        echo "
\t<div class=\"timely-saas-event-details ai1ec-col-sm-";
        // line 74
        echo ((twig_test_empty((isset($context["img"]) ? $context["img"] : null))) ? (12) : (5));
        echo "\">
\t\t";
        // line 75
        echo (isset($context["map"]) ? $context["map"] : null);
        echo "
\t\t";
        // line 76
        if ((!twig_test_empty((isset($context["location"]) ? $context["location"] : null)))) {
            // line 77
            echo "\t\t\t<div class=\"ai1ec-location ai1ec-row\">
\t\t\t\t<div class=\"ai1ec-field-label ";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text_where"]) ? $context["text_where"] : null), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"ai1ec-field-value ";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo " p-location\">
\t\t\t\t\t";
            // line 80
            echo (isset($context["location"]) ? $context["location"] : null);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 84
        echo "
\t\t";
        // line 85
        if (((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "cost"), "method"))) || $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_free"))) {
            // line 86
            echo "\t\t\t<div class=\"ai1ec-cost ai1ec-row\">
\t\t\t\t<div class=\"ai1ec-field-label ";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text_cost"]) ? $context["text_cost"] : null), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"ai1ec-field-value ";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_free")) ? ((isset($context["text_free"]) ? $context["text_free"] : null)) : ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "cost"), "method"))), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 93
        echo "
\t\t";
        // line 94
        if ((!twig_test_empty((isset($context["contact"]) ? $context["contact"] : null)))) {
            // line 95
            echo "\t\t\t<div class=\"ai1ec-contact ai1ec-row\">
\t\t\t\t<div class=\"ai1ec-field-label ";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text_contact"]) ? $context["text_contact"] : null), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"ai1ec-field-value ";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        // line 100
        echo "
\t\t";
        // line 101
        if ((!twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)))) {
            // line 102
            echo "\t\t\t<div class=\"ai1ec-categories ai1ec-row\">
\t\t\t\t<div class=\"ai1ec-field-label ";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo " ai1ec-col-xs-1\">
\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open ai1ec-tooltip-trigger\"
\t\t\t\t\t\ttitle=\"";
            // line 105
            echo twig_escape_filter($this->env, (isset($context["text_categories"]) ? $context["text_categories"] : null), "html_attr");
            echo "\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-field-value ";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo " ai1ec-col-xs-10\">
\t\t\t\t\t";
            // line 108
            echo (isset($context["categories"]) ? $context["categories"] : null);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 112
        echo "
\t\t";
        // line 113
        if ((!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null)))) {
            // line 114
            echo "\t\t\t<div class=\"ai1ec-tags ai1ec-row\">
\t\t\t\t<div class=\"ai1ec-field-label ";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo " ai1ec-col-xs-1\">
\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-tags ai1ec-tooltip-trigger\"
\t\t\t\t\t\ttitle=\"";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["text_tags"]) ? $context["text_tags"] : null), "html_attr");
            echo "\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-field-value ";
            // line 119
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo " ai1ec-col-xs-10\">
\t\t\t\t\t";
            // line 120
            echo (isset($context["tags"]) ? $context["tags"] : null);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 124
        echo "\t</div>
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "event-single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 124,  288 => 120,  284 => 119,  279 => 117,  274 => 115,  271 => 114,  269 => 113,  266 => 112,  259 => 108,  255 => 107,  250 => 105,  245 => 103,  242 => 102,  240 => 101,  237 => 100,  229 => 97,  223 => 96,  220 => 95,  218 => 94,  215 => 93,  208 => 89,  204 => 88,  198 => 87,  195 => 86,  193 => 85,  190 => 84,  183 => 80,  179 => 79,  173 => 78,  170 => 77,  168 => 76,  164 => 75,  160 => 74,  157 => 73,  151 => 71,  148 => 61,  146 => 60,  143 => 59,  141 => 58,  139 => 57,  132 => 53,  126 => 50,  112 => 38,  106 => 35,  99 => 32,  97 => 31,  93 => 29,  90 => 28,  83 => 26,  80 => 25,  78 => 24,  74 => 23,  64 => 19,  60 => 18,  56 => 17,  52 => 15,  46 => 13,  44 => 12,  38 => 9,  33 => 7,  29 => 6,  25 => 5,  41 => 16,  39 => 15,  37 => 14,  35 => 13,  31 => 11,  19 => 1,);
    }
}
