<?php
/**
 * Tests for InputMap
 */

use PHPUnit\Framework\TestCase;
use Inputmap\Inputmap;

class InputmapTest extends TestCase {
    private Inputmap $instance;

    protected function setUp(): void {
        $this->instance = new Inputmap(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Inputmap::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
