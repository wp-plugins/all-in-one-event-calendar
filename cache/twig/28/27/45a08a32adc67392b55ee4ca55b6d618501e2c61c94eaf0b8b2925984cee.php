<?php

/* setting/checkbox.twig */
class __TwigTemplate_282745a08a32adc67392b55ee4ca55b6d618501e2c61c94eaf0b8b2925984cee extends Twig_Template
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
        echo "<div class=\"ai1ec-col-sm-12\">
\t<div class=\"checkbox\">
\t\t<label for=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t\t\t";
        // line 4
        $context["__internal_96ba1b110ccfed8b442fca83fb6fec22bb494af7421b02cd5f9630f82e4ada40"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 5
        echo "\t\t\t";
        echo $context["__internal_96ba1b110ccfed8b442fca83fb6fec22bb494af7421b02cd5f9630f82e4ada40"]->getinput((isset($context["id"]) ? $context["id"] : null), (isset($context["id"]) ? $context["id"] : null), 1, "checkbox", (isset($context["attributes"]) ? $context["attributes"] : null));
        echo "

\t\t\t";
        // line 7
        echo $this->getAttribute((isset($context["renderer"]) ? $context["renderer"] : null), "label");
        echo "

\t\t</label>
\t</div>
\t";
        // line 11
        if ($this->getAttribute((isset($context["renderer"]) ? $context["renderer"] : null), "help", array(), "any", true, true)) {
            // line 12
            echo "\t\t<div class=\"ai1ec-help-block\">";
            echo $this->getAttribute((isset($context["renderer"]) ? $context["renderer"] : null), "help");
            echo "</div>
\t";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "setting/checkbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 33,  145 => 31,  141 => 30,  134 => 28,  121 => 24,  102 => 20,  99 => 19,  90 => 17,  163 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  130 => 26,  80 => 14,  76 => 12,  168 => 36,  159 => 50,  157 => 48,  153 => 46,  137 => 29,  133 => 24,  128 => 40,  124 => 21,  120 => 38,  116 => 37,  104 => 32,  54 => 14,  117 => 28,  113 => 36,  109 => 20,  98 => 22,  68 => 15,  48 => 5,  107 => 34,  95 => 18,  78 => 17,  91 => 16,  70 => 18,  43 => 8,  20 => 1,  69 => 19,  63 => 10,  112 => 33,  106 => 21,  103 => 25,  100 => 28,  86 => 27,  74 => 13,  97 => 17,  89 => 28,  66 => 11,  55 => 8,  51 => 11,  40 => 8,  39 => 2,  34 => 4,  37 => 5,  72 => 37,  44 => 12,  73 => 20,  31 => 3,  83 => 15,  65 => 20,  59 => 9,  47 => 10,  41 => 4,  64 => 18,  60 => 17,  46 => 12,  28 => 2,  26 => 3,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 35,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 22,  123 => 36,  119 => 35,  114 => 34,  110 => 22,  108 => 31,  96 => 27,  92 => 25,  88 => 25,  85 => 24,  79 => 20,  75 => 16,  71 => 11,  61 => 13,  57 => 14,  53 => 10,  49 => 9,  42 => 11,  35 => 7,  32 => 5,  27 => 4,  23 => 3,  101 => 29,  94 => 39,  87 => 16,  81 => 24,  77 => 21,  67 => 10,  62 => 14,  56 => 11,  52 => 12,  50 => 14,  45 => 4,  38 => 3,  30 => 5,  24 => 2,  22 => 2,  36 => 5,  33 => 3,  29 => 5,  25 => 4,  21 => 1,  19 => 1,);
    }
}
