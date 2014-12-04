<?php

/* ai1ecv-venue-details.twig */
class __TwigTemplate_f05703afef869c4fea0061567a42872d377423a41be579565d0cdf32260df05f extends Twig_Template
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
        echo "<div class=\"ai1ec-modal-header ";
        if ((isset($context["image"]) ? $context["image"] : null)) {
            echo "ai1ec-with-venue-image";
        }
        echo "\"
\t";
        // line 2
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 3
            echo "\t\tstyle=\"background-image: url(";
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html_attr");
            echo ");\"
\t";
        }
        // line 5
        echo "\t>
\t<div class=\"ai1ec-title-shading\"></div>
\t<div class=\"ai1ec-modal-header-inner\">
\t\t<button type=\"button\" class=\"ai1ec-close\" data-dismiss=\"ai1ec-modal\">×</button>
\t\t<h2>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h2>
\t</div>
</div>

<div class=\"ai1ec-modal-body\">

\t<div class=\"ai1ec-row\">
\t\t<div class=\"ai1ec-col-sm-6 ai1ec-col-sm-push-6\">
\t\t\t";
        // line 17
        if ((!twig_test_empty((isset($context["map_address"]) ? $context["map_address"] : null)))) {
            // line 18
            echo "\t\t\t\t<div id=\"ai1ecv_map_container\"
\t\t\t\t\tdata-address=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["map_address"]) ? $context["map_address"] : null), "html_attr");
            echo "\"></div>
\t\t\t";
        }
        // line 21
        echo "
\t\t\t<ul class=\"ai1ec-fa-ul\">
\t\t\t\t";
        // line 23
        if ((!twig_test_empty((isset($context["address"]) ? $context["address"] : null)))) {
            // line 24
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-map-marker\"></i>
\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t<strong>";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "</strong><br>
\t\t\t\t\t\t\t";
            // line 30
            echo "\t\t\t\t\t\t\t";
            echo (isset($context["address"]) ? $context["address"] : null);
            echo "
\t\t\t\t\t\t</address>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 34
        echo "
\t\t\t\t";
        // line 35
        if ((!twig_test_empty((isset($context["contact_name"]) ? $context["contact_name"] : null)))) {
            // line 36
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-user\"></i>
\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t<strong>";
            // line 39
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Contact:"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, (isset($context["contact_name"]) ? $context["contact_name"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t</address>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 43
        echo "
\t\t\t\t";
        // line 44
        if ((!twig_test_empty((isset($context["email"]) ? $context["email"] : null)))) {
            // line 45
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-envelope ai1ec-fa-li\"></i>
\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t<a href=\"mailto:";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html_attr");
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</address>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 54
        echo "
\t\t\t\t";
        // line 55
        if ((!twig_test_empty((isset($context["phone"]) ? $context["phone"] : null)))) {
            // line 56
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-phone\"></i>
\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t</address>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 63
        echo "\t\t\t</ul>

\t\t</div>
\t\t<div class=\"ai1ec-col-sm-6 ai1ec-col-sm-pull-6\">

\t\t\t";
        // line 68
        if ((!twig_test_empty((isset($context["description"]) ? $context["description"] : null)))) {
            // line 69
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</p>
\t\t\t";
        }
        // line 71
        echo "
\t\t\t";
        // line 72
        if ((((!twig_test_empty((isset($context["capacity"]) ? $context["capacity"] : null))) || (!twig_test_empty((isset($context["handicap"]) ? $context["handicap"] : null)))) || (!twig_test_empty((isset($context["parking"]) ? $context["parking"] : null))))) {
            // line 73
            echo "\t\t\t\t<div class=\"ai1ec-alert ai1ec-alert-info\">
\t\t\t\t\t<ul class=\"ai1ec-fa-ul\">

\t\t\t\t\t\t";
            // line 76
            if ((!twig_test_empty((isset($context["capacity"]) ? $context["capacity"] : null)))) {
                // line 77
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-users\"></i>
\t\t\t\t\t\t\t\t";
                // line 79
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Seating capacity:"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["capacity"]) ? $context["capacity"] : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 82
            echo "
\t\t\t\t\t\t";
            // line 83
            if ((!twig_test_empty((isset($context["handicap"]) ? $context["handicap"] : null)))) {
                // line 84
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-wheelchair\"></i>
\t\t\t\t\t\t\t\t";
                // line 86
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Handicap accessible"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 89
            echo "
\t\t\t\t\t\t";
            // line 90
            if ((!twig_test_empty((isset($context["parking"]) ? $context["parking"] : null)))) {
                // line 91
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-truck\"></i>
\t\t\t\t\t\t\t\t";
                // line 93
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Parking:"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["parking"]) ? $context["parking"] : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 96
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
        }
        // line 100
        echo "
\t\t</div>
\t</div>

</div>

";
        // line 106
        if (((!twig_test_empty((isset($context["email"]) ? $context["email"] : null))) || (!twig_test_empty((isset($context["url"]) ? $context["url"] : null))))) {
            // line 107
            echo "\t<div class=\"ai1ec-modal-footer ai1ec-text-center\">
\t\t";
            // line 108
            if ((!twig_test_empty((isset($context["email"]) ? $context["email"] : null)))) {
                // line 109
                echo "\t\t\t<a href=\"mailto:";
                echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html_attr");
                echo "\"
\t\t\t\tclass=\"ai1ec-btn ai1ec-btn-info ai1ec-btn-lg\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-envelope ai1ec-fa-fw\"></i>
\t\t\t\t";
                // line 112
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Email Venue"), "html", null, true);
                echo "
\t\t\t</a>
\t\t";
            }
            // line 115
            echo "
\t\t";
            // line 116
            if ((!twig_test_empty((isset($context["url"]) ? $context["url"] : null)))) {
                // line 117
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "\" target=\"_blank\"
\t\t\t\tclass=\"ai1ec-btn ai1ec-btn-info ai1ec-btn-lg\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-link ai1ec-fa-fw\"></i>
\t\t\t\t";
                // line 120
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Visit Website"), "html", null, true);
                echo "
\t\t\t</a>
\t\t";
            }
            // line 123
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "ai1ecv-venue-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 123,  259 => 120,  252 => 117,  250 => 116,  247 => 115,  241 => 112,  234 => 109,  232 => 108,  229 => 107,  227 => 106,  219 => 100,  213 => 96,  205 => 93,  201 => 91,  199 => 90,  196 => 89,  190 => 86,  186 => 84,  184 => 83,  181 => 82,  173 => 79,  169 => 77,  167 => 76,  162 => 73,  160 => 72,  157 => 71,  151 => 69,  149 => 68,  142 => 63,  135 => 59,  130 => 56,  128 => 55,  125 => 54,  117 => 49,  113 => 48,  108 => 45,  106 => 44,  103 => 43,  94 => 39,  89 => 36,  87 => 35,  84 => 34,  76 => 30,  72 => 27,  67 => 24,  65 => 23,  61 => 21,  56 => 19,  53 => 18,  51 => 17,  40 => 9,  34 => 5,  28 => 3,  26 => 2,  36 => 4,  23 => 2,  19 => 1,);
    }
}
