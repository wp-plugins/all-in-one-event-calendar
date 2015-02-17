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
                echo "\t\t\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs\"
\t\t\t\tdata-toggle=\"ai1ec-modal\" data-target=\"#ai1ec-submit-ics-modal\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-plus\"></i>
\t\t\t\t";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["add_your_feed_button"]) ? $context["add_your_feed_button"] : null), "html", null, true);
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
                    echo "\t\t\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs\"
\t\t\t\tdata-toggle=\"ai1ec-modal\" data-target=\"#ai1ec-create-event-modal\">
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
                echo twig_escape_filter($this->env, (isset($context["post_your_event_button"]) ? $context["post_your_event_button"] : null), "html", null, true);
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
        return array (  43 => 12,  73 => 18,  64 => 15,  55 => 12,  88 => 23,  79 => 23,  75 => 22,  68 => 20,  57 => 18,  118 => 43,  96 => 33,  85 => 22,  69 => 20,  60 => 16,  58 => 13,  49 => 9,  36 => 10,  204 => 84,  196 => 81,  177 => 76,  171 => 73,  165 => 69,  163 => 63,  158 => 61,  154 => 60,  150 => 59,  146 => 58,  142 => 57,  136 => 56,  130 => 54,  105 => 36,  101 => 34,  93 => 42,  87 => 29,  81 => 24,  74 => 32,  67 => 23,  65 => 19,  59 => 18,  53 => 14,  44 => 8,  25 => 3,  21 => 2,  77 => 34,  70 => 24,  62 => 21,  54 => 17,  50 => 15,  29 => 6,  40 => 11,  38 => 5,  27 => 7,  218 => 120,  216 => 118,  208 => 116,  201 => 115,  199 => 82,  188 => 109,  179 => 102,  173 => 98,  167 => 95,  162 => 92,  160 => 91,  155 => 89,  145 => 82,  141 => 81,  134 => 77,  126 => 71,  124 => 66,  121 => 65,  119 => 64,  113 => 53,  109 => 57,  104 => 56,  100 => 55,  92 => 32,  84 => 45,  76 => 19,  72 => 21,  63 => 21,  56 => 17,  51 => 10,  30 => 7,  46 => 15,  32 => 8,  26 => 4,  23 => 2,  48 => 15,  33 => 7,  28 => 5,  24 => 3,  41 => 11,  39 => 10,  37 => 10,  35 => 5,  31 => 7,  19 => 1,);
    }
}
