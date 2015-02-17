<?php

/* shortcode/ai1ec-featured-events.twig */
class __TwigTemplate_32f865da636513022c2eb1915b5833b32931b813cf5a32802ae8914631d1f9eb extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["events"]) ? $context["events"] : null), "length"), "html", null, true);
        echo "<br>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 3
            echo "\tEvent title: ";
            echo $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post"), "method"), "post_title");
            echo "<br>
\tEvent link:  <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
            echo "\">";
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method");
            echo "</a><br>
\tAvatar    : ";
            // line 5
            echo $this->env->getExtension('ai1ec')->avatar((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "content_img", 2 => "location_avatar", 3 => "category_avatar"));
            // line 10
            echo "
\t\t\t\t\t\t\t\t\t<br>
\t<hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "shortcode/ai1ec-featured-events.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  38 => 5,  27 => 3,  218 => 120,  216 => 118,  208 => 116,  201 => 115,  199 => 114,  188 => 109,  179 => 102,  173 => 98,  167 => 95,  162 => 92,  160 => 91,  155 => 89,  145 => 82,  141 => 81,  134 => 77,  126 => 71,  124 => 66,  121 => 65,  119 => 64,  113 => 60,  109 => 57,  104 => 56,  100 => 55,  92 => 50,  84 => 45,  76 => 39,  72 => 38,  63 => 31,  56 => 27,  51 => 25,  30 => 7,  46 => 15,  32 => 4,  26 => 6,  23 => 2,  48 => 16,  33 => 7,  28 => 5,  24 => 3,  41 => 12,  39 => 15,  37 => 9,  35 => 13,  31 => 11,  19 => 1,);
    }
}
