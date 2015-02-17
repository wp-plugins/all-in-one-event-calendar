<?php

/* theme-options/color-picker.twig */
class __TwigTemplate_65b5a575e6bf538d410a2e2197c73140d993d521b56e32435cddb3734e0f2db9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("theme-options/base_option.twig");

        $this->blocks = array(
            'variable' => array($this, 'block_variable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "theme-options/base_option.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_variable($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "<div class=\"ai1ec-col-sm-6 ai1ec-col-xs-9\">
  <div class=\"ai1ec-input-group color colorpickers\"
    data-color=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"
    data-color-format=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["format"]) ? $context["format"] : null), "html", null, true);
        echo "\">
  \t<input type=\"text\" id=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"ai1ec-form-control\"
      ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["readonly"]) ? $context["readonly"] : null), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\">
  \t<span class=\"ai1ec-input-group-addon\">
      <i style=\"background-color: ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"></i>
    </span>
  </div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "theme-options/color-picker.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  129 => 53,  115 => 48,  93 => 38,  82 => 33,  156 => 33,  145 => 31,  141 => 30,  134 => 28,  121 => 24,  102 => 28,  99 => 19,  90 => 17,  163 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  130 => 26,  80 => 14,  76 => 12,  168 => 36,  159 => 50,  157 => 48,  153 => 46,  137 => 38,  133 => 37,  128 => 40,  124 => 21,  120 => 38,  116 => 37,  104 => 43,  54 => 14,  117 => 28,  113 => 36,  109 => 20,  98 => 22,  68 => 21,  48 => 13,  107 => 34,  95 => 35,  78 => 17,  91 => 33,  70 => 18,  43 => 7,  20 => 1,  69 => 19,  63 => 18,  112 => 33,  106 => 21,  103 => 25,  100 => 28,  86 => 34,  74 => 13,  97 => 36,  89 => 28,  66 => 20,  55 => 8,  51 => 10,  40 => 6,  39 => 5,  34 => 4,  37 => 7,  72 => 37,  44 => 11,  73 => 24,  31 => 4,  83 => 15,  65 => 20,  59 => 17,  47 => 11,  41 => 8,  64 => 18,  60 => 18,  46 => 8,  28 => 3,  26 => 2,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 35,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 34,  123 => 33,  119 => 49,  114 => 30,  110 => 29,  108 => 44,  96 => 27,  92 => 25,  88 => 32,  85 => 24,  79 => 23,  75 => 29,  71 => 23,  61 => 13,  57 => 15,  53 => 17,  49 => 9,  42 => 7,  35 => 7,  32 => 5,  27 => 3,  23 => 2,  101 => 29,  94 => 39,  87 => 24,  81 => 27,  77 => 26,  67 => 21,  62 => 18,  56 => 11,  52 => 13,  50 => 13,  45 => 9,  38 => 6,  30 => 5,  24 => 2,  22 => 2,  36 => 8,  33 => 5,  29 => 4,  25 => 4,  21 => 1,  19 => 1,);
    }
}
