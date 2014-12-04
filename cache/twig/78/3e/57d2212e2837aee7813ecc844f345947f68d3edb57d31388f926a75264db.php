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
        return array (  88 => 26,  81 => 24,  79 => 23,  75 => 22,  68 => 20,  57 => 16,  49 => 13,  44 => 12,  31 => 8,  27 => 7,  265 => 123,  259 => 120,  252 => 117,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 108,  229 => 107,  227 => 106,  219 => 100,  213 => 96,  205 => 93,  201 => 91,  199 => 90,  196 => 89,  190 => 86,  186 => 84,  184 => 83,  181 => 82,  173 => 79,  169 => 77,  167 => 76,  162 => 73,  160 => 72,  157 => 71,  151 => 69,  149 => 68,  142 => 63,  135 => 59,  130 => 56,  128 => 55,  125 => 54,  117 => 49,  113 => 48,  108 => 45,  106 => 44,  103 => 43,  94 => 39,  89 => 36,  87 => 35,  84 => 34,  76 => 30,  72 => 21,  67 => 24,  65 => 19,  61 => 21,  56 => 19,  53 => 14,  51 => 17,  40 => 11,  34 => 5,  28 => 3,  26 => 2,  36 => 10,  23 => 2,  19 => 1,);
    }
}
