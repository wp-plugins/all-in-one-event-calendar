<?php

/* setting/input.twig */
class __TwigTemplate_73ce4d3a32e12813acdcf179c66ec21afa4acfb1cc40850c23722a5f0419b346 extends Twig_Template
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
        echo "<label class=\"ai1ec-control-label ai1ec-col-sm-5\" for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t";
        // line 2
        echo (isset($context["label"]) ? $context["label"] : null);
        echo "
</label>
";
        // line 4
        if ((array_key_exists("append", $context) || array_key_exists("licence_valid", $context))) {
            // line 5
            echo "\t<div class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? ((isset($context["group_class"]) ? $context["group_class"] : null)) : ("ai1ec-col-lg-3 ai1ec-col-md-4 ai1ec-col-sm-5")), "html", null, true);
            // line 6
            echo "\">
\t\t<div class=\"ai1ec-input-group\">
";
        } else {
            // line 9
            echo "\t<div class=\"ai1ec-col-sm-7\">
";
        }
        // line 11
        echo "
\t";
        // line 12
        $context["__internal_f26011b89766a5b71b08504c37dbf44fe1885621f4f4cfbdec1e8608396c620d"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 13
        echo "\t";
        ob_start();
        // line 14
        echo "\t";
        echo $context["__internal_f26011b89766a5b71b08504c37dbf44fe1885621f4f4cfbdec1e8608396c620d"]->getinput((isset($context["id"]) ? $context["id"] : null), (isset($context["id"]) ? $context["id"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["input_type"]) ? $context["input_type"] : null), (isset($context["input_args"]) ? $context["input_args"] : null));
        echo "


\t";
        // line 17
        if (array_key_exists("append", $context)) {
            // line 18
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">";
            echo twig_escape_filter($this->env, (isset($context["append"]) ? $context["append"] : null), "html", null, true);
            echo "</span>
\t\t</div>
\t";
        } elseif (array_key_exists("licence_valid", $context)) {
            // line 21
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">
\t\t\t\t<i class=\"ai1ec-fa
\t\t\t\t\t";
            // line 23
            if ((isset($context["licence_valid"]) ? $context["licence_valid"] : null)) {
                // line 24
                echo "\t\t\t\t\t\tai1ec-fa-check ai1ec-text-success
\t\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t\tai1ec-fa-times ai1ec-text-danger
\t\t\t\t\t";
            }
            // line 27
            echo "\">
\t\t\t\t</i>
\t\t\t</span>
\t\t</div>
\t";
        }
        // line 32
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 33
        echo "</div>

";
        // line 35
        if (array_key_exists("help", $context)) {
            // line 36
            echo "\t<div class=\"ai1ec-col-sm-12 ai1ec-help-block\">";
            echo (isset($context["help"]) ? $context["help"] : null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setting/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  129 => 53,  115 => 48,  93 => 38,  82 => 33,  156 => 33,  145 => 31,  141 => 30,  134 => 28,  121 => 24,  102 => 28,  99 => 19,  90 => 17,  163 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  130 => 26,  80 => 14,  76 => 12,  168 => 36,  159 => 50,  157 => 48,  153 => 46,  137 => 38,  133 => 37,  128 => 40,  124 => 21,  120 => 38,  116 => 37,  104 => 43,  54 => 14,  117 => 28,  113 => 36,  109 => 20,  98 => 22,  68 => 15,  48 => 13,  107 => 34,  95 => 35,  78 => 17,  91 => 33,  70 => 18,  43 => 11,  20 => 1,  69 => 19,  63 => 18,  112 => 33,  106 => 21,  103 => 25,  100 => 28,  86 => 34,  74 => 13,  97 => 36,  89 => 28,  66 => 11,  55 => 8,  51 => 14,  40 => 14,  39 => 9,  34 => 6,  37 => 9,  72 => 37,  44 => 12,  73 => 24,  31 => 5,  83 => 15,  65 => 20,  59 => 9,  47 => 10,  41 => 10,  64 => 18,  60 => 18,  46 => 12,  28 => 2,  26 => 3,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 35,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 34,  123 => 33,  119 => 49,  114 => 30,  110 => 29,  108 => 44,  96 => 27,  92 => 25,  88 => 32,  85 => 24,  79 => 23,  75 => 29,  71 => 23,  61 => 13,  57 => 15,  53 => 10,  49 => 9,  42 => 11,  35 => 7,  32 => 5,  27 => 4,  23 => 3,  101 => 29,  94 => 39,  87 => 24,  81 => 27,  77 => 26,  67 => 21,  62 => 14,  56 => 21,  52 => 20,  50 => 14,  45 => 4,  38 => 3,  30 => 5,  24 => 2,  22 => 2,  36 => 5,  33 => 10,  29 => 4,  25 => 4,  21 => 1,  19 => 1,);
    }
}
