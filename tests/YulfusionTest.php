<?php
/**
 * Tests for YulFusion
 */

use PHPUnit\Framework\TestCase;
use Yulfusion\Yulfusion;

class YulfusionTest extends TestCase {
    private Yulfusion $instance;

    protected function setUp(): void {
        $this->instance = new Yulfusion(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Yulfusion::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
