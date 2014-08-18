<?php

/* ai1ecv-event-single.twig */
class __TwigTemplate_04184c73b8c7ce7223d1dfe1e6f79fe17690e8b74969b07b58a06c2994a0d9e6 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["venues"]) ? $context["venues"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["venue"]) {
            // line 2
            echo "\t<a href='#ai1ec-venue-details' class='ai1ecv_venue' data-toggle=\"ai1ec-modal\" data-venue_id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : null), "name"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : null), "address"), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
<div class=\"ai1ec-modal ai1ec-fade timely\" id=\"ai1ec-venue-details\">
\t<div class=\"ai1ec-modal-dialog\">
\t\t<div class=\"ai1ec-modal-content\">
\t\t\t<div class=\"ai1ec-loading ai1ec-show\"></div>
\t\t\t<div class=\"ai1ec-ajax-placeholder\">
\t\t\t\t<!-- Form content is loaded here via AJAX. -->
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ai1ecv-event-single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  23 => 2,  19 => 1,);
    }
}
