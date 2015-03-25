<?php

/* cog-widget-form.twig */
class __TwigTemplate_08d260d90987101ec432b0392e970794b475660dc3505582327e77eef0670735 extends Twig_Template
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
        echo "<p>
\t<label for=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["title"]) ? $context["title"] : null), "id"), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["title"]) ? $context["title"] : null), "label");
        echo "</label>
\t<input class=\"widefat\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["title"]) ? $context["title"] : null), "id"), "html", null, true);
        echo "\"
\t\t   name=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["title"]) ? $context["title"] : null), "name"), "html", null, true);
        echo "\" type=\"text\"
\t\t   value=\"";
        // line 5
        echo $this->getAttribute((isset($context["title"]) ? $context["title"] : null), "value");
        echo "\" />
</p>
<p>
\t<label for=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emphasis"]) ? $context["emphasis"] : null), "id"), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["emphasis"]) ? $context["emphasis"] : null), "label");
        echo "</label>
\t<input class=\"widefat\" id=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emphasis"]) ? $context["emphasis"] : null), "id"), "html", null, true);
        echo "\"
\t\t   name=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emphasis"]) ? $context["emphasis"] : null), "name"), "html", null, true);
        echo "\" type=\"text\"
\t\t   value=\"";
        // line 11
        echo $this->getAttribute((isset($context["emphasis"]) ? $context["emphasis"] : null), "value");
        echo "\" />
</p>
<p>
\t<label for=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "id"), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "label");
        echo "</label><br>
\t<select id=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "id"), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name"), "html", null, true);
        echo "\">
\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options"));
        foreach ($context['_seq'] as $context["tax"] => $context["taxname"]) {
            // line 17
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["tax"]) ? $context["tax"] : null), "html", null, true);
            echo "\"
\t\t\t\t";
            // line 18
            if (((isset($context["tax"]) ? $context["tax"] : null) == $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "value"))) {
                echo " selected";
            }
            echo ">
\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["taxname"]) ? $context["taxname"] : null), "html", null, true);
            echo "
\t\t\t</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tax'], $context['taxname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</select>
</p>
<p>
\t<label for=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : null), "id"), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["name"]) ? $context["name"] : null), "label");
        echo "</label>
\t<input class=\"widefat\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : null), "id"), "html", null, true);
        echo "\"
\t\t   name=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : null), "name"), "html", null, true);
        echo "\" type=\"text\"
\t\t   value=\"";
        // line 28
        echo $this->getAttribute((isset($context["name"]) ? $context["name"] : null), "value");
        echo "\" />
</p>
";
    }

    public function getTemplateName()
    {
        return "cog-widget-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 28,  113 => 27,  109 => 26,  98 => 22,  68 => 15,  48 => 9,  107 => 34,  95 => 31,  78 => 17,  91 => 20,  70 => 18,  43 => 9,  20 => 1,  69 => 19,  63 => 16,  112 => 33,  106 => 30,  103 => 25,  100 => 28,  86 => 22,  74 => 16,  97 => 21,  89 => 19,  66 => 17,  55 => 14,  51 => 10,  40 => 5,  39 => 5,  34 => 4,  37 => 8,  72 => 37,  44 => 18,  73 => 20,  31 => 4,  83 => 18,  65 => 20,  59 => 15,  47 => 9,  41 => 8,  64 => 21,  60 => 20,  46 => 12,  28 => 3,  26 => 6,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 25,  88 => 25,  85 => 24,  79 => 20,  75 => 16,  71 => 17,  61 => 13,  57 => 15,  53 => 10,  49 => 9,  42 => 8,  35 => 9,  32 => 4,  27 => 3,  23 => 3,  101 => 29,  94 => 39,  87 => 28,  81 => 17,  77 => 21,  67 => 12,  62 => 14,  56 => 11,  52 => 10,  50 => 7,  45 => 6,  38 => 4,  30 => 5,  24 => 2,  22 => 2,  36 => 5,  33 => 3,  29 => 4,  25 => 4,  21 => 2,  19 => 1,);
    }
}
