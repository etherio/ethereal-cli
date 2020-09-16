<?php

namespace Ethereal\Foundation;

class Application
{
    protected $basePath;

	public function __construct(string $basePath)
    {
	    $this->basePath = realpath($basePath) ?: $basePath;
	}

    public function basePath(string $path = ''): string
    {
	    return $this->basePath . ($path ? DIRECTORY_SEPARATOR . $path : $path);
	}
}
