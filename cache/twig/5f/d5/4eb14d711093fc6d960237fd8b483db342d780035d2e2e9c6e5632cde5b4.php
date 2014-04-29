<?php

/* setting/input.twig */
class __TwigTemplate_5fd54eb14d711093fc6d960237fd8b483db342d780035d2e2e9c6e5632cde5b4 extends Twig_Template
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
        echo "<label class=\"ai1ec-control-label ai1ec-col-sm-5\" for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t";
        // line 2
        echo (isset($context["label"]) ? $context["label"] : null);
        echo "
</label>
";
        // line 4
        if ((array_key_exists("append", $context) || array_key_exists("licence_valid", $context))) {
            // line 5
            echo "\t<div class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? ((isset($context["group_class"]) ? $context["group_class"] : null)) : ("ai1ec-col-sm-3")), "html", null, true);
            echo "\">
\t\t<div class=\"ai1ec-input-group\">
";
        } else {
            // line 8
            echo "\t<div class=\"ai1ec-col-sm-7\">
";
        }
        // line 10
        echo "
\t";
        // line 11
        $context["__internal_1aa8de427138143336a5b5603b233e53b461ff50cdc5cc7bf01f694c7e7b4f8c"] = $this->env->loadTemplate("form-elements/input.twig");
        // line 12
        echo "\t";
        ob_start();
        // line 13
        echo "\t";
        echo $context["__internal_1aa8de427138143336a5b5603b233e53b461ff50cdc5cc7bf01f694c7e7b4f8c"]->getinput((isset($context["id"]) ? $context["id"] : null), (isset($context["id"]) ? $context["id"] : null), (isset($context["value"]) ? $context["value"] : null), "text", (isset($context["input_args"]) ? $context["input_args"] : null));
        echo "


\t";
        // line 16
        if (array_key_exists("append", $context)) {
            // line 17
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">";
            echo twig_escape_filter($this->env, (isset($context["append"]) ? $context["append"] : null), "html", null, true);
            echo "</span>
\t\t</div>
\t";
        } elseif (array_key_exists("licence_valid", $context)) {
            // line 20
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">
\t\t\t\t<i class=\"ai1ec-fa
\t\t\t\t\t";
            // line 22
            if ((isset($context["licence_valid"]) ? $context["licence_valid"] : null)) {
                // line 23
                echo "\t\t\t\t\t\tai1ec-fa-check ai1ec-text-success
\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\tai1ec-fa-times ai1ec-text-danger
\t\t\t\t\t";
            }
            // line 26
            echo "\">
\t\t\t\t</i>
\t\t\t</span>
\t\t</div>
\t";
        }
        // line 31
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 32
        echo "</div>

";
        // line 34
        if (array_key_exists("help", $context)) {
            // line 35
            echo "\t<div class=\"ai1ec-col-sm-12 ai1ec-help-block\">";
            echo (isset($context["help"]) ? $context["help"] : null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setting/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  76 => 25,  70 => 22,  53 => 17,  82 => 30,  72 => 23,  68 => 25,  61 => 21,  57 => 16,  50 => 13,  42 => 10,  22 => 2,  118 => 23,  109 => 21,  98 => 19,  94 => 34,  90 => 32,  87 => 31,  83 => 15,  80 => 26,  74 => 13,  66 => 20,  63 => 10,  55 => 8,  44 => 5,  21 => 1,  35 => 9,  30 => 3,  51 => 7,  41 => 12,  27 => 3,  23 => 3,  20 => 1,  56 => 13,  46 => 14,  34 => 4,  31 => 5,  59 => 17,  48 => 11,  45 => 11,  43 => 7,  38 => 8,  29 => 4,  26 => 2,  71 => 28,  58 => 17,  52 => 11,  49 => 13,  47 => 12,  40 => 6,  36 => 10,  32 => 5,  28 => 5,  24 => 2,  19 => 1,);
    }
}
