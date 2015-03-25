<?php

/* setting/select.twig */
class __TwigTemplate_eeeaebb8da9bb78c051017293e6e38b7b9b5b9ce2693c48fc571b498eaf0027d extends Twig_Template
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
        echo "<label class=\"ai1ec-control-label ";
        if ((!(isset($context["stacked"]) ? $context["stacked"] : null))) {
            echo "ai1ec-col-sm-5";
        }
        echo "\"
  for=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t";
        // line 3
        echo (isset($context["label"]) ? $context["label"] : null);
        echo "
</label>
<div ";
        // line 5
        if ((!(isset($context["stacked"]) ? $context["stacked"] : null))) {
            echo "class=\"ai1ec-col-sm-7\"";
        }
        echo ">
  ";
        // line 6
        $context["__internal_954999339fe09c5e76089d03ed2c852beadd70eb3143424a6e86a742fe4e4ecb"] = $this->env->loadTemplate("form-elements/select.twig");
        // line 7
        echo "  ";
        echo $context["__internal_954999339fe09c5e76089d03ed2c852beadd70eb3143424a6e86a742fe4e4ecb"]->getselect((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["options"]) ? $context["options"] : null));
        echo "
</div>
";
        // line 9
        if ((!twig_test_empty((isset($context["fieldsets"]) ? $context["fieldsets"] : null)))) {
            // line 10
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fieldsets"]) ? $context["fieldsets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["fieldset"]) {
                // line 11
                echo "    ";
                echo (isset($context["fieldset"]) ? $context["fieldset"] : null);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "setting/select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  129 => 53,  115 => 48,  93 => 38,  82 => 33,  156 => 33,  145 => 31,  141 => 30,  134 => 28,  121 => 24,  102 => 28,  99 => 19,  90 => 17,  163 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  130 => 26,  80 => 14,  76 => 12,  168 => 36,  159 => 50,  157 => 48,  153 => 46,  137 => 38,  133 => 37,  128 => 40,  124 => 21,  120 => 38,  116 => 37,  104 => 43,  54 => 14,  117 => 28,  113 => 36,  109 => 20,  98 => 22,  68 => 15,  48 => 13,  107 => 34,  95 => 35,  78 => 17,  91 => 33,  70 => 18,  43 => 7,  20 => 1,  69 => 19,  63 => 18,  112 => 33,  106 => 21,  103 => 25,  100 => 28,  86 => 34,  74 => 13,  97 => 36,  89 => 28,  66 => 11,  55 => 8,  51 => 10,  40 => 6,  39 => 9,  34 => 3,  37 => 9,  72 => 37,  44 => 12,  73 => 24,  31 => 3,  83 => 15,  65 => 20,  59 => 9,  47 => 10,  41 => 6,  64 => 18,  60 => 18,  46 => 8,  28 => 2,  26 => 2,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 35,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 34,  123 => 33,  119 => 49,  114 => 30,  110 => 29,  108 => 44,  96 => 27,  92 => 25,  88 => 32,  85 => 24,  79 => 23,  75 => 29,  71 => 23,  61 => 13,  57 => 15,  53 => 10,  49 => 9,  42 => 11,  35 => 5,  32 => 5,  27 => 4,  23 => 3,  101 => 29,  94 => 39,  87 => 24,  81 => 27,  77 => 26,  67 => 21,  62 => 14,  56 => 11,  52 => 11,  50 => 14,  45 => 4,  38 => 5,  30 => 3,  24 => 2,  22 => 2,  36 => 5,  33 => 10,  29 => 4,  25 => 4,  21 => 1,  19 => 1,);
    }
}
