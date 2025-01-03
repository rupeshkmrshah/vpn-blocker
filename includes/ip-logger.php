<?php

function vpn_blocker_log_ip($ip, $status) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'vpn_blocker_logs';
    $wpdb->insert(
        $table_name,
        ['ip_address' => $ip, 'status' => $status, 'timestamp' => current_time('mysql')],
        ['%s', '%s', '%s']
    );
}

// Create the logs table on plugin activation
register_activation_hook(__FILE__, function () {
    global $wpdb;
    $table_name = $wpdb->prefix . 'vpn_blocker_logs';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        ip_address varchar(255) NOT NULL,
        status varchar(50) NOT NULL,
        timestamp datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
});
