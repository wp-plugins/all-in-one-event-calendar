<?php

/* eventpromote-places.twig */
class __TwigTemplate_99e556fbea4b80370910fb8d385cd47c06aa4008bc274aa6a7fc5e79f785b1dd extends Twig_Template
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
        echo "<label>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "title"), "html", null, true);
        echo "</label><br><br>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 3
            echo "\t";
            $context["place_id"] = (($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "class") . "-") . $this->getAttribute((isset($context["place"]) ? $context["place"] : null), "id"));
            // line 4
            echo "\t<input type=\"checkbox\" name=\"eventpromote_place[";
            echo twig_escape_filter($this->env, (isset($context["place_id"]) ? $context["place_id"] : null), "html", null, true);
            echo "]\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["place_id"]) ? $context["place_id"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "selected")) {
                echo " checked";
            }
            echo "><label for=\"";
            echo twig_escape_filter($this->env, (isset($context["place_id"]) ? $context["place_id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : null), "title"), "html", null, true);
            echo "</label><br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "eventpromote-places.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  70 => 13,  43 => 9,  20 => 1,  69 => 19,  63 => 16,  112 => 33,  106 => 30,  103 => 29,  100 => 28,  86 => 22,  74 => 18,  97 => 21,  89 => 48,  66 => 34,  55 => 14,  51 => 8,  40 => 5,  39 => 5,  34 => 4,  37 => 8,  72 => 37,  44 => 7,  73 => 20,  31 => 4,  83 => 33,  65 => 20,  59 => 10,  47 => 12,  41 => 8,  64 => 21,  60 => 20,  46 => 12,  28 => 3,  26 => 6,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 25,  88 => 25,  85 => 24,  79 => 20,  75 => 16,  71 => 17,  61 => 13,  57 => 15,  53 => 10,  49 => 9,  42 => 9,  35 => 9,  32 => 5,  27 => 3,  23 => 3,  101 => 29,  94 => 39,  87 => 28,  81 => 17,  77 => 21,  67 => 12,  62 => 22,  56 => 9,  52 => 8,  50 => 7,  45 => 6,  38 => 4,  30 => 5,  24 => 2,  22 => 2,  36 => 6,  33 => 4,  29 => 4,  25 => 4,  21 => 2,  19 => 1,);
    }
}
