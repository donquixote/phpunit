<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Code;

use PHPUnit\Event\TestDataCollection;
use PHPUnit\Framework\TestCase;
use PHPUnit\Metadata\MetadataCollection;

/**
 * @covers \PHPUnit\Event\Code\TestMethod
 */
final class TestMethodTest extends TestCase
{
    public function testConstructorSetsValues(): void
    {
        $className  = 'ExampleTest';
        $methodName = 'testExample';
        $file       = 'ExampleTest.php';
        $line       = 1;
        $testData   = TestDataCollection::fromArray([]);
        $metadata   = MetadataCollection::fromArray([]);

        $test = new TestMethod(
            $className,
            $methodName,
            $file,
            $line,
            $metadata,
            $testData
        );

        $this->assertSame($className, $test->className());
        $this->assertSame($methodName, $test->methodName());
        $this->assertSame($file, $test->file());
        $this->assertSame($line, $test->line());
        $this->assertSame($metadata, $test->metadata());
        $this->assertSame($testData, $test->testData());
    }
}
