<?php

/* setting/enabled-views.twig */
class __TwigTemplate_1414340e18cb8d14d82ac7e5827d0ebc22d4c122f3f55377628ee439cef60657 extends Twig_Template
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
        echo "<div class=\"ai1ec-admin-view-settings ai1ec-form-group\">
\t<label class=\"ai1ec-control-label ai1ec-col-sm-5\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "</label>
\t<div class=\"ai1ec-col-sm-7\">
\t\t<table class=\"ai1ec-table ai1ec-table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th>";
        // line 8
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Enabled"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 9
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Default"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["views"]) ? $context["views"] : null));
        foreach ($context['_seq'] as $context["view"] => $context["args"]) {
            // line 14
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "longname"), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"ai1ec-control-table-column\">
\t\t\t\t\t\t\t<input class=\"checkbox ai1ec-toggle-view\" type=\"checkbox\"
\t\t\t\t\t\t\t\tname=\"view_";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : null), "html", null, true);
            echo "_enabled\" value=\"1\"
\t\t\t\t\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "enabled"), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"ai1ec-control-table-column\">
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-default-view\" type=\"radio\"
\t\t\t\t\t\t\t\tname=\"default_calendar_view\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : null), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "default"), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['view'], $context['args'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/enabled-views.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  72 => 26,  68 => 25,  61 => 21,  57 => 20,  50 => 16,  42 => 13,  22 => 2,  118 => 23,  109 => 21,  98 => 19,  94 => 18,  90 => 17,  87 => 16,  83 => 15,  80 => 14,  74 => 13,  66 => 11,  63 => 10,  55 => 8,  44 => 5,  21 => 1,  35 => 9,  30 => 3,  51 => 7,  41 => 4,  27 => 3,  23 => 2,  20 => 1,  56 => 13,  46 => 14,  34 => 4,  31 => 8,  59 => 9,  48 => 11,  45 => 10,  43 => 7,  38 => 3,  29 => 4,  26 => 2,  71 => 28,  58 => 17,  52 => 11,  49 => 13,  47 => 6,  40 => 6,  36 => 6,  32 => 5,  28 => 2,  24 => 2,  19 => 1,);
    }
}
