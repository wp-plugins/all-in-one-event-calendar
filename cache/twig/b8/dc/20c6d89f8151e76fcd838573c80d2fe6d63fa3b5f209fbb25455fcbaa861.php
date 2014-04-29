<?php

/* setting/page.twig */
class __TwigTemplate_b8dc20c6d89f8151e76fcd838573c80d2fe6d63fa3b5f209fbb25455fcbaa861 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base_page.twig");

        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_layout($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"post-box-container column-1-ai1ec left-side timely\">
\t";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "screen"), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "action"), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "object")), "html", null, true);
        echo "
\t";
        // line 5
        if (array_key_exists("submit", $context)) {
            // line 6
            echo "\t\t";
            $context["__internal_98063ded6fa9d20e80a54105c5f8f0d1b39e4a13421252f2bec8cf793f3835bb"] = $this->env->loadTemplate("form-elements/input.twig");
            // line 7
            echo "\t\t<div class=\"ai1ec-pull-right\">
\t\t\t";
            // line 8
            echo $context["__internal_98063ded6fa9d20e80a54105c5f8f0d1b39e4a13421252f2bec8cf793f3835bb"]->getbutton($this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "id"), $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "id"), $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "value"), "submit", $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "args"));
            echo "
\t\t</div>
\t";
        }
        // line 11
        echo "</div>
<div class=\"post-box-container column-2-ai1ec right-side timely\">
\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute((isset($context["support"]) ? $context["support"] : null), "screen"), $this->getAttribute((isset($context["support"]) ? $context["support"] : null), "action"), $this->getAttribute((isset($context["support"]) ? $context["support"] : null), "object")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  46 => 8,  34 => 4,  31 => 3,  59 => 16,  48 => 11,  45 => 10,  43 => 7,  38 => 5,  29 => 4,  26 => 3,  71 => 28,  58 => 17,  52 => 11,  49 => 13,  47 => 12,  40 => 6,  36 => 7,  32 => 5,  28 => 2,  24 => 2,  19 => 1,);
    }
}
