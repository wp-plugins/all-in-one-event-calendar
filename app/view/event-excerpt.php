<div class="ai1ec-excerpt">
	<a class="ai1ec-button ai1ec-event-link" href="<?php the_permalink() ?>">
		<?php _e( 'View Event »', AI1EC_PLUGIN_NAME ) ?>
	</a>
	<div class="ai1ec-time"><label class="ai1ec-label"><?php _e( 'When:', AI1EC_PLUGIN_NAME ) ?></label> <?php echo $event->timespan_html ?></div>
	<?php if( $location ): ?>
		<div class="ai1ec-location"><label class="ai1ec-label"><?php _e( 'Where:', AI1EC_PLUGIN_NAME ) ?></label> <?php echo $location ?></div>
	<?php endif ?>
</div>
