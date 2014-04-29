<?php

/* agenda-buttons.twig */
class __TwigTemplate_5d6a4c3721e30bde93d60edc8380d57a3856559300e77878dd71e2abdd927e2b extends Twig_Template
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
        echo "<div class=\"btn-group\">
\t<a id=\"ai1ec-agenda-collapse-all\" class=\"btn btn-mini\">
\t\t<i class=\"icon-minus-sign\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Collapse All"), "html", null, true);
        echo "
\t</a>
\t<a id=\"ai1ec-agenda-expand-all\" class=\"btn btn-mini\">
\t\t<i class=\"icon-plus-sign\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Expand All"), "html", null, true);
        echo "
\t</a>
</div>
<div class=\"btn-group\">
\t<a id=\"ai1ec-print-button\" href=\"#\" class=\"btn\">
\t\t<i class=\"icon-print\"></i>
\t</a>
</div>";
    }

    public function getTemplateName()
    {
        return "agenda-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  59 => 15,  53 => 13,  46 => 7,  42 => 6,  29 => 6,  26 => 3,  22 => 2,  48 => 10,  44 => 8,  38 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
