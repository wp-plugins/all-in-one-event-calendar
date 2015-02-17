<?php

/* subscribe-buttons.twig */
class __TwigTemplate_2715acf678c380d630c83d3a7e40c2555c0b4cb21a16d95a1cc06a601f043e45 extends Twig_Template
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
        $context["alignment"] = (((isset($context["alignment"]) ? $context["alignment"] : null)) ? ((isset($context["alignment"]) ? $context["alignment"] : null)) : ("left"));
        // line 2
        $context["placement"] = (((isset($context["placement"]) ? $context["placement"] : null)) ? ((isset($context["placement"]) ? $context["placement"] : null)) : ("down"));
        // line 3
        $context["alignment2"] = ((("left" == (isset($context["alignment"]) ? $context["alignment"] : null))) ? ("right") : ("left"));
        // line 4
        $context["button_classes"] = (((isset($context["button_classes"]) ? $context["button_classes"] : null)) ? ((isset($context["button_classes"]) ? $context["button_classes"] : null)) : ("ai1ec-btn-sm"));
        // line 5
        echo "<div class=\"ai1ec-dropdown";
        if (((isset($context["placement"]) ? $context["placement"] : null) == "up")) {
            echo " ai1ec-dropup";
        }
        echo " ai1ec-btn
\tai1ec-btn-default ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["button_classes"]) ? $context["button_classes"] : null), "html_attr");
        echo "\">
\t<span role=\"button\" class=\"ai1ec-dropdown-toggle ai1ec-subscribe\"
\t\t\tdata-toggle=\"ai1ec-dropdown\">
\t\t<i class=\"ai1ec-fa ai1ec-icon-rss ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t<span class=\"ai1ec-hidden-xs\">
\t\t\t";
        // line 11
        if ((!twig_test_empty((isset($context["subscribe_label"]) ? $context["subscribe_label"] : null)))) {
            // line 12
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["subscribe_label"]) ? $context["subscribe_label"] : null), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t";
            if ((isset($context["is_filtered"]) ? $context["is_filtered"] : null)) {
                // line 15
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["text_filtered"]) ? $context["text_filtered"] : null), "html", null, true);
                echo "
\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["text_subscribe"]) ? $context["text_subscribe"] : null), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t";
        }
        // line 20
        echo "\t\t\t<span class=\"ai1ec-caret\"></span>
\t\t</span>
\t</span>
\t";
        // line 23
        $context["url"] = (strtr((isset($context["export_url"]) ? $context["export_url"] : null), array("webcal://" => "http://")) . (isset($context["url_args"]) ? $context["url_args"] : null));
        // line 24
        echo "\t<ul class=\"ai1ec-dropdown-menu ai1ec-pull-";
        echo twig_escape_filter($this->env, (isset($context["alignment2"]) ? $context["alignment2"] : null), "html", null, true);
        echo "\" role=\"menu\">
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t\tdata-placement=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "timely"), "html", null, true);
        echo "\"
\t\t\t\thref=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-lg ai1ec-fa-fw ai1ec-icon-timely\"></i>
\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "timely"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t  data-placement=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "google"), "html", null, true);
        echo "\"
