<?php

/* event-single.twig */
class __TwigTemplate_d0fd53d3e74d5ca87482d078ffb8d74c0fecfd7106a9092d9a28cce902c86fed extends Twig_Template
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
        echo "<div class=\"timely ai1ec-single-event
\tai1ec-event-id-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post_id"), "method"), "html", null, true);
        echo "
\t";
        // line 3
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
            echo "ai1ec-multiday";
        }
        // line 4
        echo "\t";
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
            echo "ai1ec-allday";
        }
        echo "\">

<a id=\"ai1ec-event\"></a>

";
        // line 8
        if (((isset($context["show_subscribe_buttons"]) ? $context["show_subscribe_buttons"] : null) || (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method"))))) {
            // line 9
            echo "\t<div class=\"ai1ec-actions\">
\t\t<div class=\"ai1ec-btn-group-vertical ai1ec-clearfix\">
\t\t\t";
            // line 11
            echo (isset($context["back_to_calendar"]) ? $context["back_to_calendar"] : null);
            echo "
\t\t</div>

\t\t<div class=\"ai1ec-btn-group-vertical ai1ec-clearfix\">
\t\t\t";
            // line 15
            if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method")))) {
                // line 16
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method"), "html_attr");
                echo "\" target=\"_blank\"
\t\t\t\t\tclass=\"ai1ec-tickets ai1ec-btn ai1ec-btn-sm ai1ec-btn-primary
\t\t\t\t\t\tai1ec-tooltip-trigger\"
\t\t\t\t\t\ttitle=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "tickets_url_label"), "method"), "html_attr");
                echo "\"
\t\t\t\t\t\tdata-placement=\"left\">
\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-ticket ai1ec-fa-fw\"></i>
\t\t\t\t\t<span class=\"ai1ec-hidden-xs\">
\t\t\t\t\t\t";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "tickets_url_label"), "method"), "html", null, true);
                echo "
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t";
            }
            // line 27
            echo "\t\t\t";
            if ((isset($context["show_subscribe_buttons"]) ? $context["show_subscribe_buttons"] : null)) {
                // line 28
                echo "\t\t\t\t";
                $this->env->loadTemplate("subscribe-buttons.twig")->display(array_merge($context, array("button_classes" => "ai1ec-btn-dropdown", "export_url" => (isset($context["subscribe_url"]) ? $context["subscribe_url"] : null), "export_url_no_html" => (isset($context["subscribe_url_no_html"]) ? $context["subscribe_url_no_html"] : null), "subscribe_label" => (isset($context["text_add_calendar"]) ? $context["text_add_calendar"] : null), "text" => (isset($context["subscribe_buttons_text"]) ? $context["subscribe_buttons_text"] : null))));
                // line 35
                echo "\t\t\t";
            }
            // line 36
            echo "\t\t</div>
\t\t\t";
            // line 37
            if ((isset($context["extra_buttons"]) ? $context["extra_buttons"] : null)) {
                // line 38
                echo "\t\t\t\t";
                echo (isset($context["extra_buttons"]) ? $context["extra_buttons"] : null);
                echo "
\t\t\t";
            }
            // line 40
            echo "\t</div>
";
        }
        // line 42
        echo "
";
        // line 43
        if (twig_test_empty((isset($context["map"]) ? $context["map"] : null))) {
            // line 44
            echo "\t";
            $context["col1"] = "ai1ec-col-sm-3";
            // line 45
            echo "\t";
            $context["col2"] = "ai1ec-col-sm-9";
            // line 46
            echo "\t<div class=\"ai1ec-event-details ai1ec-clearfix\">
";
        } else {
            // line 48
            echo "\t";
            $context["col1"] = "ai1ec-col-sm-4 ai1ec-col-md-5";
            // line 49
            echo "\t";
            $context["col2"] = "ai1ec-col-sm-8 ai1ec-col-md-7";
            // line 50
            echo "\t<div class=\"ai1ec-event-details ai1ec-row\">
\t\t<div class=\"ai1ec-map ai1ec-col-sm-5 ai1ec-col-sm-push-7\">
\t\t\t";
            // line 52
            echo (isset($context["map"]) ? $context["map"] : null);
            echo "
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-7 ai1ec-col-sm-pull-5\">
";
        }
        // line 56
        echo "
\t<div class=\"ai1ec-time ai1ec-row\">
\t\t<div class=\"ai1ec-field-label ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["text_when"]) ? $context["text_when"] : null), "html", null, true);
        echo "</div>
