<?php

/* views_dropdown.twig */
class __TwigTemplate_c1804f545c5b33b8114cc21fe6cb5c59952fa8c7d680d237c3ca4d3f63b96c1c extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["available_views"]) ? $context["available_views"] : null)) > 1)) {
            // line 2
            echo "\t<div class=\"ai1ec-views-dropdown ai1ec-btn-group ai1ec-pull-right\">
\t\t<a class=\"ai1ec-btn ai1ec-btn-sm ai1ec-btn-default ai1ec-dropdown-toggle\"
\t\t\tdata-toggle=\"ai1ec-dropdown\">
\t\t\t<i class=\"ai1ec-icon-";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["current_view"]) ? $context["current_view"] : null), "html", null, true);
            echo " ai1ec-view-icon ai1ec-tooltip-trigger\"
\t\t\t\ttitle=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_names"]) ? $context["view_names"] : null), (isset($context["current_view"]) ? $context["current_view"] : null), array(), "array"), "html_attr");
            echo "\"
\t\t\t\tdata-placement=\"left\"></i>
\t\t\t<span class=\"ai1ec-hidden-xs ai1ec-hidden-sm\">
\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_names"]) ? $context["view_names"] : null), (isset($context["current_view"]) ? $context["current_view"] : null), array(), "array"), "html", null, true);
            echo "
\t\t\t</span>
\t\t\t<span class=\"ai1ec-caret\"></span>
\t\t</a>
\t\t<div class=\"ai1ec-dropdown-menu\">
\t\t\t";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["available_views"]) ? $context["available_views"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["args"]) {
                // line 15
                echo "\t\t\t\t<div class=\"";
                if (((isset($context["key"]) ? $context["key"] : null) == (isset($context["current_view"]) ? $context["current_view"] : null))) {
                    echo "ai1ec-active";
                }
                echo "\"
\t\t\t\t\tdata-action=\"";
                // line 16
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t<a id=\"ai1ec-view-";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t";
                // line 18
                echo (isset($context["data_type"]) ? $context["data_type"] : null);
                echo "
