<?php

declare(strict_types=1);

namespace Mjunghanns\Test\Hello\World;

use Mjunghanns\Hello\World\Example;

class ExampleTest extends TestCase
{
    public function testGreet(): void
    {
        $example = $this->mockery(Example::class);
        $example->shouldReceive('greet')->passthru();

        $this->assertSame('Hello, Friends!', $example->greet('Friends'));
    }
}
