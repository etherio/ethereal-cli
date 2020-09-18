<?php

namespace Ethereal\Foundation;

class Application
{
    const APP_NAME = 'Ethereal CLI';

    const APP_VERSION = '1.0.1';

	const APP_VERSION_ID = 10001;

	const APP_RELEASED = 1600446013;

	private static $instance;

    protected $basePath;

	public function __construct(string $basePath)
    {
	    $this->basePath = realpath($basePath) ?: $basePath;
	}

    public function getName()
	{
	    return env('APP_NAME', self::APP_NAME);
	}

    public function getVersion()
	{
	    return self::APP_VERSION;
	}
	
	public function getReleased()
	{
	    return self::APP_RELEASED;
	}	

    public function getVersionId()
	{
	    return self::APP_VERSION_ID;
	}
	
	public function basePath(string $path = ''): string
    {
	    return $this->basePath . ($path ? DIRECTORY_SEPARATOR . $path : $path);
	}

    public static function setInstance(self $app): void
    {
		self::$instance = $app;
	}

    public static function getInstance(): self
    {
		return self::$instance;
	}
}
