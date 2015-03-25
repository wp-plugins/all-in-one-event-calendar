<?php

/* oneday.twig */
class __TwigTemplate_95b0bc90e12b886869857ead6c28360f596d7226395498afb6afc90ae60143ca extends Twig_Template
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
        echo (isset($context["navigation"]) ? $context["navigation"] : null);
        echo "

<table class=\"ai1ec-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "-view-original\">
\t<thead>
\t\t<tr>
\t\t\t";
        // line 6
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
            // line 7
            echo "\t\t\t\t<th class=\"ai1ec-weekday
\t\t\t\t\t";
            // line 8
            if ((!twig_test_empty($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "today")))) {
                echo "ai1ec-today";
            }
            echo "\">
\t\t\t\t\t";
            // line 10
            echo "\t\t\t\t\t";
            if (((isset($context["show_reveal_button"]) ? $context["show_reveal_button"] : null) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                // line 11
                echo "\t\t\t\t\t\t<div class=\"ai1ec-reveal-full-day\">
\t\t\t\t\t\t\t<button class=\"ai1ec-btn ai1ec-btn-info ai1ec-btn-xs
\t\t\t\t\t\t\t\t\tai1ec-tooltip-trigger\"
\t\t\t\t\t\t\t\tdata-placement=\"left\"
\t\t\t\t\t\t\t\ttitle=\"";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["text_full_day"]) ? $context["text_full_day"] : null), "html_attr");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-expand\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t<a class=\"ai1ec-load-view\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day"]) ? $context["day"] : null), "href"), "html_attr");
            echo "\"
\t\t\t\t\t\t";
            // line 21
            echo (isset($context["data_type"]) ? $context["data_type"] : null);
            echo ">
\t\t\t\t\t\t<span class=\"ai1ec-weekday-date\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day"]) ? $context["day"] : null), "day"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<span class=\"ai1ec-weekday-day\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day"]) ? $context["day"] : null), "weekday"), "html", null, true);
            echo "</span>
\t\t\t\t\t</a>
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
        // line 27
        echo "\t\t</tr>
\t\t<tr>
\t\t\t";
        // line 29
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
            // line 30
            echo "\t\t\t\t<td class=\"ai1ec-allday-events
\t\t\t\t\t";
            // line 31
            if ((!twig_test_empty($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "today")))) {
                echo "ai1ec-today";
            }
            echo "\">

\t\t\t\t\t";
            // line 33
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                // line 34
                echo "\t\t\t\t\t\t<div class=\"ai1ec-allday-label\">";
                echo twig_escape_filter($this->env, (isset($context["text_all_day"]) ? $context["text_all_day"] : null), "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 36
            echo "
\t\t\t\t\t";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "allday"));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 38
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                echo "\"
\t\t\t\t\t\t\tdata-instance-id=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger
\t\t\t\t\t\t\t\tai1ec-event-id-";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\tai1ec-allday
\t\t\t\t\t\t\t\t";
                // line 44
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
                    echo "ai1ec-multiday";
                }
                echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t<div class=\"ai1ec-event\"
\t\t\t\t\t\t\t\t style=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "color_style"), "html_attr");
                echo "\">
\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t";
                // line 49
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 50
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))) {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 52
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<div class=\"ai1ec-popover ai1ec-popup ai1ec-popup-in-";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "-view\">
\t\t\t\t\t\t\t";
                // line 59
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors")) {
                    // line 60
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-color-swatches\">";
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors");
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t\t\t\t<span class=\"ai1ec-popup-title\">
\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\thref=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\t\t>";
                // line 65
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                echo "</a>
\t\t\t\t\t\t\t\t";
                // line 66
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t>";
                    // line 68
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 70
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
\t\t\t\t\t\t\t\t\t\tai1ec-buy-tickets\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\thref=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
                    echo "\"
\t\t\t\t\t\t\t\t\t\t>";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                }
                // line 76
                echo "\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t";
                // line 78
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link")) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t<a class=\"post-edit-link\"
\t\t\t\t\t\t\t\t\thref=\"";
                    // line 80
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                    // line 81
                    echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 84
                echo "
\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t";
                // line 86
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "popup_timespan");
                echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\thref=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 91
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
                echo "
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
                // line 94
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt")) {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-popup-excerpt\">";
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt");
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t\t\t</div>

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo " ";
            // line 100
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
        // line 102
        echo " ";
        // line 103
        echo "\t\t</tr>

