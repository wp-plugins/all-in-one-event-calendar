<?php

/* setting/select.twig */
class __TwigTemplate_edbe11913727712f3aeca5bcd9308202e49470f0f1d80fdeeab130a9c38ae967 extends Twig_Template
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
        echo "<label class=\"ai1ec-control-label ";
        if ((!(isset($context["stacked"]) ? $context["stacked"] : null))) {
            echo "ai1ec-col-sm-5";
        }
        echo "\"
  for=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t";
        // line 3
        echo (isset($context["label"]) ? $context["label"] : null);
        echo "
</label>
<div ";
        // line 5
        if ((!(isset($context["stacked"]) ? $context["stacked"] : null))) {
            echo "class=\"ai1ec-col-sm-7\"";
        }
        echo ">
  ";
        // line 6
        $context["__internal_fbbb6d680efffc3933b46806cc86af4b25d8b4e4b997aa91d2d56e1e2e644585"] = $this->env->loadTemplate("form-elements/select.twig");
        // line 7
        echo "  ";
        echo $context["__internal_fbbb6d680efffc3933b46806cc86af4b25d8b4e4b997aa91d2d56e1e2e644585"]->getselect((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["options"]) ? $context["options"] : null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  30 => 3,  51 => 8,  41 => 6,  27 => 3,  23 => 2,  20 => 1,  56 => 13,  46 => 8,  34 => 4,  31 => 3,  59 => 16,  48 => 11,  45 => 10,  43 => 7,  38 => 5,  29 => 4,  26 => 2,  71 => 28,  58 => 17,  52 => 11,  49 => 13,  47 => 12,  40 => 6,  36 => 6,  32 => 5,  28 => 2,  24 => 2,  19 => 1,);
    }
}
