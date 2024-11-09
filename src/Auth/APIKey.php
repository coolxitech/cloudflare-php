<?php
/**
 * User: junade
 * Date: 13/01/2017
 * Time: 16:55
 */

namespace Cloudflare\API\Auth;

class APIKey implements Auth
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getHeaders(): array
    {
        return [
            'Authorization' => 'Bearer '.$this->apiKey,
        ];
    }
}
