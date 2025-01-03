(function () {
    document.addEventListener('DOMContentLoaded', function () {
        // Fetch the IP check endpoint dynamically
        fetch(vpnBlocker.ajax_url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                action: 'vpn_blocker_check',
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.is_vpn) {
                // Replace the entire content of the page with a custom message
                document.body.innerHTML = `
                    <div style="text-align: center; margin-top: 20%; font-family: Arial, sans-serif;">
                        <h1>Access Denied</h1>
                        <p>${data.message}</p>
                    </div>
                `;
            }
        })
        .catch(err => {
            console.error('Error checking VPN status:', err);
        });
    });
})();
