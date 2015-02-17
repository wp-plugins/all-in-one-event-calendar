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
        echo twig_escape_filter($this->env, (isset($context["post_event_title"]) ? $context["post_event_title"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["post_another_title"]) ? $context["post_another_title"] : null), "html", null, true);
        echo "
\t</a>
\t";
        // line 21
        if ((isset($context["link_url"]) ? $context["link_url"] : null)) {
            // line 22
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["link_url"]) ? $context["link_url"] : null), "html_attr");
            echo "\"
\t\t\tclass=\"ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary\">
\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["link_text"]) ? $context["link_text"] : null), "html", null, true);
            echo "
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-arrow-right\"></i>
\t\t</a>
\t";
        }
        // line 28
        echo "</div>
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
        return array (  677 => 347,  669 => 341,  661 => 336,  652 => 329,  650 => 328,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 297,  574 => 291,  567 => 286,  561 => 284,  555 => 282,  553 => 281,  548 => 278,  545 => 277,  538 => 271,  532 => 269,  525 => 266,  523 => 265,  517 => 261,  511 => 259,  504 => 256,  502 => 255,  497 => 252,  489 => 246,  481 => 241,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 215,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 184,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 173,  321 => 171,  315 => 167,  312 => 166,  304 => 160,  301 => 159,  297 => 157,  295 => 156,  288 => 151,  282 => 149,  275 => 146,  273 => 145,  268 => 142,  262 => 137,  256 => 135,  249 => 132,  247 => 131,  242 => 128,  236 => 123,  229 => 121,  212 => 118,  207 => 117,  203 => 116,  192 => 110,  183 => 103,  170 => 95,  138 => 74,  128 => 69,  107 => 54,  91 => 44,  80 => 39,  66 => 29,  61 => 21,  43 => 12,  73 => 18,  64 => 15,  55 => 12,  88 => 23,  79 => 23,  75 => 36,  68 => 20,  57 => 18,  118 => 43,  96 => 33,  85 => 22,  69 => 24,  60 => 16,  58 => 13,  49 => 14,  36 => 10,  204 => 84,  196 => 112,  177 => 100,  171 => 73,  165 => 69,  163 => 63,  158 => 61,  154 => 60,  150 => 59,  146 => 58,  142 => 57,  136 => 56,  130 => 54,  105 => 36,  101 => 51,  93 => 42,  87 => 29,  81 => 24,  74 => 32,  67 => 23,  65 => 19,  59 => 18,  53 => 14,  44 => 8,  25 => 3,  21 => 2,  77 => 34,  70 => 24,  62 => 21,  54 => 17,  50 => 15,  29 => 6,  40 => 11,  38 => 5,  27 => 7,  218 => 120,  216 => 119,  208 => 116,  201 => 115,  199 => 82,  188 => 109,  179 => 102,  173 => 98,  167 => 95,  162 => 89,  160 => 91,  155 => 85,  145 => 78,  141 => 81,  134 => 73,  126 => 71,  124 => 66,  121 => 65,  119 => 62,  113 => 58,  109 => 57,  104 => 56,  100 => 55,  92 => 32,  84 => 40,  76 => 28,  72 => 21,  63 => 22,  56 => 19,  51 => 10,  30 => 7,  46 => 18,  32 => 8,  26 => 4,  23 => 3,  48 => 15,  33 => 7,  28 => 5,  24 => 3,  41 => 11,  39 => 10,  37 => 9,  35 => 9,  31 => 7,  19 => 1,);
    }
}
