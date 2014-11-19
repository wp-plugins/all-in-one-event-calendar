<?php

/* shortcode/ai1ec-promoted-events.twig */
class __TwigTemplate_a0df98501543df6214665ba1f6575d3f9529a17320029316094b4b775a4ef65e extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 2
            echo "<div class=\"ai1ec-posterboard-view temp-sidebar-1\">
\t<div class=\"ai1ec-event\">
\t\t<div class=\"ai1ec-event-wrap ai1ec-clearfix\">
\t\t\t<div class=\"ai1ec-date-block-wrap\">
\t\t\t\t<a class=\"ai1ec-load-view\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
            echo "\">
\t\t\t\t\t<div class=\"ai1ec-month\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "M"), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"ai1ec-day\">";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "d"), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"ai1ec-weekday\">";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "D"), "html", null, true);
            echo "</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-event-title-wrap\">
\t\t\t\t<div class=\"ai1ec-event-title\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<a class=\"ai1ec-load-event\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
            echo "\">
\t\t\t\t\t\t\t";
            // line 16
            echo $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post"), "method"), "post_title");
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "F m, Y"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br />
\t\t\t<div class=\"ai1ec-clearfix\">
\t\t\t\t";
            // line 26
            echo $this->env->getExtension('ai1ec')->avatar((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "content_img", 2 => "location_avatar", 3 => "category_avatar"));
            // line 31
            echo "
\t\t\t</div>
\t\t\t<div class=\"ai1ec-event-description\">
\t\t\t\t";
            // line 34
            echo trim($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "post_excerpt"), "method"));
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "shortcode/ai1ec-promoted-events.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 34,  72 => 31,  70 => 26,  62 => 21,  54 => 16,  50 => 15,  40 => 10,  32 => 4,  27 => 3,  23 => 2,  295 => 124,  288 => 120,  284 => 119,  279 => 117,  274 => 115,  271 => 114,  269 => 113,  266 => 112,  259 => 108,  255 => 107,  250 => 105,  245 => 103,  242 => 102,  240 => 101,  237 => 100,  229 => 97,  223 => 96,  220 => 95,  218 => 94,  215 => 93,  208 => 89,  204 => 88,  198 => 87,  195 => 86,  193 => 85,  190 => 84,  183 => 80,  179 => 79,  173 => 78,  170 => 77,  168 => 76,  164 => 75,  160 => 74,  157 => 73,  151 => 71,  148 => 61,  146 => 60,  143 => 59,  141 => 58,  139 => 57,  132 => 53,  126 => 50,  112 => 38,  106 => 35,  99 => 32,  97 => 31,  93 => 29,  90 => 28,  83 => 26,  80 => 25,  78 => 24,  74 => 23,  64 => 19,  60 => 18,  56 => 17,  52 => 15,  46 => 13,  44 => 12,  38 => 5,  33 => 7,  29 => 6,  25 => 5,  41 => 9,  39 => 15,  37 => 8,  35 => 13,  31 => 11,  19 => 1,);
    }
}
