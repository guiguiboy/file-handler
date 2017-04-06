<?php

declare(strict_types=1);

namespace Guiguiboy\FileHandler;

use PHPUnit\Framework\TestCase;

class FileHandlerTest extends TestCase
{
    public function testFileHandlerWithUnExistingFile()
    {
        $this->expectException('InvalidArgumentException');
        new FileHandler('./this_file_des_not_exist.txt');
    }

    public function testFileHandler()
    {
        $expected = ['Line 1', 'Line 2', 'Line 3', 'Line 4'];
        $fileHandler = new FileHandler(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'file.txt');

        foreach ($fileHandler->getLines() as $line) {
            $actual[] = trim($line);
        }
        $this->assertSame($expected, $actual);
    }
}
