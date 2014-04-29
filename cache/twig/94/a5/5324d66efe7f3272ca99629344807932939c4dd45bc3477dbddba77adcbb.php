<?php

/* navigation.twig */
class __TwigTemplate_94a55324d66efe7f3272ca99629344807932939c4dd45bc3477dbddba77adcbb extends Twig_Template
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
        echo "<div class=\"clearfix\">
\t<h2 class=\"ai1ec-calendar-title\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>
\t<div class=\"ai1ec-title-buttons btn-toolbar pull-right\">
\t\t";
        // line 4
        echo (isset($context["before_pagination"]) ? $context["before_pagination"] : null);
        echo "
\t\t";
        // line 5
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "
\t\t";
        // line 6
        echo (isset($context["after_pagination"]) ? $context["after_pagination"] : null);
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 5,  65 => 16,  59 => 15,  53 => 13,  46 => 7,  42 => 6,  29 => 6,  26 => 3,  22 => 2,  48 => 10,  44 => 8,  38 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
