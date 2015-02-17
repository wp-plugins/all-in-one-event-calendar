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
\t\t   class=\"ai1ec-load-event\">
\t\t\t<div class=\"ai1ec-featured-image\"
\t\t\t\t style=\"background-image:url(";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->avatar_url((isset($context["event"]) ? $context["event"] : null), array(0 => "post_image", 1 => "content_img", 2 => "location_avatar", 3 => "category_avatar", 4 => "default_avatar")), "html_attr");
            // line 27
            echo ")\">
\t\t\t</div>
\t\t\t<div class=\"ai1ec-featured-info-panel\"></div>
\t\t\t<div class=\"ai1ec-featured-info\">
\t\t\t\t<div class=\"ai1ec-featured-title\">
\t\t\t\t\t";
            // line 32
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method");
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-featured-date\">
\t\t\t\t\t<div class=\"ai1ec-month\">
\t\t\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->month($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "format_to_gmt", array(), "method")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ai1ec-day\">
\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "format_to_gmt", array(), "method")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ai1ec-weekday\">
\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "format_to_gmt", array(), "method")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-featured-footer\">
\t\t\t\t";
            // line 47
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "categories_html"), "method");
            echo "
\t\t\t\t";
            // line 48
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "tags_html"), "method");
            echo "
\t\t\t</div>
\t\t</a>
\t</div>
\t<div class=\"ai1ec-featured-list ai1ec-col-md-4\">
\t";
            // line 53
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
                // line 54
                echo "\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                echo "\"
\t\t   class=\"ai1ec-featured-event ai1ec-load-event
\t\t   ";
                // line 56
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "ai1ec-featured-active";
                }
                echo "\"
\t\t   data-categories=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "categories_html"), "method"), "html_attr");
                echo "\"
\t\t   data-tags=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "tags_html"), "method"), "html_attr");
                echo "\"
\t\t   data-month=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->month($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "format_to_gmt", array(), "method")), "html_attr");
                echo "\"
\t\t   data-day=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "format_to_gmt", array(), "method")), "html_attr");
                echo "\"
\t\t   data-weekday=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "format_to_gmt", array(), "method")), "html_attr");
                echo "\">
\t\t\t<div class=\"ai1ec-featured-image\"
\t\t\t\t style=\"background-image:url(";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->avatar_url((isset($context["event"]) ? $context["event"] : null), array(0 => "post_image", 1 => "content_img", 2 => "location_avatar", 3 => "category_avatar", 4 => "default_avatar")), "html_attr");
                // line 69
                echo ")\">
\t\t\t</div>
\t\t\t<div class=\"ai1ec-featured-info\">
\t\t\t\t<div class=\"ai1ec-featured-title\">
\t\t\t\t\t";
                // line 73
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method");
                echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-featured-date\">
\t\t\t\t\t";
                // line 76
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
            // line 81
            echo "\t</div>
\t";
            // line 82
            echo $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "after_widget");
            echo "
\t";
        }
        // line 84
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
        return array (  204 => 84,  196 => 81,  177 => 76,  171 => 73,  165 => 69,  163 => 63,  158 => 61,  154 => 60,  150 => 59,  146 => 58,  142 => 57,  136 => 56,  130 => 54,  105 => 48,  101 => 47,  93 => 42,  87 => 39,  81 => 36,  74 => 32,  67 => 27,  65 => 21,  59 => 18,  53 => 16,  44 => 12,  25 => 4,  21 => 2,  77 => 34,  70 => 26,  62 => 21,  54 => 16,  50 => 15,  29 => 6,  40 => 10,  38 => 5,  27 => 3,  218 => 120,  216 => 118,  208 => 116,  201 => 115,  199 => 82,  188 => 109,  179 => 102,  173 => 98,  167 => 95,  162 => 92,  160 => 91,  155 => 89,  145 => 82,  141 => 81,  134 => 77,  126 => 71,  124 => 66,  121 => 65,  119 => 64,  113 => 53,  109 => 57,  104 => 56,  100 => 55,  92 => 50,  84 => 45,  76 => 39,  72 => 31,  63 => 31,  56 => 17,  51 => 25,  30 => 7,  46 => 15,  32 => 8,  26 => 6,  23 => 2,  48 => 16,  33 => 7,  28 => 5,  24 => 3,  41 => 11,  39 => 10,  37 => 8,  35 => 9,  31 => 11,  19 => 1,);
    }
}
