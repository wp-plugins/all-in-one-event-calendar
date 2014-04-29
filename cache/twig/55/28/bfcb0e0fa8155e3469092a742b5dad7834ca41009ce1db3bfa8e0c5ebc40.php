<?php

/* setting/bootstrap_tabs.twig */
class __TwigTemplate_5528bfcb0e0fa8155e3469092a742b5dad7834ca41009ce1db3bfa8e0c5ebc40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("bootstrap_tabs.twig");

        $this->blocks = array(
            'extra_html' => array($this, 'block_extra_html'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_tabs.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_extra_html($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        $context["__internal_6b929f5c78c8a694ce9760b4e97bc3428bae0758bf9667c98b56db9f4010ca26"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 4
        echo "  <div class=\"ai1ec-text-right\">
    ";
        // line 5
        echo $context["__internal_6b929f5c78c8a694ce9760b4e97bc3428bae0758bf9667c98b56db9f4010ca26"]->getbutton($this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "id"), $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "id"), $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "value"), "submit", $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "args"));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "setting/bootstrap_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  149 => 58,  145 => 57,  139 => 54,  131 => 49,  126 => 47,  121 => 45,  117 => 44,  112 => 42,  108 => 41,  103 => 39,  99 => 38,  86 => 34,  78 => 32,  64 => 27,  60 => 26,  62 => 18,  137 => 43,  123 => 38,  114 => 35,  106 => 34,  100 => 33,  95 => 31,  77 => 28,  163 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  133 => 42,  130 => 23,  127 => 39,  124 => 21,  97 => 17,  91 => 30,  67 => 24,  39 => 9,  96 => 35,  76 => 12,  70 => 30,  53 => 14,  82 => 33,  72 => 23,  68 => 21,  61 => 21,  57 => 20,  50 => 13,  42 => 17,  22 => 2,  118 => 36,  109 => 20,  98 => 19,  94 => 36,  90 => 35,  87 => 31,  83 => 29,  80 => 14,  74 => 31,  66 => 11,  63 => 10,  55 => 8,  44 => 5,  21 => 1,  35 => 2,  30 => 5,  51 => 7,  41 => 4,  27 => 4,  23 => 3,  20 => 1,  56 => 13,  46 => 18,  34 => 4,  31 => 3,  59 => 9,  48 => 12,  45 => 17,  43 => 10,  38 => 3,  29 => 5,  26 => 7,  71 => 25,  58 => 17,  52 => 21,  49 => 18,  47 => 6,  40 => 6,  36 => 8,  32 => 6,  28 => 2,  24 => 4,  19 => 1,);
    }
}
