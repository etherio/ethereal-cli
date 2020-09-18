<?php

if (!function_exists('env')) {
    function env($name, $default = null)
    {
	    return $_ENV[$name] ?? getenv($name) ?: $default;
	}
}

if (!function_exists('app')) {
    function app()
	{
		return Ethereal\Foundation\Application::getInstance();
	}
}

if (!function_exists('er_version')) {
    function er_version()
	{
		$version = app()->getVersion();
        $released = date(DATE_RFC7231, app()->getReleased());

		return " version \033[1;33m{$version}\033[0;2m {$released}\033[0m";
	}
}

if (!function_exists('er_name')) {
    function er_name()
	{
		$name = array_map(function ($input) {
		    return " {$input} ";	
		}, explode(' ', app()->getName()));

        return "\033[1;37;44m{$name[0]}\033[1;30;46m{$name[1]}\033[0m";
	}
}



