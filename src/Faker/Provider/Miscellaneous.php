<?php

namespace Faker\Provider;

require_once __DIR__ . '/Base.php';

class Miscellaneous extends \Faker\Provider\Base
{

	/**
	 * @example true
	 */
	public static function boolean()
	{
		return mt_rand(0, 1) == 0 ? true: false;
	}

	/**
	 * @example 'cfcd208495d565ef66e7dff9f98764da'
	 */
	public static function md5()
	{
		return md5(mt_rand());
	}

	/**
	 * @example 'b5d86317c2a144cd04d0d7c03b2b02666fafadf2'
	 */
	public static function sha1()
	{
		return sha1(mt_rand());
	}

	/**
	 * @example '85086017559ccc40638fcde2fecaf295e0de7ca51b7517b6aebeaaf75b4d4654'
	 */
	public static function sha256()
	{
		return hash('sha256', mt_rand());
	}
}