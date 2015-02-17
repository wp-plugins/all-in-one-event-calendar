<?php

/* event-single-full.twig */
class __TwigTemplate_3edf0a48ad93b6410b5057f1a865487cb6829bbba056c1f3973021023575a51d extends Twig_Template
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
        echo "<div class=\"timely-saas-poster ai1ec-hidden-xs\"></div>
<div class=\"ai1ec-container\">
\t<div id=\"content\">
\t\t<div id=\"main\" role=\"main\">
\t\t\t<article class=\"ai1ec-clearfix\" role=\"article\"
\t\t\t\titemscope itemtype=\"http://schema.org/BlogPosting\">
\t\t\t\t<button class=\"ai1ec-calendar-link\">
\t\t\t\t\t&lt;&nbsp;&nbsp;Back to Calendar
\t\t\t\t</button>
\t\t\t\t<section class=\"ai1ec-clearfix\" itemprop=\"articleBody\">
\t\t\t\t\t";
        // line 11
        echo (isset($context["event_details"]) ? $context["event_details"] : null);
        echo "
\t\t\t\t</section>";
        // line 13
        echo "\t\t\t</article>";
        // line 14
        echo "\t\t</div>";
        // line 15
        echo "\t</div>";
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "event-single-full.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 16,  39 => 15,  37 => 14,  35 => 13,  31 => 11,  19 => 1,);
    }
}
