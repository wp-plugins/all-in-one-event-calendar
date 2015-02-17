<?php

/* ai1ecv-select-venue.twig */
class __TwigTemplate_6bc867b118d27a8b0e303fbc9b3c0a4bf1ad9590bd15e7efb47928d649b191b7 extends Twig_Template
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
        $context["__internal_538b8f4e728f1d62b5130c7c12b477046c98b8053cf6d93c7b0e6e126db77830"] = $this->env->loadTemplate("form-elements/select.twig");
        // line 2
        echo "<tr>
    <td class=\"ai1ec-first\">
        <label for=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["select"]) ? $context["select"] : null), "id"), "html", null, true);
        echo "\">
            ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["select_venue_title"]) ? $context["select_venue_title"] : null), "html", null, true);
        echo "
        </label>
    </td>
    <td>
        ";
        // line 9
        echo $context["__internal_538b8f4e728f1d62b5130c7c12b477046c98b8053cf6d93c7b0e6e126db77830"]->getselect($this->getAttribute((isset($context["select"]) ? $context["select"] : null), "id"), $this->getAttribute((isset($context["select"]) ? $context["select"] : null), "id"), $this->getAttribute((isset($context["select"]) ? $context["select"] : null), "args"), $this->getAttribute((isset($context["select"]) ? $context["select"] : null), "options"));
        echo "
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "ai1ecv-select-venue.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  33 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
