<?php

namespace Olympus\Cloudflare\Tests\Factory;

use Cloudflare\API\Adapter\Guzzle;
use Cloudflare\API\Auth\APIKey;
use Cloudflare\API\Auth\Auth;
use Olympus\Cloudflare\Factory\CloudflareFactory;
use PHPUnit\Framework\TestCase;

class CloudflareFactoryTest extends TestCase
{
    public function testCreateAuth()
    {
        $ob = new CloudflareFactory('test@email.com', 'api');
        $this->assertInstanceOf(APIKey::class, $ob->createAuth());
    }

    public function testCreateAdapter()
    {
        $ob = new CloudflareFactory('test@email.com', 'api');
        $this->assertInstanceOf(Guzzle::class, $ob->createAdapter());
    }
}
