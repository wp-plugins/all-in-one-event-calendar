<?php

/* activate/form.twig */
class __TwigTemplate_49294ad9cd36d21fe430ba084a63deb5d45e92fe34f3684d5fd5e04e7ceb6b55 extends Twig_Template
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
        echo "<form name=\"resetpassform\" id=\"resetpassform\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action_url"]) ? $context["action_url"] : null), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"off\">
    <input type=\"hidden\" name=\"timely_email\"  id=\"timely_email\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\" autocomplete=\"off\" />
    <input type=\"hidden\" value=\"timely_token\" id=\"timely_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "\" autocomplete=\"off\" />

    <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "submit"), "html", null, true);
        echo "</h2>
      
    <p>";
        // line 7
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</p>

    <br class=\"clear\" />

    <p>
        <label for=\"pass1\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "new_pass"), "html", null, true);
        echo "<br />
        <input type=\"password\" name=\"pass1\" id=\"pass1\" class=\"input\" size=\"20\" value=\"\" autocomplete=\"off\" /></label>
    </p>
    <p>
        <label for=\"pass2\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "repeat_pass"), "html", null, true);
        echo "<br />
        <input type=\"password\" name=\"pass2\" id=\"pass2\" class=\"input\" size=\"20\" value=\"\" autocomplete=\"off\" /></label>
    </p>

    <div id=\"pass-strength-result\" class=\"hide-if-no-js\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "strength"), "html", null, true);
        echo "</div>
    <p class=\"description indicator-hint\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "strength_hint"), "html", null, true);
        echo "</p>

    <br class=\"clear\" />

    <p class=\"submit\"><input type=\"submit\" name=\"wp-submit\" id=\"wp-submit\" class=\"button button-primary button-large\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "submit"), "html", null, true);
        echo "\" /></p>
</form>

";
    }

    public function getTemplateName()
    {
        return "activate/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  60 => 20,  46 => 12,  28 => 3,  26 => 3,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 26,  88 => 25,  85 => 24,  79 => 21,  75 => 20,  71 => 25,  61 => 15,  57 => 14,  53 => 16,  49 => 12,  42 => 10,  35 => 8,  32 => 7,  27 => 5,  23 => 3,  101 => 29,  94 => 39,  87 => 37,  81 => 22,  77 => 32,  67 => 18,  62 => 22,  56 => 19,  52 => 17,  50 => 16,  45 => 11,  38 => 7,  30 => 7,  24 => 2,  22 => 2,  36 => 4,  33 => 5,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
