<?php

/* tags.twig */
class __TwigTemplate_3641cb5ba7ae689f85c6edb69ac8d77d4746270ac297a4aabebf1815a1d7784e extends Twig_Template
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
        echo "<li class=\"dropdown ai1ec-tag-filter
\t";
        // line 2
        if ((!twig_test_empty((isset($context["selected_cat_ids"]) ? $context["selected_cat_ids"] : null)))) {
            echo "active";
        }
        echo "\">
\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t<i class=\"icon-tags\"></i>
\t\t<span class=\"ai1ec-clear-filter ai1ec-tooltip-trigger\"
\t\t\tdata-href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["clear_filter"]) ? $context["clear_filter"] : null), "html", null, true);
        echo "\"
\t\t\t";
        // line 7
        echo (isset($context["data_type"]) ? $context["data_type"] : null);
        echo "
\t\t\ttitle=\"";
        // line 8
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Clear tag filter"), "html", null, true);
        echo "\">
\t\t\t<i class=\"icon-remove-sign\"></i>
\t\t</span>
\t\t";
        // line 11
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Tags"), "html", null, true);
        echo "
\t\t<span class=\"caret\"></span>
\t</a>
\t<div class=\"dropdown-menu\">
\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 16
            echo "\t\t\t<span data-term=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), "html", null, true);
            echo "\"
\t\t\t\t";
            // line 17
            if (twig_in_filter($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), (isset($context["selected_tag_ids"]) ? $context["selected_tag_ids"] : null))) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t\t";
            // line 18
            if ((!twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description")))) {
                // line 19
                echo "\t\t\t\t\ttitle=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description"), "html_attr");
                echo "\"
\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t<a class=\"ai1ec-load-view ai1ec-tag\"
\t\t\t\t\t";
            // line 22
            echo (isset($context["data_type"]) ? $context["data_type"] : null);
            echo "
\t\t\t\t\thref=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "href"), "html_attr");
            echo "\">
\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "name"), "html", null, true);
            echo "
\t\t\t\t</a>
\t\t\t</span>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t</div>
</li>
";
    }

    public function getTemplateName()
    {
        return "tags.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  86 => 24,  82 => 23,  78 => 22,  75 => 21,  69 => 19,  89 => 25,  85 => 24,  81 => 23,  76 => 22,  70 => 20,  68 => 19,  61 => 17,  56 => 16,  52 => 15,  45 => 11,  39 => 8,  305 => 117,  301 => 115,  297 => 114,  295 => 113,  287 => 111,  280 => 110,  278 => 109,  268 => 105,  262 => 102,  257 => 100,  252 => 97,  249 => 96,  243 => 93,  238 => 91,  233 => 88,  230 => 87,  227 => 86,  225 => 85,  219 => 82,  215 => 81,  209 => 79,  204 => 77,  200 => 76,  195 => 73,  193 => 72,  184 => 67,  180 => 65,  177 => 61,  175 => 60,  166 => 57,  159 => 52,  155 => 50,  149 => 47,  144 => 46,  141 => 45,  139 => 44,  135 => 42,  130 => 40,  127 => 39,  125 => 38,  121 => 37,  107 => 29,  103 => 28,  99 => 29,  95 => 26,  92 => 25,  87 => 24,  83 => 23,  79 => 21,  73 => 19,  71 => 18,  67 => 18,  63 => 16,  55 => 14,  51 => 13,  41 => 10,  36 => 9,  30 => 6,  25 => 4,  35 => 7,  31 => 6,  65 => 16,  59 => 15,  53 => 13,  46 => 7,  42 => 6,  29 => 6,  26 => 3,  22 => 2,  48 => 10,  44 => 11,  38 => 5,  27 => 5,  23 => 3,  19 => 1,);
    }
}
