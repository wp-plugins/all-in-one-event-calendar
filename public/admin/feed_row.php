<div class="ai1ec-feed-container ai1ec-well ai1ec-well-sm ai1ec-clearfix">
	<div class="ai1ec-form-group">
		<label><?php _e( 'iCalendar/.ics Feed URL:', AI1EC_PLUGIN_NAME ); ?></label>
		<input type="text" class="ai1ec-feed-url ai1ec-form-control"
			readonly="readonly" value="<?php echo esc_attr( $feed_url ) ?>">
	</div>
	<input type="hidden" name="feed_id" class="ai1ec_feed_id"
		value="<?php echo $feed_id;?>">
	<div class="ai1ec-clearfix">
		<?php if ( $event_category ) : ?>
			<div class="ai1ec-feed-category ai1ec-pull-left">
				<?php _e( 'Event categories:', AI1EC_PLUGIN_NAME ); ?>
				<strong><?php echo $event_category; ?></strong>
			</div>
		<?php endif; ?>
		<?php if ( $tags ) : ?>
			<div class="ai1ec-feed-tags ai1ec-pull-left">
				<?php _e( 'Tag with', AI1EC_PLUGIN_NAME ); ?>:
				<strong><?php echo $tags; ?></strong>
			</div>
		<?php endif; ?>
	</div>
	<?php do_action( 'ai1ec_ics_row_after_categories_tags', $feed_id ); ?>
	<div class="ai1ec-clearfix">
		<div class="ai1ec-feed-comments-enabled ai1ec-pull-left">
			<?php _e( 'Allow comments', AI1EC_PLUGIN_NAME ); ?>:
			<strong><?php
			if ( $comments_enabled ) {
				_e( 'Yes', AI1EC_PLUGIN_NAME );
			} else {
				_e( 'No',  AI1EC_PLUGIN_NAME );
			}
			?></strong>
		</div>
		<div class="ai1ec-feed-map-display-enabled ai1ec-pull-left">
			<?php _e( 'Show map', AI1EC_PLUGIN_NAME ); ?>:
			<strong><?php
			if ( $map_display_enabled ) {
				_e( 'Yes', AI1EC_PLUGIN_NAME );
			} else {
				_e( 'No',  AI1EC_PLUGIN_NAME );
			}
			?></strong>
		</div>
	</div>
	<div class="ai1ec-feed-keep-tags-categories">
		<?php _e( 'Keep original events categories and tags', AI1EC_PLUGIN_NAME ); ?>:
		<strong><?php
		if ( $keep_tags_categories ) {
			_e( 'Yes', AI1EC_PLUGIN_NAME );
		} else {
			_e( 'No',  AI1EC_PLUGIN_NAME );
		}
		?></strong>
	</div>
	<?php do_action( 'ai1ec_ics_row_after_keep_categories_tags', $feed_id ); ?>
	<div class="ai1ec-feed-keep-old-events">
		<?php _e( 'On refresh, preserve previously imported events that are missing from the feed', AI1EC_PLUGIN_NAME ); ?>:
		<strong><?php
		if ( $keep_old_events ) {
			_e( 'Yes', AI1EC_PLUGIN_NAME );
		} else {
			_e( 'No',  AI1EC_PLUGIN_NAME );
		}
		?></strong>
	</div>
	<div class="ai1ec-feed-import-timezone">
		<span class="ai1ec-tooltip-toggle" title="<?php _e( 'Guesses the time zone of events that have none specified; recommended for Google Calendar feeds', AI1EC_PLUGIN_NAME ); ?>">
			<?php _e( 'Assign default time zone to events in UTC', AI1EC_PLUGIN_NAME );
		?>:</span>
		<strong><?php
			if ( $feed_import_timezone ) {
				_e( 'Yes', AI1EC_PLUGIN_NAME );
			} else {
				_e( 'No',  AI1EC_PLUGIN_NAME );
			} ?>
		</strong>
	</div>
	<?php do_action( 'ai1ec_ics_row_after_settings', $feed_id ); ?>
	<div class="ai1ec-btn-group ai1ec-pull-right">
		<button type="button"
			class="ai1ec-btn ai1ec-btn-sm ai1ec-btn-default ai1ec-text-primary
				ai1ec_update_ics"
			data-loading-text="<?php echo esc_attr(
				'<i class="ai1ec-fa ai1ec-fa-refresh ai1ec-fa-spin ai1ec-fa-fw"></i> ' .
				__( 'Refreshing&#8230;', AI1EC_PLUGIN_NAME ) ); ?>">
			<i class="ai1ec-fa ai1ec-fa-refresh ai1ec-fa-fw"></i>
			<?php _e( 'Refresh', AI1EC_PLUGIN_NAME ); ?>
		</button>
		<button type="button"
			class="ai1ec-btn ai1ec-btn-sm ai1ec-btn-default ai1ec-text-danger
				ai1ec_delete_ics"
			data-loading-text="<?php echo esc_attr(
				'<i class="ai1ec-fa ai1ec-fa-spinner ai1ec-fa-spin ai1ec-fa-fw"></i> ' .
				__( 'Removing&#8230;', AI1EC_PLUGIN_NAME ) ); ?>">
			<i class="ai1ec-fa ai1ec-fa-times ai1ec-fa-fw"></i>
			<?php _e( 'Remove', AI1EC_PLUGIN_NAME ); ?>
		</button>
	</div>
</div>
