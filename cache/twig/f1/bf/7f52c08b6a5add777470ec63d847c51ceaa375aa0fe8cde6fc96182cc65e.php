<?php

/* weekday.base.twig */
class __TwigTemplate_f1bf7f52c08b6a5add777470ec63d847c51ceaa375aa0fe8cde6fc96182cc65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'weekday_html' => array($this, 'block_weekday_html'),
            'event_popup' => array($this, 'block_event_popup'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        echo (isset($context["navigation"]) ? $context["navigation"] : null);
        echo "

<table class=\"ai1ec-";
        // line 5
        $this->displayBlock('name', $context, $blocks);
        echo "-view-original\">
\t<thead>
\t\t<tr>
\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cell_array"]) ? $context["cell_array"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["date"] => $context["day"]) {
            // line 9
            echo "\t\t\t\t<th scope=\"col\" class=\"ai1ec-weekday
\t\t\t\t\t";
            // line 10
            if ((!twig_test_empty($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "today")))) {
                echo "ai1ec-today";
            }
            echo "\">

\t\t\t\t\t";
            // line 13
            echo "\t\t\t\t\t";
            if (((isset($context["show_reveal_button"]) ? $context["show_reveal_button"] : null) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                // line 14
                echo "\t\t\t\t\t\t<div class=\"ai1ec-reveal-full-day\">
\t\t\t\t\t\t\t<button class=\"ai1ec-btn ai1ec-btn-info ai1ec-btn-xs
\t\t\t\t\t\t\t\t\tai1ec-tooltip-trigger\"
\t\t\t\t\t\t\t\tdata-placement=\"left\"
\t\t\t\t\t\t\t\ttitle=\"";
                // line 18
                echo twig_escape_filter($this->env, (isset($context["text_full_day"]) ? $context["text_full_day"] : null), "html_attr");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-expand\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 23
            echo "
\t\t\t\t\t";
            // line 24
            $this->displayBlock('weekday_html', $context, $blocks);
            // line 31
            echo "
\t\t\t\t</th>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['date'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t</tr>
\t\t<tr>
\t\t\t";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cell_array"]) ? $context["cell_array"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 37
            echo "\t\t\t\t<td class=\"ai1ec-allday-events
\t\t\t\t\t";
            // line 38
            if ((!twig_test_empty($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "today")))) {
                echo "ai1ec-today";
            }
            echo "\">

\t\t\t\t\t";
            // line 40
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                // line 41
                echo "\t\t\t\t\t\t<div class=\"ai1ec-allday-label\">";
                echo twig_escape_filter($this->env, (isset($context["text_all_day"]) ? $context["text_all_day"] : null), "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 43
            echo "
\t\t\t\t\t";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "allday"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 45
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                echo "\"
\t\t\t\t\t\t\t";
                // line 46
                echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                echo "
\t\t\t\t\t\t\tdata-instance-id=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "instance_id"), "method"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger
\t\t\t\t\t\t\t\tai1ec-event-id-";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post_id"), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "instance_id"), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\tai1ec-allday
\t\t\t\t\t\t\t\t";
                // line 52
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
                    echo "ai1ec-multiday";
                }
                echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t<div class=\"ai1ec-event\"
\t\t\t\t\t\t\t\tstyle=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "color_style"), "method"), "html_attr");
                echo "\">
\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t";
                // line 57
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method");
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 58
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method"))))) {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 60
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method")), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t";
                // line 66
                $this->displayBlock('event_popup', $context, $blocks);
                // line 72
                echo "
\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo " ";
            // line 74
            echo "
\t\t\t\t</td>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo " ";
        // line 77
        echo "\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr class=\"ai1ec-";
        // line 80
        $this->displayBlock("name", $context, $blocks);
        echo "\">
\t\t\t";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cell_array"]) ? $context["cell_array"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 82
            echo "\t\t\t\t<td ";
            if ((!twig_test_empty($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "today")))) {
                echo "class=\"ai1ec-today\"";
            }
            echo ">

\t\t\t\t\t";
            // line 84
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                // line 85
                echo "\t\t\t\t\t\t<div class=\"ai1ec-grid-container\">
