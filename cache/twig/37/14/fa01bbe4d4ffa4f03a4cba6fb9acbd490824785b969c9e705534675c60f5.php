<?php

/* categories-select.twig */
class __TwigTemplate_3714fa01bbe4d4ffa4f03a4cba6fb9acbd490824785b969c9e705534675c60f5 extends Twig_Template
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
        echo "<div class=\"ai1ec-s2-with-icon\" data-ai1ec-icon=\"";
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html_attr");
        echo "\">
\t<select class=\"ai1ec-categories-selector ai1ec-select2-multiselect-selector\"
\t\tid=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"
\t\tplaceholder=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : null), "html_attr");
        echo "\"
\t\tdata-placeholder=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : null), "html_attr");
        echo "\"
\t\tmultiple=\"multiple\">
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 8
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), "html", null, true);
            echo "\"
\t\t\t\t";
            // line 9
            if (twig_in_filter($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), (isset($context["selected_cat_ids"]) ? $context["selected_cat_ids"] : null))) {
                // line 10
                echo "\t\t\t\t\tselected=\"selected\"
\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t";
            if ((!twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description")))) {
                // line 13
                echo "\t\t\t\t\tdata-description=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description"), "html_attr");
                echo "\"
\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t";
            if ((!twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color")))) {
                // line 16
                echo "\t\t\t\t\tdata-color=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color"), "html_attr");
                echo "\"
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t>
\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "name"), "html", null, true);
            echo "
\t\t\t</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</select>
\t<i class=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html_attr");
        echo "\"></i>
</div>
";
    }

    public function getTemplateName()
    {
        return "categories-select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  64 => 15,  55 => 12,  88 => 23,  79 => 23,  75 => 22,  68 => 20,  57 => 16,  118 => 43,  96 => 33,  85 => 22,  69 => 20,  60 => 16,  58 => 13,  49 => 9,  36 => 10,  204 => 84,  196 => 81,  177 => 76,  171 => 73,  165 => 69,  163 => 63,  158 => 61,  154 => 60,  150 => 59,  146 => 58,  142 => 57,  136 => 56,  130 => 54,  105 => 36,  101 => 34,  93 => 42,  87 => 29,  81 => 24,  74 => 32,  67 => 16,  65 => 19,  59 => 18,  53 => 14,  44 => 8,  25 => 3,  21 => 2,  77 => 34,  70 => 26,  62 => 21,  54 => 16,  50 => 15,  29 => 6,  40 => 7,  38 => 5,  27 => 7,  218 => 120,  216 => 118,  208 => 116,  201 => 115,  199 => 82,  188 => 109,  179 => 102,  173 => 98,  167 => 95,  162 => 92,  160 => 91,  155 => 89,  145 => 82,  141 => 81,  134 => 77,  126 => 71,  124 => 66,  121 => 65,  119 => 64,  113 => 53,  109 => 57,  104 => 56,  100 => 55,  92 => 32,  84 => 45,  76 => 19,  72 => 21,  63 => 17,  56 => 17,  51 => 10,  30 => 7,  46 => 15,  32 => 8,  26 => 6,  23 => 2,  48 => 16,  33 => 7,  28 => 5,  24 => 3,  41 => 11,  39 => 10,  37 => 8,  35 => 5,  31 => 4,  19 => 1,);
    }
}
