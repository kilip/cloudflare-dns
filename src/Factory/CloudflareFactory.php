<?php


namespace Olympus\Cloudflare\Factory;


use Cloudflare\API\Adapter\Guzzle;
use Cloudflare\API\Auth\APIKey;
use Cloudflare\API\Auth\Auth;

class CloudflareFactory
{
    private string $email;
    private string $apiKey;

    public function __construct(
        string $email,
        string $apiKey
    )
    {
        $this->email = $email;
        $this->apiKey = $apiKey;
    }

    public function createAuth(): Auth
    {
        return new APIKey($this->email, $this->apiKey);
    }

    public function createAdapter(): Guzzle
    {
        return new Guzzle($this->createAuth());
    }
}