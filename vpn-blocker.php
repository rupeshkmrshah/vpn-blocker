<?php
/**
 * Plugin Name: VPN Blocker
 * Description: Block VPN users from accessing specific pages or posts using the ProxyCheck.io API.
 * Version: 1.0
 * Author: Rupesh Shah - College Dunia
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly

// Include necessary files
require_once plugin_dir_path(__FILE__) . 'includes/ip-logger.php';
require_once plugin_dir_path(__FILE__) . 'includes/api-handler.php';

// Add settings page
require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';

// Enqueue frontend scripts
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('vpn-blocker-script', plugin_dir_url(__FILE__) . 'js/blocker.js', [], '1.0', true);
});

// Hook to check VPN status on the frontend
add_action('template_redirect', 'vpn_blocker_check_vpn');

function vpn_blocker_check_vpn() {
    // Only apply on specific pages or posts
    $blocked_ids = get_option('vpn_blocker_pages', []);
    if (!is_singular() || !in_array(get_the_ID(), $blocked_ids)) {
        return;
    }

    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    $api_key = get_option('vpn_blocker_api_key');

    if (!$api_key) return;

    $is_vpn = vpn_blocker_check_ip($visitor_ip, $api_key);

    if ($is_vpn) {
        $custom_message = get_option('vpn_blocker_message', 'Access denied. VPN detected.');
        vpn_blocker_log_ip($visitor_ip, 'Blocked');
        wp_die($custom_message);
    } else {
        vpn_blocker_log_ip($visitor_ip, 'Allowed');
    }
}
