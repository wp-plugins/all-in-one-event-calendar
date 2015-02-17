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
        echo "<div class=\"ai1ec-s2-with-icon\">
  <input type=\"text\" class=\"ai1ec-tags-selector\"
  \tid=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"
  \tplaceholder=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["tags_placeholder"]) ? $context["tags_placeholder"] : null), "html_attr");
        echo "\"
  \tdata-placeholder=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["tags_placeholder"]) ? $context["tags_placeholder"] : null), "html_attr");
        echo "\"
  \tdata-ai1ec-tags='";
        // line 6
        echo (isset($context["tags_json"]) ? $context["tags_json"] : null);
        echo "'
  \tvalue=\"";
        // line 7
        echo (isset($context["selected_tag_ids"]) ? $context["selected_tag_ids"] : null);
        echo "\" />
  <i class=\"ai1ec-fa ai1ec-fa-tags\"></i>
</div>
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
        return array (  137 => 67,  131 => 64,  125 => 61,  117 => 59,  103 => 54,  90 => 45,  82 => 39,  52 => 23,  34 => 11,  677 => 347,  669 => 341,  661 => 336,  652 => 329,  650 => 328,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 297,  574 => 291,  567 => 286,  561 => 284,  555 => 282,  553 => 281,  548 => 278,  545 => 277,  538 => 271,  532 => 269,  525 => 266,  523 => 265,  517 => 261,  511 => 259,  504 => 256,  502 => 255,  497 => 252,  489 => 246,  481 => 241,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 215,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 184,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 157,  295 => 156,  288 => 151,  282 => 149,  275 => 146,  273 => 145,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  247 => 131,  242 => 128,  236 => 123,  229 => 121,  212 => 118,  207 => 117,  203 => 116,  192 => 110,  183 => 103,  170 => 95,  138 => 74,  128 => 69,  107 => 54,  91 => 44,  80 => 39,  66 => 29,  61 => 21,  43 => 17,  73 => 18,  64 => 15,  55 => 12,  88 => 23,  79 => 23,  75 => 36,  68 => 33,  57 => 18,  118 => 43,  96 => 33,  85 => 22,  69 => 24,  60 => 28,  58 => 13,  49 => 14,  36 => 10,  204 => 84,  196 => 112,  177 => 100,  171 => 73,  165 => 69,  163 => 63,  158 => 61,  154 => 60,  150 => 76,  146 => 58,  142 => 70,  136 => 56,  130 => 54,  105 => 36,  101 => 51,  93 => 42,  87 => 29,  81 => 24,  74 => 36,  67 => 23,  65 => 19,  59 => 18,  53 => 14,  44 => 8,  25 => 3,  21 => 2,  77 => 34,  70 => 24,  62 => 21,  54 => 17,  50 => 15,  29 => 4,  40 => 11,  38 => 5,  27 => 7,  218 => 120,  216 => 119,  208 => 116,  201 => 115,  199 => 82,  188 => 109,  179 => 102,  173 => 98,  167 => 95,  162 => 89,  160 => 91,  155 => 85,  145 => 78,  141 => 81,  134 => 73,  126 => 71,  124 => 66,  121 => 60,  119 => 62,  113 => 58,  109 => 57,  104 => 56,  100 => 53,  92 => 32,  84 => 40,  76 => 37,  72 => 21,  63 => 22,  56 => 19,  51 => 10,  30 => 7,  46 => 18,  32 => 8,  26 => 4,  23 => 3,  48 => 15,  33 => 5,  28 => 5,  24 => 3,  41 => 7,  39 => 10,  37 => 6,  35 => 9,  31 => 7,  19 => 1,);
    }
}
