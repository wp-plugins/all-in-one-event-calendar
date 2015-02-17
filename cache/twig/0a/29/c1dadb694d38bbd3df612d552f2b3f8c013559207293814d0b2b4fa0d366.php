<?php

/* venues.twig */
class __TwigTemplate_0a29c1dadb694d38bbd3df612d552f2b3f8c013559207293814d0b2b4fa0d366 extends Twig_Template
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
        $context["opener"] = "";
        // line 2
        $context["closer"] = "";
        // line 3
        $context["openerh"] = "";
        // line 4
        $context["closerh"] = "";
        // line 5
        if (((isset($context["type"]) ? $context["type"] : null) == "tr")) {
            // line 6
            echo " ";
            $context["opener"] = "<td>";
            // line 7
            echo " ";
            $context["closer"] = "</td>";
            // line 8
            echo " ";
            $context["openerh"] = "<th scope=\"row\">";
            // line 9
            echo " ";
            $context["closerh"] = "</th>";
        }
        // line 10
        echo " 
<";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " class=\"form-field\">
\t";
        // line 12
        echo (isset($context["openerh"]) ? $context["openerh"] : null);
        echo "
\t<label for=\"ai1ec_address\"> ";
        // line 13
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Address:"), "html", null, true);
        echo " </label> 
\t";
        // line 14
        echo (isset($context["closerh"]) ? $context["closerh"] : null);
        echo "
\t";
        // line 15
        echo (isset($context["opener"]) ? $context["opener"] : null);
        echo "
\t<input
\t\ttype='text' id='ai1ec_address' name='ai1ec_address'
\t\tvalue=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["address"]) ? $context["address"] : null), "html", null, true);
        echo "\" />
\t";
        // line 19
        echo (isset($context["closer"]) ? $context["closer"] : null);
        echo "
</";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ">
";
        // line 21
        if (((isset($context["type"]) ? $context["type"] : null) == "div")) {
            // line 22
            echo "<table>
";
        }
        // line 24
        echo "\t<tr>
\t\t";
        // line 25
        echo (isset($context["openerh"]) ? $context["openerh"] : null);
        echo "
\t\t<label for=\"ai1ec_google_map\"> ";
        // line 26
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Show Google Map"), "html", null, true);
        echo " </label>
\t\t";
        // line 27
        echo (isset($context["closerh"]) ? $context["closerh"] : null);
        echo "
\t\t<td><input type=\"checkbox\" value=\"1\" name=\"ai1ec_google_map\"
\t\t\tid=\"ai1ec_google_map\" ";
        // line 29
        if ((isset($context["google_map"]) ? $context["google_map"] : null)) {
            echo " checked=\"true\" ";
        }
        echo "></td>
\t</tr>
";
        // line 31
        if (((isset($context["type"]) ? $context["type"] : null) == "div")) {
            // line 32
            echo "</table>
";
        }
        // line 34
        echo "<";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " class=\"form-field\">
\t";
        // line 35
        echo (isset($context["openerh"]) ? $context["openerh"] : null);
        echo "
\t<label for=\"ai1ec_longitude\"> ";
        // line 36
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Longitude"), "html", null, true);
        echo " </label> 
\t";
        // line 37
        echo (isset($context["closerh"]) ? $context["closerh"] : null);
        echo "
\t";
        // line 38
        echo (isset($context["opener"]) ? $context["opener"] : null);
        echo "
\t<input
\t\ttype=\"text\" class=\"longitude coordinates\" name=\"ai1ec_longitude\"
\t\tid=\"ai1ec_longitude\" class=\"ai1ec-form-control\"
\t\tvalue=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : null), "html", null, true);
        echo "\">
\t";
        // line 43
        echo (isset($context["closer"]) ? $context["closer"] : null);
        echo "
</";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ">
<";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " class=\"form-field\">
\t";
        // line 46
        echo (isset($context["openerh"]) ? $context["openerh"] : null);
        echo "
\t<label for=\"ai1ec_latitude\"> ";
        // line 47
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Latitude"), "html", null, true);
        echo " </label>
\t";
        // line 48
        echo (isset($context["closerh"]) ? $context["closerh"] : null);
        echo "
\t";
        // line 49
        echo (isset($context["opener"]) ? $context["opener"] : null);
        echo "
\t <input
\t\ttype=\"text\" class=\"latitude coordinates\" name=\"ai1ec_latitude\"
\t\tid=\"ai1ec_latitude\" class=\"ai1ec-form-control\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : null), "html", null, true);
        echo "\">
\t";
        // line 53
        echo (isset($context["closer"]) ? $context["closer"] : null);
        echo "
</";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " >
<";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " class=\"form-field\">
\t";
        // line 56
        echo (isset($context["openerh"]) ? $context["openerh"] : null);
        echo "
\t\t<div>Google map</div>
\t";
        // line 58
        echo (isset($context["closerh"]) ? $context["closerh"] : null);
        echo "
\t";
        // line 59
        echo (isset($context["opener"]) ? $context["opener"] : null);
        echo "
