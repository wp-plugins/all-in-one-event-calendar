<?php

/* contribution-buttons.twig */
class __TwigTemplate_0637d929bcaa80c8f95cc2e341066aa553f8bc8d62a627a097e42516253258f7 extends Twig_Template
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
            echo "\t<div class=\"ai1ec-btn-group ai1ec-contribution-buttons\">
\t\t";
            // line 3
            if ((isset($context["show_add_your_calendar"]) ? $context["show_add_your_calendar"] : null)) {
                // line 4
                echo "\t\t\t<a href=\"#ai1ec-submit-ics-modal\" class=\"ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs\"
\t\t\t\tdata-toggle=\"ai1ec-modal\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-plus\"></i>
\t\t\t\t";
                // line 7
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add Your Feed"), "html", null, true);
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
                    echo "\t\t\t<a href=\"#ai1ec-create-event-modal\" class=\"ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs\"
\t\t\t\tdata-toggle=\"ai1ec-modal\">
\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["create_event_url"]) ? $context["create_event_url"] : null), "html_attr");
                    echo "\" class=\"ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs\">
\t\t\t";
                }
                // line 17
                echo "\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-plus\"></i>
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
        return array (  63 => 21,  57 => 18,  54 => 17,  43 => 12,  31 => 7,  24 => 3,  21 => 2,  82 => 21,  73 => 18,  70 => 24,  64 => 15,  55 => 12,  52 => 11,  48 => 15,  46 => 8,  41 => 7,  37 => 10,  32 => 4,  22 => 2,  265 => 123,  259 => 120,  252 => 117,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 108,  229 => 107,  227 => 106,  219 => 100,  213 => 96,  205 => 93,  201 => 91,  199 => 90,  196 => 89,  190 => 86,  186 => 84,  184 => 83,  181 => 82,  173 => 79,  169 => 77,  167 => 76,  162 => 73,  160 => 72,  157 => 71,  151 => 69,  149 => 68,  142 => 63,  135 => 59,  130 => 56,  128 => 55,  125 => 54,  117 => 49,  113 => 48,  108 => 45,  106 => 44,  103 => 43,  94 => 39,  89 => 36,  87 => 35,  84 => 34,  76 => 30,  72 => 27,  67 => 23,  65 => 23,  61 => 14,  56 => 19,  53 => 18,  51 => 17,  40 => 11,  34 => 5,  28 => 3,  26 => 4,  36 => 4,  23 => 2,  19 => 1,);
    }
}
