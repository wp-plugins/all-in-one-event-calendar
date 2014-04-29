<?php

/* notification/admin.twig */
class __TwigTemplate_331cdabac328da20469e2616008dc56dce67c63be852b24506548f1b388569a9 extends Twig_Template
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
        echo "<div class=\"message ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\">
\t";
        // line 2
        if ((!array_key_exists("label", $context))) {
            // line 3
            echo "          ";
            $context["label"] = Ai1ec_I18n::__("All-in-One Event Calendar");
            // line 4
            echo "\t";
        }
        // line 5
        echo "\t<h3>";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "</h3>

\t<p>";
        // line 7
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "</p>

\t";
        // line 9
        if ((isset($context["button"]) ? $context["button"] : null)) {
            // line 10
            echo "\t\t<div>
\t\t\t<input type=\"button\" class=\"button ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["button"]) ? $context["button"] : null), "class"), "html", null, true);
            echo "\"
\t\t\t\tvalue=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["button"]) ? $context["button"] : null), "value"), "html", null, true);
            echo "\">
\t\t</div>
\t\t<p></p>
\t";
        }
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "notification/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  48 => 11,  45 => 10,  43 => 9,  38 => 7,  29 => 4,  26 => 3,  71 => 28,  58 => 17,  52 => 12,  49 => 13,  47 => 12,  40 => 8,  36 => 7,  32 => 5,  28 => 5,  24 => 2,  19 => 1,);
    }
}
