<?php

class Pagination
{
	public static function create($url, $count, $p = 0, $m = 10)
	{
		$data = array('url' => $url, 'count' => ceil($count / $m), 'p' => $p);
		return Import::view($data, '_snippet', 'pagination');
	}
}