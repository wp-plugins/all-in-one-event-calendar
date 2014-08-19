<?php

/* create-event-message.twig */
class __TwigTemplate_862f5bd0aae3cdc2eb247965d6758532defae4940dfe30c68378e622f1d1148c extends Twig_Template
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
        echo "<div class=\"ai1ec-modal-header\">
\t<button type=\"button\" class=\"ai1ec-close\" data-dismiss=\"ai1ec-modal\">×</button>
\t<h2>";
        // line 3
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Post Your Event"), "html", null, true);
        echo "</h2>
</div>

<div class=\"ai1ec-modal-body\">
\t";
        // line 7
        if (((isset($context["message_type"]) ? $context["message_type"] : null) != "success")) {
            // line 8
            echo "\t\t<div class=\"ai1ec-alert ai1ec-alert-";
            echo twig_escape_filter($this->env, (isset($context["message_type"]) ? $context["message_type"] : null), "html", null, true);
            echo "\">
\t\t\t";
            // line 9
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "
\t\t</div>
\t";
        } else {
            // line 12
            echo "\t\t";
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "
\t";
        }
        // line 14
        echo "</div>

<div class=\"ai1ec-modal-footer\">
\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary ai1ec-pull-left ai1ec-post-another\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-plus\"></i>
\t\t";
        // line 19
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Post Another"), "html", null, true);
        echo "
\t</a>
\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["link_url"]) ? $context["link_url"] : null), "html_attr");
        echo "\"
\t\tclass=\"ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary\">
\t\t";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["link_text"]) ? $context["link_text"] : null), "html", null, true);
        echo "
\t\t<i class=\"ai1ec-fa ai1ec-fa-arrow-right\"></i>
\t</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "create-event-message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  640 => 354,  632 => 348,  624 => 343,  615 => 336,  613 => 334,  607 => 330,  605 => 329,  602 => 328,  596 => 325,  593 => 324,  591 => 323,  588 => 322,  581 => 318,  576 => 316,  572 => 315,  569 => 314,  566 => 313,  563 => 311,  554 => 305,  545 => 299,  539 => 296,  530 => 290,  521 => 284,  516 => 281,  513 => 280,  506 => 274,  500 => 272,  493 => 269,  491 => 268,  485 => 264,  479 => 262,  472 => 259,  470 => 258,  465 => 255,  457 => 249,  449 => 244,  435 => 233,  429 => 229,  422 => 223,  416 => 221,  409 => 218,  407 => 217,  401 => 213,  395 => 211,  388 => 208,  386 => 207,  381 => 204,  375 => 199,  369 => 197,  362 => 194,  360 => 193,  355 => 190,  350 => 186,  344 => 183,  341 => 182,  335 => 179,  329 => 176,  326 => 175,  324 => 174,  320 => 172,  317 => 170,  311 => 166,  308 => 165,  300 => 159,  297 => 158,  293 => 156,  291 => 155,  284 => 150,  278 => 148,  271 => 145,  269 => 144,  264 => 141,  258 => 136,  245 => 131,  243 => 130,  238 => 127,  225 => 120,  212 => 118,  208 => 117,  203 => 116,  192 => 111,  188 => 109,  179 => 102,  166 => 94,  158 => 88,  141 => 77,  134 => 73,  124 => 68,  115 => 61,  109 => 57,  97 => 50,  80 => 39,  71 => 35,  62 => 28,  49 => 14,  35 => 9,  30 => 7,  63 => 21,  57 => 25,  54 => 17,  43 => 12,  31 => 7,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 24,  64 => 15,  55 => 12,  52 => 11,  48 => 15,  46 => 18,  41 => 7,  37 => 9,  32 => 8,  22 => 2,  265 => 123,  259 => 120,  252 => 134,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 122,  229 => 107,  227 => 106,  219 => 100,  213 => 96,  205 => 93,  201 => 91,  199 => 115,  196 => 89,  190 => 86,  186 => 84,  184 => 83,  181 => 82,  173 => 99,  169 => 77,  167 => 76,  162 => 73,  160 => 72,  157 => 71,  151 => 84,  149 => 68,  142 => 63,  135 => 59,  130 => 72,  128 => 55,  125 => 54,  117 => 49,  113 => 48,  108 => 45,  106 => 44,  103 => 53,  94 => 39,  89 => 36,  87 => 43,  84 => 34,  76 => 38,  72 => 27,  67 => 23,  65 => 23,  61 => 21,  56 => 19,  53 => 18,  51 => 17,  40 => 11,  34 => 5,  28 => 3,  26 => 4,  36 => 4,  23 => 3,  19 => 1,);
    }
}
