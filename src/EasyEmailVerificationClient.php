<?php
/**
 * EasyEmailVerificationClient
 *
 * PHP client to interact with the Easy Email Verification API.
 * 
 * Example usage:
 * 
 *   $client = new EasyEmailVerificationClient("your_api_key_here");
 *   $result = $client->verifyEmail("support@example.com");
 *   print_r($result);
 * 
 * Docs: https://eev.stoplight.io/docs/eev/902yv4tm9bfd9-easy-email-verification-api
 * Site: https://www.easyemailverification.com
 */

class EasyEmailVerificationClient {
    private string $apiKey;
    private string $baseUrl = "https://api.easyemailverification.com/v1";

    /**
     * Constructor
     *
     * @param string $apiKey Your Easy Email Verification API key.
     */
    public function __construct(string $apiKey) {
        $this->apiKey = $apiKey;
    }

    /**
     * Verify an email address using the Easy Email Verification API.
     *
     * @param string $email The email address to verify.
     * @return array The decoded JSON response from the API.
     */
    public function verifyEmail(string $email): array {
        $endpoint = sprintf("%s/verify?apikey=%s&email=%s", 
            $this->baseUrl, 
            urlencode($this->apiKey), 
            urlencode($email)
        );

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTPHEADER => [
                "Accept: application/json"
            ],
            CURLOPT_TIMEOUT => 20
        ]);

        $response = curl_exec($ch);
        $curlError = curl_error($ch);
        curl_close($ch);

        if ($curlError) {
            return [
                "success" => false,
                "error" => "cURL Error: " . $curlError
            ];
        }

        $decoded = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                "success" => false,
                "error" => "Invalid JSON response",
                "raw_response" => $response
            ];
        }

        return $decoded;
    }
}
?>
