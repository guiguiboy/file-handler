<?php

declare(strict_types=1);

namespace Guiguiboy\FileHandler;

class FileHandler
{
    const LENGTH = 1024;

    /** @var bool|resource */
    protected $resource;

    /**
     * FileHandler constructor.
     * @param string $resourcePath
     */
    public function __construct(string $resourcePath)
    {
        if (!file_exists($resourcePath)) {
            throw new \InvalidArgumentException('Resource not found');
        }
        $this->resource = fopen($resourcePath, 'r');
    }

    public function getLines()
    {
        while (!feof($this->resource)) {
            $line = fgets($this->resource, self::LENGTH);
            if ($line) {
                yield $line;
            }
        }
    }

    public function __destruct()
    {
        fclose($this->resource);
    }
}