\t\t\t\t\t\t\t";
                // line 86
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-hour-marker
\t\t\t\t\t\t\t\t\t";
                    // line 88
                    if ((((isset($context["hour"]) ? $context["hour"] : null) >= 8) && ((isset($context["hour"]) ? $context["hour"] : null) < 18))) {
                        echo "ai1ec-business-hour";
                    }
                    echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"top: ";
                    // line 89
                    echo twig_escape_filter($this->env, ((isset($context["hour"]) ? $context["hour"] : null) * 60), "html", null, true);
                    echo "px;\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n($this->env->getExtension('ai1ec')->hour_to_datetime((isset($context["hour"]) ? $context["hour"] : null)), (isset($context["time_format"]) ? $context["time_format"] : null)), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    // line 94
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["quarter"]) {
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-quarter-marker\"
\t\t\t\t\t\t\t\t\t\tstyle=\"top: ";
                        // line 96
                        echo twig_escape_filter($this->env, (((isset($context["hour"]) ? $context["hour"] : null) * 60) + ((isset($context["quarter"]) ? $context["quarter"] : null) * 15)), "html", null, true);
                        echo "px;\"></div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quarter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "\t\t\t\t\t\t\t";
                if ((!twig_test_empty($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "today")))) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-now-marker\" style=\"top: ";
                    echo twig_escape_filter($this->env, (isset($context["now_top"]) ? $context["now_top"] : null), "html", null, true);
                    echo "px;\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 102
                    echo twig_escape_filter($this->env, (isset($context["text_now_label"]) ? $context["text_now_label"] : null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["now_text"]) ? $context["now_text"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 106
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 108
            echo "
\t\t\t\t\t<div class=\"ai1ec-day\">

\t\t\t\t\t\t";
            // line 111
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "notallday"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["day_array"]) {
                // line 112
                echo "\t\t\t\t\t\t\t";
                $context["event"] = $this->getAttribute((isset($context["day_array"]) ? $context["day_array"] : null), "event");
                // line 113
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 114
                echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                echo "
\t\t\t\t\t\t\t\tdata-instance-id=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "instance_id"), "method"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger
\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post_id"), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "instance_id"), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 119
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start_truncated"), "method")) {
                    echo "ai1ec-start-truncated";
                }
                // line 120
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "end_truncated"), "method")) {
                    echo "ai1ec-end-truncated";
                }
                // line 121
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "_orig"), "method"), "is_multiday")) {
                    echo "ai1ec-multiday";
                }
                echo "\"
\t\t\t\t\t\t\t\tstyle=\"top: ";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day_array"]) ? $context["day_array"] : null), "top"), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\theight: ";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day_array"]) ? $context["day_array"] : null), "height"), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\tleft: ";
                // line 124
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["day_array"]) ? $context["day_array"] : null), "indent") * $this->renderBlock("indent_multiplier", $context, $blocks)) + $this->renderBlock("indent_offset", $context, $blocks)), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\t";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "color_style"), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 126
                $context["faded_color"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "faded_color"), "method");
                // line 127
                echo "\t\t\t\t\t\t\t\t\t";
                $context["rgba_color"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "rgba_color"), "method");
                // line 128
                echo "\t\t\t\t\t\t\t\t\t";
                if ((!twig_test_empty((isset($context["faded_color"]) ? $context["faded_color"] : null)))) {
                    // line 129
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["rgba1"] = sprintf((isset($context["rgba_color"]) ? $context["rgba_color"] : null), "0.05");
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["rgba3"] = sprintf((isset($context["rgba_color"]) ? $context["rgba_color"] : null), "0.3");
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t\tborder: 1px solid ";
                    echo twig_escape_filter($this->env, (isset($context["faded_color"]) ? $context["faded_color"] : null), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\t\t\tborder-color: ";
                    // line 132
                    echo twig_escape_filter($this->env, sprintf((isset($context["rgba_color"]) ? $context["rgba_color"] : null), "0.5"), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\t\t\tbackground-image: -webkit-linear-gradient( top, ";
                    // line 133
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -moz-linear-gradient( top, ";
                    // line 134
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -ms-linear-gradient( top, ";
                    // line 135
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -o-linear-gradient( top, ";
                    // line 136
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: linear-gradient( top, ";
                    // line 137
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t";
                }
                // line 139
                echo "\t\t\t\t\t\t\t\t\t\">

\t\t\t\t\t\t\t\t";
                // line 141
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "start_truncated"), "method")) {
                    // line 142
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-start-truncator\">◤</div>
\t\t\t\t\t\t\t\t";
                }
                // line 144
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "end_truncated"), "method")) {
                    // line 145
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-end-truncator\">◢</div>
\t\t\t\t\t\t\t\t";
                }
                // line 147
                echo "
\t\t\t\t\t\t\t\t<div class=\"ai1ec-event\">
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "short_start_time"), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t";
                // line 153
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 154
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method"))))) {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 156
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method")), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 158
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
                // line 163
                $this->displayBlock("event_popup", $context, $blocks);
                echo "

