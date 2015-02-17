<?php

/* widget-creator/super-widget-contents.twig */
class __TwigTemplate_4b73ad41c82ac11e1da2a2b82814007e2577ceed36443b62877d9d35f45941e0 extends Twig_Template
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
        echo "<p>";
        echo (isset($context["text_common_info"]) ? $context["text_common_info"] : null);
        echo "</p>
";
        // line 2
        if ((isset($context["display_alert"]) ? $context["display_alert"] : null)) {
            // line 3
            echo "\t<div class=\"ai1ec-alert ai1ec-alert-warning\">
\t\t";
            // line 4
            echo (isset($context["text_alert"]) ? $context["text_alert"] : null);
            echo "
\t\t";
            // line 5
            echo (isset($context["text_alternatives"]) ? $context["text_alternatives"] : null);
            echo "
\t</div>
";
        }
        // line 8
        echo "<div class=\"ai1ec-col-12\">
\t<ul class=\"ai1ec-nav ai1ec-nav-pills\" role=\"tablist\">
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["data"]) {
            // line 11
            echo "\t\t\t<li>
\t\t\t\t<a href=\"#";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html_attr");
            echo "\" data-toggle=\"ai1ec-tab\" >
\t\t\t\t\t<i class=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "icon"), "html", null, true);
            echo " ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t\t";
            // line 14
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name");
            echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t</ul>
</div>
<div class=\"ai1ec-col-md-6\">
\t<div class=\"ai1ec-tab-content\">
\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["data"]) {
            // line 23
            echo "\t\t\t<div class=\"ai1ec-tab-pane\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 24
            if ((!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "requirements")))) {
                // line 25
                echo "\t\t\t\t\t<div class=\"ai1ec-alert ai1ec-alert-info\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-info-circle ai1ec-fa-fw\"></i>
\t\t\t\t\t\t";
                // line 27
                echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "requirements");
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "elements"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 31
                echo "\t\t\t\t\t";
                echo (isset($context["element"]) ? $context["element"] : null);
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t</div>
</div>
<div class=\"ai1ec-col-md-6\">
\t<p><strong>";
        // line 38
        echo (isset($context["text_paste"]) ? $context["text_paste"] : null);
        echo "</strong></p>
\t<pre id=\"ai1ec-superwidget-code\" class=\"ai1ec-autoselect\"
\t\t data-widget-url=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["siteurl"]) ? $context["siteurl"] : null), "html_attr");
        echo "?ai1ec_js_widget\"></pre>
\t<div class=\"ai1ec-alert ai1ec-alert-info\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-info-circle ai1ec-fa-fw\"></i>
\t\t";
        // line 43
        echo sprintf((isset($context["text_updated_code"]) ? $context["text_updated_code"] : null), "http://time.ly/document/manage-add-ons/embed-calendar-sites-super-widget/");
        // line 45
        echo "
\t</div>
</div>
<h2 id=\"widget-preview-title\">";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["text_preview"]) ? $context["text_preview"] : null), "html", null, true);
        echo "</h2>
<div id=\"ai1ec-superwidget-preview\" class=\"ai1ec-well ai1ec-hidden\"></div>
";
    }

    public function getTemplateName()
    {
        return "widget-creator/super-widget-contents.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 48,  132 => 43,  126 => 40,  58 => 14,  129 => 53,  115 => 48,  93 => 38,  82 => 33,  156 => 33,  145 => 31,  141 => 30,  134 => 45,  121 => 38,  102 => 28,  99 => 19,  90 => 17,  163 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  130 => 26,  80 => 14,  76 => 12,  168 => 36,  159 => 50,  157 => 48,  153 => 46,  137 => 38,  133 => 37,  128 => 40,  124 => 21,  120 => 38,  116 => 35,  104 => 43,  54 => 13,  117 => 28,  113 => 36,  109 => 33,  98 => 22,  68 => 18,  48 => 13,  107 => 34,  95 => 30,  78 => 23,  91 => 33,  70 => 18,  43 => 10,  20 => 1,  69 => 19,  63 => 18,  112 => 33,  106 => 21,  103 => 25,  100 => 31,  86 => 34,  74 => 22,  97 => 36,  89 => 27,  66 => 20,  55 => 8,  51 => 10,  40 => 8,  39 => 8,  34 => 8,  37 => 7,  72 => 37,  44 => 11,  73 => 24,  31 => 3,  83 => 24,  65 => 20,  59 => 17,  47 => 11,  41 => 13,  64 => 18,  60 => 18,  46 => 8,  28 => 5,  26 => 3,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 35,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 34,  123 => 33,  119 => 49,  114 => 30,  110 => 29,  108 => 44,  96 => 27,  92 => 25,  88 => 32,  85 => 25,  79 => 23,  75 => 29,  71 => 28,  61 => 13,  57 => 15,  53 => 17,  49 => 13,  42 => 7,  35 => 5,  32 => 6,  27 => 3,  23 => 2,  101 => 29,  94 => 39,  87 => 24,  81 => 27,  77 => 26,  67 => 21,  62 => 18,  56 => 11,  52 => 14,  50 => 12,  45 => 9,  38 => 6,  30 => 3,  24 => 2,  22 => 2,  36 => 7,  33 => 5,  29 => 4,  25 => 2,  21 => 1,  19 => 1,);
    }
}
