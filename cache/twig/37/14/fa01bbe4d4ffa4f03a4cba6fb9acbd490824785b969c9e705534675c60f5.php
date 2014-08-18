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
        echo "<select class=\"ai1ec-categories-selector ai1ec-select2-multiselect-selector\"
\tid=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"
\tplaceholder=\"";
        // line 3
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Categories"), "html_attr");
        echo "\"
\tdata-placeholder=\"";
        // line 4
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Categories"), "html_attr");
        echo "\"
\tmultiple=\"multiple\">
\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 7
            echo "\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), "html", null, true);
            echo "\"
\t\t\t";
            // line 8
            if (twig_in_filter($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), (isset($context["selected_cat_ids"]) ? $context["selected_cat_ids"] : null))) {
                // line 9
                echo "      \tselected=\"selected\"
      ";
            }
            // line 11
            echo "\t\t\t";
            if ((!twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description")))) {
                // line 12
                echo "\t\t\t\tdata-description=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description"), "html_attr");
                echo "\"
\t\t\t";
            }
            // line 14
            echo "\t\t\t";
            if ((!twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color")))) {
                // line 15
                echo "\t\t\t\tdata-color=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color"), "html_attr");
                echo "\"
\t\t\t";
            }
            // line 17
            echo "\t\t\t>
\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "name"), "html", null, true);
            echo "
\t\t</option>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</select>
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
        return array (  82 => 21,  73 => 18,  70 => 17,  64 => 15,  55 => 12,  52 => 11,  48 => 9,  46 => 8,  41 => 7,  37 => 6,  32 => 4,  22 => 2,  265 => 123,  259 => 120,  252 => 117,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 108,  229 => 107,  227 => 106,  219 => 100,  213 => 96,  205 => 93,  201 => 91,  199 => 90,  196 => 89,  190 => 86,  186 => 84,  184 => 83,  181 => 82,  173 => 79,  169 => 77,  167 => 76,  162 => 73,  160 => 72,  157 => 71,  151 => 69,  149 => 68,  142 => 63,  135 => 59,  130 => 56,  128 => 55,  125 => 54,  117 => 49,  113 => 48,  108 => 45,  106 => 44,  103 => 43,  94 => 39,  89 => 36,  87 => 35,  84 => 34,  76 => 30,  72 => 27,  67 => 24,  65 => 23,  61 => 14,  56 => 19,  53 => 18,  51 => 17,  40 => 9,  34 => 5,  28 => 3,  26 => 2,  36 => 4,  23 => 2,  19 => 1,);
    }
}
