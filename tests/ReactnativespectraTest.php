<?php
/**
 * Tests for ReactnativeSpectra
 */

use PHPUnit\Framework\TestCase;
use Reactnativespectra\Reactnativespectra;

class ReactnativespectraTest extends TestCase {
    private Reactnativespectra $instance;

    protected function setUp(): void {
        $this->instance = new Reactnativespectra(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Reactnativespectra::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