\t<div class=\"ai1ec_box_map\" >
\t\t<div id=\"ai1ec_map_canvas\"></div>
\t</div>
\t";
        // line 63
        echo (isset($context["closer"]) ? $context["closer"] : null);
        echo "
</";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ">
<";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " class=\"form-field\">
\t";
        // line 66
        echo (isset($context["openerh"]) ? $context["openerh"] : null);
        echo "
\t<label for=\"ai1ecv_venue-description\"> ";
        // line 67
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Description:"), "html", null, true);
        echo " </label>
\t";
        // line 68
        echo (isset($context["closerh"]) ? $context["closerh"] : null);
        echo "
\t";
        // line 69
        echo (isset($context["opener"]) ? $context["opener"] : null);
        echo "
\t<textarea name='ai1ecv_venue-description'>";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
        echo "</textarea>
\t";
        // line 71
        echo (isset($context["closer"]) ? $context["closer"] : null);
        echo "
</";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ">

<";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " class=\"form-field\">
\t";
        // line 75
        echo (isset($context["openerh"]) ? $context["openerh"] : null);
        echo "
\t<label for=\"ai1ecv_venue-contact-name\"> ";
        // line 76
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Contact name:"), "html", null, true);
        echo " </label>
\t";
        // line 77
        echo (isset($context["closerh"]) ? $context["closerh"] : null);
        echo "
\t";
        // line 78
        echo (isset($context["opener"]) ? $context["opener"] : null);
        echo "
\t<input type='text' name='ai1ecv_venue-contact-name'
\t\tvalue=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["contact_name"]) ? $context["contact_name"] : null), "html", null, true);
        echo "\" />
\t";
        // line 81
        echo (isset($context["closer"]) ? $context["closer"] : null);
        echo "
</";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ">

<";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " class=\"form-field\">
\t";
        // line 85
        echo (isset($context["openerh"]) ? $context["openerh"] : null);
        echo "
\t<label for=\"ai1ecv_venue-phone\"> ";
        // line 86
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Phone:"), "html", null, true);
        echo " </label>
\t";
        // line 87
        echo (isset($context["closerh"]) ? $context["closerh"] : null);
        echo "
\t";
        // line 88
        echo (isset($context["opener"]) ? $context["opener"] : null);
        echo "
\t<input
\t\ttype='text' name='ai1ecv_venue-phone' value=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true);
        echo "\" />
\t";
        // line 91
        echo (isset($context["closer"]) ? $context["closer"] : null);
        echo "
</";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ">

<";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " class=\"form-field\">
\t";
        // line 95
        echo (isset($context["openerh"]) ? $context["openerh"] : null);
        echo "
\t<label for=\"ai1ecv_venue-email\"> ";
        // line 96
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Email:"), "html", null, true);
        echo " </label> 
\t";
        // line 97
        echo (isset($context["closerh"]) ? $context["closerh"] : null);
        echo "
\t";
        // line 98
        echo (isset($context["opener"]) ? $context["opener"] : null);
        echo "
\t<input
\t\ttype='text' name='ai1ecv_venue-email' value=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\" />
\t";
        // line 101
        echo (isset($context["closer"]) ? $context["closer"] : null);
        echo "
</";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ">

<";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " class=\"form-field\">
\t";
        // line 105
        echo (isset($context["openerh"]) ? $context["openerh"] : null);
        echo "
\t<label for=\"ai1ecv_venue-url\"> ";
        // line 106
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("External url:"), "html", null, true);
        echo " </label>
\t";
        // line 107
        echo (isset($context["closerh"]) ? $context["closerh"] : null);
        echo "
\t";
        // line 108
        echo (isset($context["opener"]) ? $context["opener"] : null);
        echo "
\t<input
\t\ttype='text' name='ai1ecv_venue-url' value=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" />
\t";
        // line 111
        echo (isset($context["closer"]) ? $context["closer"] : null);
        echo "
</";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ">

<";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " class=\"form-field\">
\t";
        // line 115
        echo (isset($context["openerh"]) ? $context["openerh"] : null);
        echo "
\t<label for=\"ai1ecv_venue-capacity\"> ";
        // line 116
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Seating capacity:"), "html", null, true);
        echo " </label>
\t";
        // line 117
        echo (isset($context["closerh"]) ? $context["closerh"] : null);
        echo "
\t";
        // line 118
        echo (isset($context["opener"]) ? $context["opener"] : null);
        echo "
\t<input type='text' name='ai1ecv_venue-capacity' value=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["capacity"]) ? $context["capacity"] : null), "html", null, true);
        echo "\" />
\t";
        // line 120
        echo (isset($context["closer"]) ? $context["closer"] : null);
        echo "
</";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ">

<";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " class=\"form-field\">
\t";
        // line 124
        echo (isset($context["openerh"]) ? $context["openerh"] : null);
        echo "
\t<label for=\"ai1ecv_venue-handicap\"> ";
        // line 125
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Handicap Accessible:"), "html", null, true);
        echo " </label>
\t";
        // line 126
        echo (isset($context["closerh"]) ? $context["closerh"] : null);
        echo "
\t";
        // line 127
        echo (isset($context["opener"]) ? $context["opener"] : null);
        echo "
