<?php
/**
 * Tests for LedgerTrace
 */

use PHPUnit\Framework\TestCase;
use Ledgertrace\Ledgertrace;

class LedgertraceTest extends TestCase {
    private Ledgertrace $instance;

    protected function setUp(): void {
        $this->instance = new Ledgertrace(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ledgertrace::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
