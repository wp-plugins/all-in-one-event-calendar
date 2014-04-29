<?php

/* datepicker_link.twig */
class __TwigTemplate_14b33cdfb74dcddd288dc4f674be44f9332303e665eaaddeafa0e539e1479799 extends Twig_Template
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
        echo "<a
\tclass=\"ai1ec-minical-trigger btn\"
\t";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 4
            echo "\t\t";
            echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t";
        echo (isset($context["data_type"]) ? $context["data_type"] : null);
        echo "
\t>
\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["icon_url"]) ? $context["icon_url"] : null), "html_attr");
        echo "\" class=\"ai1ec-icon-datepicker\"
    alt=\"";
        // line 9
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Choose a date using calendar"), "html", null, true);
        echo "\" />
</a>
";
    }

    public function getTemplateName()
    {
        return "datepicker_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  44 => 8,  38 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
