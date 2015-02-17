<?php

/* mailchimp/page.twig */
class __TwigTemplate_d5480ac48b71e5e426ccbc9f98aa1621a2bcee6d474c82231fd592e4b9b4c1d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base_page.twig");

        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_layout($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"post-box-container column-1-ai1ec timely\">
\t";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "screen"), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "action"), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "object")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "mailchimp/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  63 => 16,  112 => 33,  106 => 30,  103 => 29,  100 => 28,  86 => 22,  74 => 18,  97 => 53,  89 => 48,  66 => 34,  55 => 14,  51 => 13,  40 => 6,  39 => 8,  34 => 4,  37 => 8,  72 => 37,  44 => 7,  73 => 20,  31 => 3,  83 => 33,  65 => 20,  59 => 15,  47 => 12,  41 => 9,  64 => 21,  60 => 20,  46 => 12,  28 => 2,  26 => 6,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 25,  88 => 25,  85 => 24,  79 => 20,  75 => 20,  71 => 17,  61 => 13,  57 => 15,  53 => 10,  49 => 9,  42 => 9,  35 => 9,  32 => 6,  27 => 4,  23 => 2,  101 => 29,  94 => 39,  87 => 28,  81 => 21,  77 => 21,  67 => 18,  62 => 22,  56 => 11,  52 => 17,  50 => 16,  45 => 11,  38 => 7,  30 => 5,  24 => 3,  22 => 2,  36 => 7,  33 => 7,  29 => 4,  25 => 4,  21 => 2,  19 => 1,);
    }
}