\t<input type='checkbox' name='ai1ecv_venue-handicap' value=\"1\"
\t";
        // line 129
        if ((isset($context["handicap"]) ? $context["handicap"] : null)) {
            echo " checked=\"true\" ";
        }
        echo " />
\t";
        // line 130
        echo (isset($context["closer"]) ? $context["closer"] : null);
        echo "
</";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " >

\t<";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " class=\"form-field\">
\t\t";
        // line 134
        echo (isset($context["openerh"]) ? $context["openerh"] : null);
        echo "
\t\t<label for=\"ai1ecv_venue-parking\"> ";
        // line 135
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Parking:"), "html", null, true);
        echo " </label>
\t\t";
        // line 136
        echo (isset($context["closerh"]) ? $context["closerh"] : null);
        echo "
\t\t";
        // line 137
        echo (isset($context["opener"]) ? $context["opener"] : null);
        echo "
\t\t<textarea name='ai1ecv_venue-parking'>";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["parking"]) ? $context["parking"] : null), "html", null, true);
        echo "</textarea>
\t\t";
        // line 139
        echo (isset($context["closer"]) ? $context["closer"] : null);
        echo "
\t</";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo ">
\t";
        // line 141
        echo (isset($context["extra_fields"]) ? $context["extra_fields"] : null);
        echo "
\t<style type=\"text/css\">
.ai1ec-geo-ac-results-not-ready {
\tvisibility: hidden;
}

.ai1ec-geo-ac-results img {
\tfloat: left;
\tmargin-right: 5px;
}

.ai1ec-geo-ac-results .ai1ec-dropdown-menu {
\tdisplay: block;
\twidth: 275px;
\tbackground-color: #FFFFFF;
}

.ai1ec-geo-ac-results .ai1ec-dropdown-menu li {
\tclear: left;
\tcolor: #333333;
\tcursor: pointer;
\tmargin: 2px 0;
\tpadding: 0 5px;
}

.ai1ec-geo-ac-results .ai1ec-dropdown-menu li:hover {
\tcolor: #262626;
\tbackground-color: #f5f5f5;
}

</style>
\t<input type=\"hidden\" name=\"ai1ec_city\" id=\"ai1ec_city\"
\t\tvalue=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["city"]) ? $context["city"] : null), "html", null, true);
        echo "\"> 
\t<input type=\"hidden\" name=\"ai1ec_province\"
\t\tid=\"ai1ec_province\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["province"]) ? $context["province"] : null), "html", null, true);
        echo "\"> 
\t<input type=\"hidden\"
\t\tname=\"ai1ec_postal_code\" id=\"ai1ec_postal_code\"
\t\tvalue=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["postal_code"]) ? $context["postal_code"] : null), "html", null, true);
        echo "\"> 
\t<input type=\"hidden\" name=\"ai1ec_country\"
\t\tid=\"ai1ec_country\" value=\"";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["country"]) ? $context["country"] : null), "html", null, true);
        echo "\">
\t<input type=\"hidden\" name=\"ai1ec_country_short\"
\t\tid=\"ai1ec_country_short\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["country_short"]) ? $context["country_short"] : null), "html", null, true);
        echo "\">
\t<script type=\"text/javascript\">
\tjQuery('.form-wrap h3').hide();
\tjQuery('.wrap h2').html(jQuery('.wrap h2').html().replace('Category', 'Venue'));
\tjQuery('#tag-description').parent().hide();
\tjQuery('.column-description').hide();
\tjQuery('#description').parent().parent().hide();
\tjQuery(document).ready(function(\$){
\t\tif ( \$('#addtag .button-primary').length > 0 ) {
\t\t\t\$('#addtag .button-primary').val(\$('#addtag .button-primary').val().replace('Category', 'Venue'));
\t\t}
\t\t
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "venues.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  538 => 182,  533 => 180,  528 => 178,  522 => 175,  517 => 173,  482 => 141,  478 => 140,  474 => 139,  470 => 138,  466 => 137,  462 => 136,  458 => 135,  454 => 134,  450 => 133,  445 => 131,  441 => 130,  435 => 129,  430 => 127,  426 => 126,  422 => 125,  418 => 124,  414 => 123,  409 => 121,  405 => 120,  401 => 119,  397 => 118,  393 => 117,  389 => 116,  385 => 115,  381 => 114,  376 => 112,  372 => 111,  368 => 110,  363 => 108,  359 => 107,  355 => 106,  351 => 105,  347 => 104,  342 => 102,  338 => 101,  334 => 100,  329 => 98,  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  300 => 90,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  274 => 82,  270 => 81,  266 => 80,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  197 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 34,  110 => 32,  108 => 31,  96 => 27,  92 => 26,  88 => 25,  85 => 24,  79 => 21,  75 => 20,  71 => 19,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  42 => 10,  35 => 8,  32 => 7,  27 => 5,  23 => 3,  101 => 29,  94 => 39,  87 => 37,  81 => 22,  77 => 32,  67 => 18,  62 => 22,  56 => 19,  52 => 17,  50 => 16,  45 => 11,  38 => 9,  30 => 7,  24 => 3,  22 => 2,  36 => 9,  33 => 6,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