\t\t<div class=\"ai1ec-field-value ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
        echo " dt-duration\">
\t\t\t";
        // line 60
        echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null));
        echo "
\t\t\t";
        // line 61
        $this->env->loadTemplate("recurrence.twig")->display($context);
        // line 62
        echo "\t\t</div>
\t\t<div class=\"ai1ec-hidden dt-start\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start"), "method"), "html", null, true);
        echo "</div>
\t\t<div class=\"ai1ec-hidden dt-end\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "end"), "method"), "html", null, true);
        echo "</div>
\t</div>

\t";
        // line 67
        if ((!twig_test_empty((isset($context["location"]) ? $context["location"] : null)))) {
            // line 68
            echo "\t\t<div class=\"ai1ec-location ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text_where"]) ? $context["text_where"] : null), "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo " p-location\">
\t\t\t\t";
            // line 71
            echo (isset($context["location"]) ? $context["location"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 75
        echo "
\t";
        // line 76
        if (((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "cost"), "method"))) || $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_free"))) {
            // line 77
            echo "\t\t<div class=\"ai1ec-cost ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text_cost"]) ? $context["text_cost"] : null), "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 80
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_free")) ? ((isset($context["text_free"]) ? $context["text_free"] : null)) : ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "cost"), "method"))), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 84
        echo "
\t";
        // line 85
        if ((!twig_test_empty((isset($context["contact"]) ? $context["contact"] : null)))) {
            // line 86
            echo "\t\t<div class=\"ai1ec-contact ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text_contact"]) ? $context["text_contact"] : null), "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "</div>
\t\t</div>
\t";
        }
        // line 91
        echo "
\t";
        // line 92
        if ((!twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)))) {
            // line 93
            echo "\t\t<div class=\"ai1ec-categories ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo " ai1ec-col-xs-1\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open ai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["text_categories"]) ? $context["text_categories"] : null), "html_attr");
            echo "\"></i>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo " ai1ec-col-xs-10\">
\t\t\t\t";
            // line 99
            echo (isset($context["categories"]) ? $context["categories"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 103
        echo "
\t";
        // line 104
        if ((!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null)))) {
            // line 105
            echo "\t\t<div class=\"ai1ec-tags ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo " ai1ec-col-xs-1\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-tags ai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["text_tags"]) ? $context["text_tags"] : null), "html_attr");
            echo "\"></i>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo " ai1ec-col-xs-10\">
