<?php
/**
 * Tests for LoadBalancer
 */

use PHPUnit\Framework\TestCase;
use Loadbalancer\Loadbalancer;

class LoadbalancerTest extends TestCase {
    private Loadbalancer $instance;

    protected function setUp(): void {
        $this->instance = new Loadbalancer(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Loadbalancer::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
