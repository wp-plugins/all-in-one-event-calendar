<?php

/**
 * Handles trash/delete operations.
 *
 * NOTICE: only operations on events entries themselve is handled.
 * If plugins need some extra handling - they must bind to appropriate
 * actions on their will.
 *
 * @author     Time.ly Network Inc.
 * @since      2.0
 *
 * @package    AI1EC
 * @subpackage AI1EC.Model
 */
class Ai1ec_Event_Trashing extends Ai1ec_Base {

	public function remove_childs( $post_id, $full_remove = false ) {
		// to be filled when hierarchy is introduced
		return true;
	}

	/**
	 * Handle post (event) trashing.
	 *
	 * @wp_hook trash_post
	 *
	 * @param int $post_id ID of post, which was trashed.
	 *
	 * @return bool Success.
	 */
	public function trash( $post_id ) {
		return $this->remove_childs( $post_id, false ) &&
		$this->delete_cache( $post_id );
	}

	/**
	 * Handle post (event) untrashing.
	 *
	 * @wp_hook untrash_post
	 *
	 * @param int $post_id ID of post, which was untrashed.
	 *
	 * @return bool Success.
	 */
	public function untrash( $post_id ) {
		// to be filled when hierarchy is introduced
		return true;
	}

	/**
	 * Handle post (event) deletion.
	 *
	 * Executed before post is deleted, but after meta is removed.
	 *
	 * @wp_hook delete_post
	 *
	 * @param int $post_id ID of post, which was trashed.
	 *
	 * @return bool Success.
	 */
	public function delete( $post_id ) {
		$post_id = (int)$post_id;
		$where   = array( 'post_id' => (int)$post_id );
		$format  = array( '%d' );
		$dbi     = $this->_registry->get( 'dbi.dbi' );
		$success = $this->remove_childs( $post_id, true );
		$success &= $dbi->delete( 'ai1ec_events',          $where, $format );
		$success &= $dbi->delete( 'ai1ec_event_instances', $where, $format );
		unset( $where, $dbi );
		return $success && $this->delete_cache( $post_id );
	}

	/**
	 * Remove the cache for a specific event
	 *
	 * @param $event_id
	 * @internal param $event_id
	 *
	 * @return boolean
	 */
	public function delete_cache( $event_id ) {
		// to be added with cache introduction
		return true;
	}

}