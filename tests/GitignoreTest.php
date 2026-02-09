<?php
/**
 * Tests for GitIgnore
 */

use PHPUnit\Framework\TestCase;
use Gitignore\Gitignore;

class GitignoreTest extends TestCase {
    private Gitignore $instance;

    protected function setUp(): void {
        $this->instance = new Gitignore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gitignore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
