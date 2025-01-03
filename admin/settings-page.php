<?php

add_action('admin_menu', function () {
    add_options_page(
        'VPN Blocker Settings',
        'VPN Blocker',
        'manage_options',
        'vpn-blocker',
        'vpn_blocker_settings_page'
    );
});

function vpn_blocker_settings_page() {
    // Handle form submission safely
    if (!empty($_POST['vpn_blocker_save_settings'])) {
        // Sanitize and save the API key
        update_option('vpn_blocker_api_key', sanitize_text_field($_POST['vpn_blocker_api_key'] ?? ''));

        // Sanitize and save the custom message
        update_option('vpn_blocker_message', sanitize_text_field($_POST['vpn_blocker_message'] ?? 'Access denied. VPN detected.'));

        // Sanitize and save the blocked pages
        $blocked_pages = isset($_POST['vpn_blocker_pages']) ? array_map('intval', (array) $_POST['vpn_blocker_pages']) : [];
        update_option('vpn_blocker_pages', $blocked_pages);
        
        echo '<div class="updated"><p>Settings saved successfully.</p></div>';
    }

    // Fetch saved options
    $api_key = get_option('vpn_blocker_api_key', '');
    $message = get_option('vpn_blocker_message', 'Access denied. VPN detected.');
    $blocked_pages = get_option('vpn_blocker_pages', []);

    // Fetch all pages and posts
    $pages = get_posts(['post_type' => ['page', 'post'], 'numberposts' => -1]);
    ?>
    <div class="wrap">
        <h1>VPN Blocker Settings</h1>
        <form method="post">
            <table class="form-table">
                <tr>
                    <th><label for="vpn_blocker_api_key">API Key</label></th>
                    <td><input type="text" name="vpn_blocker_api_key" value="<?php echo esc_attr($api_key); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th><label for="vpn_blocker_message">Custom Message</label></th>
                    <td><input type="text" name="vpn_blocker_message" value="<?php echo esc_attr($message); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th><label for="vpn_blocker_pages">Blocked Pages</label></th>
                    <td>
                        <select name="vpn_blocker_pages[]" multiple style="width: 100%; height: 150px;">
                            <?php foreach ($pages as $page) : ?>
                                <option value="<?php echo $page->ID; ?>" <?php selected(in_array($page->ID, $blocked_pages)); ?>>
                                    <?php echo esc_html($page->post_title); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <p class="description">Hold down the Ctrl (Windows) or Command (Mac) button to select multiple pages or posts.</p>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="vpn_blocker_save_settings" value="1" />
            <?php submit_button('Save Settings', 'primary'); ?>
        </form>
    </div>
    <?php
}
