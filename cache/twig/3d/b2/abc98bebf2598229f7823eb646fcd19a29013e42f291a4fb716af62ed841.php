<?php

/* setting/phrase-override-list.twig */
class __TwigTemplate_3db2abc98bebf2598229f7823eb646fcd19a29013e42f291a4fb716af62ed841 extends Twig_Template
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
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["translated"]) ? $context["translated"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["domain"] => $context["phrases"]) {
            if ((isset($context["phrases"]) ? $context["phrases"] : null)) {
                // line 3
                echo "\t\t";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    // line 4
                    echo "\t\t\t<h2>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "table_title"), "html", null, true);
                    echo "</h2>
\t\t";
                }
                // line 6
                echo "\t\t<table class=\"ai1ec-table ai1ec-table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "column_original"), "html", null, true);
                echo "</th>
\t\t\t\t\t<th>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "column_modified"), "html", null, true);
                echo "</th>
\t\t\t\t\t<th><i class=\"ai1ec-fa ai1ec-fa-gear ai1ec-fa-lg ai1ec-fa-fw\"></i></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
                // line 15
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["phrases"]) ? $context["phrases"] : null));
                foreach ($context['_seq'] as $context["original"] => $context["modified"]) {
                    // line 16
                    echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                    // line 17
                    echo twig_escape_filter($this->env, (isset($context["original"]) ? $context["original"] : null), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 18
                    echo twig_escape_filter($this->env, (isset($context["modified"]) ? $context["modified"] : null), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"ai1ec-btn-group\">
\t\t\t\t\t\t\t\t<button type=\"submit\"
\t\t\t\t\t\t\t\t        name=\"phrase_override_values\"
\t\t\t\t\t\t\t\t        value=\"remove-";
                    // line 23
                    echo twig_escape_filter($this->env, (isset($context["original"]) ? $context["original"] : null), "html_attr");
                    echo "\"
\t\t\t\t\t\t\t\t        class=\"ai1ec-btn ai1ec-btn-sm ai1ec-btn-default ai1ec-text-danger\">
\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-times ai1ec-fa-lg ai1ec-fa-fw\"></i> ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "action_remove"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['original'], $context['modified'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "\t\t\t</tbody>
\t\t</table>
\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['domain'], $context['phrases'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "setting/phrase-override-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  95 => 31,  78 => 23,  91 => 20,  70 => 18,  43 => 9,  20 => 1,  69 => 19,  63 => 16,  112 => 33,  106 => 30,  103 => 29,  100 => 28,  86 => 22,  74 => 18,  97 => 21,  89 => 48,  66 => 17,  55 => 14,  51 => 10,  40 => 5,  39 => 5,  34 => 4,  37 => 8,  72 => 37,  44 => 18,  73 => 20,  31 => 4,  83 => 25,  65 => 20,  59 => 15,  47 => 9,  41 => 8,  64 => 21,  60 => 20,  46 => 12,  28 => 3,  26 => 6,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 25,  88 => 25,  85 => 24,  79 => 20,  75 => 16,  71 => 17,  61 => 13,  57 => 15,  53 => 10,  49 => 9,  42 => 6,  35 => 9,  32 => 9,  27 => 3,  23 => 3,  101 => 29,  94 => 39,  87 => 28,  81 => 17,  77 => 21,  67 => 12,  62 => 22,  56 => 9,  52 => 8,  50 => 7,  45 => 6,  38 => 4,  30 => 5,  24 => 2,  22 => 2,  36 => 4,  33 => 3,  29 => 4,  25 => 4,  21 => 2,  19 => 1,);
    }
}
