<?php

/* subscribe-buttons.twig */
class __TwigTemplate_226cb502ceaa36d3658c4e1bc82790a015e5a6639b97464b731dc289baa619d5 extends Twig_Template
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
        echo "<div class=\"ai1ec-subscribe-container btn-group pull-left\">
\t<a class=\"btn ai1ec-subscribe ai1ec-tooltip-trigger ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["button_classes"]) ? $context["button_classes"] : null), "html", null, true);
        echo "\"
\t\tdata-placement=\"bottom\"
\t\thref=\"";
        // line 4
        echo twig_escape_filter($this->env, ((isset($context["export_url"]) ? $context["export_url"] : null) . (isset($context["url_args"]) ? $context["url_args"] : null)), "html_attr");
        echo "\"
\t\ttitle=\"";
        // line 5
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Subscribe to this calendar in your personal calendar (iCal, Outlook, etc.)"), "html", null, true);
        echo "\" >
\t\t<i class=\"icon-plus\"></i>
\t\t";
        // line 7
        if ((!twig_test_empty((isset($context["subscribe_label"]) ? $context["subscribe_label"] : null)))) {
            // line 8
            echo "\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["subscribe_label"]) ? $context["subscribe_label"] : null), "html", null, true);
            echo "
\t\t";
        } else {
            // line 10
            echo "\t\t\t";
            if ((isset($context["is_filtered"]) ? $context["is_filtered"] : null)) {
                // line 11
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Subscribe to filtered calendar"), "html", null, true);
                echo "
\t\t\t";
            } else {
                // line 13
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Subscribe"), "html", null, true);
                echo "
\t\t\t";
            }
            // line 15
            echo "\t\t";
        }
        // line 16
        echo "\t</a>
\t";
        // line 17
        $context["url"] = (strtr((isset($context["export_url"]) ? $context["export_url"] : null), array(0 => "webcal://", 1 => "http://")) . (isset($context["url_args"]) ? $context["url_args"] : null));
        // line 18
        echo "\t<a class=\"btn ai1ec-subscribe-google ai1ec-tooltip-trigger ";
        echo twig_escape_filter($this->env, (isset($context["button_classes"]) ? $context["button_classes"] : null), "html", null, true);
        echo "\"
\t\ttarget=\"_blank\" data-placement=\"bottom\"
\t\thref=\"http://www.google.com/calendar/render?cid=";
        // line 20
        echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["url"]) ? $context["url"] : null)), "html_attr");
        echo "\"
\t\ttitle=\"";
        // line 21
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Subscribe to this calendar in your Google Calendar"), "html", null, true);
        echo "\" >
\t\t<i class=\"icon-google-plus icon-large\"></i>
\t\t";
        // line 23
        if ((!twig_test_empty((isset($context["google_label"]) ? $context["google_label"] : null)))) {
            // line 24
            echo "\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["google_label"]) ? $context["google_label"] : null), "html", null, true);
            echo "
\t\t";
        } else {
            // line 26
            echo "\t\t\t";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add to Google"), "html", null, true);
            echo "
\t\t";
        }
        // line 28
        echo "\t</a>
</div>
";
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
        return array (  90 => 26,  84 => 24,  77 => 21,  62 => 16,  47 => 11,  40 => 10,  33 => 6,  21 => 2,  96 => 28,  86 => 24,  82 => 23,  78 => 22,  75 => 18,  69 => 19,  89 => 23,  85 => 24,  81 => 23,  76 => 22,  70 => 20,  68 => 19,  61 => 17,  56 => 16,  52 => 15,  45 => 11,  39 => 8,  305 => 117,  301 => 115,  297 => 114,  295 => 113,  287 => 111,  280 => 110,  278 => 109,  268 => 105,  262 => 102,  257 => 100,  252 => 97,  249 => 96,  243 => 93,  238 => 91,  233 => 88,  230 => 87,  227 => 86,  225 => 85,  219 => 82,  215 => 81,  209 => 79,  204 => 77,  200 => 76,  195 => 73,  193 => 72,  184 => 67,  180 => 65,  177 => 61,  175 => 60,  166 => 57,  159 => 52,  155 => 50,  149 => 47,  144 => 46,  141 => 45,  139 => 44,  135 => 42,  130 => 40,  127 => 39,  125 => 38,  121 => 37,  107 => 29,  103 => 28,  99 => 29,  95 => 26,  92 => 25,  87 => 24,  83 => 23,  79 => 19,  73 => 20,  71 => 17,  67 => 18,  63 => 15,  55 => 13,  51 => 12,  41 => 10,  36 => 7,  30 => 6,  25 => 4,  35 => 7,  31 => 5,  65 => 17,  59 => 15,  53 => 13,  46 => 7,  42 => 6,  29 => 5,  26 => 3,  22 => 2,  48 => 10,  44 => 10,  38 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }
}
