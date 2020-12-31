<?php
/**
 * Customizer Control: ubik-heading-tabs.
 *
 * @package     Ubik WordPress theme
 * @subpackage  Controls
 * @since       1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Heading-tabs control
 */
class Ubik_Customizer_Toggle_Control_Heading_Control extends WP_Customize_Control {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'ubik-toggle-control-heading';

	/**
	 * Enqueue control related scripts/styles.
	 *
	 * @access public
	 */
	public function enqueue() {
		wp_enqueue_style( 'ubik-toggle-control-heading', UBIK_INC_DIR_URI . 'customizer/controls/toggle-control-heading/toggle-control-heading.css', null );
  }
  
  /**
   * Render the control in the customizer
   */
  public function render_content(){
    ?>
      <div class="toggle-switch-control">
        <div class="toggle-switch">
          <input type="checkbox" id="<?php echo esc_attr($this->id); ?>" name="<?php echo esc_attr($this->id); ?>" class="toggle-switch-checkbox" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?>>
          <label class="toggle-switch-label" for="<?php echo esc_attr( $this->id ); ?>">
            <span class="toggle-switch-inner"></span>
            <span class="toggle-switch-switch"></span>
          </label>
        </div>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <?php if( !empty( $this->description ) ) { ?>
          <span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
        <?php } ?>
      </div>
    <?php
    }

	
}
