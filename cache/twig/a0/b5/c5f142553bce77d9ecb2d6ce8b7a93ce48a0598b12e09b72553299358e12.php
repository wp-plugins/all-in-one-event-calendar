<?php

/* upgrade/page.twig */
class __TwigTemplate_a0b5c5f142553bce77d9ecb2d6ce8b7a93ce48a0598b12e09b72553299358e12 extends Twig_Template
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
        echo "<div class=\"timely\">
\t";
        // line 2
        if ((!twig_test_iterable((isset($context["products"]) ? $context["products"] : null)))) {
            // line 3
            echo "\t\t";
            $this->env->loadTemplate("upgrade/no_upgrade_option.twig")->display($context);
            // line 4
            echo "\t";
        } else {
            // line 5
            echo "\t\t";
            $this->env->loadTemplate("upgrade/products.twig")->display($context);
            // line 6
            echo "\t\t";
            $this->env->loadTemplate("upgrade/paymentbox.twig")->display($context);
            // line 7
            echo "\t\t";
            $this->env->loadTemplate("upgrade/waitbox.twig")->display($context);
            // line 8
            echo "\t";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "upgrade/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 11,  37 => 8,  72 => 25,  44 => 11,  73 => 18,  31 => 5,  83 => 33,  65 => 20,  59 => 17,  47 => 15,  41 => 10,  64 => 21,  60 => 20,  46 => 12,  28 => 4,  26 => 6,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 26,  88 => 25,  85 => 24,  79 => 21,  75 => 20,  71 => 27,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  42 => 9,  35 => 9,  32 => 6,  27 => 4,  23 => 3,  101 => 29,  94 => 39,  87 => 37,  81 => 22,  77 => 30,  67 => 18,  62 => 22,  56 => 19,  52 => 17,  50 => 16,  45 => 11,  38 => 7,  30 => 5,  24 => 3,  22 => 2,  36 => 7,  33 => 6,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
