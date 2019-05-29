<?php
declare(strict_types=1);

namespace Treds\Tests\Email;

use Treds\Email;

final class EmailTest extends AbstractEmailTest
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString($this->getEmail())
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            $this->getEmail(),
            Email::fromString($this->getEmail())
        );
    }
}
