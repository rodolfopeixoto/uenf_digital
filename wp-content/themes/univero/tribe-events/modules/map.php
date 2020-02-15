<?php
/**
 * Template used for maps embedded within single events and venues.
 * Override this template in your own theme by creating a file at:
 *
 *     [your-theme]/tribe-events/modules/map.php
 *
 * @var $index
 * @var $width
 * @var $height
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$style = apply_filters( 'tribe_events_embedded_map_style', "height: $height; width: $width", $index );
?>
<h3 class="title"><?php echo esc_html__('Event location', 'univero'); ?></h3>
<div id="tribe-events-gmap-<?php echo esc_attr( $index ) ?>" style="<?php echo esc_attr( $style ) ?>"></div><!-- #tribe-events-gmap-<?php echo esc_attr( $index ) ?> -->
