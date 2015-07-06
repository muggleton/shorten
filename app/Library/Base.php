<?php
namespace Shorty\Library;

class Base
{
	public static function encode($input)
	{
		return base_convert($input, 10, 36);
	}

	public static function decode($input)
	{
		return base_convert($input, 36, 10);
	}
}