<?php

/* ai1ecm_subscribe_button.twig */
class __TwigTemplate_987d741a43429adb59c06db9f8571972646cd1856c23b384722e76d2f34bddf8 extends Twig_Template
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
        echo "<div class=\"ai1ec-btn-group-vertical ai1ec-clearfix\">
\t<div class=\"ai1ec-subscribe-container ai1ec-btn-group ai1ec-pull-left\">
\t\t<a class=\"ai1ec-btn ai1ec-btn-default ai1ec-subscribe-mail\" href=\"#ai1ec_subscribe_email_modal\" data-toggle=\"ai1ec-modal\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\">
\t\t    <i class=\"ai1ec-fa ai1ec-fa-envelope ai1ec-fa-fw\"></i>
\t\t    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "
\t\t</a>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "ai1ecm_subscribe_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  48 => 16,  33 => 7,  28 => 5,  24 => 4,  41 => 12,  39 => 15,  37 => 14,  35 => 13,  31 => 11,  19 => 1,);
    }
}
