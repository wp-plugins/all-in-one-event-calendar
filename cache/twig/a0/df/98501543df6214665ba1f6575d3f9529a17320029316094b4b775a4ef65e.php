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
        return array (  77 => 34,  70 => 26,  62 => 21,  54 => 16,  50 => 15,  29 => 6,  40 => 10,  38 => 5,  27 => 3,  218 => 120,  216 => 118,  208 => 116,  201 => 115,  199 => 114,  188 => 109,  179 => 102,  173 => 98,  167 => 95,  162 => 92,  160 => 91,  155 => 89,  145 => 82,  141 => 81,  134 => 77,  126 => 71,  124 => 66,  121 => 65,  119 => 64,  113 => 60,  109 => 57,  104 => 56,  100 => 55,  92 => 50,  84 => 45,  76 => 39,  72 => 31,  63 => 31,  56 => 27,  51 => 25,  30 => 7,  46 => 15,  32 => 4,  26 => 6,  23 => 2,  48 => 16,  33 => 7,  28 => 5,  24 => 3,  41 => 9,  39 => 15,  37 => 8,  35 => 13,  31 => 11,  19 => 1,);
    }
}
