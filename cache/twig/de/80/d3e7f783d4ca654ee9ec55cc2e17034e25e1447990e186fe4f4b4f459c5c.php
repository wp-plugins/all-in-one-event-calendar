<?php

/* ai1ecv-save-venue.twig */
class __TwigTemplate_de80d3e7f783d4ca654ee9ec55cc2e17034e25e1447990e186fe4f4b4f459c5c extends Twig_Template
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
        $context["__internal_6330d1ee425c97eda730f2ae711e19f321a8e07863f21ad9c42ad4bd60ace397"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 2
        echo "<tr>
    <td colspan=\"2\">
        <label for=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["checkbox"]) ? $context["checkbox"] : null), "id"), "html", null, true);
        echo "\">           
            ";
        // line 5
        echo $context["__internal_6330d1ee425c97eda730f2ae711e19f321a8e07863f21ad9c42ad4bd60ace397"]->getinput($this->getAttribute((isset($context["checkbox"]) ? $context["checkbox"] : null), "id"), $this->getAttribute((isset($context["checkbox"]) ? $context["checkbox"] : null), "id"), 1, "checkbox", $this->getAttribute((isset($context["checkbox"]) ? $context["checkbox"] : null), "attributes"));
        echo "            
            ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["save_venue_title"]) ? $context["save_venue_title"] : null), "html", null, true);
        echo "
        </label>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "ai1ecv-save-venue.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
