<?php

/* form-elements/input.twig */
class __TwigTemplate_f33591d24d07f386c1027eeea2cbf1deffececd4acae7346e2c250942cfcff65 extends Twig_Template
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
        // line 19
        echo "
";
    }

    // line 1
    public function getinput($_id = null, $_name = "", $_value = "", $_type = "text", $_attributes = array())
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "name" => $_name,
            "value" => $_value,
            "type" => $_type,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            if (((isset($context["name"]) ? $context["name"] : null) == "")) {
                // line 3
                echo "\t\t";
                $context["id"] = (isset($context["name"]) ? $context["name"] : null);
                // line 4
                echo "\t";
            }
            // line 5
            echo "\t<input
\t\ttype=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\"
\t\tname=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
\t\tvalue=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
\t\tid=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"
\t\tclass=\"";
            // line 10
            if (!twig_in_filter((isset($context["type"]) ? $context["type"] : null), array(0 => "radio", 1 => "checkbox"))) {
                echo "ai1ec-form-control";
            }
            // line 11
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class"), "html", null, true);
            echo "\"
\t\t";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 13
                echo "\t\t\t";
                if (((isset($context["attribute"]) ? $context["attribute"] : null) != "class")) {
                    // line 14
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "\"
\t\t\t";
                }
                // line 16
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t/>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getbutton($_id = null, $_name = "", $_value = "", $_type = "text", $_attributes = array())
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "name" => $_name,
            "value" => $_value,
            "type" => $_type,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "\t";
            if (((isset($context["name"]) ? $context["name"] : null) == "")) {
                // line 22
                echo "\t\t";
                $context["id"] = (isset($context["name"]) ? $context["name"] : null);
                // line 23
                echo "\t";
            }
            // line 24
            echo "\t<button
\t\ttype=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\"
\t\tname=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
\t\tid=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"
\t\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 29
                echo "\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t>";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "</button>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "form-elements/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  130 => 23,  80 => 13,  76 => 12,  168 => 48,  159 => 50,  157 => 48,  153 => 46,  137 => 42,  133 => 24,  128 => 40,  124 => 21,  120 => 38,  116 => 37,  104 => 32,  54 => 14,  117 => 28,  113 => 36,  109 => 20,  98 => 22,  68 => 15,  48 => 5,  107 => 34,  95 => 31,  78 => 17,  91 => 16,  70 => 18,  43 => 8,  20 => 1,  69 => 19,  63 => 9,  112 => 33,  106 => 30,  103 => 25,  100 => 28,  86 => 27,  74 => 16,  97 => 17,  89 => 28,  66 => 17,  55 => 7,  51 => 6,  40 => 8,  39 => 2,  34 => 7,  37 => 8,  72 => 37,  44 => 18,  73 => 20,  31 => 4,  83 => 14,  65 => 20,  59 => 8,  47 => 12,  41 => 9,  64 => 18,  60 => 17,  46 => 12,  28 => 4,  26 => 4,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 51,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 22,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 25,  88 => 25,  85 => 24,  79 => 20,  75 => 16,  71 => 11,  61 => 13,  57 => 15,  53 => 10,  49 => 9,  42 => 3,  35 => 9,  32 => 6,  27 => 4,  23 => 3,  101 => 29,  94 => 39,  87 => 28,  81 => 24,  77 => 21,  67 => 10,  62 => 14,  56 => 11,  52 => 12,  50 => 12,  45 => 4,  38 => 8,  30 => 5,  24 => 1,  22 => 2,  36 => 5,  33 => 3,  29 => 4,  25 => 4,  21 => 2,  19 => 19,);
    }
}
