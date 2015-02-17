<?php

/* widget/section-promoted.twig */
class __TwigTemplate_bf06321a21a78156137a8c2d863c68d2c2e62f1486bb557025d5f1403558e7c9 extends Twig_Template
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
        echo $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "before_widget");
        echo "
";
        // line 9
        echo $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "before_title");
        echo "
";
        // line 10
        if (($this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "remote", array(), "any", true, true) && $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "remote"))) {
            echo "<span class=\"ai1ec-fe-promoted-widget-title\">";
        }
        // line 11
        echo "\t";
        echo $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "title");
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "remote", array(), "any", true, true) && $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "remote"))) {
            echo "</span>";
        }
        // line 13
        echo $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "after_title");
        echo "

\t";
        // line 15
        if (((isset($context["events"]) ? $context["events"] : null) == false)) {
            // line 16
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["text_no_events"]) ? $context["text_no_events"] : null), "html", null, true);
            echo "
\t\t</p>
\t";
        }
        // line 20
        echo "
";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 22
            echo "<div class=\"ai1ec-promoted-event-item ai1ec-featured-event-item-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "name"), "html", null, true);
            echo "\">
\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
            echo "\">
\t\t<img src=\"";
            // line 24
            echo $this->env->getExtension('ai1ec')->avatar_url((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "content_img", 2 => "location_avatar", 3 => "category_avatar"));
            // line 29
            echo "\"/>
\t\t<div>
\t\t\t<div>
\t\t\t\t";
            // line 32
            echo $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post"), "method"), "post_title");
            echo "
\t\t\t\t";
            // line 33
            if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method")))) {
                echo "@ ";
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method");
            }
            // line 34
            echo "\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
            // line 36
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "post_excerpt"), "method");
            echo "
\t\t\t</div>
\t\t</div>
\t</a>
\t<hr>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "after_widget");
    }

    public function getTemplateName()
    {
        return "widget/section-promoted.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  96 => 33,  85 => 24,  69 => 20,  60 => 16,  58 => 15,  49 => 12,  36 => 9,  204 => 84,  196 => 81,  177 => 76,  171 => 73,  165 => 69,  163 => 63,  158 => 61,  154 => 60,  150 => 59,  146 => 58,  142 => 57,  136 => 56,  130 => 54,  105 => 36,  101 => 34,  93 => 42,  87 => 29,  81 => 23,  74 => 32,  67 => 27,  65 => 21,  59 => 18,  53 => 13,  44 => 11,  25 => 4,  21 => 2,  77 => 34,  70 => 26,  62 => 21,  54 => 16,  50 => 15,  29 => 6,  40 => 10,  38 => 5,  27 => 3,  218 => 120,  216 => 118,  208 => 116,  201 => 115,  199 => 82,  188 => 109,  179 => 102,  173 => 98,  167 => 95,  162 => 92,  160 => 91,  155 => 89,  145 => 82,  141 => 81,  134 => 77,  126 => 71,  124 => 66,  121 => 65,  119 => 64,  113 => 53,  109 => 57,  104 => 56,  100 => 55,  92 => 32,  84 => 45,  76 => 22,  72 => 21,  63 => 17,  56 => 17,  51 => 25,  30 => 7,  46 => 15,  32 => 8,  26 => 6,  23 => 2,  48 => 16,  33 => 7,  28 => 5,  24 => 3,  41 => 11,  39 => 10,  37 => 8,  35 => 9,  31 => 11,  19 => 1,);
    }
}