\t\t\t  href=\"http://www.google.com/calendar/render?cid=";
        // line 36
        echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["url"]) ? $context["url"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-google ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "google"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t  data-placement=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "outlook"), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 44
        echo twig_escape_filter($this->env, ((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null) . (isset($context["url_args"]) ? $context["url_args"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-windows ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "outlook"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t  data-placement=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "apple"), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 52
        echo twig_escape_filter($this->env, ((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null) . (isset($context["url_args"]) ? $context["url_args"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-apple ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "apple"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t";
        // line 58
        $context["export_url_no_html_http"] = strtr((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null), array("webcal://" => "http://"));
        // line 59
        echo "\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\"
\t\t\t  data-placement=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "plaintext"), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 61
        echo twig_escape_filter($this->env, ((isset($context["export_url_no_html_http"]) ? $context["export_url_no_html_http"] : null) . (isset($context["url_args"]) ? $context["url_args"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-calendar ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "plaintext"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>
</div>

";
        // line 69
        if ((isset($context["show_get_calendar"]) ? $context["show_get_calendar"] : null)) {
            // line 70
            echo "\t<a href=\"http://time.ly\" target=\"_blank\"
\t\tclass=\"ai1ec-btn ai1ec-btn-default ai1ec-get-calendar
\t\t\t";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["button_classes"]) ? $context["button_classes"] : null), "html_attr");
            echo "\">
\t\t<small class=\"ai1ec-fa-stack ai1ec-text-info ai1ec-fa-fw\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-square ai1ec-fa-stack-2x\"></i>
\t\t\t<i class=\"ai1ec-fa ai1ec-icon-timely ai1ec-fa-stack-1x ai1ec-fa-inverse ai1ec-fa-lg\"></i>
\t\t</small>
\t\t<span class=\"ai1ec-hidden-xs\">";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["text_get_calendar"]) ? $context["text_get_calendar"] : null), "html", null, true);
            echo "</span>
\t</a>
";
        }
    }

    public function getTemplateName()
    {
        return "subscribe-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 58,  734 => 240,  727 => 235,  725 => 234,  708 => 231,  706 => 230,  698 => 228,  692 => 226,  690 => 225,  684 => 222,  680 => 221,  673 => 217,  663 => 212,  659 => 211,  656 => 210,  654 => 209,  645 => 205,  641 => 204,  637 => 202,  634 => 201,  629 => 199,  626 => 198,  624 => 197,  620 => 196,  616 => 195,  612 => 193,  606 => 191,  604 => 190,  600 => 189,  593 => 184,  588 => 182,  585 => 181,  579 => 179,  573 => 176,  568 => 173,  564 => 171,  557 => 168,  551 => 165,  544 => 163,  526 => 160,  520 => 159,  516 => 158,  508 => 156,  505 => 155,  499 => 153,  493 => 151,  485 => 149,  474 => 147,  469 => 146,  465 => 145,  461 => 144,  457 => 143,  452 => 141,  447 => 140,  444 => 139,  435 => 135,  431 => 133,  422 => 129,  416 => 127,  413 => 126,  407 => 125,  399 => 123,  396 => 122,  392 => 121,  386 => 118,  381 => 116,  375 => 115,  372 => 114,  365 => 112,  363 => 111,  355 => 109,  338 => 108,  334 => 107,  328 => 103,  326 => 102,  308 => 99,  294 => 95,  292 => 94,  265 => 81,  252 => 76,  243 => 73,  228 => 67,  226 => 66,  202 => 58,  182 => 69,  164 => 42,  143 => 36,  329 => 116,  322 => 112,  306 => 109,  300 => 97,  298 => 106,  293 => 104,  286 => 91,  257 => 89,  251 => 86,  244 => 84,  225 => 76,  214 => 62,  200 => 67,  174 => 56,  172 => 55,  148 => 46,  108 => 29,  102 => 31,  140 => 44,  132 => 45,  129 => 44,  123 => 41,  116 => 39,  98 => 30,  86 => 23,  22 => 2,  309 => 116,  299 => 112,  284 => 109,  272 => 96,  266 => 101,  261 => 80,  237 => 87,  234 => 86,  231 => 68,  223 => 81,  219 => 80,  206 => 59,  190 => 66,  184 => 70,  149 => 47,  144 => 45,  139 => 51,  319 => 95,  317 => 94,  313 => 110,  310 => 100,  307 => 84,  305 => 114,  302 => 82,  291 => 110,  287 => 75,  285 => 74,  280 => 100,  277 => 71,  271 => 84,  269 => 68,  253 => 95,  238 => 81,  220 => 62,  205 => 53,  195 => 49,  189 => 46,  186 => 50,  180 => 62,  175 => 60,  152 => 47,  111 => 35,  45 => 11,  42 => 11,  120 => 43,  94 => 29,  71 => 21,  135 => 33,  127 => 39,  89 => 26,  47 => 7,  221 => 81,  217 => 73,  213 => 56,  211 => 77,  194 => 65,  168 => 61,  166 => 57,  161 => 58,  147 => 45,  115 => 34,  110 => 36,  278 => 99,  274 => 95,  267 => 94,  260 => 93,  258 => 79,  250 => 90,  245 => 87,  239 => 71,  233 => 79,  227 => 79,  224 => 78,  222 => 65,  215 => 78,  210 => 76,  198 => 67,  191 => 52,  187 => 63,  178 => 58,  169 => 44,  159 => 59,  153 => 48,  151 => 51,  133 => 41,  122 => 35,  114 => 38,  112 => 38,  99 => 27,  95 => 26,  83 => 23,  78 => 21,  137 => 34,  131 => 46,  125 => 30,  117 => 36,  103 => 28,  90 => 27,  82 => 27,  52 => 15,  34 => 6,  677 => 347,  669 => 215,  661 => 336,  652 => 329,  650 => 207,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 180,  574 => 291,  567 => 286,  561 => 170,  555 => 167,  553 => 281,  548 => 278,  545 => 277,  538 => 162,  532 => 161,  525 => 266,  523 => 265,  517 => 261,  511 => 157,  504 => 256,  502 => 154,  497 => 152,  489 => 150,  481 => 148,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 138,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 113,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 113,  321 => 171,  315 => 111,  312 => 166,  304 => 108,  301 => 113,  297 => 157,  295 => 78,  288 => 151,  282 => 90,  275 => 86,  273 => 145,  268 => 95,  262 => 137,  256 => 78,  249 => 132,  247 => 74,  242 => 83,  236 => 70,  229 => 78,  212 => 71,  207 => 71,  203 => 52,  192 => 64,  183 => 60,  170 => 38,  138 => 44,  128 => 31,  107 => 36,  91 => 23,  80 => 22,  66 => 14,  61 => 16,  43 => 7,  73 => 23,  64 => 15,  55 => 14,  88 => 28,  79 => 24,  75 => 24,  68 => 20,  57 => 21,  118 => 43,  96 => 31,  85 => 24,  69 => 24,  60 => 13,  58 => 15,  49 => 12,  36 => 12,  204 => 69,  196 => 77,  177 => 47,  171 => 73,  165 => 53,  163 => 36,  158 => 61,  154 => 60,  150 => 54,  146 => 37,  142 => 44,  136 => 41,  130 => 40,  105 => 27,  101 => 35,  93 => 30,  87 => 24,  81 => 25,  74 => 19,  67 => 19,  65 => 19,  59 => 17,  53 => 15,  44 => 12,  25 => 4,  21 => 2,  77 => 21,  70 => 19,  62 => 17,  54 => 11,  50 => 14,  29 => 4,  40 => 6,  38 => 5,  27 => 5,  218 => 64,  216 => 119,  208 => 60,  201 => 72,  199 => 71,  188 => 72,  179 => 67,  173 => 63,  167 => 53,  162 => 60,  160 => 41,  155 => 39,  145 => 52,  141 => 45,  134 => 46,  126 => 44,  124 => 38,  121 => 37,  119 => 37,  113 => 37,  109 => 32,  104 => 27,  100 => 31,  92 => 29,  84 => 25,  76 => 23,  72 => 21,  63 => 18,  56 => 10,  51 => 13,  30 => 6,  46 => 10,  32 => 10,  26 => 3,  23 => 3,  48 => 8,  33 => 7,  28 => 5,  24 => 3,  41 => 9,  39 => 7,  37 => 8,  35 => 6,  31 => 5,  19 => 1,);
    }
}
