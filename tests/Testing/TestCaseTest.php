<?php
declare(strict_types=1);

use PhpBM\Testing\TestCase as MyTestCase;

final class EmailTest extends PHPUnit\Framework\TestCase
{
    public function testICanMakeATestCase(): void
    {
      $this->assertInstanceOf(
          MyTestCase::class,
          new MyTestCase('testcase')
      );
    }

    // public function testCannotBeCreatedFromInvalidEmailAddress(): void
    // {
    //     $this->expectException(InvalidArgumentException::class);
    //
    //     Email::fromString('invalid');
    // }
    //
    // public function testCanBeUsedAsString(): void
    // {
    //     $this->assertEquals(
    //         'user@example.com',
    //         Email::fromString('user@example.com')
    //     );
    // }
}
