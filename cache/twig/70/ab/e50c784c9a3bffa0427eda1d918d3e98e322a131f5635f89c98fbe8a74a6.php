<?php

/* pagination.twig */
class __TwigTemplate_70abe50c784c9a3bffa0427eda1d918d3e98e322a131f5635f89c98fbe8a74a6 extends Twig_Template
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
        echo "<div class=\"ai1ec-pagination btn-group\">
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            echo "\t\t";
            if (twig_test_iterable((isset($context["link"]) ? $context["link"] : null))) {
                // line 4
                echo "\t\t\t<a class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "class"), "html", null, true);
                echo " ai1ec-load-view btn ";
                if ((!$this->getAttribute((isset($context["link"]) ? $context["link"] : null), "enabled"))) {
                    echo "disabled";
                }
                echo "\"
\t\t\t\t";
                // line 5
                echo (isset($context["data_type"]) ? $context["data_type"] : null);
                echo "
\t\t\t\thref=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "href"), "html_attr");
                echo "\">
\t\t\t\t";
                // line 7
                echo strtr($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "text"), array("ai1ec-fa ai1ec-fa" => "icon", "angle-double" => "double-angle"));
                // line 10
                echo "
\t\t\t</a>
\t\t";
            } else {
                // line 13
                echo "\t\t\t";
                echo (isset($context["link"]) ? $context["link"] : null);
                echo "
\t\t";
            }
            // line 15
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  59 => 15,  53 => 13,  46 => 7,  42 => 6,  29 => 4,  26 => 3,  22 => 2,  48 => 10,  44 => 8,  38 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
