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
\t\t\t\t\t\t\t";
                // line 39
                echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                echo "
\t\t\t\t\t\t\tdata-instance-id=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger
\t\t\t\t\t\t\t\tai1ec-event-id-";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\tai1ec-allday
\t\t\t\t\t\t\t\t";
                // line 45
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
                    echo "ai1ec-multiday";
                }
                echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t<div class=\"ai1ec-event\"
\t\t\t\t\t\t\t\t style=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "color_style"), "html_attr");
                echo "\">
\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t";
                // line 50
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 51
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))) {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 53
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<div class=\"ai1ec-popover ai1ec-popup ai1ec-popup-in-";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "-view\">
\t\t\t\t\t\t\t";
                // line 60
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors")) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-color-swatches\">";
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors");
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t\t\t<span class=\"ai1ec-popup-title\">
\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t";
                // line 65
                echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                echo "
\t\t\t\t\t\t\t\t\thref=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\t\t>";
                // line 67
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                echo "</a>
\t\t\t\t\t\t\t\t";
                // line 68
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t>";
                    // line 70
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))) {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
\t\t\t\t\t\t\t\t\t\tai1ec-buy-tickets\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\thref=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
                    echo "\"
\t\t\t\t\t\t\t\t\t\t>";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                }
                // line 78
                echo "\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t";
                // line 80
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link")) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t<a class=\"post-edit-link\"
\t\t\t\t\t\t\t\t\thref=\"";
                    // line 82
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                    // line 83
                    echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 86
                echo "
\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t";
                // line 88
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "popup_timespan");
                echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\thref=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 93
                echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                echo ">
\t\t\t\t\t\t\t\t";
                // line 94
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
                echo "
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
                // line 97
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt")) {
                    // line 98
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-popup-excerpt\">";
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt");
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 100
                echo "\t\t\t\t\t\t</div>

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo " ";
            // line 103
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
        // line 105
        echo " ";
        // line 106
        echo "\t\t</tr>

\t</thead>
\t<tbody>
\t\t<tr class=\"ai1ec-";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
\t\t\t";
        // line 111
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
            // line 112
            echo "\t\t\t\t<td ";
            if ($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "today")) {
                echo "class=\"ai1ec-today\"";
            }
            echo ">

\t\t\t\t\t";
            // line 114
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                // line 115
                echo "\t\t\t\t\t\t<div class=\"ai1ec-grid-container\">
\t\t\t\t\t\t\t";
                // line 116
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["hours"]) ? $context["hours"] : null));
                foreach ($context['_seq'] as $context["h"] => $context["hour"]) {
                    // line 117
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-hour-marker
\t\t\t\t\t\t\t\t\t";
                    // line 118
                    if ((((isset($context["h"]) ? $context["h"] : null) >= 8) && ((isset($context["h"]) ? $context["h"] : null) < 18))) {
                        echo "ai1ec-business-hour";
                    }
                    echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"top: ";
                    // line 119
                    echo twig_escape_filter($this->env, ((isset($context["h"]) ? $context["h"] : null) * 60), "html", null, true);
                    echo "px;\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 121
                    echo (isset($context["hour"]) ? $context["hour"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    // line 124
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["quarter"]) {
                        // line 125
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-quarter-marker\"
\t\t\t\t\t\t\t\t\t\tstyle=\"top: ";
                        // line 126
                        echo twig_escape_filter($this->env, (((isset($context["h"]) ? $context["h"] : null) * 60) + ((isset($context["quarter"]) ? $context["quarter"] : null) * 15)), "html", null, true);
                        echo "px;\"></div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quarter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['h'], $context['hour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "today")) {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-now-marker\" style=\"top: ";
                    echo twig_escape_filter($this->env, (isset($context["now_top"]) ? $context["now_top"] : null), "html", null, true);
                    echo "px;\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 132
                    echo twig_escape_filter($this->env, (isset($context["text_now_label"]) ? $context["text_now_label"] : null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["now_text"]) ? $context["now_text"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 136
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 138
            echo "
\t\t\t\t\t<div class=\"ai1ec-day\">

\t\t\t\t\t\t";
            // line 141
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "notallday"));
            foreach ($context['_seq'] as $context["_key"] => $context["day_array"]) {
                // line 142
                echo "\t\t\t\t\t\t\t";
                $context["event"] = $this->getAttribute((isset($context["day_array"]) ? $context["day_array"] : null), "event");
                // line 143
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 144
                echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                echo "
\t\t\t\t\t\t\t\tdata-instance-id=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger
\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 149
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "start_truncated")) {
                    echo "ai1ec-start-truncated";
                }
                // line 150
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "end_truncated")) {
                    echo "ai1ec-end-truncated";
                }
                // line 151
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
                    echo "ai1ec-multiday";
                }
                echo "\"
