<?php

/* venues-image.twig */
class __TwigTemplate_bd58105129520dc62d0ed213bddf5dc0730cd1c01a6fe246415e27736cfa717f extends Twig_Template
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
        echo "
";
        // line 2
        if ((isset($context["edit"]) ? $context["edit"] : null)) {
            // line 3
            echo "
\t<tr class=\"form-field\">
\t\t<th scope=\"row\" valign=\"top\">
\t\t\t<label for=\"tag-color\">
\t\t\t\t";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["section_name"]) ? $context["section_name"] : null), "html", null, true);
            echo "
\t\t\t</label>
\t\t</th>
\t\t<td>

\t\t\t<img src='";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["image_src"]) ? $context["image_src"] : null), "html", null, true);
            echo "' ";
            echo twig_escape_filter($this->env, (isset($context["image_style"]) ? $context["image_style"] : null), "html", null, true);
            echo " alt='' id='ai1ec_venue-image-preview' />
\t\t\t<input type=\"hidden\" name=\"ai1ec_venue-image-url\" id=\"ai1ec_venue-image-url\" value=\"\">
\t\t\t<input class=\"button at-upload_image_button\" type=\"button\" id='ai1ec_venue-image-uploader' value=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "\">

\t\t\t";
            // line 16
            if ((isset($context["image_src"]) ? $context["image_src"] : null)) {
                // line 17
                echo "\t\t\t<p>
\t\t\t\t<input type=\"checkbox\" style=\"width:auto;\" name=\"ai1ec_venue-image-url-remove\" id=\"ai1ec_venue-image-url-remove\" value=\"1\" />
\t\t\t\t<label for=\"ai1ec_venue-image-url-remove\">";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["remove_label"]) ? $context["remove_label"] : null), "html", null, true);
                echo "</label>
\t\t\t</p>
\t\t\t";
            }
            // line 22
            echo "
\t\t\t<div class=\"desc-field\">
\t\t\t\t<p class=\"description\">
\t\t\t\t\t";
            // line 25
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t</td>
\t</tr>

";
        } else {
            // line 32
            echo "\t<div class=\"form-field\">
\t\t<label for=\"ai1ec_image_field_id\">
\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["section_name"]) ? $context["section_name"] : null), "html", null, true);
            echo "
\t\t</label>

\t\t<img src='";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["image_src"]) ? $context["image_src"] : null), "html", null, true);
            echo "' ";
            echo twig_escape_filter($this->env, (isset($context["image_style"]) ? $context["image_style"] : null), "html", null, true);
            echo " alt='' id='ai1ec_venue-image-preview' />
\t\t<input type=\"hidden\" name=\"ai1ec_venue-image-url\" id=\"ai1ec_venue-image-url\" value=\"\">
\t\t<input class=\"button at-upload_image_button\" type=\"button\" id='ai1ec_venue-image-uploader' value=\"";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "\">

\t\t<div class=\"desc-field\">
\t\t\t<p class=\"description\">
\t\t\t\t";
            // line 43
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
\t\t\t</p>
\t\t</div>
\t</div>

";
        }
    }

    public function getTemplateName()
    {
        return "venues-image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 43,  94 => 39,  87 => 37,  81 => 34,  77 => 32,  67 => 25,  62 => 22,  56 => 19,  52 => 17,  50 => 16,  45 => 14,  38 => 12,  30 => 7,  24 => 3,  22 => 2,  36 => 9,  33 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
