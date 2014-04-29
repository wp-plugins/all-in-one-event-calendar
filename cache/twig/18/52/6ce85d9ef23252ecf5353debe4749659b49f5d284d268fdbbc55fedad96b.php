<?php

/* setting/tags-categories.twig */
class __TwigTemplate_18526ce85d9ef23252ecf5353debe4749659b49f5d284d268fdbbc55fedad96b extends Twig_Template
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
        echo "<div class=\"ai1ec-default-filters ai1ec-form-group\">
\t<label class=\"ai1ec-control-label ai1ec-col-sm-5\">
\t\t";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "
\t\t<div class=\"ai1ec-help-block\">
\t\t";
        // line 5
        echo (isset($context["help"]) ? $context["help"] : null);
        echo "
\t\t</div>
\t</label>
\t<div class=\"ai1ec-col-sm-7\">
\t\t<div class=\"ai1ec-row\">
\t\t\t";
        // line 10
        if (array_key_exists("categories", $context)) {
            // line 11
            echo "\t\t\t\t<div class=\"ai1ec-col-md-6\">
\t\t\t\t\t";
            // line 12
            echo (isset($context["categories"]) ? $context["categories"] : null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 15
        echo "\t\t\t";
        if (array_key_exists("tags", $context)) {
            // line 16
            echo "\t\t\t\t<div class=\"ai1ec-col-md-6\">
\t\t\t\t\t";
            // line 17
            echo (isset($context["tags"]) ? $context["tags"] : null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 20
        echo "\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/tags-categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  82 => 30,  72 => 26,  68 => 25,  61 => 21,  57 => 20,  50 => 16,  42 => 13,  22 => 2,  118 => 23,  109 => 21,  98 => 19,  94 => 18,  90 => 17,  87 => 16,  83 => 15,  80 => 14,  74 => 13,  66 => 11,  63 => 10,  55 => 8,  44 => 5,  21 => 1,  35 => 9,  30 => 3,  51 => 7,  41 => 12,  27 => 3,  23 => 3,  20 => 1,  56 => 13,  46 => 14,  34 => 4,  31 => 8,  59 => 20,  48 => 11,  45 => 10,  43 => 7,  38 => 11,  29 => 4,  26 => 2,  71 => 28,  58 => 17,  52 => 11,  49 => 13,  47 => 15,  40 => 6,  36 => 10,  32 => 5,  28 => 5,  24 => 2,  19 => 1,);
    }
}
