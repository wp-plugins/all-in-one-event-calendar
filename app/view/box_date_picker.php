<div class="ai1ec-date-picker-holder">
	<div class="ai1ec-date-picker-calendar">
	  <label for="ai1ec-date-picker-calendar">
			<?php _e( 'Select dates', AI1EC_PLUGIN_NAME ) ?>:
		</label>
		<input type="text" class="ai1ec-date-input" id="ai1ec-date-picker-input" style="display: none;" />
		<input type="hidden" name="ai1ec_date_picker_input" id="ai1ec-date-picker-time" value="" />
	</div>
	<div class="ai1ec-date-picker-dates"><?php echo $dates ?></div>
</div>