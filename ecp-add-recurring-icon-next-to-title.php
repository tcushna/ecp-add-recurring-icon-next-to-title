    <div class="tribe-events-single-event-recurrence-description">

	<?php 
    echo $title; 
    $is_recurring = '';

            if ( ! empty( $event_id ) && function_exists( 'tribe_is_recurring_event' ) ) {
                $is_recurring = tribe_is_recurring_event( $event_id );
            }
        
            if ( $is_recurring ) { 
            ?>
        
                <img src="<?php echo Tribe__Main::instance()->plugin_url  . 'src/modules/icons/recurrence.svg'; ?>" />    
                
           <?php      
            } 
    
    ?>
    </div>