<?php
declare(strict_types=1);

namespace Treds\Tests\Email;

use PHPUnit\Framework\TestCase;

abstract class AbstractEmailTest extends TestCase
{
    /**
     * Return email
     * 
     * @return string
     */
    public function getEmail(): string
    {
        return 'user@example.com';
    }
}
