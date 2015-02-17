<?php

/* mailchimp-widget.twig */
class __TwigTemplate_4b548023eee8659ad1836d2185aae4bf5e8f0ebe217bd262863e58fa4cf1da34 extends Twig_Template
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
        echo (isset($context["before_widget"]) ? $context["before_widget"] : null);
        echo "

";
        // line 3
        if ((!twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
            // line 4
            echo "\t";
            echo (((isset($context["before_title"]) ? $context["before_title"] : null) . (isset($context["title"]) ? $context["title"] : null)) . (isset($context["after_title"]) ? $context["after_title"] : null));
            echo "
";
        }
        // line 6
        echo "
<div class=\"timely ai1ec-mailchimp-widget-view ai1ec-clearfix\">
\t<form class=\"ai1ec_mailchimp_newsletter\">
\t\t<input required=\"required\" class=\"ai1ec_mailchimp_subscribe_email\" type=\"email\" value=\"\" placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Your email here"), "html", null, true);
        echo "\"/>
\t\t<input class=\"ai1ec_mailchimp_subscribe\" type=\"submit\" value=\"Subscribe\">
\t\t<div class='ai1ec_result'></div>
\t</form> 
</div>

";
        // line 15
        echo (isset($context["after_widget"]) ? $context["after_widget"] : null);
    }

    public function getTemplateName()
    {
        return "mailchimp-widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  32 => 6,  26 => 4,  23 => 3,  48 => 16,  33 => 7,  28 => 5,  24 => 3,  41 => 12,  39 => 15,  37 => 9,  35 => 13,  31 => 11,  19 => 1,);
    }
}
