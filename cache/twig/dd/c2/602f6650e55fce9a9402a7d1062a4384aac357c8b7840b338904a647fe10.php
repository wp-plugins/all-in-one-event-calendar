<?php

/* views_dropdown.twig */
class __TwigTemplate_ddc2602f6650e55fce9a9402a7d1062a4384aac357c8b7840b338904a647fe10 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["available_views"]) ? $context["available_views"] : null)) > 1)) {
            // line 2
            echo "\t<li class=\"ai1ec-views-dropdown dropdown\">
\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t<img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->theme_img_url(((isset($context["current_view"]) ? $context["current_view"] : null) . "-view.png")), "html", null, true);
            echo "\"
\t\t\t\talt=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_names"]) ? $context["view_names"] : null), (isset($context["current_view"]) ? $context["current_view"] : null), array(), "array"), "html", null, true);
            echo "\" />
\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_names"]) ? $context["view_names"] : null), (isset($context["current_view"]) ? $context["current_view"] : null), array(), "array"), "html", null, true);
            echo "
\t\t\t<span class=\"caret\"></span>
\t\t</a>
\t\t<div class=\"dropdown-menu\">
\t\t\t";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["available_views"]) ? $context["available_views"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["args"]) {
                // line 11
                echo "\t\t\t\t<div class=\"";
                if (((isset($context["key"]) ? $context["key"] : null) == (isset($context["current_view"]) ? $context["current_view"] : null))) {
                    echo "active";
                }
                echo "\"
\t\t\t\t\tdata-action=\"";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t<a id=\"ai1ec-view-";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t";
                // line 14
                echo (isset($context["data_type"]) ? $context["data_type"] : null);
                echo "
\t\t\t\t\t\tclass=\"ai1ec-load-view ";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\thref=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["available_views"]) ? $context["available_views"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "href"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->theme_img_url(((isset($context["key"]) ? $context["key"] : null) . "-view.png")), "html", null, true);
                echo "\"
\t\t\t\t\t\t\talt=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["available_views"]) ? $context["available_views"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "desc"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["available_views"]) ? $context["available_views"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "desc"), "html", null, true);
                echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['args'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t</div>
\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "views_dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  33 => 6,  21 => 2,  96 => 28,  86 => 24,  82 => 23,  78 => 22,  75 => 18,  69 => 19,  89 => 23,  85 => 24,  81 => 23,  76 => 22,  70 => 20,  68 => 19,  61 => 17,  56 => 16,  52 => 15,  45 => 11,  39 => 8,  305 => 117,  301 => 115,  297 => 114,  295 => 113,  287 => 111,  280 => 110,  278 => 109,  268 => 105,  262 => 102,  257 => 100,  252 => 97,  249 => 96,  243 => 93,  238 => 91,  233 => 88,  230 => 87,  227 => 86,  225 => 85,  219 => 82,  215 => 81,  209 => 79,  204 => 77,  200 => 76,  195 => 73,  193 => 72,  184 => 67,  180 => 65,  177 => 61,  175 => 60,  166 => 57,  159 => 52,  155 => 50,  149 => 47,  144 => 46,  141 => 45,  139 => 44,  135 => 42,  130 => 40,  127 => 39,  125 => 38,  121 => 37,  107 => 29,  103 => 28,  99 => 29,  95 => 26,  92 => 25,  87 => 24,  83 => 23,  79 => 19,  73 => 19,  71 => 17,  67 => 16,  63 => 15,  55 => 13,  51 => 12,  41 => 10,  36 => 9,  30 => 6,  25 => 4,  35 => 7,  31 => 6,  65 => 16,  59 => 14,  53 => 13,  46 => 7,  42 => 6,  29 => 5,  26 => 3,  22 => 2,  48 => 10,  44 => 11,  38 => 5,  27 => 5,  23 => 3,  19 => 1,);
    }
}
