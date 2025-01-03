<?php

function vpn_blocker_check_ip($ip, $api_key) {
    $url = "https://proxycheck.io/v2/{$ip}?key={$api_key}&vpn=1";
    $response = wp_remote_get($url);
    if (is_wp_error($response)) return false;

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    return isset($data['status']) && $data['status'] === 'ok' && isset($data[$ip]['proxy']) && $data[$ip]['proxy'] === 'yes';
}
