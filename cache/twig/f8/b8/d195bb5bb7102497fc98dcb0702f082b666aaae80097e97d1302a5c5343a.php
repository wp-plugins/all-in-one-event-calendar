<?php

/* setting/textarea.twig */
class __TwigTemplate_f8b8d195bb5bb7102497fc98dcb0702f082b666aaae80097e97d1302a5c5343a extends Twig_Template
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
<div class=\"ai1ec-col-sm-7\">
\t";
        // line 5
        if (array_key_exists("append", $context)) {
            // line 6
            echo "\t\t<div class=\"ai1ec-input-group\">
\t";
        }
        // line 8
        echo "
\t";
        // line 9
        $context["__internal_a3a10860ae22f81c8c8a7a2e50530e386b64765eca80bb657f2a3b732ddcda74"] = $this->env->loadTemplate("form-elements/textarea.twig");
        // line 10
        echo "\t";
        ob_start();
        // line 11
        echo "\t";
        echo $context["__internal_a3a10860ae22f81c8c8a7a2e50530e386b64765eca80bb657f2a3b732ddcda74"]->gettextarea((isset($context["id"]) ? $context["id"] : null), (isset($context["id"]) ? $context["id"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["input_args"]) ? $context["input_args"] : null));
        echo "

\t";
        // line 13
        if (array_key_exists("append", $context)) {
            // line 14
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">";
            echo twig_escape_filter($this->env, (isset($context["append"]) ? $context["append"] : null), "html", null, true);
            echo "</span>
\t\t</div>
\t";
        }
        // line 17
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 18
        echo "</div>

";
        // line 20
        if (array_key_exists("help", $context)) {
            // line 21
            echo "\t<div class=\"ai1ec-col-sm-12 ai1ec-help-block\">";
            echo (isset($context["help"]) ? $context["help"] : null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setting/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  137 => 43,  123 => 38,  114 => 35,  106 => 34,  100 => 33,  95 => 31,  77 => 28,  163 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  133 => 42,  130 => 23,  127 => 39,  124 => 21,  97 => 17,  91 => 30,  67 => 24,  39 => 9,  96 => 35,  76 => 12,  70 => 22,  53 => 19,  82 => 30,  72 => 23,  68 => 21,  61 => 21,  57 => 20,  50 => 13,  42 => 11,  22 => 2,  118 => 36,  109 => 20,  98 => 19,  94 => 34,  90 => 32,  87 => 31,  83 => 29,  80 => 13,  74 => 13,  66 => 20,  63 => 9,  55 => 7,  44 => 11,  21 => 1,  35 => 7,  30 => 5,  51 => 6,  41 => 10,  27 => 4,  23 => 3,  20 => 1,  56 => 13,  46 => 14,  34 => 4,  31 => 5,  59 => 17,  48 => 5,  45 => 17,  43 => 7,  38 => 8,  29 => 5,  26 => 7,  71 => 25,  58 => 17,  52 => 14,  49 => 18,  47 => 12,  40 => 6,  36 => 8,  32 => 6,  28 => 5,  24 => 2,  19 => 1,);
    }
}
