<?php

// Creating the widget 
class JoinUs_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// Base ID of your widget
			'JoinUs_Widget',

			// Widget name will appear in UI
			__( 'Join us', TEXT_DOMAIN),

			// Widget description
			array( 'description' => __( 'De Join Us call-to-action widget.', TEXT_DOMAIN ), )
		);
	}

	// Creating widget front-end
	// This is where the action happens
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		echo '<img class="widget-joinus-image" src="' . get_stylesheet_directory_uri() . '/assets/images/img-laptop-bureau.png">';

		// This is where you run the code and display the output
		echo '<p>' . __( 'Een flexibele werkplek huren bij het werkstation. Van een flexplek tot een kantoorunit.', TEXT_DOMAIN ) . '</p>';

		echo '<p><a href="#" class="btn">' . __( 'Rondleiding', TEXT_DOMAIN ) . ' <i class="fa fa-long-arrow-right"></i></a></p>';

		echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance['title'] ) ) {
			$title = $instance['title'];
		} else {
			$title = __( 'Join Us', TEXT_DOMAIN );
		}

		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
			       name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
			       value="<?php echo esc_attr( $title ); ?>"/>
		</p>
		<?php
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		return $instance;
	}
}

// Register and load the widget
function JoinUs_Widget_load() {
	register_widget( 'JoinUs_Widget' );
}
add_action( 'widgets_init', 'JoinUs_Widget_load' );



// Creating the widget 
class StayInTouch_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// Base ID of your widget
			'StayInTouch_Widget',

			// Widget name will appear in UI
			__( 'Stay In Touch', TEXT_DOMAIN),

			// Widget description
			array( 'description' => __( 'De Stay In Touch social media widget.', TEXT_DOMAIN ), )
		);
	}

	// Creating widget front-end
	// This is where the action happens
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		echo '<ul class="social-share turquoise">';

		echo get_field( 'facebook_url', 'options' ) ? '<li class="social-facebook"><a href="' .  get_field( 'facebook_url', 'options' ) . '" title="' . __( 'Deel op Facebook', TEXT_DOMAIN ) . '">' . __( 'Deel op Facebook', TEXT_DOMAIN ) . '</a></li>' : '';
		echo get_field( 'twitter_url', 'options' ) ? '<li class="social-twitter"><a href="' .  get_field( 'twitter_url', 'options' ) . '" title="' . __( 'Deel op Twitter', TEXT_DOMAIN ) . '">' . __( 'Deel op Twitter', TEXT_DOMAIN ) . '</a></li>' : '';
		echo get_field( 'linkedin_url', 'options' ) ? '<li class="social-linkedin"><a href="' .  get_field( 'linkedin_url', 'options' ) . '" title="' . __( 'Deel op LinkedIn', TEXT_DOMAIN ) . '">' . __( 'Deel op LinkedIn', TEXT_DOMAIN ) . '</a></li>' : '';
		echo get_field( 'instagram_url', 'options' ) ? '<li class="social-instagram"><a href="' .  get_field( 'instagram_url', 'options' ) . '" title="' . __( 'Deel op Instagram', TEXT_DOMAIN ) . '">' . __( 'Deel op Instagram', TEXT_DOMAIN ) . '</a></li>' : '';

		echo '</ul>';


		echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance['title'] ) ) {
			$title = $instance['title'];
		} else {
			$title = __( 'Stay In Touch', TEXT_DOMAIN );
		}

		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
			       name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
			       value="<?php echo esc_attr( $title ); ?>"/>
		</p>
		<?php
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		return $instance;
	}
}

// Register and load the widget
function StayInTouch_Widget_load() {
	register_widget( 'StayInTouch_Widget' );
}
add_action( 'widgets_init', 'StayInTouch_Widget_load' );