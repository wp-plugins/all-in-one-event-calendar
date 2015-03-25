<?php

/* setting/phrase-override-form.twig */
class __TwigTemplate_42cc2d62917ac453dc37e65f851ce0806b738eadde254b687baf0cafa6c69f25 extends Twig_Template
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
\t";
        // line 2
        echo $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "help");
        echo "
</div>

<input type=\"hidden\" name=\"phrase_override_values\" value=\"1\">
<div class=\"ai1ec-col-sm-6\">
\t<label for=\"ai1ecpo_new_phrase_original\"
\t\tclass=\"ai1ec-control-label\">
\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "original"), "label"), "html", null, true);
        echo "
\t</label>
\t<input type=\"text\" name=\"ai1ecpo_new_phrase_original\"
\t\tid=\"ai1ecpo_new_phrase_original\"
\t\tclass=\"ai1ec-form-control\">
</div>
<div class=\"ai1ec-col-sm-6\">
\t<label for=\"ai1ecpo_new_phrase_modified\"
\t\tclass=\"ai1ec-control-label\">
\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "modified"), "label"), "html", null, true);
        echo "
\t</label>
\t<input type=\"text\" name=\"ai1ecpo_new_phrase_modified\"
\t\tid=\"ai1ecpo_new_phrase_modified\"
\t\tclass=\"ai1ec-form-control\">
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/phrase-override-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  70 => 13,  43 => 9,  20 => 1,  69 => 19,  63 => 16,  112 => 33,  106 => 30,  103 => 29,  100 => 28,  86 => 22,  74 => 18,  97 => 21,  89 => 48,  66 => 34,  55 => 14,  51 => 8,  40 => 5,  39 => 5,  34 => 4,  37 => 8,  72 => 37,  44 => 18,  73 => 20,  31 => 4,  83 => 33,  65 => 20,  59 => 10,  47 => 12,  41 => 8,  64 => 21,  60 => 20,  46 => 12,  28 => 3,  26 => 6,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 25,  88 => 25,  85 => 24,  79 => 20,  75 => 16,  71 => 17,  61 => 13,  57 => 15,  53 => 10,  49 => 9,  42 => 9,  35 => 9,  32 => 9,  27 => 3,  23 => 3,  101 => 29,  94 => 39,  87 => 28,  81 => 17,  77 => 21,  67 => 12,  62 => 22,  56 => 9,  52 => 8,  50 => 7,  45 => 6,  38 => 4,  30 => 5,  24 => 2,  22 => 2,  36 => 6,  33 => 4,  29 => 4,  25 => 4,  21 => 2,  19 => 1,);
    }
}