\t</thead>
\t<tbody>
\t\t<tr class=\"ai1ec-";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
\t\t\t";
        // line 108
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
            // line 109
            echo "\t\t\t\t<td ";
            if ($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "today")) {
                echo "class=\"ai1ec-today\"";
            }
            echo ">

\t\t\t\t\t";
            // line 111
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                // line 112
                echo "\t\t\t\t\t\t<div class=\"ai1ec-grid-container\">
\t\t\t\t\t\t\t";
                // line 113
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["hours"]) ? $context["hours"] : null));
                foreach ($context['_seq'] as $context["h"] => $context["hour"]) {
                    // line 114
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-hour-marker
\t\t\t\t\t\t\t\t\t";
                    // line 115
                    if ((((isset($context["h"]) ? $context["h"] : null) >= 8) && ((isset($context["h"]) ? $context["h"] : null) < 18))) {
                        echo "ai1ec-business-hour";
                    }
                    echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"top: ";
                    // line 116
                    echo twig_escape_filter($this->env, ((isset($context["h"]) ? $context["h"] : null) * 60), "html", null, true);
                    echo "px;\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 118
                    echo (isset($context["hour"]) ? $context["hour"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    // line 121
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["quarter"]) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-quarter-marker\"
\t\t\t\t\t\t\t\t\t\tstyle=\"top: ";
                        // line 123
                        echo twig_escape_filter($this->env, (((isset($context["h"]) ? $context["h"] : null) * 60) + ((isset($context["quarter"]) ? $context["quarter"] : null) * 15)), "html", null, true);
                        echo "px;\"></div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quarter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['h'], $context['hour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "today") || (isset($context["show_now"]) ? $context["show_now"] : null))) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-now-marker\" style=\"top: ";
                    echo twig_escape_filter($this->env, (isset($context["now_top"]) ? $context["now_top"] : null), "html", null, true);
                    echo "px;\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 129
                    echo twig_escape_filter($this->env, (isset($context["text_now_label"]) ? $context["text_now_label"] : null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["now_text"]) ? $context["now_text"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 133
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 135
            echo "
\t\t\t\t\t<div class=\"ai1ec-day\">

\t\t\t\t\t\t";
            // line 138
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "notallday"));
            foreach ($context['_seq'] as $context["_key"] => $context["day_array"]) {
                // line 139
                echo "\t\t\t\t\t\t\t";
                $context["event"] = $this->getAttribute((isset($context["day_array"]) ? $context["day_array"] : null), "event");
                // line 140
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\tdata-instance-id=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger
\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 145
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "start_truncated")) {
                    echo "ai1ec-start-truncated";
                }
                // line 146
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "end_truncated")) {
                    echo "ai1ec-end-truncated";
                }
                // line 147
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
                    echo "ai1ec-multiday";
                }
                echo "\"
\t\t\t\t\t\t\t\tstyle=\"top: ";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day_array"]) ? $context["day_array"] : null), "top"), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\theight: ";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day_array"]) ? $context["day_array"] : null), "height"), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\tleft: ";
                // line 150
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["day_array"]) ? $context["day_array"] : null), "indent") * (isset($context["indent_multiplier"]) ? $context["indent_multiplier"] : null)) + (isset($context["indent_offset"]) ? $context["indent_offset"] : null)), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\t";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "color_style"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 152
                $context["faded_color"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "faded_color");
                // line 153
                echo "\t\t\t\t\t\t\t\t\t";
                $context["rgba_color"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "rgba_color");
                // line 154
                echo "\t\t\t\t\t\t\t\t\t";
                if ((isset($context["faded_color"]) ? $context["faded_color"] : null)) {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["rgba1"] = sprintf((isset($context["rgba_color"]) ? $context["rgba_color"] : null), "0.05");
                    // line 156
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["rgba3"] = sprintf((isset($context["rgba_color"]) ? $context["rgba_color"] : null), "0.3");
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\tborder: 1px solid ";
                    echo twig_escape_filter($this->env, (isset($context["faded_color"]) ? $context["faded_color"] : null), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\t\t\tborder-color: ";
                    // line 158
                    echo twig_escape_filter($this->env, sprintf((isset($context["rgba_color"]) ? $context["rgba_color"] : null), "0.5"), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\t\t\tbackground-image: -webkit-linear-gradient( top, ";
                    // line 159
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -moz-linear-gradient( top, ";
                    // line 160
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -ms-linear-gradient( top, ";
                    // line 161
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -o-linear-gradient( top, ";
                    // line 162
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: linear-gradient( top, ";
                    // line 163
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t";
                }
                // line 165
                echo "\t\t\t\t\t\t\t\t\t\">

\t\t\t\t\t\t\t\t";
                // line 167
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "start_truncated")) {
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-start-truncator\">◤</div>
\t\t\t\t\t\t\t\t";
                }
                // line 170
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "end_truncated")) {
                    // line 171
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-end-truncator\">◢</div>
\t\t\t\t\t\t\t\t";
                }
                // line 173
                echo "
\t\t\t\t\t\t\t\t<div class=\"ai1ec-event\">
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "short_start_time"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t";
                // line 179
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 180
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))) {
                    // line 181
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 182
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 184
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"ai1ec-popover ai1ec-popup ai1ec-popup-in-";
                // line 189
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "-view\">
\t\t\t\t\t\t\t\t";
                // line 190
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors")) {
                    // line 191
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-color-swatches\">";
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors");
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 193
                echo "\t\t\t\t\t\t\t\t<span class=\"ai1ec-popup-title\">
\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\thref=\"";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\t\t\t>";
                // line 196
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                echo "</a>
\t\t\t\t\t\t\t\t\t";
                // line 197
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))) {
                    // line 198
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 199
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 201
                echo "\t\t\t\t\t\t\t\t\t";
                if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))) {
                    // line 202
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
\t\t\t\t\t\t\t\t\t\t\tai1ec-buy-tickets\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\thref=\"";
                    // line 204
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 205
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 207
                echo "\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
                // line 209
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link")) {
                    // line 210
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"post-edit-link\"
\t\t\t\t\t\t\t\t\t\thref=\"";
                    // line 211
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                    // line 212
                    echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 215
                echo "
\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t";
                // line 217
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "popup_timespan");
                echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\thref=\"";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 222
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
                echo "
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t";
                // line 225
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt")) {
                    // line 226
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-popup-excerpt\">";
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt");
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 228
                echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day_array'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo " ";
            // line 231
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
        // line 234
        echo " ";
        // line 235
        echo "\t\t</tr>
