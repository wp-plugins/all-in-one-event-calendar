<?php

/* newsletter/template.twig */
class __TwigTemplate_aa1cd52527f5822b359026f77aafce7c8a8e1fe79ee0019ca41ace2363608780 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t\t<title>Events: ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n(twig_first($this->env, twig_get_array_keys_filter((isset($context["dates"]) ? $context["dates"] : null))), "F j, Y"), "html", null, true);
        echo " -
\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n(twig_last($this->env, twig_get_array_keys_filter((isset($context["dates"]) ? $context["dates"] : null))), "F j, Y"), "html", null, true);
        echo "
\t\t</title>
\t</head>
\t<body style=\"width: 100% !important; margin: 0; padding: 0;
\t\t-webkit-text-size-adjust: 100% ; -ms-text-size-adjust: 100%;\">
\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\"
\t\t\tstyle=\"background-color: #ffffff; line-height: 100% !important;
\t\t\t\twidth: 100% !important;\">
\t\t\t<tr>
\t\t\t\t<td align=\"center\">
\t\t\t\t\t<br />
\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" align=\"center\" border=\"0\"
\t\t\t\t\t\tstyle=\"margin: 0 auto; width: 100%; max-width: 600px;\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td valign=\"top\">
\t\t\t\t\t\t\t\t<p style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
\t\t\t\t\t\t\t\t\tfont-size: 17px; line-height: 24px; padding-left: 10px;
\t\t\t\t\t\t\t\t\tcolor: #666; text-align: left; padding-top: 3px;\">
\t\t\t\t\t\t\t\t\tEvents from <b>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n(twig_first($this->env, twig_get_array_keys_filter((isset($context["dates"]) ? $context["dates"] : null))), "F j, Y"), "html", null, true);
        echo "</b>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\ttill <b>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n(twig_last($this->env, twig_get_array_keys_filter((isset($context["dates"]) ? $context["dates"] : null))), "F j, Y"), "html", null, true);
        echo "</b>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td width=\"220\" align=\"left\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["logo_url"]) ? $context["logo_url"] : null), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\twidth=\"200\" height=\"87\" alt=\"Time.ly\" border=\"0\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<br />
";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
        foreach ($context['_seq'] as $context["date"] => $context["date_info"]) {
            // line 39
            echo "\t<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" align=\"center\" border=\"0\"
\t\tstyle=\"margin: 0 auto; width: 100%; max-width: 600px;\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td valign=\"middle\" align=\"center\" bgcolor=\"#c4c4C4\" height=\"26\"
\t\t\t\t\tstyle=\"border-radius: 5px;\">
\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "href"), "html_attr");
            echo "\"
\t\t\t\t\t  style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
\t\t\t\t\t\tfont-size: 12px; color: #ffffff;
\t\t\t\t\t\ttext-shadow: rgba(0, 0, 0, 0.4) 0px 1px 1px;
\t\t\t\t\t\ttext-decoration: none !important;\">
\t\t\t\t\t\t";
            // line 50
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n((isset($context["date"]) ? $context["date"] : null), "F j, Y (l)")), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr><td height=\"15\" style=\"font-size:0; overflow: hidden;\">&nbsp;</td></tr>
\t\t\t";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "events"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 56
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 57
                    echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"padding-left: 10px;\">
\t\t\t\t\t\t";
                    // line 60
                    echo "\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\" style=\"margin: 0;\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td width=\"90\" calign=\"top\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                    // line 65
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 66
                    echo $this->env->getExtension('ai1ec')->avatar_url((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "content_img", 2 => "category_avatar", 3 => "default_avatar"));
                    // line 71
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\twidth=\"90\" height=\"90\" alt=\"\" align=\"left\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"margin-right: 10px;\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td valign=\"top\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                    echo "\"
\t\t\t\t\t\t\t\t\t\t  style=\"font-weight: bold; font-size: 15px;
\t\t\t\t\t\t\t\t\t\t\tfont-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
\t\t\t\t\t\t\t\t\t\t\ttext-decoration: none !important; color: #3D6B99;\">
\t\t\t\t\t\t\t\t\t\t\t<span ";
                    // line 81
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "category_color_style"), "method");
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 82
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: bold; font-size: 13px;
\t\t\t\t\t\t\t\t\t\t\tfont-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
\t\t\t\t\t\t\t\t\t\t\tcolor: #666666; line-height: 22px;\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 89
                    echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null), "short");
                    echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                    // line 91
                    if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method")))) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: normal; font-size: 13px;
\t\t\t\t\t\t\t\t\t\t\t\tfont-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\tcolor: #666666; line-height: 22px;\">|
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 98
                    echo "\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 13px;
\t\t\t\t\t\t\t\t\t\t\tfont-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
\t\t\t\t\t\t\t\t\t\t\tcolor: #333333; line-height: 18px;\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 102
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "post_excerpt"), "method");
                    echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t";
                    // line 109
                    echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td height=\"15\" style=\"font-size:0; overflow: hidden;\">&nbsp;</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo " ";
                // line 115
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
            // line 116
            echo "\t\t</tbody>
\t</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo " ";
        // line 120
        echo "\t\t\t\t\t<br />
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "newsletter/template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 120,  216 => 118,  208 => 116,  201 => 115,  199 => 114,  188 => 109,  179 => 102,  173 => 98,  167 => 95,  162 => 92,  160 => 91,  155 => 89,  145 => 82,  141 => 81,  134 => 77,  126 => 71,  124 => 66,  121 => 65,  119 => 64,  113 => 60,  109 => 57,  104 => 56,  100 => 55,  92 => 50,  84 => 45,  76 => 39,  72 => 38,  63 => 31,  56 => 27,  51 => 25,  30 => 7,  46 => 15,  32 => 6,  26 => 6,  23 => 3,  48 => 16,  33 => 7,  28 => 5,  24 => 3,  41 => 12,  39 => 15,  37 => 9,  35 => 13,  31 => 11,  19 => 1,);
    }
}
