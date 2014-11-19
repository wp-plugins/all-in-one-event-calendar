<?php

/* widget/section-featured.twig */
class __TwigTemplate_867e0c73bdac092c15333c3d2745fe9ab1cb9675c162eaad777c6845699dc00d extends Twig_Template
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
        echo "<div class=\"ai1ec-featured-events\">
\t";
        // line 9
        echo $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "before_widget");
        echo "
\t";
        // line 10
        if (((isset($context["events"]) ? $context["events"] : null) == false)) {
            // line 11
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["text_no_events"]) ? $context["text_no_events"] : null), "html", null, true);
            echo "
\t\t</p>
\t";
        }
        // line 15
        echo "\t";
        if ((!twig_test_empty((isset($context["events"]) ? $context["events"] : null)))) {
            // line 16
            echo "\t";
            $context["event"] = $this->getAttribute((isset($context["events"]) ? $context["events"] : null), 0, array(), "array");
            // line 17
            echo "\t<div class=\"ai1ec-featured-first ai1ec-hidden-xs ai1ec-col-md-8\">
\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
            echo "\"
\t\t   class=\"ai1ec-load-event\"
\t\t   ";
            // line 20
            echo $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "data_type_events");
            echo ">
\t\t\t<div class=\"ai1ec-featured-image\"
\t\t\t\t style=\"background-image:url(";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->avatar_url((isset($context["event"]) ? $context["event"] : null), array(0 => "post_image", 1 => "content_img", 2 => "location_avatar", 3 => "category_avatar", 4 => "default_avatar")), "html_attr");
            // line 28
            echo ")\">
\t\t\t</div>
\t\t\t<div class=\"ai1ec-featured-info-panel\"></div>
\t\t\t<div class=\"ai1ec-featured-info\">
\t\t\t\t<div class=\"ai1ec-featured-title\">
\t\t\t\t\t";
            // line 33
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method");
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-featured-date\">
\t\t\t\t\t<div class=\"ai1ec-month\">
\t\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->month($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "format_to_gmt", array(), "method")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ai1ec-day\">
\t\t\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "format_to_gmt", array(), "method")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ai1ec-weekday\">
\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "format_to_gmt", array(), "method")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-featured-footer\">
\t\t\t\t";
            // line 48
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "categories_html"), "method");
            echo "
\t\t\t\t";
            // line 49
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "tags_html"), "method");
            echo "
\t\t\t</div>
\t\t</a>
\t</div>
\t<div class=\"ai1ec-featured-list ai1ec-col-md-4\">
\t";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 55
                echo "\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                echo "\"
\t\t   class=\"ai1ec-featured-event ai1ec-load-event
\t\t   ";
                // line 57
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "ai1ec-featured-active";
                }
                echo "\"
\t\t   data-categories=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "categories_html"), "method"), "html_attr");
                echo "\"
\t\t   data-tags=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "tags_html"), "method"), "html_attr");
                echo "\"
\t\t   data-month=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->month($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "format_to_gmt", array(), "method")), "html_attr");
                echo "\"
\t\t   data-day=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "format_to_gmt", array(), "method")), "html_attr");
                echo "\"
\t\t   data-weekday=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "format_to_gmt", array(), "method")), "html_attr");
                echo "\"
\t\t   ";
                // line 63
                echo $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "data_type_events");
                echo ">
\t\t\t<div class=\"ai1ec-featured-image\"
\t\t\t\t style=\"background-image:url(";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->avatar_url((isset($context["event"]) ? $context["event"] : null), array(0 => "post_image", 1 => "content_img", 2 => "location_avatar", 3 => "category_avatar", 4 => "default_avatar")), "html_attr");
                // line 71
                echo ")\">
\t\t\t</div>
\t\t\t<div class=\"ai1ec-featured-info\">
\t\t\t\t<div class=\"ai1ec-featured-title\">
\t\t\t\t\t";
                // line 75
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method");
                echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-featured-date\">
\t\t\t\t\t";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "event_duration"), "method"), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</a>
\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t</div>
\t";
            // line 84
            echo $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "after_widget");
            echo "
\t";
        }
        // line 86
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "widget/section-featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 86,  207 => 84,  185 => 78,  171 => 65,  166 => 63,  162 => 62,  158 => 61,  154 => 60,  150 => 59,  140 => 57,  134 => 55,  117 => 54,  109 => 49,  105 => 48,  91 => 40,  85 => 37,  71 => 28,  69 => 22,  59 => 18,  53 => 16,  21 => 2,  77 => 34,  72 => 31,  70 => 26,  62 => 21,  54 => 16,  50 => 15,  40 => 10,  32 => 8,  27 => 3,  23 => 2,  295 => 124,  288 => 120,  284 => 119,  279 => 117,  274 => 115,  271 => 114,  269 => 113,  266 => 112,  259 => 108,  255 => 107,  250 => 105,  245 => 103,  242 => 102,  240 => 101,  237 => 100,  229 => 97,  223 => 96,  220 => 95,  218 => 94,  215 => 93,  208 => 89,  204 => 83,  198 => 87,  195 => 86,  193 => 85,  190 => 84,  183 => 80,  179 => 75,  173 => 71,  170 => 77,  168 => 76,  164 => 75,  160 => 74,  157 => 73,  151 => 71,  148 => 61,  146 => 58,  143 => 59,  141 => 58,  139 => 57,  132 => 53,  126 => 50,  112 => 38,  106 => 35,  99 => 32,  97 => 43,  93 => 29,  90 => 28,  83 => 26,  80 => 25,  78 => 33,  74 => 23,  64 => 20,  60 => 18,  56 => 17,  52 => 15,  46 => 13,  44 => 12,  38 => 5,  33 => 7,  29 => 6,  25 => 4,  41 => 11,  39 => 10,  37 => 8,  35 => 9,  31 => 11,  19 => 1,);
    }
}
