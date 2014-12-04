<?php

/* tags-select.twig */
class __TwigTemplate_82b0255fefe74fca92677a6a96c9e569117eabff494d93e0b5f6b38cdaaea0b0 extends Twig_Template
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
        echo "<input type=\"text\" class=\"ai1ec-tags-selector\"
\tid=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"
\tplaceholder=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["tags_placeholder"]) ? $context["tags_placeholder"] : null), "html_attr");
        echo "\"
\tdata-placeholder=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["tags_placeholder"]) ? $context["tags_placeholder"] : null), "html_attr");
        echo "\"
\tdata-ai1ec-tags='";
        // line 5
        echo (isset($context["tags_json"]) ? $context["tags_json"] : null);
        echo "'
\tvalue=\"";
        // line 6
        echo (isset($context["selected_tag_ids"]) ? $context["selected_tag_ids"] : null);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "tags-select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 83,  156 => 77,  139 => 68,  131 => 66,  127 => 65,  123 => 64,  114 => 60,  104 => 52,  96 => 46,  77 => 38,  74 => 37,  60 => 28,  69 => 24,  644 => 354,  636 => 348,  628 => 343,  619 => 336,  617 => 335,  611 => 331,  609 => 330,  606 => 329,  600 => 326,  597 => 325,  595 => 324,  592 => 323,  585 => 319,  580 => 317,  576 => 316,  573 => 315,  570 => 314,  567 => 312,  558 => 306,  549 => 300,  543 => 297,  534 => 291,  525 => 285,  520 => 282,  517 => 281,  510 => 275,  504 => 273,  497 => 270,  495 => 269,  489 => 265,  483 => 263,  476 => 260,  474 => 259,  469 => 256,  461 => 250,  453 => 245,  439 => 234,  433 => 230,  426 => 224,  420 => 222,  413 => 219,  411 => 218,  405 => 214,  399 => 212,  392 => 209,  390 => 208,  385 => 205,  379 => 200,  373 => 198,  366 => 195,  364 => 194,  359 => 191,  354 => 187,  348 => 184,  345 => 183,  339 => 180,  333 => 177,  330 => 176,  328 => 175,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 157,  295 => 156,  288 => 151,  282 => 149,  275 => 146,  273 => 145,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  242 => 128,  236 => 123,  216 => 119,  212 => 118,  207 => 117,  203 => 116,  192 => 110,  183 => 103,  177 => 100,  170 => 95,  155 => 85,  145 => 71,  138 => 74,  134 => 73,  119 => 62,  107 => 54,  101 => 51,  91 => 44,  80 => 39,  66 => 29,  35 => 9,  30 => 7,  63 => 22,  54 => 17,  43 => 17,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 24,  64 => 15,  55 => 12,  52 => 23,  48 => 15,  46 => 18,  41 => 7,  37 => 9,  32 => 4,  22 => 2,  88 => 26,  81 => 24,  79 => 23,  75 => 36,  68 => 33,  57 => 18,  49 => 14,  44 => 12,  31 => 7,  27 => 7,  265 => 123,  259 => 120,  252 => 117,  250 => 116,  247 => 131,  241 => 112,  234 => 109,  232 => 108,  229 => 121,  227 => 106,  219 => 100,  213 => 96,  205 => 93,  201 => 91,  199 => 90,  196 => 112,  190 => 86,  186 => 84,  184 => 83,  181 => 82,  173 => 79,  169 => 77,  167 => 76,  162 => 89,  160 => 72,  157 => 71,  151 => 74,  149 => 68,  142 => 63,  135 => 67,  130 => 56,  128 => 69,  125 => 54,  117 => 61,  113 => 58,  108 => 45,  106 => 44,  103 => 43,  94 => 39,  89 => 42,  87 => 35,  84 => 40,  76 => 28,  72 => 21,  67 => 23,  65 => 19,  61 => 21,  56 => 19,  53 => 14,  51 => 17,  40 => 6,  34 => 11,  28 => 3,  26 => 4,  36 => 5,  23 => 3,  19 => 1,);
    }
}
