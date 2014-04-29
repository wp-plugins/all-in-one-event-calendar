<?php

/* setting/checkbox.twig */
class __TwigTemplate_ab8ff375c058e5b3ddf71337cc5f39b08710362b0cb927ab047fc87531354ec3 extends Twig_Template
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
        echo "<div class=\"ai1ec-col-sm-12\">
\t<div class=\"checkbox\">
\t\t<label for=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t\t\t";
        // line 4
        $context["__internal_c1f52fe2147077841653ec39350b7dcc6bb377e417048731ec7f79fcca487997"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 5
        echo "\t\t\t";
        echo $context["__internal_c1f52fe2147077841653ec39350b7dcc6bb377e417048731ec7f79fcca487997"]->getinput((isset($context["id"]) ? $context["id"] : null), (isset($context["id"]) ? $context["id"] : null), 1, "checkbox", (isset($context["attributes"]) ? $context["attributes"] : null));
        echo "

\t\t\t";
        // line 7
        echo $this->getAttribute((isset($context["renderer"]) ? $context["renderer"] : null), "label");
        echo "

\t\t</label>
\t</div>
\t";
        // line 11
        if ($this->getAttribute((isset($context["renderer"]) ? $context["renderer"] : null), "help", array(), "any", true, true)) {
            // line 12
            echo "\t\t<div class=\"ai1ec-help-block\">";
            echo $this->getAttribute((isset($context["renderer"]) ? $context["renderer"] : null), "help");
            echo "</div>
\t";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "setting/checkbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  133 => 24,  130 => 23,  127 => 22,  124 => 21,  97 => 17,  91 => 16,  67 => 10,  39 => 2,  96 => 35,  76 => 12,  70 => 22,  53 => 17,  82 => 30,  72 => 23,  68 => 25,  61 => 21,  57 => 16,  50 => 14,  42 => 11,  22 => 2,  118 => 23,  109 => 20,  98 => 19,  94 => 34,  90 => 32,  87 => 31,  83 => 14,  80 => 13,  74 => 13,  66 => 20,  63 => 9,  55 => 7,  44 => 12,  21 => 1,  35 => 7,  30 => 3,  51 => 6,  41 => 12,  27 => 4,  23 => 3,  20 => 1,  56 => 13,  46 => 14,  34 => 4,  31 => 5,  59 => 8,  48 => 5,  45 => 4,  43 => 7,  38 => 8,  29 => 5,  26 => 2,  71 => 11,  58 => 17,  52 => 11,  49 => 13,  47 => 12,  40 => 6,  36 => 10,  32 => 5,  28 => 5,  24 => 1,  19 => 1,);
    }
}
