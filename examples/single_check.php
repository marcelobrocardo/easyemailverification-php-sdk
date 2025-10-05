<?php
/**
 * Example: Single Email Verification
 * 
 * Demonstrates how to verify a single email address
 * using the EasyEmailVerificationClient class.
 *
 * Docs: https://eev.stoplight.io/docs/eev/902yv4tm9bfd9-easy-email-verification-api
 * Product: https://www.easyemailverification.com/email-checker
 */

require_once __DIR__ . '/../src/EasyEmailVerificationClient.php';

// 🔑 Replace with your actual API key
$apiKey = "Replace with your actual API key";

// 📨 Email to verify
$emailToCheck = "support@example.com";

// Create client
$client = new EasyEmailVerificationClient($apiKey);

// Call API
$result = $client->verifyEmail($emailToCheck);

// Print formatted result
echo "=== Easy Email Verification - Single Check ===\n";
echo "Email: " . $emailToCheck . "\n";
echo "---------------------------------------------\n";

// Handle missing or malformed responses
if (!is_array($result) || empty($result)) {
    echo "Error: No response received from the API.\n";
    exit;
}

// Handle API or connection errors
if (isset($result['success']) && $result['success'] === false) {
    $message = $result['message'] ?? $result['error'] ?? 'Unknown error.';
    $httpCode = $result['http_code'] ?? 'N/A';
    echo "Error: " . $message . "\n";
    echo "HTTP Code: " . $httpCode . "\n";
    exit;
}

// Print standard response
echo "Status: " . ($result['status'] ?? 'unknown') . "\n";
echo "Domain: " . ($result['domain'] ?? 'N/A') . "\n";
echo "Disposable: " . (($result['is_disposable'] ?? false) ? 'Yes' : 'No') . "\n";
echo "Role-based: " . (($result['is_role_based'] ?? false) ? 'Yes' : 'No') . "\n";
echo "---------------------------------------------\n";
echo "Full Response:\n";
print_r($result);