\t\t\t\t\t\tclass=\"ai1ec-load-view ";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\thref=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["available_views"]) ? $context["available_views"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "href"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"ai1ec-icon-";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo " ai1ec-view-icon ai1ec-tooltip-trigger\"
\t\t\t\t\t\t\ttitle=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_names"]) ? $context["view_names"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "html_attr");
                echo "\"
\t\t\t\t\t\t\tdata-placement=\"left\"></i>
\t\t\t\t\t\t<span class=\"ai1ec-hidden-xs ai1ec-hidden-sm\">
\t\t\t\t\t\t\t";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["available_views"]) ? $context["available_views"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "desc"), "html", null, true);
                echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['args'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "views_dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  624 => 71,  621 => 67,  618 => 66,  611 => 28,  607 => 27,  603 => 26,  595 => 24,  584 => 173,  578 => 169,  576 => 168,  558 => 165,  541 => 163,  529 => 156,  526 => 155,  520 => 153,  514 => 150,  509 => 147,  505 => 145,  502 => 144,  498 => 142,  496 => 141,  492 => 139,  485 => 137,  473 => 135,  467 => 134,  461 => 133,  457 => 132,  452 => 131,  446 => 129,  440 => 127,  438 => 126,  434 => 125,  426 => 123,  422 => 122,  410 => 120,  406 => 119,  402 => 118,  398 => 117,  389 => 114,  384 => 113,  381 => 112,  364 => 111,  355 => 106,  340 => 100,  337 => 99,  331 => 98,  323 => 96,  289 => 85,  262 => 81,  235 => 74,  218 => 72,  38 => 5,  261 => 74,  191 => 55,  171 => 40,  120 => 51,  109 => 23,  321 => 132,  316 => 94,  310 => 91,  305 => 89,  300 => 119,  297 => 117,  295 => 78,  292 => 86,  285 => 111,  268 => 105,  256 => 99,  237 => 92,  215 => 56,  212 => 84,  165 => 46,  150 => 61,  146 => 60,  136 => 58,  115 => 48,  105 => 36,  85 => 25,  133 => 49,  124 => 30,  118 => 49,  98 => 30,  69 => 24,  33 => 7,  47 => 18,  100 => 42,  88 => 26,  298 => 115,  288 => 112,  281 => 110,  279 => 82,  263 => 103,  253 => 77,  244 => 94,  239 => 93,  228 => 87,  226 => 61,  220 => 58,  200 => 58,  195 => 48,  193 => 72,  177 => 61,  121 => 50,  92 => 25,  44 => 14,  306 => 118,  296 => 87,  294 => 80,  280 => 74,  274 => 71,  271 => 106,  264 => 67,  260 => 66,  225 => 61,  209 => 79,  192 => 77,  188 => 48,  178 => 50,  175 => 60,  152 => 62,  148 => 32,  144 => 63,  141 => 45,  102 => 26,  90 => 38,  78 => 30,  42 => 11,  39 => 8,  217 => 57,  211 => 80,  194 => 50,  183 => 52,  179 => 70,  168 => 64,  161 => 71,  143 => 44,  116 => 50,  111 => 24,  93 => 27,  86 => 21,  81 => 24,  59 => 17,  291 => 79,  283 => 105,  276 => 75,  267 => 102,  254 => 97,  248 => 69,  245 => 93,  233 => 73,  231 => 64,  224 => 84,  221 => 84,  207 => 56,  204 => 77,  202 => 59,  197 => 51,  189 => 65,  180 => 71,  176 => 42,  170 => 69,  153 => 68,  140 => 43,  137 => 46,  132 => 40,  122 => 37,  112 => 36,  99 => 27,  95 => 26,  91 => 17,  83 => 24,  79 => 22,  58 => 15,  50 => 12,  45 => 11,  29 => 6,  25 => 3,  164 => 37,  156 => 36,  139 => 61,  131 => 42,  127 => 47,  123 => 29,  114 => 25,  104 => 52,  96 => 30,  77 => 23,  74 => 16,  68 => 14,  60 => 19,  27 => 6,  66 => 14,  598 => 25,  590 => 5,  582 => 327,  573 => 320,  571 => 318,  565 => 314,  563 => 313,  560 => 166,  554 => 309,  551 => 308,  549 => 307,  546 => 306,  539 => 302,  534 => 158,  530 => 299,  527 => 298,  524 => 154,  521 => 295,  512 => 289,  503 => 283,  497 => 280,  488 => 274,  479 => 136,  474 => 265,  471 => 264,  464 => 258,  458 => 256,  451 => 253,  449 => 130,  443 => 128,  437 => 246,  430 => 124,  428 => 242,  423 => 239,  415 => 121,  407 => 228,  393 => 115,  387 => 213,  380 => 207,  374 => 205,  367 => 202,  365 => 201,  359 => 108,  353 => 195,  346 => 102,  344 => 191,  339 => 188,  333 => 183,  327 => 181,  320 => 95,  318 => 177,  313 => 125,  308 => 123,  302 => 120,  299 => 88,  293 => 77,  287 => 84,  284 => 75,  282 => 158,  278 => 76,  275 => 154,  269 => 106,  266 => 104,  258 => 80,  255 => 72,  251 => 76,  249 => 139,  242 => 94,  236 => 89,  222 => 125,  216 => 66,  210 => 62,  203 => 78,  187 => 46,  174 => 49,  166 => 73,  159 => 64,  155 => 63,  145 => 49,  138 => 74,  134 => 41,  119 => 62,  107 => 29,  101 => 41,  97 => 40,  80 => 23,  71 => 20,  62 => 19,  49 => 12,  35 => 7,  30 => 6,  63 => 18,  57 => 14,  54 => 17,  43 => 17,  31 => 6,  24 => 4,  21 => 2,  82 => 31,  73 => 22,  70 => 24,  64 => 20,  55 => 16,  52 => 15,  48 => 15,  46 => 7,  41 => 6,  37 => 11,  32 => 3,  22 => 2,  265 => 123,  259 => 73,  252 => 98,  250 => 97,  247 => 96,  241 => 112,  234 => 91,  232 => 108,  229 => 129,  227 => 62,  219 => 82,  213 => 81,  205 => 60,  201 => 79,  199 => 74,  196 => 57,  190 => 76,  186 => 84,  184 => 67,  181 => 101,  173 => 67,  169 => 47,  167 => 39,  162 => 38,  160 => 45,  157 => 70,  151 => 67,  149 => 47,  142 => 59,  135 => 60,  130 => 40,  128 => 31,  125 => 53,  117 => 34,  113 => 58,  108 => 45,  106 => 43,  103 => 21,  94 => 18,  89 => 26,  87 => 33,  84 => 25,  76 => 27,  72 => 18,  67 => 19,  65 => 18,  61 => 17,  56 => 16,  53 => 9,  51 => 13,  40 => 6,  34 => 8,  28 => 5,  26 => 5,  36 => 9,  23 => 3,  19 => 1,);
    }
}
