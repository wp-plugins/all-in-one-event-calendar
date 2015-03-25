<?php

/* eventpromote-front-end-submission-before-form-fields.twig */
class __TwigTemplate_783e57d2212e2837aee7813ecc844f345947f68d3edb57d31388f926a75264db extends Twig_Template
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
        echo "<div class=\"ai1ec-form-group\">
\t<div class=\"ai1ec-col-sm-12\">
\t\t<br> <select
\t\t\tclass=\"ai1ec-eventpromote-product-selector ai1ec-form-control ai1ec-fe-import-field\"
\t\t\tid=\"ai1ec-eventpromote-product-selector\"
\t\t\tname=\"ai1ec-eventpromote-product-selector\"
\t\t\tplaceholder=\"";
        // line 7
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Products"), "html_attr");
        echo "\"
\t\t\tdata-placeholder=\"";
        // line 8
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Products"), "html_attr");
        echo "\"
\t\t\trequired=\"true\" >
\t\t\t<option value=\"\" data-price=\"\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "choose_product"), "html", null, true);
        echo "</option>
\t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "get_id", array(), "method"), "html", null, true);
            echo "\"
\t\t\t\t\tdata-price=\"";
            // line 13
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "get_price", array(), "method") * 100), "html", null, true);
            echo "\"
\t\t\t\t\tdata-title=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "get_title", array(), "method"), "html");
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "get_title", array(), "method") . " ") . sprintf("\$%.2f", $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "get_price", array(), "method"))), "html", null, true);
            // line 16
            echo "
\t\t\t\t\t</option> 
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t</select> <br>
\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 21
            echo "\t\t<div
\t\t\tid=\"ai1ec-eventpromote-product-description-";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "get_id", array(), "method"), "html", null, true);
            echo "\"
\t\t\tclass=\"ai1ec-eventpromote-description\" style=\"display: none;\">";
            // line 23
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "get_description", array(), "method");
            // line 24
            echo "</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t</div>
\t<input type=\"hidden\" value=\"\" name=\"stripe_price\" id=\"stripe_price\" >
</div>";
    }

    public function getTemplateName()
    {
        return "eventpromote-front-end-submission-before-form-fields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  79 => 23,  75 => 22,  68 => 20,  57 => 16,  118 => 43,  96 => 33,  85 => 24,  69 => 20,  60 => 16,  58 => 15,  49 => 13,  36 => 10,  204 => 84,  196 => 81,  177 => 76,  171 => 73,  165 => 69,  163 => 63,  158 => 61,  154 => 60,  150 => 59,  146 => 58,  142 => 57,  136 => 56,  130 => 54,  105 => 36,  101 => 34,  93 => 42,  87 => 29,  81 => 24,  74 => 32,  67 => 27,  65 => 19,  59 => 18,  53 => 14,  44 => 12,  25 => 4,  21 => 2,  77 => 34,  70 => 26,  62 => 21,  54 => 16,  50 => 15,  29 => 6,  40 => 11,  38 => 5,  27 => 7,  218 => 120,  216 => 118,  208 => 116,  201 => 115,  199 => 82,  188 => 109,  179 => 102,  173 => 98,  167 => 95,  162 => 92,  160 => 91,  155 => 89,  145 => 82,  141 => 81,  134 => 77,  126 => 71,  124 => 66,  121 => 65,  119 => 64,  113 => 53,  109 => 57,  104 => 56,  100 => 55,  92 => 32,  84 => 45,  76 => 22,  72 => 21,  63 => 17,  56 => 17,  51 => 25,  30 => 7,  46 => 15,  32 => 8,  26 => 6,  23 => 2,  48 => 16,  33 => 7,  28 => 5,  24 => 3,  41 => 11,  39 => 10,  37 => 8,  35 => 9,  31 => 8,  19 => 1,);
    }
}
