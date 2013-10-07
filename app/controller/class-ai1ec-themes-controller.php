<?php
//
//  class-ai1ec-themes-controller.php
//  all-in-one-event-calendar
//
//  Created by The Seed Studio on 2012-04-05.
//

/**
 * Ai1ec_Themes_Controller class
 *
 * @package Controllers
 * @author time.ly
 **/
class Ai1ec_Themes_Controller {
	/**
	 * _instance class variable
	 *
	 * Class instance
	 *
	 * @var null | object
	 **/
	private static $_instance = NULL;

	/**
	 * get_instance function
	 *
	 * Return singleton instance
	 *
	 * @return object
	 **/
	static function get_instance() {
		if( self::$_instance === NULL ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Constructor
	 *
	 * Default constructor
	 **/
	private function __construct() { }

	/**
   * Returns the root path of ai1ec-themes.
	 *
	 * @return string
	 **/
	public function template_root_path( $template ) {
		return AI1EC_THEMES_ROOT . '/' . $template;
	}

	/**
	 * Returns the root URL of ai1ec-themes.
	 *
	 * @return string
	 **/
	public function template_root_url( $template ) {
		return AI1EC_THEMES_URL . '/' . $template;
	}

  /**
   * Returns the path to the active calendar theme.
   *
   * @return string
   */
  public function active_template_path() {
    return apply_filters(
      'ai1ec_template_root_path',
      apply_filters(
        'ai1ec_template',
        get_option( 'ai1ec_template', AI1EC_DEFAULT_THEME_NAME )
      )
    );
  }

  /**
   * Returns the URL to the active calendar theme.
   *
   * @return string
   */
  public function active_template_url() {
    return apply_filters(
      'ai1ec_template_root_url',
      apply_filters(
        'ai1ec_template',
        get_option( 'ai1ec_template', AI1EC_DEFAULT_THEME_NAME )
      )
    );
  }

	/**
	 * Check if core calendar theme folder is present in wp-content/ directory
	 *
	 * @return bool Existence
	 */
	public function are_themes_available() {
		if (
			true === @is_dir( AI1EC_THEMES_ROOT ) &&
			true === @is_dir( AI1EC_DEFAULT_THEME_PATH )
		) {
			return true;
		}
		return false;
	}

	/**
	 * Register Install Calendar Themes page in wp-admin.
	 */
	function register_theme_installer() {
		// Add menu item for theme install page, but remove it using
		// `remove_submenu_page()` to generate a "ghost" page
		add_submenu_page(
			'themes.php',
			__( 'Install Calendar Themes', AI1EC_PLUGIN_NAME ),
			__( 'Install Calendar Themes', AI1EC_PLUGIN_NAME ),
			'install_themes',
			AI1EC_PLUGIN_NAME . '-install-themes',
			array( $this, 'install_themes' )
		);
		remove_submenu_page(
			'themes.php',
			AI1EC_PLUGIN_NAME . '-install-themes'
		);
	}

	/**
	 * Returns whether core theme files need to be updated (only if core theme
	 * files exist in the first place, checked using above function).
	 *
	 * @return bool
	 */
	public function are_themes_outdated() {
		if ( ! $this->are_themes_available() ) {
			return FALSE;
		}
		if ( get_option( 'ai1ec_themes_version', 1 ) >= AI1EC_THEMES_VERSION ) {
			return FALSE;
		}
		return TRUE;
	}

	/**
	 * Returns a notice informing admin to update the core theme files if core
	 * theme files are determined to be out of date. Else returns '' (evaluates
	 * to false). If $echo is true, outputs the notice. Else outputs nothing.
	 *
	 * @see  Ai1ec_Themes_Controller::are_themes_outdated()
	 *
	 * @param  boolean $echo Whether to output the message or just return it.
	 * @return boolean       Whether core theme files are out of date.
	 */
	public function frontend_outdated_themes_notice( $echo = true ) {
		$output = '';
		if ( $this->are_themes_outdated() ) {
			$output .= '<p><em>';
			$output .= __( 'The All-in-One Event Calendar core theme files are out of date and the calendar has been temporarily disabled.', AI1EC_PLUGIN_NAME );
			$output .= ' ';
			if ( current_user_can( 'install_themes' ) ) {
				$output .= sprintf(
					__( 'To enable the calendar, please <a href="%s">log into the WordPress dashboard</a> and follow the instructions.', AI1EC_PLUGIN_NAME ),
					esc_attr( admin_url() )
				);
			}
			else {
				$output .= __( 'To enable the calendar, an administrator must log into the WordPress dashboard and follow the instructions.', AI1EC_PLUGIN_NAME );
			}
			$output .= '</em></p>';
		}

		if ( $echo ) {
			echo $output;
		}

		return $output;
	}

	/**
	 * copy_directory function
	 *
	 * @return void
	 **/
	private function copy_directory( $source, $destination ) {
		if( is_dir( $source ) ) {
			@mkdir( $destination );
			$directory = dir( $source );
			while( FALSE !== ( $readdirectory = $directory->read() ) ) {
				if( $readdirectory == '.' || $readdirectory == '..' ) {
					continue;
				}
				$PathDir = $source . '/' . $readdirectory;
				if( is_dir( $PathDir ) ) {
					$this->copy_directory( $PathDir, $destination . '/' . $readdirectory );
					continue;
				}
				copy( $PathDir, $destination . '/' . $readdirectory );
			}

			$directory->close();
		} else {
			copy( $source, $destination );
		}
	}


	/**
	 * install_themes function
	 *
	 * @return void
	 **/
	function install_themes() {
		?>
		<div class="wrap">
			<?php
			screen_icon();
			?>
			<h2><?php _e( 'Install Calendar Themes', AI1EC_PLUGIN_NAME ) ?></h2>
		<?php
		// WP_Filesystem figures it out by itself, but the filesystem method may be overriden here
		$method = '';
		$url = wp_nonce_url( AI1EC_INSTALL_THEMES_BASE_URL, AI1EC_PLUGIN_NAME . '-theme-installer' );
		if( false === ( $creds = request_filesystem_credentials( $url, $method, false, false ) ) ) {
			// if we get here, then we don't have credentials yet,
			// but have just produced a form for the user to fill in,
			// so stop processing for now
			return false; // stop the normal page form from displaying
		}

		// now we have some credentials, try to get the wp_filesystem running
		if( ! WP_Filesystem( $creds ) ) {
			// our credentials were no good, ask the user for them again
			request_filesystem_credentials( $url, $method, true, false );
			return false;
		}
		global $wp_filesystem;
		$themes_root = $wp_filesystem->wp_content_dir() . AI1EC_THEMES_FOLDER;
		$result = $wp_filesystem->mkdir( $themes_root );
		if( $result === false ) {
			?>
			<p><?php _e( sprintf( 'Unable to create %s folder', AI1EC_THEMES_ROOT ), AI1EC_PLUGIN_NAME ) ?></p>
			<p><?php _e( sprintf( 'Try to create %s folder manually and then restart the process',
			            AI1EC_THEMES_ROOT ), AI1EC_PLUGIN_NAME ) ?></p>
			</div>
			<?php
			return false;
		}
		$plugin_themes_dir = $wp_filesystem->wp_plugins_dir() . AI1EC_PLUGIN_NAME . DIRECTORY_SEPARATOR . AI1EC_THEMES_FOLDER;
		$result = copy_dir( $plugin_themes_dir, $themes_root );
		if( is_wp_error( $result ) ) {
			?>
			<div id="message" class="error">
				<h3>
					<?php _e( 'Errors occurred while we tried to install your core Calendar Themes', AI1EC_PLUGIN_NAME ) ?>.
				</h3>
				<p>
					<strong>
						<?php _e(
							sprintf( 'Please fix the error listed below or your calendar may malfunction: %s', $result->get_error_message() ),
							AI1EC_PLUGIN_NAME
						) ?>
					</strong>
				</p>
			</div>
			<?php
		} else {
			update_option( 'ai1ec_themes_version', AI1EC_THEMES_VERSION );
			?>
			<div id="message" class="updated"><h3><?php _e( 'Calendar themes were installed successfully', AI1EC_PLUGIN_NAME ) ?>.</h3></div>
			<p>
				<a class="button" href="<?php echo AI1EC_SETTINGS_BASE_URL; ?>">
					<?php _e( 'All-in-One Event Calendar Settings »', AI1EC_PLUGIN_NAME ); ?>
				</a>
			</p>
			<?php
		}
		?>
		</div>
		<?php
	}

	/**
	 * Register Update Calendar Themes page in wp-admin.
	 */
	function register_theme_updater() {
		// Add menu item for theme update page, but without the actual menu item
		// by removing it again right away.
		add_submenu_page(
			'edit.php?post_type=' . AI1EC_POST_TYPE,
			__( 'Update Core Calendar Files', AI1EC_PLUGIN_NAME ),
			__( 'Update Core Calendar Files', AI1EC_PLUGIN_NAME ),
			'install_themes',
			AI1EC_PLUGIN_NAME . '-update-themes',
			array( &$this, 'update_core_themes' )
		);
		remove_submenu_page(
			'edit.php?post_type=' . AI1EC_POST_TYPE,
			AI1EC_PLUGIN_NAME . '-update-themes'
		);
	}

	/**
	 * Called by the Update Calendar Themes page. Updates core themes with any
	 * files that have changed since the last time a theme update has run.
	 */
	function update_core_themes() {
		global $ai1ec_view_helper;

		$src_dir = trailingslashit( AI1EC_PATH . DIRECTORY_SEPARATOR . AI1EC_THEMES_FOLDER );
		$dest_dir = trailingslashit( AI1EC_THEMES_ROOT );

		// List of core themes.
		$folders = array(
			'vortex',
		);

		// Array to hold error notifications to the user while updating the themes.
		$delete_errors = array();
		$copy_errors = array();

		// WP_Filesystem figures it out by itself, but the filesystem method may be
		// overriden here.
		$method = '';
		$url = wp_nonce_url(
			AI1EC_UPDATE_THEMES_BASE_URL,
			AI1EC_PLUGIN_NAME . '-theme-updater'
		);
		$creds = request_filesystem_credentials( $url, $method, false, false );
		if ( false === $creds ) {
			// If we get here, then we don't have credentials yet,
			// but have just produced a form for the user to fill in,
			// so stop processing for now.
			return false; // Stop the normal page form from displaying.
		}

		// Now we have some credentials, try to get the wp_filesystem running.
		if ( ! WP_Filesystem( $creds ) ) {
			// Our credentials were no good, ask the user for them again.
			request_filesystem_credentials( $url, $method, true, false );
			return false;
		}

		global $wp_filesystem;

		// 1. Remove old folders.
		foreach ( $folders as $folder ) {
			$folder = $dest_dir . $folder;
			// Check if folder exists.
			if ( $wp_filesystem->is_dir( $folder ) ) {
				// Try to delete it recusively.
				if ( false === $wp_filesystem->delete( $folder, true ) ) {
					// If delete failed, chmod folder recursively to 0644 and try again.
					$wp_filesystem->chmod( $folder, 0644, $recursive );
					if ( false === $wp_filesystem->delete( $folder, true ) ) {
						// We were not able to remove the folder; notify the user.
						$delete_errors[] = $folder;
					}
				}
			}
		}

		// 2. Copy fresh versions of folders.
		foreach ( $folders as $folder ) {
			$src_folder = $src_dir . $folder;
			$dest_folder = $dest_dir . $folder;
			// Try to copy the folder.
			$result = copy_dir( $src_dir, $dest_dir );
			if ( is_wp_error( $result ) ) {
				// We were not able to copy the folder; notify the user.
				$copy_errors[] = $src_folder;
			}
		}

		$errors = array();

		if ( $delete_errors ) {
			$error = '<div class="error"><p><strong>';
			$error .= __( 'There was an error while removing outdated core themes from your themes folder.', AI1EC_PLUGIN_NAME );
			$error .= '</strong> ';
			$error .= __( 'Please FTP to your web server and manually delete:', AI1EC_PLUGIN_NAME );
			$error .= '</p><blockquote><div><code>';
			$error .= implode( '</code></div><div><code>', $delete_errors );
			$error .= '</code></div></blockquote></div>';
			$errors[] = $error;
		}

		if ( $copy_errors ) {
			$error = '<div class="error"><p><strong>';
			$error .= __( 'There was an error while copying core themes from the plugin into the themes folder.', AI1EC_PLUGIN_NAME );
			$error .= '</strong> ';
			$error .= __( 'Please FTP to your web server and manually copy the folders:', AI1EC_PLUGIN_NAME );
			$error .= '</p><blockquote><div><code>';
			$error .= implode( '</code></div><div><code>', $copy_errors );
			$error .= '</code></div></blockquote>';
			$error .= '<p>' . __( 'to', AI1EC_PLUGIN_NAME ) . ' <code>' . $dest_dir .
				'</code></p></div>';
			$errors[] = $error;
		}

		// Unsuccessful core theme file update.
		if ( $errors ) {
			array_unshift(
				$errors,
				__( '<div id="message" class="error"><h3>Errors occurred while we tried to update your core Calendar Themes</h3><p><strong>Please follow any instructions listed below or your calendar may malfunction:</strong></p></div>', AI1EC_PLUGIN_NAME )
			);
		}
		// Successful core theme file update.
		else {
			// Update theme version
			update_option( 'ai1ec_themes_version', AI1EC_THEMES_VERSION );

			$msg = '<div id="message" class="updated"><h3>';
			$msg .= __( 'Your core Calendar Themes were updated successfully', AI1EC_PLUGIN_NAME );
			$msg .= '</h3><p>';
			$msg .= __( 'Be sure to <strong>reload your browser</strong> when viewing your site to make sure the most current scripts are used.', AI1EC_PLUGIN_NAME );
			$msg .= '</p></div>';
		}

		$args = array(
			'msg' => $msg,
			'errors' => $errors,
		);

		$ai1ec_view_helper->display_admin( 'themes-updated.php', $args );
	}

  /**
   * Called immediately after WP theme's functions.php is loaded. Load our own
   * theme's functions.php at this time, and the default theme's functions.php.
   */
  function setup_theme() {
    $functions_files = array(
      $this->active_template_path() . '/functions.php',
      AI1EC_DEFAULT_THEME_PATH . '/functions.php',
    );

    $functions_files = array_unique( $functions_files );

    foreach( $functions_files as $file ) {
      if ( file_exists( $file ) ) {
        include( $file );
      }
    }
  }
}
// END class
