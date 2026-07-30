<?php
/**
 * Tests for TraceBridge
 */

use PHPUnit\Framework\TestCase;
use Tracebridge\Tracebridge;

class TracebridgeTest extends TestCase {
    private Tracebridge $instance;

    protected function setUp(): void {
        $this->instance = new Tracebridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tracebridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
