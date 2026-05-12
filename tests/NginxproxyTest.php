<?php
/**
 * Tests for NginxProxy
 */

use PHPUnit\Framework\TestCase;
use Nginxproxy\Nginxproxy;

class NginxproxyTest extends TestCase {
    private Nginxproxy $instance;

    protected function setUp(): void {
        $this->instance = new Nginxproxy(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nginxproxy::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
