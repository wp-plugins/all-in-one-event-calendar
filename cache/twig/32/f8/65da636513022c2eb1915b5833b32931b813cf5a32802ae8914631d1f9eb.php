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
        return array (  40 => 10,  32 => 4,  27 => 3,  23 => 2,  295 => 124,  288 => 120,  284 => 119,  279 => 117,  274 => 115,  271 => 114,  269 => 113,  266 => 112,  259 => 108,  255 => 107,  250 => 105,  245 => 103,  242 => 102,  240 => 101,  237 => 100,  229 => 97,  223 => 96,  220 => 95,  218 => 94,  215 => 93,  208 => 89,  204 => 88,  198 => 87,  195 => 86,  193 => 85,  190 => 84,  183 => 80,  179 => 79,  173 => 78,  170 => 77,  168 => 76,  164 => 75,  160 => 74,  157 => 73,  151 => 71,  148 => 61,  146 => 60,  143 => 59,  141 => 58,  139 => 57,  132 => 53,  126 => 50,  112 => 38,  106 => 35,  99 => 32,  97 => 31,  93 => 29,  90 => 28,  83 => 26,  80 => 25,  78 => 24,  74 => 23,  64 => 19,  60 => 18,  56 => 17,  52 => 15,  46 => 13,  44 => 12,  38 => 5,  33 => 7,  29 => 6,  25 => 5,  41 => 16,  39 => 15,  37 => 14,  35 => 13,  31 => 11,  19 => 1,);
    }
}
