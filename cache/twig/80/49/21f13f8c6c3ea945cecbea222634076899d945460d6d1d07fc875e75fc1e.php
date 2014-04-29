<?php

/* contribution-buttons.twig */
class __TwigTemplate_804921f13f8c6c3ea945cecbea222634076899d945460d6d1d07fc875e75fc1e extends Twig_Template
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
        if (((isset($context["show_add_your_calendar"]) ? $context["show_add_your_calendar"] : null) || (isset($context["show_post_your_event"]) ? $context["show_post_your_event"] : null))) {
            // line 2
            echo "\t<div class=\"btn-group\">
\t\t";
            // line 3
            if ((isset($context["show_add_your_calendar"]) ? $context["show_add_your_calendar"] : null)) {
                // line 4
                echo "\t\t\t<a href=\"#ai1ec-submit-ics-modal\" class=\"btn btn-primary btn-mini\"
\t\t\t\tdata-toggle=\"ai1ec_modal\">
\t\t\t\t<i class=\"icon-plus\"></i>
\t\t\t\t";
                // line 7
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add Your Calendar Feed"), "html", null, true);
                echo "
\t\t\t</a>
\t\t";
            }
            // line 10
            echo "\t\t";
            if ((isset($context["show_post_your_event"]) ? $context["show_post_your_event"] : null)) {
                // line 11
                echo "\t\t\t";
                if ((isset($context["show_front_end_create_form"]) ? $context["show_front_end_create_form"] : null)) {
                    // line 12
                    echo "\t\t\t<a href=\"#ai1ec-create-event-modal\" class=\"btn btn-primary btn-mini\"
\t\t\t\tdata-toggle=\"ai1ec_modal\">
\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["create_event_url"]) ? $context["create_event_url"] : null), "html_attr");
                    echo "\" class=\"btn btn-primary btn-mini\">
\t\t\t";
                }
                // line 17
                echo "\t\t\t\t<i class=\"icon-plus\"></i>
\t\t\t\t";
                // line 18
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Post Your Event"), "html", null, true);
                echo "
\t\t\t</a>
\t\t";
            }
            // line 21
            echo "\t</div>
";
        }
        // line 23
        echo "
";
        // line 24
        echo (isset($context["modals"]) ? $context["modals"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "contribution-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  54 => 17,  43 => 12,  37 => 10,  24 => 3,  90 => 26,  84 => 24,  77 => 21,  62 => 16,  47 => 11,  40 => 11,  33 => 6,  21 => 2,  96 => 28,  86 => 24,  82 => 23,  78 => 22,  75 => 18,  69 => 19,  89 => 23,  85 => 24,  81 => 23,  76 => 22,  70 => 24,  68 => 19,  61 => 17,  56 => 16,  52 => 15,  45 => 11,  39 => 8,  305 => 117,  301 => 115,  297 => 114,  295 => 113,  287 => 111,  280 => 110,  278 => 109,  268 => 105,  262 => 102,  257 => 100,  252 => 97,  249 => 96,  243 => 93,  238 => 91,  233 => 88,  230 => 87,  227 => 86,  225 => 85,  219 => 82,  215 => 81,  209 => 79,  204 => 77,  200 => 76,  195 => 73,  193 => 72,  184 => 67,  180 => 65,  177 => 61,  175 => 60,  166 => 57,  159 => 52,  155 => 50,  149 => 47,  144 => 46,  141 => 45,  139 => 44,  135 => 42,  130 => 40,  127 => 39,  125 => 38,  121 => 37,  107 => 29,  103 => 28,  99 => 29,  95 => 26,  92 => 25,  87 => 24,  83 => 23,  79 => 19,  73 => 20,  71 => 17,  67 => 23,  63 => 21,  55 => 13,  51 => 12,  41 => 10,  36 => 7,  30 => 6,  25 => 4,  35 => 7,  31 => 7,  65 => 17,  59 => 15,  53 => 13,  46 => 7,  42 => 6,  29 => 5,  26 => 4,  22 => 2,  48 => 15,  44 => 10,  38 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }
}
