<div class="weap">
    <h1>CPT Manager</h1>
    <?php settings_errors(); ?>

    <form method="post" action="options.php">
        <?php
            settings_fields( 'event_cpt_settings' );
            do_settings_sections( 'event_manager_cpt' );
            submit_button();
        ?>
    </form>
</div>