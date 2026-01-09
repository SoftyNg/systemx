<?php
/**
 * Systemx Helper functions
 * These functions provide shortcuts for common tasks across the Systemx.
 */

// --- 1. SITE INFORMATION & URLS ---

if (!function_exists('site_info')) {
    /**
     * Quickly access site branding constants
     */
    function site_info($key) {
        $info = [
            'name'  => defined('SITE_NAME') ? SITE_NAME : 'InstaInvest',
            'email' => defined('SUPPORT_EMAIL') ? SUPPORT_EMAIL : 'support@instainvest.com.ng',
            'url'   => defined('SITE_URL') ? SITE_URL : 'http://localhost',
        ];
        return $info[$key] ?? null;
    }
}

if (!function_exists('base_url')) {
    /**
     * Generates a full URL for assets or links
     */
    function base_url($path = '') {
        $url = defined('SITE_URL') ? SITE_URL : 'http://localhost';
        return rtrim($url, '/') . '/' . ltrim($path, '/');
    }
}

// --- 2. API & FLUTTER COMMUNICATION ---

if (!function_exists('json_response')) {
    /**
     * Sends a standardized JSON response to your Flutter app
     */
    function json_response($status = true, $message = '', $data = [], $code = 200) {
        header('Content-Type: application/json');
        http_response_code($code);
        
        echo json_encode([
            'status'  => $status,
            'message' => $message,
            'data'    => $data
        ]);
        exit;
    }
}

// --- 3. SECURITY & INPUT HANDLING ---

if (!function_exists('clean')) {
    /**
     * Sanitize user input to prevent XSS and SQL injection basics
     */
    function clean($data) {
        if (is_array($data)) {
            return array_map('clean', $data);
        }
        return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
    }
}

// --- 4. FINANCIAL & DATA FORMATTING ---

if (!function_exists('format_naira')) {
    /**
     * Formats numbers into Nigerian Naira format
     * Example: 5000 -> ₦5,000.00
     */
    function format_naira($amount) {
        return '₦' . number_format((float)$amount, 2, '.', ',');
    }
}

if (!function_exists('get_client_ip')) {
    /**
     * Gets the real IP address of the user (Useful for security logs)
     */
    function get_client_ip() {
        return $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
    }
}