\t\t\t\t\t\t\t\tstyle=\"top: ";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day_array"]) ? $context["day_array"] : null), "top"), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\theight: ";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day_array"]) ? $context["day_array"] : null), "height"), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\tleft: ";
                // line 154
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["day_array"]) ? $context["day_array"] : null), "indent") * (isset($context["indent_multiplier"]) ? $context["indent_multiplier"] : null)) + (isset($context["indent_offset"]) ? $context["indent_offset"] : null)), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\t";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "color_style"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 156
                $context["faded_color"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "faded_color");
                // line 157
                echo "\t\t\t\t\t\t\t\t\t";
                $context["rgba_color"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "rgba_color");
                // line 158
                echo "\t\t\t\t\t\t\t\t\t";
                if ((isset($context["faded_color"]) ? $context["faded_color"] : null)) {
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["rgba1"] = sprintf((isset($context["rgba_color"]) ? $context["rgba_color"] : null), "0.05");
                    // line 160
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["rgba3"] = sprintf((isset($context["rgba_color"]) ? $context["rgba_color"] : null), "0.3");
                    // line 161
                    echo "\t\t\t\t\t\t\t\t\t\tborder: 1px solid ";
                    echo twig_escape_filter($this->env, (isset($context["faded_color"]) ? $context["faded_color"] : null), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\t\t\tborder-color: ";
                    // line 162
                    echo twig_escape_filter($this->env, sprintf((isset($context["rgba_color"]) ? $context["rgba_color"] : null), "0.5"), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\t\t\tbackground-image: -webkit-linear-gradient( top, ";
                    // line 163
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -moz-linear-gradient( top, ";
                    // line 164
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -ms-linear-gradient( top, ";
                    // line 165
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -o-linear-gradient( top, ";
                    // line 166
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: linear-gradient( top, ";
                    // line 167
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t";
                }
                // line 169
                echo "\t\t\t\t\t\t\t\t\t\">

\t\t\t\t\t\t\t\t";
                // line 171
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "start_truncated")) {
                    // line 172
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-start-truncator\">◤</div>
\t\t\t\t\t\t\t\t";
                }
                // line 174
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "end_truncated")) {
                    // line 175
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-end-truncator\">◢</div>
\t\t\t\t\t\t\t\t";
                }
                // line 177
                echo "
\t\t\t\t\t\t\t\t<div class=\"ai1ec-event\">
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "short_start_time"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t";
                // line 183
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 184
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))) {
                    // line 185
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 186
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 188
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"ai1ec-popover ai1ec-popup ai1ec-popup-in-";
                // line 193
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "-view\">
\t\t\t\t\t\t\t\t";
                // line 194
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors")) {
                    // line 195
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-color-swatches\">";
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors");
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 197
                echo "\t\t\t\t\t\t\t\t<span class=\"ai1ec-popup-title\">
\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t";
                // line 199
                echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\thref=\"";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\t\t\t>";
                // line 201
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                echo "</a>
\t\t\t\t\t\t\t\t\t";
                // line 202
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))) {
                    // line 203
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 204
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 206
                echo "\t\t\t\t\t\t\t\t\t";
                if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))) {
                    // line 207
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
\t\t\t\t\t\t\t\t\t\t\tai1ec-buy-tickets\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\thref=\"";
                    // line 209
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 210
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 212
                echo "\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
                // line 214
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link")) {
                    // line 215
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"post-edit-link\"
\t\t\t\t\t\t\t\t\t\thref=\"";
                    // line 216
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                    // line 217
                    echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 220
                echo "
\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t";
                // line 222
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "popup_timespan");
                echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\thref=\"";
                // line 226
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\t\t";
                // line 227
                echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                echo ">
