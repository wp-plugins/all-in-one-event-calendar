<?php

/* setting/twig_cache.twig */
class __TwigTemplate_281c29136b7dcb658210fac8a4bd81007f1c9b21b1d7579cdaa987e5fb6d4d4c extends Twig_Template
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
\t<div class=\"ai1ec-panel-body\">
\t\t<ul class=\"ai1ec-fa-ul\">
\t\t\t<li id=\"ai1ec-cache-scan-success\" class=\"ai1ec-text-success";
        // line 4
        if (((isset($context["cache_available"]) ? $context["cache_available"] : null) == false)) {
            echo " ai1ec-hide";
        }
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-check-circle\"></i>
\t\t\t\t";
        // line 6
        echo $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "okcache");
        echo "
\t\t\t</li>
\t\t\t<li id=\"ai1ec-cache-scan-danger\" class=\"ai1ec-text-danger";
        // line 8
        if (((isset($context["cache_available"]) ? $context["cache_available"] : null) == true)) {
            echo " ai1ec-hide";
        }
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-times-circle\"></i>
\t\t\t\t";
        // line 10
        echo $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "nocache");
        echo "
\t\t\t\t<button class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs\" id=\"ai1ec-button-refresh\"
\t\t\t\t\t\tdata-loading-text=\"&lt;i class=&quot;ai1ec-fa ai1ec-fa-fw ai1ec-fa-refresh ai1ec-fa-spin&quot;&gt;&lt;/i&gt; ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "rescan"), "html", null, true);
        echo "\">
\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-fw ai1ec-fa-refresh\"></i>
\t\t\t\t\t";
        // line 14
        echo $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "refresh");
        echo "
\t\t\t\t</button>
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/twig_cache.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 58,  145 => 57,  139 => 54,  131 => 49,  126 => 47,  121 => 45,  117 => 44,  112 => 42,  108 => 41,  103 => 39,  99 => 38,  86 => 34,  78 => 32,  64 => 27,  60 => 26,  62 => 18,  137 => 43,  123 => 38,  114 => 35,  106 => 34,  100 => 33,  95 => 31,  77 => 28,  163 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  133 => 42,  130 => 23,  127 => 39,  124 => 21,  97 => 17,  91 => 30,  67 => 24,  39 => 9,  96 => 35,  76 => 12,  70 => 30,  53 => 14,  82 => 33,  72 => 23,  68 => 21,  61 => 21,  57 => 20,  50 => 13,  42 => 17,  22 => 2,  118 => 36,  109 => 20,  98 => 19,  94 => 36,  90 => 35,  87 => 31,  83 => 29,  80 => 14,  74 => 31,  66 => 11,  63 => 10,  55 => 8,  44 => 5,  21 => 1,  35 => 2,  30 => 5,  51 => 7,  41 => 4,  27 => 4,  23 => 3,  20 => 1,  56 => 13,  46 => 18,  34 => 4,  31 => 6,  59 => 9,  48 => 12,  45 => 17,  43 => 10,  38 => 3,  29 => 5,  26 => 7,  71 => 25,  58 => 17,  52 => 21,  49 => 18,  47 => 6,  40 => 6,  36 => 8,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
