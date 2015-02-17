<?php

/* ai1ecm_modal_subscription.twig */
class __TwigTemplate_b30ae319e2ce750963c898fc4148616779dcd95284c94602aec7a63a2a9aedfb extends Twig_Template
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
        echo "<div class='alerts'></div>

<div class='ai1ec_email_container form-horizontal'
     data-event_id='";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["event_id"]) ? $context["event_id"] : null), "html", null, true);
        echo "'
     data-event_instance='";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["event_instance"]) ? $context["event_instance"] : null), "html", null, true);
        echo "'>
    <p>
        ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["intro_text"]) ? $context["intro_text"] : null), "html", null, true);
        echo "
    </p>

    <div class='control-group'>
        <label class='control-label' for='ai1ec_email_subscribe'>
            ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["label_text"]) ? $context["label_text"] : null), "html", null, true);
        echo "
        </label>

        <div class='controls'>
            <input id='ai1ec_email_subscribe' name='ai1ec_email_subscribe' placeholder='";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["input_placeholder"]) ? $context["input_placeholder"] : null), "html", null, true);
        echo "' value=\"";
        echo twig_escape_filter($this->env, (isset($context["input_value"]) ? $context["input_value"] : null), "html", null, true);
        echo "\" />
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ai1ecm_modal_subscription.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  33 => 7,  28 => 5,  24 => 4,  41 => 12,  39 => 15,  37 => 14,  35 => 13,  31 => 11,  19 => 1,);
    }
}
