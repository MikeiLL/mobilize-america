<?php
use MZ_Mobilize_America\Common as Common;
use MZ_Mobilize_America\Libraries as Libraries;

?><div id="<?php echo $data->atts->container_id; ?>" class="<?php echo $data->atts->container_class; ?>"><?php echo $data->atts->loading_text; ?></div>

<?php
        
foreach($data->api_result->data as $k => $event){
    ?>
        <h3><?php echo $event->title; ?></h3>
        <ul>
        <?php foreach($event->timeslots as $timeslot) { ?>
            <li><?php echo date_i18n( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ), $timeslot->start_date); ?> - <?php echo date_i18n( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ), $timeslot->end_date); ?></li>
        <?php } ?>
    </ul>
    <?php
}
?>