\t</tbody>

</table>

<div class=\"ai1ec-pull-left\">";
        // line 240
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "oneday.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  734 => 240,  727 => 235,  725 => 234,  708 => 231,  706 => 230,  698 => 228,  692 => 226,  690 => 225,  684 => 222,  680 => 221,  673 => 217,  663 => 212,  659 => 211,  656 => 210,  654 => 209,  645 => 205,  641 => 204,  637 => 202,  634 => 201,  629 => 199,  626 => 198,  624 => 197,  620 => 196,  616 => 195,  612 => 193,  606 => 191,  604 => 190,  600 => 189,  593 => 184,  588 => 182,  585 => 181,  579 => 179,  573 => 176,  568 => 173,  564 => 171,  557 => 168,  551 => 165,  544 => 163,  526 => 160,  520 => 159,  516 => 158,  508 => 156,  505 => 155,  499 => 153,  493 => 151,  485 => 149,  474 => 147,  469 => 146,  465 => 145,  461 => 144,  457 => 143,  452 => 141,  447 => 140,  444 => 139,  435 => 135,  431 => 133,  422 => 129,  416 => 127,  413 => 126,  407 => 125,  399 => 123,  396 => 122,  392 => 121,  386 => 118,  381 => 116,  375 => 115,  372 => 114,  365 => 112,  363 => 111,  355 => 109,  338 => 108,  334 => 107,  328 => 103,  326 => 102,  308 => 99,  294 => 95,  292 => 94,  265 => 81,  252 => 76,  243 => 73,  228 => 67,  226 => 66,  202 => 58,  182 => 49,  164 => 42,  143 => 36,  329 => 116,  322 => 112,  306 => 109,  300 => 97,  298 => 106,  293 => 104,  286 => 91,  257 => 89,  251 => 86,  244 => 84,  225 => 76,  214 => 62,  200 => 67,  174 => 56,  172 => 55,  148 => 46,  108 => 29,  102 => 31,  140 => 44,  132 => 45,  129 => 44,  123 => 41,  116 => 39,  98 => 30,  86 => 23,  22 => 2,  309 => 116,  299 => 112,  284 => 109,  272 => 96,  266 => 101,  261 => 80,  237 => 87,  234 => 86,  231 => 68,  223 => 81,  219 => 80,  206 => 59,  190 => 66,  184 => 63,  149 => 47,  144 => 45,  139 => 44,  319 => 95,  317 => 94,  313 => 110,  310 => 100,  307 => 84,  305 => 114,  302 => 82,  291 => 110,  287 => 75,  285 => 74,  280 => 100,  277 => 71,  271 => 84,  269 => 68,  253 => 95,  238 => 81,  220 => 62,  205 => 53,  195 => 49,  189 => 46,  186 => 50,  180 => 62,  175 => 60,  152 => 47,  111 => 35,  45 => 11,  42 => 9,  120 => 35,  94 => 29,  71 => 21,  135 => 33,  127 => 39,  89 => 26,  47 => 7,  221 => 81,  217 => 73,  213 => 56,  211 => 77,  194 => 65,  168 => 61,  166 => 57,  161 => 58,  147 => 45,  115 => 34,  110 => 36,  278 => 99,  274 => 95,  267 => 94,  260 => 93,  258 => 79,  250 => 90,  245 => 87,  239 => 71,  233 => 79,  227 => 79,  224 => 78,  222 => 65,  215 => 78,  210 => 76,  198 => 67,  191 => 52,  187 => 63,  178 => 58,  169 => 44,  159 => 52,  153 => 48,  151 => 51,  133 => 41,  122 => 35,  114 => 38,  112 => 35,  99 => 27,  95 => 26,  83 => 23,  78 => 21,  137 => 34,  131 => 64,  125 => 30,  117 => 36,  103 => 28,  90 => 27,  82 => 22,  52 => 15,  34 => 7,  677 => 347,  669 => 215,  661 => 336,  652 => 329,  650 => 207,  644 => 324,  642 => 323,  639 => 322,  633 => 319,  630 => 318,  628 => 317,  625 => 316,  619 => 314,  617 => 313,  614 => 312,  605 => 306,  594 => 302,  589 => 300,  583 => 180,  574 => 291,  567 => 286,  561 => 170,  555 => 167,  553 => 281,  548 => 278,  545 => 277,  538 => 162,  532 => 161,  525 => 266,  523 => 265,  517 => 261,  511 => 157,  504 => 256,  502 => 154,  497 => 152,  489 => 150,  481 => 148,  468 => 231,  462 => 227,  455 => 221,  449 => 219,  442 => 216,  440 => 138,  434 => 211,  428 => 209,  421 => 206,  419 => 205,  414 => 202,  408 => 197,  402 => 195,  395 => 192,  393 => 191,  388 => 188,  385 => 186,  382 => 185,  368 => 113,  364 => 182,  362 => 181,  357 => 179,  352 => 178,  348 => 176,  345 => 175,  327 => 174,  324 => 113,  321 => 171,  315 => 111,  312 => 166,  304 => 108,  301 => 113,  297 => 157,  295 => 78,  288 => 151,  282 => 90,  275 => 86,  273 => 145,  268 => 95,  262 => 137,  256 => 78,  249 => 132,  247 => 74,  242 => 83,  236 => 70,  229 => 78,  212 => 71,  207 => 71,  203 => 52,  192 => 64,  183 => 60,  170 => 38,  138 => 44,  128 => 31,  107 => 29,  91 => 23,  80 => 22,  66 => 19,  61 => 16,  43 => 7,  73 => 20,  64 => 15,  55 => 14,  88 => 25,  79 => 24,  75 => 22,  68 => 18,  57 => 21,  118 => 43,  96 => 31,  85 => 24,  69 => 24,  60 => 21,  58 => 15,  49 => 12,  36 => 12,  204 => 69,  196 => 54,  177 => 47,  171 => 73,  165 => 53,  163 => 36,  158 => 61,  154 => 60,  150 => 38,  146 => 37,  142 => 44,  136 => 41,  130 => 40,  105 => 27,  101 => 27,  93 => 28,  87 => 24,  81 => 25,  74 => 19,  67 => 19,  65 => 15,  59 => 11,  53 => 17,  44 => 15,  25 => 4,  21 => 2,  77 => 21,  70 => 19,  62 => 17,  54 => 14,  50 => 8,  29 => 9,  40 => 8,  38 => 5,  27 => 4,  218 => 64,  216 => 119,  208 => 60,  201 => 72,  199 => 71,  188 => 51,  179 => 67,  173 => 64,  167 => 53,  162 => 51,  160 => 41,  155 => 39,  145 => 78,  141 => 45,  134 => 46,  126 => 37,  124 => 38,  121 => 37,  119 => 37,  113 => 37,  109 => 32,  104 => 27,  100 => 31,  92 => 29,  84 => 25,  76 => 23,  72 => 21,  63 => 18,  56 => 10,  51 => 13,  30 => 6,  46 => 10,  32 => 10,  26 => 3,  23 => 3,  48 => 11,  33 => 7,  28 => 5,  24 => 3,  41 => 9,  39 => 7,  37 => 8,  35 => 6,  31 => 5,  19 => 1,);
    }
}