\t\t\t\t";
            // line 111
            echo (isset($context["tags"]) ? $context["tags"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 115
        echo "
";
        // line 116
        if (twig_test_empty((isset($context["map"]) ? $context["map"] : null))) {
            // line 117
            echo "\t</div>";
        } else {
            // line 119
            echo "\t\t</div>";
            // line 120
            echo "\t</div>";
        }
        // line 122
        echo "
";
        // line 123
        if ((!(isset($context["hide_featured_image"]) ? $context["hide_featured_image"] : null))) {
            // line 124
            echo "\t";
            if (twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "content_img_url"), "method"))) {
                // line 125
                echo "\t\t";
                echo $this->env->getExtension('ai1ec')->avatar((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "location_avatar", 2 => "category_avatar"), "timely alignleft", false);
                // line 129
                echo "
\t";
            }
        }
        // line 132
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "event-single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 132,  316 => 129,  310 => 124,  305 => 122,  295 => 116,  292 => 115,  285 => 111,  268 => 105,  256 => 99,  237 => 92,  215 => 85,  187 => 75,  165 => 67,  150 => 61,  146 => 60,  136 => 58,  105 => 44,  85 => 36,  133 => 49,  118 => 49,  98 => 31,  69 => 23,  33 => 9,  47 => 18,  100 => 42,  88 => 37,  298 => 115,  288 => 112,  281 => 110,  279 => 110,  263 => 103,  253 => 98,  244 => 94,  239 => 93,  228 => 87,  226 => 88,  220 => 87,  200 => 76,  195 => 78,  193 => 72,  177 => 61,  155 => 63,  121 => 50,  92 => 25,  44 => 10,  313 => 125,  306 => 118,  302 => 120,  299 => 88,  296 => 114,  294 => 80,  280 => 74,  274 => 71,  266 => 104,  260 => 66,  209 => 79,  178 => 43,  175 => 60,  159 => 64,  152 => 62,  148 => 32,  144 => 46,  102 => 26,  90 => 38,  78 => 23,  42 => 9,  39 => 7,  217 => 86,  211 => 80,  194 => 50,  183 => 72,  168 => 64,  161 => 61,  143 => 45,  116 => 38,  111 => 46,  93 => 27,  86 => 21,  81 => 24,  59 => 15,  287 => 106,  283 => 105,  276 => 108,  267 => 102,  254 => 97,  248 => 94,  242 => 94,  236 => 89,  233 => 88,  231 => 88,  224 => 84,  221 => 84,  216 => 82,  210 => 78,  207 => 56,  204 => 77,  202 => 53,  197 => 51,  189 => 65,  180 => 71,  176 => 70,  174 => 59,  170 => 69,  153 => 55,  140 => 47,  137 => 46,  132 => 56,  122 => 45,  112 => 36,  107 => 29,  101 => 27,  99 => 27,  95 => 26,  91 => 24,  83 => 25,  79 => 28,  58 => 15,  50 => 12,  45 => 11,  29 => 10,  25 => 3,  164 => 37,  156 => 77,  145 => 49,  139 => 44,  131 => 42,  127 => 47,  123 => 29,  114 => 33,  104 => 52,  96 => 40,  77 => 23,  74 => 21,  68 => 16,  60 => 28,  27 => 4,  66 => 16,  640 => 354,  632 => 348,  624 => 343,  615 => 336,  613 => 334,  607 => 330,  605 => 329,  602 => 328,  596 => 325,  593 => 324,  591 => 323,  588 => 322,  581 => 318,  576 => 316,  572 => 315,  569 => 314,  566 => 313,  563 => 311,  554 => 305,  545 => 299,  539 => 296,  530 => 290,  521 => 284,  516 => 281,  513 => 280,  506 => 274,  500 => 272,  493 => 269,  491 => 268,  485 => 264,  479 => 262,  472 => 259,  470 => 258,  465 => 255,  457 => 249,  449 => 244,  435 => 233,  429 => 229,  422 => 223,  416 => 221,  409 => 218,  407 => 217,  401 => 213,  395 => 211,  388 => 208,  386 => 207,  381 => 204,  375 => 199,  369 => 197,  362 => 194,  360 => 193,  355 => 190,  350 => 186,  344 => 183,  341 => 182,  335 => 179,  329 => 176,  326 => 175,  324 => 174,  320 => 172,  317 => 170,  311 => 166,  308 => 123,  300 => 119,  297 => 117,  293 => 156,  291 => 79,  284 => 75,  278 => 148,  271 => 106,  269 => 106,  264 => 67,  258 => 101,  245 => 93,  243 => 130,  238 => 127,  225 => 61,  212 => 84,  208 => 117,  203 => 78,  192 => 77,  188 => 48,  179 => 70,  166 => 57,  158 => 88,  141 => 45,  134 => 41,  124 => 46,  115 => 48,  109 => 57,  97 => 28,  80 => 24,  71 => 21,  62 => 19,  49 => 12,  35 => 7,  30 => 4,  63 => 18,  57 => 14,  54 => 12,  43 => 17,  31 => 8,  24 => 4,  21 => 2,  82 => 35,  73 => 22,  70 => 24,  64 => 15,  55 => 16,  52 => 15,  48 => 11,  46 => 11,  41 => 11,  37 => 8,  32 => 11,  22 => 2,  265 => 123,  259 => 100,  252 => 98,  250 => 97,  247 => 96,  241 => 112,  234 => 91,  232 => 122,  229 => 107,  227 => 62,  219 => 82,  213 => 81,  205 => 80,  201 => 79,  199 => 74,  196 => 77,  190 => 76,  186 => 84,  184 => 67,  181 => 82,  173 => 67,  169 => 39,  167 => 68,  162 => 54,  160 => 72,  157 => 52,  151 => 50,  149 => 47,  142 => 59,  135 => 42,  130 => 40,  128 => 38,  125 => 52,  117 => 34,  113 => 48,  108 => 45,  106 => 34,  103 => 43,  94 => 29,  89 => 26,  87 => 24,  84 => 25,  76 => 27,  72 => 27,  67 => 19,  65 => 18,  61 => 16,  56 => 16,  53 => 15,  51 => 20,  40 => 8,  34 => 12,  28 => 5,  26 => 3,  36 => 7,  23 => 3,  19 => 1,);
    }
}
