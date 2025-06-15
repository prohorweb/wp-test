<?php
/**
 * WordPress base configuration with your Docker Compose values hardcoded
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 * @package WordPress
 */

// Helper function to read env vars or from *_FILE, fallback to default (kept for flexibility)
if (!function_exists('getenv_docker')) {
    function getenv_docker(string $env, $default = null) {
        $fileEnv = getenv($env . '_FILE');
        if ($fileEnv && is_readable($fileEnv)) {
            return rtrim(file_get_contents($fileEnv), "\r\n");
        }
        $val = getenv($env);
        return ($val !== false) ? $val : $default;
    }
}

// Database settings (hardcoded to your docker-compose values)
define('DB_NAME',     'wordpress');
define('DB_USER',     'wordpress');
define('DB_PASSWORD', 'password');
define('DB_HOST',     'db:3306');
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');

// Authentication unique keys and salts (use your own or generate new ones here)
define('AUTH_KEY',         '51355563ff0d6505a647dabb99777e3012652b69');
define('SECURE_AUTH_KEY',  '6d61dba44bd9716df0b91483b6bbb5ed18480cb0');
define('LOGGED_IN_KEY',    'ad847bafd62ee97e84d86b9464d6e4656317f55d');
define('NONCE_KEY',        '2651c261991679a59c2b391455b6ee4ffcea0a08');
define('AUTH_SALT',        '6c1d5b5f6aea4566dc57c3503629bbe672444a87');
define('SECURE_AUTH_SALT', 'c403000e30b213e3b5a8825f8233a8ebcf5d294d');
define('LOGGED_IN_SALT',   'e88f30d592c5b37fc496f81a266b4613718033d8');
define('NONCE_SALT',       '26c1115ff373845aeb01ef2837c6c8d0b4586670');

// Table prefix
$table_prefix = 'wp_';

// Debug mode
define('WP_DEBUG', false);

/* Custom settings */

// If behind reverse proxy handling HTTPS
// Force SSL for admin and logins (optional)
// define('FORCE_SSL_ADMIN', true);

// Handle reverse proxy HTTPS detection
if (
    (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') ||
    (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
) {
    $_SERVER['HTTPS'] = 'on';
}


/* Stop editing here. */

/** Absolute path to WordPress directory */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Setup WordPress vars and included files */
require_once ABSPATH . 'wp-settings.php';
