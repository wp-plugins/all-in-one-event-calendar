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
        return array (  118 => 43,  101 => 34,  96 => 33,  92 => 32,  87 => 29,  81 => 23,  76 => 22,  63 => 17,  58 => 15,  49 => 12,  36 => 9,  212 => 86,  207 => 84,  185 => 78,  171 => 65,  166 => 63,  162 => 62,  158 => 61,  154 => 60,  150 => 59,  140 => 57,  134 => 55,  117 => 54,  109 => 49,  105 => 36,  91 => 40,  85 => 24,  71 => 28,  69 => 20,  59 => 18,  53 => 13,  21 => 2,  77 => 34,  72 => 21,  70 => 26,  62 => 21,  54 => 16,  50 => 15,  40 => 10,  32 => 8,  27 => 3,  23 => 2,  295 => 124,  288 => 120,  284 => 119,  279 => 117,  274 => 115,  271 => 114,  269 => 113,  266 => 112,  259 => 108,  255 => 107,  250 => 105,  245 => 103,  242 => 102,  240 => 101,  237 => 100,  229 => 97,  223 => 96,  220 => 95,  218 => 94,  215 => 93,  208 => 89,  204 => 83,  198 => 87,  195 => 86,  193 => 85,  190 => 84,  183 => 80,  179 => 75,  173 => 71,  170 => 77,  168 => 76,  164 => 75,  160 => 74,  157 => 73,  151 => 71,  148 => 61,  146 => 58,  143 => 59,  141 => 58,  139 => 57,  132 => 53,  126 => 50,  112 => 38,  106 => 35,  99 => 32,  97 => 43,  93 => 29,  90 => 28,  83 => 26,  80 => 25,  78 => 33,  74 => 23,  64 => 20,  60 => 16,  56 => 17,  52 => 15,  46 => 13,  44 => 11,  38 => 5,  33 => 7,  29 => 6,  25 => 4,  41 => 11,  39 => 10,  37 => 8,  35 => 9,  31 => 11,  19 => 1,);
    }
}
