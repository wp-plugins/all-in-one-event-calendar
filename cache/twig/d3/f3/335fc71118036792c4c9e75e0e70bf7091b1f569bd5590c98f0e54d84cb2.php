<?php

/* saas-slim-layout.twig */
class __TwigTemplate_d3f3335fc71118036792c4c9e75e0e70bf7091b1f569bd5590c98f0e54d84cb2 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE 8]>
<html xmlns=\"http://www.w3.org/1999/xhtml\" class=\"ie8\" ";
        // line 3
        echo (isset($context["language"]) ? $context["language"] : null);
        echo ">
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns=\"http://www.w3.org/1999/xhtml\" ";
        // line 6
        echo (isset($context["language"]) ? $context["language"] : null);
        echo ">
<!--<![endif]-->
  <head>
    <meta http-equiv=\"Content-Type\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["html_type"]) ? $context["html_type"] : null), "html", null, true);
        echo "; charset=";
        echo twig_escape_filter($this->env, (isset($context["charset"]) ? $context["charset"] : null), "html", null, true);
        echo "\" />
    <title>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
        echo " &rsaquo; ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
    ";
        // line 11
        echo (isset($context["html_head"]) ? $context["html_head"] : null);
        echo "
  </head>
  <body class=\"login ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["body_class"]) ? $context["body_class"] : null), "html", null, true);
        echo "\">
    <div id=\"login\">
      <h1><a href=\"http://time.ly\" title=\"Powered by Time.ly\" tabindex=\"-1\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
        echo "</a></h1>
      ";
        // line 16
        echo (isset($context["body"]) ? $context["body"] : null);
        echo "
      <p id=\"backtoblog\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["base_title"]) ? $context["base_title"] : null), "html", null, true);
        echo "\">";
        echo (isset($context["base_text"]) ? $context["base_text"] : null);
        echo "</a></p>
      ";
        // line 18
        echo (isset($context["html_bfoot"]) ? $context["html_bfoot"] : null);
        echo "
      <div class=\"clear\"></div>
    </div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "saas-slim-layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  31 => 5,  83 => 33,  65 => 17,  59 => 21,  47 => 11,  41 => 10,  64 => 21,  60 => 20,  46 => 12,  28 => 4,  26 => 3,  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 26,  88 => 25,  85 => 24,  79 => 21,  75 => 20,  71 => 27,  61 => 16,  57 => 15,  53 => 18,  49 => 12,  42 => 10,  35 => 9,  32 => 7,  27 => 5,  23 => 3,  101 => 29,  94 => 39,  87 => 37,  81 => 22,  77 => 30,  67 => 18,  62 => 22,  56 => 19,  52 => 13,  50 => 16,  45 => 11,  38 => 7,  30 => 7,  24 => 2,  22 => 2,  36 => 4,  33 => 5,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
