<?php

/* bootstrap_tabs.twig */
class __TwigTemplate_1f5301836308ef8274b8f40f576da14b95efa5b66d8e5c3bbcd40df782e6fe3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'extra_html' => array($this, 'block_extra_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["stacked"]) ? $context["stacked"] : null)) {
            echo "<div class=\"ai1ec-row\"><div class=\"ai1ec-col-sm-3\">";
        }
        // line 2
        echo "
<ul class=\"ai1ec-nav
\t";
        // line 4
        if ((isset($context["stacked"]) ? $context["stacked"] : null)) {
            // line 5
            echo "\t\tai1ec-nav-pills ai1ec-nav-stacked
\t";
        } else {
            // line 7
            echo "\t\tai1ec-nav-tabs
\t";
        }
        // line 8
        echo "\">

\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["data"]) {
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name", array(), "any", true, true)) {
                // line 11
                echo "\t\t";
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "items", array(), "any", true, true)) {
                    // line 12
                    echo "\t\t\t<li class=\"ai1ec-dropdown\">
\t\t\t\t<a href=\"#\" data-toggle=\"ai1ec-dropdown\">
\t\t\t\t\t";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name"), "html", null, true);
                    echo " <i class=\"ai1ec-fa ai1ec-fa-caret-down\"></i>
\t\t\t\t</a>
\t\t\t\t<ul class=\"ai1ec-dropdown-menu\">
\t\t\t\t\t";
                    // line 17
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "items"));
                    foreach ($context['_seq'] as $context["drop_id"] => $context["drop_name"]) {
                        // line 18
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#ai1ec-";
                        // line 19
                        echo twig_escape_filter($this->env, (isset($context["drop_id"]) ? $context["drop_id"] : null), "html", null, true);
                        echo "\" data-toggle=\"ai1ec-tab\">
\t\t\t\t\t\t\t\t";
                        // line 20
                        echo twig_escape_filter($this->env, (isset($context["drop_name"]) ? $context["drop_name"] : null), "html", null, true);
                        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['drop_id'], $context['drop_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "\t\t\t\t</ul>
\t\t\t</li>
\t\t";
                } else {
                    // line 27
                    echo "\t\t\t<li>
\t\t\t\t<a href=\"#ai1ec-";
                    // line 28
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" data-toggle=\"ai1ec-tab\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name"), "html", null, true);
                    echo "</a>
\t\t\t</li>
\t\t";
                }
                // line 31
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
</ul>

";
        // line 35
        if ((isset($context["stacked"]) ? $context["stacked"] : null)) {
            echo "</div><div class=\"ai1ec-col-sm-9\">";
        }
        // line 36
        echo "
<div class=\"ai1ec-tab-content ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["content_class"]) ? $context["content_class"] : null), "html", null, true);
        echo "\">
\t";
        // line 38
        echo (isset($context["pre_tabs_markup"]) ? $context["pre_tabs_markup"] : null);
        echo "
\t";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["data"]) {
            // line 40
            echo "\t\t<div class=\"ai1ec-tab-pane\" id=\"ai1ec-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
\t\t\t";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "elements"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 42
                echo "\t\t\t\t";
                echo $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "html");
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>

";
        // line 48
        $this->displayBlock('extra_html', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        if ((isset($context["stacked"]) ? $context["stacked"] : null)) {
            echo "</div></div>";
        }
    }

    // line 48
    public function block_extra_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "bootstrap_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 48,  159 => 50,  157 => 48,  153 => 46,  137 => 42,  133 => 41,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  104 => 32,  54 => 14,  117 => 28,  113 => 36,  109 => 35,  98 => 22,  68 => 15,  48 => 9,  107 => 34,  95 => 31,  78 => 17,  91 => 20,  70 => 18,  43 => 8,  20 => 1,  69 => 19,  63 => 16,  112 => 33,  106 => 30,  103 => 25,  100 => 28,  86 => 27,  74 => 16,  97 => 31,  89 => 28,  66 => 17,  55 => 14,  51 => 10,  40 => 8,  39 => 5,  34 => 7,  37 => 9,  72 => 37,  44 => 18,  73 => 20,  31 => 4,  83 => 18,  65 => 20,  59 => 19,  47 => 11,  41 => 10,  64 => 18,  60 => 17,  46 => 12,  28 => 4,  26 => 4,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 51,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 25,  88 => 25,  85 => 24,  79 => 20,  75 => 16,  71 => 20,  61 => 13,  57 => 15,  53 => 10,  49 => 9,  42 => 10,  35 => 9,  32 => 7,  27 => 4,  23 => 3,  101 => 29,  94 => 39,  87 => 28,  81 => 24,  77 => 21,  67 => 19,  62 => 14,  56 => 11,  52 => 12,  50 => 12,  45 => 6,  38 => 8,  30 => 5,  24 => 2,  22 => 2,  36 => 5,  33 => 3,  29 => 4,  25 => 4,  21 => 2,  19 => 1,);
    }
}
