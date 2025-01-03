# VPN Blocker

**VPN Blocker** is a WordPress plugin that helps website owners prevent access from users who are connecting through VPNs, proxies, or anonymizing services. With this plugin, you can block, redirect, or customize messages for visitors using VPN connections. The plugin also integrates with the **ProxyCheck.io** service, allowing you to use your own API key for real-time VPN detection.

## Features

- **Customizable Messages**: You can create custom messages that will be displayed when a VPN user is detected.
- **ProxyCheck.io Integration**: Allows website owners to use their own API key from [ProxyCheck.io](https://proxycheck.io). This feature provides a more personalized and accurate VPN detection service.
- **Page/Post-Specific Blocking**: Choose specific pages or posts you want to block VPN users from accessing.
- **VPN Detection**: Automatically detects VPNs, proxies, and anonymizing networks.
- **Automatic IP Database Updates**: Keep your plugin updated with the latest VPN and proxy IPs for accurate detection.
- **Whitelist & Blacklist**: Add trusted IPs to a whitelist or block specific IP ranges.

## Installation

Since this plugin is hosted on GitHub, it must be manually downloaded and uploaded to your WordPress site.

### Steps to Install the Plugin:

1. **Download the Plugin**:
   - Go to the [VPN Blocker repository on GitHub](https://github.com/rupeshkmrshah/).
   - Click on the green **Code** button and select **Download ZIP**.
   - Alternatively, you can clone the repository using Git if you're familiar with that method.

2. **Install the Plugin in WordPress**:
   - Go to the WordPress admin area of your website.
   - Navigate to **Plugins** > **Add New**.
   - Click the **Upload Plugin** button at the top of the page.
   - Choose the ZIP file you downloaded and click **Install Now**.
   - Once the installation is complete, click **Activate** to enable the plugin.

## Configuration

1. After activation, go to **Settings** > **VPN Blocker** in your WordPress dashboard.
2. In the settings page, you can configure the following options:
   - **Custom Messages**: Set the message that should be displayed when a VPN user is detected. You can personalize this message to suit your needs.
   - **API Key**: Enter your own API key from [ProxyCheck.io](https://proxycheck.io). Sign up on ProxyCheck.io to get your unique key, which enhances the accuracy of VPN detection.
   - **Page/Post-Specific Blocking**: Choose specific pages or posts to block VPN users. You can select multiple posts or pages, or block all users from VPN connections across your site.
   - **Blocking Action**: Decide whether to **block** VPN users or **redirect** them to a custom page.
   - **Automatic Updates**: Enable or disable automatic updates to keep the VPN detection database up-to-date.
   - **Whitelist & Blacklist**: Manage IP addresses by whitelisting trusted users or blocking specific ranges of IPs.

## Usage

- **Customizable Messages**: After VPN detection, users will see the message you've configured in the plugin settings. You can inform them why access is blocked or suggest alternatives.
- **API Key Integration**: By entering your ProxyCheck.io API key, the plugin uses their service for real-time VPN detection, providing more reliable and accurate results.
- **Page-Specific Blocking**: You can select specific pages or posts you want to block VPN users from. This is useful for blocking access to sensitive content or member-only areas.
- **Real-Time Blocking**: Once the plugin is configured, it will automatically start blocking or redirecting VPN users based on your settings.

## FAQs

### 1. **How does the VPN detection work?**

The plugin uses the **ProxyCheck.io** API (if configured) to detect VPNs, proxies, and anonymizing services by checking the user's IP address. If a match is found, the plugin blocks or redirects the user based on your settings.

### 2. **How do I get my API key from ProxyCheck.io?**

To get your own API key, go to [ProxyCheck.io](https://proxycheck.io) and sign up for an account. After registration, you can generate your API key, which can then be entered into the plugin’s settings.

### 3. **Can I customize the message shown to VPN users?**

Yes, the plugin allows you to enter a custom message that will be displayed to users detected as coming from VPN networks or proxy IPs. You can personalize this message to match the tone and style of your website.

### 4. **Can I block VPN users only on specific pages or posts?**

Yes, the plugin provides the ability to block VPN users only on specific pages or posts. You can select which pages/posts to restrict from the settings page in your WordPress dashboard.

### 5. **What happens if I don’t enter an API key?**

If you choose not to use a ProxyCheck.io API key, the plugin will rely on its internal VPN detection methods. However, using an API key provides more accurate and real-time results.

### 6. **How can I whitelist trusted users or IP ranges?**

You can whitelist specific IPs to ensure trusted users are not blocked, even if they are using a VPN. Similarly, you can blacklist IPs to prevent known bad actors from accessing your site.

## Compatibility

- **WordPress Version**: 5.0 and higher
- **PHP Version**: 7.0 or higher
- **Other Requirements**: None

## Support

For support or feature requests, please open an issue on the [GitHub repository](https://github.com/rupeshkmrshah/).

## Contributing

We welcome contributions! If you'd like to suggest improvements or report a bug, please fork the repository and submit a pull request. Contributions will be reviewed and merged as appropriate.

## License

This plugin is licensed under the [MIT License](LICENSE).

---

**VPN Blocker** helps you protect your website from fraudulent users, spammers, and bots by blocking VPN traffic. Customize messages, use your own API key, and control which pages are accessible to VPN users with ease.

![image](https://github.com/user-attachments/assets/213fca21-7fb7-49c7-b29f-7046f6394db1)
