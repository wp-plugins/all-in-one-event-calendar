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
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Tags"), "html_attr");
        echo "\"
\tdata-placeholder=\"";
        // line 4
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Tags"), "html_attr");
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
        return array (  164 => 83,  156 => 77,  139 => 68,  131 => 66,  127 => 65,  123 => 64,  114 => 60,  104 => 52,  96 => 46,  77 => 38,  74 => 37,  68 => 33,  60 => 28,  27 => 7,  66 => 23,  598 => 338,  590 => 332,  582 => 327,  573 => 320,  571 => 318,  565 => 314,  563 => 313,  560 => 312,  554 => 309,  551 => 308,  549 => 307,  546 => 306,  539 => 302,  534 => 300,  530 => 299,  527 => 298,  524 => 297,  521 => 295,  512 => 289,  503 => 283,  497 => 280,  488 => 274,  479 => 268,  474 => 265,  471 => 264,  464 => 258,  458 => 256,  451 => 253,  449 => 252,  443 => 248,  437 => 246,  430 => 243,  428 => 242,  423 => 239,  415 => 233,  407 => 228,  393 => 217,  387 => 213,  380 => 207,  374 => 205,  367 => 202,  365 => 201,  359 => 197,  353 => 195,  346 => 192,  344 => 191,  339 => 188,  333 => 183,  327 => 181,  320 => 178,  318 => 177,  313 => 174,  308 => 170,  302 => 167,  299 => 166,  293 => 163,  287 => 160,  284 => 159,  282 => 158,  278 => 156,  275 => 154,  269 => 150,  266 => 149,  258 => 143,  255 => 142,  251 => 140,  249 => 139,  242 => 134,  236 => 132,  222 => 125,  216 => 120,  210 => 118,  203 => 115,  187 => 104,  174 => 96,  166 => 90,  159 => 86,  155 => 85,  145 => 71,  138 => 74,  134 => 73,  119 => 62,  107 => 54,  101 => 51,  97 => 50,  80 => 39,  71 => 35,  62 => 28,  49 => 14,  35 => 9,  30 => 7,  63 => 21,  57 => 25,  54 => 17,  43 => 17,  31 => 7,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 24,  64 => 15,  55 => 12,  52 => 23,  48 => 15,  46 => 18,  41 => 7,  37 => 9,  32 => 4,  22 => 2,  265 => 123,  259 => 120,  252 => 117,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 108,  229 => 129,  227 => 128,  219 => 100,  213 => 96,  205 => 93,  201 => 114,  199 => 90,  196 => 111,  190 => 86,  186 => 84,  184 => 83,  181 => 101,  173 => 79,  169 => 77,  167 => 76,  162 => 73,  160 => 72,  157 => 71,  151 => 74,  149 => 68,  142 => 63,  135 => 67,  130 => 56,  128 => 69,  125 => 54,  117 => 61,  113 => 58,  108 => 45,  106 => 44,  103 => 43,  94 => 39,  89 => 42,  87 => 43,  84 => 40,  76 => 38,  72 => 27,  67 => 23,  65 => 23,  61 => 21,  56 => 19,  53 => 18,  51 => 17,  40 => 6,  34 => 11,  28 => 3,  26 => 4,  36 => 5,  23 => 3,  19 => 1,);
    }
}