\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day_array'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo " ";
            // line 166
            echo "\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo " ";
        // line 169
        echo "\t\t</tr>
\t</tbody>
</table>

<div class=\"ai1ec-pull-left\">";
        // line 173
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "</div>
";
    }

    // line 5
    public function block_name($context, array $blocks = array())
    {
    }

    // line 24
    public function block_weekday_html($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t\t\t\t<a class=\"ai1ec-load-view\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day"]) ? $context["day"] : null), "href"), "html_attr");
        echo "\"
\t\t\t\t\t\t\t";
        // line 26
        echo (isset($context["data_type"]) ? $context["data_type"] : null);
        echo ">
\t\t\t\t\t\t\t<span class=\"ai1ec-weekday-date\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->day((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t<span class=\"ai1ec-weekday-day\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->weekday((isset($context["date"]) ? $context["date"] : null)), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
    }

    // line 66
    public function block_event_popup($context, array $blocks = array())
    {
        // line 67
        echo "\t\t\t\t\t\t\t";
        $this->env->loadTemplate("event-popup.twig")->display(array_merge($context, array("popup_timespan" => $this->env->getExtension('ai1ec')->timespan($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "_orig"), "method"), "short"), "text_venue_separator" => (isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null))));
        // line 71
        echo "\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "weekday.base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 71,  621 => 67,  618 => 66,  611 => 28,  607 => 27,  603 => 26,  595 => 24,  584 => 173,  578 => 169,  576 => 168,  558 => 165,  541 => 163,  529 => 156,  526 => 155,  520 => 153,  514 => 150,  509 => 147,  505 => 145,  502 => 144,  498 => 142,  496 => 141,  492 => 139,  485 => 137,  473 => 135,  467 => 134,  461 => 133,  457 => 132,  452 => 131,  446 => 129,  440 => 127,  438 => 126,  434 => 125,  426 => 123,  422 => 122,  410 => 120,  406 => 119,  402 => 118,  398 => 117,  389 => 114,  384 => 113,  381 => 112,  364 => 111,  355 => 106,  340 => 100,  337 => 99,  331 => 98,  323 => 96,  289 => 85,  262 => 81,  235 => 74,  218 => 72,  38 => 5,  261 => 74,  191 => 55,  171 => 40,  120 => 29,  109 => 23,  321 => 132,  316 => 94,  310 => 91,  305 => 89,  300 => 119,  297 => 117,  295 => 78,  292 => 86,  285 => 111,  268 => 105,  256 => 99,  237 => 92,  215 => 56,  212 => 84,  165 => 46,  150 => 61,  146 => 60,  136 => 58,  115 => 48,  105 => 36,  85 => 31,  133 => 49,  124 => 30,  118 => 49,  98 => 31,  69 => 23,  33 => 7,  47 => 18,  100 => 42,  88 => 37,  298 => 115,  288 => 112,  281 => 110,  279 => 82,  263 => 103,  253 => 77,  244 => 94,  239 => 93,  228 => 87,  226 => 61,  220 => 58,  200 => 58,  195 => 48,  193 => 72,  177 => 61,  121 => 50,  92 => 25,  44 => 10,  306 => 118,  296 => 87,  294 => 80,  280 => 74,  274 => 71,  271 => 106,  264 => 67,  260 => 66,  225 => 61,  209 => 79,  192 => 77,  188 => 48,  178 => 50,  175 => 60,  152 => 62,  148 => 32,  144 => 46,  141 => 45,  102 => 26,  90 => 38,  78 => 23,  42 => 9,  39 => 7,  217 => 57,  211 => 80,  194 => 50,  183 => 52,  179 => 70,  168 => 64,  161 => 61,  143 => 44,  116 => 38,  111 => 24,  93 => 27,  86 => 21,  81 => 24,  59 => 15,  291 => 79,  283 => 105,  276 => 75,  267 => 102,  254 => 97,  248 => 69,  245 => 93,  233 => 73,  231 => 64,  224 => 84,  221 => 84,  207 => 56,  204 => 77,  202 => 59,  197 => 51,  189 => 65,  180 => 71,  176 => 42,  170 => 69,  153 => 55,  140 => 43,  137 => 46,  132 => 40,  122 => 37,  112 => 36,  99 => 27,  95 => 26,  91 => 17,  83 => 24,  79 => 28,  58 => 15,  50 => 12,  45 => 11,  29 => 10,  25 => 3,  164 => 37,  156 => 36,  139 => 44,  131 => 42,  127 => 47,  123 => 29,  114 => 25,  104 => 52,  96 => 19,  77 => 23,  74 => 16,  68 => 14,  60 => 17,  27 => 4,  66 => 14,  598 => 25,  590 => 5,  582 => 327,  573 => 320,  571 => 318,  565 => 314,  563 => 313,  560 => 166,  554 => 309,  551 => 308,  549 => 307,  546 => 306,  539 => 302,  534 => 158,  530 => 299,  527 => 298,  524 => 154,  521 => 295,  512 => 289,  503 => 283,  497 => 280,  488 => 274,  479 => 136,  474 => 265,  471 => 264,  464 => 258,  458 => 256,  451 => 253,  449 => 130,  443 => 128,  437 => 246,  430 => 124,  428 => 242,  423 => 239,  415 => 121,  407 => 228,  393 => 115,  387 => 213,  380 => 207,  374 => 205,  367 => 202,  365 => 201,  359 => 108,  353 => 195,  346 => 102,  344 => 191,  339 => 188,  333 => 183,  327 => 181,  320 => 95,  318 => 177,  313 => 125,  308 => 123,  302 => 120,  299 => 88,  293 => 77,  287 => 84,  284 => 75,  282 => 158,  278 => 76,  275 => 154,  269 => 106,  266 => 104,  258 => 80,  255 => 72,  251 => 76,  249 => 139,  242 => 94,  236 => 89,  222 => 125,  216 => 66,  210 => 62,  203 => 78,  187 => 46,  174 => 49,  166 => 57,  159 => 64,  155 => 63,  145 => 49,  138 => 74,  134 => 41,  119 => 62,  107 => 29,  101 => 34,  97 => 28,  80 => 23,  71 => 15,  62 => 19,  49 => 12,  35 => 6,  30 => 5,  63 => 13,  57 => 14,  54 => 12,  43 => 17,  31 => 5,  24 => 4,  21 => 2,  82 => 35,  73 => 22,  70 => 24,  64 => 15,  55 => 11,  52 => 10,  48 => 11,  46 => 7,  41 => 6,  37 => 8,  32 => 3,  22 => 2,  265 => 123,  259 => 73,  252 => 98,  250 => 97,  247 => 96,  241 => 112,  234 => 91,  232 => 108,  229 => 129,  227 => 62,  219 => 82,  213 => 81,  205 => 60,  201 => 79,  199 => 74,  196 => 57,  190 => 76,  186 => 84,  184 => 67,  181 => 101,  173 => 67,  169 => 47,  167 => 39,  162 => 38,  160 => 45,  157 => 52,  151 => 35,  149 => 47,  142 => 59,  135 => 42,  130 => 40,  128 => 31,  125 => 38,  117 => 34,  113 => 58,  108 => 45,  106 => 22,  103 => 21,  94 => 18,  89 => 26,  87 => 24,  84 => 25,  76 => 27,  72 => 18,  67 => 19,  65 => 18,  61 => 16,  56 => 10,  53 => 9,  51 => 13,  40 => 8,  34 => 12,  28 => 5,  26 => 3,  36 => 8,  23 => 3,  19 => 1,);
    }
}
