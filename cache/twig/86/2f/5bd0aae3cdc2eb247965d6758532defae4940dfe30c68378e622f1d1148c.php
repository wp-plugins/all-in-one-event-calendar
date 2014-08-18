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
        return array (  66 => 23,  598 => 338,  590 => 332,  582 => 327,  573 => 320,  571 => 318,  565 => 314,  563 => 313,  560 => 312,  554 => 309,  551 => 308,  549 => 307,  546 => 306,  539 => 302,  534 => 300,  530 => 299,  527 => 298,  524 => 297,  521 => 295,  512 => 289,  503 => 283,  497 => 280,  488 => 274,  479 => 268,  474 => 265,  471 => 264,  464 => 258,  458 => 256,  451 => 253,  449 => 252,  443 => 248,  437 => 246,  430 => 243,  428 => 242,  423 => 239,  415 => 233,  407 => 228,  393 => 217,  387 => 213,  380 => 207,  374 => 205,  367 => 202,  365 => 201,  359 => 197,  353 => 195,  346 => 192,  344 => 191,  339 => 188,  333 => 183,  327 => 181,  320 => 178,  318 => 177,  313 => 174,  308 => 170,  302 => 167,  299 => 166,  293 => 163,  287 => 160,  284 => 159,  282 => 158,  278 => 156,  275 => 154,  269 => 150,  266 => 149,  258 => 143,  255 => 142,  251 => 140,  249 => 139,  242 => 134,  236 => 132,  222 => 125,  216 => 120,  210 => 118,  203 => 115,  187 => 104,  174 => 96,  166 => 90,  159 => 86,  155 => 85,  145 => 78,  138 => 74,  134 => 73,  119 => 62,  107 => 54,  101 => 51,  97 => 50,  80 => 39,  71 => 35,  62 => 28,  49 => 14,  35 => 9,  30 => 7,  63 => 21,  57 => 25,  54 => 17,  43 => 12,  31 => 7,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 24,  64 => 15,  55 => 12,  52 => 11,  48 => 15,  46 => 18,  41 => 7,  37 => 9,  32 => 8,  22 => 2,  265 => 123,  259 => 120,  252 => 117,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 108,  229 => 129,  227 => 128,  219 => 100,  213 => 96,  205 => 93,  201 => 114,  199 => 90,  196 => 111,  190 => 86,  186 => 84,  184 => 83,  181 => 101,  173 => 79,  169 => 77,  167 => 76,  162 => 73,  160 => 72,  157 => 71,  151 => 69,  149 => 68,  142 => 63,  135 => 59,  130 => 56,  128 => 69,  125 => 54,  117 => 49,  113 => 58,  108 => 45,  106 => 44,  103 => 43,  94 => 39,  89 => 36,  87 => 43,  84 => 34,  76 => 38,  72 => 27,  67 => 23,  65 => 23,  61 => 21,  56 => 19,  53 => 18,  51 => 17,  40 => 11,  34 => 5,  28 => 3,  26 => 4,  36 => 4,  23 => 3,  19 => 1,);
    }
}