\t\t\t\t\t\t\t\t\t";
                // line 228
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
                echo "
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t";
                // line 231
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt")) {
                    // line 232
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-popup-excerpt\">";
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt");
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 234
                echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day_array'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo " ";
            // line 237
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
        // line 240
        echo " ";
        // line 241
        echo "\t\t</tr>
\t</tbody>

</table>

<div class=\"ai1ec-pull-left\">";
        // line 246
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
        return array (  758 => 246,  751 => 241,  749 => 240,  732 => 237,  730 => 236,  722 => 234,  716 => 232,  714 => 231,  708 => 228,  704 => 227,  700 => 226,  693 => 222,  689 => 220,  683 => 217,  679 => 216,  676 => 215,  674 => 214,  670 => 212,  665 => 210,  661 => 209,  657 => 207,  654 => 206,  649 => 204,  646 => 203,  640 => 201,  632 => 199,  622 => 195,  620 => 194,  616 => 193,  604 => 186,  601 => 185,  599 => 184,  589 => 180,  584 => 177,  577 => 174,  571 => 171,  560 => 167,  554 => 166,  548 => 165,  542 => 164,  536 => 163,  532 => 162,  527 => 161,  524 => 160,  521 => 159,  518 => 158,  515 => 157,  513 => 156,  509 => 155,  505 => 154,  501 => 153,  490 => 151,  485 => 150,  481 => 149,  477 => 148,  473 => 147,  468 => 145,  464 => 144,  459 => 143,  456 => 142,  452 => 141,  447 => 138,  443 => 136,  434 => 132,  428 => 130,  425 => 129,  419 => 128,  408 => 125,  404 => 124,  398 => 121,  393 => 119,  387 => 118,  384 => 117,  380 => 116,  377 => 115,  375 => 114,  367 => 112,  350 => 111,  346 => 110,  340 => 106,  338 => 105,  322 => 103,  320 => 102,  306 => 98,  294 => 93,  283 => 88,  279 => 86,  266 => 81,  264 => 80,  244 => 72,  206 => 59,  200 => 55,  168 => 43,  336 => 116,  334 => 115,  327 => 114,  325 => 113,  318 => 112,  316 => 111,  298 => 94,  292 => 103,  284 => 99,  276 => 97,  255 => 76,  246 => 83,  198 => 66,  178 => 57,  176 => 56,  148 => 46,  112 => 35,  102 => 31,  85 => 24,  58 => 15,  136 => 46,  133 => 45,  110 => 36,  98 => 30,  100 => 31,  90 => 27,  39 => 7,  311 => 116,  290 => 92,  278 => 106,  272 => 103,  267 => 101,  243 => 89,  240 => 88,  235 => 86,  209 => 76,  204 => 68,  202 => 72,  193 => 67,  187 => 61,  166 => 52,  144 => 45,  141 => 45,  92 => 29,  319 => 94,  317 => 93,  313 => 92,  310 => 109,  307 => 115,  305 => 107,  302 => 82,  291 => 77,  287 => 75,  285 => 74,  280 => 98,  277 => 71,  271 => 69,  269 => 82,  253 => 94,  238 => 65,  218 => 63,  189 => 46,  180 => 42,  163 => 36,  45 => 11,  42 => 13,  50 => 8,  47 => 7,  226 => 66,  220 => 73,  188 => 69,  182 => 66,  175 => 60,  152 => 47,  143 => 36,  122 => 38,  97 => 28,  93 => 25,  86 => 23,  71 => 21,  293 => 100,  289 => 99,  260 => 78,  254 => 88,  251 => 75,  248 => 92,  239 => 70,  237 => 80,  233 => 78,  230 => 67,  225 => 75,  222 => 65,  210 => 60,  208 => 70,  195 => 53,  171 => 54,  161 => 50,  159 => 40,  154 => 47,  150 => 38,  146 => 37,  137 => 34,  132 => 40,  126 => 36,  121 => 37,  118 => 33,  116 => 39,  111 => 35,  105 => 27,  99 => 27,  95 => 26,  83 => 23,  78 => 21,  62 => 17,  59 => 11,  38 => 9,  33 => 7,  29 => 10,  25 => 4,  164 => 42,  156 => 48,  139 => 44,  131 => 42,  127 => 42,  123 => 38,  114 => 38,  104 => 27,  96 => 31,  77 => 21,  74 => 19,  60 => 21,  69 => 18,  644 => 202,  636 => 200,  628 => 197,  619 => 336,  617 => 335,  611 => 331,  609 => 188,  606 => 329,  600 => 326,  597 => 325,  595 => 183,  592 => 323,  585 => 319,  580 => 175,  576 => 316,  573 => 172,  570 => 314,  567 => 169,  558 => 306,  549 => 300,  543 => 297,  534 => 291,  525 => 285,  520 => 282,  517 => 281,  510 => 275,  504 => 273,  497 => 152,  495 => 269,  489 => 265,  483 => 263,  476 => 260,  474 => 259,  469 => 256,  461 => 250,  453 => 245,  439 => 234,  433 => 230,  426 => 224,  420 => 222,  413 => 219,  411 => 126,  405 => 214,  399 => 212,  392 => 209,  390 => 208,  385 => 205,  379 => 200,  373 => 198,  366 => 195,  364 => 194,  359 => 191,  354 => 187,  348 => 184,  345 => 183,  339 => 180,  333 => 177,  330 => 176,  328 => 175,  324 => 173,  321 => 171,  315 => 118,  312 => 100,  304 => 97,  301 => 159,  297 => 112,  295 => 78,  288 => 110,  282 => 73,  275 => 70,  273 => 83,  268 => 142,  262 => 98,  256 => 135,  249 => 132,  242 => 83,  236 => 69,  216 => 72,  212 => 61,  207 => 117,  203 => 52,  192 => 52,  183 => 63,  177 => 61,  170 => 38,  155 => 39,  145 => 71,  138 => 47,  134 => 32,  119 => 40,  107 => 29,  101 => 51,  91 => 23,  80 => 22,  66 => 19,  35 => 6,  30 => 6,  63 => 18,  54 => 14,  43 => 7,  24 => 3,  21 => 2,  82 => 22,  73 => 20,  70 => 19,  64 => 15,  55 => 14,  52 => 15,  48 => 16,  46 => 10,  41 => 11,  37 => 8,  32 => 10,  22 => 2,  88 => 25,  81 => 25,  79 => 24,  75 => 22,  68 => 18,  57 => 14,  49 => 12,  44 => 15,  31 => 5,  27 => 4,  265 => 91,  259 => 88,  252 => 86,  250 => 85,  247 => 73,  241 => 81,  234 => 68,  232 => 108,  229 => 83,  227 => 77,  219 => 100,  213 => 77,  205 => 53,  201 => 91,  199 => 51,  196 => 65,  190 => 51,  186 => 50,  184 => 83,  181 => 48,  173 => 45,  169 => 77,  167 => 52,  162 => 89,  160 => 53,  157 => 71,  151 => 74,  149 => 47,  142 => 44,  135 => 33,  130 => 40,  128 => 31,  125 => 30,  117 => 36,  113 => 58,  108 => 29,  106 => 32,  103 => 28,  94 => 29,  89 => 26,  87 => 24,  84 => 25,  76 => 28,  72 => 21,  67 => 19,  65 => 15,  61 => 16,  56 => 10,  53 => 17,  51 => 13,  40 => 14,  34 => 12,  28 => 5,  26 => 5,  36 => 12,  23 => 3,  19 => 1,);
    }
}
