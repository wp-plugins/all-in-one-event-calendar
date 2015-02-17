<?php

/* saas-support/page.twig */
class __TwigTemplate_d17e18699bb993718ba965d9361d31c10b44921f8fe8eb0781ccafb2fee8fd68 extends Twig_Template
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
        echo "<div class=\"wrap timely\">
\t";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->screen_icon(), "html", null, true);
        echo "
\t<h2>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>
\t<div id=\"poststuff\">
\t\t<div class=\"ai1ec-alert
\t\t\t";
        // line 6
        if ((!$this->getAttribute((isset($context["submit_result"]) ? $context["submit_result"] : null), "visible"))) {
            echo "ai1ec-hidden";
        }
        // line 7
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submit_result"]) ? $context["submit_result"] : null), "status"), "html", null, true);
        echo " timely\">
\t\t\t<button type=\"button\" class=\"ai1ec-close\" data-dismiss=\"ai1ec-alert\">
\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t</button>
\t\t\t";
        // line 11
        echo $this->getAttribute((isset($context["submit_result"]) ? $context["submit_result"] : null), "message");
        echo "
\t\t</div>
\t\t<form method=\"post\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\">
\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->wp_nonce_field($this->getAttribute((isset($context["nonce"]) ? $context["nonce"] : null), "action"), $this->getAttribute((isset($context["nonce"]) ? $context["nonce"] : null), "name"), $this->getAttribute((isset($context["nonce"]) ? $context["nonce"] : null), "referrer")), "html", null, true);
        echo "
\t\t\t<div class=\"metabox-holder\">
\t\t\t\t<div class=\"post-box-container column-1-ai1ec-support left-side\">
\t\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute((isset($context["support_metabox"]) ? $context["support_metabox"] : null), "screen"), $this->getAttribute((isset($context["support_metabox"]) ? $context["support_metabox"] : null), "action"), $this->getAttribute((isset($context["support_metabox"]) ? $context["support_metabox"] : null), "object")), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"post-box-container column-2-ai1ec-support right-side ai1ec-forum-metabox\">
\t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute((isset($context["questions_metabox"]) ? $context["questions_metabox"] : null), "screen"), $this->getAttribute((isset($context["questions_metabox"]) ? $context["questions_metabox"] : null), "action"), $this->getAttribute((isset($context["questions_metabox"]) ? $context["questions_metabox"] : null), "object")), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>";
        // line 25
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "saas-support/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  44 => 11,  73 => 18,  31 => 5,  83 => 33,  65 => 20,  59 => 17,  47 => 11,  41 => 10,  64 => 21,  60 => 20,  46 => 12,  28 => 4,  26 => 3,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 26,  88 => 25,  85 => 24,  79 => 21,  75 => 20,  71 => 27,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  42 => 10,  35 => 9,  32 => 6,  27 => 5,  23 => 3,  101 => 29,  94 => 39,  87 => 37,  81 => 22,  77 => 30,  67 => 18,  62 => 22,  56 => 19,  52 => 13,  50 => 16,  45 => 11,  38 => 7,  30 => 7,  24 => 2,  22 => 2,  36 => 7,  33 => 5,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
